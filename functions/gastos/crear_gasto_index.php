<?php

// Conecta con la BD
include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$importe = $_POST['input-importe'];
$concepto = $_POST['input-concepto'];
$fecha = $_POST['input-fecha'];
$receptor = $_POST['input-receptor'];
$categoria = $_POST['input-categoria'];
$cuenta = $_POST['input-cuenta'];

// Ejecutamos la consulta para crear un nuevo gasto
$sql = "INSERT INTO gastos (importe, concepto, fecha, receptor, categoria, cuenta)
VALUES ('$importe', '$concepto', '$fecha', '$receptor', '$categoria', '$cuenta')";
$result = mysql_query($sql) or die(mysql_error());

// Ejecutamos la consulta para descontar el gasto de una cuenta bancaria
$sql2 = "UPDATE cuentas SET saldo = saldo - '$importe' WHERE nombre LIKE '$cuenta'";

if (mysql_query($sql2) === TRUE) {
    // Si todo sale bien volvemos a Gastos
    header("Location: ../../index.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql2 . "<br>" . $con->error;
}