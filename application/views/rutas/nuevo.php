<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA RUTA
</legend>
<form id="frm_nuevo_ruta" class=""
enctype="multipart/form-data"
action="<?php echo site_url('rutas/guardarRuta'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="nombre_rut" value=""
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
        <input type="text" id="descripcion_rut" name="descripcion_rut" value=""
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
        <select class="form-control" name="estado_rut">
          <option value="">--ELIJA EL ESTADO---</option>
          <option value="Activo">ACTIVO</option>
          <option value="Inactivo">INACTIVO</option>
        </select>

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
          <a href="<?php echo site_url('rutas/index'); ?>"
            class="btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i>
            Cancelar
          </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_ruta").validate({
        rules:{
            nombre_rut:{
              required:true,
              minlength:3
            },
            descripcion_rut:{
              required:true,
              minlength:3
            },
            estado_rut:{
              required:true,

            },
          },
        messages:{
            nombre_rut:{
              required:"Por favor ingrese el nombre",
              minlength:"Nombre Incorrecto"
            },
            descripcion_rut:{
              required:"Por favor ingrese la descripcion",
              minlength:"descripcion incorrecta"
            },
            estado_rut:{
              required:"Por favor elija el estado",

            }
        }
     });
</script>






<!-- ll -->
