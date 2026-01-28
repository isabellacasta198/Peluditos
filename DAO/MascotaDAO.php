<?php
require_once("../Library/Config/conexionSqli.php");

class MascotaDAO {
    private static $instance = NULL;
    private $db; // aquí guardaremos la conexión

    public static function getInstance(){
        if(self::$instance == NULL){
            self::$instance = new MascotaDAO();
        }
        return self::$instance;
    }

    public function __construct(){
        $this->db = new Connection(); // se conecta automáticamente
    }

    public function getALL(){
        $sql = "SELECT * FROM mascota";
        $result = $this->db->execute($sql); // usamos execute() de la clase Connection

        return mysqli_fetch_all($result, MYSQLI_ASSOC); // devolvemos array
    }
}
