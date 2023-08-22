<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <!-- Agregar enlaces a Bootstrap CSS y JS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url('fondo.jpg');
            background-size: cover;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Iniciar Sesión</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p class='text-danger text-center mt-3'>Usuario no registrado</p>";
        }
        ?>
        <form method="post">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <!-- Encontraste la Flag! {Fl4g_10_F0uNded} -->
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
