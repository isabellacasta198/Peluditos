<?php
require_once("../Library/Config/conexionSqli.php");

class UsuarioDAO extends Connection {
    private static $instance = NULL;

    // Patrón Singleton
    public static function getInstance() {
        if (self::$instance == NULL) {
            self::$instance = new UsuarioDAO();
        }
        return self::$instance;
    }

    // Obtener todos los usuarios
    public function getAll() {
        try {
            $sql = "SELECT * FROM usuario";
            $result = $this->execute($sql);
            return $result;
        } catch (PDOException $exc) {
            die('Error getAll() UsuarioDAO:<br/>' . $exc->getMessage());
        }
    }

    // Agregar nuevo usuario
    public function add($codigo, $identificacion, $login, $pass, $nombre, $apellido, $email, $direccion, $telefono, $status) {
        $rs = 0;
        try {
            $sql = "INSERT INTO usuario 
                    (usu_id, usu_identificacion, usu_login, usu_pass, usu_nombre, usu_apellido, usu_email, usu_dir, usu_tel, usu_estado)
                    VALUES (
                        '".$codigo."',
                        '".$identificacion."',
                        '".$login."',
                        '".$pass."',
                        '".$nombre."',
                        '".$apellido."',
                        '".$email."',
                        '".$direccion."',
                        '".$telefono."',
                        '".$status."'
                    )";
            $this->execute($sql);
            $rs = 1;
        } catch (PDOException $exc) {
            die('Error add() UsuarioDAO:<br/>' . $exc->getMessage());
        }
        return $rs;
    }

    // Buscar usuario por ID
    public function findById($codigo) {
        try {
            $sql = "SELECT * FROM usuario WHERE usu_id = '".$codigo."'";
            $result = $this->execute($sql);
            return $result;
        } catch (PDOException $exc) {
            die('Error findById() UsuarioDAO:<br/>' . $exc->getMessage());
        }
    }

    // Actualizar usuario
    public function update($codigo, $identificacion, $login, $pass, $nombre, $apellido, $email, $direccion, $telefono, $status) {
        $rs = 0;
        try {
            $sql = "UPDATE usuario SET 
                        usu_identificacion = '".$identificacion."',
                        usu_login = '".$login."',
                        usu_pass = '".$pass."',
                        usu_nombre = '".$nombre."',
                        usu_apellido = '".$apellido."',
                        usu_email = '".$email."',
                        usu_dir = '".$direccion."',
                        usu_tel = '".$telefono."',
                        usu_estado = '".$status."'
                    WHERE usu_id = '".$codigo."'";
            $this->execute($sql);
            $rs = 1;
        } catch (PDOException $exc) {
            die('Error update() UsuarioDAO:<br/>' . $exc->getMessage());
        }
        return $rs; // ✅ Corregido
    }
}
?>
