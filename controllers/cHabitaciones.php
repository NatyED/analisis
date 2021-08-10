<?php
class cHabitaciones{
    public static function VerTiposHabitaciones($idTipoHabitacion){
        require_once './models/mConexion.php';
        require_once './models/mHabitaciones.php';

        $tiposHabitaciones = mHabitaciones::VerTiposHabitaciones($idTipoHabitacion);
        return $tiposHabitaciones;
    }
    
    public static function VerHabitacionesDisponibles($idTipoHabitacion,$fechaEntrada,$fechaSalida){
        
        require_once './models/mConexion.php';
        require_once './models/mHabitaciones.php';
        $tiposHabitaciones = mHabitaciones::VerHabitacionesDisponibles($idTipoHabitacion, $fechaEntrada, $fechaSalida);
        return $tiposHabitaciones;
    }
}