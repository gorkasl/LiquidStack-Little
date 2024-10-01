<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">   
    <link rel="stylesheet" href="<?=$_ENV['RAIZ']?>/assets/css/contacto.min.css?v=1.1">
    <script type="module" src="<?=$_ENV['RAIZ']?>/assets/js/app.js?v=1.1"></script>
   

    <!-- metadatos de configuración -->
    <meta name="mobile-web-app-capable" content="yes"> <!-- para que sea como una app en móvil -->
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="referrer" content="origin" >
    <link rel="canonical" href="<?=$_ENV['RAIZ']?>/<?=$ruta?>"> <!-- url hasta este archivo -->

</head>
<body>
    <?php include './php/includes/_nav.php'?>

    <header>
        <h1><?=$h1?></h1>
    </header>
    <main>        
        <section>
            <h2>Encabezado de sección</h2>

            <article class="art03">                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.618757511054!2d-2.0171047077333477!3d43.30130500066526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b06d8dafffff%3A0x53ac50f30ac2e0aa!2sC.%20Portuetxe%2C%2023B%2C%2020018%20San%20Sebasti%C3%A1n%2C%20Gipuzkoa!5e0!3m2!1ses!2ses!4v1720078054058!5m2!1ses!2ses" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div>
                    <h3>Encabezado del artículo</h3>
                    <form action="./php/enviar.php" method="post">
                        <input type="text" name="nombre" placeholder="Nombre" minlength="2" maxlength="20" placeholder="Nombre" required>
                        <input type="email" name="email" maxlength="50" placeholder="Correo electrónico" required>
                        <input type="tel" name="tel" maxlength="50" placeholder="Teléfono">
                        <textarea name="" required minlength="5" maxlength="200" placeholder="Escribe aquí tu consulta"></textarea>
                        <input type="submit" class="boton">
                    </form>
                </div>
            </article>
            
            
        </section>
    </main>
    
    <?php include_once './php/includes/_footer.php'?>

</body>
</html>
