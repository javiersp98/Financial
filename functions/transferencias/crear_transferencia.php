<?php

include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$importe = $_POST['input-importe'];
$salida = $_POST['input-cuenta-salida'];
$recepcion = $_POST['input-cuenta-recepcion'];
$procedencia = $_POST['input-procedencia'];
$cuenta = $_POST['input-cuenta'];

// Actualizamos el saldo de la cuenta de salida
$sql = "UPDATE cuentas SET 
saldo=saldo-$importe
WHERE nombre LIKE '$salida'";
$result = mysql_query($sql) or die(mysql_error());

// Actualizamos el saldo de la cuenta de entrada
$sql = "UPDATE cuentas SET 
saldo=saldo+$importe
WHERE nombre LIKE '$recepcion'";
$result = mysql_query($sql) or die(mysql_error());

// Volvemos al origen
header("Location: ../../cuentas.php");