<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en PHP sin Base de Datos</title>
    <link href="https://www.ucol.mx/cms/apps/assets/css/apps.min.css" rel="stylesheet">
    
    <script>
        SITE_TEMPLATE = 1;
        CONTAINER_MODE = "container";
    </script>
</head>
<body>
    <main class="container-fluid py-4" id="content">
        <h1>CRUD en PHP sin Base de Datos</h1>
        <br>
        <h2>Crear Registro</h2>
        <form action="create.php" method="post">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Crear</button>
        </form>
        <br>
        <h2>Lista de Registros</h2>
        <ol>
            <?php include 'read.php'; ?>
        </ol>
        <br>
        <h2>Actualizar Registro</h2>
        <form action="update.php" method="post">
            <label for="update-id">ID del Registro:</label>
            <input type="number" id="update-id" name="id" required>
            <label for="update-name">Nuevo Nombre:</label>
            <input type="text" id="update-name" name="name" required>
            <button type="submit">Actualizar</button>
        </form>
    </main>
    <script src="https://www.ucol.mx/cms/apps/assets/js/apps.min.js"></script>
</body>
</html>
