<section class="min-vh-100 d-flex justify-content-center align-items-center">
    <form class="d-block row  w-50" id="FormularioRecuperarContrasena">
        <div class="col-12 my-5 text-center">
            <?php if (isset($_SESSION['identificacion'])) { ?>
                <h1>Crear Contraseña</h1>
            <?php } else { ?>
                <h1>Recuperar Contraseña</h1>
            <?php } ?>
        </div>
        <?php if (isset($_SESSION['identificacion'])) { ?>
            <div class="col-12 ">
                <div class="mb-3">
                    <label for="" class="form-label">Numero de Identificacion o pasaporte:</label>

                    <input class="form-control" id="perfilIdentificacion" type="text" disabled placeholder="" aria-label="" value="<?= $_SESSION['identificacion'] ?>">
                </div>
            </div>

            <div class="col-12 ">
                <div class="mb-3">
                    <label for="" class="form-label">Correo Electrónico:</label>
                    <input class="form-control" id="correoPerfil" type="email" disabled placeholder="" aria-label="" value="<?= $_SESSION['correoRegistro'] ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="" class="form-label">Telefono:</label>
                    <input class="form-control" id="telefonoPerfil" type="tel" disabled placeholder="" aria-label="" value="<?= $_SESSION['telefonoRegistro'] ?>">
                </div>
            </div>
        <?php } else { ?>
            <div class="col-12 ">
                <div class="mb-3">
                    <label for="" class="form-label">Numero de Identificacion o pasaporte:</label>

                    <input class="form-control" id="perfilIdentificacion" required type="text" placeholder="" aria-label="">
                </div>
            </div>

            <div class="col-12 ">
                <div class="mb-3">
                    <label for="" class="form-label">Correo Electrónico:</label>
                    <input class="form-control" id="correoPerfil" required type="email" placeholder="" aria-label="">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="" class="form-label">Telefono:</label>
                    <input class="form-control" id="telefonoPerfil" required type="tel" placeholder="" aria-label="">
                </div>
            </div>
        <?php } ?>

        <div class="col-12">
            <div class="mb-3">
                <label for="" class="form-label">Contraseña nueva:</label>
                <input class="form-control" id="contrasenaNueva" required type="password" placeholder="" aria-label="">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="" class="form-label">Verificar contraseña nueva:</label>
                <input class="form-control" id="verificarContrasenaNueva" required type="password" placeholder="" aria-label="">
            </div>
        </div>

        <div class="col-12 mt-5 d-flex justify-content-evenly my-5">
            <?php if (isset($_SESSION['identificacion'])) { ?>
                <button type="submit" class="btn bg-dark text-light btnRecuperarContrasena ">Crear Contraseña</button>
            <?php } else { ?>

                <button type="submit" class="btn bg-dark text-light btnRecuperarContrasena ">Recuperar Contraseña</button>

            <?php } ?>
        </div>

    </form>
</section>

<?php require_once 'vToastError.php' ?>