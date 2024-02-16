<div class="container">
    <legend class="text-center">
        <i class="glyphicon glyphicon-list-alt"></i> LISTADO DE COMUNICADOS
    </legend>
    <hr> 
    <center>
    <a href="<?php echo site_url('comunicado/nuevo'); ?>" class="btn btn-success">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Nuevo
    </a>
    </center>
    <br>
    <br>
    <?php if ($listadoComunicados): ?>
    <table id="tbl-comunicados" class="table table-border table-hover">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Mensaje</th>
                <th class="text-center">Última Actualización</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listadoComunicados as $comunicado): ?>
            <tr>
                <td><?php echo $comunicado->id_com; ?></td>
                <td><?php echo $comunicado->fecha_com; ?></td>
                <td><?php echo $comunicado->mensaje_com; ?></td>
                <td><?php echo $comunicado->actualizacion_com; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Acciones">
                        <a href="<?php echo site_url('comunicado/actualizar/' . $comunicado->id_com); ?>" class="btn btn-warning">
                            <i class="glyphicon glyphicon-edit"></i> Editar
                        </a>
                        <a href="<?php echo site_url('comunicado/eliminar/' . $comunicado->id_com); ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar?');">
                            <i class="glyphicon glyphicon-trash"></i> Eliminar
                        </a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <center>
        <h3 style="color:red;"><b>No existen comunicados</b></h3>
    </center>
    <?php endif; ?>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#tbl-comunicados").DataTable();
    });
</script>
