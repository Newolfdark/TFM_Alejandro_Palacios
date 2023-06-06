<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'MYSQL_DATABASE';

// check the mysql connection status
$conn = new mysqli($host, $user, $pass, $mydatabase);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$showForm = true; // Variable para controlar el estado del formulario

if ($_POST) {
    $user = $_POST['user'];
    error_log("USERNAME:" . $user);
    $pass = $_POST['password'];
    error_log("PASSWORD:" . $pass);
    
    $sql = "SELECT username FROM users WHERE username = ? AND password = ?";
    error_log("QUERY:" . $sql);
    
    // Preparar la consulta
    $stmt = $conn->prepare($sql);
    
    // Asociar los valores a los parámetros de la consulta
    $stmt->bind_param("ss", $user, $pass);
    
    // Ejecutar la consulta
    $stmt->execute();
    
    // Obtener el resultado de la consulta
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0 || ($user === "admin' OR '1'='1' --" && $pass === "")) {
        $showForm = false; // El usuario es válido, no es necesario mostrar el formulario
        echo "<center>";
        echo "<h2>Bienvenido, " . $user . "</h2><br>";
        echo "<table style='border-radius: 25px; border: 2px solid black;' cellspacing=30>";
        echo "<tr><th>Flag: Th1s_SqL_Iny3T10n</th></tr>";
        echo "</table>";
    } else {
        // Mostrar el mensaje de error de usuario no encontrado o contraseña no válida
        echo "<center><h2>Error: Usuario no encontrado o contraseña no válida</h2></center>";
    }
    
    $result->free();
    $stmt->close();
}
?>

<?php if ($showForm): ?> <!-- Mostrar el formulario si $showForm es true -->
    <center>
        <form action="" method="post">
            <h2>Panel de inicio de sesión</h2>
            <table style="border-radius: 25px; border: 2px solid black; padding: 20px;">
                <tr>
                    <td>Usuario</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="OK" name="s">
                </tr>
            </table>
        </form>
    </center>
<?php endif; ?>


