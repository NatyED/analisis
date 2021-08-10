<section class="container min-vh-100 d-flex justify-content-center align-items-center">
    <form class="row" id="FormularioSesion">
        <div class="col-12 my-5 text-center">
            <h1>Inicio Sesión</h1>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Correo Electrónico:</label>
                <input class="form-control" name="correoSesion" id="correoSesion" type="email" placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="" class="form-label">Contraseña:</label>
                <input class="form-control" name="contrasenaSesion" id="contrasenaSesion" type="password" placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="d-grid gap-2 col-lg-3 mx-auto">
                <button type="button" class="btn bg-dark text-light btnInicioSesion">Inicio Sesión </button>
                <button type="button" class="btn bg-dark text-light btnRegistrar">Registrarse </button>
            </div>
        </div>
    </form>
</section>
<?php require_once 'vToastError.php' ?>