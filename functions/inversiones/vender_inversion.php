<?php

// Conecta con la BD
include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$nombre = $_POST['input-nombre'];
$cuenta = $_POST['input-cuenta'];
$fecha = $_POST['input-fecha'];

// Actualizamos la inversión seleccionada y la marcamos como vendida
$sql = "UPDATE inversiones SET
valor_venta=valor_actual,
fecha_venta='$fecha',
vendida=1
WHERE nombre='$nombre'";
$result = mysql_query($sql) or die(mysql_error());

// Extrae por cuánto se ha vendido la inversión, pero no la ejecutamos
$sql2 = "SELECT valor_venta FROM inversiones WHERE nombre='$nombre'";
//$result = mysql_query($sql2) or die(mysql_error());

// Convertimos la consulta anterior en una única variable para insertarla en la siguiente
$precio_venta = $sql2;

// Añadimos los beneficios/pérdidas a la cuenta seleccionada
$sql3 = "UPDATE cuentas SET saldo = saldo + ($precio_venta) WHERE nombre LIKE '$cuenta'";

if (mysql_query($sql3) === TRUE) {
    // Si todo sale bien volvemos a Cuentas
    header("Location: ../../inversiones.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql3 . "<br>" . $con->error;
}