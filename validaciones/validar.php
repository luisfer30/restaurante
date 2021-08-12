<?php

session_start();

include 'conexion.php';
$usuario =$_POST['usuario'];
$clave = $_POST['clave'];
$clave = hash('sha512', $clave);


$consulta="SELECT * FROM usuario WHERE correo ='$usuario' and clave= '$clave' ";
$resultado = mysqli_query($conexion, $consulta);
//obtener el numero de filas
$filas=mysqli_num_rows($resultado);
if ($filas>0){ 
    $_SESSION['usuario'] = $usuario;
	header("location:../view/bienvenido.php");
    exit;
}else{
    echo '
    <script>
    alert("Usuario no exite, por favor verifique los datos");
    window.location = "../index.php";
    </script>
    ';
    exit;
 }
mysqli_free_result($resultado);
mysqli_close($conexion);
?>