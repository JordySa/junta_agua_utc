<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo site_url(); ?>/historialpropietarios/procesarActualizacion" method="post">
                <input type="hidden" name="id_his" id="id_his" value="<?php echo $historial_propietario->id_his; ?>">
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

                <input type="hidden" name="actualizacion_his" id="actualizacion_his">
                <label for="">ESTADO</label>
                <select class="form-control" name="estado_his" id="estado_his" required>
                    <option value="">--Seleccione el estado--</option>
                    <option value="ACTIVO">ACTIVO</option>
                    <option value="INACTIVO">INACTIVO</option>
                </select>
                <br>
                <br>
                <label for="">OBSERVACION</label>
                <select class="form-control" name="observacion_his" id="observacion_his" required>
                    <option value="">--Seleccione tipo de propietario--</option>
                    <option value="NUEVO">NUEVO</option>
                    <option value="ANTIGUO">ANTIGUO</option>
                </select>
                <br>
                <br>
                <label for="">FECHA DE ACTUALIZACION MANUAL DEL PROPIETARIO</label>
                <input class="form-control" type="text" value="<?php echo $historial_propietario->fecha_cambio_his; ?>" name="fecha_cambio_his" id="fecha_cambio_his">
                <input class="form-control" value="<?php echo $historial_propietario->creacion_his; ?>" type="hidden" name="creacion_his" id="creacion_his">
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
    
    // Asignar la fecha actual al campo oculto de actualización
    document.getElementById('actualizacion_his').value = fechaFormateada;
</script>

<script type="text/javascript">
    //Activando el medidor seleccionado para el historial
    $("#fk_id_med").val("<?php echo $historial_propietario->fk_id_med; ?>");
    //Activando el socio seleccionado para el historial
    $("#fk_id_soc").val("<?php echo $historial_propietario->fk_id_soc; ?>");
    //Activando el estado seleccionado para el historial
    $("#estado_his").val("<?php echo $historial_propietario->estado_his; ?>");
    //Activando la observación seleccionada para el historial
    $("#observacion_his").val("<?php echo $historial_propietario->observacion_his; ?>");
    //Activando el propietario actual seleccionado para el historial
    $("#propietario_actual_his").val("<?php echo $historial_propietario->propietario_actual_his; ?>");

</script>
