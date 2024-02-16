<div class="container">
    <h1 class="mt-4">Ingresar Nueva Asistencia</h1>
    <form method="post" action="<?php echo site_url('asistencia/guardar'); ?>">

    <div class="form-group">
            <label for="fk_id_eve">ID de Evento:</label>
            <input type="text" class="form-control" id="fk_id_eve" name="fk_id_eve">
        </div>
        <div class="form-group">
            <label for="fk_id_soc">ID de Socio:</label>
            <input type="text" class="form-control" id="fk_id_soc" name="fk_id_soc">
        </div>
        <div class="form-group">
            <label for="tipo_asi">Tipo de Asistencia:</label>
            <input type="text" class="form-control" id="tipo_asi" name="tipo_asi">
        </div>
        <div class="form-group">
            <label for="valor_asi">Valor de la Asistencia:</label>
            <input type="text" class="form-control" id="valor_asi" name="valor_asi">
        </div>
        <div class="form-group">
            <label for="atraso_asi">Atraso:</label>
            <input type="text" class="form-control" id="atraso_asi" name="atraso_asi">
        </div>
        <div class="form-group">
            <label for="valor_atraso_asi">Valor de Atraso:</label>
            <input type="text" class="form-control" id="valor_atraso_asi" name="valor_atraso_asi">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>



</form>
</div>



