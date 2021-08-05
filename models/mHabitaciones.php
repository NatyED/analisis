<?php
class mHabitaciones
{
    public static function VerHabitaciones($idHabitacion)
    {
        try {
            $conexion = mConexion::getConnect();
            $query = $conexion->prepare("CALL SP_VerHabitaciones(:idHabitacion)");
            $query->bindValue("idHabitacion", $idHabitacion);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
    public static function VerTiposHabitaciones($idTipoHabitacion)
    {
        try {
            $conexion = mConexion::getConnect();
            $query = $conexion->prepare("CALL SP_VerTiposHabitaciones(:idTipoHabitacion)");
            $query->bindValue(":idTipoHabitacion", $idTipoHabitacion);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
    public static function EliminarHabitaciones($idHabitacion)
    {
        try {
            $conexion = mConexion::getConnect();
            $conexion->beginTransaction();
            $query = $conexion->prepare("CALL SP_EliminarHabitaciones(:idHabitacion)");
            $query->bindValue(":idHabitacion", $idHabitacion);
            $query->execute();
            $numero = $query->rowCount(); //insertar en todos los delate update e insert 
            $conexion->commit(); //insertar en todos los delate update e insert 
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
            $conexion->beginTransaction();
            $query = $conexion->prepare("CALL SP_EliminarTiposHabitaciones(:idTipoHabitacion)");
            $query->bindValue(":idTipoHabitacion", $idTipoHabitacion);
            $query->execute();
            $numero = $query->rowCount(); //insertar en todos los delate update e insert 
            $conexion->commit(); //insertar en todos los delate update e insert 
            return $numero;
        } catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
    public static function ActualizarHabitaciones($idHabitacion, $idTipoHabitacion, $numero, $precio)
    {
        try {
            $conexion = mConexion::getConnect();
            $conexion->beginTransaction();
            $query = $conexion->prepare("CALL SP_ActualizarHabitaciones(:idTipoHabitacion,:idHabitacion,:numero,:precio)");
            $query->bindValue(":idTipoHabitacion", $idTipoHabitacion);
            $query->bindValue(":idHabitacion", $idHabitacion);
            $query->bindValue(":numero", $numero);
            $query->bindValue(":precio", $precio);
            $query->execute();
            $numero = $query->rowCount(); //insertar en todos los delate update e insert 
            $conexion->commit(); //insertar en todos los delate update e insert 
            return $numero;
        } catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
    public static function ActualizarTiposHabitaciones($idTipoHabitacion, $nombre)
    {
        try {
            $conexion = mConexion::getConnect();
            $conexion->beginTransaction();
            $query = $conexion->prepare("CALL SP_ActualizarTiposHabitaciones(:idTipoHabitacion,:nombre)");
            $query->bindValue(":idTipoHabitacion", $idTipoHabitacion);
            $query->bindValue(":nombre", $nombre);
            $query->execute();
            $numero = $query->rowCount(); //insertar en todos los delate update e insert 
            $conexion->commit(); //insertar en todos los delate update e insert 
            return $numero;
        } catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
    public static function InsertarHabitaciones($idTipoHabitacion, $numero, $precio)
    {
        try {
            $conexion = mConexion::getConnect();
            $conexion->beginTransaction();
            $query = $conexion->prepare("CALL SP_InsertarHabitaciones(:idTipoHabitacion,:precio,:numero)");
            $query->bindValue(":idTipoHabitacion,$idTipoHabitacion");
            $query->bindValue(":precio", $precio);
            $query->bindValue(":numero", $numero);
            $query->execute();
            $numero = $query->rowCount(); //insertar en todos los delate update e insert 
            $conexion->commit(); //insertar en todos los delate update e insert 
            return $numero;
        } catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
    public static function InsertarTiposHabitaciones($nombre)
    {
        try {
            $conexion = mConexion::getConnect();
            $conexion->beginTransaction();
            $query = $conexion->prepare("CALL SP_InsertarTiposHabitaciones(:nombre)");
            $query->bindValue(":nombre", $nombre);
            $query->execute();
            $numero = $query->rowCount(); //insertar en todos los delate update e insert 
            $conexion->commit(); //insertar en todos los delate update e insert 
            return $numero;
        } catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
}
