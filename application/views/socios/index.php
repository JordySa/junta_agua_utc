<legend class="text-center">
  <i class="glyphicon glyphicon-list-alt"></i> LISTADO DE SOCIOS</legend>
  <hr>
  <center>
    <a href="<?php echo site_url('socios/nuevo'); ?>"
      class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
  <br>
  <br>
  <?php if ($listadoSocios): ?>
    <table id="tbl-socios" class="table  table-border table-hover" style="background-color:#AED6F1 ; color:black "id="tbl_socios">
      <thead>
        <tr>
          <th class="text-center"> ID</th>
          <th class="text-center"> TIPO</th>
          <th class="text-center"> IDENTIFICACION</th>
          <th class="text-center"> PRIMER APELLIDO</th>
          <th class="text-center"> SEGUNDO APELLIDO</th>
          <th class="text-center"> NOMBRE</th>
          <th class="text-center"> EMAIL</th>
          <th class="text-center"> FOTO</th>
          <th class="text-center"> TELEFONO</th>
          <th class="text-center"> DIRECCION</th>
          <th class="text-center"> FECHA DE NACIMIENTO</th>
          <th class="text-center"> DISCAPACIDAD</th>
          <th class="text-center"> ESTADO</th>
          <th class="text-center"> ACCIONES</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($listadoSocios->result()
           as $socioTemporal): ?>
             <tr>
                <td>
                  <?php echo $socioTemporal->id_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->tipo_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->identificacion_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->primer_apellido_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->segundo_apellido_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->nombres_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->email_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->foto_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->telefono_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->direccion_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->fecha_nacimiento_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->discapacidad_soc; ?>
                </td>
                <td>
                  <?php echo $socioTemporal->estado_soc; ?>
                </td>

                <td>
                    <a href="<?php echo site_url('socios/actualizar'); ?>/<?php echo $socioTemporal->id_soc; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar <!--Amarillo - Lapiz -->
                    </a>
                    <a href="<?php echo site_url('socios/borrar'); ?>/<?php echo $socioTemporal->id_soc; ?>" class="btn btn-danger" onclick="return confirm('¿Esta seguro que desea eliminar?');">
                      <i class="glyphicon glyphicon-trash"></i>
                      Eliminar <!--Amarillo - Basurero -->
                    </a>
                </td>
             </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <center><h3 style="color:red"><b>No existen socios</b></h3></center>
  <?php endif; ?>

<script type="text/javascript">
  $("#tbl-socios").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
</style>















  <!--  -->
