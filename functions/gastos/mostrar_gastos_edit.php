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
                <form action="functions/gastos/editar_gasto.php" method="POST">
                    Id<br>
                    <input type="text" class="form-control form-space" name="input-id" value="<?php echo $row['id']?>" readonly/>
                    Concepto<br>
                    <input type="text" class="form-control form-space" name="input-concepto" value="<?php echo $row['concepto']?>" />
                    Importe<br>
                    <input type="text" class="form-control form-space" name="input-importe" value="<?php echo $row['importe']?>" />
                    Fecha<br>
                    <input type="text" class="form-control form-space" name="input-fecha" value="<?php echo $row['fecha']?>" />
                    Receptor del dinero<br>
                    <input type="text" class="form-control form-space" name="input-receptor" value="<?php echo $row['receptor']?>" />
                    Categoria<br>
                    <select name="input-categoria" class="form-control form-space">
                    <option value="<?php echo $row['categoria']?>"><?php echo $row['categoria']?></option>
                      <?php
                        /*include('../../db/connect.php');*/
                        $res_gastos_categorias = mysql_query("SELECT nombre FROM gastos_categorias ORDER BY nombre ASC;")
                        or die(mysql_error());
                        while($row2 = mysql_fetch_array( $res_gastos_categorias )) {        
                          ?>
                            <option value="<?php echo $row2['nombre']?>"><?php echo $row2['nombre']?></option>
                          <?php
                        }
                      ?>
                    </select>
                    Cuenta de la que ha salido el gasto<br>
                    <input type="text" class="form-control form-space" name="input-cuenta" value="<?php echo $row['cuenta']?>" />
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
                <h4 class="modal-title" id="exampleModalLabel">¿Seguro que desea borrar este gasto?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Borrar este gasto será irreversible.
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <?php echo '<a href="functions/gastos/borrar_gasto.php?id=' . $row['id'] . '" class="btn btn-danger">Borrar</a>'; ?>
                </div>
            </div>
            </div>
        </div>
        </div>
</td>

<!--BORRAR SIN CONFIRMACIÓN-->
<!--<td>-->
    <?php // echo '<td><a href="functions/gastos/borrar_gasto.php?id=' . $row['id'] . '" class="btn btn-danger">Borrar</a></td>'; ?>
<!--</td>-->