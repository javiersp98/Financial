<?php

// Conecta con la BD
include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$concepto = $_POST['input-concepto'];
$importe = $_POST['input-importe'];
$fecha = $_POST['input-fecha'];
$procedencia = $_POST['input-procedencia'];
$cuenta = $_POST['input-cuenta'];

// Ejecutamos la consulta para crear un nuevo ingreso
$sql = "INSERT INTO ingresos (importe, concepto, fecha, procedencia, cuenta)
VALUES ('$importe', '$concepto', '$fecha', '$procedencia', '$cuenta')";
$result = mysql_query($sql) or die(mysql_error());

// Ejecutamos la consulta para actualizar el saldo de la cuenta seleccionada
$sql2 = "UPDATE cuentas SET saldo = saldo + '$importe' WHERE nombre LIKE '$cuenta'";

if (mysql_query($sql2) === TRUE) {
    // Si todo sale bien volvemos a Cuentas
    header("Location: ../../index.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql2 . "<br>" . $con->error;
}