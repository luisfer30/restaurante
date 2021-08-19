<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Agregar menus</title>
</head>
<body>
    <form action="../validaciones/insert_menu.php"method = "POST" enctype="multipart/form-data" >
    <h1>Agregar platos al menu</h1>
    <input type="file" value="" name="imagen_plato">
    <h2>Titulo</h2>
    <input type="text" name="titulo_plato" >
    <h2>precio</h2>
    <input type="number" name="precio_plato">
    <input type="submit" value="Insertar" name="Insertar">
    </form>
</body>
</html>