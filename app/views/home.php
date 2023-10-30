<div class="container">
    <div class="row">
        <div class="col">

            <div class="card position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body rounded rounded-3 TamañoDeCard TipoDeLetra border-0">

                <div class="text-center">
                    <img src="./public/img/jxzd3vxsrhka1.png" class="TamañoDeImg mt-2 img-fluid rounded-4" alt="" srcset="">
                </div>
                <div class="card-body">
                    <h2 class="text-center">Login</h2>
                    <h3 class="ms-3 mt-2 mb-2"><img src="./public/img/Logo-Yugi-removebg-preview.png" class="TamañoDeImgContraseña">
                        Correo Electronico</h3>
                    <input type="text" name="email" id="email" class="form-control shadow-sm  bg-body rounded rounded-pill" placeholder="Correo" aria-label="Nombre De Usuario" aria-describedby="basic-addon1">
                    <h3 class="ms-3 mt-2 mb-2"><img src="./public/img/Logo-Yugi-removebg-preview.png" class="TamañoDeImgContraseña">
                        Contraseña</h3>
                    <input type="password" name="password" id="password" class="form-control shadow-sm  bg-body rounded rounded-pill" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
                    <br>

                    <div class="d-grid gap-2">
                        <a class="btn ColorDePrimerBoton rounded-pill" id="sesion" type="button">Ingresar</a>
                        <a class="btn ColorDeSegundoBoton rounded-pill" href="./registre" type="button">Registrarse</a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
<?php require "./app/controller/session.controller.php" ?>