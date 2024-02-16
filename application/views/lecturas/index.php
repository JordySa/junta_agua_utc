<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">TABLA LECTURAS</h4>
                            </div>
                            <center>
    <a href="<?php echo site_url(); ?>/lecturas/nuevo" class="btn btn-primary">
      <i class="fa fa-plus-circle"></i>
      Agregar Nuevo
    </a>
</center>
                                <div class="table-responsive">
                                <?php if ($listadoLecturas): ?>
  <table class="table" id="tbl-lec">
                                    <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">AÑO</th>
                <th class="text-center">MES</th>
                <th class="text-center">ESTADO</th>
                <th class="text-center">LECTURA ANTERIOR</th>
                <th class="text-center">LECTURA ACTUAL</th>
                <th class="text-center">FECHA DE CREACION</th>
                <th class="text-center">FECHA DE ACTUALIZACION</th>
              <th class="text-center">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listadoLecturas->result() as $filaTemporal): ?>
                  <tr>
                    <td class="text-center">
                      <?php echo $filaTemporal->id_lec; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->anio_lec; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->mes_lec; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->estado_lec; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->lectura_anterior_lec; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->lectura_actual_lec; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->fecha_creacion_lec; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->fecha_actualizacion_lec; ?>
                    </td>

                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/lecturas/editar/<?php echo $filaTemporal->id_lec; ?>" class="btn btn-warning">
                          <i class="fa fa-pen"></i>
                        </a>
                          <a href="javascript:void(0)"
                           onclick="confirmarEliminacion('<?php echo $filaTemporal->id_lec; ?>');"
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
                <th class="text-center">AÑO</th>
                <th class="text-center">MES</th>
                <th class="text-center">ESTADO</th>
                <th class="text-center">LECTURA ANTERIOR</th>
                <th class="text-center">LECTURA ACTUAL</th>
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
    function confirmarEliminacion(id_lec){
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
                      "<?php echo site_url(); ?>/lecturas/procesarEliminacion/"+id_lec;

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
    $("#tbl-lec").DataTable();
</script>