<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo site_url(); ?>/lecturas/guardarLectura"
            method="post"
            id="frm_nuevo_lectura"
            enctype="multipart/form-data">
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
            <input class="form-control" type="text" name="lectura_anterior_lec" id="lectura_anterior_lec" required>
            <br>
            <br>
            <label for="">LECTURA ACTUAL</label>
            <input class="form-control" type="text" name="lectura_actual_lec" id="lectura_actual_lec" required>
            <br>
            <br>
            <input class="form-control"  type="hidden" name="fecha_creacion_lec" id="fecha_creacion_lec">
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
    document.getElementById('fecha_creacion_lec').value = fechaFormateada;
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
    // Obtener el año actual
    var currentYear = new Date().getFullYear();

    // Obtener el elemento select
    var selectYear = document.getElementById("anio_lec");

    // Generar opciones para los años (desde el año actual hasta 10 años en el futuro)
    for (var year = currentYear; year <= currentYear + 10; year++) {
        var option = document.createElement("option");
        option.text = year;
        option.value = year;
        selectYear.appendChild(option);
    }
</script>

<script type="text/javascript">
  $("#frm_nuevo_lectura").validate({
    rules:{
        fk_id_his:{
            required:true
        },
        fk_id_consumo:{
            required:true
        },
        anio_lect:{
            required:true
        },
        mes_lect:{
            required:true
        },
        estado_lec:{
            required:true
        },
        lectura_anterior_lec:{
            required:true,
            number:true
        },
        lectura_actual_lec:{
            required:true,
            number:true
        }
    },
    messages:{
        fk_id_his:{
            required:"Por favor seleccione el historial"
        },
        fk_id_consumo:{
            required:"Por favor seleccione el consumo"
        },
        anio_lect:{
            required:"Por favor seleccione el año"
        },
        mes_lect:{
            required:"Por favor seleccione el mes"
        },
        estado_lec:{
            required:"Por favor seleccione el estado"
        },
        lectura_anterior_lec:{
            required:"Por favor ingrese la lectura anterior",
            number:"Por favor ingrese un valor"
        },
        lectura_actual_lec:{
            required:"Por favor ingrese la lectura actual",
            number:"Por favor ingrese un valor"
        }
    }
  });
</script>
