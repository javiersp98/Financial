<?php
include "navbars.php";
include "db/connect.php";
?>
<link href="css/gastos.css" rel="stylesheet" type="text/css"/>

<div class="mostrar_gastos_grafico"><p>
  <?php include "graphics/g_gastos_totales.php"; ?>
</p></div>

<?php include "modals/crear_gasto.php"; ?>

<div class="mostrar_cuentas"><p>
  <?php $editar=1; include "functions/gastos/mostrar_gastos.php"; ?>
</p></div>