<section class="min-vh-100 d-flex justify-content-center align-items-center">
    <form class="d-block row  w-50" id="FormularioSesion">
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
            <div class="d-grid gap-2 col-3 mx-auto">
                <button type="submit" class="btn bg-dark text-light btnInicioSesion">Inicio Sesión </button>
                <button type="button" class="btn bg-dark text-light btnRegistrar">Registrarse </button>
            </div>
        </div>
    </form>
</section>

<div id='toastError' class="toast position-absolute align-items-center text-white bg-dark border-0 top-50 start-50 translate-middle" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
        <div class="toast-body">
            <label for=""  id='toastErrorMsg'></label>
            <a href="" id="toastRecuperar" class="text-white d-none"  >Recuperar contraseña</a>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>