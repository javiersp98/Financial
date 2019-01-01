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
    </tr>

<?php } ?>
</table>