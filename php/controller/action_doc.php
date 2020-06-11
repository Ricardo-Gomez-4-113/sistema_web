<?php  
	$id = $_SESSION["id"];
	include "subidas/conexion.php";

	//Codigo de Archivo
	$sql1_soli="SELECT docs.url, docs.fecha, docs.estatus FROM docs, usuarios WHERE docs.id_usr = usuarios.id AND usuarios.id='$id'";
	$query_soli=$con->query($sql1_soli);
	while ($r_soli=$query_soli->fetch_array()) 
	{
		$url_soli=$r_soli["url"];
		$fecha_soli=$r_soli["fecha"];
		$estatus_soli=$r_soli["estatus"];
	}
	//Codigo de archivo
?>