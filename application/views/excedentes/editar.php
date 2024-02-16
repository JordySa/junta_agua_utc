<br>
<div class="container">
<div class="row">

<div class="col-md-12">

<form
action="<?php echo site_url(); ?>/excedentes/procesarActualizacion"
  method="post"
  >
  <input type="hidden" name="id_ex" id="id_ex"
   value="<?php echo $excedente->id_ex; ?>">
    <br>
    <br>
    <label for="">TARIFAS</label>
    <select class="form-control" name="id_tar" id="id_tar"
    required >
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
        <input class="form-control" value="<?php echo $excedente->limite_minimo_ex; ?>" 
         class="form-control" type="text" name="limite_minimo_ex" id="limite_minimo_ex" placeholder="Ingrese el límite mínimo">
        <br>
        <br>
        <label for="limite_maximo_ex">LIMITE MAXIMO</label>
        <input class="form-control" value="<?php echo $excedente->limite_maximo_ex; ?>" 
        type="text" name="limite_maximo_ex" id="limite_maximo_ex" placeholder="Ingrese el límite máximo">
        <br>
        <br>
        <label for="tarifa_ex">TARIFA</label>
        <input class="form-control" value="<?php echo $excedente->tarifa_ex; ?>"
        type="text" name="tarifa_ex" id="tarifa_ex" placeholder="Ingrese la tarifa">
        <br>
        <br>
        <!-- Campo de fecha de actualización oculto -->
        <input class="form-control" type="hidden" name="fecha_actualizacion_ex" id="fecha_actualizacion_ex">
        <!-- Campo de fecha de creación oculto -->
        <input class="form-control" value="<?php echo $excedente->fecha_creacion_ex; ?>"
        type="hidden" name="fecha_creacion_ex" id="fecha_creacion_ex">
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
</script>

<script type="text/javascript">
   //Activando  el pais seleccionado para el cliente
   $("#id_tar")
   .val("<?php echo $excedente->id_tar; ?>");
</script>
