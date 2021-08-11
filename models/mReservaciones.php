<?php
class mReservaciones
{
public static function VerReservacion($idUsuario,$idReservacion)
{
    try {
        $conexion=mConexion::getConnect();
        $query=$conexion->prepare("CALL SP_VerReservacion(:idUsuario, :idReservacion)");
        $query->bindValue ("idUsuario",$idUsuario);
        $query->bindValue ("idReservacion",$idReservacion);
        $query->execute();
        return $query ->fetch (PDO::FETCH_OBJ);

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
public static function ActualizarReservaciones($idReservacion,$idCliente,$idHabitacion,$idEmpleado,$fechaActual,$fechaEntrada,$fechaSalida)
{
    try {
        $conexion=mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query=$conexion->prepare("CALL SP_ActualizarReservaciones(:idReservacion,:idCliente,:idHabitacion,:idEmpleado,:fechaActual,:fechaEntrada,:fechaSalida)");
        $query->bindValue ("idReservacion",$idReservacion);
        $query->bindValue ("idCliente",$idCliente);
        $query->bindValue ("idHabitacion",$idHabitacion);
        $query->bindValue ("idEmpleado",$idEmpleado);
        $query->bindValue ("fechaActual",$fechaActual);
        $query->bindValue ("fechaEntrada",$fechaEntrada);
        $query->bindValue ("fechaSalida",$fechaSalida);
        $query->execute ();
        $numero = $query -> rowCount(); 
        $conexion -> commit ();
        return $numero;

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
public static function EliminarReservaciones($idUsuario,$idReservacion)
{
    try {
        $conexion=mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query=$conexion->prepare("CALL SP_EliminarReservacion(:idUsuario,:idReservacion)");
        $query->bindValue ("idUsuario",$idUsuario);
        $query->bindValue ("idReservacion",$idReservacion);
        $query->execute ();
        $numero = $query -> rowCount();  
        $conexion -> commit (); 
        return $numero;

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
public static function InsertarReservaciones($idCliente,$idHabitacion,$idEmpleado,$fechaActual,$fechaEntrada,$fechaSalida)
{
    try {
        $conexion=mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query=$conexion->prepare("CALL SP_InsertarReservaciones(:idCliente,:idHabitacion,:idEmpleado,:fechaActual,:fechaEntrada,:fechaSalida)");
        $query->bindValue ("idCliente",$idCliente);
        $query->bindValue ("idHabitacion",$idHabitacion);
        $query->bindValue ("idEmpleado",$idEmpleado);
        $query->bindValue ("fechaActual",$fechaActual);
        $query->bindValue ("fechaEntrada",$fechaEntrada);
        $query->bindValue ("fechaSalida",$fechaSalida);
        $query->execute ();
        $numero = $query -> rowCount(); 
        $conexion -> commit (); 
        return $numero;

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
public static function VerReservacionesUsuario($idUsuario)
{
    try {
        $conexion=mConexion::getConnect();
        $query=$conexion->prepare("CALL SP_VerReservacionesUsuario(:idUsuario)");
        $query->bindValue ("idUsuario",$idUsuario);
        $query->execute ();
        return $query ->fetchAll(PDO::FETCH_OBJ);

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
public static function VerTodasReservaciones()
{
    try {
        $conexion=mConexion::getConnect();
        $query=$conexion->prepare("CALL SP_VerTodasReservaciones()");
        $query->execute ();
        return $query ->fetch (PDO::FETCH_OBJ);

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
}

?>
