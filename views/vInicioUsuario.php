<section class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="d-block row " id="FormularioSesion">
        <div class="col-12 my-5 text-center">
            <h1>Reservaciones</h1>
        </div>
        <div class="col-12 my-5 text-center">
            <h4>No tiene reservaciones previstas o activas</h4>
        </div>
        <div class="col-12 my-5 text-center">
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
                    <tr>
                        <th scope="row">23</th>
                        <td>DeluxMark</td>
                        <td>$153.23</td>
                        <td>12-03-2021</td>
                        <td>20-03-2021</td>
                        <td colspan="4">
                            <div >
                                <button idReservacion="1" type="button" class="btn bg-dark mx-2 text-light btnVentanaModificar ">Modificar </button>
                                <button type="button" class="btn bg-dark mx-2 text-light btnVentanaEliminar ">Eliminar </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 mt-5 d-flex justify-content-evenly">
            <button type="button" class="btn bg-dark text-light btnVentanaCrearReservacion ">Crear Reservación </button>
            <button type="button" class="btn bg-dark text-light btnVerPerfil ">Ver Perfil </button>
        </div>
    </div>
</section>

<div id="contenedorModal">

</div>