<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <title>Professional Visión - No hay tiempo para los límites</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
        <header>
            <div class="contenedor_header">

                <div class="menu">
                    <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Fotográfias</a></li>
                        <div class="logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    </nav>
                </div>
                <!-- -->
                <div class="logo_movil">
                    <a href="#"><img src="img/logo.png" alt=""></a>
                </div>
                <i class="fas fa-bars" id="icon_menu"></i>
                <!-- -->
            </div>
        </header>

        <main>
        <div id="slides">

            <ul class="slides-container">
                <li><img src="img/slider1.jpg"></li>
                <li><img src="img/slider2.jpg"></li>
                <li><img src="img/slider3.jpg"></li>
            </ul>

            <nav class="slides-navigation">
                <a href="" class="next fas fa-long-arrow-right"></a>
                <a href="" class="prev fas fa-long-arrow-left"></a>
            </nav>

        </div>

        <div class="contenedor_universal">
            <div class="bloque_titulos">
                <p>Fotográfias</p>
                <h1>Momentos para recordar</h1>
            </div>

            <div class="bloque_fotografias">

            <div class="bloque_fotografias_general_1">
                <img src="img/momentos_1.jpg" alt="">
            </div>
            <div class="bloque_fotografias_general_2">
                <img src="img/momentos_2.jpg" alt="">
            </div>
            <div class="bloque_fotografias_general_3">
                <img src="img/momentos_3.jpg" alt="">
            </div>

            <div class="bloque_fotografias_general_5">
                <img src="img/momentos_5.jpg" alt="">
            </div>
            <div class="bloque_fotografias_general_4">
                <img src="img/momentos_4.jpg" alt="">
            </div>
            <div class="bloque_fotografias_general_4">
                <img src="img/momentos_6.jpg" alt="">
            </div>

            </div>

            <hr>

            <div class="bloque_video">
                
                <div class="bloque_video_repro">
                    <video src="https://entremax.000webhostapp.com/video/familia.mp4" autoplay playinline loop muted preload="auto"></video>
                </div>
                <div class="bloque_video_repro">
                    <h1>Recuerdo en familia</h1>
                    <p>Video grabado por Professional Vision en Bulgaria 3 de Marzo del 2010</p>
                </div>
    
            </div>

            <hr>

            <div class="bloque_titulos">
                <p>Ideales para familiarizar</p>
                <h1>Para festejar nuevamente</h1>
            </div>

            <div class="bloque_fotografias">
            
            <div class="bloque_fotografias_general_4">
                <img src="img/bloque_5.jpg" alt="">
            </div>
            <div class="bloque_fotografias_general_4">
                <img src="img/bloque_6.jpg" alt="">
            </div>
            <div class="bloque_fotografias_general_5">
                <img src="img/bloque_4.jpg" alt="">
            </div>

            <div class="bloque_fotografias_general_1">
                <img src="img/bloque_1.jpg" alt="">
            </div>
            <div class="bloque_fotografias_general_2">
                <img src="img/bloque_2.jpg" alt="">
            </div>
            <div class="bloque_fotografias_general_3">
                <img src="img/bloque_3.jpg" alt="">
            </div>

            </div>
        </div>
    </main>

<footer>

    <div class="container_footer">

        <div class="box_footer">
            <h2>Servicios</h2>
            <a href="#"><i class="fas fa-file-invoice-dollar"></i> Planes para clientes</a>
            <a href="#"><i class="fas fa-mobile"></i> Dónde encontrarnos</a>
            <a href="#"><i class="fas fa-chart-line"></i> Agendar cita</a>
        </div>

        <div class="box_footer">
            <h2>Marca</h2>
            <a href="#"><i class="fas fa-question-circle"></i> Acerca de nosotros</a>
            <a href="#"><i class="fas fa-user-lock"></i> Políticas de Privacidad</a> 
            <a href="#"><i class="fas fa-lock"></i>  Términos & Condiciones</a>            
        </div>

        <div class="box_footer">
            <h2>Redes Sociales</h2>
            <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
        </div>

        </div>

        <div class="contenedor_footer">
            <p>Maqueta creada por <strong><a href="https://clickcode.epizy.com" target="_blank">Click Code</a></strong></p>
            <p>&copy; <?php echo date("Y"); ?> Professional Vision - Todos los derechos reservados</p>
        </div>

</footer>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.superslides.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        $('#slides').superslides()
    </script>
</body>
</html>