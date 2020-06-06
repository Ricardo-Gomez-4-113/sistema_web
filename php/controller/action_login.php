<?php
//verfica si el post tienen informacion
	if(!empty($_POST))
	{
		if (isset($_POST["username"]) && isset($_POST["password"]))
		{
		//echo "las varables estan iniciadas";
		if (($_POST["username"]) != "" && ($_POST["password"] != ""))
		{
			$hasPSD=md5($_POST["password"]);
			include "../../source/conexion.php";
			$user_id = null;
			$sql1="SELECT * FROM usuarios WHERE nombre=\"$_POST[username]\" AND password=\"$hasPSD\"";
			$query=$con->query($sql1);
			while($r=$query->fetch_array())
			{
				$user_id=$r["id"];
				$user_name=$r["nombre"];
				$user_id_usertype=$r["tipo"];
			}
			if ($user_id==null) 
			{
				print "<script>alert(\"Acceso invalido el usuario o la contraseña son incorrectos.\");window.location='../../login.php';</script>";
			}
			else
			{
				session_start();
				$_SESSION["id"]=$user_id;
				$_SESSION["nombre"]=$user_name;
				$_SESSION["tipo"]=$user_id_usertype;
				print "<script>window.location='../../home.php';</script>";
			}
		}
		}
		else
		{
		print "<script>window.location='../login.php'; </script>";
		}
	}
	
	else
	{
		print "<script>window.location='../../login.php'; </script>";
	}
	
?>