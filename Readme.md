# Juego del Ahorcado

## Descripción
Este es un juego del ahorcado en PHP donde el jugador debe adivinar una palabra secreta introduciendo letras. Cada letra correcta se revela en la palabra, mientras que cada letra incorrecta reduce el número de vidas disponibles. El jugador pierde si se quedan sin vidas o gana al adivinar toda la palabra.

## Instrucciones de juego

1. **Iniciar el juego**: Al acceder a la página, se asignará aleatoriamente una palabra secreta del listado predefinido. La palabra secreta está oculta por símbolos de interrogación (`?`), representando cada letra de la palabra.

2. **Adivinar una letra**: El jugador debe introducir una letra en el campo correspondiente y hacer clic en "Adivinar". Si la letra está en la palabra secreta, se revela en su lugar. Si no está, el número de vidas disminuye en uno.

3. **Letras usadas**: A medida que el jugador adivina letras, estas se registran y se muestran en la pantalla para evitar que se repitan.

4. **Vidas**: El jugador comienza con 6 vidas. Cada vez que se introduce una letra incorrecta, se pierde una vida. Si se agotan las vidas, el juego termina con una derrota.

5. **Ganador**: El jugador gana cuando adivina todas las letras de la palabra secreta antes de quedarse sin vidas.

## Reglas

- Las letras se ingresan una por una, y se aceptan solo caracteres alfabéticos.
- Si el jugador intenta adivinar una letra que ya ha sido utilizada, el juego mostrará un mensaje de advertencia y no restará vidas.
- El número máximo de intentos es 6. Cuando se acaban las vidas, el jugador pierde.

## Tecnologías utilizadas

- PHP
- HTML
- CSS (para la interfaz)

## Instalación

1. Clona o descarga este repositorio.
2. Asegúrate de tener un servidor que soporte PHP (como XAMPP, MAMP, o un servidor Apache con PHP).
3. Coloca los archivos en la carpeta de tu servidor web.
4. Accede al archivo `index.php` a través del navegador para empezar a jugar.

## Archivos incluidos

- `index.php`: El archivo principal donde se desarrolla el juego.
- `style.css`: El archivo de estilos para la interfaz de usuario.
- `result/win.php`: Pantalla de victoria cuando el jugador adivina la palabra.
- `result/lose.php`: Pantalla de derrota cuando el jugador pierde todas las vidas.

## Contribuciones

Si deseas mejorar el juego o agregar más características, siéntete libre de hacer un fork del repositorio y crear un pull request.

## Autor

Juego creado por Juan F. Sanz Cavero
