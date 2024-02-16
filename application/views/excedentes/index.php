<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">TABLA EXCEDENTES</h4>
                            </div>
                            <center>
    <a href="<?php echo site_url(); ?>/excedentes/nuevo" class="btn btn-primary">
      <i class="fa fa-plus-circle"></i>
      Agregar Nuevo
    </a>
</center>
                                <div class="table-responsive">
                                <?php if ($listadoExcedentes): ?>
  <table class="table" id="tbl-ex">
                                    <thead>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">LIMITE MINIMO</th>
              <th class="text-center">LIMITE MAXIMO</th>
              <th class="text-center">TARIFA</th>
              <th class="text-center">FECHA DE CREACION</th>
              <th class="text-center">FECHA DE ACTUALIZACION</th>
              <th class="text-center">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listadoExcedentes->result() as $filaTemporal): ?>
                  <tr>
                    <td class="text-center">
                      <?php echo $filaTemporal->id_ex; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->limite_minimo_ex; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->limite_maximo_ex; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->tarifa_ex; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->fecha_creacion_ex; ?>
                    </td>

                    <td class="text-center">
                      <?php echo $filaTemporal->fecha_actualizacion_ex; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/excedentes/editar/<?php echo $filaTemporal->id_ex; ?>" class="btn btn-warning">
                          <i class="fa fa-pen"></i>
                        </a>
                          <a href="javascript:void(0)"
                           onclick="confirmarEliminacion('<?php echo $filaTemporal->id_ex; ?>');"
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
              <th class="text-center">LIMITE MINIMO</th>
              <th class="text-center">LIMITE MAXIMO</th>
              <th class="text-center">TARIFA</th>
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
    function confirmarEliminacion(id_ex){
          iziToast.question({
              timeout: 20000,
              close: false,
              overlay: true,
              displayMode: 'once',
              id: 'question',
              zindex: 999,
              title: 'CONFIRMACIÓN',
              message: '¿Está seguro de eliminar el cliente de forma permanente?',
              position: 'center',
              buttons: [
                  ['<button><b>SI</b></button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                      window.location.href=
                      "<?php echo site_url(); ?>/excedentes/procesarEliminacion/"+id_ex;

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
    $("#tbl-ex").DataTable();
</script>