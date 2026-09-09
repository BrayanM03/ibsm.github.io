<?php
session_start();
date_default_timezone_set('America/Matamoros'); 
require_once 'config/config.php';


// Obtener la URL, por ejemplo: "usuarios/editar/6"
$url = isset($_GET['url']) ? $_GET['url'] : 'inicio';
$datos = explode('/', $url);

$modulo = $datos[0];
$accion = isset($datos[1]) ? $datos[1] : null;
$id     = isset($datos[2]) ? $datos[2] : null;

$vista_a_cargar = "";

$titulo_pagina = "Colefy";
//ROUTER
switch ($modulo) {

    case 'folio':
        $_GET['id'] = $id; // Pasar el ID a la vista
        $titulo_pagina = 'Folio #' . $id;
        $vista_a_cargar = 'views/folio.php';
    break;

    case 'inicio':     
        $titulo_vista = 'Inicio';
        $vista_a_cargar = 'views/inicio.php';
    break;

    case 'creencias':     
        $titulo_vista = 'Creencias';
        $vista_a_cargar = 'views/creencias.php';
    break;

    case 'misiones':     
        $titulo_vista = 'Misiones';
        $vista_a_cargar = 'views/misiones.php';
    break;

    case 'misiones_2026':     
        $titulo_vista = 'Conferencia misionera 2026';
        $vista_a_cargar = 'views/misiones_2026.php';
    break;

    case 'infantil':     
        $titulo_vista = 'Departamento infantil';
        $vista_a_cargar = 'views/infantil.php';
    break;

    case 'jovenes':     
        $titulo_vista = 'Servicio de jovenes';
        $vista_a_cargar = 'views/jovenes.php';
    break;

    case 'campamentos':     
        $titulo_vista = 'Campamentos';
        $vista_a_cargar = 'views/campamentos.php';
    break;

    case 'rutas':     
        $titulo_vista = 'Rutas de transporte';
        $vista_a_cargar = 'views/rutas.php';
    break;

      default:
        $titulo_pagina = 'Pagina no encontrada 404';
        $vista_a_cargar = 'views/error/not_found.php';
        break;
    }

        
if (file_exists($vista_a_cargar)) {
        include $vista_a_cargar;
    } else {
        echo "El archivo $vista_a_cargar no existe.";
    }
