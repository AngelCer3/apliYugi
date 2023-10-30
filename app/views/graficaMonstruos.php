<nav class="navbar navbar-expand-lg color-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="./inicio">
            <img src="./public/img/Logo2.png" width="75" height="75" alt="">
        </a>
        <form class="d-flex">
            <a href="./logout" class="btn btn-danger">Cerrar sesion</a>
        </form>
    </div>
</nav>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7 fondo-grafica">
            <canvas id="graficaMonstruo"></canvas>
        </div>
    </div>
</div>

<?php require "./app/controller/graficaDonaMounstro.controller.php" ?>