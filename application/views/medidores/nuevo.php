<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo site_url(); ?>/medidores/guardarMedidor"
            method="post"
            id="frm_nuevo_medidor"
            enctype="multipart/form-data">
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
        <input type="text" name="numero_med" id="numero_med" class="form-control" required>
        <br>
        <br>
        <label for="serie_med">SERIE</label>
        <input type="text" name="serie_med" id="serie_med" class="form-control" required>
        <br>
        <br>
        <label for="marca_med">MARCA</label>
        <input type="text" name="marca_med" id="marca_med" class="form-control" required>
        <br>
        <br>
        <label for="observacion_med">OBSERVACION</label>
        <input type="text" name="observacion_med" id="observacion_med" class="form-control" required>
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
    id="foto_med"  value="" >
    <br>
    <br>
        <input class="form-control"  type="hidden" name="creacion_med" id="creacion_med">
            <input class="form-control"  type="hidden" name="actualizacion_med" id="actualizacion_med">

        <label for="observacion_med">LECTURA INICIAL</label>
        <input type="text" name="lectura_inicial_med" id="lectura_inicial_med" class="form-control" required>
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
    document.getElementById('creacion_med').value = fechaFormateada;
    document.getElementById('actualizacion_med').value = fechaFormateada;

</script>

<script type="text/javascript">
      $("#foto_med").fileinput({
        allowedFileExtensions:["jpeg","jpg","png"],
        dropZoneEnabled:true
      });
</script>

<script type="text/javascript">
  $("#frm_nuevo_medidor").validate({
    rules:{
        fk_id_rut:{
            required:true
        },
        fk_id_tar:{
            required:true
        },
        numero_med:{
            required:true
        },
        serie_med:{
            required:true
        },
        marca_med:{
            required:true
        },
        observacion_med:{
            required:true
        },
        estado_med:{
            required:true
        },
        lectura_inicial_med:{
            required:true,
            number:true
        }

    },
    messages:{
        fk_id_rut:{
            required:"Seleccione una Ruta"
        },
        fk_id_tar:{
            required:"Seleccione una Tarifa"
        },
        numero_med:{
            required:"Ingrese el número del medidor"
        },
        serie_med:{
            required:"Ingrese la serie del medidor"
        },
        marca_med:{
            required:"Ingrese la marca del medidor"
        },
        observacion_med:{
            required:"Ingrese la observación del medidor"
        },
        estado_med:{
            required:"Seleccione el estado del medidor"
        },
        lectura_inicial_med:{
            required:"Ingrese la lectura inicial del medidor",
            number:"Ingrese un número válido"
        }
    }
  });
</script>
