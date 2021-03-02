<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['botonContacto'])) {

            $firstName = $_POST ["form-firstName"]; 
            $lastName = $_POST ["form-lastName"];
            $company = $_POST ["form-company"];
            $city = $_POST ["form-city"];
            $email = $_POST ["form-email"];
            $mensaje = $_POST ["form-mensaje"];
            $notificaciones = "";

        if ($firstName == "" || $lastName == "" ||  $company == "" || $city == "" || $email == "" || $mensaje == "") {
                $notificaciones = "Error. Completar todos los campos";
            } else {
            if(strlen($mensaje) < 10) {
                $notificaciones = "Por favor, ingrese una consulta mas amplia";
                    } else {
                        $email_to = 'guillef33@gmail.com';
                        $email_subject = 'Mensaje enviado desde el formulario web';
                        $email_from = 'guillef33@gmail.com';
                        $email_message = '<b>Detalles del formulario de contacto:.<b><br><br>' ;

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
    <title>Desarrollos Web y Mobile a medida</title>

    <!-- Estilos Personalizados -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu.css">

     <!-- Favicon -->
     <link rel="icon" type="image/png" href="images/gf.jpg">

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

    <header>
        <!-- Main Top Menu -->
            <nav>
              <div id="navbar">
                <div id="logo">
                    <div class="logo">
                        <a href="index.php"><img src="images/gf100px.jpg" alt=""> </a>
                        <!-- <h2 class="menuTitle"><a href="index.html">GF</a></h2>-->
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

        <!-- START  WhatsApp Icon -->

        <a href="https://api.whatsapp.com/send?phone=541167062068&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20servicios%20." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float" aria-hidden="true"></i>
            </a>   
                 
         <!-- END  WhatsApp Icon -->

    <main>

    <section id="heroSection">

        <div class="grid">
            <div class="textos-hero">
                <h1 class="weight-600">Buscas un equipo que resuelva<span class="weight-400"> tu idea de desarrollo web?</span></h1>
                <p class="parrafo">Formmamos squads para proyectos desafiantes y originales. </p>
                <a href="" class="ctaBtn" id="contactoBtn">Hablamos</a>
            </div>
            <div class="img-hero">
                <img src="images/black/developmentHero.jpg" alt="Undraw Tourist Map Free Illustration" class="img">
            </div>        
        </div>
    </section>


        <section id="servicesDev">
            <div class="gridDev">
                <div class="itemsDev">

                    <div class="itemDev">
                        <i class="fab fa-php"></i>
                        <h3 class="titulo-services">PHP                     . 
                        </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>

                    <div class="itemDev">
                        <i class="fab fa-wordpress"></i>
                        <h3 class="titulo-services">WordPress
                        </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>

                    <div class="itemDev">
                        <i class="fab fa-laravel"></i>
                        <h3 class="titulo-services">Laravel
                        </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>
                </div>
                
                <div class="itemsDev">

                    <div class="itemDev">
                        <i class="fab fa-react"></i>
                        <h3 class="titulo-services">React                     . 
                        </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>

                    <div class="itemDev">
                        <i class="fab fa-js"></i>
                        <h3 class="titulo-services">Javascript
                        </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>

                    <div class="itemDev">
                        <i class="fas fa-calendar-check"></i>
                        <h3 class="titulo-services">API Integration
                        </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>

                </div>
                        
            </div>
        </section>

    <section id="mission">
        <div class="grid">
            <div class="textosContacto">
                <h2 class="weight-600">Escribinos y contanos tu proyecto</h2>
                <p>Formmamos squads para proyectos desafiantes y originales. </p>
            </div>
            <div class="form">
            <form class="simple-form" action="desarrollo.php" method="POST">

                <label>Nombre</label>
                <input id="firstName" type="text" class="form-control" value="<?php echo (isset($firstName)) ? $firstName : "" ?>" name="form-firstName" placeholder="Ingrese su nombre" require>

                <label>Apellido</label>
                <input id="LastName" type="text" class="form-control" value="<?php echo (isset($lastName)) ? $lastName : "" ?>" name="form-lastName" placeholder="Ingrese su apellido" require>

                <label>Empresa</label>
                <input id="company" type="text" class="form-control" value="<?php echo (isset($company)) ? $company : "" ?>" name="form-company" placeholder="Ingrese su trabajo" require>

                <label>Ciudad</label>
                <input id="city" type="text" class="form-control" value="<?php echo (isset($city)) ? $city : "" ?>" name="form-city" placeholder="Ingrese su ciudad" require>

                <label>Email</label>
                <input id="email" type="text" class="form-control" value="<?php echo (isset($email)) ? $email : "" ?>" name="form-email" placeholder="Ingrese su email" require>

                <label>Mensaje</label>
                <input id="mensaje" type="text" class="form-control" value="<?php echo (isset($mensaje)) ? $mensaje : "" ?>" name="form-mensaje" placeholder="Ingrese su mensaje" require>

                <div class="notificaciones">
                    <p class="border-bottom border-info p-2 text-info text-center"><?php 
                            if (isset($notificaciones)) {
                                echo $notificaciones; 
                            }
                    ?>
                    </p> 
                </div>`


                <button id="btn-contacto-dev" name="btn-contacto-dev">Enviar</button>

                </form>
            </div>                
        </div>   
    </section>




    </main>

<footer>
    <div class="grid">
        <div class="textos-footer">
            <h2 class="subtitulo">Contactame</h2>
        </div>
<!-- <div class="footer-items">  -->
        <div class="footer-item1">
            <a href ="https://github.com/Guillef33"><i class="fab fa-github"></i></a>
        </div>
        <div class="footer-item2">
            <a href="https://twitter.com/guillef33"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="footer-item3">
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