<?php
class cReservaciones{

    static function VerReservacionesUsuario($idUsuario){
        require_once './models/mConexion.php';
        require_once './models/mReservaciones.php';

        $reservaciones = mReservaciones::VerReservacionesUsuario($idUsuario);
        return $reservaciones;
    }
    static function VerReservacion($idUsuario,$idReservacion)
    {
        require_once './models/mConexion.php';
        require_once './models/mReservaciones.php';

        $reservacion = mReservaciones::VerReservacion($idUsuario,$idReservacion);
        if($reservacion != false){
            $response["reservacion"] = true;
            $response["msg"] = "";
            $_SESSION['reservacion'] = (array) $reservacion;
        } else {
            $response["reservacion"] = false;
            $response["msg"] = "Reservacion invalida. Recargue la pagina e intente nuevamente.";
        }
        return $response;
    }
    static function CrearReservacion($idUsuario,$idHabitacion,$fechaActual,$fechaEntrada,$fechaSalida)
    {
        require_once './models/mConexion.php';
        require_once './models/mReservaciones.php';
        if(strtotime($fechaEntrada)!=false && strtotime($fechaSalida)!= false){
            $reservacion = mReservaciones::InsertarReservaciones($idUsuario, $idHabitacion,$idUsuario,$fechaActual, $fechaEntrada, $fechaSalida);  
        }else{
            $reservacion=2;
            $response["reservacion"] = false;
            $response["msg"] = "Error al crear la reservacion. Revise las fechas indicadas.";
        }
        if($reservacion == 1){
            $response["reservacion"] = true;
            $response["msg"] = "Reservacion creada con exito.";
        } else if ($reservacion == 0) {
            $response["reservacion"] = false;
            $response["msg"] = "Error al crear la reservacion. Recargue la pagina e intente nuevamente.";
        }
        return $response;
    }
    static function ModificarReservacion($idReservacion, $idCliente, $idHabitacion, $idEmpleado, $fechaActual,$fechaEntrada, $fechaSalida)
    {
        require_once './models/mConexion.php';
        require_once './models/mReservaciones.php';

        $reservacion = mReservaciones::ActualizarReservaciones($idReservacion, $idCliente, $idHabitacion, $idEmpleado,$fechaActual, $fechaEntrada, $fechaSalida);
        //var_dump($reservacion);
        if($reservacion == 3 || $reservacion == 2){
            $_SESSION['reservacion'] = null;
            $response["reservacion"] = true;
            $response["msg"] = "Reservacion modificada con exito.";
        } else {
            $response["reservacion"] = false;
            $response["msg"] = "Habitacion no disponible en las fechas indicadas.";
        }
        return $response;
    }
    static function EliminarReservacion($idUsuario,$idReservacion)
    {
        require_once './models/mConexion.php';
        require_once './models/mReservaciones.php';

        $reservacion = mReservaciones::EliminarReservaciones($idUsuario,$idReservacion);
        if($reservacion == 1){
            $_SESSION['reservacion'] = null;
            $response["reservacion"] = true;
            $response["msg"] = "Reservacion eliminada con exito.";
        } else {
            $response["reservacion"] = false;
            $response["msg"] = "Error al eliminar reservacion. Recargue la pagina e intente nuevamente.";
        }
        return $response;
    }
}