<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo site_url(); ?>/perfiles/guardarPerfil"
            method="post"
            id="frm_nuevo_perfil"
            enctype="multipart/form-data">

        <br>
        <br>
        <label for="nombre_per">Nombre</label>
        <input class="form-control" type="text" name="nombre_per" id="nombre_per" placeholder="Ingrese el nombre del perfil">
        <br>
        <br>
        <label for="descripcion_per">Descripción</label>
        <input class="form-control" type="text" name="descripcion_per" id="descripcion_per" placeholder="Ingrese la descripción del perfil">
        <br>
        <br>
        <label for="estado_per">Estado</label>
        <select class="form-control" name="estado_per" id="estado_per" required>
            <option value="">--Seleccione un estado--</option>
            <option value="Activo">ACTIVO</option>
            <option value="Inactivo">INACTIVO</option>
        </select>
        <br>
        <br>
                <!-- Campo de fecha de creación oculto -->
                <input class="form-control" type="hidden" name="creacion_per" id="creacion_per">
        <!-- Campo de fecha de actualización oculto -->
        <input class="form-control" type="hidden" name="actualizacion_per" id="actualizacion_per">
        

        <br>
        <br>

        <button type="submit" name="button" class="btn btn-primary">GUARDAR</button>
        &nbsp;&nbsp;&nbsp;
        <a href="<?php echo site_url(); ?>/perfiles/index" class="btn btn-warning">
          <i class="fa fa-times"> </i>
          CANCELAR
        </a>
      </form>
    </div>
  </div>
</div>

<script>
  // Obtener la fecha actual
  var fechaActual = new Date();
  
  // Formatear la fecha como YYYY-MM-DD HH:MM:SS
  var fechaFormateada = fechaActual.toISOString().slice(0, 19).replace('T', ' ');

  // Asignar la fecha actual a los campos de fecha
    document.getElementById('creacion_per').value = fechaFormateada;
    document.getElementById('actualizacion_per').value = fechaFormateada;

</script>

<script type="text/javascript">
  $("#frm_nuevo_perfil").validate({
    rules:{
        
        nombre_per:{
            required:true
        },
        descripcion_per:{
            required:true
        },
        estado_per:{
            required:true
        }
    },
    messages:{
            
            nombre_per:{
                required:"Ingrese el nombre del perfil"
            },
            descripcion_per:{
                required:"Ingrese la descripción del perfil"
            },
            estado_per:{
                required:"Seleccione el estado del perfil"

    }
    }
  });
</script>
