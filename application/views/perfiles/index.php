<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">TABLA PERFILES</h4>
                            </div>
                            <center>
    <a href="<?php echo site_url(); ?>/perfiles/nuevo" class="btn btn-primary">
      <i class="fa fa-plus-circle"></i>
      Agregar Nuevo
    </a>
</center>
                                <div class="table-responsive">
                                <?php if ($listadoPerfiles): ?>
  <table class="table" id="tbl-per">
                                    <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">NOMBRE</th>
                <th class="text-center">DESCRIPCION</th>
                <th class="text-center">ESTADO</th>
                <th class="text-center">FECHA DE CREACION</th>
                <th class="text-center">FECHA DE ACTUALIZACION</th>
              <th class="text-center">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listadoPerfiles->result() as $filaTemporal): ?>
                  <tr>
                    <td class="text-center">
                      <?php echo $filaTemporal->id_per; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->nombre_per; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->descripcion_per; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->estado_per; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->creacion_per; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->actualizacion_per; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/perfiles/editar/<?php echo $filaTemporal->id_per; ?>" class="btn btn-warning">
                          <i class="fa fa-pen"></i>
                        </a>
                          <a href="javascript:void(0)"
                           onclick="confirmarEliminacion('<?php echo $filaTemporal->id_per; ?>');"
                           class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </a>
                    </td>
                  </tr>
            <?php endforeach; ?>
        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th class="text-center">ID</th>
                <th class="text-center">NOMBRE</th>
                <th class="text-center">DESCRIPCION</th>
                <th class="text-center">ESTADO</th>
                <th class="text-center">FECHA DE CREACION</th>
                <th class="text-center">FECHA DE ACTUALIZACION</th>
              <th class="text-center">OPCIONES</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <?php else: ?>
<div class="alert alert-danger">
    <h3>No se encontraron clientes registrados</h3>
</div>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
<br>

<script type="text/javascript">
    function confirmarEliminacion(id_per){
          iziToast.question({
              timeout: 20000,
              close: false,
              overlay: true,
              displayMode: 'once',
              id: 'question',
              zindex: 999,
              title: 'CONFIRMACIÓN',
              message: '¿Está seguro de eliminar el perfil de forma permanente?',
              position: 'center',
              buttons: [
                  ['<button><b>SI</b></button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                      window.location.href=
                      "<?php echo site_url(); ?>/perfiles/procesarEliminacion/"+id_per;

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
    $("#tbl-per").DataTable();
</script>