<?php
class mUsuarios
{
public static function VerUsuario($idUsuario) 
{
    try {
        $conexion = mConexion::getConnect();
        $query = $conexion->prepare("CALL SP_VerUsuario(:idUsuario)");
        $query->bindValue(":idUsuario",$idUsuario);
        $query-> execute ();
        return $query ->fetch (PDO::FETCH_OBJ);

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
Public static function VerTiposUsuarios ($idTipoUsuario)
{
    try {
        $conexion = mConexion::getConnect();
        $query = $conexion->prepare ("CALL SP_VerTiposUsuarios(:idTipoUsuario)");
        $query->bindValue(":idTipoUsuario",$idTipoUsuario);
        $query-> execute ();
        return $query->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }
}
public static function EliminarUsuario($idUsuario)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction (); 
        $query = $conexion->prepare("CALL SP_EliminarUsuarios(:idUsuario)");
        $query->bindValue(":idUsuario",$idUsuario);
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

public static function InsertarEmpleado ($idTipoUsuario,$identificacion,$nombre,$apellidos,$correo,$telefono,$nacionalidad,$genero,$puesto,$salario) 
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction (); 
        $query = $conexion->prepare("CALL SP_InsertarEmpleado(:idTipoUsuario,:identificacion,:nombre,:apellidos,:correo,:telefono,:nacionalidad,:genero,:puesto,:salario)"); 
        $query->bindValue(":idTipoUsuario",$idTipoUsuario);
        $query->bindValue(":identificacion",$identificacion);
        $query->bindValue(":nombre",$nombre);
        $query->bindValue(":apellidos",$apellidos);
        $query->bindValue(":correo",$correo);
        $query->bindValue(":telefono",$telefono);
        $query->bindValue(":nacionalidad",$nacionalidad);
        $query->bindValue(":genero",$genero);
        $query->bindValue(":puesto",$puesto);
        $query->bindValue(":salario",$salario);
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
public static function ActualizarUsuarios ($idUsuario,$idTipoUsuario,$nombre,$apellidos,$correo,$telefono,$nacionalidad,$genero,$puesto,$salario)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_ActualizarUsuarios(:idUsuario,:idTipoUsuario,:nombre,:apellidos,:correo,:telefono,:nacionalidad,:genero,:puesto,:salario)");
        $query->bindValue(":idTipoUsuario",$idTipoUsuario);
        $query->bindValue(":nombre",$nombre);
        $query->bindValue(":apellidos",$apellidos);
        $query->bindValue(":correo",$correo);
        $query->bindValue(":telefono",$telefono);
        $query->bindValue(":nacionalidad",$nacionalidad);
        $query->bindValue(":genero",$genero);
        $query->bindValue(":puesto",$puesto);
        $query->bindValue(":salario",$salario);
        $query->bindValue(":idUsuario",$idUsuario);
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
public static function ActualizarTiposUsuarios ($idTipoUsuario,$nombre)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_ActualizarTiposHabitaciones(:idTipoUsuario,:nombre)");
        $query->bindValue(":idTipoUsuario",$idTipoUsuario);
        $query->bindValue(":nombre",$nombre);
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
public static function EliminarTiposUsuarios($idTipoUsuario)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_EliminarTiposUsuarios(:idTipoUsuario)");
        $query->bindValue(":idTipoUsuario",$idTipoUsuario);
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

public static function InsertarTiposUsuarios($nombre)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_InsertarTiposUsuarios(:nombre)");
        $query->bindValue(":nombre",$nombre);
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
    public static function VerTodosUsuarios($idTipoUsuario)
    {
        try {
            $conexion = mConexion::getConnect();
            $query = $conexion->prepare("CALL SP_VerTodosUsuarios(:idTipoUsuario)");
            $query->bindValue(":idTipoUsuario",$idTipoUsuario);
            $query-> execute ();
            return $query ->fetchAll(PDO::FETCH_OBJ);
    
        }catch (PDOException $e) {
            $conexion->rollBack();
            throw $e;
            return "Se ha presentado un error " . $e->getMessage();
        }
    }
    public static function IniciarSesion($correo) 
{
    try {
        $conexion = mConexion::getConnect();
        $query = $conexion->prepare("CALL SP_IniciarSesion(:correo)");
        $query->bindValue(":correo",$correo);
        $query-> execute ();
        return $query ->fetch (PDO::FETCH_OBJ);

    }catch (PDOException $e) {
        $conexion->rollBack();
        throw $e;
        return "Se ha presentado un error " . $e->getMessage();
    }

}

public static function InsertarCliente ($idTipoUsuario,$identificacion,$nombre,$apellidos,$correo,$telefono,$nacionalidad,$genero) 
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_InsertarCliente(:idTipoUsuario,:identificacion,:nombre,:apellidos,:correo,:telefono,:nacionalidad,:genero)"); 
        $query->bindValue(":idTipoUsuario",$idTipoUsuario);
        $query->bindValue(":identificacion",$identificacion);
        $query->bindValue(":nombre",$nombre);
        $query->bindValue(":apellidos",$apellidos);
        $query->bindValue(":correo",$correo);
        $query->bindValue(":telefono",$telefono);
        $query->bindValue(":nacionalidad",$nacionalidad);
        $query->bindValue(":genero",$genero);
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
public static function RecuperarContrasena($identificacion,$correo,$telefono,$contrasena)
{
    try {
        $conexion = mConexion::getConnect();
        $conexion -> beginTransaction ();
        $query = $conexion->prepare("CALL SP_RecuperarContrasena(:identificacion,:correo,:telefono,:contrasena)");
        $query->bindValue(":identificacion",$identificacion);
        $query->bindValue(":correo",$correo);
        $query->bindValue(":telefono",$telefono);
        $query->bindValue(":contrasena",$contrasena);
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