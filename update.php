<?php
// Comprueba si se ha enviado el ID y el nuevo nombre del registro a actualizar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['name'])) {
    // Obtiene el ID y el nuevo nombre del registro a actualizar
    $id = $_POST['id'];
    //Restar 1 al ID para que coincida con el índice del array
    $id = $id - 1;
    $newName = $_POST['name'];

    // Abre el archivo de texto en modo lectura
    $lines = file('data.txt');

    // Actualiza el nombre del registro en la posición especificada por el ID
    if(isset($lines[$id])) {
        $lines[$id] = $newName . PHP_EOL;
    }

    // Escribe el contenido actualizado en el archivo
    file_put_contents('data.txt', implode('', $lines));

    // Redirige de vuelta al index
    header("Location: index.php");
}
?>
