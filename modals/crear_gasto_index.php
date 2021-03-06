<!--AÑADIR-->
<!-- Lanzar el modal de añadir -->
<button type="button" class="btn btn-primary separar" data-toggle="modal" data-target="#modal_anadir_gasto">
  Crear nuevo Gasto
</button>
<!-- Modal de crear -->
<div class="modal fade" id="modal_anadir_gasto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear un nuevo Gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de introducción de datos -->
        <form action="functions/gastos/crear_gasto_index.php" method="POST">
          Importe<br>
          <input type="text" class="form-control form-space" name="input-importe" value="" />
          Concepto<br>
          <input type="text" class="form-control form-space" name="input-concepto" value="" />
          Fecha<br>
          <input type="date" class="form-control form-space" name="input-fecha" value="<?php echo date("Y-m-d");?>" />
          Receptor<br>
          <input type="text" class="form-control form-space" name="input-receptor" value="" />
          Categoria<br>          
          <select name="input-categoria" class="form-control form-space">
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
          Cuenta<br>
          <select name="input-cuenta" class="form-control form-space">
            <?php
              include('../db/connect.php');              
              $res = mysql_query("SELECT nombre FROM cuentas")
              or die(mysql_error());
              while($row = mysql_fetch_array( $res )) {                
                ?>
                  <option value="<?php echo $row['nombre']?>"><?php echo $row['nombre']?></option>
                <?php
              }
            ?>
          </select>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <button type="submit" class="btn btn-success">Crear</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>