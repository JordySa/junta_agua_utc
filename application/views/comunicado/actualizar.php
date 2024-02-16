<div class="container">
    <legend class="text-center">
        <i class="glyphicon glyphicon-edit"></i> Actualizar Comunicado
    </legend>
    <hr>
    <form action="<?php echo site_url('comunicado/procesar_actualizacion'); ?>" method="post">
        <input type="hidden" name="id_com" value="<?php echo $comunicadoEditar->id_com; ?>">
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $comunicadoEditar->fecha_com; ?>" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required><?php echo $comunicadoEditar->mensaje_com; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Actualizar</button>
        <a href="<?php echo site_url('comunicado'); ?>" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
    </form>
</div>
