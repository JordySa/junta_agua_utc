<?php if (isset($consumo)) { ?>
<div class="container">
    <h2>Editar Consumo</h2>
    <form method="post" action="<?php echo site_url('consumo/actualizar/'.$consumo->id_consumo); ?>">

    <div class="form-group">
            <label for="anio_consumo">Año:</label>
            <input type="text" class="form-control" id="anio_consumo" name="anio_consumo" value="<?php echo $consumo->anio_consumo; ?>">
        </div>
        <div class="form-group">
            <label for="mes_consumo">Mes:</label>
            <input type="text" class="form-control" id="mes_consumo" name="mes_consumo" value="<?php echo $consumo->mes_consumo; ?>">
        </div>
        <div class="form-group">
            <label for="estado_consumo">Estado:</label>
            <input type="text" class="form-control" id="estado_consumo" name="estado_consumo" value="<?php echo $consumo->estado_consumo; ?>">
        </div>
        <div class="form-group">
            <label for="numero_mes_consumo">Número de Mes:</label>
            <input type="text" class="form-control" id="numero_mes_consumo" name="numero_mes_consumo" value="<?php echo $consumo->numero_mes_consumo; ?>">
        </div>
        <div class="form-group">
            <label for="fecha_vencimiento_consumo">Fecha de Vencimiento:</label>
            <input type="date" class="form-control" id="fecha_vencimiento_consumo" name="fecha_vencimiento_consumo" value="<?php echo $consumo->fecha_vencimiento_consumo; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>
</div>
<?php } else { ?>
<div class="container">
    <p>El consumo no se encontró.</p>
</div>
<?php } ?>

