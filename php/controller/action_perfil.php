<?php
	session_start();
	$id = $_SESSION["id"];
 	include "../../source/conexion.php";
 $sql1="SELECT perfil.nombre, perfil.foto, solicitud.carrera, solicitud.periodo, solicitud.fecha_solicitud, solicitud.modalidad, solicitud.estatus, solicitud.folio, contacto.domicilio,contacto.email ,contacto.telefono FROM perfil, solicitud, contacto, usuarios WHERE usuarios.id=\"$id\"  AND solicitud.id_usr=usuarios.id AND contacto.id_usr=usuarios.id and perfil.id_usr=usuarios.id";
 $query= $con->query($sql1);
 while ($r=$query->fetch_array()) 
 {
 	$nombre=$r["nombre"];
 	$foto=$r["foto"];
 	$folio=$r["folio"];
 	$carrera=$r["carrera"];
 	$periodo=$r["periodo"];
 	$fecha_solicitud=$r["fecha_solicitud"];
 	$modalidad=$r["modalidad"];
 	$estatus=$r["estatus"];
 	$domicilio=$r["domicilio"];
 	$email=$r["email"];
 	$telefono=$r["telefono"];
 }

//
?>