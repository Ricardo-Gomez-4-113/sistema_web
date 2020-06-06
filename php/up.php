<?php 


if(isset($_FILES['documento']) && $_FILES['documento']['type']=='application/pdf'){
	move_uploaded_file ($_FILES['documento']['tmp_name'] , '..upload/'.$_FILES['documento']['name']);
}

?>


<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="documento">
	<input type="submit">
</form>