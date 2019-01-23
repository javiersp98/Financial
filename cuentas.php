<?php
include "navbars.php";
include "db/connect.php";
?>
<link href="css/cuentas.css" rel="stylesheet" type="text/css"/>

<div class="mostrar_cuentas_grafico"><p>
  <?php include "graphics/g_cuentas.php"; ?>
</p></div>

<?php include "modals/crear_cuenta.php"; ?>
<?php include "modals/nueva_transferencia.php"; ?>

<div class="mostrar_cuentas"><p>
  <?php $editar=1; include "functions/cuentas/mostrar_cuentas.php"; ?>
</p></div>