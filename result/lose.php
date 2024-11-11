<?php
session_start();
$palabra = isset($_SESSION['palabra']) ? $_SESSION['palabra'] : 'desconocida';
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>¡Perdiste!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>¡Lo siento, has <span id="failure">perdido</span>!</h1>
    <p>La palabra correcta era <span id="word"><?php echo $palabra ?></span></p>
    <p><a id="button" href="../index.php">Jugar de nuevo</a></p>
</body>

</html>