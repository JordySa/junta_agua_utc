<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR EVENTOS</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($eventoEditar): ?>
        <!-- <?php print_r($eventoEditar); ?> -->
        <form class="" action="<?php echo site_url('eventos/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_te"
              value="<?php echo $eventoEditar->id_te; ?>">
            </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="nombre_te"
                value="<?php echo $eventoEditar->nombre_te; ?>"
                class="form-control"
                placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <b>ESTADO:</b><br>
                </div>
              <div class="col-md-7">
                <select class="form-control" name="estado_te"
                value="<?php echo $eventoEditar->estado_te; ?>">
                  <option value="">--ELIJA EL ESTADO---</option>
                  <option value="Activo">ACTIVO</option>
                  <option value="Inactivo">INACTIVO</option>
                </select>
              </div>
          </div>
            <br>
            <div class="row">
      <div class="col-md-4 text-right">
        <label for="creacion_te">CREACIÓN:</label>
      </div>
      <div class="col-md-7">
        <input type="datetime-local" id="creacion_te" name="creacion_te" value="<?php echo $eventoEditar->creacion_te; ?>"
          class="form-control" placeholder="Ingrese la creación" required readonly>
      </div>
    </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">ACTUALIZACIÓN:</label>
              </div>
              <div class="col-md-7">
                <input type="datetime-local" id="actualizacion_te" name="actualizacion_te" value="<?php echo $eventoEditar->actualizacion_te; ?>"
                class="form-control"
                placeholder="Ingrese la actualizacion" required>
              </div>
            </div>
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
                  <a href="<?php echo site_url('eventos/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la eventos :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
