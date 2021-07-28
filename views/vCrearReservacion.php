<section class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="d-block row  w-50" id="FormularioSesion">
        <div class="col-12 my-5 text-center">
            <h1>Crear Reservación</h1>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Nombre del Usuario:</label>
                <input class="form-control" name="nombreUsuario" type="text" disabled placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Fecha de entrada:</label>
                <input class="form-control" name="fechaEntrada" type="date"  placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Fecha de salida:</label>
                <input class="form-control" name="fechaSalida" type="date" placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Tipo de habitación:</label>
                <select name="tipoHabitacion" class="form-select">
                    <option value="Estándar">Estándar</option>
                    <option value="King">King</option>
                    <option value="Delux">Delux</option>
                </select>
            </div>
        </div>
        <div class="col-12 mt-5 d-flex justify-content-evenly">
            <button type="button" class="btn bg-dark text-light btnCrearReservacion ">Crear Reservación </button>
        </div>

    </div>
</section>