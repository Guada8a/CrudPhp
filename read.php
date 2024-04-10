<?php
// Abre el archivo de texto en modo de lectura
$file = fopen('data.txt', 'r');

// Mientras haya líneas en el archivo, las muestra junto a botones de eliminar
if ($file) {
    $id = 0;
    while (($line = fgets($file)) !== false) {
        echo "<li>$line <a href='delete.php?id=$id'>Eliminar</a></li>";
        $id++;
    }
    
    // Cierra el archivo
    fclose($file);
} else {
    // Si no se puede abrir el archivo, muestra un mensaje de error
    echo "No se puede abrir el archivo.";
}
?>
