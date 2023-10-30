<?php 
    require "../crud.class.php";
    $crud = new Crud();

    $crud->insertarDatosTrampas(json_decode($_POST["datosTrampas"],true));
?>