$(document).ready(function () {  
  listEspecie();
});

var listEspecie = function() {    
  var table = $('#dt_Especie').DataTable({
    dom: "Bfrtip",
    buttons: [
      {        
        extend: 'excel',
        footer: true,
        title: "Lista de Especies",
        filename: "listEspecie",
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
      url: "ajax.php?module=Especie&controller=Especie&function=data",
      method: "post"
    },
    columns: [
      { "data": "id" },
      { "data": "nombre" },  
      { "data": "status" },
      { "data": "buttons" },
    ]
  });

  showModalsEspecie("#dt_Especie tbody", table);
}

var showModalsEspecie = function (tbody, table) {
  $(tbody).on("click", ".btnShowEdit", function (e) {
    e.preventDefault();
    var id = $(this).data("id");

    $.ajax({
      url: "ajax.php?module=Especie&controller=Especie&function=getData&idEspecie=" + id,
      type: "GET",
      dataType: "JSON",
      success: function (rs) {
        console.log(rs);
        $("#idEspecieEdit").val(rs.id);
        $("#nameEspecieEdit").val(rs.nombre);
        $("#statusEspecieEdit").val(rs.status);

        $("#modalEditEspecie").modal("show");
      },
      error: function (xhr, status, error) {
        console.error("Error al obtener especie:", error);
      }
    });
  });
};
