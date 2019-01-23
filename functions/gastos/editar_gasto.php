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

$sql = "UPDATE gastos SET
importe='$importe',
concepto='$concepto',
fecha='$fecha',
receptor='$receptor',
categoria='$categoria',
cuenta='$cuenta'
WHERE id=$id";
$result = mysql_query($sql) or die(mysql_error());

header("Location: ../gastos.php");