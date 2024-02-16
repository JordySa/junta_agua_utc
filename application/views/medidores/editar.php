<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo site_url(); ?>/medidores/procesarActualizacion" method="post">
                <input type="hidden" name="id_med" id="id_med" value="<?php echo $medidor->id_med; ?>">
                <br>
                <br>

                <label for="">Rutas</label>
        <select class="form-control" name="fk_id_rut" id="fk_id_rut" required>
          <option value="">--Seleccione una Ruta--</option>
          <?php if ($listadoRutas): ?>
            <?php foreach ($listadoRutas->result() as $RutaTemporal): ?>
              <option value="<?php echo $RutaTemporal->id_rut; ?>">
                <?php echo $RutaTemporal->nombre_rut; ?>
              </option>
            <?php endforeach; ?>
          <?php endif; ?>
        </select>
        <br>
        <br>

        <label for="">Tarifa</label>
        <select class="form-control" name="fk_id_tar" id="fk_id_tar" required>
          <option value="">--Seleccione una Tarifa--</option>
          <?php if ($listadoTarifas): ?>
            <?php foreach ($listadoTarifas->result() as $TarifaTemporal): ?>
              <option value="<?php echo $TarifaTemporal->id_tar; ?>">
                <?php echo $TarifaTemporal->nombre_tar;?>
              </option>
            <?php endforeach; ?>
          <?php endif; ?>
        </select>
        <br>
        <br>
        <label for="numero_med">NUMERO</label>
        <input type="text" value="<?php echo $medidor->numero_med; ?>"
        name="numero_med" id="numero_med" class="form-control" required>
        <br>
        <br>
        <label for="serie_med">SERIE</label>
        <input type="text" value="<?php echo $medidor->serie_med; ?>"
        name="serie_med" id="serie_med" class="form-control" required>
        <br>
        <br>
        <label for="marca_med">MARCA</label>
        <input type="text" value="<?php echo $medidor->marca_med; ?>"
        name="marca_med" id="marca_med" class="form-control" required>
        <br>
        <br>
        <label for="observacion_med">OBSERVACION</label>
        <input type="text" value="<?php echo $medidor->observacion_med; ?>"
        name="observacion_med" id="observacion_med" class="form-control" required>
        <br>
        <br>
        <label for="estado_med">ESTADO</label>
        <select class="form-control" name="estado_med" id="estado_med" required>
            <option value="">--Seleccione el estado--</option>
            <option value="ACTIVO">ACTIVO</option>
            <option value="INACTIVO">INACTIVO</option>
        </select>
        <br>
        <br>
        <label for="">FOTO</label>
    <input type="file" name="foto_med"
    accept="image/*"
    id="foto_med"  value="<?php echo $medidor->foto_med; ?>" >
    <br>
    <br>
        <input class="form-control"  value="<?php echo $medidor->creacion_med; ?>" 
        type="hidden" name="creacion_med" id="creacion_med">
            <input class="form-control"  type="hidden" name="actualizacion_med" id="actualizacion_med">

        <label for="observacion_med">LECTURA INICIAL</label>
        <input type="text" name="lectura_inicial_med" value="<?php echo $medidor->lectura_inicial_med; ?>"
        id="lectura_inicial_med" class="form-control" required>
        <br>



        <button type="submit" name="button" class="btn btn-primary">GUARDAR</button>
        &nbsp;&nbsp;&nbsp;
        <a href="<?php echo site_url(); ?>/lecturas/index" class="btn btn-warning">
          <i class="fa fa-times"> </i>
          CANCELAR
        </a>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
      $("#foto_med").fileinput({
        allowedFileExtensions:["jpeg","jpg","png"],
        dropZoneEnabled:true
      });
</script>
<script>
  // Obtener la fecha actual
  var fechaActual = new Date();
  
  // Formatear la fecha como YYYY-MM-DD HH:MM:SS
  var fechaFormateada = fechaActual.toISOString().slice(0, 19).replace('T', ' ');

  // Asignar la fecha actual a los campos de fecha
    document.getElementById('actualizacion_med').value = fechaFormateada;

</script>


<script type="text/javascript">
    //Activando el medidor seleccionado para el historial
    $("#fk_id_rut").val("<?php echo $medidor->fk_id_rut; ?>");
    $("#fk_id_tar").val("<?php echo $medidor->fk_id_tar; ?>");
    $("#estado_med").val("<?php echo $medidor->estado_med; ?>");

</script>

