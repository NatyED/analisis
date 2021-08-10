    <div class="mb-3">
        <label for="" class="form-label">Número habitación:</label>
        <?php if ($habitaciones) { ?>
            <select id="idHabitacion" class="form-select">
                <option value="0">Seleccione una habitación</option>
                <?php foreach ($habitaciones as $habitacion) { ?>
                    <option value="<?= $habitacion->idHabitacion ?>">
                        <?= "Habitacion #" . $habitacion->numero ?></option>
                <?php } ?>
            </select>
        <?php } else { 
            ?>
            <label for="" class="form-label fw-bolder">No hay habitaciones de tipo <?= $tiposHabitaciones[0]->nombre ?> disponibles entre las fechas indicadas.</label>
        <?php } ?>
    </div>