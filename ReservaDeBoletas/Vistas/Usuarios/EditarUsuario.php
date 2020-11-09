<?php
include_once "../../Modelos/Usuarios.php";
$cod = $_GET['parametro'];
$obj = new Usuarios();
$data = $obj->readById();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>ActualizarUsuarios.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Estilos/Estilo.css">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
	<div class="div_principal">
		<div class="tablaregistrousuarios">
			<h1>Actualizar Usuario</h1>
			<form action="../../Controladores/ActualizarUsuarioControlador.php" method="POST">
				<table>

					<tr>
						<td>Numero Identificación: </td>
						<td><input class="claseinputuno" readonly="" name="documento_usuario" value="<?php echo $cod;?>"></td>
					</tr>
					<tr>
						<td>Nombres: </td>
						<td><input class="claseinputuno" type="text" name="nombre_usuarios" value="<?php echo $data["nombre_usuarios"];?>"></td>
					</tr>
					<tr>
						<td>Apellidos: </td>
						<td><input class="claseinputuno" type="text" name="apellido_usuarios" value="<?php echo $data["apellido_usuarios"];?>"></td>
					</tr>
					<tr>
						<td>Celular: </td>
						<td><input class="claseinputuno" type="number" name="celular" value="<?php echo $data["celular"];?>"></td>
					</tr>
					<tr>
						<td>Correo: </td>
						<td><input class="claseinputuno" type="email" name="correo" value="<?php echo $data["correo"];?>"></td>
					</tr>
					<tr>
						<td>Contraseña: </td>
						<td><input class="claseinputuno" type="password" name="pass" value="<?php echo $data["pass"];?>"></td>
					</tr>
					<tr>
						<td>Rol: </td>
						<td>
							<select class="claseselectuno" required="" name="id_rol">
								<option value="">- Seleccione el rol -</option>
								<option <?php  if($data["nombre_rol"] == "administrador") echo 'selected'; ?> value="1">Administrador</option>
								<option  <?php  if($data["nombre_rol"] == "comprador") echo 'selected'; ?> value="2">Comprador</option>
							</select>
					</tr>
					<tr>
						<td><input type="submit" name="" value="Actualizar"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html> 