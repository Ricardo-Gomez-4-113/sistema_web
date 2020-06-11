<?php 
	$id = $_SESSION["id"];
	include "conexion.php";
?>
<br><br><br>
<div class="container">
	<div class="row">
		<center>
			<br><br><br>
			<form action="php/controller/subidas/action_soli.php" enctype="multipart/form-data" method="POST">
				<input type="file" name="doc">
				<br>
				<input type="submit" name="upload" value="Subir">
			</form>
		</center>
	</div>
</div>