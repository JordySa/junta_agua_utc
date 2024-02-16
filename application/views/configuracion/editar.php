<div class="container">
    <h1>Actualizar Configuración</h1>
    <form method="post" action="<?php echo site_url('configuracion/actualizar/'.$configuracion->id_con); ?>">
    <div class="form-group">
            <label for="nombre_con">Nombre:</label>
            <input type="text" class="form-control" id="nombre_con" name="nombre_con" value="<?php echo $configuracion->nombre_con; ?>">
        </div>
        <div class="form-group">
            <label for="ruc_con">RUC:</label>
            <input type="text" class="form-control" id="ruc_con" name="ruc_con" value="<?php echo $configuracion->ruc_con; ?>">
        </div>
        <div class="form-group">
            <label for="logo_con">Logo:</label>
            <input type="text" class="form-control" id="logo_con" name="logo_con" value="<?php echo $configuracion->logo_con; ?>">
        </div>
        <div class="form-group">
            <label for="telefono_con">Teléfono:</label>
            <input type="text" class="form-control" id="telefono_con" name="telefono_con" value="<?php echo $configuracion->telefono_con; ?>">
        </div>
        <div class="form-group">
            <label for="direccion_con">Dirección:</label>
            <input type="text" class="form-control" id="direccion_con" name="direccion_con" value="<?php echo $configuracion->direccion_con; ?>">
        </div>
        <div class="form-group">
            <label for="email_con">Email:</label>
            <input type="email" class="form-control" id="email_con" name="email_con" value="<?php echo $configuracion->email_con; ?>">
        </div>
        <div class="form-group">
            <label for="servidor_con">Servidor:</label>
            <input type="text" class="form-control" id="servidor_con" name="servidor_con" value="<?php echo $configuracion->servidor_con; ?>">
        </div>
        <div class="form-group">
            <label for="puerto_con">Puerto:</label>
            <input type="text" class="form-control" id="puerto_con" name="puerto_con" value="<?php echo $configuracion->puerto_con; ?>">
        </div>
        <div class="form-group">
            <label for="password_con">Contraseña:</label>
            <input type="password" class="form-control" id="password_con" name="password_con" value="<?php echo $configuracion->password_con; ?>">
        </div>
        <div class="form-group">
            <label for="anio_inicial_con">Año Inicial:</label>
            <input type="text" class="form-control" id="anio_inicial_con" name="anio_inicial_con" value="<?php echo $configuracion->anio_inicial_con; ?>">
        </div>
        <div class="form-group">
            <label for="mes_inicial_con">Mes Inicial:</label>
            <input type="text" class="form-control" id="mes_inicial_con" name="mes_inicial_con" value="<?php echo $configuracion->mes_inicial_con; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
