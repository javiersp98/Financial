<?php

$patrimonio = 0;
$cont = 0;

// Consulta a la BD
$res = mysql_query("SELECT * FROM cuentas")
or die(mysql_error());
while($row = mysql_fetch_array( $res )) {

    $patrimonio = $patrimonio + $row['saldo'];
    
}

echo $patrimonio."€";
?>
