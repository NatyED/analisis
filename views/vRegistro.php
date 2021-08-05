<section class="min-vh-100 d-flex justify-content-center align-items-center my-5">
    <form class="d-block row  w-50" id="FormularioRegistro">
        <div class="col-12 my-5 text-center">
            <h1>Registro</h1>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Número de identificación o pasaporte:</label>
                <input class="form-control" id="identificacionRegistro" type="text" placeholder="" aria-label="" required>
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Nombre:</label>
                <input class="form-control" id="nombreRegistro" type="text" placeholder="" aria-label="" required>
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Apellidos:</label>
                <input class="form-control" id="apellidosRegistro" type="text" placeholder="" aria-label="" required>
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Correo Electrónico:</label>
                <input class="form-control" id="correoRegistro" type="email" placeholder="" aria-label="" required>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="" class="form-label">Teléfono:</label>
                <input class="form-control" id="telefonoRegistro" type="text" placeholder="" aria-label="" required>
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Nacionalidad:</label>
                <input class="form-control" id="nacionalidadRegistro" type="text" placeholder="" aria-label="" required>
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Genero:</label>
                <select id="generoRegistro" class="form-select" required>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Sin especificar">Sin especificar</option>
                </select>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="d-grid gap-2 col-3 mx-auto">
                <button type="click" class="btn bg-dark text-light btnCrearUsuario">Crear Usuario </button>
            </div>
        </div>

    </form>
</section>

<div id='toastError' class="toast position-absolute align-items-center text-white bg-dark border-0 top-50 start-50 translate-middle" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
        <div id='toastErrorMsg' class="toast-body">

        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>