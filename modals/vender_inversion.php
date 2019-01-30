<!--VENDER-->
<!-- Lanzar el modal de vender -->
<button type="button" class="btn btn-warning separar" data-toggle="modal" data-target="#modal_vender">
  Vender Inversión
</button>
<!-- Modal de crear -->
<div class="modal fade" id="modal_vender" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vender Inversión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de introducción de datos -->
        <form action="functions/transferencias/crear_transferencia.php" method="POST">
          inversión a vender<br>
          <select name="input-nombre" class="form-control form-space">
            <?php
              include('../db/connect.php');              
              $res = mysql_query("SELECT nombre, valor_inicial, valor_actual FROM inversiones")
              or die(mysql_error());
              while($row = mysql_fetch_array( $res )) {                
                ?>
                  <option value="<?php echo $row['nombre']?>"><?php echo $row['nombre']?> (<?php echo $row['']?>€)</option>
                <?php
              }
            ?>
          </select>         
          Cuenta de recepción<br>
          <select name="input-cuenta" class="form-control form-space">
            <?php
              include('../db/connect.php');              
              $res = mysql_query("SELECT nombre, saldo FROM cuentas")
              or die(mysql_error());
              while($row = mysql_fetch_array( $res )) {                
                ?>
                  <option value="<?php echo $row['nombre']?>"><?php echo $row['nombre']?> (<?php echo $row['saldo']?>€)</option>
                <?php
              }
            ?>
          </select>
          Cuenta de Recepción<br>
          <select name="input-cuenta-recepcion" class="form-control form-space">
            <?php
              include('../db/connect.php');              
              $res = mysql_query("SELECT nombre, saldo FROM cuentas")
              or die(mysql_error());
              while($row = mysql_fetch_array( $res )) {                
                ?>
                  <option value="<?php echo $row['nombre']?>"><?php echo $row['nombre']?> (<?php echo $row['saldo']?>€)</option>
                <?php
              }
            ?>
          </select>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="reset"  class="btn btn-danger">Limpiar</button>
              <button type="submit" class="btn btn-success">Realizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>