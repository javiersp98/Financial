<table class="table table-striped">

    <thead>
    <tr>
        <th>Concepto</th>
        <th>Importe</th>
        <th>Fecha</th>
        <th>Procedencia</th>
        <th>Cuenta</th>
    </tr>
    </thead>

<?php
// Consulta a la BD
$res = mysql_query("SELECT * FROM ingresos")
or die(mysql_error());
while($row = mysql_fetch_array( $res )) {?>

    <tr>
        <td><?php echo $row['concepto'];?></td>
        <td><?php echo $row['importe'];?></td>
        <td><?php echo $row['fecha'];?></td>
        <td><?php echo $row['procedencia'];?></td>
        <td><?php echo $row['cuenta'];?></td>
    </tr>

<?php } ?>
</table>