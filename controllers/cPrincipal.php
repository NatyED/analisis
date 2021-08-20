<?php
session_start();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
            //Vistas
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
        case 'viewRecuperarContrasena':
            require_once 'cViews.php';
            cViews::vRecuperarContrasena();
            break;
        case 'viewPerfil':
            require_once 'cViews.php';
            cViews::vPerfil();
            break;
        case 'viewCrearReservacion':
            require_once 'cViews.php';
            require_once 'cHabitaciones.php';
            $tiposHabitaciones = cHabitaciones::VerTiposHabitaciones(0);
            cViews::vCrearReservacion($tiposHabitaciones);
            break;
        case 'viewModificarReservacion':
            require_once 'cViews.php';
            require_once 'cHabitaciones.php';
            $habitaciones = cHabitaciones::VerHabitacionesDisponibles($_SESSION["reservacion"]["idTipoHabitacion"], $_SESSION["reservacion"]["fechaEntrada"], $_SESSION["reservacion"]["fechaSalida"]);
            $tiposHabitaciones = cHabitaciones::VerTiposHabitaciones(0);
            cViews::vModificar($habitaciones,$tiposHabitaciones);
            break;
        case 'viewEliminarReservacion':
            require_once 'cViews.php';
            require_once 'cHabitaciones.php';
            $tiposHabitaciones = cHabitaciones::VerTiposHabitaciones(0);
            cViews::vEliminar($tiposHabitaciones);
            break;

            //cUsuario
        case 'IniciarSesion':
            require_once 'cUsuarios.php';
            $response = cUsuarios::iniciarSesion($_POST["datos"]["correoSesion"], $_POST["datos"]["contrasenaSesion"]);
            echo json_encode($response);
            break;
        case 'cerrarSesion':
            session_unset();
            session_reset();
            session_destroy();
            echo json_encode(true);
            break;
        case 'RegistrarUsuario':
            require_once 'cUsuarios.php';
            $response = cUsuarios::registrarUsuario($_POST["datos"]["identificacionRegistro"], $_POST["datos"]["nombreRegistro"], $_POST["datos"]["apellidosRegistro"], $_POST["datos"]["correoRegistro"], $_POST["datos"]["telefonoRegistro"], $_POST["datos"]["nacionalidadRegistro"], $_POST["datos"]["generoRegistro"]);
            echo json_encode($response);
            break;

        case 'EditarUsuario':
            require_once 'cUsuarios.php';
            $response = cUsuarios::ActualizarCliente($_SESSION["idUsuario"], $_SESSION["identificacion"], $_SESSION["nombre"], $_SESSION["apellidos"], $_POST["datos"]["correoPerfil"], $_POST["datos"]["telefonoPerfil"], $_POST["datos"]["nacionalidadPerfil"], $_POST["datos"]["generoPerfil"]);
            echo json_encode($response);
            break;

        case 'RecuperarContrasena':
            require_once 'cUsuarios.php';
            $response = cUsuarios::recuperarContrasena($_POST["datos"]["perfilIdentificacion"], $_POST["datos"]["correoPerfil"], $_POST["datos"]["telefonoPerfil"], $_POST["datos"]["contrasenaNueva"]);
            echo json_encode($response);
            break;

            //cReservaciones
        case 'VerReservacion':
            require_once 'cReservaciones.php';
            $response = cReservaciones::VerReservacion($_SESSION['idUsuario'], $_POST["datos"]["idReservacion"]);
            echo json_encode($response);
            break;
        case 'BuscarHabitaciones':
            require_once 'cHabitaciones.php';
            require_once 'cViews.php';
            $habitaciones = cHabitaciones::VerHabitacionesDisponibles($_POST["datos"]["idTipoHabitacion"], $_POST["datos"]["fechaEntrada"], $_POST["datos"]["fechaSalida"]);
            $tiposHabitaciones = cHabitaciones::VerTiposHabitaciones($_POST["datos"]["idTipoHabitacion"]);
            cViews::vSeleccionarHabitacion($habitaciones, $tiposHabitaciones);
            break;
        case 'CrearReservacion':
            require_once 'cReservaciones.php';
            $response = cReservaciones::CrearReservacion($_SESSION['idUsuario'], $_POST["datos"]["idHabitacion"], $_POST["datos"]["fechaActual"],$_POST["datos"]["fechaEntrada"], $_POST["datos"]["fechaSalida"]);
            echo json_encode($response);

            break;
        case 'ModificarReservacion':
            require_once 'cReservaciones.php';
            $response = cReservaciones::ModificarReservacion($_SESSION['reservacion']["idReservacion"], $_SESSION['reservacion']["idCliente"], $_POST['datos']['idHabitacion'], $_SESSION['reservacion']["idCliente"], $_POST['datos']['fechaActual'] ,$_POST['datos']['fechaEntrada'], $_POST['datos']['fechaSalida']);
            echo json_encode($response);
            break;
        case 'EliminarReservacion':
            require_once 'cReservaciones.php';
            $response = cReservaciones::EliminarReservacion($_SESSION['idUsuario'], $_SESSION['reservacion']["idReservacion"]);
            echo json_encode($response);
            break;
    }
} else {
    if (isset($_SESSION['idUsuario'])) {
        require_once 'cReservaciones.php';
        $_SESSION['reservacion'] = null;
        $reservaciones = cReservaciones::VerReservacionesUsuario($_SESSION['idUsuario']);
    }
    require_once './views/vIndex.php';
}
