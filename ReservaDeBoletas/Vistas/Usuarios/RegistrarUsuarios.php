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
</head>
<body>
	<a href="../../index.php">Cerar Sesion</a>
	<h1>Registro De Usuarios</h1>
	<form action="../../Controladores/UsuarioControlador.php" method="POST">
		<table>
			<tr>
				<td>Numero Identificación: </td>
				<td><input type="number" name="documento_usuario" required=""></td>
			</tr>
			<tr>
				<td>Tipo Identificación: </td>
				<td>
					<select name="tipo_documento">
						<option value="">--Selecciona Una Opción--</option>
						<option value="ciudadania">Cédula De Ciudadania</option>
						<option value="pasaporte">Pasaporte</option>
						<option value="extranjera">Cédula Extranjera</option>
						<option value="identidad">Tarjeta Identidad</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nombres: </td>
				<td><input type="text" name="nombre_usuarios" required=""></td>
			</tr>
			<tr>
				<td>Apellidos: </td>
				<td><input type="text" name="apellido_usuarios" required=""></td>
			</tr>
			<tr>
				<td>Celular: </td>
				<td><input type="number" name="celular" required=""></td>
			</tr>
			<tr>
				<td>Correo: </td>
				<td><input type="email" name="correo" required=""></td>
			</tr>
			<tr>
				<td>Contraseña: </td>
				<td><input type="password" name="pass" required=""></td>
			</tr>
			<tr>
				<td>Rol: </td>
				<td>
					<select name="id_rol" required="">
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
					<th colspan="2">Acción</th>
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
						<td><a href="../../Controladores/EliminarUsuarioControlador.php?parametro=<?php echo $usuario['documento_usuario'];?>"><button>Eliminar</button></a></td>
					</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>