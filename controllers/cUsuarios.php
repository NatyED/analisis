<?php
class cUsuarios
{
    public static function iniciarSesion($correo,$contrasena)
    {
        require_once './models/mConexion.php';
        require_once './models/mUsuarios.php';
        $comprobacion = mUsuarios::IniciarSesion($correo);
        if ($comprobacion != false) {
            if (password_verify($contrasena, $comprobacion->contrasena)) {
                $_SESSION = (array) mUsuarios::VerUsuario($comprobacion->idUsuario);
                $response["access"] = true;
                $response["msg"]="";
            } else {
                $response["access"] = false;
                $response["msg"]="Contraseña incorrecta.";
            }
        }else{
            $response["access"] = false;
            $response["msg"]="Correo no registrado.";
        }
        return $response;
    }
    public static function registrarUsuario($identificacion,$nombreRegistro,$apellidosRegistro,$correoRegistro,$telefonoRegistro,$nacionalidadRegistro, $generoRegistro)
    {
        require_once './models/mConexion.php';
        require_once './models/mUsuarios.php';
        $comprobacion = mUsuarios::InsertarCliente(3,$identificacion,$nombreRegistro,$apellidosRegistro,$correoRegistro,$telefonoRegistro,$nacionalidadRegistro,$generoRegistro);
        //var_dump($comprobacion==1);
        if ($comprobacion == 1) {
            /*$terminarRegistro = mUsuarios::RecuperarContrasena();
            if (password_verify($contrasena, $comprobacion->contrasena)) {
                $_SESSION = (array) mUsuarios::VerUsuarios($comprobacion->idUsuario);
                $response["access"] = true;
                $response["msg"] = "";
            } else {
                $response["access"] = false;
                $response["msg"] = "Contraseña incorrecta.";
            }*/
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
}
