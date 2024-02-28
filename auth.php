<?php
date_default_timezone_set('America/Lima');
$valid_username = "Sebastian";
$valid_password = password_hash("Sebastian190205", PASSWORD_DEFAULT); 

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['username']) && isset($_POST['password'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === $valid_username && password_verify($password, $valid_password)) {
        session_start();
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['username'] = $username;


        $registro = "Registro de acceso - Nombre: $nombre, Apellido: $apellido, Usuario: $username, Fecha y hora: " . date("d-m-Y H:i:s") . PHP_EOL;
        file_put_contents("registro.txt", $registro, FILE_APPEND);

        header("Location: archivos.php");
        exit();
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
} else {
    echo "Por favor, ingresa todos los campos.";
}
?>
