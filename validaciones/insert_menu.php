<?php
include 'conexion.php';//agrego la conexion
$upload = "../img_menus/";
if(isset($_POST['Insertar'])){ //evaluo la peticion insertar del archivo agregar_menu
    $imagen = $_FILES['imagen_plato']['name'];//paso los datos
    $nombre = $_POST['titulo_plato'];
    $precio = $_POST['precio_plato'];

    if (isset($imagen) && $imagen != "") { //verfico que el metodo de envio no sea vacio
        $tipo = $_FILES['imagen_plato']['type'];//obtengo el tipo de archivo
        $temp = $_FILES['imagen_plato']['tmp_name'];//obtengo la ubicacion del archivo
        if (!((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png')))) {//verifico el formato del archivo
            echo'<script>
            alert("Solo se permiten archivos jpeg y png");
            window.location = "../view/agregar_menu.php";
            </script>';
        }else{
            $query = "INSERT INTO menus(imagen,nombre,precio)VALUES('$imagen','$nombre','$precio')";
            $resultado = mysqli_query($conexion,$query);
            if ($resultado) {
                move_uploaded_file($temp,$upload.$imagen);//muevo la imagen a la carpeta del
                echo'<script>
            alert("Se ingreso al menu correctamente");
            window.location = "../view/agregar_menu.php";
            </script>';
            exit;
            }else{
                echo'<script>
            alert("Ocurrio un error");
            window.location = "../view/agregar_menu.php";
            </script>';
            exit;
            }
        }
    }


}

?>