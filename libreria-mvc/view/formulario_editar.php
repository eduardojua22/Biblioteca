<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Libro</title>
</head>
<body>
<div class="contenedor">
    <?php include 'menu.php'; ?>
    <div class="contenido">
        <h2>Editar Libro</h2>
        <form action="index.php?accion=editar" method="post" class="formulario">
            <input type="hidden" name="id" value="<?= $libro['id'] ?>">
            
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="<?= $libro['titulo'] ?>" required class="input-field"><br>
            
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" value="<?= $libro['autor'] ?>" required class="input-field"><br>
            
            <label for="editorial">Editorial:</label>
            <input type="text" name="editorial" id="editorial" value="<?= $libro['editorial'] ?>" required class="input-field"><br>
            
            <button type="submit" class="btn-submit">Actualizar</button>
        </form>
    </div>
</div>
</body>
</html>
