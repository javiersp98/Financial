<html>  

<?php
include "db/connect.php";
?>

<!--BOOTSRAP-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/navbars.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--BARRA SUPERIOR-->
<nav class="navbar navbar-fixed-top navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Financial Networth Tracker</a>
    </div>
    <ul class="nav navbar-nav navbar-middle" style="text-align: center;">
        <li><a href="patrimonio.php"><?php include "functions/patrimonio/mostrar_patrimonio.php" ?></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="cuentas.php">Cuentas</a></li>
        <li><a href="ingresos.php">Ingresos</a></li>
        <li><a href="gastos.php">Gastos</a></li>
        <li><a href="inversiones.php">Inversiones</a></li>
        <li><a href="activos.php">Activos</a></li>
    </ul>
</div>
</nav>

<!--BARRA INFERIOR-->
<!-- 
<nav class="navbar navbar-fixed-bottom navbar-inverse">
<div class="container-fluid">
    <ul class="nav navbar-nav navbar-left">
        <li><a href="#">Opciones</a></li>
        <li><a href="#">Ayuda</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    </ul>
</div>
</nav>
-->
</html>