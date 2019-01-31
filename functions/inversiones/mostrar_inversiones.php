<table class="table table-striped">

    <thead>
    <tr>
        <th>Nombre</th>
        <th>Fecha de compra</th>
        <th>Valor Inicial</th>
        <th>Valor Actual</th>
    </tr>
    </thead>

<?php
// Consulta a la BD
$res = mysql_query("SELECT * FROM inversiones WHERE vendida LIKE 0 ORDER BY nombre DESC")
or die(mysql_error());
while($row = mysql_fetch_array( $res )) {?>

    <tr>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['fecha_compra'];?></td>
        <td style="text-align:right;"><?php echo $row['valor_inicial'];?></td>
        <td style="text-align:right;"><?php echo $row['valor_actual'];?></td>
    </tr>

<?php } ?>
</table>