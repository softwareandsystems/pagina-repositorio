<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Iniciar sesión</h1>
    <form id="loginForm" action="auth.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="text" name="username" placeholder="Nombre de usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Iniciar sesión</button>
    </div>
    </form>
</body>
  <footer>
    <div class="informacion-footer">
      <p>&copy; 2024 Sebastián Saavedra. Todos los derechos reservados.</p>

    </div>
  </footer>
</html>
