<?php

// Conecta con la BD
include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$nombre = $_POST['input-nombre'];
$valor_inicial = $_POST['input-valor_inicial'];
$fecha = $_POST['input-fecha'];
$cuenta = $_POST['input-cuenta'];

// Creacion de la inversion
$sql = "INSERT INTO inversiones (nombre, valor_inicial, valor_actual, valor_venta, fecha_compra, fecha_venta, vendida)
VALUES ('$nombre', '$valor_inicial', '$valor_inicial', NULL, '$fecha', NULL, 0)";
$result = mysql_query($sql) or die(mysql_error());

// Restamos el coste de la inversion de la cuenta seleccionada
$sql2 = "UPDATE cuentas SET saldo = saldo - '$valor_inicial' WHERE nombre LIKE '$cuenta'";
$result = mysql_query($sql2) or die(mysql_error());

// Añadimos el prmer registro de valores
$sql3 = "INSERT INTO inversion_valor (nombre_inversion, valor, fecha)
VALUES ('$nombre', '$valor_inicial', '$fecha')";

if (mysql_query($sql3) === TRUE) {
    // Si todo sale bien volvemos a Cuentas
    header("Location: ../../inversiones.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql3 . "<br>" . $con->error;
}