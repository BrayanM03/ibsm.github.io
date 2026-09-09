<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

include "conexion.php";
date_default_timezone_set('America/Matamoros');

$datos = json_decode(file_get_contents('php://input'), true);

// Información de la iglesia y el misionero
$nombre_iglesia = $datos['nombre_iglesia'];
$direccion_iglesia = $datos['direccion_iglesia'];
$nombre_completo = $datos['nombre_completo'];
$edad_misionero = $datos['edad_misionero'];
$alergias_misionero = $datos['alergias_misionero'];
$telefono = $datos['telefono'];
$telefono_2 = $datos['telefono_2'];
$cargo = $datos['cargo'];
$correo = $datos['correo'];
$transporte = $datos['transporte'];
$talla_camisa = $datos['talla-camisa'];
$acompanantes = $datos['acompanantes'];
$primera_vez = $datos['primera-vez'];
$acompanantes_extra = isset($datos['acompanantes']) ? $datos['acompanantes'] : null;

//dias que nos acompañara
$dias_seleccionados = [];

if (!empty($datos['dia-visita-19'])) $dias_seleccionados[] = '19';
if (!empty($datos['dia-visita-20'])) $dias_seleccionados[] = '20';
if (!empty($datos['dia-visita-21'])) $dias_seleccionados[] = '21';
if (!empty($datos['dia-visita-22'])) $dias_seleccionados[] = '22';
if (!empty($datos['dia-visita-23'])) $dias_seleccionados[] = '23';

$dias = implode(', ', $dias_seleccionados);

//dias que nos acompañara
$patologias_seleccionados = [];

if (!empty($datos['ninguna'])){
    $patologias_seleccionados[] = 'Ninguna';
} else{
    if (!empty($datos['diabetes'])) $patologias_seleccionados[] = 'Diabetes';
    if (!empty($datos['artritis'])) $patologias_seleccionados[] = 'Artritis';
    if (!empty($datos['presion_arterial'])) $patologias_seleccionados[] = 'Hipertensión arterial';
    if (!empty($datos['enfermedad_ciatica'])) $patologias_seleccionados[] = 'Enfermedad de la ciatica';
    if (!empty($datos['enfermedad_cardiaca'])) $patologias_seleccionados[] = 'Enfermedad cardiaca';
    if (!empty($datos['osteoporosis'])) $patologias_seleccionados[] = 'Osteoporosis';
}

$patologias = implode(', ', $patologias_seleccionados);



$fecha_registro = date('Y-m-d');
$hora_registro = date('h:i:s a');

// Insertar los datos en la tabla de solicitudes
try {
$sql = "INSERT INTO registro_misioneros (nombre, edad, alergias, numero_telefono, telefono_2, cargo, correo, medio_transporte,
talla_camisa, nombre_iglesia, direccion_iglesia, acompanantes, acompanantes_extra, 
confirmacion, fecha_registro, hora_registro, dias_visita, patologias, primera_vez, soporte_llegada) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,0,?,?,?,?,?,?)";
$stmt = $con->prepare($sql);
$stmt->execute([$nombre_completo,
$edad_misionero,
$alergias_misionero,
$telefono,
$telefono_2,
$cargo,
$correo,
$transporte,
$talla_camisa,
$nombre_iglesia,
$direccion_iglesia,
$acompanantes,
$acompanantes_extra,
$fecha_registro,
$hora_registro,
$dias,
$patologias,
$primera_vez,
'No']);
$id_misionero = $con->lastInsertId();
$stmt->closeCursor();

if($acompanantes=='Con esposa e hijos' || $acompanantes=='Solo con esposa' || $acompanantes == 'Solo con hijos'){
    
    if($acompanantes=='Con esposa e hijos' || $acompanantes=='Solo con esposa'){

    
    // Información de la esposa
    $nombre_esposa = $datos['nombre_esposa'];
    $edad_esposa = $datos['edad_esposa'];
    $alergias_esposa = $datos['alergias_esposa'];
    $talla_vestido_esposa = $datos['talla-vestido-esposa'];

    $insert = "INSERT INTO registro_esposas(nombre, misionero_id, edad, alergias, talla_vestido, fecha_registro, hora_registro, estatus) VALUES(?,?,?,?,?,?,?, 1)";
    $stmt = $con->prepare($insert);
    $stmt->execute([
        $nombre_esposa,
        $id_misionero,
        $edad_esposa,
        $alergias_esposa,
        $talla_vestido_esposa,
        $fecha_registro,
        $hora_registro
    ]);
    $stmt->closeCursor();
    }


    // Información de los hijos
    if($acompanantes == 'Con esposa e hijos' || $acompanantes == 'Solo con hijos'){
        $numero_hijos = $datos['no_hijos'];
        if($numero_hijos > 0){

        for ($i = 1; $i <= $numero_hijos; $i++) {
            $nombre_hijo = $datos["nombre_hijo_$i"];
            $edad_hijo = $datos["edad-hijo-$i"];
            if($edad_hijo < 12){
                $numero_calzado_hijo = $datos["numero-calzado-hijo-$i"];
                $calzado_talla_mx_hijo = $datos["calzado-talla-mx-hijo-$i"]==false ? 0 : 1;
                $calzado_talla_us_hijo = $datos["calzado-talla-us-hijo-$i"]== false ? 0 : 1;
            }else{
                $numero_calzado_hijo =0;
                $calzado_talla_mx_hijo =null;
                 $calzado_talla_us_hijo = null;
            }
            
            $query = "INSERT INTO registro_hijos(nombre, misionero_id,
             edad, numero_calzado, calzado_talla_mx, calzado_talla_usa, fecha_registro, hora_registro, estatus) VALUES (?,?,?,?,?,?,?,?,1)";
            $stmt = $con->prepare($query);
            $stmt->execute([
                $nombre_hijo,
                $id_misionero,
                $edad_hijo,
                $numero_calzado_hijo,
                $calzado_talla_mx_hijo,
                $calzado_talla_us_hijo,
                $fecha_registro,
                $hora_registro
            ]);
        }
        }
    }
    
}

if($acompanantes_extra == 'Solo con acompañantes'){
    $numero_acomp = $datos['no_acompanantes'];
    if($numero_acomp > 0){

        for ($i = 1; $i <= $numero_acomp; $i++) {
            $nombre_acompanante = $datos["nombre_acompanante_$i"];
            $edad_acompanante = $datos["edad-acompanante-$i"];

            $query = "INSERT INTO registro_acompanantes(nombre, misionero_id,
             edad, fecha_registro, hora_registro, estatus) VALUES (?,?,?,?,?,1)";
            $stmt = $con->prepare($query);
            $stmt->execute([
                $nombre_acompanante,
                $id_misionero,
                $edad_acompanante,
                $fecha_registro,
                $hora_registro
            ]);
        }
    }
}
$response = array('estatus'=>true, 'mensaje'=>'Registro exitoso');

} catch (PDOException $e) {
        http_response_code(500);
        error_log($e->getMessage());

    $response = array('estatus'=>false, 'mensaje'=>'Error al registrar: ' . $e->getMessage());
}
echo json_encode($response);

?>