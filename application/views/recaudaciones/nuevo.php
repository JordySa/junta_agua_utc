<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA RECAUDACIÓN
</legend>
<form id="frm_nuevo_recaudacion" class=""
enctype="multipart/form-data"
action="<?php echo site_url('recaudaciones/guardarRuta'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for=""># FACTURA:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="numero_factura_rec" value=""
        class="form-control"
        placeholder="Ingrese el numero de factura" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for=""># AUTORIZACION:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="numero_autorizacion_rec" name="numero_autorizacion_rec" value=""
        class="form-control"
        placeholder="Ingrese la autorizacion" required>
      </div>
    </div>
    <br>
    <div class="row">
  <div class="col-md-4 text-right">
    <label for="creacion_te">FECHA AUTORIZACION:</label>
  </div>
  <div class="col-md-7">
    <input type="datetime-local" id="fecha_hora_autorizacion_rec" name="fecha_hora_autorizacion_rec"
      class="form-control" placeholder="Ingrese la fecha" required>
  </div>
</div>

<script>
  // Obtiene la fecha y hora actual en formato ISO
  var now = new Date().toISOString().slice(0, 16);

  // Asigna la fecha y hora actual al campo de entrada
  document.getElementById("fecha_hora_autorizacion_rec").value = now;
</script>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">AMBIENTE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="descripcion_rut" name="descripcion_rut" value=""
        class="form-control"
        placeholder="Ingrese el ambiente" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">EMISION:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="emision_rev" name="emision_rev" value=""
        class="form-control"
        placeholder="Ingrese la emision" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CLAVE ACCESO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="clave_acceso_rec" name="clave_acceso_rec" value=""
        class="form-control"
        placeholder="Ingrese la clave" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">EMAIL:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="email_rec" name="email_rec" value=""
        class="form-control"
        placeholder="Ingrese el email" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">OBSERVACION:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="observacion_rec" name="observacion_rec" value=""
        class="form-control"
        placeholder="Ingrese la observacion" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="nombre_rec" name="nombre_rec" value=""
        class="form-control"
        placeholder="Ingrese el nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">IDENTIFICACION:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="identificacion_rec" name="identificacion_rec" value=""
        class="form-control"
        placeholder="Ingrese la identificacion" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DIRECCION:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="direccion_rec" name="direccion_rec" value=""
        class="form-control"
        placeholder="Ingrese la direccion" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <b>ESTADO:</b><br>
        </div>
      <div class="col-md-7">
        <select class="form-control" name="estado_rec">
          <option value="">--ELIJA EL ESTADO---</option>
          <option value="Activo">ACTIVO</option>
          <option value="Inactivo">INACTIVO</option>
        </select>
      </div>
  </div>
    <br>
    <div class="row">
  <div class="col-md-4 text-right">
    <label for="creacion_te">FECHA EMISION:</label>
  </div>
  <div class="col-md-7">
    <input type="datetime-local" id="fecha_emision_rec" name="fecha_emision_rec"
      class="form-control" placeholder="Ingrese la emision" required>
  </div>
</div>

<script>
  // Obtiene la fecha y hora actual en formato ISO
  var now = new Date().toISOString().slice(0, 16);

  // Asigna la fecha y hora actual al campo de entrada
  document.getElementById("fecha_emision_rec").value = now;
</script>
    <br>
    <div class="row">
  <div class="col-md-4 text-right">
    <label for="creacion_te">FECHA CREACIÓN:</label>
  </div>
  <div class="col-md-7">
    <input type="datetime-local" id="fecha_creacion_rec" name="fecha_creacion_rec"
      class="form-control" placeholder="Ingrese la creación" required>
  </div>
</div>

<script>
  // Obtiene la fecha y hora actual en formato ISO
  var now = new Date().toISOString().slice(0, 16);

  // Asigna la fecha y hora actual al campo de entrada
  document.getElementById("fecha_creacion_rec").value = now;
</script>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for=""> FECHA ACTUALIZACIÓN:</label>
      </div>
      <div class="col-md-7">
        <input type="datetime-local" id="fecha_actualizacion_rec" name="fecha_actualizacion_rec" value=""
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
                  class="btn btn-primary">
             <i class="glyphicon glyphicon-ok"></i>
             Guardar
          </button>
          <a href="<?php echo site_url('recaudaciones/index'); ?>"
            class="btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i>
            Cancelar
          </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_recaudacion").validate({
        rules:{
            numero_factura_rec:{
              required:true,
              minlength:1
            },
            numero_autorizacion_rec:{
              required:true,
              minlength:1
            },
            ambiente_rec:{
              required:true,

            },
          },
        messages:{
            numero_factura_rec:{
              required:"Por favor ingrese el nombre",
              minlength:"Nombre Incorrecto"
            },
            numero_autorizacion_rec:{
              required:"Por favor ingrese la descripcion",
              minlength:"descripcion incorrecta"
            },
            ambiente_rec:{
              required:"Por favor elija el estado",

            }
        }
     });
</script>






<!-- ll -->
