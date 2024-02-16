<div class="container">
<center> <h1>Listado de Configuraciones</h1>
    <br>
 
    <a href="<?php echo site_url('configuracion/nuevo'); ?>" class="btn btn-success">Agregar Nueva Configuración</a>
<br>    
</center>
    <div class="table-responsive">
        <br>
        <table class="table table-striped">
        <thead class="thead-dark">
                <tr>
                <th>ID</th>
                    <th>Nombre</th>
                    <th>RUC</th>
                    <th>Logo</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Servidor</th>
                    <th>Puerto</th>
                    <th>Password</th>
                    <th>Creación</th>
                    <th>Actualización</th>
                    <th>Año Inicial</th>
                    <th>Mes Inicial</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($configuraciones as $configuracion) { ?>
                    <tr>
                    <td><?php echo $configuracion->id_con; ?></td>
                        <td><?php echo $configuracion->nombre_con; ?></td>
                        <td><?php echo $configuracion->ruc_con; ?></td>
                        <td><?php echo $configuracion->logo_con; ?></td>
                        <td><?php echo $configuracion->telefono_con; ?></td>
                        <td><?php echo $configuracion->direccion_con; ?></td>
                        <td><?php echo $configuracion->email_con; ?></td>
                        <td><?php echo $configuracion->servidor_con; ?></td>
                        <td><?php echo $configuracion->puerto_con; ?></td>
                        <td><?php echo $configuracion->password_con; ?></td>
                        <td><?php echo $configuracion->creacion_con; ?></td>
                        <td><?php echo $configuracion->actualizacion_con; ?></td>
                        <td><?php echo $configuracion->anio_inicial_con; ?></td>
                        <td><?php echo $configuracion->mes_inicial_con; ?></td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                        <a href="<?php echo site_url('configuracion/editar/'.$configuracion->id_con); ?>" class="btn btn-warning">Editar</a>
                            <a href="<?php echo site_url('configuracion/eliminar/'.$configuracion->id_con); ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar?');">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
