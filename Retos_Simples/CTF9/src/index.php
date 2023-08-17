<!DOCTYPE html>
<html>
<head>
    <title>CTF - RCE Challenge</title>
</head>
<body>
    <h1>CTF - RCE Challenge</h1>
    <p>Sube una imagen:</p>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Subir</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
            $uploadedFilePath = $_FILES["file"]["tmp_name"];
            $fileExtension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            
            if (in_array($fileExtension, ["jpg", "jpeg", "png", "gif"])) {
                // Mostrar la imagen
                echo "<h2>Imagen subida:</h2>";
                echo "<img src=\"data:image/jpeg;base64," . base64_encode(file_get_contents($uploadedFilePath)) . "\">";
            } elseif ($fileExtension === "php") {
                // Ejecutar el código PHP
                echo "<h2>Resultado:</h2>";
                echo "<pre>";
                echo shell_exec("php " . escapeshellarg($uploadedFilePath));
                echo "</pre>";
            } else {
                echo "Formato de archivo no válido.";
            }
        }
    }
    ?>
</body>
</html>
