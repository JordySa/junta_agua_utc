<div class="container">
    <center>
        <h1>Listado de Eventos</h1>
    </center>
    <div class="table-responsive">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('evento/nuevo'); ?>" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i> Agregar Nuevo Evento
                </a>
            </div>
        </div>
        <br>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Fecha y Hora</th>
                    <th>Lugar</th>
                    <th>ID Tipo de Evento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventos as $evento) { ?>
                    <tr>
                        <td><?php echo $evento->id_eve; ?></td>
                        <td><?php echo $evento->descripcion_eve; ?></td>
                        <td><?php echo $evento->fecha_hora_eve; ?></td>
                        <td><?php echo $evento->lugar_eve; ?></td>
                        <td><?php echo $evento->fk_id_te; ?></td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                            <a href="<?php echo site_url('evento/editar/'.$evento->id_eve); ?>" class="btn btn-warning">
                                <i class="glyphicon glyphicon-edit"></i> Editar
                            </a>
                            <a href="<?php echo site_url('evento/eliminar/'.$evento->id_eve); ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar?');">
                                <i class="glyphicon glyphicon-trash"></i> Eliminar
                            </a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
