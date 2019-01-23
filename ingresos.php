<?php
include "navbars.php";
include "db/connect.php";
?>
<link href="css/ingresos.css" rel="stylesheet" type="text/css"/>

<div class="mostrar_ingresos_grafico"><p>
  <?php include "graphics/g_ingresos_totales.php"; ?>
</p></div>

<?php include "modals/crear_ingreso.php"; ?>

<div class="mostrar_cuentas"><p>
  <?php $editar=1; include "functions/ingresos/mostrar_ingresos.php"; ?>
</p></div>