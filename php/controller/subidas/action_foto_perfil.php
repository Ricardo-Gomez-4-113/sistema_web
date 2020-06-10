<?php  
	session_start();
	$id = $_SESSION["id"];
	if (isset($_POST['upload'])) 
	{
		include "conexion.php";
		$dir="foto/$id";
		$dirG="php/controller/subidas/foto/$id";
		$files=glob($dir.'/*');
		foreach ($files as $file) 
		{
			if (is_dir($file)) 
			{
				removeDirectory($file);
				continue;
				
			}
			unlink($file);
		}
		rmdir($dir);
		if (!file_exists($dir)) 
		{
			mkdir($dir, 0777, true);
		}
		$arch=$_FILES['image']['tmp_name'];
		$_FILES['name']=$id."jpg";
		$name_arch=$_FILES['image']['name'];
		move_uploaded_file($arch, $dir."/".$name_arch);
		$dir=$dir."/".$name_arch;
		$dirG=$dirG."/".$name_arch;
		mysqli_query($con, "UPDATE `perfil` SET `foto`='$dirG' WHERE '$id'");

	}
	print "<script>alert(\"La foto se subio correctamente\"), window.location='../../../home.php'</script>";
?>