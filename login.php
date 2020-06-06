<?php
	session_start();
	if(!isset($_SESSION["id"]) || $_SESSION["id"]==null)
	{ 
?>
<!DOCTYPE html>
<html>
<?php include "source/metas.html";?>
<head>
	<title>Login</title>
</head>
<body>
<?php include "php/views/login_form.html";?>
</body>
</html>
<?php
  }
  else
  {
  	print "<script>window.location='home.php';</script>";
  }
?>