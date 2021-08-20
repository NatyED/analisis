<?php
class cUsuarios
{
    public static function iniciarSesion($correo, $contrasena)
    {
        require_once './models/mConexion.php';
        require_once './models/mUsuarios.php';
        $comprobacion = mUsuarios::IniciarSesion($correo);
        if ($comprobacion != false) {
            if (password_verify($contrasena, $comprobacion->contrasena)) {
                $_SESSION = (array) mUsuarios::VerUsuario($comprobacion->idUsuario);
                $response["access"] = true;
                $response["msg"] = "";
            } else {
                $response["access"] = false;
                $response["contrasena"] = true;
                $response["msg"] = "Contraseña incorrecta.";
            }
        } else {
            $response["access"] = false;
            $response["contrasena"] = false;
            $response["msg"] = "Correo no registrado.";
        }
        return $response;
    }
    public static function registrarUsuario($identificacion, $nombreRegistro, $apellidosRegistro, $correoRegistro, $telefonoRegistro, $nacionalidadRegistro, $generoRegistro)
    {
        require_once './models/mConexion.php';
        require_once './models/mUsuarios.php';
        $comprobacion = mUsuarios::InsertarCliente("3", $identificacion, $nombreRegistro, $apellidosRegistro, $correoRegistro, $telefonoRegistro, $nacionalidadRegistro, $generoRegistro);
        if ($comprobacion == 1) {
            $_SESSION["identificacion"] = $identificacion;
            $_SESSION["correoRegistro"] = $correoRegistro;
            $_SESSION["telefonoRegistro"] = $telefonoRegistro;

            $response["registro"] = true;
            $response["msg"] = "El usuario a sido registrado con exito.";
        } else {
            $response["registro"] = false;
            $response["msg"] = "Ha ocurrido un error al registrar el usuario. Verifique los datos e intente nuevamente.";
            //Variable debug
            //$response["msg"] = $comprobacion;
        }
        return $response;
    }
    public static function ActualizarCliente($idUsuario,$identificacion, $nombre, $apellidos, $correo, $telefono, $nacionalidad, $genero)
    {
        require_once './models/mConexion.php';
        require_once './models/mUsuarios.php';
        $comprobacion = mUsuarios::ActualizarCliente($idUsuario, $identificacion,$nombre, $apellidos, $correo, $telefono, $nacionalidad, $genero);
        if ($comprobacion == 1) {
            $_SESSION = (array) mUsuarios::VerUsuario($_SESSION["idUsuario"]);
            $response["registro"] = true;
            $response["msg"] = "El usuario a sido actualizado con exito.";
        } else {
            $response["registro"] = false;
            $response["msg"] = "Ha ocurrido un error al actualizar el usuario. Verifique los datos e intente nuevamente.";
            //Variable debug
            //$response["msg"] = $comprobacion;
        }
        return $response;
    }
    public static function recuperarContrasena($identificacion, $correo, $telefono, $contrasena)
    {
        require_once './models/mConexion.php';
        require_once './models/mUsuarios.php';
        $comprobacion = mUsuarios::recuperarContrasena($identificacion, $correo, $telefono, password_hash($contrasena, PASSWORD_DEFAULT));
        if ($comprobacion == 1) {
            $response["registro"] = true;
            $response["msg"] = "La contraseña a sido registrado con exito.";
            $usuario = mUsuarios::IniciarSesion($correo);
            if ($usuario != false) {
                if (password_verify($contrasena, $usuario->contrasena)) {
                    $_SESSION = (array) mUsuarios::VerUsuario($usuario->idUsuario);
                    $response["access"] = true;
                }
            } else {
                $response["registro"] = false;
                $response["msg"] = "Ha ocurrido un error al registrar la contraseña. Verifique los datos e intente nuevamente.";
                //Variable debug
                //$response["msg"] = $comprobacion;
            }
            return $response;
        }
    }
}
