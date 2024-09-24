<?php
    require_once __DIR__ . '/../dao/sesionDAO.php';

    $funcion = $_GET['function'];
    switch ($funcion) {
        case "Enviar":
            crearToken();
        break;
    }
    function crearToken($usuario, $contraseña){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $resultado = (new TokenDAo())->crearToken($usuario, $contraseña);
        echo $resultado;
    }

?>