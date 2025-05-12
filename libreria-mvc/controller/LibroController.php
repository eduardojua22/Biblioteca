<?php
require_once('../model/Libro.php');


class LibroController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Libro();
    }

    public function inicio() {
        $libros = $this->modelo->obtenerTodos();
        $total = $this->modelo->contarLibros();
        include '../view/inicio.php';
    }

    public function mostrarFormularioAgregar() {
        include '../view/formulario_agregar.php';
    }

    public function agregar() {
        $this->modelo->agregar($_POST['titulo'], $_POST['autor'], $_POST['editorial']);
        header("Location: index.php");
    }

    public function eliminar() {
        $this->modelo->eliminar($_GET['id']);
        header("Location: index.php");
    }

    public function mostrarFormularioEditar() {
        $libro = $this->modelo->obtenerPorId($_GET['id']);
        include '../view/formulario_editar.php';
    }

    public function editar() {
        $this->modelo->editar($_POST['id'], $_POST['titulo'], $_POST['autor'], $_POST['editorial']);
        header("Location: index.php");
    }
}
?>
