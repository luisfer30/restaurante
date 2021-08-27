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
	<input type="text" name="nombre" placeholder="Nombres y Apellido"class="input-50" required >						
	<input type="number" name="telefono"placeholder="Telefono" class="input-50" required>						
	<input type="email" name="email"placeholder="Correo Electronico"class="input-100" required>						
	<input type="password" name="password" placeholder="Contraseña"class="input-100" required>	
	<input type="submit" value="Registrar" class="btn-enviar">
	<p class="form-link">Ya tienes una cuenta? <a href="../index.php">Ingresa aqui</a></p>											
</div>

</form>
</body>
</html>