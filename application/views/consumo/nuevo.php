<div class="container">
    <h2 class="text-center">Agregar Nuevo Consumo</h2>
    <form action="<?php echo site_url('consumo/guardar'); ?>" method="post">
        <div class="form-group">
            <label for="anio_consumo">Año:</label>
            <input type="text" class="form-control" id="anio_consumo" name="anio_consumo">
        </div>
        <div class="form-group">
            <label for="mes_consumo">Mes:</label>
            <input type="text" class="form-control" id="mes_consumo" name="mes_consumo">
        </div>
        <div class="form-group">
            <label for="estado_consumo">Estado:</label>
            <input type="text" class="form-control" id="estado_consumo" name="estado_consumo">
        </div>
        <div class="form-group">
            <label for="numero_mes_consumo">Número de Mes:</label>
            <input type="text" class="form-control" id="numero_mes_consumo" name="numero_mes_consumo">
        </div>
        <div class="form-group">
            <label for="fecha_vencimiento_consumo">Fecha de Vencimiento:</label>
            <input type="date" class="form-control" id="fecha_vencimiento_consumo" name="fecha_vencimiento_consumo">
        </div>
        <!-- Agrega los demás campos del formulario según necesites -->
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
