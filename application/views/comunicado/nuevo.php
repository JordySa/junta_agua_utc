<div class="container">
    <legend class="text-center">
        <i class="glyphicon glyphicon-pencil"></i> Nuevo Comunicado
    </legend>
    <hr>
    <form action="<?php echo site_url('comunicado/guardar'); ?>" method="post">
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
        <a href="<?php echo site_url('comunicado'); ?>" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
    </form>
</div>
