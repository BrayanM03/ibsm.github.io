<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

include "conexion.php";
date_default_timezone_set('America/Matamoros');

// Nos aseguramos de que cualquier error de SQL lance una excepción
// en vez de fallar en silencio (por si conexion.php no lo hace ya).
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datos = json_decode(file_get_contents('php://input'), true);

if (!$datos) {
    http_response_code(400);
    echo json_encode(['estatus' => false, 'mensaje' => 'No se recibió información válida (JSON vacío o mal formado).']);
    exit;
}

try {
    // Información de la iglesia y el misionero
    $nombre_iglesia      = $datos['nombre_iglesia'] ?? null;
    $direccion_iglesia   = $datos['direccion_iglesia'] ?? null;
    $nombre_completo     = $datos['nombre_completo'] ?? null;
    $edad_misionero      = $datos['edad_misionero'] ?? null;
    $alergias_misionero  = $datos['alergias_misionero'] ?? null;
    $telefono            = $datos['telefono'] ?? null;
    $telefono_2          = $datos['telefono_2'] ?? null;
    $cargo               = $datos['cargo'] ?? null;
    $correo              = $datos['correo'] ?? null;
    $transporte          = $datos['transporte'] ?? null;
    $talla_camisa        = $datos['talla-camisa'] ?? null;
    $acompanantes        = $datos['acompanantes'] ?? null;
    $primera_vez         = $datos['primera-vez'] ?? null;
    $acompanantes_extra  = $acompanantes;

    if (!$nombre_completo || !$edad_misionero) {
        http_response_code(422);
        echo json_encode(['estatus' => false, 'mensaje' => 'Faltan datos obligatorios (nombre o edad).']);
        exit;
    }

    // Días que nos acompañará
    $dias_seleccionados = [];
    if (!empty($datos['dia-visita-19'])) $dias_seleccionados[] = '19';
    if (!empty($datos['dia-visita-20'])) $dias_seleccionados[] = '20';
    if (!empty($datos['dia-visita-21'])) $dias_seleccionados[] = '21';
    if (!empty($datos['dia-visita-22'])) $dias_seleccionados[] = '22';
    if (!empty($datos['dia-visita-23'])) $dias_seleccionados[] = '23';
    $dias = implode(', ', $dias_seleccionados);

    // Padecimientos
    $patologias_seleccionados = [];
    if (!empty($datos['ninguna'])) {
        $patologias_seleccionados[] = 'Ninguna';
    } else {
        if (!empty($datos['diabetes'])) $patologias_seleccionados[] = 'Diabetes';
        if (!empty($datos['artritis'])) $patologias_seleccionados[] = 'Artritis';
        if (!empty($datos['presion_arterial'])) $patologias_seleccionados[] = 'Hipertensión arterial';
        if (!empty($datos['enfermedad_ciatica'])) $patologias_seleccionados[] = 'Enfermedad de la ciatica';
        if (!empty($datos['enfermedad_cardiaca'])) $patologias_seleccionados[] = 'Enfermedad cardiaca';
        if (!empty($datos['osteoporosis'])) $patologias_seleccionados[] = 'Osteoporosis';
    }
    $patologias = implode(', ', $patologias_seleccionados);

    $fecha_registro = date('Y-m-d');
    $hora_registro  = date('h:i:s a');

    // Insertar al misionero
    $sql = "INSERT INTO registro_misioneros (nombre, edad, alergias, numero_telefono, telefono_2, cargo, correo, medio_transporte,
    talla_camisa, nombre_iglesia, direccion_iglesia, acompanantes, acompanantes_extra,
    confirmacion, fecha_registro, hora_registro, dias_visita, patologias, primera_vez, soporte_llegada) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,0,?,?,?,?,?,?)";
    $stmt = $con->prepare($sql);
    $stmt->execute([
        $nombre_completo, $edad_misionero, $alergias_misionero, $telefono, $telefono_2, $cargo, $correo,
        $transporte, $talla_camisa, $nombre_iglesia, $direccion_iglesia, $acompanantes,
        $acompanantes_extra, $fecha_registro, $hora_registro, $dias, $patologias, $primera_vez, 'No'
    ]);
    $id_misionero = (int) $con->lastInsertId();
    $stmt->closeCursor();

    $esposa             = null;
    $hijos              = [];
    $acompanantes_folio = [];

    if (in_array($acompanantes, ['Con esposa e hijos', 'Solo con esposa', 'Solo con hijos'])) {

        if (in_array($acompanantes, ['Con esposa e hijos', 'Solo con esposa'])) {
            $nombre_esposa        = $datos['nombre_esposa'] ?? null;
            $edad_esposa          = $datos['edad_esposa'] ?? null;
            $alergias_esposa      = $datos['alergias_esposa'] ?? null;
            $talla_vestido_esposa = $datos['talla-vestido-esposa'] ?? null;

            $insert = "INSERT INTO registro_esposas(nombre, misionero_id, edad, alergias, talla_vestido, fecha_registro, hora_registro, estatus) VALUES(?,?,?,?,?,?,?, 1)";
            $stmt = $con->prepare($insert);
            $stmt->execute([$nombre_esposa, $id_misionero, $edad_esposa, $alergias_esposa, $talla_vestido_esposa, $fecha_registro, $hora_registro]);
            $stmt->closeCursor();

            $esposa = ['nombre' => $nombre_esposa, 'edad' => $edad_esposa];
        }

        if (in_array($acompanantes, ['Con esposa e hijos', 'Solo con hijos'])) {
            $numero_hijos = (int) ($datos['no_hijos'] ?? 0);
            for ($i = 1; $i <= $numero_hijos; $i++) {
                $nombre_hijo = $datos["nombre_hijo_$i"] ?? null;
                $edad_hijo   = $datos["edad-hijo-$i"] ?? null;

                if ($edad_hijo !== null && $edad_hijo < 12) {
                    $numero_calzado_hijo   = $datos["numero-calzado-hijo-$i"] ?? null;
                    $calzado_talla_mx_hijo = empty($datos["calzado-talla-mx-hijo-$i"]) ? 0 : 1;
                    $calzado_talla_us_hijo = empty($datos["calzado-talla-us-hijo-$i"]) ? 0 : 1;
                } else {
                    $numero_calzado_hijo   = 0;
                    $calzado_talla_mx_hijo = null;
                    $calzado_talla_us_hijo = null;
                }

              
                $query = "INSERT INTO registro_hijos(nombre, misionero_id, edad, numero_calzado, calzado_talla_mx, calzado_talla_usa, fecha_registro, hora_registro, estatus) VALUES (?,?,?,?,?,?,?,?,1)";
                $stmt = $con->prepare($query);
                $stmt->execute([$nombre_hijo, $id_misionero, $edad_hijo, $numero_calzado_hijo, $calzado_talla_mx_hijo, $calzado_talla_us_hijo, $fecha_registro, $hora_registro]);
                $stmt->closeCursor();

                $hijos[] = ['nombre' => $nombre_hijo, 'edad' => $edad_hijo];
            }
        }
    }

    if ($acompanantes_extra == 'Solo con acompañantes') {
        $numero_acomp = (int) ($datos['no_acompanantes'] ?? 0);
        for ($i = 1; $i <= $numero_acomp; $i++) {
            $nombre_acompanante = $datos["nombre_acompanante_$i"] ?? null;
            $edad_acompanante   = $datos["edad-acompanante-$i"] ?? null;

            $query = "INSERT INTO registro_acompanantes(nombre, misionero_id, edad, fecha_registro, hora_registro, estatus) VALUES (?,?,?,?,?,1)";
            $stmt = $con->prepare($query);
            $stmt->execute([$nombre_acompanante, $id_misionero, $edad_acompanante, $fecha_registro, $hora_registro]);
            $stmt->closeCursor();

            $acompanantes_folio[] = ['nombre' => $nombre_acompanante, 'edad' => $edad_acompanante];
        }
    }

    // Datos del folio para el gafete (por si el frontend quiere pintar algo sin recargar)
    $folio = [
        'id'                => $id_misionero,
        'nombre'            => $nombre_completo,
        'iglesia'           => $nombre_iglesia,
        'direccion_iglesia' => $direccion_iglesia,
        'talla'             => $talla_camisa,
        'dias_visita'       => $dias,
        'telefono'          => $telefono,
        'cargo'             => $cargo,
        'esposa'            => $esposa,
        'hijos'             => $hijos,
        'acompanantes'      => $acompanantes_folio,
    ];

    echo json_encode([
        'estatus' => true,
        'mensaje' => 'Registro exitoso',
        'id'      => $id_misionero,
        'folio'   => $folio,
    ]);

} catch (PDOException $e) {
    http_response_code(500);
    error_log('Error al registrar misionero: ' . $e->getMessage());
    echo json_encode(['estatus' => false, 'mensaje' => 'Ocurrió un error al guardar el registro. Intenta de nuevo.', 'error' => $e->getMessage()]);
}
