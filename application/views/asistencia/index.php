
<div class="container">
    <center>
        <h1>Listado de Asistencias</h1>

        <a href="<?php echo site_url('asistencia/nuevo'); ?>" class="btn btn-success">Agregar Asistencia Nueva</a>

    </center>
    <div class="table-responsive">
<br>
    <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Fecha y Hora</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>atraso</th>
                    <th>valor atraso</th>
                    <th>Acciones</th>
                </tr>
            
            <tbody>
                <?php foreach ($asistencias as $asistencia) { ?>
                    <tr>
                        <td><?php echo $asistencia->id_asi; ?></td>
                        <td><?php echo $asistencia->fk_id_eve; ?></td>
                        <td><?php echo $asistencia->fk_id_soc; ?></td>
                        <td><?php echo $asistencia->tipo_asi; ?></td>
                        <td><?php echo $asistencia->valor_asi; ?></td>
                        <td><?php echo $asistencia->atraso_asi; ?></td>
                        <td><?php echo $asistencia->valor_atraso_asi; ?></td>
                        <td>
                            <a href="<?php echo site_url('asistencia/editar/'.$asistencia->id_asi); ?>" class="btn btn-warning">
                                <i class="glyphicon glyphicon-edit"></i> Editar
                            </a>
                            <a href="<?php echo site_url('asistencia/eliminar/'.$asistencia->id_asi); ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar?');">
                                <i class="glyphicon glyphicon-trash"></i> Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </thead>
            </tbody>
        </table>


</div>
</div>

