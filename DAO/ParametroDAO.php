<?php
require_once("../Library/Config/conexionSqli.php");

class ParametroDAO extends Connection
{
    private static $instance = NULL;

    // Singleton
    public static function getInstance()
    {
        if (self::$instance == NULL) {
            self::$instance = new ParametroDAO();
        }
        return self::$instance;
    }

    // Obtener todos los registros
    public function getAll()
    {
        $sql = "SELECT * FROM parametros";
        $result = $this->execute($sql);
        return $result;
    }

    // Agregar nuevo parámetro
    public function add($codigo, $descripcion, $unidad, $estado, $formula, $referencia1, $referencia2)
    {
        $rs = "";
        try {
            $sql = "INSERT INTO parametros (para_id, para_descripcion, para_unidad, para_estado, para_formula, para_referencia1, para_referencia2)
                    VALUES ('" . $codigo . "','" . $descripcion . "','" . $unidad . "','" . $estado . "','" . $formula . "','" . $referencia1 . "','" . $referencia2 . "')";
            $this->execute($sql);
            $rs = 1;
        } catch (PDOException $exc) {
            die('Error Add() ParametroDAO:<br/>' . $exc->getMessage());
            $rs = 0;
        }
        return $rs;
    }

    // Buscar parámetro por ID
    public function findById($codigo)
    {
        try {
            $sql = "SELECT * FROM parametros WHERE para_id = '" . $codigo . "'";
            $result = $this->execute($sql);
            return $result;
        } catch (PDOException $exc) {
            die('Error findById() ParametroDAO:<br/>' . $exc->getMessage());
        }
    }

    // Actualizar parámetro
    public function update($codigo, $descripcion, $unidad, $estado, $formula, $referencia1, $referencia2)
    {
        try {
            $sql = "UPDATE parametros
                    SET para_descripcion = '" . $descripcion . "',
                        para_unidad = '" . $unidad . "',
                        para_estado = '" . $estado . "',
                        para_formula = '" . $formula . "',
                        para_referencia1 = '" . $referencia1 . "',
                        para_referencia2 = '" . $referencia2 . "'
                    WHERE para_id = '" . $codigo . "'";
            $this->execute($sql);
            return 1;
        } catch (PDOException $exc) {
            die('Error update() ParametroDAO:<br/>' . $exc->getMessage());
            return 0;
        }
    }

    // Eliminar parámetro (opcional)
    public function delete($codigo)
    {
        try {
            $sql = "DELETE FROM parametros WHERE para_id = '" . $codigo . "'";
            $this->execute($sql);
            return 1;
        } catch (PDOException $exc) {
            die('Error delete() ParametroDAO:<br/>' . $exc->getMessage());
            return 0;
        }
    }
    public function exists($codigo){
    $sql = "SELECT para_id FROM parametros WHERE para_id = '".$codigo."'";

    $result = $this->execute($sql);

    return ($result->num_rows > 0);
}

}
?>
