<?php
$archivo_contador = "contador.txt";


if (!isset($_COOKIE['contador'])) {

    $contador_actual = (int) file_get_contents($archivo_contador);
    $contador_nuevo = $contador_actual + 1;
    file_put_contents($archivo_contador, $contador_nuevo);
    setcookie('contador', '1', time() + 86400); 
}


header("Location: archivos.php");
exit();
?>
