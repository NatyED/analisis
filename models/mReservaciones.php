<?php
class mReservaciones
{
public static function VerReservacion($idReservacion)
{
    try {
        $conexion=mConexion::getConnect();
        $query=$conexion->prepare("CALL SP_VerReservacion(:idReservacion)");
        $query->bindValue ("idReservacion",$idReservacion);
        $query->execute ();
        return $query ->fetch (PDO::FETCH_OBJ);

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
public static function ActualizarReservaciones($idReservacion,$idCliente,$idHabitacion,$idEmpleado,$fechaEntrada,$fechaSalida)
{
    try {
        $conexion=mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query=$conexion->prepare("CALL SP_ActualizarReservaciones(:idReservacion,:idCliente,:idHabitacion,:idEmpleado,:fechaEntrada,:fechaSalida)");
        $query->bindValue ("idReservacion",$idReservacion);
        $query->bindValue ("idCliente",$idCliente);
        $query->bindValue ("idHabitacion",$idHabitacion);
        $query->bindValue ("idEmpleado",$idEmpleado);
        $query->bindValue ("fechaEntrada",$fechaEntrada);
        $query->bindValue ("fechaSalida",$fechaSalida);
        $query->execute ();
        $numero = $query -> rowCount(); //insertar en todos los delate update e insert 
        $conexion -> commit (); //insertar en todos los delate update e insert 
        return $numero;

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
public static function EliminarReservaciones($idReservacion)
{
    try {
        $conexion=mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query=$conexion->prepare("CALL SP_EliminarReservaciones(:idReservacion)");
        $query->bindValue ("idReservacion",$idReservacion);
        $query->execute ();
        $numero = $query -> rowCount(); //insertar en todos los delate update e insert 
        $conexion -> commit (); //insertar en todos los delate update e insert 
        return $numero;

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
public static function InsertarReservaciones($idReservacion,$idCliente,$idHabitacion,$idEmpleado,$fechaEntrada,$fechaSalida)
{
    try {
        $conexion=mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query=$conexion->prepare("CALL SP_InsertarReservaciones(:idReservacion,:idCliente,:idHabitacion,:idEmpleado,:fechaEntrada,:fechaSalida)");
        $query->bindValue ("idReservacion",$idReservacion);
        $query->bindValue ("idCliente",$idCliente);
        $query->bindValue ("idHabitacion",$idHabitacion);
        $query->bindValue ("idEmpleado",$idEmpleado);
        $query->bindValue ("fechaEntrada",$fechaEntrada);
        $query->bindValue ("fechaSalida",$fechaSalida);
        $query->execute ();
        $numero = $query -> rowCount(); //insertar en todos los delate update e insert 
        $conexion -> commit (); //insertar en todos los delate update e insert 
        return $numero;

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
}

?>
