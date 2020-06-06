<?php 
	session_start();
	if(!isset($_SESSION["id"]) || $_SESSION["id"]==null)
	{
		include "php/views/index_form.php";
	}
	else
	{
		print "<script>window.location='home.php';</script>";
	}

 
?>