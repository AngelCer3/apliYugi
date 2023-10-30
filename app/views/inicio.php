<nav class="navbar navbar-expand-lg color-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="./inicio">
            <img src="./public/img/Logo2.png" width="75" height="75" alt="">
        </a>
        <form class="d-flex">
            <button class="btn btn-success" id="btnCargar" type="button">Cargar Datos</button>
            <button class="btn btn-warning" id="btnEliminar" type="button">Borrar Datos</button>
            <a href="./logout" class="btn btn-danger">Cerrar sesion</a>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-4 rounded-4">
                <div class="text-center">
                    <img src="./public/img/CartasMounstros.jpg" class="TamañoDeImg mt-2 img-fluid rounded-4" alt="" srcset="">
                </div>
                <div class="card-body text-center">
                    <h2 class="text-center texto1">Cartas de Mounstro</h2>
                    <h4 class="ms-3 mt-2 mb-2 texto1">Aqui se encuentra la coleccion de los distintos tipos de cartas de mounstro</h4>
                    <a class="btn ColorBoton3 rounded-3" href="./cartasMounstro" type="button">Ver Catalogo</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-4 rounded-4">
                <div class="text-center">
                    <img src="./public/img/yugioh_magic_spell.jpg" class="TamañoDeImg mt-2 img-fluid rounded-4" alt="" srcset="">
                </div>
                <div class="card-body text-center">
                    <h2 class="text-center texto2">Cartas de Magicas</h2>
                    <h4 class="ms-3 mt-2 mb-2 texto2">Aqui se encuentra la coleccion de los distintos tipos de cartas magicas</h4>
                    <a class="btn ColorBoton4 rounded-3" href="./cartasMagicas" type="button">Ver Catalogo</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="text-center">
                    <img src="./public/img/yugioh_tramp_cards.jpg" class="TamañoDeImg mt-2 img-fluid rounded-4" alt="" srcset="">
                </div>
                <div class="card-body text-center">
                    <h2 class="text-center texto3">Cartas de Trampa</h2>
                    <h4 class="ms-3 mt-2 mb-2 texto3">Aqui se encuentra la coleccion de los distintos tipos de cartas de trampa</h4>
                    <a class="btn ColorBoton5 rounded-3" href="./cartasTrampa" type="button">Ver Catalogo</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "./app/controller/datosGenerales.controller.php" ?>