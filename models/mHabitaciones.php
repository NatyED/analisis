<?php
class mHabitaciones
{
  
    public static function VerTiposHabitaciones ($idTipoHabitacion)
    {
        try {
            $conexion = mConexion::getConnect();
            $query = $conexion->prepare ("CALL SP_VerTiposHabitaciones(:idTipoHabitacion)");
            $query->bindValue(":idTipoHabitacion",$idTipoHabitacion);
            $query->execute ();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
    public static function VerHabitacionesDisponibles ($idTipoHabitacion,$fechaEntrada,$fechaSalida)
    {
        try {
            $conexion = mConexion::getConnect();
           // $conexion -> beginTransaction ();
            $query = $conexion->prepare ("CALL SP_VerHabitacionesDisponibles(:idTipoHabitacion,:fechaEntrada,:fechaSalida)");
            $query->bindValue(":idTipoHabitacion",$idTipoHabitacion);
            $query->bindValue(":fechaEntrada",$fechaEntrada);
            $query->bindValue(":fechaSalida",$fechaSalida);
            $query->execute ();
            //$conexion -> commit (); 
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
    public static function EliminarHabitaciones($idHabitacion)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_EliminarHabitaciones(:idHabitacion)");
        $query->bindValue(":idHabitacion",$idHabitacion);
        $query-> execute ();
        $numero = $query -> rowCount();
        $conexion -> commit (); 
        return $numero;

    } catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();

    }
}
public static function EliminarTiposHabitaciones($idTipoHabitacion)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_EliminarTiposHabitaciones(:idTipoHabitacion)");
        $query->bindValue(":idTipoHabitacion",$idTipoHabitacion);
        $query-> execute ();
        $numero = $query -> rowCount(); 
        $conexion -> commit ();
        return $numero;

    } catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();

    }
}
public static function ActualizarHabitaciones($idHabitacion,$idTipoHabitacion,$numero)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_ActualizarHabitaciones(:idTipoHabitacion,:idHabitacion,:numero)");
        $query->bindValue(":idTipoHabitacion",$idTipoHabitacion);
        $query->bindValue(":idHabitacion",$idHabitacion);
        $query->bindValue(":numero",$numero);
        $query-> execute ();
        $numero = $query -> rowCount();
        $conexion -> commit (); 
        return $numero;

    } catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();

    }
}
public static function ActualizarTiposHabitaciones($idTipoHabitacion,$nombre,$precio)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_ActualizarTiposHabitaciones(:idTipoHabitacion,:nombre,:precio)");
        $query->bindValue(":idTipoHabitacion",$idTipoHabitacion);
        $query->bindValue(":nombre",$nombre);
        $query->bindValue(":precio",$precio);
        $query-> execute ();
        $numero = $query -> rowCount(); 
        $conexion -> commit (); 
        return $numero;

    } catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();

    }
}
public static function InsertarHabitaciones($idTipoHabitacion,$numero)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_InsertarHabitaciones(:idTipoHabitacion,:numero)");
        $query->bindValue(":idTipoHabitacion,$idTipoHabitacion");
        $query->bindValue(":numero",$numero);
        $query-> execute ();
        $numero = $query -> rowCount();
        $conexion -> commit ();  
        return $numero;

    } catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();

    }
}
public static function InsertarTiposHabitaciones($nombre,$precio)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_InsertarTiposHabitaciones(:nombre,:precio)");
        $query->bindValue(":nombre",$nombre);
        $query->bindValue(":precio",$precio);
        $query-> execute ();
        $numero = $query -> rowCount(); 
        $conexion -> commit ();  
        return $numero;

    } catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();

    }
}
}
?>


