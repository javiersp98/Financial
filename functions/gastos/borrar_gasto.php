<?php

// Conectamos con la base de datos
include('../../db/connect.php');

// Obtenemos el ID del registro a borrar
$id = $_GET['id'];

ob_start();
print_r($id);
$nombre = ob_get_clean();
file_put_contents("C:\pruebas\ARCHIVO.txt",$nombre);

// Borramos el registro
$result = mysql_query("DELETE FROM gastos WHERE id=$id")
or die(mysql_error());

// Volvemos a la página de origen tras terminar el borrado
header("Location: ../../gastos.php");

?>