<div class="modal" tabindex="-1" id="modalEliminar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminarr Reservación</h5>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre del Usuario:</label>
                        <input class="form-control" name="nombreUsuario" type="text" disabled placeholder="" aria-label="">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha de entrada:</label>
                        <input class="form-control" name="fechaEntrada" type="date" disabled placeholder="" aria-label="">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha de salida:</label>
                        <input class="form-control" name="fechaSalida" type="date" disabled placeholder="" aria-label="">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="mb-3">
                        <label for="" class="form-label">Tipo de habitación:</label>
                        <select name="tipoHabitacion" class="form-select" disabled >
                            <option value="Estándar">Estándar</option>
                            <option value="King">King</option>
                            <option value="Delux">Delux</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-12 mt-5 d-flex justify-content-evenly my-5">
                    <button type="button" class="btn bg-danger text-white btnEliminarReservacion">Eliminar Reservación</button>
                    <button type="button" class="btn bg-dark text-white btnCancelar" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>