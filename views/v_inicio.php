<section id="seccion_inicio1" class="vh-100 position-relative">
    <div class="contenedor_texto position-absolute">
        <h1 class="text-white text-center">Disfruta de una experiencia inolvidable</h1>
    </div>
</section>

<section id="seccion_inicio2" class="vh-100 container d-flex flex-column justify-content-center align-items-center">
    <div class="text-center">
        <h3 class="fw-bolder py-5">
            Te damos la bienvenida al Hotel Parkview
        </h3>
        <p class="text-start pt-3 m-auto">
            El grupo propietario del hotel ha formado un equipo para abrir uno de los hoteles de <br />playa y montaña
            más
            atractivos y lujosos del país. <br /><br />
            Nuestra fortaleza se basa en brindarle a nuestros huéspedes, una estadía inolvidable, <br />llena de
            experiencias
            únicas y enriquecedoras, rodeados de un ambiente lujoso y <br />encantador, combinando lo mejor de dos
            mundos. Nos
            enorgullece poder ofrecer <br />habitaciones que se ajustan a perfectamente al estilo de vida que merecen
            nuestros
            <br />clientes.
        </p>
    </div>
</section>

<section id="seccion_inicio3" class="vh-100 position-relative">
    <div class="contenedor_texto position-absolute">
        <h1 class="text-white">Disfruta nuestro hotel</h1>
    </div>
</section>

<section id="seccion_inicio4" class="min-vh-100 container d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row my-3">
            <div class="text-center col-12">
                <h3 class="fw-bolder py-5">Tipos de habitaciones</h3> <br />
            </div>
            <div class=" col-12 col-lg-4  ">
                <div class="d-flex justify-content-center ">
                    <div style="min-width:270px;">
                        <h5 class="fw-bolder">Estandar</h5>
                        <br />

                        <p> <b>Playa Rockford, complejo C</b> <br />Ocupación doble o triple con vista al <br /> Océano
                            desde: <br />80,50 USD por noche</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 ">
                <div class="d-flex justify-content-center ">
                    <div style="min-width:270px;">
                        <h5 class="fw-bolder">King</h5><br />
                        <p> <b>Playa Rockford, complejo B</b> <br />Ocupación sencilla o doble con vista <br />al Océano
                            y piscina desde:<br />150,25 USD por
                            noche</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4  ">
                <div class="d-flex justify-content-center ">
                    <div style="min-width:270px;">
                        <h5 class="fw-bolder">Delux</h5>
                        <br />
                        <p> <b>Playa Rockford, complejo A</b> <br /> Ocupación sencilla con vista al <br /> Océano y
                            montañas, con piscina <br />privada
                            desde:<br />475,00 USD por noche</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
        <div class="d-flex justify-content-center align-items-center">
            <button id="btn_ver_habitaciones" type="submit" class="btn bg-dark text-white btn_ver_habitaciones">Ver las
                habitaciones</button>
        </div>
            </div>
        </div>
    </div>
</section>

<section id="seccion_inicio5" class="vh-100 position-relative">
    <div class="contenedor_texto position-absolute ">
        <h1 class="text-white ">Reserva tus actividades</h1>
    </div>
</section>

<section id="seccion_inicio6" class="min-vh-100 container d-flex justify-content-center align-items-center">

        <form id="FormularioContacto" class="row">
           
                <div class="col-12 my-5">
                    <p>Para reservar un salón para actividades o negocios, llámanos al 123 444 567 o usa el <br />
                        siguiente
                        formulario.</p>
                </div>
                <div class="col-12 my-2">
                    <label for="nombre_reserva" class="form-label fw-bold ">Nombre</label>
                    <input type="text" class="form-control border-2" id="nombre_contacto" name="nombre_contacto" placeholder="" required>
                </div>
                <div class="col-12 my-2">
                    <label for="correo_reserva" class="form-label fw-bold">Correo Electrónico</label>
                    <input type="email" class="form-control border-2" id="correo_contacto" name="correo_contacto" placeholder="" required>
                </div>
                <div class="col-12 my-2">
                    <label for="telefono_reserva" class="form-label fw-bold">Telefono</label>
                    <input type="number" class="form-control border-2" id="telefono_reserva" name="telefono_reserva" placeholder="" required>
                </div>
                <div class="col-12 my-2">
                    <label for="fecha_reserva" class="form-label fw-bold">Fecha</label>
                    <input type="date" class="form-control border-2" id="fecha_reserva" name="fecha_reserva" placeholder="" required>
                </div>
                <div class="col-12 my-2">
                    <label for="hora_inicio_reserva" class="form-label fw-bold">Hora de inicio</label>
                    <input type="time" class="form-control border-2" id="hora_inicio_reserva" name="hora_inicio_reserva" placeholder="" required>
                </div>
                <div class="col-12 my-2">
                    <label for="espacio_reserva" class="form-label fw-bold">Espacio</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">10 personas</option>
                        <option value="2">30 personas</option>
                        <option value="3">Mas de 30 personas</option>
                    </select>
                </div>
                <div class="col-12 my-2">
                    <label for="requerimientos_reserva" class="form-label fw-bold">Requerimeintos especiales</label>
                    <textarea name="requerimientos_reserva" id="requerimientos_reserva" class="form-control  border-2" cols="30" rows="10" required></textarea>
                </div>
                <div class="col-12 my-2">
                    <button type="submit" class="btn btn-dark rounded-0 border">Enviar</button>
                </div>
          
        </form>
    
</section>