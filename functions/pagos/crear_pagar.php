<?php

// Conecta con la BD
include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$concepto = $_POST['input-concepto'];
$importe = $_POST['input-importe'];
$fecha_creacion = $_POST['input-fecha_creacion'];
$fecha_tope = $_POST['input-fecha_tope'];
$cobrador = $_POST['input-cobrador'];

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO pagar (concepto, importe, fecha_creacion, fecha_tope, cobrador)
VALUES ('$concepto', '$importe', '$fecha_creacion', '$fecha_tope', '$cobrador')";
$result = mysql_query($sql) or die(mysql_error());