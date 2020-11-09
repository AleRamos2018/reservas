<?php 
include_once "../Clase/Clase.php";
	$objclase = new Clase();
	$respuesta = $objclase->Login($_POST["documento_usuario"],$_POST["pass"]);
		if ($respuesta == 1) 
		{
			return 1;
		}
		else
		{
			echo "Usuario o Clave Incorecta";
		}
?>