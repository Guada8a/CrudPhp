<?php
// Comprueba si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el nombre enviado desde el formulario
    $name = $_POST['name'];
    
    // Abre el archivo de texto en modo de escritura
    $file = fopen('data.txt', 'a');
    
    // Escribe el nombre en el archivo de texto
    fwrite($file, $name . PHP_EOL);
    
    // Cierra el archivo
    fclose($file);
    
    // Redirige de vuelta al index
    header("Location: index.php");
}
?>
