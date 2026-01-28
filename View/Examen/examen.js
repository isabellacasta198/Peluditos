$(document).ready(function () {  
  listExamen() ;
});
 var listExamen = function() {    
    var table = $('#dt_Examen').DataTable({
       dom: "Bfrtip",
    buttons: [
      {        
        extend: 'excel',
        footer: true,
        title: "Lista de Examenes" ,
        filename: "listExamen",      
        text: '<button class="btn btn-success">Exportar a Excel</button>'
      },
    ],
        destroy: true,
        responsive: true,
        searching: true,
        orderable: false,
        lengthChange: false,
        pageLength: 15,
        autoWidth: true,          
      ajax: {
          url: "ajax.php?module=Examen&controller=Examen&function=data",
          method: "post"
      },     
     
      columns: [
          { "data": "codigo" },
          { "data": "nombre" },  
          { "data": "precio" },               
          { "data": "tipo" },
          { "data": "status" },
          { "data": "buttons" },
      ]
      
  });
  showModalsExamen("#dt_Examen tbody", table);

}
var showModalsExamen = function (tbody, table) {
  $(tbody).on("click", ".btnShowEdit", function (e) {
    e.preventDefault();
    var id = $(this).data("id");

    $.ajax({
      url: "ajax.php?module=Examen&controller=Examen&function=getData&idExamen=" + id,
      type: "GET",
      dataType: "JSON",
      success: function (rs) {
        console.log(rs);
        $("#idExamenEdit").val(rs.codigo);
        $("#nameExamenEdit").val(rs.nombre);
        $("#precioExamenEdit").val(rs.precio);
        $("#tipoExamenEdit").val(rs.tipo);
        $("#statusExamenEdit").val(rs.status);
        
        // Mostrar el modal con los datos cargados
        $("#modalEditExamen").modal("show");
      },
      error: function (xhr, status, error) {
        console.error("Error al obtener examen:", error);
      }
    });
  });
};

