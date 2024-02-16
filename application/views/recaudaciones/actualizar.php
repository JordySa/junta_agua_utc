<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR RECAUDACIONES</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($recaudacionEditar): ?>
        <!-- <?php print_r($recaudacionEditar); ?> -->
        <form class="" action="<?php echo site_url('recaudaciones/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_rec"
              value="<?php echo $recaudacionEditar->id_rec; ?>">
            </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for=""># FACTURA:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="numero_factura_rec" value="<?php echo $recaudacionEditar->numero_factura_rec; ?>"
                class="form-control"
                placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for=""># AUTORIZACION:</label>
              </div>
              <div class="col-md-7">
                <input type="text" id="numero_autorizacion_rec" name="numero_autorizacion_rec" value="<?php echo $recaudacionEditar->numero_autorizacion_rec; ?>"
                class="form-control"
                placeholder="Ingrese la descripcion" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">AMBIENTE:</label>
              </div>
              <div class="col-md-7">
                <input type="text" id="ambiente_rec" name="ambiente_rec" value="<?php echo $recaudacionEditar->ambiente_rec; ?>"
                class="form-control"
                placeholder="Ingrese la descripcion" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">EMISION:</label>
              </div>
              <div class="col-md-7">
                <input type="text" id="emision_rev" name="emision_rev" value="<?php echo $recaudacionEditar->emision_rev; ?>"
                class="form-control"
                placeholder="Ingrese la descripcion" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">CLAVE ACCESO:</label>
              </div>
              <div class="col-md-7">
                <input type="text" id="clave_acceso_rec" name="clave_acceso_rec" value="<?php echo $recaudacionEditar->clave_acceso_rec; ?>"
                class="form-control"
                placeholder="Ingrese la descripcion" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">EMAIL:</label>
              </div>
              <div class="col-md-7">
                <input type="text" id="email_rec" name="email_rec" value="<?php echo $recaudacionEditar->email_rec; ?>"
                class="form-control"
                placeholder="Ingrese la descripcion" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">OBSERVACION:</label>
              </div>
              <div class="col-md-7">
                <input type="text" id="observacion_rec" name="observacion_rec" value="<?php echo $recaudacionEditar->observacion_rec; ?>"
                class="form-control"
                placeholder="Ingrese la descripcion" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
              <div class="col-md-7">
                <input type="text" id="nombre_rec" name="nombre_rec" value="<?php echo $recaudacionEditar->nombre_rec; ?>"
                class="form-control"
                placeholder="Ingrese la descripcion" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">IDENTIFICACION:</label>
              </div>
              <div class="col-md-7">
                <input type="text" id="identificacion_rec" name="identificacion_rec" value="<?php echo $recaudacionEditar->identificacion_rec; ?>"
                class="form-control"
                placeholder="Ingrese la descripcion" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DIRECCION:</label>
              </div>
              <div class="col-md-7">
                <input type="text" id="direccion_rec" name="direccion_rec" value="<?php echo $recaudacionEditar->direccion_rec; ?>"
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
                <select class="form-control" name="estado_rec">
                  <option value="<?php echo $recaudacionEditar->estado_rec; ?>">--ELIJA EL ESTADO---</option>
                  <option value="Activo">ABIERTO</option>
                  <option value="Inactivo">CERRADO</option>
                </select>
              </div>
          </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for=""> FECHA ACTUALIZACIÓN:</label>
              </div>
              <div class="col-md-7">
                <input type="datetime-local" id="fecha_actualizacion_rec" name="fecha_actualizacion_rec" value="<?php echo $recaudacionEditar->fecha_actualizacion_rec; ?>"
                class="form-control"
                placeholder="Ingrese la actualizacion" required>
              </div>
            </div>
            <br>
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
                  <a href="<?php echo site_url('recaudaciones/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la recaudaciones :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
