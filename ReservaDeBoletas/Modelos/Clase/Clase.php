<?php 
include_once "../DataBase/DataBase.php";

class Clase
{
		
	public function Login($usuario,$pass)
	{
		$mysqli = DataBase::Conectar();
		$sql = "SELECT * FROM usuarios WHERE documento_usuario = '".$usuario."' AND pass = '".$pass."' ";
		$resultado = $mysqli->query($sql);
			if ($resultado->num_rows == 0) 
			{
				return 0;
			}
			else
			{
				$fila = $resultado->fetch_row();
				session_start();
				$_SESSION["session_usuario"] = true;
				$_SESSION["session_id"] = $fila["documento_usuario"];
				$_SESSION["session_tip_doc"] = $fila["tipo_documento"];
				$_SESSION["session_nombre"] = $fila["nombre_usuarios"];
				$_SESSION["session_apellido"] = $fila["apellido_usuarios"];
				$_SESSION["session_celular"] = $fila["celular"];
				$_SESSION["session_correo"] = $fila["correo"];
				$_SESSION["session_pass"] = $fila["pass"];
				$_SESSION["session_rol"] = $fila["rol"];
					header('location: ../../Vistas/Usuarios/RegistrarUsuarios.php');
			}
	}
}
?>