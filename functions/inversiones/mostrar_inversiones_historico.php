<table class="table table-striped">

    <thead>
    <tr>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Valor</th>
    </tr>
    </thead>

<?php
// Recibimos la selección de qué inversion mostrar
//include "../db/connect.php";
//$nombre = $_POST['input-nombre'];
// Consulta a la BD
$res = mysql_query("SELECT * FROM inversion_valor WHERE nombre_inversion LIKE '$nombre' ORDER BY fecha DESC")
or die(mysql_error());
while($row = mysql_fetch_array( $res )) {?>

    <tr>
        <td><?php echo $row['nombre_inversion'];?></td>
        <td><?php echo $row['fecha'];?></td>
        <td><?php echo $row['valor'];?></td>
    </tr>

<?php } ?>
</table>