<table class="table table-striped">

    <thead>
    <tr>
        <th>Nombre</th>
        <th>Saldo</th>
        <th>Descripcion</th>
    </tr>
    </thead>

<?php
// Consulta a la BD
$res = mysql_query("SELECT * FROM cuentas")
or die(mysql_error());
while($row = mysql_fetch_array( $res )) {?>

    <tr>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['saldo'];?></td>
        <td><?php echo $row['descripcion'];?></td>

        <!--EDITAR-->
        <?php 
        //Permite o no editar los datos
        //Esta variable es enviada desde el solicitante
        //$editar=0;
            if ($editar == 1) {
                require "mostrar_cuentas_edit.php";
            }
            if ($editar == 0) {

            }
            ?>
    </tr>

<?php } ?>
</table>