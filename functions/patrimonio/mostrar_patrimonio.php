<?php

$patrimonio = 0;
$cont = 0;

// Consulta a la BD las cuentas bancarias
$res = mysql_query("SELECT * FROM cuentas")
or die(mysql_error());
while($row = mysql_fetch_array( $res )) {
    $patrimonio = $patrimonio + $row['saldo'];
}

// Consulta a la BD las inversiones
$res2 = mysql_query("SELECT * FROM inversiones WHERE vendida = 0")
or die(mysql_error());
while($row = mysql_fetch_array( $res2 )) {
    $patrimonio = $patrimonio + $row['valor_actual'];
}

echo $patrimonio."€";
?>
