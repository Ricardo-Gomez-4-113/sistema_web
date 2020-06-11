<?php
 include "../../php/controller/action_perfil.php";
 echo $id;
?>
<br><br><br>
<div class="container">
  <div class="row">
    <center>
      <table width="80%">
        <tr>
          <td>
            <img src="../../<?php echo $foto;?>" width="120px" height="150px">
            <br>
            <a href="../../foto_perfil.php">Actualizar</a>
          </td>
          <td>
            Nombre
            <br>
            <b><?php echo $nombre; ?></b>
            <br>
            Domicilio
            <br>
            <b><?php echo $domicilio; ?></b>
            <br>
            Email
            <br>
            <b><?php echo $email; ?></b>
            <br>
            Telefono
            <br>
            <b><?php echo $telefono; ?></b>
            <br>
          </td>
          <td>
             Folio
            <br>
            <b><?php echo $folio; ?></b>
            <br>
             Carrera
            <br>
            <b><?php echo $carrera; ?></b>
            <br>
             Periodo
            <br>
            <b><?php echo $periodo; ?></b>
            <br>
             Fecha
            <br>
            <b><?php echo $fecha_solicitud; ?></b>
            <br>
             Modalidad
            <br>
            <b><?php echo $modalidad; ?></b>
            <br>
             Status
            <br>
            <b><?php echo $estatus; ?></b>
            <br>
          </td>
        </tr>
      </table>
      <?php include "doc.php" ?>
    </center>
  </div>
</div>

