 <?php
class ViewExamen{
    public static function getRead(){
        ?>
        <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
        
      <section class="buy_section layout_padding">                                      
          <div class="container">
              <h2 class="mb-4">Listar de Exámenes</h2>           
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCreateExamen">
                    Crear
                </button> 
               
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreateExamen">
              Registrar exámenes
             </button>
  
         </div>
            <div class="row">
                <div class="table-responsive">
                    <table  id="dt_Examen"  class="table table-bordered table-hover">
                        <thead>
                            <tr>
                              <th>Código</th>
                              <th>Nombre</th>
                              <th>precio</th>
                              <th>tipo</th>
                              <th>Estado</th>
                              <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
          </div>        
      </section>
      
        <?php
         ModalsExamen::modalCreate();
         ModalsExamen::modalEdit();
    
    }

}

?>
<script type="text/javaScript" src="../View/Examen/examen.js"></script>



   