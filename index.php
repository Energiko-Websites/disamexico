<!DOCTYPE html>
<html lang="es">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77527101-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77527101-4');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Comercialización, importación y distribución de productos dirigidos al Sector Ferretero a la Industria y la Construcción, con el pleno objetivo de generar soluciones con productos para el disfrute del hogar o la industria. 
Contando con una cobertura a nivel Nacional y gran red de Centros de distribución, tiendas y distribuidores autorizados en todo el País, con el firme propósito de Hacer de tu hogar el mejor espacio para compartir.">
    <meta name="keywords" content="DISA Distribución ingusa disa confort teléfono domicilio sucursales tiendas tienda contacto correo email promociones productos marcas guadalajara méxico master flows lightshock TecnoVent mytek ventiladores aire acondicionado bombas cisternas tanques de carburación cilindros">
    <meta name="author" content="Disa México">

    <title>Disa México</title>

    <?php include 'header.php';?>

    <style>
        .contenedor {
            height: 50%;
            display: table;
            width: 100%;
            margin-top: -50px;
            padding: 50px 0 0 0;
            /*set left/right padding according to needs*/
            box-sizing: border-box;
        }

        .panel {
            margin: auto;
            height: 415px;
        }

        .fila {
            height: 100%;
            display: table-row;
        }

        .col1 {
            background: #d3d3d3;
            padding: 50px;
        }

        .col2 {
            background: #f3f3f3;
            padding: 50px;
        }

        .fila .no-float {
            display: table-cell;
            float: none;
        }

        .fecha {
            background: #C20D19;
            min-width: 80px;
            position: absolute;
            margin-top: 10px;
            font-size: 24px;
            line-height: 42px;
            text-align: center;
            font-weight: 800;
            color: #FFF;
            box-shadow: 2px 2px 2px rgba(120, 120, 120, .5);
            padding: 0 10px;
            z-index: 999;
        }
        .lead {
            margin-bottom: 10px;
        }

        .nuevo {
            position: absolute;
            top: -7px;
            left: -7px;
            width: 160px;
        }

        .banner1 {
            display: none;
        }

        .banner2 {
            display: none;
        }

        .border {
            border: #e3e3e3 1px solid;
        }

        .slide-01 {
            background:#333 url(img/sliders/slide-1-sm.jpg) no-repeat;
        }
        
        .slide-02 {
            background:#333 url(img/sliders/slide-2-sm.jpg) no-repeat;
        }
        
        .slide-03 {
            background:#333 url(img/sliders/slide-3-sm.jpg) no-repeat;
        }
        
        .slide-04 {
            background:#333 url(img/sliders/slide-4-sm.jpg) no-repeat;
        }
    .etiqueta-nuevo {
        position: absolute;
    }
        /*---- RESPONSIVE STYLES ----*/
        
        /* Más de 500px */
        @media (min-width: 500px) {
            .banner3 {
                display: none;
            }
            .banner2 {
                display: block;
            }
        }

        /* Más de 920px */
        @media (min-width: 920px) {
            .banner2 {
                display: none;
            }
            .banner1 {
                display: block;
            }
        }
        
        /* Más de 768px */
        @media (min-width: 768px){
           .slide-01 {
            background:#666 url(img/sliders/slide-1.jpg) no-repeat;
            }
            .slide-02 {
                background:#333 url(img/sliders/slide-2.jpg) no-repeat;
            }

            .slide-03 {
                background:#333 url(img/sliders/slide-3.jpg) no-repeat;
            }

            .slide-04 {
                background:#333 url(img/sliders/slide-4.jpg) no-repeat;
            }
            
        }

        /* Menos de 768px */
        @media (max-width: 768px) {
            .panel {
                margin: auto;
                height: 100%;
                max-width: 480px;
            }
            .img-portfolio{
                max-width:450px;
            margin: auto;}
        }

        /* Menos de 990px */
        @media (max-width: 990px) {
            .mb1 {
                margin-bottom: 10px;
            }
            .mb2 {
                margin-bottom: 20px;
            }
            .col1,
            .col2 {
                padding: 30px;
            }
            .fila .no-float {
                display: inherit;
                float: left;
                width: 100%;
            }
        }

        /* Menos de 1200px */
        @media (min-width: 1200px) {
            .lead {
                font-size: 21px;
            }
        }

        /* imghvr-slide-*
   ----------------------------- */

        [class^='imghvr-slide-']:hover figcaption,
        [class*=' imghvr-slide-']:hover figcaption {
            -webkit-transform: translate(0, 50%);
            -moz-transform: translate(0, 50%);
            -ms-transform: translate(0, 50%);
            -o-transform: translate(0, 50%);
            transform: translate(0, 50%);
        }

        /* imghvr-slide-up
   ----------------------------- */

        .imghvr-slide-up figcaption {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }

        [class^='imghvr-slide2-']:hover figcaption,
        [class*=' imghvr-slide2-']:hover figcaption {
            -webkit-transform: translate(0, 85%);
            -moz-transform: translate(0, 85%);
            -ms-transform: translate(0, 85%);
            -o-transform: translate(0, 85%);
            transform: translate(0, 85%);
        }

        /* imghvr-slide-up
   ----------------------------- */

        .imghvr-slide2-up figcaption {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
    </style>
</head>

<body>

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <?php include 'navbar.php';?>


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill slide-01"></div>
                <div class="carousel-caption">
                    <div class="caption1 animated bounceInLeft"><span class="box-red">Haz de tu hogar</span></div>
                    <h2 class="caption2 animated bounceInRight">un espacio para compartir</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill slide-02"></div>
                <div class="carousel-caption">
                    <div class="caption1 animated bounceInLeft"><span class="box-red">Haz que tu trabajo</span></div>
                    <h2 class="caption2 animated bounceInRight">sea fácil y de calidad</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill slide-03"></div>
                <div class="carousel-caption">
                    <div class="caption1 animated bounceInLeft"><span class="box-red">Haz que tu vida</span></div>
                    <h2 class="caption2 animated bounceInRight">sea más cómoda</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill slide-04"></div>
                <div class="carousel-caption">
                    <div class="caption1 animated bounceInLeft"><span class="box-red">Haz que tus tareas</span></div>
                    <h2 class="caption2 animated bounceInRight">sean más prácticas</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Content 
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#e30614;">
                    Bienvenidos a DISA México
                </h1>
            </div>
        </div>-->

    <!-- Page Content -->
    <div class="container">
        <br><br>
        <div class="col-lg-12">
            <h1 class="page-header" style="color:#e30614;" data-aos="fade-left">
                Bienvenidos a DISA México
            </h1>
        </div>

        <!-- Iconos -->
        <div class="row products-icons">
            <div class="col-lg-12 text-center">
                <a href="01-calentadores-de-agua.php">
                    <img src="img/icons/calentadores-de-agua.png" alt="Calentadores de agua" data-aos="fade" data-aos-delay="0">
                </a>
                <a href="02-productos-para-uso-de-gas.php">
                    <img src="img/icons/productos-para-gas.png" alt="Productos para uso de gas" data-aos="fade" data-aos-delay="50">
                </a>
                <a href="03-productos-para-uso-de-agua.php">
                    <img src="img/icons/productos-para-agua.png" alt="Productos para agua" data-aos="fade" data-aos-delay="100">
                </a>
                <a href="04-conduccion-de-fluidos.php">
                    <img src="img/icons/conduccion-de-fluidos.png" alt="Conducción de fluidos" data-aos="fade" data-aos-delay="150">
                </a>
                <a href="05-confort-de-clima.php">
                    <img src="img/icons/confort-de-clima.png" alt="Confort de clima" data-aos="fade" data-aos-delay="200">
                </a>
                <a href="06-productos-para-el-hogar.php">
                    <img src="img/icons/productos-para-hogar.png" alt="Productos para el hogar" data-aos="fade" data-aos-delay="250">
                </a>
                <!--<a href="07-electricidad-e-iluminacion.php">
                    <img src="img/icons/electricidad-e-iluminacion.png" alt="Electricidad e iluminación" data-aos="fade" data-aos-delay="300">
                </a>-->
                <a href="08-productos-ferreteros.php">
                    <img src="img/icons/productos-ferreteros.png" alt="Productos ferreteros" data-aos="fade" data-aos-delay="350">
                </a>
                <a href="09-mercadeo.php">
                    <img src="img/icons/mercadeo.png" alt="Mercadeo" data-aos="fade" data-aos-delay="400">
                </a>
            </div>
        </div>
        <br>
        <!-- Secciones -->
        <div class="row">
            <div class="col-md-4 col-sm-4 img-portfolio" data-aos="fade-up">
                <h3 class="page-header text-center" style="color: #C10F1D;">Productos</h3>
                <a href="productos.php">
                    <figure class="imghvr-slide-up"><img src="img/catalogo-de-productos.png" alt="Catálogo de productos Disa México" class="border">
                        <figcaption style="background-color: #C10F1D;">
                            <p class="lead"><small>Consulta información acerca de nuestros productos y descarga nuestro catálogo.</small></p>
                        </figcaption>

                    </figure>

                </a>
            </div>

            <div class="col-md-4 col-sm-4 img-portfolio" data-aos="fade-up" data-aos-delay="100">
                <h3 class="page-header text-center" style="color:#C10F1D;">Videos Disa</h3>
                <a href="videos.php">
                    <figure class="imghvr-slide-up"><img src="img/canal-disa.png" alt="Centros de distribución Disa México" class="border">
                        <figcaption style="background-color: #C10F1D; margin-top:0px;">
                            <p class="lead"><small>Conoce las características y funcionamiento de nuestros productos.</small></p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="col-md-4 col-sm-4 img-portfolio" data-aos="fade-up" data-aos-delay="200">
                <h3 class="page-header text-center" style="color: #C10F1D;">Marcas Disa</h3>
                <a href="marcas-disa.php">
                    <figure class="imghvr-slide-up"><img src="img/productos-destacados.png" class="border" alt="Nuevos productos destacados Disa México">
                        <figcaption style="background-color: #C10F1D;">
                            <p class="lead"><small>Descubre los productos que nuestras marcas exclusivas tienen para ti.</small></p>
                        </figcaption>
                    </figure>
                </a>
            </div>

        </div>
        
        <!-- Enlaces rápidos -->
        <div class="row">
            
            <div class="col-md-6 col-sm-6 img-portfolio" data-aos="fade-left">
                <a href="http://www.disamexico.com.mx/portalclientes/" target="_blank">
                    <figure class="imghvr-slide2-up" style="overflow:hidden;">
                        <img src="img/banner-portal-disa-connect-tablet.jpg" alt="Portal Disa Connect" class="banner1 img-responsive">
                        <img src="img/banner-portal-disa-connect-tablet.jpg" alt="Portal Disa Connect" class="banner2 img-responsive">
                        <img src="img/banner-portal-disa-connect-movil.jpg" alt="Portal Disa Connect" class="banner3 img-responsive">
                        <figcaption>
                            <h4>www.disamexico.com.mx/portalclientes</h4>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 img-portfolio" data-aos="fade-right">
                <a href="tienda/index.php">
                    <figure class="imghvr-slide2-up" style="overflow:hidden;">
                        <img src="img/banner-tienda-en-linea.jpg" alt="Tienda en línea Disa" class="img-responsive">
                        <!--<figcaption style="background:black;">
                            <h4 style="margin:0px;">Compra nuestros productos en línea</h4>
                        </figcaption>-->
                    </figure>
                </a>
            </div>
                       
<!--            <div class="col-md-4 img-portfolio" data-aos="fade-right">
                <a href="tiendas-en-linea.php">
                    <figure class="imghvr-slide2-up" style="overflow:hidden;">
                        <img src="img/nuevo.png" alt="Nuevo Portal Disa Connect" class="nuevo">
                        <img src="img/eventos/gracias-por-visitarnos-expo-nacional-ferretera-2018-md.jpg" alt="Portal Disa Logistics" class="banner1 img-responsive">

                    </figure>
                </a>
            </div>-->

        </div>
        
        <!--Banner Promocional -->
        <div class="row">
            <div class="col-lg-12 aos-init aos-animate" data-aos="fade">
                <a href="nuevos-lanzamientos.php#confortClima">
                   <picture >
                      <source srcset="img/banners/Banner-Web-Ventiladores-Tecnovent.jpg" media="(max-width: 500px)" >
                      <source srcset="img/banners/Banner-Web-Ventiladores-Tecnovent.jpg">
                      <img src="img/banners/Banner-Web-Ventiladores-Tecnovent.jpg" alt="Nuevos Ventiladores TecnoVent Disa México" style="width:auto; margin-bottom:20px;" class="img-responsive img-hover" data-aos="fade">
                    </picture>
                </a>
            </div>
        </div>

        <!-- Banners Gasytanq y Catálogo-->
        <div class="row">
            <div class="col-md-6 mb2" data-aos="fade-right">
                <a href="02-gasytanq.php">
                 <img src="img/banners/Banner-GasyTanq.jpg" class="img-responsive img-hover" alt="Tanques estacionarios y cilindros GasyTanq">
                </a>

            </div>
            <div class="col-md-6 mb1" data-aos="fade-left">
                <a href="nuevos-lanzamientos.php#confortClima">
                 <img src="img/banners/banner-distribuidor-ventiladores-hunter-en-mexico.jpg" class="img-responsive img-hover" alt="Distribuidor exclusivo de ventiladores Hunter en México">
                </a>
            </div>
        </div>
      
    </div>
    <br>

    <!-- Nuevos, Noticias & Redes -->
    <div class="container-fluid" style="padding:25px 0; background: #f3f3f3;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6 mb2" data-aos="fade-up" data-aos-delay="0">
                    <a href="nuevos-lanzamientos.php"><h3 class="page-header text-center">Nuevos Productos</h3></a>
                    <div class="panel">
                        <!--<div class="etiqueta-nuevo"><img src="img/etiqueta-nuevo.png" alt="Producto Nuevo" /> </div>-->
                        <a href="nuevos-lanzamientos.php#confortClima" >
                        <p class="fecha">Destacado</p>
                        
                        <!--<img src="marcas/img/nuevo/parrillas-electricas-empotrables-disa-home.jpg" class="img-fluid" alt="parrillas electricas empotrables disa home"/>-->
                           
                            <div class="cycle-slideshow" data-cycle-speed="200" data-cycle-timeout="4000">
                                <img src="marcas/img/nuevo/nuevos-ventiladores-tecnovent-18-y-20-pulgadas.jpg" class="img-responsive" alt="Ventilador de Pedestal TecnoVent de 18 y 20 Pulgadas"/>
                                <img src="marcas/img/nuevo/nuevos-ventiladores-tecnovent-2-en-1.jpg" class="img-responsive" alt="Ventilador de Pedestal TecnoVent 20 Pulgadas 2 en 1"/>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb2" data-aos="fade-up" data-aos-delay="100">
                   <a href="https://www.facebook.com/DISAsadecv/" target="_blank"> <h3 class="page-header text-center">Eventos</h3></a>
                    <div class="panel">
                        <!--<p class="fecha">OCT</p>-->
                        <img alt="noticias disa" class="img-responsive" src="img/banner-national-hardware-show.jpg" style="margin:0px; padding:0px;">

                        <div class="panel-body">
                            <p class="lead"><a href="#">Disa en NHS Las Vegas</a></p>
                            <p>El pasado mes de mayo (del 8 al 10), DISA México participó como expositor en la <a href="http://www.nationalhardwareshow.com/en/Exhibitors/4051739/Disa" target="_blank">National Hardware Show</a> con sede en la Ciudad de las Vegas, Nevada (E.U.); exposición que reúne a las más importantes empresas de la industria ferretera.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="https://www.facebook.com/DISAsadecv/" target="_blank"><h3 class="page-header text-center">Redes Sociales</h3></a>
                    <div class="panel">
                        <div class="fb-page" data-href="https://www.facebook.com/DISAsadecv/" data-tabs="timeline" data-width="500" data-height="415" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/DISAsadecv/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DISAsadecv/">DISA</a></blockquote>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    z</div>


    <?php include 'footer.php';?>


    <!-- Script to Activate the Main Slider -->
    <script>
        $('.carousel').carousel({
            interval: 5000, //changes the speed
            pause: "false"
        })
    </script>

    <!-- AOS Scrolling -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out',
        });
    </script>

</body>

</html>