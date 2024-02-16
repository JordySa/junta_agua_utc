<div class="container">
    <center> <h1>Listado de Consumos</h1>
    <a href="<?php echo site_url('consumo/nuevo'); ?>" class="btn btn-success">Agregar Nuevo Consumo</a>
    </center>
    <br>
    <div class="table-responsive">
        <br>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Año</th>
                    <th>Mes</th>
                    <th>Estado</th>
                    <th>Fecha de Creación</th>
                    <th>Fecha de Actualización</th>
                    <th>Número de Mes</th>
                    <th>Fecha de Vencimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($consumos as $consumo) { ?>
                    <tr>
                        <td><?php echo $consumo->id_consumo; ?></td>
                        <td><?php echo $consumo->anio_consumo; ?></td>
                        <td><?php echo $consumo->mes_consumo; ?></td>
                        <td><?php echo $consumo->estado_consumo; ?></td>
                        <td><?php echo $consumo->fecha_creacion_consumo; ?></td>
                        <td><?php echo $consumo->fecha_actualizacion_consumo; ?></td>
                        <td><?php echo $consumo->numero_mes_consumo; ?></td>
                        <td><?php echo $consumo->fecha_vencimiento_consumo; ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Acciones">
                                <a href="<?php echo site_url('consumo/editar/'.$consumo->id_consumo); ?>" class="btn btn-warning">Editar</a>
                                <a href="<?php echo site_url('consumo/eliminar/'.$consumo->id_consumo); ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar?');">Eliminar</a>  </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
