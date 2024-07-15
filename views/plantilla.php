    <?php

        ob_start(); // Iniciar el buffer de salida

        /*=============================================
        =            Ruta del proyecto          =
        =============================================*/

        $url = Ruta::ctrRuta();

    ?>

    <!doctype html>

    <head>

        <!-- Aquí va todo el codigo para el header de la plantilla del sitio web (tittle, metas, links css, fonts, nav ico, etc...)-->

        <meta charset="UTF-8">

        <title>Río Secreto Medios | Descubre y descarga nuestro contenido</title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <meta name="description" content="Sitio Oficial de descarga de imágenes, videos y contenido de Río Secreto Reserva Natural ubicada en Playa del Carmen."/>

        <!--Verificación de Google-->
        <meta name="google-site-verification" content="qkzu6HOUA572iPBGS31JzCH3kBbA_KOj4JkWHAkpZJM" />
        <meta name="theme-color" content="#0C6295" />
        <!-- Termina verificación de Google-->
        
        <link rel="shortcut icon" href="<?php echo $url?>views/img/default/Favicon-01.png"/>

        <link rel="stylesheet" href="<?php echo $url?>views/css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

        <link rel="stylesheet" href="<?php echo $url?>views/css/style.css">

        <link rel="stylesheet" href="<?php echo $url?>views/css/custom.css">

        <link rel="stylesheet" href="<?php echo $url?>views/css/galeria.css">

        <!-- **Font Awesome** -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />
        
        <!-- Galeria -->
        <link rel="stylesheet" href="<?php echo $url?>views/galeria/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo $url?>views/galeria/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $url?>views/galeria/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo $url?>views/galeria/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo $url?>views/galeria/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo $url?>views/galeria/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?php echo $url?>views/galeria/css/style.css">
        <link rel="stylesheet" href="<?php echo $url?>views/galeria/css/responsive.css">
        <link rel="stylesheet" href="<?php echo $url?>views/galeria/scss/_predefine.scss">

        <!-- Ejemplo: Colocar la variable de la ruta del proyecto ($url) en el href en todos los links para convertir en dinámicas todos los recursos a usar
        <link href="<?php echo $url?>views/css/style.css" rel="stylesheet"/> -->
        
    </head>

    <body>


    <!-- Colocar el siguiente codigo dinámico entre el/los divs principales del body en la maquetación del sitio web -->
    <!-- Inicio de divs-->
        
            
            <?php

                /*=============================================
                =            NAV          =
                =============================================*/

                include "modulos/default/NavHeader.php"; // Ruta del archivo

                    /*==============================================
                    =             Contenido dinamico                =
                    ==============================================*/

                    // Código condicional para mostrar las páginas en localhost
                    
                    $rutas = array();
                    $ruta = null;
                    $infoPropiedad = null;

                    // echo $_GET["ruta"]; // Verificar el valor de $_GET["ruta"]

                    if(isset($_GET["ruta"])){

                        // echo "El bloque if se está ejecutando.";
                        
                        $rutas = explode("/", $_GET["ruta"]);

                        $item = "ruta";
                        $valor = $rutas[0];

                            /*==============================================
                            =       URL´s Amigables de paginas        =
                            ==============================================*/

                            $rutaPaginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);                        

                            if (is_array($rutaPaginas) && $rutas[0] == $rutaPaginas["ruta"]) {

                                $ruta = $rutas[0];
                                
                            }
                            
                            /*==============================================
                            =  Lista blanca de  URL´s Amigables (Páginas que se muestran) =
                            ==============================================*/

                            switch ($ruta) {

                                //Casos con respecto a la cantidad de páginas que habrá en el sitio web

                                case 'index':
                                    include "modulos/index.php"; // Ruta del archivo de la página
                                    break;

                                case 'eng':
                                    include "modulos/ingles.php"; // Ruta del archivo de la página
                                    break;

                                case 'eng':
                                    include "modulos/ingles.php"; // Ruta del archivo de la página
                                    break;

                                case 'agregar-noticia':
                                    include "modulos/default/agregarnoticia.php"; // Ruta del archivo de la página
                                    break;

                                case 'editar-noticia':
                                    include "modulos/default/editarnoticia.php"; // Asegúrate de tener un archivo editarnoticia.php en la ubicación correcta
                                    break;
                                
                                // Página de error 404   
                                default:
                                    include "modulos/default/error404.php"; // Ruta del archivo
                                    break;

                            }                   

                    } else {

                        // echo "El bloque else se está ejecutando.";

                        // Página index o home por defecto del sitio web

                        if ($_SERVER["REQUEST_URI"] === "/imagenriosecreto/") {

                            $ruta = "index";
                            include "modulos/index.php";

                        } else {

                            include "modulos/default/error404.php";

                        }

                    }

                    // Código condicional para mostrar las páginas en localhost del servidor GoDaddy

                    /* $rutas = array();
                    $ruta = null;
                    $infoPropiedad = null;
                    
                    if (isset($_GET["ruta"])) {
                    
                        $rutas = explode("/", $_GET["ruta"]);
                    
                        $item = "ruta";
                        $valor = $rutas[0];
                    
                        /*==============================================
                        =       URL´s Amigables de paginas        =
                        ==============================================*/
                    
                        /* $rutaPaginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);
                    
                        if (is_array($rutaPaginas) && $rutas[0] == $rutaPaginas["ruta"]) {
                            $ruta = $rutas[0];
                        } */
                    
                        /*==============================================
                        =  Lista blanca de  URL´s Amigables (Páginas que se muestran) =
                        ==============================================*/
                    
                        /* switch ($ruta) {
                    
                            // Casos con respecto a la cantidad de páginas que habrá en el sitio web
                    
                            case 'index':
                                include "modulos/index.php"; // Ruta del archivo de la página
                                break;
                    
                            case 'eng':
                                include "modulos/ingles.php"; // Ruta del archivo de la página
                                break;
                    
                            // Página de error 404   
                            default:
                                include "modulos/default/error404.php"; // Ruta del archivo
                                break;
                    
                        }
                    
                    } else {
                    
                        if (empty($_GET["ruta"]) || $_GET["ruta"] === "index") {

                            // Página index o home por defecto del sitio web
                            include "modulos/index.php";

                        } else {

                            // Resto del código para manejar las rutas y páginas
                            // ...

                        }

                    } */

                /*=============================================
                =            Burbuja de promociones          =
                =============================================*/

                include "modulos/default/news_popup.php"; // Ruta del archivo

                /*=============================================
                =            Footer          =
                =============================================*/

                include "modulos/default/footer.php"; // Ruta del archivo

                ob_end_flush(); // Enviar el contenido del buffer y deshabilitar el buffer de salida

            ?>

        

    <!-- Cierre de los divs principales del body -->
    
    <!-- Colocación de todos los archivos/plugins de JS o JQuery -->

    <script src="<?php echo $url?>views/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $url?>views/js/popper.min.js"></script>
    <script src="<?php echo $url?>views/js/bootstrap.min.js"></script>
    <script src="<?php echo $url?>views/js/script.js"></script>
    <script src="<?php echo $url?>views/js/menu.js"></script>
    <script src="<?php echo $url?>views/js/galeria.js"></script>
    <script src="<?php echo $url?>views/js/backtotop.js"></script>
    <script src="<?php echo $url?>views/js/mostrarFotos.js"></script>
    <script src="<?php echo $url?>views/js/embebedYouTube.js"></script>
    <script src="<?php echo $url?>views/js/news_popup.js"></script>

    <!-- Galeria -->
    <script src="<?php echo $url?>views/galeria/js/stellar.js"></script>
    <script src="<?php echo $url?>views/galeria/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="<?php echo $url?>views/galeria/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo $url?>views/galeria/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $url?>views/galeria/vendors/isotope/isotope-min.js"></script>
    <script src="<?php echo $url?>views/galeria/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo $url?>views/galeria/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo $url?>views/galeria/js/mail-script.js"></script>
    <script src="<?php echo $url?>views/galeria/js/theme.js"></script>

    <!-- Ejemplo: Colocar la variable de la ruta del proyecto ($url) en el href en todos los links para convertir en dinámicas todos los recursos a usar
    <script src="<?php echo $url?>views/js/jquery-1.11.2.min.js"></script> -->

    </body>

    </html>