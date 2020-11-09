<?php
include_once "../../DataBase/DataBase.php";
class Usuarios
{
	private $id_usuarios;
 	private $nombre_usuarios;
 	private $apellido_usuarios;
 	private $celular;
 	private $correo;
 	private $usuarios;
 	private $pass;
 	const NOMBRE_TABLA = "usuarios";
	 	public function __construct()
	 	{
	 		$this->conexion = new DataBase();
	 	}
		 	public function setIdUsuarios($id)
		 	{
		 		$this->id_usuarios = $id;
		 	}
		 	public function setNombreUsuario($nom_usu)
		 	{
		 		$this->nombre_usuarios = $nom_usu;
		 	}
		 	public function setApellidoUsuario($ape_usu)
		 	{
		 		$this->apellido_usuarios = $ape_usu;
		 	}
		 	public function setCelular($cel)
		 	{
		 		$this->celular = $cel;
		 	}
		 	public function setCorreo($corr)
		 	{
		 		$this->correo = $corr;
		 	}
		 	public function setUsuario($usu)
		 	{
		 		$this->usuarios = $usu;
		 	}
		 	public function setPass($contra)
		 	{
		 		$this->pass = $contra;
		 	}
		 		public function RegistrarUsuario()
		 		{
		 			//var_dump($celular);
		 			$conexion = $this->conexion->Conectar();
		 			$query = $conexion->prepare("INSERT INTO usuarios(id_usuarios,nombres_usuarios,apellido_usuarios,celular,correo,usuario,pass)VALUES(?,?,?,?,?,?,?);");
		 			$query->bind_param('sssssss',$this->id_usuarios,$this->nombre_usuarios,$this->apellido_usuarios,$this->celular,$this->correo,$this->usuarios,$this->pass);
		 			$query->execute();
		 		}
		 		public function ConsultarUusuario()
		 		{
		 			$conexion = $this->conexion->Conectar();
		 			$query = $this->conexion->prepararConsulta("SELECT id_usuarios,nombres_usuarios,apellido_usuarios,celular,correo,usuario,pass FROM usuarios ");
		 			$resultado = $conexion->query($query);
		 			$resultado->fetch_all(MYSQLI_ASSOC);
		 			mysqli_close($conexion);
		 			return $resultado;
		 		}
} 
?>