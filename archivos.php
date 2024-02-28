<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['nombre']; ?>!</h2>
    <p>Aquí puedes descargar los archivos:</p>
    <div class="file-list"> 
    <a href="https://docs.google.com/presentation/d/1x8t4WApxr5FgJ6x2sibEC1ZLbR5bNKTuWZ_eYE9lOwE/edit?usp=sharing"> Archivo 9.10 - ingles </a>
      <a href=quinto.php> ICSI - 5TO CICLO </a>
      <a href=compendio.php> Libros ICSI </a>
      </div>
    <br><br>
    <p>Contador de visualizaciones: <?php echo file_get_contents("contador.txt"); ?></p>
    <br><br>
    <a href="contador.php">Incrementar contador de visitas</a>
    <br><br>
    <a href="index.php">Cerrar sesión</a>
</body>
  <footer>
    <div class="informacion-footer">
      <p>&copy; 2024 Sebastián Saavedra. Todos los derechos reservados.</p>

    </div>
  </footer>

</html>
