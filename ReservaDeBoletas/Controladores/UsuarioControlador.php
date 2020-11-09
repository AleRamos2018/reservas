<?php
include_once "../Modelos/Usuarios.php"; 
	class UsuarioControlador
	{
		
		function ObtenerDatosUsuarios()
		{
			$usuarios = new Usuarios();
			$usuarios->setIdUsuarios($_POST["documento_usuario"]);
			$usuarios->setNombreUsuario($_POST["nombre_usuarios"]);
			$usuarios->setApellidoUsuario($_POST["apellido_usuarios"]);
			$usuarios->setCelular($_POST["celular"]);
			$usuarios->setCorreo($_POST["correo"]);
			$usuarios->setPass($_POST["pass"]);
			$usuarios->setRol($_POST["id_rol"]);
			$usuarios->crear();

		}
	}
	$UsuarioControlador =  new UsuarioControlador();
	$UsuarioControlador->ObtenerDatosUsuarios();
	header("Location: ../Vistas/Usuarios/RegistrarUsuarios.php")
?>