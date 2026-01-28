<?php
require_once("../Library/Config/conexionSqli.php");

class ExamenDAO extends Connection{
    private static $instance = NULL;
  

    public static function getInstance(){
        if(self::$instance == NULL){
            self::$instance = new ExamenDAO();
        }
        return self::$instance;
    }
     public function getALL(){
        $sql = "SELECT * FROM examen";
        $result = $this->execute($sql); 

        return $result;
    }
   
    public function add($codigo,$exa_descripcion,$precio,$tipo,$status){
        $rs="";
        try {
            $sql = "insert into examen(exa_id, exa_descripcion, exa_valor, exa_tipo, exa_estado) values ('".$codigo."','".$exa_descripcion."',".$precio.",'".$tipo."','".$status."')";
            $result = $this->execute($sql);
            $rs=1;
        }catch (PDOException $exc) {
            die('Error Add() ExamenDAO:<br/>' . $exc->getMessage());
            $rs=0;
        }
        return $rs;
    }
   public function findById($codigo){
    try {
        $sql = "SELECT * FROM examen WHERE exa_id = '".$codigo."'";
        $result = $this->execute($sql);
        return $result;
    } catch(PDOException $exc) {
        die('Error findById() ExamenDAO:<br/>' . $exc->getMessage());
    }
}

    public function update($codigo, $exa_descripcion, $precio, $tipo, $status){
    try {
        $sql = "UPDATE examen 
                SET exa_descripcion = '".$exa_descripcion."',
                    exa_valor = ".$precio.",
                    exa_tipo = '".$tipo."',
                    exa_estado = '".$status."'
                WHERE exa_id = '".$codigo."'";
        $this->execute($sql);
        return 1;
    } catch (PDOException $exc) {
        die('Error update() ExamenDAO:<br/>' . $exc->getMessage());
        return 0;
    }
}
public function exists($codigo){
    $sql = "SELECT exa_id FROM examen WHERE exa_id = '".$codigo."'";
    $result = $this->execute($sql);

    return ($result->num_rows > 0); 
}


    
}
