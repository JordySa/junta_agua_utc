<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">TABLA MEDIDORES</h4>
                            </div>
                            <center>
    <a href="<?php echo site_url(); ?>/medidores/nuevo" class="btn btn-primary">
      <i class="fa fa-plus-circle"></i>
      Agregar Nuevo
    </a>
</center>
                                <div class="table-responsive">
                                <?php if ($listadoMedidores): ?>
  <table class="table" id="tbl-med">
                                    <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">NUMERO</th>
                <th class="text-center">SERIE</th>
                <th class="text-center">MARCA</th>
                <th class="text-center">OBSERVACION</th>
                <th class="text-center">ESTADO</th>
                <th class="text-center">FOTO</th>
                <th class="text-center">FECHA DE CREACION</th>
                <th class="text-center">FECHA DE ACTUALIZACION</th>
                <th class="text-center">LECTURA INICIAL</th>
                <th class="text-center">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listadoMedidores->result() as $filaTemporal): ?>
                  <tr>
                    <td class="text-center">
                      <?php echo $filaTemporal->id_med; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->numero_med; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->serie_med; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->marca_med; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->observacion_med; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->estado_med; ?>
                    </td>
                    <td class="text-center">
                      <?php if ($filaTemporal->foto_med!=""): ?>
                        <img
                        src="<?php echo base_url(); ?>/uploads/medidores/<?php echo $filaTemporal->foto_med; ?>"
                        height="80px"
                        width="100px"
                        alt="">
                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->creacion_med; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->actualizacion_med; ?>
                    </td>
                    <td class="text-center">
                      <?php echo $filaTemporal->lectura_inicial_med; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/medidores/editar/<?php echo $filaTemporal->id_med; ?>" class="btn btn-warning">
                          <i class="fa fa-pen"></i>
                        </a>
                          <a href="javascript:void(0)"
                           onclick="confirmarEliminacion('<?php echo $filaTemporal->id_med; ?>');"
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
                <th class="text-center">NUMERO</th>
                <th class="text-center">SERIE</th>
                <th class="text-center">MARCA</th>
                <th class="text-center">OBSERVACION</th>
                <th class="text-center">ESTADO</th>
                <th class="text-center">FOTO</th>
                <th class="text-center">FECHA DE CREACION</th>
                <th class="text-center">FECHA DE ACTUALIZACION</th>
                <th class="text-center">LECTURA INICIAL</th>
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
    function confirmarEliminacion(id_med){
          iziToast.question({
              timeout: 20000,
              close: false,
              overlay: true,
              displayMode: 'once',
              id: 'question',
              zindex: 999,
              title: 'CONFIRMACIÓN',
              message: '¿Está seguro de eliminar el medidor de forma permanente?',
              position: 'center',
              buttons: [
                  ['<button><b>SI</b></button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                      window.location.href=
                      "<?php echo site_url(); ?>/medidores/procesarEliminacion/"+id_med;

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
    $("#tbl-med").DataTable();
</script>