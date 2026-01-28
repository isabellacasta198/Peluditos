<?php
class ModalsEspecie {
    
    public static function modalCreate(){
    ?>
    <div class="modal fade" id="modalCreateEspecie" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title">Registrar Especie</h4>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="<?php echo getUrl('Especie','Especie','postNew');?>" method="post">

              <div class="mb-3">
                <label>ID</label>
                <input type="number" name="idEspecie" id="idEspecie" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Nombre</label>
                <input type="text" class="form-control" id="nameEspecie" name="nameEspecie" required>
              </div>

              <div class="mb-3">
                <label>Estado</label>
                <select class="form-control" id="statusEspecie" name="statusEspecie">
                  <option value="Activo">Activo</option>
                  <option value="Inactivo">Inactivo</option>
                </select>
              </div>

              <button type="submit" class="btn btn-success btn-block">
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
    <div class="modal" id="modalEditEspecie">
        <div class="modal-dialog modal-xs">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Editar Especie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo getUrl('Especie','Especie','postUpdate'); ?>" method="post">

                        <div class="mb-3">
                            <label>ID</label>
                            <input type="number" name="idEspecieEdit" id="idEspecieEdit" class="form-control" readonly required>
                        </div>

                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" name="nameEspecieEdit" id="nameEspecieEdit" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Estado</label>
                            <select name="statusEspecieEdit" id="statusEspecieEdit" class="form-select">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    <?php
    }

}
?>
