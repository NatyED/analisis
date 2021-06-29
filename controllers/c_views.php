<?php 

class c_views 
{
    static function v_contacto (){
        require_once "../views/v_contacto.php";

    }
    static function v_habitaciones(){
        require_once "../views/v_habitaciones.php";
    }

    static function v_inicio (){
        require_once "../views/v_inicio.php";
    }
    static function v_info(){
        require_once "../views/v_info.php";
    }

}


if (isset($_POST["action"])){
    switch ($_POST["action"]) {
        case 'view_contacto':
            c_views::v_contacto();
            break;
        case 'view_habitaciones':
            c_views::v_habitaciones();
            break;
        case 'view_inicio':
            c_views::v_inicio();
            break;   
        case 'view_info':
            c_views::v_info();
            break; 
        default:
            # code...
            break;
    }
}























?>