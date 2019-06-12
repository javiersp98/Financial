<html>

<head>
  <title>xFinancial 2019</title>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <?php
    include "navbars.php";
    include "db/connect.php";
  ?>
</head>

<body>

  <div class="row">

    <div class="column left">
      <div class="mostrar_cuentas">
        <div class="mostrar_cuentas_texto">
          <center>
            <h4>Cuentas</h4>
          </center>
        </div>
        <?php $editar=0; include "functions/cuentas/mostrar_cuentas.php"; ?>
      </div>
    </div>

    <div class="column middle">
      <div class="mostrar_ingresos">
        <div class="mostrar_ingresos_texto">
          <center>
            <h4>Ingresos</h4>
          </center>
          <div class="boton_crear_ingreso">
            <?php include "modals/crear_ingreso_index.php" ?>
          </div>
        </div>
        <?php $editar=0; include "functions/ingresos/mostrar_ingresos.php"; ?>
      </div>
    </div>

    <div class="column middlelow">
      <div class="mostrar_gastos">
        <div class="mostrar_gastos_texto">
          <center>
            <h4>Gastos</h4>
          </center>
          <div class="boton_crear_gasto">
            <?php include "modals/crear_gasto_index.php" ?>
          </div>
        </div>
        <?php $editar=0; include "functions/gastos/mostrar_gastos.php"; ?>
      </div>
    </div>

  </div>

</body>

</html>