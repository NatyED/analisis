<?php

if (session_status()!=PHP_SESSION_ACTIVE){
    session_start();
}
    //$_SESSION["idUsuario"]=1;
    //session_unset();
    //session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Hotel Parkview</title>
    <link rel="stylesheet" href="./public/css/estilo.css">
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold btnVerInicio" href="">Hotel Parkview</a>
                <button class="navbar-toggler" data-bs-target="#my-nav" data-bs-toggle="collapse" aria-controls="my-nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse ">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item active">
                            <a class="nav-link btn-link-inicio fw-bold text-light btnVerInicio" href="">Página de
                                inicio </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-link-habitaciones fw-bold text-light btnVerHabitaciones"
                                href="">Habitaciones</a>
                        </li>
                        <li class="nav-item">
                        <a id="perfil" class="nav-link btnLinkPerfil fw-bold text-light" href="">
                            <?php 
                            if(isset($_SESSION ["idUsuario"])){
                               echo "Perfil";
                            }else{
                                echo "Iniciar Sesión";
                                
                            }
                            
                            ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-link-informacion fw-bold text-light btnVerInfo" href="">Acerca
                                de</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main id="main_index" class="">
        <?php 
    
    
       require_once "./views/vInicio.php";
    ?>
    </main>

    <footer id="footer" class="position-relative">
        <div class="contenedor_texto position-absolute pt-5">
            <div class="d-block text-white">
                <div class=" text-center ">
                    <h1>Hotel Parkview</h1> <br />
                </div>
                <div class=" text-center ">
                    <h5>Puedes contactarnos a través de nuestros diferentes canales y servicios</h5>
                    <br />
                </div>
                <div class=" container row text-center">
                    <div class=" col-12 col-lg-4  ">
                        <div class=" mb-2 ">
                            <div>
                                <h4 class="fw-bolder">Horario de <br />recepción</h4>
                                <br />
                                <p>Lunes – Domingo:<br /><br />11:00 am – 8:00 pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 ">
                        <div class="mb-2 ">
                            <div>
                                <h4 class="fw-bolder">Ubicación</h4>
                                <br />
                                <p>Rockford Hills.<br /><br />Playa Parkview.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4  ">
                        <div class="mb-2 ">
                            <div>
                                <h4 class="fw-bolder">Reservaciones</h4>
                                <br />
                                <p>123 444 567 <br /> <br />reservaciones@parkview.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="./public/js/codigo.js"></script>
</body>

</html>