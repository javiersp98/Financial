<?php

include('../db/connect.php');

// Convierte los datos del formulario en variables PHP
$id = $_POST['input-id'];
$importe = $_POST['input-importe'];
$concepto = $_POST['input-concepto'];
$fecha = $_POST['input-fecha'];
$procedencia = $_POST['input-procedencia'];
$cuenta = $_POST['input-cuenta'];

// Borramos el registro anterior
$sql = "DELETE FROM ingresos WHERE id=$id";
$result = mysql_query($sql) or die(mysql_error());

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO ingresos (id, importe, concepto, fecha, procedencia, cuenta)
VALUES ('$id', '$importe', '$concepto', '$fecha', '$procedencia', '$cuenta')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien vovlemos a ingresos
    header("Location: ../ingresos.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Volvemos a ingresos.php tras terminar el borrado
header("Location: ../ingresos.php");