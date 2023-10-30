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
    <div class="row">
        <div class="col">
            <table id="Magias" class="table table-md table-striped table-bordered table-responsive-lg tabla-magias">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Race</th>
                    </tr>
                </thead>

                <tbody>

                </tbody>

            </table>
            <a href="./graficaMagicas" class="btn btn-primary">Ver grafica</a>
        </div>
    </div>
</div>

<?php require "./app/controller/solicitarDatosMagias.controller.php" ?>