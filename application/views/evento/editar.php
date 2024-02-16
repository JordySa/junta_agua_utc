<div class="container">
    <h1 class="mt-4">Actualizar Evento</h1>
    <form method="post" action="<?php echo site_url('evento/actualizar'); ?>">
        <input type="hidden" name="id_eve" value="<?php echo $evento->id_eve; ?>">
        <div class="form-group">
            <label for="descripcion_eve">Descripción:</label>
            <input type="text" class="form-control" id="descripcion_eve" name="descripcion_eve" value="<?php echo $evento->descripcion_eve; ?>">
        </div>
        <div class="form-group">
            <label for="fecha_hora_eve">Fecha y Hora:</label>
            <input type="text" class="form-control" id="fecha_hora_eve" name="fecha_hora_eve" value="<?php echo $evento->fecha_hora_eve; ?>">
        </div>
        <div class="form-group">
            <label for="lugar_eve">Lugar:</label>
            <input type="text" class="form-control" id="lugar_eve" name="lugar_eve" value="<?php echo $evento->lugar_eve; ?>">
        </div>
        <div class="form-group">
            <label for="fk_id_te">ID Tipo de Evento:</label>
            <input type="text" class="form-control" id="fk_id_te" name="fk_id_te" value="<?php echo $evento->fk_id_te; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
