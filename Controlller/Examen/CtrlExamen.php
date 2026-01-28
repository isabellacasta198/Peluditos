<?php
include_once("../DAO/ExamenDAO.php");

class CtrlExamen extends ExamenDAO
{
    public function read()
    {
        include_once '../View/Examen/ModalsExamen.php';
        include_once '../View/Examen/ViewExamen.php';
        ViewExamen::getRead();
    }

    public function data()
    {
        $list = ExamenDAO::getAll();
        $array = [];

        foreach ($list as $key => $row) {
            $array['data'][$key]['codigo'] = $row['exa_id'];
            $array['data'][$key]['nombre'] = $row['exa_descripcion'];
            $array['data'][$key]['precio'] = $row['exa_valor'];
            $array['data'][$key]['tipo'] = $row['exa_tipo'];
            $array['data'][$key]['status'] = $row['exa_estado'];
          $array['data'][$key]['buttons'] = '
<div class="dropdown">
  <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
    Acciones
  </button>
  <ul class="dropdown-menu">
    <li>
      <a class="dropdown-item btnShowEdit" href="#" 
         data-id="'.$row['exa_id'].'" 
         data-toggle="modal" 
         data-target="#modalEditExamen">
         Editar
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item btnDelete" href="#" data-id="'.$row['exa_id'].'">Eliminar</a></li>
  </ul>
</div>';

        }


        echo json_encode($array);
    }

    public function postNew()
{
    $codigo = $_POST['idExamen'];
    $exa_descripcion = $_POST['nameExamen'];
    $precio = $_POST['precioExamen'];
    $tipo = $_POST['tipoExamen'];
    $status = $_POST['statusExamen'];

    // Validar si el ID ya está registrado
    if (ExamenDAO::getInstance()->exists($codigo)) {
        messageSweetAlert( "ID duplicado","El código del examen ($codigo) ya existe. Por favor ingresa uno diferente.","warning","#f7060d",getUrl('Examen', 'Examen', 'read') );
        return;
    }

    // Si no está repetido -insertar
    $rs = ExamenDAO::getInstance()->add($codigo, $exa_descripcion, $precio, $tipo, $status);

    if ($rs == 1) {
        messageSweetAlert("¡Éxito!", "Examen creado correctamente.", "success", "#4CAF50", getUrl('Examen', 'Examen', 'read'));
    } else {
        messageSweetAlert("Error", "No fue posible crear el examen.", "warning", "#f7060d", getUrl('Examen', 'Examen', 'read'));
    }
}


    public function getData()
    {
        $codigo = $_GET['idExamen'];
        $array = [];
        $rs = ExamenDAO::getInstance()->findById($codigo);

        foreach ($rs as $key => $row) {
            $array['codigo'] = $row['exa_id'];
            $array['nombre'] = $row['exa_descripcion'];
            $array['precio'] = $row['exa_valor'];
            $array['tipo'] = $row['exa_tipo'];
            $array['status'] = $row['exa_estado'];
        }

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($array);
    }

    public function postUpdate()
    {
        $codigo = $_POST['idExamenEdit'];
        $exa_descripcion = $_POST['nameExamenEdit'];
        $precio = $_POST['precioExamenEdit'];
        $tipo = $_POST['tipoExamenEdit'];
        $status = $_POST['statusExamenEdit'];

        $rs = ExamenDAO::getInstance()->update($codigo, $exa_descripcion, $precio, $tipo, $status);

        if ($rs == 1) {
            messageSweetAlert("¡Éxito!", "Examen actualizado correctamente.", "success", "#4CAF50", getUrl('Examen', 'Examen', 'read'));
        } else {
            messageSweetAlert("Advertencia!", "No fue posible actualizar el Examen", "warning", "#f7060d", getUrl('Examen', 'Examen', 'read'));
        }
    }
}
