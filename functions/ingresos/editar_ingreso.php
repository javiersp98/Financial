<?php

include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$id = $_POST['input-id'];
$importe = $_POST['input-importe'];
$concepto = $_POST['input-concepto'];
$fecha = $_POST['input-fecha'];
$procedencia = $_POST['input-procedencia'];
$cuenta = $_POST['input-cuenta'];

$sql = "UPDATE ingresos SET 
importe='$importe',
concepto='$concepto',
fecha='$fecha',
procedencia='$procedencia',
cuenta='$cuenta'
WHERE id=$id";
$result = mysql_query($sql) or die(mysql_error());

header("Location: ../../ingresos.php");