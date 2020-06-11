<?php
	session_start();
	$id = $_SESSION["id"];
	if (isset($_POST['upload'])) 
	{
	  	include "conexion.php";
	  	$dir="../../../docs/$id/solicitud";
	  	$dirG="docs/$id/solicitud";
	  	if (!file_exists($dir)) 
	  	{
	  		mkdir($dir, 0777, true);
	  	}
	  	else
	  	{
	  		$files=glob($dir.'/*');
	  		foreach ($files as $file) 
	  		{
	  			if (is_dir($file)) 
	  			{
	  				removeDirectory($files);
	  				continue;
	  			}
	  			unlink($file);
	  			rmdir($dir);
	  			
	  		}
	  	}
	  	$arch=$_FILES['doc']['tmp_name'];
	  	$arch_name=$_FILES['doc']['name'];
	  	move_uploaded_file($arch,$dir."/".$arch_name);
	  	$dir=$dir."/".$arch_name;
	  	$dirG=$dirG."/".$arch_name;
	  	$estatus="Pendiente";
	  	$fecha=date("y-m-d");
	  	mysqli_query($con,"UPDATE `docs` SET `url`='$dirG',  `fecha`='$fecha',  `estatus`='$estatus'  WHERE  `id_usr`='$id'");
	}
	print "<script>alert(\"El documento se a cargado correctamente\"), window.location='../../../home.php'</script>";
?>