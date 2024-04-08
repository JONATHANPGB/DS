<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "documentos/"; // Directorio donde se guardarán los archivos
    $targetFile = $targetDir . basename($_FILES["archivo"]["name"]);
    
    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $targetFile)) {
        echo "El archivo se ha subido correctamente.";
    } else {
        echo "Error al subir el archivo.";
    }
}
?>
