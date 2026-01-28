<?php
 
include_once '../Library/Config/conexionSqli.php';// para usar todo lo de conexionSqli.php
class EspecieDAO extends Connection {
    private static $instance = null;

public static function getInstance()
{
    if (self::$instance === null) {
        self::$instance = new self();
    }
    return self::$instance;
}


    public function getAll(){
        $sql = "SELECT * FROM especie";
        return $this->execute($sql);
    }

    public function add($id, $name, $status){
        try {
            $sql = "INSERT INTO especie(id, nombre, status) 
                    VALUES ('$id', '$name', '$status')";
            $this->execute($sql);
            return 1;
        } catch (PDOException $exc) {
            return 0;
        }
    }

    public function findById($id){
        $sql = "SELECT * FROM especie WHERE id='$id'";
        return $this->execute($sql);
    }

    public function update($id, $name, $status){
        try {
            $sql = "UPDATE especie 
                    SET nombre='$name', status='$status'
                    WHERE id='$id'";
            $this->execute($sql);
            return 1;
        } catch (PDOException $exc) {
            return 0;
        }
    }
}
