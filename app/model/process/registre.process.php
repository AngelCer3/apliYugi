<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->createUsuarios([
        "nombre" => $_POST["nombre"],
        "apePaterno"=> $_POST["apePaterno"],
        "apeMaterno"=> $_POST["apeMaterno"],
        "email" => $_POST["email"],
        "password" => $_POST["pass"]
    ]);
?>