<legend class="text-center">
  <i class="glyphicon glyphicon-list-alt"></i> LISTADO DE RECAUDACIONES</legend>
  <hr>
  <center>
    <a href="<?php echo site_url('recaudaciones/nuevo'); ?>"
      class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
  <br>
  <br>
  <?php if ($listadoRecaudaciones): ?>
    <table id="tbl-recaudaciones" class="table  table-border table-hover" style="background-color:#AED6F1 ; color:black "id="tbl_recaudaciones">
      <thead>
        <tr>
          <th class="text-center"> ID</th>
          <th class="text-center"> # FACTURA</th>
          <th class="text-center"> # AUTORIZACION</th>
          <th class="text-center"> FECHA Y HORA AUTORIZACION</th>
          <th class="text-center"> AMBIENTE</th>
          <th class="text-center"> EMISION</th>
          <th class="text-center"> CLAVE ACCESO</th>
          <th class="text-center"> EMAIL</th>
          <th class="text-center"> OBSERVACION</th>
          <th class="text-center"> NOMBRE</th>
          <th class="text-center"> IDENTIFICACION</th>
          <th class="text-center"> DIRECCION</th>
          <th class="text-center"> ESTADO</th>
          <th class="text-center"> FECHA EMISION</th>
          <th class="text-center"> FECHA CREACION</th>
          <th class="text-center"> FECHA ACTUALIZACION</th>
          <th class="text-center"> ACCIONES</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($listadoRecaudaciones->result()
           as $recaudacionTemporal): ?>
             <tr>
                <td>
                  <?php echo $recaudacionTemporal->id_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->numero_factura_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->numero_autorizacion_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->fecha_hora_autorizacion_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->ambiente_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->emision_rev; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->clave_acceso_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->email_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->observacion_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->nombre_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->identificacion_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->direccion_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->estado_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->fecha_emision_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->fecha_creacion_rec; ?>
                </td>
                <td>
                  <?php echo $recaudacionTemporal->fecha_actualizacion_rec; ?>
                </td>

                <td>
                    <a href="<?php echo site_url('recaudaciones/actualizar'); ?>/<?php echo $recaudacionTemporal->id_rec; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar <!--Amarillo - Lapiz -->
                    </a>
                    <a href="<?php echo site_url('recaudaciones/borrar'); ?>/<?php echo $recaudacionTemporal->id_rec; ?>" class="btn btn-danger" onclick="return confirm('¿Esta seguro que desea eliminar?');">
                      <i class="glyphicon glyphicon-trash"></i>
                      Eliminar <!--Amarillo - Basurero -->
                    </a>
                </td>
             </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <center><h3 style="color:red"><b>No existen recaudaciones</b></h3></center>
  <?php endif; ?>

<script type="text/javascript">
  $("#tbl-recaudaciones").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
</style>















  <!--  -->
