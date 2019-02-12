<!--AÑADIR-->
<!-- Lanzar el modal de añadir -->
<button type="button" class="btn btn-success separar" data-toggle="modal" data-target="#modal_actualizar_inversion">
  Actualizar el valor de una Inversión
</button>
<!-- Modal de crear -->
<div class="modal fade" id="modal_actualizar_inversion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">  Actualizar el valor de una Inversión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de introducción de datos -->
        <form action="functions/inversiones/actualizar_inversion.php" method="POST">
          Nombre (Valor de compra - Valor más reciente)<br>
          <select name="input-nombre" class="form-control form-space">
            <?php
              include('../db/connect.php');              
              $res = mysql_query("SELECT nombre, valor_inicial, valor_actual FROM inversiones WHERE vendida LIKE 0 ORDER BY nombre DESC")
              or die(mysql_error());
              while($row = mysql_fetch_array( $res )) {                
                ?>
                  <option value="<?php echo $row['nombre']?>"><?php echo $row['nombre']?> (<?php echo $row['valor_inicial']?>€  -  <?php echo $row['valor_actual']?>€)</option>
                <?php
              }
            ?>
          </select>
          Nuevo Valor actual<br>
          <input type="text" class="form-control form-space" name="input-valor_actual" value="" />
          Fecha<br>
          <input type="date" class="form-control form-space" name="input-fecha" value="<?php echo date("Y-m-d");?>" />          
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