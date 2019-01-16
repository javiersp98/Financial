<!--AÑADIR-->
<!-- Lanzar el modal de añadir -->
<button type="button" class="btn btn-primary separar" data-toggle="modal" data-target="#modal_anadir">
  Crear nuevo Gasto
</button>
<!-- Modal de crear -->
<div class="modal fade" id="modal_anadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear un nuevo Ingreso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de introducción de datos -->
        <form action="functions/crear_gasto.php" method="POST">
          Importe<br>
          <input type="text" class="form-control form-space" name="input-importe" value="" />
          Concepto<br>
          <input type="text" class="form-control form-space" name="input-concepto" value="" />
          Fecha<br>
          <input type="date" class="form-control form-space" name="input-fecha" value="<?php echo date("Y-m-d");?>" />
          Receptor<br>
          <input type="text" class="form-control form-space" name="input-receptor" value="" />
          Categoria<br>
          <input type="text" class="form-control form-space" name="input-categoria" value="" />
          Cuenta<br>
          <input type="text" class="form-control form-space" name="input-cuenta" value="" />
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