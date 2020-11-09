<?php
include_once "../../Modelos/Usuarios.php";
$usuario = new Usuarios();
$usuarios = $usuario->read();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>RegistroUsuarios.com</title>
	<script>
		function modificar(cod)
		(
			alert(cod);
		)
	</script>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Estilos/Estilo.css">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
	<div class="div_principal">
		<div class="tablaregistrousuarios">
		<a href="../../index.php"><button class="cerrar_session">Cerrar Sesión</button></a>
		</br>	
			<h1>Registro De Usuarios</h1>
			<form action="../../Controladores/RegistrarUsuarioControlador.php" method="POST">
				<table>
					<tr>
						<td><label>Numero Identificación: </label></td>
						<td><input class = "claseinputuno" type="number" name="documento_usuario" required=""></td>
					</tr>
					<tr>
						<td><label>Tipo Identificación: </label></td>
						<td>
							<select class = "claseselectuno" name="tipo_documento">
								<option value="">--Selecciona Una Opción--</option>
								<option value="ciudadania">Cédula De Ciudadania</option>
								<option value="pasaporte">Pasaporte</option>
								<option value="extranjera">Cédula Extranjera</option>
								<option value="identidad">Tarjeta Identidad</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Nombres: </label></td>
						<td><input class = "claseinputuno" type="text" name="nombre_usuarios" required=""></td>
					</tr>
					<tr>
						<td><label>Apellidos: </label></td>
						<td><input class = "claseinputuno" type="text" name="apellido_usuarios" required=""></td>
					</tr>
					<tr>
						<td><label>Celular: </label></td>
						<td><input class = "claseinputuno" type="number" name="celular" required=""></td>
					</tr>
					<tr>
						<td><label>Correo: </label></td>
						<td><input class = "claseinputuno" type="email" name="correo" required=""></td>
					</tr>
					<tr>
						<td><label>Contraseña: </label></td>
						<td><input class = "claseinputuno" type="password" name="pass" required=""></td>
					</tr>
					<tr>
						<td><label>Rol: </label></td>
						<td>
							<select class = "claseselectuno" name="id_rol" required="">
								<option value="">--Seleccione Una Opción--</option>
								<option value="1">1-Administrador</option>
								<option value="2">2-Comprador</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="" value="Registrar"></td>
					</tr>
				</table>
			</form>
		</div>
	</br>
		<div class="div_usuarios_registrados">
			<table>
				<tr>
					<thead>
						<tr>
							<th>Identificacion</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Celular</th>
							<th>Contraseña</th>
							<th>Correo</th>
							<th>Actualizar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
				</tr>
				<tbody>
					<?php 
						foreach ($usuarios as $usuario) 
						{
					?>
							<tr>
								<td><?php echo $usuario['documento_usuario'];?></td>
								<td><?php echo $usuario['nombre_usuarios'];?></td>
								<td><?php echo $usuario['apellido_usuarios'];?></td>
								<td><?php echo $usuario['celular'];?></td>
								<td><?php echo $usuario['pass'];?></td>
								<td><?php echo $usuario['correo'];?></td>
								<td><a href="EditarUsuario.php?parametro=<?php echo $usuario['documento_usuario'];?>"><img class="editar" src="../../Imagenes/editar.png"></a></td>
								<td><a href="../../Controladores/EliminarUsuarioControlador.php?parametro=<?php echo $usuario['documento_usuario'];?>"><img class="editar" src="../../Imagenes/eliminar.png"></a></td>
							</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>