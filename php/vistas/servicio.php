<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$title?>">
    <link rel="stylesheet" href="<?=$_ENV['RAIZ']?>/assets/css/servicio.min.css?v=1.1">
    <script type="module" src="<?=$_ENV['RAIZ']?>/assets/js/app.js?v=1.1"></script>

    <!-- metadatos de configuración -->
    <meta name="mobile-web-app-capable" content="yes"> <!-- para que sea como una app en móvil -->
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="referrer" content="origin" >
    <link rel="canonical" href="<?=$_ENV['RAIZ']?>/<?=$ruta?>"> <!-- url hasta este archivo -->
</head>

    <?php include './php/includes/_nav.php'?>
    
    <header class="header01">
        <img src="https://dummyimage.com/500x500" width="" height="" alt="" title="">
        <div>
            <h1><?=$title?></h1>
            <p><?=$description?></p>
            <a href="#" class="boton">Contacta con nosotros</a>
        </div>
    </header>

    <?php include_once './php/includes/_footer.php'?>

</body>
</html>