<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO TIPO DE EVENTO
</legend>
<form id="frm_nuevo_evento" class=""
enctype="multipart/form-data"
action="<?php echo site_url('eventos/guardarEvento'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="nombre_te" value=""
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
        <select class="form-control" name="estado_te">
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
    <input type="datetime-local" id="creacion_te" name="creacion_te"
      class="form-control" placeholder="Ingrese la creación" required>
  </div>
</div>

<script>
  // Obtiene la fecha y hora actual en formato ISO
  var now = new Date().toISOString().slice(0, 16);

  // Asigna la fecha y hora actual al campo de entrada
  document.getElementById("creacion_te").value = now;
</script>

    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">ACTUALIZACIÓN:</label>
      </div>
      <div class="col-md-7">
        <input type="datetime-local" id="actualizacion_te" name="actualizacion_te" value=""
        class="form-control"
        placeholder="Ingrese la actualizacion" required>
      </div>
    </div>
    <br>
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
          <a href="<?php echo site_url('eventos/index'); ?>"
            class="btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i>
            Cancelar
          </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_evento").validate({
        rules:{
            nombre_te:{
              required:true,
              minlength:3
            },
            estado_te:{
              required:true,

            },
            creacion_te:{
              required:true,
              minlength:3
            },
            actualizacion_te:{
              required:true,
              minlength:3
            },
          },
        messages:{
            nombre_te:{
              required:"Por favor ingrese el nombre",
              minlength:"Nombre Incorrecto"
            },
            estado_te:{
              required:"Por favor seleccione el estado",

            },
            creacion_te:{
              required:"Por favor seleccione la fecha de creación",
              minlength:"descripcion incorrecta"
            },
            actualizacion_te:{
              required:"Por favor seleccione la fecha de actualizacion",
              minlength:"descripcion incorrecta"
            }
        }
     });
</script>






<!-- ll -->
