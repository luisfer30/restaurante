<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '<script>alert("Acceso denegado, inicia session")
     window.location = "../index.php";</script>';
   
    session_destroy();
die();

}
 ?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Bienvenido</title>
    </head>
    <body>
    <h1>BIENVENIDOS</h1>
    <a href="../validaciones/cerrar.php">Cerrar session</a>
    </body>
    </html>