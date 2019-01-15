<html>
  <head>

    <?php
    include "navbars.php";
    include "db/connect.php";
    ?>

    <link href="css/index.css" rel="stylesheet" type="text/css"/>

  </head>
  <body>

    <div class="mostrar_cuentas">
      <div class="mostrar_cuentas_texto">
        <h4>
          <center>
            Cuentas
          </center>
        </h4>
      </div>
      <?php $editar=0; include "functions/mostrar_cuentas.php"; ?>
    </div>

    <div class="mostrar_ingresos">
      <div class="mostrar_cuentas_texto">
        <h4>
          <center>
              Ingresos
          </center>
        </h4>
      </div>
      <?php $editar=0; include "functions/mostrar_ingresos.php"; ?>
    </div>

  </body>
</html>