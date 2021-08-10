<section class="container min-vh-100 my-5">
    <div class="row" id="FormularioSesion">
        <div class="col-12 my-5 text-center">
            <h1>Reservaciones</h1>
        </div>
        <?php
        if ($reservaciones == false) { ?>
            <div class="col-12 my-5 text-center">
                <h4>No tiene reservaciones previstas o activas</h4>
            </div>
        <?php
        } else { ?>
            <div class="col-12 my-5 text-center">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"># Habitación</th>
                                <th scope="col">Tipo Habitación</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Fecha Entrada</th>
                                <th scope="col">Fecha Salida</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($reservaciones as $reservacion) {
                                $fecha1 = new DateTime($reservacion->fechaEntrada);
                                $fecha2 = new DateTime($reservacion->fechaSalida);
                                $diff = $fecha1->diff($fecha2);
                                ?>
                                <tr idReservacion="<?= $reservacion->idReservacion ?>">
                                    <th scope="row"><?= $reservacion->numeroHabitacion ?></th>
                                    <td><?= $reservacion->tipoHabitacion ?></td>
                                    <td>$ <?= floatval($reservacion->precioHabitacion) * $diff->days ?></td>
                                    <td><?= $reservacion->fechaEntrada ?></td>
                                    <td><?= $reservacion->fechaSalida ?></td>
                                    <td>
                                        <button idReservacion="<?= $reservacion->idReservacion ?>" type="button" class="btn bg-dark mx-2 text-light btnVentanaModificar ">Modificar </button>
                                        <button idReservacion="<?= $reservacion->idReservacion ?>" type="button" class="btn bg-dark mx-2 text-light btnVentanaEliminar ">Eliminar </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="col-12 mt-5">
            <div class="d-grid gap-2 d-md-flex justify-content-md-evenly">

                <button type="button" class="btn bg-dark text-light btnVentanaCrearReservacion ">Crear Reservación </button>
                <button type="button" class="btn bg-dark text-light btnVerPerfil ">Ver Perfil </button>
                <button type="button" class="btn bg-danger text-light btnCerrarSesion ">Cerrar Sesión </button>
            </div>
        </div>
    </div>
</section>

<div id="contenedorModal">

</div>

<?php require_once 'vToastError.php' ?>