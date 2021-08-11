<div class="modal" tabindex="-1" id="modalModificar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modificar Reservación</h5>

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
                        <input class="form-control" id="fechaEntrada" type="date" placeholder="" aria-label="" value="<?= $_SESSION["reservacion"]["fechaEntrada"] ?>">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha de salida:</label>
                        <input class="form-control" id="fechaSalida" type="date" placeholder="" aria-label="" value="<?= $_SESSION["reservacion"]["fechaSalida"] ?>">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Tipo de habitación:</label>
                        <select id="tipoHabitacion" class="form-select">
                            <?php
                            foreach ($tiposHabitaciones as $tipoHabitacion) {
                                if ($tipoHabitacion->idTipoHabitacion == $_SESSION['reservacion']['idTipoHabitacion']) { ?>
                                    <option value="<?= $tipoHabitacion->idTipoHabitacion ?>" selected><?= $tipoHabitacion->nombre . ' - $' . $tipoHabitacion-> precio . ' por noche'  ?></option>
                                <?php } else { ?>
                                    <option value="<?= $tipoHabitacion->idTipoHabitacion ?>"><?= $tipoHabitacion->nombre . ' - $' . $tipoHabitacion-> precio . ' por noche'  ?></option>
                            <?php }
                            } ?>

                        </select>
                    </div>
                </div>
                <div class="col-12" id='divNumeroHabitacion'>
                    <div class="mb-3">
                        <label for="" class="form-label">Número habitación:</label>
                        <select id="idHabitacion" class="form-select">
                            <option value="<?= $_SESSION['reservacion']['idHabitacion'] ?>">Habitación #<?= $_SESSION['reservacion']['numeroHabitacion'] ?></option>
                            <?php foreach ($habitaciones as $habitacion) {
                                if ($habitacion->idHabitacion != $_SESSION['reservacion']['idHabitacion']) {
                            ?>
                                    <option value="<?= $habitacion->idHabitacion ?>">
                                        <?= "Habitación #" . $habitacion->numero ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-12 d-flex justify-content-evenly">
                    <button type="button" class="btn bg-dark text-white btnModificarReservacion" disabled>Modificar Reservación</button>
                    <button type="button" class="btn bg-dark text-white btnCancelar" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'vToastError.php' ?>
</div>