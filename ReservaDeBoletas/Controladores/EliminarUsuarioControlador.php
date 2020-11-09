<?php 
include_once "../Modelos/Usuarios.php"; 
	class UsuarioControlador
	{
		
		public function eliminar() {
			$usuarios = new Usuarios();
			$usuarios->delete();
		}
	}
	$UsuarioControlador =  new UsuarioControlador();
	$UsuarioControlador->eliminar();
	header("Location: ../Vistas/Usuarios/RegistrarUsuarios.php")
?>
