<?php
    $servidor="localhost";
    $nombreBd="carrito";
    $usuario="root";
    $pass="luisfernando30";
    $conexion = new mysqli($servidor,$usuario,$pass,$nombreBd);
    if($conexion -> connect_error ){
        die("No se pudo conectar");
        
    }
?>