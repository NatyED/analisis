<section class="container min-vh-100 d-flex justify-content-center align-items-center my-5">
    <div class="row" id="FormularioSesion">
        <div class="col-12 my-5 text-center">
            <h1>Crear Reservación</h1>
            <h6>Seleccione los datos para ver las habitaciones disponibles</h6>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Identificación:</label>
                <input class="form-control" name="identificacionUsuario" type="text" disabled value="<?= $_SESSION['identificacion'] ?>">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Nombre del Usuario:</label>
                <input class="form-control" name="nombreUsuario" type="text" disabled value="<?= $_SESSION['nombre'] . ' ' . $_SESSION['apellidos'] ?>">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Fecha de entrada:</label>
                <input class="form-control" id="fechaEntrada" type="date" placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Fecha de salida:</label>
                <input class="form-control" id="fechaSalida" type="date" placeholder="" aria-label="" disabled>
            </div>
        </div>
        <div class="col-12 ">
            <div class="mb-3">
                <label for="" class="form-label">Tipo de habitación:</label>
                <select id="tipoHabitacion" class="form-select" disabled>
                    <option value='0'>Seleccione un tipo de habitación</option>
                    <?php
                    foreach ($tiposHabitaciones as $tipoHabitacion) { ?>
                        <option value="<?= $tipoHabitacion->idTipoHabitacion ?>">
                            <?= $tipoHabitacion->nombre . ' - $' . $tipoHabitacion->precio ?></option>
                    <?php
                    } ?>

                </select>
            </div>
        </div>
        <div class="col-12" id='divNumeroHabitacion'>
        </div>
        <div class="col-12 mt-5 text-center" id='divCrearReservacion'>
            <button type="button" class="btn bg-dark text-light btnCrearReservacion " disabled>Crear Reservación </button>
        </div>

    </div>
    <?php require_once 'vToastError.php' ?>
</section>