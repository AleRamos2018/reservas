<?php 
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Reservas.com</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Reservar Boletos</h1>
				<h3>Iniciar Sesión</h3>
	<form action="Modelos/Logeo/Logeo.php" method ="POST">
		<table>
			<tr>
				<td>Usuario: </td>
				<td><input type="number" name="documento_usuario" required=""></td>
			</tr>
			<tr>
				<td>Contraseña: </td>
				<td><input type="pass" name="pass" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="" value="Iniciar Sesión"></td>
			</tr>
		</table>
	</form>
</body>
</html>