<?php
include "navbars.php";
include "db/connect.php";
?>
<link href="css/inversiones.css" rel="stylesheet" type="text/css"/>

<div class="mostrar_inversiones_grafico"><p>
  <?php //include "graphics/g_ingresos_totales.php"; ?>
</p></div>

<?php include "modals/crear_inversion.php"; ?>
<?php include "modals/vender_inversion.php"; ?>
<?php include "modals/actualizar_inversion.php"; ?>

<div class="mostrar_inversiones"><p>
  <?php $editar=1; include "functions/inversiones/mostrar_inversiones.php"; ?>
</p></div>

<?php include "graphics/g_inversiones_mes.php"; ?>