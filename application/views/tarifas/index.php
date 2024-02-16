<legend class="text-center">
  <i class="glyphicon glyphicon-list-alt"></i> LISTADO DE TARIFAS</legend>
  <hr>
  <center>
    <a href="<?php echo site_url('tarifas/nuevo'); ?>"
      class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
  <br>
  <br>
  <?php if ($listadoTarifas): ?>
    <table id="tbl-tarifas" class="table  table-border table-hover" style="background-color:#AED6F1 ; color:black "id="tbl_tarifas">
      <thead>
        <tr>
          <th class="text-center"> ID</th>
          <th class="text-center"> NOMBRE</th>
          <th class="text-center"> DESCRIPCION</th>
          <th class="text-center"> ESTADO</th>
          <th class="text-center"> METROS CUBICOS</th>
          <th class="text-center"> TARIFA BASICA</th>
          <th class="text-center"> TARIFA EXCEDENTE</th>
          <th class="text-center"> VALOR MORA</th>
          <th class="text-center"> ACCIONES</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($listadoTarifas->result()
           as $tarifaTemporal): ?>
             <tr>
                <td>
                  <?php echo $tarifaTemporal->id_tar; ?>
                </td>
                <td>
                  <?php echo $tarifaTemporal->nombre_tar; ?>
                </td>
                <td>
                  <?php echo $tarifaTemporal->descripcion_tar; ?>
                </td>
                <td>
                  <?php echo $tarifaTemporal->estado_tar; ?>
                </td>
                <td>
                  <?php echo $tarifaTemporal->m3_maximo_tar; ?>
                </td>
                <td>
                  <?php echo $tarifaTemporal->tarifa_basica_tar; ?>
                </td>
                <td>
                  <?php echo $tarifaTemporal->tarifa_excedente_tar; ?>
                </td>
                <td>
                  <?php echo $tarifaTemporal->valor_mora_tar; ?>
                </td>

                <td>
                    <a href="<?php echo site_url('tarifas/actualizar'); ?>/<?php echo $tarifaTemporal->id_tar; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar <!--Amarillo - Lapiz -->
                    </a>
                    <a href="<?php echo site_url('tarifas/borrar'); ?>/<?php echo $tarifaTemporal->id_tar; ?>" class="btn btn-danger" onclick="return confirm('¿Esta seguro que desea eliminar?');">
                      <i class="glyphicon glyphicon-trash"></i>
                      Eliminar <!--Amarillo - Basurero -->
                    </a>
                </td>
             </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <center><h3 style="color:red"><b>No existen tarifas</b></h3></center>
  <?php endif; ?>

<script type="text/javascript">
  $("#tbl-tarifas").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
</style>















  <!--  -->
