<?php

// Conecta con la BD
include('../../db/connect.php');

// Convierte los datos del formulario en variables PHP
$nombre = $_POST['input-nombre'];
$valor_actual = $_POST['input-valor_actual'];
$fecha = $_POST['input-fecha'];

// Cambio del valor actual
$sql = "UPDATE inversiones SET valor_actual = '$valor_actual', fecha_valor_actual = '$fecha'";
$result = mysql_query($sql) or die(mysql_error());

$id_inversion = "SELECT id FROM inversiones WHERE nombre='$nombre'";

// Insertamos un nuevo valor de la inversión asociado con la fecha, usado para estadísticas
$sql2 = "INSERT INTO inversion_valor (id_inversion, nombre_inversion, fecha, valor)
VALUES (($id_inversion), '$nombre', '$fecha', $valor_actual)";

if (mysql_query($sql2) === TRUE) {
    // Si todo sale bien volvemos a Cuentas
    header("Location: ../../inversiones.php");
} else {
    // Caso de error de SQL lo mostramos por pantalla
    echo "Error: " . $sql2 . "<br>" . $con->error;
}