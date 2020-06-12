<?php
	session_start();
	$id = $_SESSION["id"];
	if (!empty($_POST)) 
	{
	  	if (isset($_POST['oldPSWD']) && isset($_POST['newPSWD'])) 
	  	{
	  		if ($_POST['oldPSWD']!="" && $_POST['newPSWD']!="") 
	  		{
	  			$hash=md5($_POST['newPSWD']);
	  			include "subidas/conexion.php";
	  			$sql1="UPDATE `usuarios` SET `password`='$hash' WHERE  `id`='$id'";
	  			if (mysqli_query($con,$sql1)) 
	  			{
	  				print "<script>alert(\"La contraseña se actualizo correctamente.\");window.location='../../home.php';</script>";
	  			}
	  			else
	  			{
	  					print "<script>alert(\"La contraseña no se actualizo correctamente.\");window.history.back();</script>";
	  			}
	  			mysqli_close($con);	

	  		}
	  		else
	  		{
				print "<script>window.location='../../ch_pswd.php';</script>";
	  		}
	  	}
	  	else
	  	{
			print "<script>window.location='../../ch_pswd.php';</script>";
	  	}
	}
	else
	{
		print "<script>window.location='../../ch_pswd.php';</script>";
	}  
?>