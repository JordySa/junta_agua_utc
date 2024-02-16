<div class="container">
    <h1 class="mt-4">Actualizar Detalle</h1>
    <form method="post" action="<?php echo site_url('detalle/guardar/'.$detalle->id_det); ?>">


        <input type="hidden" name="id_det" value="<?php echo $detalle->id_det; ?>">
        <div class="form-group">
            <label for="fk_id_lec">fk_id_lec:</label>
            <input type="text" class="form-control" id="fk_id_lec" name="fk_id_lec" value="<?php echo $detalle->fk_id_lec; ?>">
        </div>
        <div class="form-group">
            <label for="fk_id_rec">fk_id_rec:</label>
            <input type="text" class="form-control" id="fk_id_rec" name="fk_id_rec" value="<?php echo $detalle->fk_id_rec; ?>">
        </div>
        <div class="form-group">
            <label for="cantidad_det">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad_det" name="cantidad_det" value="<?php echo $detalle->cantidad_det; ?>">
        </div>
        <div class="form-group">
            <label for="detalle_det">Detalle:</label>
            <input type="text" class="form-control" id="detalle_det" name="detalle_det" value="<?php echo $detalle->detalle_det; ?>">
        </div>
        <div class="form-group">
            <label for="valor_unitario_det">Valor Unitario:</label>
            <input type="text" class="form-control" id="valor_unitario_det" name="valor_unitario_det" value="<?php echo $detalle->valor_unitario_det; ?>">
        </div>
        <div class="form-group">
            <label for="subtotal_det">Subtotal:</label>
            <input type="text" class="form-control" id="subtotal_det" name="subtotal_det" value="<?php echo $detalle->subtotal_det; ?>">
        </div>
        <div class="form-group">
            <label for="iva_det">IVA:</label>
            <input type="text" class="form-control" id="iva_det" name="iva_det" value="<?php echo $detalle->iva_det; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
