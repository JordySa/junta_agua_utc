<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo site_url(); ?>/lecturas/procesarActualizacion" method="post">
                <input type="hidden" name="id_lec" id="id_lec" value="<?php echo $lectura->id_lec; ?>">
                <br>
                <br>

                <label for="">Historial Propietario</label>
        <select class="form-control" name="fk_id_his" id="fk_id_his" required>
          <option value="">--Seleccione Propietario--</option>
          <?php if ($listadoHistorialPropietarios): ?>
            <?php foreach ($listadoHistorialPropietarios->result() as $HistorialpropietarioTemporal): ?>
              <option value="<?php echo $HistorialpropietarioTemporal->id_his; ?>">
                <?php echo $HistorialpropietarioTemporal->nombres_soc; ?>
              </option>
            <?php endforeach; ?>
          <?php endif; ?>
        </select>
        <br>
        <br>

        <label for="">Consumo</label>
        <select class="form-control" name="fk_id_consumo" id="fk_id_consumo" required>
          <option value="">--Seleccione Medidor Serie--</option>
          <?php if ($listadoConsumos): ?>
            <?php foreach ($listadoConsumos->result() as $consumoTemporal): ?>
              <option value="<?php echo $consumoTemporal->id_consumo; ?>">
                <?php echo $consumoTemporal->estado_consumo;?>
              </option>
            <?php endforeach; ?>
          <?php endif; ?>
        </select>
        <br>
        <br>
        <label for="anio_lect">AÑO</label>
<select class="form-control" name="anio_lec" id="anio_lec" required>
    <option value="">--Seleccione el año--</option>
</select>
<br>
<br>

<label for="mes_lect">MES</label>
<select class="form-control" name="mes_lec" id="mes_lec" required>
    <option value="">--Seleccione el mes--</option>
</select>
<br>
<br>
            <label for="">ESTADO</label>
    <select class="form-control" name="estado_lec" id="estado_lec" required>
        <option value="">--Seleccione el estado--</option>
        <option value="INGRESADA">INGRESADA</option>
        <option value="COBRADA">COBRADA</option>
    </select>
    <br>
    <br>
            <label for="">LECTURA ANTERIOR</label>
            <input class="form-control" type="text" value="<?php echo $lectura->lectura_anterior_lec; ?>"
            name="lectura_anterior_lec" id="lectura_anterior_lec" required>
            <br>
            <br>
            <label for="">LECTURA ACTUAL</label>
            <input class="form-control" type="text" value="<?php echo $lectura->lectura_actual_lec; ?>"
            name="lectura_actual_lec" id="lectura_actual_lec" required>
            <br>
            <br>
            <input class="form-control"  type="hidden"  value="<?php echo $lectura->fecha_creacion_lec; ?>"
            name="fecha_creacion_lec" id="fecha_creacion_lec">
            <input class="form-control"  type="hidden" name="fecha_actualizacion_lec" id="fecha_actualizacion_lec">
            <br>
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
<script>
  // Obtener la fecha actual
  var fechaActual = new Date();
  
  // Formatear la fecha como YYYY-MM-DD HH:MM:SS
  var fechaFormateada = fechaActual.toISOString().slice(0, 19).replace('T', ' ');

  // Asignar la fecha actual a los campos de fecha
    document.getElementById('fecha_actualizacion_lec').value = fechaFormateada;

</script>

<script>
    // Array de nombres de los meses en mayúsculas
    var meses = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];

    // Obtener el elemento select
    var selectMes = document.getElementById("mes_lec");

    // Generar opciones para los meses
    for (var i = 0; i < meses.length; i++) {
        var option = document.createElement("option");
        option.text = meses[i];
        option.value = meses[i]; // Usa el nombre del mes como valor
        selectMes.appendChild(option);
    }
</script>
<script>
    // Obtener el elemento select
    var selectAnio = document.getElementById("anio_lec");
    
    // Año actual
    var anioActual = new Date().getFullYear();
    
    // Generar opciones para los años desde el 2020 hasta el año actual
    for (var i = 2020; i <= anioActual; i++) {
        var option = document.createElement("option");
        option.text = i;
        option.value = i;
        selectAnio.appendChild(option);
    }
</script>
<script type="text/javascript">
    //Activando el medidor seleccionado para el historial
    $("#fk_id_his").val("<?php echo $lectura->fk_id_his; ?>");
    $("#fk_id_consumo").val("<?php echo $lectura->fk_id_consumo; ?>");
    $("#anio_lec").val("<?php echo $lectura->anio_lec; ?>");
    $("#mes_lec").val("<?php echo $lectura->mes_lec; ?>");
    $("#estado_lec").val("<?php echo $lectura->estado_lec; ?>");
</script>

