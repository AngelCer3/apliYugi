<?php
class Crud
{
    private $conexion;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = "yugiapli";

    public function __construct()
    {
        $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
    }

    public function createUsuarios($datos)
    {
        $query = "INSERT INTO t_usuarios(nombre, apePaterno, apeMaterno, email, pass) VALUES(:nombre,:apePaterno,:apeMaterno, :email, :pass)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombre", $datos["nombre"]);
        $stmt->bindParam(":apePaterno", $datos["apePaterno"]);
        $stmt->bindParam(":apeMaterno", $datos["apeMaterno"]);
        $stmt->bindParam(":email", $datos["email"]);
        $stmt->bindParam(":pass", $datos["password"]);
        $stmt->execute();
        unset($this->conexion);
        return json_encode($stmt);
    }

    public function comprobarUsuario($datos)
    {
        $query = "SELECT * FROM t_usuarios WHERE email=:email AND pass=:pass";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':email', $datos["email"]);
        $stmt->bindParam(':pass', $datos["password"]);
        $stmt->execute();

        $fila = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($fila) > 0) {
            unset($this->conexion);
            session_start();
            $_SESSION['id'] = $fila[0]['id'];
            echo 1;
        } else {
            unset($this->conexion);
            echo 0;
        }
    }
    public function insertarDatosMounstro($datos)
    {
        $query = $this->conexion->prepare("INSERT INTO monstruos(nombre,descripcion,tipo,tipoMarco,ataque,defensa,nivel,atributo,imagen) VALUES(?,?,?,?,?,?,?,?,?)");
        foreach ($datos as $dato) {
            $query->execute([$dato['nombre'], $dato['descripcion'], $dato['tipo'], $dato['tipoMarco'], $dato['ataque'], $dato['defensa'], $dato['nivel'], $dato['atributo'], $dato['imagen']]);
        }
        unset($this->conexion);
        echo 1;
    }
    public function insertarDatosMagicas($datos)
    {
        $query = $this->conexion->prepare("INSERT INTO magias(nombre,descripcion,tipo,imagen,race) VALUES(?,?,?,?,?)");
        foreach ($datos as $dato) {
            $query->execute([$dato['nombre'], $dato['descripcion'], $dato['tipo'], $dato['imagen'], $dato['race']]);
        }
        unset($this->conexion);
        echo 1;
    }
    public function insertarDatosTrampas($datos)
    {
        $query = $this->conexion->prepare("INSERT INTO trampas(nombre,descripcion,tipo,imagen,race) VALUES(?,?,?,?,?)");
        foreach ($datos as $dato) {
            $query->execute([$dato['nombre'], $dato['descripcion'], $dato['tipo'], $dato['imagen'], $dato['race']]);
        }
        unset($this->conexion);
        echo 1;
    }

    public function readMonstruos()
    {
        $query = $this->conexion->prepare("SELECT * FROM monstruos");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        $arreglo = [];
        $a = 0;
        foreach ($result as $r) {
            $arreglo['data'][] = $r;
            $arreglo['data'][$a]['imagen'] = '<img src="' . $r['imagen'] . '" heigth="75" width="75">';
            $a++;
        }
        echo json_encode($arreglo);
    }
    public function readMagicas()
    {
        $query = $this->conexion->prepare("SELECT * FROM magias");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        $arreglo = [];
        $a = 0;
        foreach ($result as $r) {
            $arreglo['data'][] = $r;
            $arreglo['data'][$a]['imagen'] = '<img src="' . $r['imagen'] . '" heigth="75" width="75">';
            $a++;
        }
        echo json_encode($arreglo);
    }
    public function readTrampas()
    {
        $query = $this->conexion->prepare("SELECT * FROM trampas");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        $arreglo = [];
        $a = 0;
        foreach ($result as $r) {
            $arreglo['data'][] = $r;
            $arreglo['data'][$a]['imagen'] = '<img src="' . $r['imagen'] . '" heigth="75" width="75">';
            $a++;
        }
        echo json_encode($arreglo);
    }
    public function deleteDatos()
    {
        $query = $this->conexion->prepare("TRUNCATE TABLE monstruos");
        $query->execute();
        $query = $this->conexion->prepare("TRUNCATE TABLE magias");
        $query->execute();
        $query = $this->conexion->prepare("TRUNCATE TABLE trampas");
        $query->execute();
        unset($this->conexion);
        echo 1;
    }

    public function crearGraficaDonaMonstruos()
    {
        $arreglo = [
            "normal",
            "effect",
            "ritual",
            "fusion",
            "synchro",
            "xyz",
            "normal_pendulum",
            "effect_pendulum",
            "ritual_pendulum",
            "fusion_pendulum",
            "synchro_pendulum",
            "xyz_pendulum"
        ];
        $arreglo2 = [];
        $query = $this->conexion->prepare("SELECT count(tipoMarco) FROM monstruos WHERE tipoMarco = ? ");

        foreach ($arreglo as $tipo) {
            $query->execute([$tipo]);
            $variable = $query->fetchColumn();
            array_push($arreglo2, $variable);
        }
        echo json_encode($arreglo2);
    }
    public function crearGraficaDonaMagias(){
        $arreglo = [
            "Normal",
            "Field",
            "Continuous",
            "Quick-Play",
            "Equip",
            "Ritual"
        ];
        $arreglo2 = [];

        $query = $this->conexion->prepare("SELECT count(race) FROM magias WHERE race = ?");

        foreach($arreglo as $race){
            $query->execute([$race]);
            $variable = $query->fetchColumn();
            array_push($arreglo2, $variable);
        }
        echo json_encode($arreglo2);
    }
    public function crearGraficaDonaTrampas(){
        $arreglo = [
            "Normal",
            "Continuous",
            "Counter"
        ];
        $arreglo2 = [];

        $query = $this->conexion->prepare("SELECT count(race) FROM trampas WHERE race = ?");

        foreach($arreglo as $race){
            $query->execute([$race]);
            $variable = $query->fetchColumn();
            array_push($arreglo2, $variable);
        }
        echo json_encode($arreglo2);
    }
}
