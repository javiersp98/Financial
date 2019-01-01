<?php

// Conectamos con la base de datos
include('../db/connect.php');

// Obtenemos el ID del registro a borrar
$id = $_GET['id'];

// Borramos el registro
$result = mysql_query("DELETE FROM ingresos WHERE id=$id")
or die(mysql_error());

// Volvemos a la página de origen tras terminar el borrado
header("Location: ../ingresos.php");

?>