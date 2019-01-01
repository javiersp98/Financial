<?php

$patrimonio = 0;
$cont = 0;

// Consulta a la BD
$res = mysql_query("SELECT * FROM cuentas")
or die(mysql_error());
while($row = mysql_fetch_array( $res )) {
    /*
    $row['saldo'] = $patrimonio[$cont];
    echo $patrimonio[$cont];
    $cont++;
    */

    $patrimonio = $patrimonio + $row['saldo'];
}

echo $patrimonio;
?>
