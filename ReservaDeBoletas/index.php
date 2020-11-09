<?php 
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Reservas.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilos/Estilo.css">
</head>
<body>
		<h1>Reservar Boletos</h1>
		<div class="div_principal">
			<div class="tablaregistrousuarios">
				<h1>Iniciar Sesión</h1>
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
			</div>
	</div>
</body>
</html>