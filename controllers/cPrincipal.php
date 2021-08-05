<?php
session_start();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'viewHabitaciones':
            require_once 'cViews.php';
            cViews::Vhabitaciones();
            break;
        case 'viewInicio':
            require_once 'cViews.php';
            cViews::vInicio();
            break;
        case 'viewInfo':
            require_once 'cViews.php';
            cViews::vInfo();
            break;
        case 'viewIniciarSesion':
            require_once 'cViews.php';
            cViews::vInicioSesion();
            break;
        case 'viewRegistro':
            require_once 'cViews.php';
            cViews::vRegistro();
            break;
        case 'viewPerfil':
            require_once 'cViews.php';
            cViews::vPerfil();
            break;
        case 'IniciarSesion':
            require_once 'cUsuarios.php';
            require_once 'cViews.php';
            $response = cUsuarios::iniciarSesion($_POST["datos"]["correoSesion"], $_POST["datos"]["contrasenaSesion"]);
            echo json_encode($response);
            break;
        case 'RegistrarUsuario':
            require_once 'cUsuarios.php';
            require_once 'cViews.php';
            $response = cUsuarios::registrarUsuario($_POST["datos"]["identificacionRegistro"], $_POST["datos"]["nombreRegistro"],$_POST["datos"]["apellidosRegistro"], $_POST["datos"]["correoRegistro"], $_POST["datos"]["telefonoRegistro"], $_POST["datos"]["nacionalidadRegistro"], $_POST["datos"]["generoRegistro"]);
            echo json_encode($response);
            break;
        default:
            # code...
            break;
    }
} else {
    require_once './views/vIndex.php';
}
