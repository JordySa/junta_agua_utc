<legend class="text-center">
  <i class="glyphicon glyphicon-list-alt"></i> LISTADO DE TIPO DE EVENTOS</legend>
  <hr>
  <center>
    <a href="<?php echo site_url('eventos/nuevo'); ?>"
      class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
  <br>
  <br>
  <?php if ($listadoEventos): ?>
    <table id="tbl-eventos" class="table  table-border table-hover" style="background-color:#AED6F1 ; color:black "id="tbl_eventos">
      <thead>
        <tr>
          <th class="text-center"> ID</th>
          <th class="text-center"> NOMBRE</th>
          <th class="text-center"> ESTADO</th>
          <th class="text-center"> CREACIÓN</th>
          <th class="text-center"> ACTUALIZACIÓN</th>
          <th class="text-center"> ACCIONES</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($listadoEventos->result()
           as $eventoTemporal): ?>
             <tr>
                <td>
                  <?php echo $eventoTemporal->id_te; ?>
                </td>
                <td>
                  <?php echo $eventoTemporal->nombre_te; ?>
                </td>
                <td>
                  <?php echo $eventoTemporal->estado_te; ?>
                </td>
                <td>
                  <?php echo $eventoTemporal->creacion_te; ?>
                </td>
                <td>
                  <?php echo $eventoTemporal->actualizacion_te; ?>
                </td>

                <td>
                    <a href="<?php echo site_url('eventos/actualizar'); ?>/<?php echo $eventoTemporal->id_te; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar <!--Amarillo - Lapiz -->
                    </a>
                    <a href="<?php echo site_url('eventos/borrar'); ?>/<?php echo $eventoTemporal->id_te; ?>" class="btn btn-danger" onclick="return confirm('¿Esta seguro que desea eliminar?');">
                      <i class="glyphicon glyphicon-trash"></i>
                      Eliminar <!--Amarillo - Basurero -->
                    </a>
                </td>
             </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <center><h3 style="color:red"><b>No existen eventos</b></h3></center>
  <?php endif; ?>

<script type="text/javascript">
  $("#tbl-eventos").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
</style>















  <!--  -->
