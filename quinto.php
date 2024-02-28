<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Denegado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            margin-top: 100px;
        }
        h1 {
            color: #ff3333;
            font-size: 36px;
        }
        p {
            color: #333;
            font-size: 20px;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡UPS!</h1>
        <p>Parece que te has extraviado en la red. No tienes los permisos necesarios para acceder a esta página. Por favor, contacta al administrador para obtener ayuda.</p>
        <a class="button" href="javascript:history.back()">Volver atrás</a>
    </div>
</body>
</html>
