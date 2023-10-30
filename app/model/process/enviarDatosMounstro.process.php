<?php 
    require "../crud.class.php";
    $crud = new Crud();

    $crud->insertarDatosMounstro(json_decode($_POST["datosMounstro"],true));
?>