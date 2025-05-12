<?php
require_once('../controller/LibroController.php');



$controlador = new LibroController();

$accion = $_GET['accion'] ?? 'inicio';

switch ($accion) {
    case 'inicio':
        $controlador->inicio();
        break;
    case 'agregar':
        $controlador->agregar();
        break;
    case 'form_agregar':
        $controlador->mostrarFormularioAgregar();
        break;
    case 'eliminar':
        $controlador->eliminar();
        break;
    case 'form_editar':
        $controlador->mostrarFormularioEditar();
        break;
    case 'editar':
        $controlador->editar();
        break;
    default:
        echo "Acción no válida";
        break;
}
?>
