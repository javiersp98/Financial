<?php

include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$importe = $_POST['input-importe'];
$salida = $_POST['input-cuenta-salida'];
$recepcion = $_POST['input-cuenta-recepcion'];
$procedencia = $_POST['input-procedencia'];
$cuenta = $_POST['input-cuenta'];

$sql = "UPDATE cuentas SET 
saldo=saldo-$importe
WHERE nombre LIKE '$salida'";

ob_start();
print_r($sql);
$nombre = ob_get_clean();
file_put_contents("C:\pruebas\ARCHIVO2.txt",$nombre);

$result = mysql_query($sql) or die(mysql_error());



$sql = "UPDATE cuentas SET 
saldo=saldo+$importe
WHERE nombre LIKE '$recepcion'";
$result = mysql_query($sql) or die(mysql_error());

header("Location: ../../cuentas.php");