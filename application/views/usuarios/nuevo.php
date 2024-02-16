<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA USUARIO
</legend>
<form id="frm_nuevo_usuario" class=""
enctype="multipart/form-data"
action="<?php echo site_url('usuarios/guardarUsuario'); ?>" method="post">
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">APELLIDO:</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="apellido_usu" value=""
    class="form-control"
    placeholder="Ingrese el apellido" required>
  </div>
</div>
<br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="nombre_usu" value=""
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
        <input type="text" id="email_usu" name="email_usu" value=""
        class="form-control"
        placeholder="Ingrese el email" required>
      </div>
    </div>
    <br>
    <div class="row">
  <div class="col-md-4 text-right">
    <label for="">PASSWORD:</label>
  </div>
  <div class="col-md-7">
    <div class="input-group">
      <input type="password" name="password_usu" value="" class="form-control" placeholder="Ingrese el password" required>
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="togglePassword">Mostrar</button>
      </div>
    </div>
  </div>
</div>

<script>
  document.getElementById('togglePassword').addEventListener('click', function(e) {
    // Obtenemos el campo de contraseña
    const passwordInput = document.querySelector('input[name="password_usu"]');

    // Cambiamos el tipo de input de password a text o viceversa
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      this.textContent = 'Ocultar';
    } else {
      passwordInput.type = 'password';
      this.textContent = 'Mostrar';
    }
  });
</script>

    <br>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <b>ESTADO:</b><br>
        </div>
      <div class="col-md-7">
        <select class="form-control" name="estado_usu">
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
          <a href="<?php echo site_url('usuarios/index'); ?>"
            class="btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i>
            Cancelar
          </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_usuario").validate({
        rules:{
            apellido_usu:{
              required:true,
              minlength:3
            },
            nombre_usu:{
              required:true,
              minlength:3
            },
            email_usu:{
              required:true,
              minlength:3
            },
            password_usu:{
              required:true,
              minlength:3
            },
            estado_usu:{
              required:true,

            },
          },
        messages:{
            apellido_usu:{
              required:"Por favor ingrese el nombre",
              minlength:"Nombre Incorrecto"
            },
            nombre_usu:{
              required:"Por favor ingrese la descripcion",
              minlength:"descripcion incorrecta"
            },
            email_usu:{
              required:"Por favor ingrese la descripcion",
              minlength:"descripcion incorrecta"
            },
            password_usu:{
              required:"Por favor ingrese la descripcion",
              minlength:"descripcion incorrecta"
            },
            estado_usu:{
              required:"Por favor elija el estado",

            }
        }
     });
</script>






<!-- ll -->
