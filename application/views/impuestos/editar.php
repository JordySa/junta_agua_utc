<br>
<div class="container">
<div class="row">

<div class="col-md-12">

<form
action="<?php echo site_url(); ?>/impuestos/procesarActualizacion"
  method="post"
  >
  <input type="hidden" name="id_imp" id="id_imp"
   value="<?php echo $impuesto->id_imp; ?>">
    <br>
    <br>

    <label for="nombre_imp">Nombre</label>
    <input class="form-control" value="<?php echo $impuesto->nombre_imp; ?>"
        type="text" name="nombre_imp" id="nombre_imp" placeholder="Ingrese el nombre del impuesto">
        <br>
        <br>
        <label for="descripcion_imp">Descripción</label>
        <input class="form-control" value="<?php echo $impuesto->descripcion_imp; ?>"
        type="text" name="descripcion_imp" id="descripcion_imp" placeholder="Ingrese la descripción del impuesto">
        <br>
        <br>
        <label for="porcentaje_imp">Porcentaje</label>
        <input class="form-control" value="<?php echo $impuesto->porcentaje_imp; ?>"
        type="text" name="porcentaje_imp" id="porcentaje_imp" placeholder="Ingrese el porcentaje del impuesto">
        <br>
        <br>
        <label for="retencion_imp">Retención</label>
        <input class="form-control" value="<?php echo $impuesto->retencion_imp; ?>"
        type="text" name="retencion_imp" id="retencion_imp" placeholder="Ingrese la retención del impuesto">
        <br>
        <br>
        <label for="estado_imp">Estado</label>
        <select class="form-control" name="estado_imp" id="estado_imp" required>
          <option value="">--Seleccione un estado--</option>
          <option value="ACTIVO">ACTIVO</option>
          <option value="INACTIVO">INACTIVO</option>
        </select>
        <input class="form-control" value="<?php echo $impuesto->creacion_imp; ?>"
        type="hidden" name="creacion_imp" id="creacion_imp">
        <!-- Campo de fecha de actualización oculto -->
        <input class="form-control" type="hidden" name="actualizacion_imp" id="actualizacion_imp">
        <!-- Campo de fecha de creación oculto -->

        <br>
        <br>

        <button type="submit" name="button" class="btn btn-primary">GUARDAR</button>
        &nbsp;&nbsp;&nbsp;
        <a href="<?php echo site_url(); ?>/impuestos/index" class="btn btn-warning">
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
    document.getElementById('actualizacion_imp').value = fechaFormateada;

</script>

<script type="text/javascript">
    $("#estado_imp").val("<?php echo $impuesto->estado_imp; ?>");

</script>
