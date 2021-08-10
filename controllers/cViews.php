<?php

class cViews 
{
    static function vSeleccionarHabitacion ($habitaciones, $tiposHabitaciones){
        require_once "./views/vSeleccionarHabitacion.php";
    }
    static function vContacto (){
        require_once "./views/vContacto.php";
    }
    static function vHabitaciones(){
        require_once "./views/vHabitaciones.php";
    }
    static function vInicio (){
        require_once "./views/vInicio.php";
    }
    static function vInfo(){
        require_once "./views/vInfo.php";
    }
    static function vInicioSesion(){
        require_once "./views/vInicioSesion.php";
    }
    static function vRegistro(){
        require_once "./views/vRegistro.php";
    }
    static function vInicioUsuario(){
        require_once "./views/vInicioUsuario.php";
    }
    static function vCrearReservacion($tiposHabitaciones){
        require_once "./views/vCrearReservacion.php";
    }
    static function vPerfil(){
        require_once "./views/vPerfil.php";
    }
    static function vModificar($habitaciones,$tiposHabitaciones){
        require_once "./views/vModificar.php";
    }
    static function vEliminar($tiposHabitaciones){
    require_once "./views/vEliminar.php";
    }
    static function vRecuperarContrasena(){
    require_once "./views/vReContrasena.php";
    }

}
