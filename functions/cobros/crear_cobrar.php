<?php

// Conecta con la BD
include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$concepto = $_POST['input-concepto'];
$importe = $_POST['input-importe'];
$fecha_creacion = $_POST['input-fecha_creacion'];
$fecha_tope = $_POST['input-fecha_tope'];
$pagador = $_POST['input-pagador'];

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO cobrar (concepto, importe, fecha_creacion, fecha_tope, pagador)
VALUES ('$concepto', '$importe', '$fecha_creacion', '$fecha_tope', '$pagador')";
$result = mysql_query($sql) or die(mysql_error());