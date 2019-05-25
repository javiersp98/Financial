<?php
include "navbars.php";
include "db/connect.php";
?>

<head>
  <title>Inversiones</title>
  <link href="css/inversiones.css" rel="stylesheet" type="text/css" />
</head>

<div class="mostrar_inversiones_grafico">
  <p>
    <?php //include "graphics/g_ingresos_totales.php"; ?>
  </p>
</div>

<div class="column left">
  <center>
    <?php include "modals/crear_inversion.php"; ?>
    <?php include "modals/vender_inversion.php"; ?>
    <?php include "modals/actualizar_inversion.php"; ?>
  </center>
  <div class="mostrar_inversiones">
    <p>
      <?php $editar=1; include "functions/inversiones/mostrar_inversiones.php"; ?>
    </p>
  </div>
</div>

<div class="column middle">
  <p></p>
</div>

<div class="column right">
  <div class="historico_inversiones">
    <?php include "modals/seleccionar_inversion.php" ?>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $nombre = $_GET['input-nombre'];
    include "functions/inversiones/mostrar_inversiones_historico.php"
    ?>
  </div>
</div>

<?php //include "graphics/g_inversiones_mes.php"; ?>