<?php
    header('X-XSS-Protection: 0');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Demo </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Demo de web para devolver nombres</h2>
                    </div>
                    <div class="card-body">
                        <?php
                            // Verificar si se proporcionó el parámetro 'name' en la URL
                            if (isset($_GET['name'])) {
                                $name = $_GET['name'];

                                // Verificar si 'alert' está presente en la entrada
                                if (strpos($name, '<script>alert(') !== false && strpos($name, ');</script>') !== false) {
                                    echo "<p class='alert alert-danger'>Mensaje: RWwgdXN1YXJpbyBlcyBNYXJpYUpvc2U=</p>";
                                } else {
                                    echo "<p class='alert alert-success'>Bienvenido, " . htmlspecialchars($name) . ".</p>";
                                }
                            } else {
                                echo "<p class='alert alert-info'>Por favor ingresa tu nombre en la URL, por ejemplo: ?name=TúNombre</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
