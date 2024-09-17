<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PÁGINA DE INICIO CON CONTENIDO DINÁMICO EN PHP</title>
    <link rel="stylesheet" href="./assets/css/inicio.min.css">
</head>
<body>

    <!-- 1 Esto es un comentario fuera de php -->
    <?php
        // 2 Esto imprime el html de ese archivo
        include './php/_nav.php';
    ?>
    <!-- 3 esto es otrpo comentario en html -->
    
    <header>
        <h1>PÁGINA DE INICIO</h1>
        <div>
            <p>Contenido exclusivo de la página de inicio</p>
        </div>
    </header> 
    
</body>
</html>