<?php

// Conecta con la BD
include('../db/connect.php');

// Convierte los datos del formulario en variables PHP
$importe = $_POST['input-importe'];
$concepto = $_POST['input-concepto'];
$fecha = $_POST['input-fecha'];
$receptor = $_POST['input-receptor'];
$categoria = $_POST['input-categoria'];
$cuenta = $_POST['input-cuenta'];

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO gastos (importe, concepto, fecha, receptor, categoria, cuenta)
VALUES ('$importe', '$concepto', '$fecha', '$receptor', '$categoria', '$cuenta')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien volvemos a Cuentas
    header("Location: ../index.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}