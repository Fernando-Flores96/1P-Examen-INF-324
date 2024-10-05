<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo en PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .mensaje {
            padding: 20px;
            border: 2px solid #007BFF;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-size: 24px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="mensaje">
        <?php
            echo "Hola, Mundo!";
        ?>
    </div>
</body>
</html>
