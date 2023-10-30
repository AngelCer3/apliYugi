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
            <div class="table-responsive">
                <table id="Monstruos" class="table table-md table-striped table-bordered table-responsive-lg tabla-monstruos">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Ataque</th>
                            <th>Defensa</th>
                            <th>Tipo</th>
                            <th>TipoMarco</th>
                            <th>Nivel</th>
                            <th>Atributo</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <a href="./graficaMonstruos" class="btn btn-primary">Ver grafica</a>
            </div>
        </div>
    </div>
</div>

<?php require "./app/controller/solicitarDatosMonstruo.controller.php" ?>