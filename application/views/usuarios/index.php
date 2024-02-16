<legend class="text-center">
  <i class="glyphicon glyphicon-list-alt"></i> LISTADO DE USUARIOS</legend>
  <hr>
  <center>
    <a href="<?php echo site_url('usuarios/nuevo'); ?>"
      class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
  <br>
  <br>
  <?php if ($listadoUsuarios): ?>
    <table id="tbl-usuarios" class="table  table-border table-hover" style="background-color:#AED6F1 ; color:black "id="tbl_usuarios">
      <thead>
        <tr>
          <th class="text-center"> ID</th>
          <th class="text-center"> APELLIDO</th>
          <th class="text-center"> NOMBRE</th>
          <th class="text-center"> EMAIL</th>
          <th class="text-center"> PASSWORD</th>
          <th class="text-center"> ESTADO</th>
          <th class="text-center"> ACCIONES</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($listadoUsuarios->result()
           as $usuarioTemporal): ?>
             <tr>
                <td>
                  <?php echo $usuarioTemporal->id_usu; ?>
                </td>
                <td>
                  <?php echo $usuarioTemporal->apellido_usu; ?>
                </td>
                <td>
                  <?php echo $usuarioTemporal->nombre_usu; ?>
                </td>
                <td>
                  <?php echo $usuarioTemporal->email_usu; ?>
                </td>
                <td>
                  <?php echo $usuarioTemporal->password_usu; ?>
                </td>
                <td>
                  <?php echo $usuarioTemporal->estado_usu; ?>
                </td>

                <td>
                    <a href="<?php echo site_url('usuarios/actualizar'); ?>/<?php echo $usuarioTemporal->id_usu; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar <!--Amarillo - Lapiz -->
                    </a>
                    <a href="<?php echo site_url('usuarios/borrar'); ?>/<?php echo $usuarioTemporal->id_usu; ?>" class="btn btn-danger" onclick="return confirm('¿Esta seguro que desea eliminar?');">
                      <i class="glyphicon glyphicon-trash"></i>
                      Eliminar <!--Amarillo - Basurero -->
                    </a>
                </td>
             </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <center><h3 style="color:red"><b>No existen usuarios</b></h3></center>
  <?php endif; ?>

<script type="text/javascript">
  $("#tbl-usuarios").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
</style>















  <!--  -->
