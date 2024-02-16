<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR TARIFAS</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($tarifaEditar): ?>
        <!-- <?php print_r($tarifaEditar); ?> -->
        <form class="" action="<?php echo site_url('tarifas/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_tar"
              value="<?php echo $tarifaEditar->id_tar; ?>">
            </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="nombre_tar"
                value="<?php echo $tarifaEditar->nombre_tar; ?>"
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
                <input type="text" name="descripcion_tar"
                value="<?php echo $tarifaEditar->descripcion_tar; ?>"
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
                <select class="form-control" name="estado_tar"
                value="<?php echo $tarifaEditar->estado_tar; ?>">
                  <option value="">--ELIJA EL ESTADO---</option>
                  <option value="Activo">ACTIVO</option>
                  <option value="Inactivo">INACTIVO</option>
                </select>
              </div>
           </div>
           <br>
           <div class="row">
             <div class="col-md-4 text-right">
               <label for="">METROS CÚBICOS:</label>
             </div>
             <div class="col-md-7">
               <input type="number" id="m3_maximo_tar" name="m3_maximo_tar" value="<?php echo $tarifaEditar->m3_maximo_tar; ?>"
               class="form-control" placeholder="Ingrese los metros cubicos" required step="0.01" min="0">
             </div>
           </div>
         <br>
           <div class="row">
           <div class="col-md-4 text-right">
             <label for="">TARIFA BÁSICA:</label>
           </div>
           <div class="col-md-7">
             <input type="number" id="tarifa_basica_tar" name="tarifa_basica_tar" value="<?php echo $tarifaEditar->tarifa_basica_tar; ?>"
             class="form-control" placeholder="Ingrese la tarifa basica" required step="0.01" min="0">
           </div>
         </div>
         <br>
           <div class="row">
           <div class="col-md-4 text-right">
             <label for="">TARIFA EXCEDENTE:</label>
           </div>
           <div class="col-md-7">
             <input type="number" id="tarifa_excedente_tar" name="tarifa_excedente_tar" value="<?php echo $tarifaEditar->tarifa_excedente_tar; ?>"
             class="form-control" placeholder="Ingrese la tarifa excedente" required step="0.01" min="0">
           </div>
         </div>
         <br>
           <div class="row">
             <div class="col-md-4 text-right">
               <label for="">VALOR MORA:</label>
             </div>
             <div class="col-md-7">
               <input type="number" id="valor_mora_tar" name="valor_mora_tar" value="<?php echo $tarifaEditar->valor_mora_tar; ?>"
               class="form-control" placeholder="Ingrese el valor mora" required step="0.01" min="0">
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
                  <a href="<?php echo site_url('tarifas/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la tarifas :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
