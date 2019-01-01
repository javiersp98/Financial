<?php
include "navbars.php";
include "db/connect.php";
?>
<link href="css/cuentas.css" rel="stylesheet" type="text/css"/>

<?php include "modals/crear_ingreso.php"; ?>

<div class="mostrar_cuentas"><p>
  <?php include "functions/mostrar_ingresos.php"; ?>
</p></div>