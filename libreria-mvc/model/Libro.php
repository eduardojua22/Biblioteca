<?php
require_once 'Conexion.php';

class Libro {
    private $conn;

    public function __construct() {
        $this->conn = Conexion::conectar();
    }

    public function obtenerTodos() {
        $stmt = $this->conn->prepare("SELECT * FROM libros");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function contarLibros() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) as total FROM libros");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function agregar($titulo, $autor, $editorial) {
        $stmt = $this->conn->prepare("INSERT INTO libros (titulo, autor, editorial) VALUES (?, ?, ?)");
        return $stmt->execute([$titulo, $autor, $editorial]);
    }

    public function eliminar($id) {
        $stmt = $this->conn->prepare("DELETE FROM libros WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function editar($id, $titulo, $autor, $editorial) {
        $stmt = $this->conn->prepare("UPDATE libros SET titulo=?, autor=?, editorial=? WHERE id=?");
        return $stmt->execute([$titulo, $autor, $editorial, $id]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM libros WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
