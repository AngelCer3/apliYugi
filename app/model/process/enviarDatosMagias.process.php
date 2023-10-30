<?php 
    require "../crud.class.php";
    $crud = new Crud();

    $crud->insertarDatosMagicas(json_decode($_POST["datosMagias"],true));
?>