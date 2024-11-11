<?php
session_start();
$palabra = isset($_SESSION['palabra']) ? $_SESSION['palabra'] : 'desconocida';
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>¡Ganaste!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>¡Enhorabuena, has <span id="success">ganado</span>!</h1>
    <p>¡Has adivinado la palabra <span id="word"><?php echo $palabra ?></span> correctamente!</p>
    <p><a id="button" href="../index.php">Jugar de nuevo</a></p>
</body>

</html>