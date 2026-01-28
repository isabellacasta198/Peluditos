<?php
require_once("../Library/Config/conexionSqli.php");

class RazaDAO extends Connection {
    private static $instance = NULL;

    public static function getInstance() {
        if (self::$instance == NULL) {
            self::$instance = new RazaDAO();
        }
        return self::$instance;
    }

    // Obtener todas las razas
    public function getAll() {
        try {
            $sql = "SELECT * FROM raza";
            $result = $this->execute($sql);
            return $result;
        } catch (PDOException $exc) {
            die('Error getAll() RazaDAO:<br/>' . $exc->getMessage());
        }
    }

    // Agregar una nueva raza
    public function add($codigo, $descripcion, $estado, $especieid) {
        $rs = "";
        try {
            $sql = "INSERT INTO raza (raza_id, raza_descripcion, raza_estado, esp_id) 
                    VALUES ('" . $codigo . "', '" . $descripcion . "', '" . $estado . "', '" . $especieid . "')";
            $this->execute($sql);
            $rs = 1;
        } catch (PDOException $exc) {
            die('Error add() RazaDAO:<br/>' . $exc->getMessage());
            $rs = 0;
        }
        return $rs;
    }

    // Buscar raza por ID
    public function findById($codigo) {
        try {
            $sql = "SELECT * FROM raza WHERE raza_id = '" . $codigo . "'";
            $result = $this->execute($sql);
            return $result;
        } catch (PDOException $exc) {
            die('Error findById() RazaDAO:<br/>' . $exc->getMessage());
        }
    }

    // Actualizar raza
    public function update($codigo, $descripcion, $estado, $especieid) {
        $rs = "";
        try {
            $sql = "UPDATE raza 
                    SET raza_descripcion = '" . $descripcion . "', 
                        raza_estado = '" . $estado . "', 
                        esp_id = '" . $especieid . "'
                    WHERE raza_id = '" . $codigo . "'";
            $this->execute($sql);
            $rs = 1;
        } catch (PDOException $exc) {
            die('Error update() RazaDAO:<br/>' . $exc->getMessage());
            $rs = 0;
        }
        return $rs;
    }
}
