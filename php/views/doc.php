<?php
	include "../controller/action_doc.php"  
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/estilo.css">
<dir class="container">
	<div class="row">
		<center>
			<table width="75%">
				<tr>
					<th>
						Documento
					</th>
					<th>
						Estatus
					</th>
					<th>
						Fecha de subida
					</th>
					<th>
						Accion
					</th>
				</tr>
				<!-- Cdigo de archio para copiar por archivo -->
				<tr>
					<td>
						<a href="../../<?php echo $url_soli;?>">Solicitud de inscripcion</a>
					</td>
					<td>
						<?php  echo $estatus_soli;?>
					</td>
					<td>
						<?php  echo $fecha_soli;?>
					</td>
					<td>
						<?php
							if ($estatus_soli == "No entregado") 
								{ 
						?>
								<a href="../../sube_soli.php">Subir</a>
						<?php
								}
						?>
						<?php
							if ($estatus_soli == "Pendiente") 
								{ 
						?>
								<a href="../../sube_soli.php">Actualizar</a>
						<?php
								}
						?>
						<?php
							if ($estatus_soli == "Rechazado") 
								{ 
						?>
								<a href="../../sube_soli.php">Actualizar</a>
						<?php
								}
						?>
					</td>
				</tr>
				<!-- Cdigo de archio para copiar por archivo -->
			</table>
		</center>
	</div>
</dir>