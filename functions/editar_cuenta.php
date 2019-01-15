<?php

include('../db/connect.php');

// Convierte los datos del formulario en variables PHP
$id = $_POST['input-id'];
$nombre = $_POST['input-nombre'];
$saldo = $_POST['input-saldo'];
$descripcion = $_POST['input-descripcion'];

// Borramos el registro anterior
$sql = "DELETE FROM cuentas WHERE id=$id";
$result = mysql_query($sql) or die(mysql_error());

// Convertimos la consulta SQL en una única variable
$sql = "INSERT INTO cuentas (id, nombre, saldo, descripcion)
VALUES ('$id', '$nombre', '$saldo', '$descripcion')";

if (mysql_query($sql) === TRUE) {
    // Si todo sale bien volvemos
    header("Location: ../cuentas.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Volvemos tras terminar el borrado
header("Location: ../cuentas.php");