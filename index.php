<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['btn-suscripcion'])) {

            $suscribe = $_POST ["form-suscribe"];
            $notificaciones = "";

        if ($suscribe == "") {
                $notificaciones = "Hubo un error en la carga de tu email. Prueba de nueva.";
            } else { 
            if(!filter_var($suscribe, FILTER_VALIDATE_EMAIL)) {                
                $notificaciones = "El email ingresado no es valido";
                    } else {
                        $email_to = 'guillef33@gmail.com';
                        $email_subject = 'Mensaje enviado desde index.php';
                        $email_from = 'guillef33@gmail.com';
                        $email_message = '<b>Nuevo cliente que se quiere inscribir: </b>' . $suscribe;

                        $headers = 'From: '.$email_from."\r\n".
                            'Reply-To: '.$email_from."\r\n" .
                            'Content-Type: text/html; charset=utf-8\r\n'.
                            'X-Mailer: PHP/' . phpversion();

                        if (mail($email_to, $email_subject, $email_message, $headers)) {
                            $notificaciones = "Mensaje enviado";
                        } else {
                            $notificaciones = "Ha ocurrido un error, no se ha podido enviar el mensaje";

                        }

                    }
            }
        }
    }

        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guillermo Flores - Desarrollos Web y Marketing Portfolio</title>

    <!-- Estilos Personalizados -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu.css">

     <!-- Favicon -->
     <link rel="icon" type="image/png" href="images/gf.jpg">

    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com">    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5PLQTHL');</script>
    <!-- End Google Tag Manager -->

</head>
<body>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PLQTHL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Menu Desktop -->

    <header>
        <!-- Main Top Menu -->
            <nav>
              <div id="navbar">
                <div id="logo">
                    <div class="logo">
                    <!--    <h2 class="menuTitle"><a href="index.html">GF</a></h2>  -->
                    <a href="index.php"><img src="images/gf100px.jpg" alt=""> </a>
                    </div>
                 </div>

                 <div id="links">
                    <a href="about.html">About</a>
                    <a href="portfolio.html">Portfolio</a>
                    <a href="contenidos.html">Content</a>
                    <a href="desarrollo.php">Development</a>
                  </div>

                  <div id="cta">
                    <a href="contacto.php" id="boton">Hablamos</a>
                  </div>
          
                  <div class="mobile-btn">
                    <a id="menu-btn" onclick="myFunction()" class="fa fa-bars fa-2x"></a>
                  </div>
          
              </div>
            </nav>
        
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu">
              <ul class="mobile-links">
                <li class="nav-list"><a href="about.html">About</a></li>
                <li class="nav-list"><a href="portfolio.html">Portfolio</a></li>
                <li class="nav-list"><a href="contenidos.html">Contenidos</a></li>
                <li class="nav-list"><a href="desarrollo.html">Desarrollo</a></li>
                <li class="nav-list"><a href="contacto.html">Contact Us</a></li>
              </ul>
            </div>
        </header>

    <!-- END Menu Desktop -->

    <main>

    <!-- START  WhatsApp Icon -->

    <a href="https://api.whatsapp.com/send?phone=541167062068&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20servicios%20." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float" aria-hidden="true"></i>
    </a>   
    
    <!-- END  WhatsApp Icon -->

    <!-- START  Hero Section -->
    
    <section id="heroSection">

        <div class="grid">

            <div class="textos-hero">
                <h1 class="weight-600">Soy el IT  Project Manager <span class="weight-400"> que tu proyecto necesita</span></h1>
                <p class="parrafo">¡Hola! Soy especialista en desarrollos en WordPress y frontend con Bootstrap, HTML, CSS y JavaScript. Tengo gran experiencia en creación de plataformas, sitios de ecommerce, landing pages, newsletters. Por haber trabajado en comunicación y marketing digital me interesa mucho la UX, UI, navegabilidad, optimización, SEO y CRO.</p>
                <a href="" class="ctaBtn" id="contactoBtn">Hablamos</a>
            </div>
            <div class="img-hero">
                <img src="images/black/coffe.jpg" alt="Project Manager Illustration from FreePick" class="img">
            </div>
             
        </div>
    </section>

    <!-- END Header Hero Home -->

    <!-- START Cards SobreMi Section -->

     <section id="cardSobreMi">     
            <div class="grid">
                <div class="items">
                    <div class="item">
                        <div class="bigNumber">+10</div>
                        <h3 class="titulo-services"> Anos de Experiencia                     . 
                        </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>

                    <div class="item">
                        <div class="bigNumber">+100</div>
                        <h3 class="titulo-services">Sitios webs realizados
                        </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>

                    <div class="item">
                        <div class="bigNumber">+50</div>
                        <h3 class="titulo-services">Clientes satisfechos</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>
                   
                </div>
                 
            </div>

        </section>

    <!-- END cardsSobreMi Section -->

    <!-- START aboutUs Sectkion -->

   <section id="aboutUs">
        <div class="grid">
            <div class="textos-about-us">
                <h2 class="subtitulo">Sobre mi</h2>
                <p class="parrafo">Licenciado de comunicacion, espcialista en marketing, editor de libros, emprendedor digital, bloguero, estudiante de la tecnitura de analista en sistemas, musico, escritor. Todo esto soy.</p>
            </div>

            <div class="textos-about-us stack">
                <h2 class="subtitulo">Stack Tecnologico</h2>
            </div>
            
            <div class="stack">
                    <div class="footer-item1">
                        <a href =""><i class="fab fa-wordpress"></i></a>
                    </div>
                    <div class="footer-item2">
                        <a href=""><i class="fab fa-html5"></i></a>
                    </div>
                    <div class="footer-item3">
                        <a href=""><i class="fab fa-github"></i></a>
                    </div>
                    <div class="footer-item4">
                        <a href=""><i class="fab fa-js-square"></i></a>
                    </div>
                    <div class="footer-item1">
                        <a href =""><i class="fab fa-css3-alt"></i></a>
                    </div>
                    <div class="footer-item2">
                        <a href=""><i class="fab fa-bootstrap"></i></a>
                    </div>
                    <div class="footer-item3">
                        <a href=""><i class="fab fa-php"></i></a>
                    </div>
                    <div class="footer-item4">
                        <a href=""><i class="fab fa-react"></i></a>
                    </div>
            </div>
            
        </div>

        </section>

       <!-- END aboutUs Section -->

        <!-- START businessArea Section -->

        <section id="businessAreaHeader" >
            <div class="grid">
                <div class="textosSectionHome">
                    <h2 class="subtitulo">3 areas de negocios</h2>
                    <p class="parrafo">Soy especialista en desarrollos en WordPress y frontend con Bootstrap, HTML, CSS y JavaScript. Tengo gran experiencia en creación de plataformas, sitios de ecommerce, landing pages, newsletters. Por haber trabajado en comunicación y marketing digital me interesa mucho la UX, UI, navegabilidad, optimización, SEO y CRO.</p>
                </div>
            </div>
        </section>

        <!-- END businessAreaHeader Section -->

        <!-- START Mission Section -->


<section id="mission">
    <div class="grid">
         <div class="textos-mission">
                <div class="texto-mission">
                    <h3>Web Development</h3>
                    <p class="parrafo">Las soft skills son que garantizar el buen funcionamiento de los equipos.</p>                </div>
            <div class="texto-mission">
                    <h3>Project Managment</h3>
                    <p class="parrafo">Tengo perfil tech. Desde que comence en marketing siempre me volque a lo tecnico. Luego me especialice en front end y WordPress. Ahora estoy estudiando la tecnicatura de Analista en Sistemas</p>
            </div>
            <div class="texto-mission">
                    <h3>Contenidos</h3>
                    <p class="parrafo">Vengo de marketing y trabaje durante el ultimo ano en la generacion de oportunidades comerciales y un plan de crecimiento del negocio para Connaxis, que paso de ser una agencia de marketing digital a convertirse en un proveedor de talento digital y desarrollo web para empresas</p>
            </div>
        </div>
               <div class="img-mission">
                    <img src="images/black/mac.jpg" alt="Social Ideas Free Illustration" class="img">
                </div>
    </div>
</section>

        <!-- END Mission Section -->
        <!-- START CTA Section -->

        <section id="ctaSection">
            <div class="grid">
                <div class="cta-row">
                    <h2 class="subtituloCta">Preparado para comenzar</h2>
                    <p class="parrafo">Dejame tus datos y suscribite al news.</p>
                </div>  
                <div class="cta-row2">
                    <form class="simple-form" action="index.php" method="POST">
                    <input type="email" id="inputSuscribe" class="form-control" name="form-suscribe" placeholder="Ingrese su email para suscribirse">
                    <button id="butonCTA" name="btn-suscripcion">Suscribirme</button>
                    </form>
                </div> 
            </div> 
        </section>
        
        <!-- START PORTFOLIO Section -->

        <section id="portfolio">
            <div class="grid">
                <div class="textosSectionHome">
                    <h2 class="subtitulo">Conoce mis trabajos</h2>
                    <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe placeat iusto, numquam consectetur enim commodi laborum unde repellendus eaque, beatae laudantium veritatis sed excepturi ipsa aspernatur quia quo animi inventore.</p>
                </div>
            </div>

            <div class="grid" id="home">
                <div class="items">
            
                    <div class="item">                    
                        <div>
                        <img src="images/mosaic2.png" alt="">
                        <h3 class="titulo-services">Mosaic The Movement                     . 
                        </h3>
                        <p>Event Site for an non profit company in Miami (US). Build in WorPress and WooCommerce</p>
                        </div>                     
                    </div>

                    <div class="item">
                       <!--<i class="far fa-lightbulb"></i> --> 
                       <img src="images/MareFish2.png" alt="">
                        <h3 class="titulo-services">MareFish
                        </h3>
                        <p>Ecommerce site for the fishing company in Madrid. WooCommerce e integracion con RedSys</p>
                    </div>

                    <div class="item">
                       <!--<i class="far fa-lightbulb"></i> --> 
                       <img src="images/rollandbodega200x100.png" alt="">
                        <h3 class="titulo-services">Bodega Rolland
                        </h3>
                        <p>Ecommerce from the wine boutique cellar from Michael Rolland. WordPress + WooCommerce</p>
                    </div>                 
                </div>             
            </div>

            <div class="btnBlack">
                <a href="" class="ctaBtn" id="contactoBtnCenter">Ver mas trabajos</a>
           </div>

        </section>

        <!-- END PORTFOLIO Section -->

    </main>

<footer>
    <div class="grid">
        <div class="textos-footer">
            <h2 class="subtitulo">Contactame</h2>
        </div>
<!-- <div class="footer-items">  -->
        <div class="footer-item1">
            <a href ="https://github.com/Guillef33"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com/guillef33"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/guillef33/"><i class="fab fa-linkedin"></i></a>
        </div>
<!-- </div> -->
        <div class="textos-footer">
            <p class="parrafo">Este sitio fue creado con CSS Grid. 2021 Buenos Aires, Argentina.</p>
        </div>

    </div>
</footer>






<script src="js/mobileBtn.js"></script>

    
    
</body>
</html>