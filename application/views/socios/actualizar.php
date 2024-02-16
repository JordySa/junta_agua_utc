<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR SOCIO</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($socioEditar): ?>
        <!-- <?php print_r($socioEditar); ?> -->
        <form class="" action="<?php echo site_url('socios/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_soc"
              value="<?php echo $socioEditar->id_soc; ?>">
            </center>
            <div class="row">
             <div class="col-md-4 text-right">
               <b>TIPO DE SOCIO:</b><br>
               </div>
             <div class="col-md-7">
               <select class="form-control" name="tipo_soc">
                 <option value="<?php echo $socioEditar->tipo_soc; ?>">--ELIJA EL TIPO---</option>
                 <option value="Activo">NATURAL</option>
                 <option value="Inactivo">JURIDICA</option>
               </select>
             </div>
            </div>
               <br>
               <div class="row">
                 <div class="col-md-4 text-right">
                   <label for="">IDENTIFICACION:</label>
                 </div>
                 <div class="col-md-7">
                   <input type="text" id="identificacion_soc" name="identificacion_soc" value="<?php echo $socioEditar->identificacion_soc; ?>"
                   class="form-control"
                   placeholder="Ingrese la descripcion" required>
                 </div>
               </div>
               <br>
               <div class="row">
                 <div class="col-md-4 text-right">
                   <label for="">PRIMER APELLIDO:</label>
                 </div>
                 <div class="col-md-7">
                   <input type="text" name="primer_apellido_soc" value="<?php echo $socioEditar->primer_apellido_soc; ?>"
                   class="form-control"
                   placeholder="Ingrese el nombre" required>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-4 text-right">
                   <label for="">SEGUNDO APELLIDO:</label>
                 </div>
                 <div class="col-md-7">
                   <input type="text" name="segundo_apellido_soc" value="<?php echo $socioEditar->segundo_apellido_soc ?>"
                   class="form-control"
                   placeholder="Ingrese el nombre" required>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-4 text-right">
                   <label for="">NOMBRE:</label>
                 </div>
                 <div class="col-md-7">
                   <input type="text" name="nombres_soc" value="<?php echo $socioEditar->nombres_soc; ?>"
                   class="form-control"
                   placeholder="Ingrese el nombre" required>
                 </div>
               </div>
               <br>
               <div class="row">
                 <div class="col-md-4 text-right">
                   <label for="">EMAIL:</label>
                 </div>
                 <div class="col-md-7">
                   <input type="text" name="email_soc" value="<?php echo $socioEditar->email_soc; ?>"
                   class="form-control"
                   placeholder="Ingrese el nombre" required>
                 </div>
               </div>
               <br>
               <div class="row">
                 <div class="col-md-4 text-right">
                   <label for="">FOTOGRAFÍA:</label>
                 </div>
                 <div class="col-md-7">
                   <input type="file" name="foto_soc" id="foto_soc"
                   value="<?php echo $socioEditar->foto_soc; ?>" required accept="image/*">
                 </div>
               </div>
               <br>
               <div class="row">
                 <div class="col-md-4 text-right">
                   <label for="">TELEFONO:</label>
                 </div>
                 <div class="col-md-7">
                   <input type="text" name="teledono_soc" value="<?php echo $socioEditar->telefono_soc; ?>"
                   class="form-control"
                   placeholder="Ingrese el nombre" required>
                 </div>
               </div>
               <br>
               <div class="row">
                 <div class="col-md-4 text-right">
                   <label for="">DIRECCION:</label>
                 </div>
                 <div class="col-md-7">
                   <input type="text" name="direccion_soc" value="<?php echo $socioEditar->direccion_soc; ?>"
                   class="form-control"
                   placeholder="Ingrese el nombre" required>
                 </div>
               </div>
               <br>
               <div class="row">
                 <div class="col-md-4 text-right">
                   <label for=""> FECHA DE NACIMIENTO:</label>
                 </div>
                 <div class="col-md-7">
                   <input type="datetime-local" id="fecha_nacimiento_soc" name="fecha_nacimiento_soc" value="<?php echo $socioEditar->fecha_nacimiento_soc; ?>"
                   class="form-control"
                   placeholder="Ingrese la actualizacion" required>
                 </div>
               </div>
               <br>
               <div class="row">
                <div class="col-md-4 text-right">
                  <b>DISCAPACIDAD:</b><br>
                  </div>
                <div class="col-md-7">
                  <select class="form-control" name="discapacidad_soc">
                    <option value="<?php echo $socioEditar->discapacidad_soc; ?>">--ELIJA LA OPCCION---</option>
                    <option value="Activo">SI</option>
                    <option value="Inactivo">NO</option>
                  </select>
                </div>
               </div>
                  <br>
                  <div class="row">
                   <div class="col-md-4 text-right">
                     <b>ESTADO:</b><br>
                     </div>
                   <div class="col-md-7">
                     <select class="form-control" name="estado_soc">
                       <option value="<?php echo $socioEditar->estado_soc; ?>">--ELIJA EL ESTADO---</option>
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
                  <a href="<?php echo site_url('socios/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la socios :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
