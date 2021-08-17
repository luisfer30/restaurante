<?php 
include 'conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
$clave = $_POST['clave'];
//encriptar clave
$clave = hash('sha512', $clave);
//insertar datos
$insertar = "INSERT INTO usuario (nombre, apellido, direccion, correo, clave)VALUES('$nombre', '$apellido', '$direccion', '$correo', '$clave')";
//ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if (!$resultado) {
	echo '
    <script>
    alert("El usuario no se pudo registrar, por favor intente de nuevo");
    window.location = "../view/registrar.php";
    </script>
    ';
    exit;
}else{
	echo '
    <script>
    window.location = "registrar_cuenta.php";
    </script>
    ';
    exit;
}
//cerrar conexion
mysqli_close($conexion);


 ?>