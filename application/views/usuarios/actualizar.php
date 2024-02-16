<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR USUARIOS</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($usuarioEditar): ?>
        <!-- <?php print_r($usuarioEditar); ?> -->
        <form class="" action="<?php echo site_url('usuarios/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_usu"
              value="<?php echo $usuarioEditar->id_usu; ?>">
            </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">APELLIDO:</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="apellido_usu"
                value="<?php echo $usuarioEditar->apellido_usu; ?>"
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
                <input type="text" name="nombre_usu" value="<?php echo $usuarioEditar->nombre_usu; ?>"
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
                <input type="text" id="email_usu" name="email_usu" value="<?php echo $usuarioEditar->email_usu; ?>"
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
        <input type="password" name="password_usu" value="<?php echo $usuarioEditar->password_usu; ?>" class="form-control" placeholder="Ingrese el password" required>
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
                  <option value="<?php echo $usuarioEditar->estado_usu; ?>">--ELIJA EL ESTADO---</option>
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
                  <a href="<?php echo site_url('usuarios/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la usuarios :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
