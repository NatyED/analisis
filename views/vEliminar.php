<div class="modal" tabindex="-1" id="modalEliminar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar Reservación</h5>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Identificacion:</label>
                        <input class="form-control" name="identificacion" type="text" disabled placeholder="" aria-label="" value="<?= $_SESSION["reservacion"]["identificacion"] ?>">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre del Usuario:</label>
                        <input class="form-control" name="nombreUsuario" type="text" disabled placeholder="" aria-label="" value="<?= $_SESSION["reservacion"]["nombre"] . ' ' . $_SESSION["reservacion"]["apellidos"] ?>">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha de entrada:</label>
                        <input class="form-control" name="fechaEntrada" type="date" disabled placeholder="" aria-label="" value="<?= $_SESSION["reservacion"]["fechaEntrada"] ?>">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha de salida:</label>
                        <input class="form-control" name="fechaSalida" type="date" disabled placeholder="" aria-label="" value="<?= $_SESSION["reservacion"]["fechaSalida"] ?>">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Tipo de habitación:</label>
                        <select name="tipoHabitacion" class="form-select" disabled>
                            <?php
                            foreach ($tiposHabitaciones as $tipoHabitacion) {
                                if ($tipoHabitacion->idTipoHabitacion == $_SESSION['reservacion']['idTipoHabitacion']) { ?>
                                    <option value="<?= $tipoHabitacion->idTipoHabitacion ?>" selected><?= $tipoHabitacion->nombre . ' - $' . $tipoHabitacion->precio ?></option>
                                <?php } else { ?>
                                    <option value="<?= $tipoHabitacion->idTipoHabitacion ?>"><?= $tipoHabitacion->nombre . ' - $' . $tipoHabitacion->precio ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-12 d-flex justify-content-evenly">
                    <button type="button" class="btn bg-danger text-white btnEliminarReservacion">Eliminar Reservación</button>
                    <button type="button" class="btn bg-dark text-white btnCancelar" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'vToastError.php' ?>
</div>