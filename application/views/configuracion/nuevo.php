<div class="container">
    <h1>Ingresar Nueva Configuración</h1>
    <form method="post" action="<?php echo site_url('configuracion/guardar'); ?>">
        <div class="form-group">
            <label for="nombre_con">Nombre:</label>
            <input type="text" class="form-control" id="nombre_con" name="nombre_con">
        </div>
        <div class="form-group">
            <label for="ruc_con">RUC:</label>
            <input type="text" class="form-control" id="ruc_con" name="ruc_con">
        </div>
        <div class="form-group">
            <label for="telefono_con">Teléfono:</label>
            <input type="text" class="form-control" id="telefono_con" name="telefono_con">
        </div>
        <div class="form-group">
            <label for="direccion_con">Dirección:</label>
            <input type="text" class="form-control" id="direccion_con" name="direccion_con">
        </div>
        <div class="form-group">
            <label for="email_con">Email:</label>
            <input type="email" class="form-control" id="email_con" name="email_con">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
