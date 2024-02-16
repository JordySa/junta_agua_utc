<br>


<center>
  <h2>LISTADO DE HISTORIALES DE PROPIETARIOS</h2>
</center>
<hr>
<br>
<center>
    <a href="<?php echo site_url(); ?>/historialpropietarios/nuevo" class="btn btn-primary">
      <i class="fa fa-plus-circle"></i>
      Agregar Nuevo
    </a>
</center>

<?php if ($listadoHistorialPropietarios): ?>
  <table class="table" id="tbl-his">
        <thead>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">FECHA DE ACTUALIZACION</th>
              <th class="text-center">ESTADO</th>
              <th class="text-center">OBSERVACION</th>
              <th class="text-center">FECHA DE ACTUALIZACION MANUAL DEL PROPIETARIO</th>
              <th class="text-center">FECHA DE CREACION</th>
                <th class="text-center">PROPIETARIO ACTUAL</th>
              <th class="text-center">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listadoHistorialPropietarios->result() as $filaTemporal): ?>
                  <tr>
                    <td class="text-center">
                      <?php echo $filaTemporal->id_his; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->fecha_cambio_his; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->estado_his; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->observacion_his; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->fecha_cambio_his; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->creacion_his; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->propietario_actual_his; ?>
                    </td>


                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/historialpropietarios/editar/<?php echo $filaTemporal->id_his; ?>" class="btn btn-warning">
                          <i class="fa fa-pen"></i>
                        </a>
                          <a href="javascript:void(0)"
                           onclick="confirmarEliminacion('<?php echo $filaTemporal->id_his; ?>');"
                           class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </a>
                    </td>
                  </tr>
            <?php endforeach; ?>
        </tbody>
  </table>
<?php else: ?>
<div class="alert alert-danger">
    <h3>No se encontraron clientes registrados</h3>
</div>
<?php endif; ?>


<script type="text/javascript">
    function confirmarEliminacion(id_his){
          iziToast.question({
              timeout: 20000,
              close: false,
              overlay: true,
              displayMode: 'once',
              id: 'question',
              zindex: 999,
              title: 'CONFIRMACIÓN',
              message: '¿Está seguro de eliminar el historial de forma permanente?',
              position: 'center',
              buttons: [
                  ['<button><b>SI</b></button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                      window.location.href=
                      "<?php echo site_url(); ?>/historialpropietarios/procesarEliminacion/"+id_his;

                  }, true],
                  ['<button>NO</button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                  }],
              ]
          });
    }
</script>

<script type="text/javascript">
    // Iniciar DataTable
    $("#tbl-his").DataTable();
</script>