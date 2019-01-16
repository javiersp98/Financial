<?php
include "navbars.php";
include "db/connect.php";
?>
<link href="css/gastos.css" rel="stylesheet" type="text/css"/>

<?php include "modals/crear_gasto.php"; ?>

<div class="mostrar_cuentas"><p>
  <?php $editar=1; include "functions/mostrar_gastos.php"; ?>
</p></div>