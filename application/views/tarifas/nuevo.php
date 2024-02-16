<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA TARIFA
</legend>
<form id="frm_nuevo_tarifa" class=""
enctype="multipart/form-data"
action="<?php echo site_url('tarifas/guardarTarifa'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="nombre_tar" value=""
        class="form-control"
        placeholder="Ingrese el nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DESCRIPCION:</label>
      </div>
      <div class="col-md-7">
        <input type="text" id="descripcion_tar" name="descripcion_tar" value=""
        class="form-control"
        placeholder="Ingrese la descripcion" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <b>ESTADO:</b><br>
        </div>
      <div class="col-md-7">
        <select class="form-control" name="estado_tar">
          <option value="">--ELIJA EL ESTADO---</option>
          <option value="Activo">ACTIVO</option>
          <option value="Inactivo">INACTIVO</option>
        </select>
      </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">METROS CÚBICOS:</label>
    </div>
    <div class="col-md-7">
      <input type="number" id="m3_maximo_tar" name="m3_maximo_tar" value=""
      class="form-control" placeholder="Ingrese los metros cubicos" required step="0.01" min="0">
    </div>
  </div>
<br>
  <div class="row">
  <div class="col-md-4 text-right">
    <label for="">TARIFA BÁSICA:</label>
  </div>
  <div class="col-md-7">
    <input type="number" id="tarifa_basica_tar" name="tarifa_basica_tar" value=""
    class="form-control" placeholder="Ingrese la tarifa basica" required step="0.01" min="0">
  </div>
</div>
<br>
  <div class="row">
  <div class="col-md-4 text-right">
    <label for="">TARIFA EXCEDENTE:</label>
  </div>
  <div class="col-md-7">
    <input type="number" id="tarifa_excedente_tar" name="tarifa_excedente_tar" value=""
    class="form-control" placeholder="Ingrese la tarifa excedente" required step="0.01" min="0">
  </div>
</div>
<br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">VALOR MORA:</label>
    </div>
    <div class="col-md-7">
      <input type="number" id="valor_mora_tar" name="valor_mora_tar" value=""
      class="form-control" placeholder="Ingrese el valor mora" required step="0.01" min="0">
    </div>
  </div>

    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
          <button type="submit" name="button"
                  class="btn btn-primary">
             <i class="glyphicon glyphicon-ok"></i>
             Guardar
          </button>
          <a href="<?php echo site_url('tarifas/index'); ?>"
            class="btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i>
            Cancelar
          </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_tarifa").validate({
        rules:{
            nombre_tar:{
              required:true,
              minlength:3
            },
            descripcion_tar:{
              required:true,
              minlength:3
            },
            estado_tar:{
              required:true,

            },
          },
        messages:{
            nombre_tar:{
              required:"Por favor ingrese el nombre",
              minlength:"Nombre Incorrecto"
            },
            descripcion_tar:{
              required:"Por favor ingrese la descripcion",
              minlength:"descripcion incorrecta"
            },
            estado_tar:{
              required:"Por favor elija el estado",

            }
        }
     });
</script>






<!-- ll -->
