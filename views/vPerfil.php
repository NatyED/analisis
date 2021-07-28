<section class="min-vh-100 d-flex justify-content-center align-items-center">
    <form class="d-block row  w-50" id="FormularioPerfil">
        <div class="col-12 my-5 text-center">
            <h1>Perfil</h1>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Numero de Identificacion o pasaporte:</label>
                <input class="form-control" name="perfilIdentificacion" type="text" disabled placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Nombre:</label>
                <input class="form-control" name="perfilNombre" type="text" disabled placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Apellidos:</label>
                <input class="form-control" name="perfilApellidos" type="text" disabled placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Correo Electrónico:</label>
                <input class="form-control" name="correoPerfil" type="email" placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="" class="form-label">Telefono:</label>
                <input class="form-control" name="telefonoPerfil" type="number" placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Nacionalidad:</label>
                <input class="form-control" name="nacionalidadPerfil" type="text" placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Genero:</label>
                <select name="generoPerfil" class="form-select">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Sin especificar">Sin especificar</option>
                </select>
            </div>
        </div>
        <div class="col-12 mt-5 d-flex justify-content-evenly my-5">
            <button type="button" class="btn bg-dark text-light btnEditarPerfil ">Editar Perfil </button>
            <button type="button" class="btn bg-dark text-light btnReservaciones">Reservaciones </button>

    </form>
</section>