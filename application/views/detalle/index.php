<div class="container">
    <center>
        <h1>Listado de Detalles</h1>
        <br>
    </center>
    <div class="table-responsive">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('detalle/nuevo'); ?>" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i>Agregar Nuevo Detalle 
                </a>
            </div>
        </div>
        <br>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>fk_id_lec</th>
                    <th>fk_id_rec</th>
                    <th>Cantidad</th>
                    <th>Detalle</th>
                    <th>Valor Unitario</th>
                    <th>Subtotal</th>
                    <th>IVA</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalles as $detalle) { ?>
                    <tr>
                        <td><?php echo $detalle->id_det; ?></td>
                        <td><?php echo $detalle->fk_id_lec; ?></td>
                        <td><?php echo $detalle->fk_id_rec; ?></td>
                        <td><?php echo $detalle->cantidad_det; ?></td>
                        <td><?php echo $detalle->detalle_det; ?></td>
                        <td><?php echo $detalle->valor_unitario_det; ?></td>
                        <td><?php echo $detalle->subtotal_det; ?></td>
                        <td><?php echo $detalle->iva_det; ?></td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                            <a href="<?php echo site_url('detalle/editar/'.$detalle->id_det); ?>" class="btn btn-warning">
                                <i class="glyphicon glyphicon-edit"></i> Editar
                            </a>
                            <a href="<?php echo site_url('detalle/eliminar/'.$detalle->id_det); ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar?');">
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
