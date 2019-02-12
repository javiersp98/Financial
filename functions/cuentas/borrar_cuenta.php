<?php

// Conectamos con la base de datos
include('../../db/connect.php');

// Obtenemos el ID del registro a borrar
$id = $_GET['id'];

// Borramos el registro de la base de datos
$result = mysql_query("DELETE FROM cuentas WHERE id=$id")
or die(mysql_error());

// Volvemos a la página de origen tras terminar el borrado
header("Location: ../../cuentas.php");

?>