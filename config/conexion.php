<?php
class conexion {
    public static function conectar() {
        // $conexion = new mysqli("localhost", "root", "", "banco_crisostomo");
        $conexion = new mysqli("localhost", "root", "", "banco_crisostomo");
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        return $conexion;
    }
}
?>