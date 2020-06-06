<?php  
		session_start();
		include "source/metas.html";
		if(!isset($_SESSION["id"]) || $_SESSION["id"]==null)
		{
		print "<script>alert(\"Acceso denegado\");window.location='login.php';</script>";
		}
		else
		{
			include "php/views/nav/desplegable.php";
		}
?>

