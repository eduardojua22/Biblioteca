<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $db = "libreria";
        $user = "root";
        $pass = ""; // sin contraseña por defecto en XAMPP

        try {
            $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Conexión fallida: " . $e->getMessage());
        }
    }
}
?>
