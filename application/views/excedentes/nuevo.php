<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo site_url(); ?>/excedentes/guardarExcedente"
            method="post"
            id="frm_nuevo_excedente"
            enctype="multipart/form-data">
        <br>
        <br>
        <label for="id_tar">Tarifa</label>
        <select class="form-control" name="id_tar" id="id_tar" required>
          <option value="">--Seleccione una tarifa--</option>
          <?php if ($listadoTarifas): ?>
            <?php foreach ($listadoTarifas->result() as $tarifaTemporal): ?>
              <option value="<?php echo $tarifaTemporal->id_tar; ?>">
                <?php echo $tarifaTemporal->nombre_tar; ?>
              </option>
            <?php endforeach; ?>
          <?php endif; ?>
        </select>
        <br>
        <br>
        <label for="limite_minimo_ex">LIMITE MINIMO</label>
        <input class="form-control" type="text" name="limite_minimo_ex" id="limite_minimo_ex" placeholder="Ingrese el límite mínimo">
        <br>
        <br>
        <label for="limite_maximo_ex">LIMITE MAXIMO</label>
        <input class="form-control" type="text" name="limite_maximo_ex" id="limite_maximo_ex" placeholder="Ingrese el límite máximo">
        <br>
        <br>
        <label for="tarifa_ex">TARIFA</label>
        <input class="form-control" type="text" name="tarifa_ex" id="tarifa_ex" placeholder="Ingrese la tarifa">
        <br>
        <br>
        <!-- Campo de fecha de actualización oculto -->
        <input class="form-control" type="hidden" name="fecha_actualizacion_ex" id="fecha_actualizacion_ex">
        <!-- Campo de fecha de creación oculto -->
        <input class="form-control" type="hidden" name="fecha_creacion_ex" id="fecha_creacion_ex">
        <br>
        <br>
        <button type="submit" name="button" class="btn btn-primary">GUARDAR</button>
        &nbsp;&nbsp;&nbsp;
        <a href="<?php echo site_url(); ?>/excedentes/index" class="btn btn-warning">
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
  document.getElementById('fecha_actualizacion_ex').value = fechaFormateada;
  document.getElementById('fecha_creacion_ex').value = fechaFormateada;
</script>

<script type="text/javascript">
  $("#frm_nuevo_excedente").validate({
    rules:{
      id_tar:{
        required:true
      },
      limite_minimo_ex:{
        required:true,
        minlength:1,
        number:true
      },
      limite_maximo_ex:{
        required:true,
        minlength:1,
        number:true
      },
      tarifa_ex:{
        required:true,
        number:true
      }
    },
    messages:{
      id_tar:{
        required:"Por favor seleccione el tipo de tarifa"
      },
      limite_minimo_ex:{
        required:"Por favor ingrese el límite mínimo",
        minlength:"El límite debe tener un valor mínimo",
        number:"El límite solo acepta números"
      },
      limite_maximo_ex:{
        required:"Por favor ingrese el límite máximo",
        minlength:"El límite debe tener un valor máximo",
        number:"El límite solo acepta números"
      },
      tarifa_ex:{
        required:"Por favor ingrese la tarifa",
        number:"La tarifa solo acepta números"
      }
    }
  });
</script>
