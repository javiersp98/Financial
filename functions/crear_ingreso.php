<?php

// Conecta con la BD
include('../db/connect.php');

// Convierte los datos del formulario en variables PHP
$concepto = $_POST['input-concepto'];
$importe = $_POST['input-importe'];
$fecha = $_POST['input-fecha'];
$procedencia = $_POST['input-procedencia'];
$cuenta = $_POST['input-cuenta'];

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO ingresos (importe, concepto, fecha, procedencia, cuenta)
VALUES ('$importe', '$concepto', '$fecha', '$procedencia', '$cuenta')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien volvemos a Cuentas
    header("Location: ../ingresos.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}