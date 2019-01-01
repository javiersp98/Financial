<html>  

<?php
include "db/connect.php";
?>

<!--BOOTSRAP-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--BARRA SUPERIOR-->
<nav class="navbar navbar-fixed-top navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Organizador Financiero</a>
    </div>
    <ul class="nav navbar-nav navbar-middle" style="text-align: center;">
        <li><a href="ver_patrimonio.php"><?php include "functions/mostrar_patrimonio.php" ?></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="cuentas.php">Cuentas</a></li>
    </ul>
</div>
</nav>

<!--BARRA INFERIOR-->
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

</html>