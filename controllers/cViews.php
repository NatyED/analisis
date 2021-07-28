<?php

class cViews 
{
    static function vContacto (){
        require_once "../views/vContacto.php";

    }
    static function vHabitaciones(){
        require_once "../views/vHabitaciones.php";
    }

    static function vInicio (){
        require_once "../views/vInicio.php";
    }
    static function vInfo(){
        require_once "../views/vInfo.php";
    }
    static function vInicioSesion(){
        require_once "../views/vInicioSesion.php";
    }
    static function vRegistro(){
        require_once "../views/vRegistro.php";
    }
    static function vInicioUsuario(){
        require_once "../views/vInicioUsuario.php";
    }
    static function vCrearReservacion(){
        require_once "../views/vCrearReservacion.php";
    }
    static function vPerfil(){
        require_once "../views/vPerfil.php";
    }
    static function vModificar(){
        require_once "../views/vModificar.php";
    }
    static function vEliminar(){
        require_once "../views/vEliminar.php";
    }

}


if (isset($_POST["action"])){
    switch ($_POST["action"]) {
        case 'viewContacto':
            cViews::vContacto();
            break;
        case 'viewHabitaciones':
            cViews::vHabitaciones();
            break;
        case 'viewInicio':
            cViews::vInicio();
            break;   
        case 'viewInfo':
            cViews::vInfo();
            break; 
        case 'viewPerfil':
            cViews::vInicioSesion();
            break;
        case 'viewRegistro':
            cViews::vRegistro();
            break;
        case 'viewInicioSesion':
            cViews::vInicioUsuario();
            break;
        case 'viewReserva':
            cViews::vCrearReservacion();
            break;
        case 'viewCrearReserva':
            cViews::vInicioUsuario();
            break;
        case 'viewVerPerfil':
            cViews::vPerfil();
            break;
        case 'viewVerReservaciones':
            cViews::vInicioUsuario();
            break;
        case 'viewEditarPerfil':
            cViews::vInicioUsuario();
            break;
        case 'viewVentanaModificar':
            cViews::vModificar();
            break;
        case 'viewVentanaEliminar':
            cViews::vEliminar();
            break;
        default:
            # code...
            break;
    }
}























?>