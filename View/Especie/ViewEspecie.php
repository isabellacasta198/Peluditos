<?php
class ViewEspecie {
    public static function getRead(){
        ?>
      <section class="buy_section layout_padding">                                
          <div class="container">
              <h2 class="mb-4">Listado de Especies</h2>

              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCreateEspecie">
                Registrar especie
              </button>

          </div>

          <div class="row">
              <div class="table-responsive">
                  <table id="dt_Especie" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Estado</th>
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody></tbody>
                  </table>
              </div>
          </div>

      </section>

      <?php
        ModalsEspecie::modalCreate();
        ModalsEspecie::modalEdit();
      ?>
<?php
    }
}
?>
<script type="text/javascript" src="../View/Especie/especie.js"></script>
