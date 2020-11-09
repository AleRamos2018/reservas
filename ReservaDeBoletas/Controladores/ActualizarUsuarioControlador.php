	
<?php 
include_once "../Modelos/Usuarios.php"; 
	class UsuarioControlador
	{
		
		public function actualizar() {
			$usuarios = new Usuarios();
			$usuarios->update();
		}
	}
	$UsuarioControlador =  new UsuarioControlador();
	$UsuarioControlador->actualizar();
	header("Location: ../Vistas/Usuarios/RegistrarUsuarios.php")
?>