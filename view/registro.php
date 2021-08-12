<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrate</title>
	<link rel="stylesheet" type="text/css" href="../css/registro.css">
</head>
<body>

<form action="../validaciones/registrar.php" method="post" class="form-registro">
	<h2 class="form-titulo">Crear Cuenta</h2>
<div class="contenedor-inputs">
	<input type="text" name="nombre" placeholder="Nombres"class="input-50" required >						
	<input type="text" name="apellido"placeholder="Apellidos" class="input-50" required>						
	<input type="email" name="correo"placeholder="Correo Electronico"class="input-100" required>						
	<input type="password" name="clave" placeholder="Contraseña"class="input-100" required>	
	<input type="text" name="direccion" placeholder="Direccion"class="input-100" required>
	<input type="submit" value="Registrar" class="btn-enviar">
	<p class="form-link">Ya tienes una cuenta? <a href="../index.php">Ingresa aqui</a></p>											
</div>

</form>
</body>
</html>