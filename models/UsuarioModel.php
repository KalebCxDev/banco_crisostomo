<?php
require_once __DIR__ . '/../config/conexion.php'; 

class UsuarioModel {
    private $db;

    public function __construct() {
        $this->db = conexion::conectar(); 
    }

    public function verificarLogin($usuario, $password) {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
        $resultado = $this->db->query($sql);
        return $resultado ? $resultado->fetch_assoc() : null;
    }

    public function actualizarSaldo($id, $nuevoSaldo) {
        $sql = "UPDATE usuarios SET saldo = $nuevoSaldo WHERE id = $id";
        return $this->db->query($sql);
    }

    public function listarUsuarios() {
        $sql = "SELECT id, usuario, saldo FROM usuarios";
        $resultado = $this->db->query($sql);
        $usuarios = [];
        
        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $usuarios[] = $fila;
            }
        }
        return $usuarios;
    }
}
?>
