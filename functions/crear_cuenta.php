<?php

// Conecta con la BD
include('../db/connect.php');

// Convierte los datos del formulario en variables PHP
$nombre = $_POST['input-nombre'];
$saldo = $_POST['input-saldo'];
$descripcion = $_POST['input-descripcion'];

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO cuentas (nombre, saldo, descripcion)
VALUES ('$nombre', '$saldo', '$descripcion')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien volvemos a Cuentas
    header("Location: ../cuentas.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}