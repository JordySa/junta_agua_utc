<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO SOCIO
</legend>
<form id="frm_nuevo_socio" class=""
enctype="multipart/form-data"
action="<?php echo site_url('socios/guardarSocio'); ?>" method="post">
 <div class="row">
  <div class="col-md-4 text-right">
    <b>TIPO DE SOCIO:</b><br>
    </div>
  <div class="col-md-7">
    <select class="form-control" name="tipo_soc">
      <option value="">--ELIJA EL TIPO---</option>
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
        <input type="text" id="identificacion_soc" name="identificacion_soc" value=""
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
        <input type="text" name="primer_apellido_soc" value=""
        class="form-control"
        placeholder="Ingrese el nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">SEGUNDO APELLIDO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="segundo_apellido_soc" value=""
        class="form-control"
        placeholder="Ingrese el nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="nombres_soc" value=""
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
        <input type="text" name="email_soc" value=""
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
        value="" required accept="image/*">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TELEFONO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="teledono_soc" value=""
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
        <input type="text" name="direccion_soc" value=""
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
        <input type="datetime-local" id="fecha_nacimiento_soc" name="fecha_nacimiento_soc" value=""
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
         <option value="">--ELIJA LA OPCCION---</option>
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
          <a href="<?php echo site_url('socios/index'); ?>"
            class="btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i>
            Cancelar
          </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_socio").validate({
        rules:{
            identificacion_soc:{
              required:true,
              minlength:10,
              maxlength:10

            },
            nombre_soc:{
              required:true,
              minlength:3
            },
            email_soc:{
              required:true,

            },
          },
        messages:{
            identificacion_soc:{
              required:"Por favor ingrese el nombre",
              minlength:"Digite 10 numeros",
              maxlength:"Cédula Incorrecta"
            },
            nombre_soc:{
              required:"Por favor ingrese el nombre",
              minlength:"descripcion incorrecta"
            },
            email_soc:{
              required:"Por favor ingrese el email",

            }
        }
     });
</script>






<!-- ll -->
