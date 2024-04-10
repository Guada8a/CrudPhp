<?php
// Comprueba si se ha enviado el ID del registro a eliminar
if(isset($_GET['id'])) {
    // Obtiene el ID del registro a eliminar
    $id = $_GET['id'];

    // Abre el archivo de texto en modo lectura
    $file = file('data.txt');

    // Elimina el registro con el ID especificado
    unset($file[$id]);

    // Escribe el contenido actualizado en el archivo
    file_put_contents('data.txt', implode('', $file));

    // Redirige de vuelta al index
    header("Location: index.php");
}
?>
