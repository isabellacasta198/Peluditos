<?php
class ModalsExamen {
    
    public static function modalCreate(){
    ?>
   
    <div class="modal fade" id="modalCreateExamen" tabindex="-1" role="dialog" aria-labelledby="modalCreateExamenLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content"> 

          <div class="modal-header">
            <h4 class="modal-title" id="modalCreateExamenLabel">Registrar Examen</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form name="ViewExamenCreate" action="<?php echo getUrl('Examen','Examen','postNew');?>" method="post">              
              <div class="mb-3">
                <label for="codigo" class="from-label">codigo</label><br>
                <input type="number" name="idExamen" id="idExamen" class="form-control" require><br>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <label for="descripcion">Descripción:</label>
                  <input type="text" class="form-control" id="nameExamen" name="nameExamen" required>
                </div>

                <div class="form-group col-lg-6">
                  <label for="valor">Valor:</label>
                  <input type="number" class="form-control" id="precioExamen" name="precioExamen" required>
                </div>
              </div>

              <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" class="form-control" id="tipoExamen" name="tipoExamen" required>
              </div>

              <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-control" id="statusExamen" name="statusExamen">
                  <option value="Activo">Activo</option>
                  <option value="Inactivo">Inactivo</option>
                </select>
              </div>

              <button type="submit" class="btn btn-success btn-block" name="accion" value="registrar">
                Guardar
              </button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </form>
          </div>

        </div>
      </div>
    </div>
    <?php
    }
    public static function modalEdit() {
    ?>
    <div class="modal" tabindex="-1" id="modalEditExamen">
        <div class="modal-dialog modal-xs">
            <div class="modal-content">
              
                <div class="modal-header">
                    <h5 class="modal-title">Editar Examen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form name="frmUpdateExamen" action="<?php echo getUrl('Examen', 'Examen', 'postUpdate'); ?>" method="post">
                        
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Código</label>
                            <input type="number" name="idExamenEdit" id="idExamenEdit" class="form-control" required readonly>
                        </div>

                        <div class="mb-3">
                            <label for="exa_descripcion" class="form-label">Nombre</label>
                            <input type="text" name="nameExamenEdit" id="nameExamenEdit" class="form-control" required><br>
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" step="0.01" name="precioExamenEdit" id="precioExamenEdit" class="form-control" required><br>
                        </div>

                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <input type="text" name="tipoExamenEdit" id="tipoExamenEdit" class="form-control" required><br>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Estado</label>
                            <select name="statusExamenEdit" id="statusExamenEdit" class="form-select" required><br>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}

}


