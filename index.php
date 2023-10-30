<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    require "./app/views/includes/metatags.php" ?>
</head>

<body>

    <?php
    require "./app/model/crud.class.php";
    $crud = new Crud();

    if (isset($_GET["vista"])) {
        switch ($_GET["vista"]) {
            case 'home':
                include "./app/views/home.php";
                break;
            case 'registre':
                include "./app/views/registre.php";
                break;
            case 'inicio':
                if (isset($_SESSION['id'])) {
                    include "./app/views/inicio.php";
                    break;
                }else{
                    header("location: ./home");
                }
            case 'cartasMounstro':
                if(isset($_SESSION['id'])){
                    include "./app/views/cartasMounstro.php";
                    break;
                }else{
                    header("location: ./home");
                }
            case 'graficaMonstruos':
                if(isset($_SESSION['id'])){
                    include "./app/views/graficaMonstruos.php";
                    break;
                }else{
                    header("location: ./home");
                }
            case 'cartasMagicas':
                if(isset($_SESSION['id'])){
                    include "./app/views/cartasMagicas.php";
                    break;
                }else{
                    header("location: ./home");
                }
            case 'graficaMagicas':
                if(isset($_SESSION['id'])){
                    include "./app/views/graficaMagicas.php";
                    break;
                }else{
                    header("location: ./home");
                }
            case 'cartasTrampa':
                if(isset($_SESSION['id'])){
                    include "./app/views/cartasTrampa.php";
                    break;
                }else{
                    header("location: ./home");
                }
            case 'graficaTrampas':
                if(isset($_SESSION['id'])){
                    include "./app/views/graficaTrampas.php";
                    break;
                }else{
                    header("location: ./home");
                }
            case 'loguot':
                if (isset($_SESSION['id'])) {
                    include "./app/model/process/close.process.php";
                }
                break;
                default:
                header("location: ./home");
                break;
        }
    } else {
        header("location: ./home");
    }
    ?>
    <?php require "./app/views/includes/scripts.php" ?>
</body>

</html>