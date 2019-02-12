<!--SELECCIONAR-->
<!-- Lanzar el modal de seleccionar -->
<button type="button" class="btn btn-primary separar" data-toggle="modal" data-target="#modal_seleccionar_inversion">
  Histórico de Inversiones
</button>
<!-- Modal de crear -->
<div class="modal fade" id="modal_seleccionar_inversion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Histórico de Inversión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de introducción de datos -->
        <form action="inversiones.php" method="GET">          
          Inversión a observar<br>
          <select name="input-nombre" class="form-control form-space">
            <?php
              include('../db/connect.php');              
              $res = mysql_query("SELECT nombre, vendida FROM inversiones ORDER BY vendida ASC, nombre ASC")
              or die(mysql_error());
              while($row = mysql_fetch_array( $res )) {                
                ?>
                  <option value="<?php echo $row['nombre']?>"><?php echo $row['nombre'];
                                if ($row['vendida']==1) {
                                  echo " (Vendida)";
                                }?>
                  </option>
                <?php
              }
            ?>
          </select>
          </select>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="reset"  class="btn btn-danger">Limpiar</button>
              <button type="submit" class="btn btn-success">Ver</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>