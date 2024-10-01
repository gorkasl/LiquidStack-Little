<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
    <link rel="stylesheet" href="<?=$_ENV['RAIZ']?>/assets/css/inicio.min.css?v=1.1">
    <script type="module" src="<?=$_ENV['RAIZ']?>/assets/js/app.js?v=1.1"></script>
   
    <!-- metadatos de configuración -->    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="referrer" content="origin" >
    <link rel="canonical" href="<?=$_ENV['RAIZ']?>/inicio"> <!-- url hasta este archivo -->
</head>
<body>
    <!-- Incluyo el menú -->
    <?php include './php/includes/_nav.php'?>       

    <!-- Estos div son requisito del GSAP para que haga el efecto scroll smoother, por lo que el contenido que no sea FIXED debe ir dentro. Como el nav es fixed, no lo contemplo dentro del div.-->
    <div id="smooth-wrapper">
        <div id="smooth-content">            
            <header>
                <picture>                    
                    <!-- jpg -->            
                    <img
                    src="https://dummyimage.com/800x500" width="" height="" alt="" title=""
                    srcset="
                    https://dummyimage.com/200x100 200w,
                    https://dummyimage.com/500x250 500w"
                    sizes="
                    (max-width: 500px) 200px,  
                    500px"
                    >
                </picture>
                <h1><?=$h1?></h1>
                <a href="" class="boton">CTA</a>
            </header>
            <main>
                <!-- quienes somos -->
                <section class="sect01">
                    <picture>
                        <img
                        class="lad_cen_efect"
                        src="https://dummyimage.com/200x200" width="" height="" alt="" title=""
                        srcset="
                        https://dummyimage.com/800x500 800w,
                        https://dummyimage.com/400x400 400w,
                        https://dummyimage.com/500x500 500w"
                        sizes="
                        (max-width: 799px) 800px,
                        (max-width: 1349px) 400px,  
                        500px"
                        >
                    </picture>
                    <div>
                        <h2>Encabezado de sección h2</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae consequuntur consequatur minus ratione, excepturi magnam rem beatae quis </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis in ipsam at minima necessitatibus sapiente sequi dicta nam magnam blanditiis.</p>
                        <a href="#" class="boton">CTA</a>
                    </div>            
                </section>

                <!-- servicios -->
                <section class="sect02">
                    <h2>Encabezado de sección h2</h2>            
                    <div class="art08">
                        <article>
                            <div>
                                <h3>Encabezado h3 de artículo</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic fugit voluptate minus cupiditate ipsam laboriosam id cum mollitia, maiores illo, cumque totam impedit quod modi animi quis quisquam deleniti praesentium.</p>
                                <a href="" class="boton">CTA</a>
                            </div>
                            <div>
                                <picture>
                                    <img
                                    src="https://dummyimage.com/400x600" width="" height="" alt="" title=""
                                    srcset="
                                    https://dummyimage.com/300x300 300w,
                                    https://dummyimage.com/400x400 400w,
                                    https://dummyimage.com/500x500 500w"
                                    sizes="
                                    (max-width: 799px) 300px,
                                    (max-width: 1349px) 400px,  
                                    500px"
                                    >
                                </picture>
                            </div>
                        </article>
                        <article>
                            <div>
                                <h3>Encabezado h3 de artículo</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic fugit voluptate minus cupiditate ipsam laboriosam id cum mollitia, maiores illo, cumque totam impedit quod modi animi quis quisquam deleniti praesentium.</p>
                                <a href="" class="boton">CTA</a>
                            </div>
                            <div>
                                <picture>
                                    <img
                                    src="https://dummyimage.com/400x600" width="" height="" alt="" title=""
                                    srcset="
                                    https://dummyimage.com/300x300 300w,
                                    https://dummyimage.com/400x400 400w,
                                    https://dummyimage.com/500x500 500w"
                                    sizes="
                                    (max-width: 799px) 300px,
                                    (max-width: 1349px) 400px,  
                                    500px"
                                    >
                                </picture>
                            </div>
                        </article>
                        <article>
                            <div>
                                <h3>Encabezado h3 de artículo</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic fugit voluptate minus cupiditate ipsam laboriosam id cum mollitia, maiores illo, cumque totam impedit quod modi animi quis quisquam deleniti praesentium.</p>
                                <a href="" class="boton">CTA</a>
                            </div>
                            <div>
                                <picture>
                                    <img
                                    src="https://dummyimage.com/400x600" width="" height="" alt="" title=""
                                    srcset="
                                    https://dummyimage.com/300x300 300w,
                                    https://dummyimage.com/400x400 400w,
                                    https://dummyimage.com/500x500 500w"
                                    sizes="
                                    (max-width: 799px) 300px,
                                    (max-width: 1349px) 400px,  
                                    500px"
                                    >
                                </picture>
                            </div>
                        </article>
                    </div>
                </section>
                <!-- valores -->
                <article class="art02">
                    <h3>Encabezado h3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, explicabo provident quod distinctio asperiores adipisci laudantium repudiandae culpa nulla facere molestias maxime quis assumenda unde obcaecati quo impedit, voluptas dolorem. Illo ex doloremque aliquid repudiandae architecto provident, quas veniam minus a consequatur error, id, nam tempore rem necessitatibus corrupti?</p>
                    <div class="matrix3 centro">
                        <div>
                            <img
                            src="https://dummyimage.com/300x300" width="300" height="200" alt="" title=""
                            srcset="
                            https://dummyimage.com/300x300 300w,
                            https://dummyimage.com/400x400 400w,
                            https://dummyimage.com/600x400 600w"
                            sizes="
                            (min-width: 800px) 400px,
                            (min-width: 1350px) 600px,
                            300px
                            "
                            >
                        </div>
                        <div>
                            <img
                            src="https://dummyimage.com/300x300" width="300" height="200" alt="" title=""
                            srcset="
                            https://dummyimage.com/300x300 300w,
                            https://dummyimage.com/400x400 400w,
                            https://dummyimage.com/600x400 600w"
                            sizes="
                            (min-width: 800px) 400px,
                            (min-width: 1350px) 600px,
                            300px
                            "
                            >
                        </div>
                        <div>
                            <img
                            src="https://dummyimage.com/300x300" width="300" height="200" alt="" title=""
                            srcset="
                            https://dummyimage.com/300x300 300w,
                            https://dummyimage.com/400x400 400w,
                            https://dummyimage.com/600x400 600w"
                            sizes="
                            (min-width: 800px) 400px,
                            (min-width: 1350px) 600px,
                            300px
                            "
                            >
                        </div>
                    </div>
                </article> 


            </main>
            <!-- como el footer no es fixed, lo meto también dentro del smoother -->
            <?php include './php/includes/_footer.php'?> 
        </div>
    </div>    

</body>
</html>

<!-- Incluimos los scripts para que afecten a todas las páginas (siempre que sea necesario en todas las páginas, sino lo hacemos en cada vista) -->
<script src="./node_modules/gsap/dist/gsap.js"></script>
<script src="./node_modules/gsap/dist/ScrollSmoother.js"></script>
<script src="./node_modules/gsap/dist/ScrollTrigger.js"></script>
<script src="./assets/js/script.min.js"></script>



