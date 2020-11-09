<?php
include_once "DataBase/DataBase.php";
class Usuarios
{
	private $id_usuarios;
	private $tipo_documento;
 	private $nombre_usuarios;
 	private $apellido_usuarios;
 	private $celular;
 	private $correo;
 	private $usuarios;
 	private $pass;
 	private $id_rol;
 	const NOMBRE_TABLA = "usuarios";
	 	public  function __construct()
		{
			$this->conexion = new Database();
		}
		 	public function setIdUsuarios($id)
		 	{
		 		$this->id_usuarios = $id;
		 	}
		 	public function setTipDoc($tip_doc)
		 	{
		 		$this->tipo_documento = $tip_doc;
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
		 	public function setPass($contra)
		 	{
		 		$this->pass = $contra;
		 	}
		 	public function setRol($idRol)
		 	{
		 		$this->id_rol = $idRol;
		 	}
		 		public function crear()
		 		{
		 			$conexion = $this->conexion->Conectar();
		 			$query = $conexion->prepare("INSERT INTO usuarios(documento_usuario,tipo_documento,nombre_usuarios,apellido_usuarios,celular,correo,pass,rol)VALUES(?,?,?,?,?,?,?,?);");
		 			$query->bind_param('isssisss', $this->id_usuarios, $this->tipo_documento,  $this->nombre_usuarios, $this->apellido_usuarios, $this->celular, $this->correo, $this->pass, $this->id_rol);
		 			$query->execute();
		 		}
		 		public function read()
		 		{
		 			$conexion = $this->conexion->Conectar();
		 			$query = $this->conexion->prepararConsultaRead(self::NOMBRE_TABLA);
		 			$resultado = $conexion->query($query);
		 			$resultado->fetch_all(MYSQLI_ASSOC);
			        mysqli_close($conexion);
			        return $resultado;
		 		}
		 		public function readById()
		 		{	
		 			$id_usuarios =  $_GET['parametro'];
		 			$conexion = $this->conexion->Conectar();
		 			$sql = "SELECT * FROM usuarios WHERE documento_usuario = '" . $id_usuarios. "'";
		 			$resultado = $conexion->query($sql);
		 			if ($resultado->num_rows == 0) 
					{
						return false;
					}

					$datosUsuario = $resultado->fetch_assoc();
					$sqlRol = "SELECT rol FROM rol WHERE id_rol = '" . $datosUsuario['rol']. "'";
					$resultadoRol = $conexion->query($sqlRol);

					if ($resultadoRol->num_rows == 0) 
					{
						$nombreRol = false;
					}

					$nombreRol = $resultadoRol->fetch_assoc();
					$datosUsuario['nombre_rol'] = $nombreRol['rol'];
		 			return $datosUsuario;
		 			
		 		}
		 		public function update()
		 		{
		 			$conexion = $this->conexion->Conectar();
		 			$id_usuario = $_POST['documento_usuario'];
		 			$query = $conexion->prepare("UPDATE usuarios SET nombre_usuarios= ?,apellido_usuarios= ?, celular=?,
		 			correo= ?, pass= ?, rol= ? WHERE  documento_usuario = '".$id_usuario."';");
		 			$query->bind_param('sssssi', $_POST['nombre_usuarios'] , $_POST['apellido_usuarios'], $_POST['celular'], $_POST['correo'], $_POST['pass'], $_POST['id_rol']);
		 			 $query->execute();
		 		}

		 			public function delete()
		 		{
		 			$conexion = $this->conexion->Conectar();
		 			$id_usuario = $_GET['parametro'];
		 			$query = $conexion->prepare("DELETE FROM usuarios WHERE documento_usuario = '".$id_usuario."';");
		 			 $query->execute();
		 		}


} 

?>