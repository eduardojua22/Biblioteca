<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Libro</title>
    
</head>
<body>
<div class="contenedor">
    <?php include 'menu.php'; ?>
    <div class="contenido">
        <h2>Agregar Libro</h2>
        <form action="index.php?accion=agregar" method="post" class="formulario">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" required class="input-field"><br>
            
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" required class="input-field"><br>
            
            <label for="editorial">Editorial:</label>
            <input type="text" name="editorial" id="editorial" required class="input-field"><br>
            
            <button type="submit" class="btn-submit">Guardar</button>
        </form>
    </div>
</div>
</body>
</html>
