<legend class="text-center">
  <i class="glyphicon glyphicon-list-alt"></i> LISTADO DE RUTAS</legend>
  <hr>
  <center>
    <a href="<?php echo site_url('rutas/nuevo'); ?>"
      class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
  <br>
  <br>
  <?php if ($listadoRutas): ?>
    <table id="tbl-rutas" class="table  table-border table-hover" style="background-color:#AED6F1 ; color:black "id="tbl_rutas">
      <thead>
        <tr>
          <th class="text-center"> ID</th>
          <th class="text-center"> NOMBRE</th>
          <th class="text-center"> DESCRIPCION</th>
          <th class="text-center"> ESTADO</th>
          <th class="text-center"> ACCIONES</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($listadoRutas->result()
           as $rutaTemporal): ?>
             <tr>
                <td>
                  <?php echo $rutaTemporal->id_rut; ?>
                </td>
                <td>
                  <?php echo $rutaTemporal->nombre_rut; ?>
                </td>
                <td>
                  <?php echo $rutaTemporal->descripcion_rut; ?>
                </td>
                <td>
                  <?php echo $rutaTemporal->estado_rut; ?>
                </td>

                <td>
                    <a href="<?php echo site_url('rutas/actualizar'); ?>/<?php echo $rutaTemporal->id_rut; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar <!--Amarillo - Lapiz -->
                    </a>
                    <a href="<?php echo site_url('rutas/borrar'); ?>/<?php echo $rutaTemporal->id_rut; ?>" class="btn btn-danger" onclick="return confirm('¿Esta seguro que desea eliminar?');">
                      <i class="glyphicon glyphicon-trash"></i>
                      Eliminar <!--Amarillo - Basurero -->
                    </a>
                </td>
             </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <center><h3 style="color:red"><b>No existen rutas</b></h3></center>
  <?php endif; ?>

<script type="text/javascript">
  $("#tbl-rutas").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
</style>















  <!--  -->
