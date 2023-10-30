<div class="container">
    <div class="card position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body rounded rounded-3 TamañoDeCard TipoDeLetra border-0">
        <div class="card-body">
            <div class="text-center">
                <img src="./public/img/yugioh.png" class="TamañoDeImg mt-2 img-fluid rounded-4" alt="" srcset="">
            </div>
            <h4 class="text-center">Ingresa tus datos</h4>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <h6 class="ms-3 mt-2 mb-2">
                        Nombre(s)</h6>
                    <input type="text" name="nombre" id="nombre" class="form-control shadow-sm bg-body rounded rounded-pill" placeholder="Nombre De Usuario" aria-label="Nombre(s)" aria-describedby="basic-addon1">
                </div>
                <div class="col-md-6 mb-3">
                    <h6 class="ms-3 mt-2 mb-2">
                        Apellido Paterno</h6>
                    <input type="text" name="apePaterno" id="apePaterno" class="form-control shadow-sm bg-body rounded rounded-pill" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <h6 class="ms-1 mt-2 mb-2">
                        Apellido Materno</h6>
                    <input type="text" name "apeMaterno" id="apeMaterno" class="form-control shadow-sm bg-body rounded rounded-pill" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1">
                </div>
                <div class="col-md-6 mb-3">
                    <h6 class="ms-3 mt-2 mb-2">
                        Correo Electrónico</h6>
                    <input type="text" name="email" id="email" class="form-control shadow-sm bg-body rounded rounded-pill" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon1">
                </div>
            </div>

            <h6 class="ms-3 mt-2 mb-2">
                Contraseña</h6>
            <input type="password" name="password" id="password" class="form-control shadow-sm bg-body rounded rounded-pill" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
            <br>

            <div class="d-grid gap-2">
                <a class="btn ColorDePrimerBoton rounded-pill" id="crear" type="button">Registrarse</a>
                <a class="btn ColorDeSegundoBoton rounded-pill" href="./home" type="button">Regresar</a>
            </div>
        </div>
    </div>
</div>

<?php require "./app/controller/registre.controller.php" ?>