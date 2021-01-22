<?php

if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"]) ){
    ini_set ('display_errors', 1);
    error_reporting (E_ALL);
    $to = "administracion@aromax.com.ar";
    $subject = "Mensaje Enviado desde AromaxSA";
    $contenido = "Nombre: ".$_POST["nombre"]."\n";
    $contenido .= "Email: ".$_POST["email"]."\n\n";
    $contenido .= "Telefono: ".$_POST["telefono"]."\n\n";
    $contenido .= "Localidad: ".$_POST["localidad"]."\n\n";
    $contenido .= "Mensaje: ".$_POST["mensaje"]."\n\n";
    $header = "From: administracion@aromax.com.ar\nReply-To:".$_POST["email"]."\n";
    $header .= "Mime-Version: 1.0\n";
    $header .= "Content-Type: text/plain";
    if(mail($to, $subject, $contenido ,$header)){
        echo  '<script language="javascript">
                    window.onload = function() {
                        swal("Mensaje Enviado", "success");
                    }
                </script>';
    }
    }               
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
    <meta name="description" content="Landing page Aromax">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>AROMAX</title>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5WB542S');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <div id="top"></div>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WB542S" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="logo">
            <img src="./assets/img/logo-aromax.png" alt="logo aromax">
        </div>
        <div class="wrapper">
            <div class="texto-header">
                <p>Aromatización de ambientes e higiene institucional</p>
                <h1>Dejanos tus datos, nosotros nos comunicamos!</h1>
            </div>
            <div class="form-contact" id="contact">
                <form method="post" action="http://aromaxsa.com.ar">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" id="localidad">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" cols="20" rows="5"></textarea>
                    <button type="submit" >ENVIAR</button>
                    <p id="my-form-status"></p>
                </form>
            </div>
        </div>
    </header>
    <main>
        <section class="info-logos">
            <div class="logo">
                <img src="./assets/img/factory.svg" alt="fabricantes">
                <p class="text-uppercase">somos fabricantes</p>
            </div>
            <div class="logo">
                <img src="./assets/img/factura.svg" alt="ventas">
                <p class="text-uppercase">venta mayorista y minorista</p>
            </div>
            <div class="logo">
                <img src="./assets/img/entrega.svg" alt="entrega">
                <p class="text-uppercase">Envíos a todo el país</p>
            </div>
        </section>
        <section class="franquicias">
            <div class="img-franquicias">
                <img src="./assets/img/franquicias.jpg" alt="franquicias">
            </div>
            <div class="texto-franquicias">
                <h2>Franquicias</h2><br>
                <h3>¿Quiere vender nuestros productos?</h3>
                <p>Usted podrá armar su cartera de clientes en su trabajo, barrio, escuelas, clubes, o dentro de su
                    círculo
                    social.</p><br>
            </div>
            <a href="https://aromax.com.ar/franquicias/" target="_blank" rel="noopener noreferrer">
                <button class="btn">Mas información</button>
            </a>
        </section>
        <section class="productos">
            <h3>PRODUCTOS</h3>
            <div class="wrapper">
                <div class="producto">
                    <img src="./assets/img/EQUIPO ELECTRICO.png" alt="producto">
                    <p class="text-uppercase">equipo eléctrico aromatizador</p>
                </div>
                <div class="producto">
                    <img src="./assets/img/ESCENCIAS.png" alt="producto">
                    <p class="text-uppercase">aceite escencial p/ equipo eléctrico</p>
                </div>
                <div class="producto">
                    <img src="./assets/img/AEROSOL.png" alt="producto">
                    <p class="text-uppercase">aerosoles</p>
                </div>
                <div class="producto">
                    <img src="./assets/img/TEXTIL.png" alt="producto">
                    <p class="text-uppercase">fragancias textiles</p>
                </div>
                <div class="producto">
                    <img src="./assets/img/BAMBOO.png" alt="producto">
                    <p class="text-uppercase">bamboo</p>
                </div>
                <div class="producto">
                    <img src="./assets/img/HIGIENE.png" alt="producto">
                    <p class="text-uppercase">higiene</p>
                </div>
            </div>
            <a href="https://aromax.com.ar/shop/" target="_blank" rel="noopener noreferrer">
                <button class="btn">Ver mas</button>
            </a>
        </section>
        <section class="catalogo">
            <div class="texto-catalogo">
                <h3>Conocé toda nuestra línea de productos</h3><br>
                <a href="/assets/img/catalogo de productos.pdf" target="_blank" rel="noopener noreferrer">
                    <button class="btn">descargar catálogo</button>
                </a>
            </div>
            <div class="imagen-catalogo">
                <img src="./assets/img/catalogo-tapa.png" alt="catalogo">
            </div>
        </section>
        <section class="contactar">
            <p>Para mas información contactenos a través de nuestro formulario</p>
            <a href="#contact">
                <button class="btn">contactar</button>
            </a>
        </section>
        <footer>
            <div class="left">
                <a href="#top">
                <div class="logo">
                    <img src="./assets/img/logo-aromax.png" alt="logo aromax">
                </div>
            </a>
            </div>
            <div class="right">
                <ul>
                    <li>0800-444-9779</li>
                    <li>0341 4636164 / 4639779</li>
                    <li>info@aromax.com.ar</li>
                    <li>Sanchez de Bustamante 1742</li>
                    <li>Rosario, Santa Fe, Argentina</li>
                </ul>
            </div>
        </footer>
    </main>
<!-- Código de instalación Cliengo para https://www.aromaxsa.com.ar --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5c13f8d1e4b0bfef9de09ae7/5ce6ba77e4b03190e1fb903b.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>    <script src="./assets/js/form.js"></script>
    <!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '874057263133561');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=874057263133561&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
</body>

</html>