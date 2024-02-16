<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo site_url(); ?>/historialpropietarios/guardarHistorialPropietario"
            method="post"
            id="frm_nuevo_historial"
            enctype="multipart/form-data">
        <br>
        <br>

        <label for="">Medidor</label>
        <select class="form-control" name="fk_id_med" id="fk_id_med" required>
          <option value="">--Seleccione medidor--</option>
          <?php if ($listadoMedidores): ?>
            <?php foreach ($listadoMedidores->result() as $medidorTemporal): ?>
              <option value="<?php echo $medidorTemporal->id_med; ?>">
                <?php echo $medidorTemporal->numero_med; ?>
              </option>
            <?php endforeach; ?>
          <?php endif; ?>
        </select>
        <br>
        <br>

        <label for="">Socio</label>
        <select class="form-control" name="fk_id_soc" id="fk_id_soc" required>
          <option value="">--Seleccione un Socio--</option>
          <?php if ($listadoSocios): ?>
            <?php foreach ($listadoSocios->result() as $socioTemporal): ?>
              <option value="<?php echo $socioTemporal->id_soc; ?>">
                <?php echo $socioTemporal->nombres_soc; ?>
              </option>
            <?php endforeach; ?>
          <?php endif; ?>
        </select>
        <br>
        <br>
                <!-- Campo de fecha de actualización oculto -->
                <input class="form-control" type="hidden" name="actualizacion_his" id="actualizacion_his">
            <label for="">ESTADO</label>
    <select class="form-control" name="estado_his" id="estado_his" required>
        <option value="">--Seleccione el estado--</option>
        <option value="ACTIVO">ACTIVO</option>
        <option value="INACTIVO">INACTIVO</option>
    </select>
    <br>
    <br>
    <input class="form-control" type="hidden" name="actualizacion_his" id="actualizacion_his">
            <label for="">OBSERVACION</label>
    <select class="form-control" name="observacion_his" id="observacion_his" required>
        <option value="">--Seleccione tipo de propietario--</option>
        <option value="NUEVO">NUEVO</option>
        <option value="ANTIGUO">ANTIGUO</option>
    </select>
            <input class="form-control"  type="hidden" name="fecha_cambio_his" id="fecha_cambio_his">
            <input class="form-control"  type="hidden" name="creacion_his" id="creacion_his">
            <br>
            <br>
            <label for="">Propietario Actual</label>
            <select class="form-control" name="propietario_actual_his" id="propietario_actual_his" required>
        <option value="">--Seleccione--</option>
        <option value="SI">SI</option>
        <option value="NO">NO</option>
    </select>
            <br>
            <br>


        <button type="submit" name="button" class="btn btn-primary">GUARDAR</button>
        &nbsp;&nbsp;&nbsp;
        <a href="<?php echo site_url(); ?>/historialpropietarios/index" class="btn btn-warning">
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
    document.getElementById('actualizacion_his').value = fechaFormateada;
    document.getElementById('fecha_cambio_his').value = fechaFormateada;
    document.getElementById('creacion_his').value = fechaFormateada;


</script>

<script type="text/javascript">
  $("#frm_nuevo_historial").validate({
    rules:{
        fk_id_med:{
            required:true
        },
        fk_id_spc:{
            required:true
        },
        estado_his:{
            required:true
        },
        observacion_his:{
            required:true
        },
        propietario_actual_his:{
            required:true
        }
    },
    messages:{
        fk_id_med:{
            required:"Por favor seleccione el medidor"
        },
        fk_id_spc:{
            required:"Por favor seleccione el socio"
        },
        estado_his:{
            required:"Por favor seleccione el estado"
        },
        observacion_his:{
            required:"Por favor ingrese la observación"
        },
        propietario_actual_his:{
            required:"Por favor seleccione el propietario actual"
        }
    }
  });
</script>
