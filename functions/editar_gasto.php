<?php

include('../db/connect.php');

// Convierte los datos del formulario en variables PHP
$id = $_POST['input-id'];
$importe = $_POST['input-importe'];
$concepto = $_POST['input-concepto'];
$fecha = $_POST['input-fecha'];
$receptor = $_POST['input-receptor'];
$categoria = $_POST['input-categoria'];
$cuenta = $_POST['input-cuenta'];

// Borramos el registro anterior
$sql = "DELETE FROM gastos WHERE id=$id";
$result = mysql_query($sql) or die(mysql_error());

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO gastos (id, importe, concepto, fecha, receptor, categoria, cuenta)
VALUES ('$id', '$importe', '$concepto', '$fecha', '$receptor', '$categoria', '$cuenta')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien vovlemos a ingresos
    header("Location: ../gastos.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Volvemos a ingresos.php tras terminar el borrado
header("Location: ../gastos.php");