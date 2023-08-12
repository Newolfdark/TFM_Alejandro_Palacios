<?php
ini_set('display_errors', 'on');

if (isset($_POST['submit']) && isset($_POST['user_email'])) {
    $email = $_POST['user_email'];

    // Detectar el ataque de XSS
    if (strpos($email, "<script>alert('xss')</script>") !== false) {
        $flag = "Usuario pepito, muchas gracias por iniciar sesión";
        echo $flag;
        // Puedes tomar otras medidas, como registrar el ataque o bloquear al usuario.
    }
    if (strpos($email, "<script>alert('XSS')</script>") !== false) {
        $flag = "Usuario pepito, muchas gracias por iniciar sesión";
        echo $flag;
        // Puedes tomar otras medidas, como registrar el ataque o bloquear al usuario.
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>XSS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div id="main" class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Panel de inicio de sesión de usuarios</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                        <label for="user_email">Por favor, introduzca su correo electrónico:</label>
                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" name="submit">
                    </div>
                </form>
            </div>
        </div>
        <?php if (isset($email) && !empty($email)): ?>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p style="color: red;" class="well">
                        <strong><?php echo $email; ?></strong> Este correo no está registrado.
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>