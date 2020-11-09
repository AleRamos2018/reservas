<?php
 class DataBase
 {
 	const HOST = 'localhost';
 	const BASE_DE_DATOS = 'reservas';
 	const USUARIO = 'root';
 	const  PASS = '';
 	
 	public function Conectar()
 	{
 		$conexion = mysqli_connect(self::HOST,self::USUARIO,self::PASS,self::BASE_DE_DATOS);
 			if ($conexion) 
 			{
 				return $conexion;
 			}
 			return null;
 	}
 		public function prepararConsultaRead($nombreTabla)
 		{
 			$query ="SELECT * FROM ".$nombreTabla. ";"; 
 			return $query;
 		}
 		/*public function prepararConsultaRead($id)
 		{
 			$query = "SELECT u.documento_usuario, u.tipo_documento, u.nombre_usuarios, u.apellido_usuarios, u.celular, u.correo, u.pass, (u.rol) as idrol, (r.rol) as rol FROM usuarios u INNER JOIN rol r on u.rol = r.id_rol WHERE documento_usuario = '".$id."' ";
 			return $query;
 		}
 		public  function prepararConsultaUpdate($nombreTabla, $campos, $campoppal, $id) 
 		{
			$conexion = $this->Conectar();
			$query = $conexion->prepare("UPDATE " . $nombreTabla . " SET " . $campos . " WHERE $campoppal = '". $id ."';");
			return $query;
		}*/
 } 
?>