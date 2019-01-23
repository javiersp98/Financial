<td>
    <!--EDITAR-->
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_editar_<?php echo $row['id'] ;?>">
    Editar
    </button>
    <div class="modal fade" id="modal_editar_<?php echo $row['id'] ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Edición de artículo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de edición de datos -->
                <form action="functions/cuentas/editar_cuenta.php" method="POST">
                    Id<br>
                    <input type="text" class="form-control form-space" name="input-id" value="<?php echo $row['id']?>" readonly/>
                    Nombre<br>
                    <input type="text" class="form-control form-space" name="input-nombre" value="<?php echo $row['nombre']?>" />
                    Saldo<br>
                    <input type="text" class="form-control form-space" name="input-saldo" value="<?php echo $row['saldo']?>" />
                    Descripción<br>
                    <input type="text" class="form-control form-space" name="input-descripcion" value="<?php echo $row['descripcion']?>" />                    
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Editar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</td>

<!--BORRAR CON CONFIRMACIÓN-->
<td>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_borrar_<?php echo $row['id'] ;?>">
    Borrar
    </button>

    <div class="modal fade" id="modal_borrar_<?php echo $row['id'] ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">¿Seguro que desea borrar esta cuenta?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Borrar esta cuenta será irreversible.
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <?php echo '<a href="functions/cuentas/borrar_cuenta.php?id=' . $row['id'] . '" class="btn btn-danger">Borrar</a>'; ?>
                </div>
            </div>
            </div>
        </div>
        </div>
</td>

<!--BORRAR SIN CONFIRMACIÓN-->
<td>
    <?php // echo '<td><a href="functions/cuentas/borrar_ingreso.php?id=' . $row['id'] . '" class="btn btn-danger">Borrar</a></td>'; ?>
</td>