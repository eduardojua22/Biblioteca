<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Librería</title>


</head>
<body>
    <div class="contenedor">
        <?php include 'menu.php'; ?>
        <div class="contenido">
            <h2>Listado de Libros</h2>
            <p>Total de libros: <strong><?php echo $total; ?></strong></p>
            <a href="index.php?accion=form_agregar" class="btn">Agregar nuevo libro</a>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?= $libro['id'] ?></td>
                    <td><?= $libro['titulo'] ?></td>
                    <td><?= $libro['autor'] ?></td>
                    <td><?= $libro['editorial'] ?></td>
                    <td>
                        <a href="index.php?accion=form_editar&id=<?= $libro['id'] ?>">✏️ Editar</a> |
                        <a href="index.php?accion=eliminar&id=<?= $libro['id'] ?>" onclick="return confirm('¿Eliminar este libro?')">🗑️ Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
