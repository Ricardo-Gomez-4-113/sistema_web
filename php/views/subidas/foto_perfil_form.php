<?php  
	$id = $_SESSION["id"];
	include "conexion.php";
	$sql1="SELECT perfil.foto FROM perfil, usuarios WHERE usuarios.id='$id' AND perfil.id_usr=usuarios.id";
	$query=$con->query($sql1);
	while ($r=$query->fetch_array()) 
	{
		$foto=$r['foto'];
		
	}

?>
<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
<br><br><br>
<div class="container">
	<div class="row ">
		<center>
			<img src="<?php echo $foto;  ?>" width="200px" heigth="200px">
			<br><br>
			<form action="php/controller/subidas/action_foto_perfil.php" enctype="multipart/form-data" method="POST">
				<input type="file" name="image">
				<br>
				<input type="submit" name="upload" value="Subir">
			</form>
		</center>
	</div>
</div>