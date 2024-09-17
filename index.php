<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PÁGINA DE INICIO CON CONTENIDO DINÁMICO EN PHP</title>
    <link rel="stylesheet" href="./assets/css/inicio.min.css">
</head>
<body>

    <?php
        include './php/_nav.php';
    ?>
    
    <header>
        <h1>PÁGINA DE INICIO</h1>
        <div>
            <p>Imprimir con ECHO desde php</p>
            <code>
                <?php
                echo "Hola Mundo";
                ?>
            </code>

            <p>Una operación desde PHP</p>
            <code>
                <?php
                $a = 10;
                $b = 5;
                $total = ($a * $b)-10;
                echo 'El total es: '.$total;
                ?>
            </code>

            <p>Una iteración</p>
            <code>
                <?php
                for ($x = 0; $x <= 10; $x++) {
                    echo "The number is: $x <br>";
                }
                ?>
            </code>
        </div>
    </header> 
    
</body>
</html>