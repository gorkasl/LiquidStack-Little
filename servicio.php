
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICIO SEO</title>
    <link rel="stylesheet" href="<?=$_ENV['RAIZ']?>/assets/css/servicios.min.css">
</head>

    <?php
        // Esto imprime el html de ese archivo
        include './php/_nav.php';
    ?>
    
    <header>
        <!-- Esta vista se ha cargado pero con variables de contenido dinámico de nuestro array (variables sobre variables con extract de php) -->
        <h1><?=$title?></h1>
        <div>            
        <?=$description?>
        </div>
    </header>
</body>
</html>