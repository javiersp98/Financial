<?php

include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$id = $_POST['input-id'];
$nombre = $_POST['input-nombre'];
$saldo = $_POST['input-saldo'];
$descripcion = $_POST['input-descripcion'];

$sql = "UPDATE cuentas SET
descripcion='$descripcion' ,
nombre='$nombre' ,
saldo='$saldo'
WHERE id=$id";
$result = mysql_query($sql) or die(mysql_error());

header("Location: ../../cuentas.php");