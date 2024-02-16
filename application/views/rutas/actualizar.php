<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR RUTAS</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($rutaEditar): ?>
        <!-- <?php print_r($rutaEditar); ?> -->
        <form class="" action="<?php echo site_url('rutas/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_rut"
              value="<?php echo $rutaEditar->id_rut; ?>">
            </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="nombre_rut"
                value="<?php echo $rutaEditar->nombre_rut; ?>"
                class="form-control"
                placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DESCRIPCION:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="descripcion_rut"
                value="<?php echo $rutaEditar->descripcion_rut; ?>"
                class="form-control"
                placeholder="Ingrese la descripcion" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <b>ESTADO:</b><br>
                </div>
              <div class="col-md-7">
                <select class="form-control" name="estado_rut"
                value="<?php echo $rutaEditar->estado_rut; ?>">
                  <option value="">--ELIJA EL ESTADO---</option>
                  <option value="Activo">ACTIVO</option>
                  <option value="Inactivo">INACTIVO</option>
                </select>

              </div>
          </div>
            <br>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>

              <div class="col-md-7">
                  <button type="submit" name="button"
                          class="btn btn-warning">
                     <i class="glyphicon glyphicon-ok"></i>
                     Actualizar
                  </button>
                  <a href="<?php echo site_url('rutas/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la rutas :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
