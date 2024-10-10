<?php include "cookie.php"; ?>       

<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Integrar sistema de pagos y cobros en PIX | kamiPay</title>
<meta name="description" content="Nuestras APIS está diseñada para optimizar el sistema de pagos y cobros en PIX, transformándolos en segundos en dólares digitales.">
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
<script src="https://unpkg.com/scrollreveal"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Montserrat:ital,wght@0,400;0,500;0,700;0,900;1,500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="assets/rotator/jquery.wordrotator.css">
<link rel="stylesheet" href="assets/rotator/animate.min.css">
<link href="assets/css/layout.css" rel="stylesheet" type="text/css">
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9SMNBPHV59"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-9SMNBPHV59');
</script>


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '805305744429851');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=805305744429851&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>

<body>

<div class="header-container">
    <header>
        <div class="container">
            <div class="header-logo"><a href="index.php"><img src="assets/images/kamipay.svg" width="165" height="28" alt="kamiPay"></a></div>
            <nav class="navigation">
                <ul class="navigation__primary">
                    <li><a href="cobrar-reales-en-dolares-con-pix.php">Qué es kamiPay</a></li>
                    <li><a href="sistema-de-cobro-para-negocios.php">Rubros</a></li>
                    <li><a href="integracion-apis.php" class="active">Integración Apis</a></li>
                    <li><a href="prensa.php">Prensa</a></li>
                </ul>
                <ul class="navigation__secondary">
                    <li><a href="https://app.kamipay.io/" target="_blank" class="btn">Webapp</a></li>
                    <li><a href="#hablemos" class="btn btn--inverse anchorLink">Hablemos</a></li>
                    <li class="redes">
                        <a href="https://www.facebook.com/kamiPay.io/" target="_blank" class="social" aria-label="Facebook" title="Facebook">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="green" d="M19.1076 9.55405C19.1076 14.8307 14.8302 19.1081 9.55357 19.1081C4.2774 19.1076 0 14.8302 0 9.55405C0 4.2774 4.2774 0 9.55405 0C14.8307 0 19.1081 4.2774 19.1081 9.55405H19.1076Z" fill="#00A3E4"/>
                                <path d="M12.3847 8.81259L12.2255 10.0908C12.1986 10.3043 12.0178 10.4649 11.8033 10.4649H9.73314V15.8089C9.51482 15.8286 9.29362 15.8387 9.07001 15.8387C8.5699 15.8387 8.08181 15.7887 7.61007 15.6934V10.4649H6.01789C5.8717 10.4649 5.75244 10.3451 5.75244 10.1985V8.59908C5.75244 8.45241 5.8717 8.33267 6.01789 8.33267H7.61007V5.93406C7.61007 4.4621 8.79831 3.26904 10.2645 3.26904H12.1221C12.2683 3.26904 12.3876 3.38878 12.3876 3.53545V5.13484C12.3876 5.28151 12.2683 5.40125 12.1221 5.40125H10.7949C10.2087 5.40125 9.73362 5.87828 9.73362 6.46735V8.33315H11.963C12.2188 8.33315 12.4164 8.5582 12.3852 8.81307L12.3847 8.81259Z" fill="white"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/kamipay_io/" target="_blank" class="social" aria-label="Instagram" title="Instagram">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="green" d="M19.405 9.55405C19.405 14.8307 15.1276 19.1081 9.85094 19.1081C4.57476 19.1076 0.297363 14.8302 0.297363 9.55405C0.297363 4.2774 4.57476 0 9.85142 0C15.1281 0 19.4055 4.2774 19.4055 9.55405H19.405Z" fill="#00A3E4"/>
                                <path d="M12.4435 4.54248H7.25913C5.92326 4.54248 4.83984 5.6259 4.83984 6.96177V12.1461C4.83984 13.482 5.92326 14.5654 7.25913 14.5654H12.4435C13.7793 14.5654 14.8628 13.482 14.8628 12.1461V6.96177C14.8628 5.6259 13.7793 4.54248 12.4435 4.54248ZM13.9986 11.9735C13.9986 12.9275 13.2244 13.7017 12.2703 13.7017H7.43177C6.47771 13.7017 5.7035 12.9275 5.7035 11.9735V7.13489C5.7035 6.18083 6.47771 5.40662 7.43177 5.40662H12.2703C13.2244 5.40662 13.9986 6.18083 13.9986 7.13489V11.9735Z" fill="white"/>
                                <path d="M9.85608 6.96191C8.42548 6.96191 7.26416 8.12323 7.26416 9.55384C7.26416 10.9844 8.42548 12.1458 9.85608 12.1458C11.2867 12.1458 12.448 10.9844 12.448 9.55384C12.448 8.12323 11.2867 6.96191 9.85608 6.96191ZM9.85608 11.2821C8.90395 11.2821 8.12781 10.506 8.12781 9.55384C8.12781 8.6017 8.90395 7.82557 9.85608 7.82557C10.8082 7.82557 11.5844 8.6017 11.5844 9.55384C11.5844 10.506 10.8082 11.2821 9.85608 11.2821Z" fill="white"/>
                                <path d="M12.6214 7.30728C12.3358 7.30728 12.103 7.07453 12.103 6.78889C12.103 6.50325 12.3358 6.27051 12.6214 6.27051C12.9071 6.27051 13.1398 6.50325 13.1398 6.78889C13.1398 7.07453 12.9071 7.30728 12.6214 7.30728Z" fill="white"/>
                            </svg>
                        </a>
                        <a href="https://twitter.com/kamipay_io" target="_blank" class="social" aria-label="X" title="X">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="green" d="M19.7019 9.55405C19.7019 14.8307 15.4245 19.1081 10.1478 19.1081C4.87163 19.1076 0.594238 14.8302 0.594238 9.55405C0.594238 4.2774 4.87163 0 10.1483 0C15.425 0 19.7023 4.2774 19.7023 9.55405H19.7019Z" fill="#00A3E4"/>
                                <path d="M11.5269 8.67658L15.3917 4.54297H13.9241L10.8907 7.78792L8.56758 4.54297H4.55322L8.61663 10.2192L4.55322 14.5659H6.02086L9.25331 11.1084L11.7284 14.5659H15.7427L11.5269 8.67706V8.67658ZM6.62147 5.60571H8.02082L13.674 13.5022H12.2747L6.62147 5.60571Z" fill="white"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/kamipay/" target="_blank" class="social" aria-label="Linkedin" title="Linkedin">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="green" d="M9.5 0C4.25125 0 0 4.25125 0 9.5C0 14.7488 4.25125 19 9.5 19C14.7488 19 19 14.7488 19 9.5C19 4.25125 14.7488 0 9.5 0ZM7.28333 13.8463H5.18542V7.54458H7.28333V13.8463ZM6.23042 6.6025C5.58917 6.6025 5.07458 6.08 5.07458 5.43875C5.07458 4.7975 5.58917 4.275 6.23042 4.275C6.87167 4.275 7.38625 4.7975 7.38625 5.43875C7.38625 6.08 6.87167 6.6025 6.23042 6.6025ZM14.6379 13.8463H12.54V10.8379C12.54 8.85875 10.4342 9.025 10.4342 10.8379V13.8463H8.33625V7.54458H10.4342V8.6925C11.3525 6.99833 14.6379 6.87167 14.6379 10.3154V13.8463Z" fill="#00A3E4"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="nav-mobile">
                <button class="hamburguer" aria-label="Mostrar menu"><span></span><span></span><span></span></button>
            </div>
        </div>
    </header>
</div>
    
<section class="hero-internal hero-internal--apis">
    <div class="hero-internal-mask">
        <div class="container2">
            <div class="hero-internal__grid">
                <div class="hero-internal__content">
                    <h1 class="hero-internal__title">Integración APIs de kamiPay</h1>
                    <h4 class="hero-internal__subtitle">La solución que tus clientes quieren y tu sistema de pago necesita.</h4>
                    <a href="https://walink.co/5e95a6" target="_blank" class="hero-internal__btn">HABLAR CON UN <strong>ESPECIALISTA</strong></a>
                </div>
                <div class="hero-interal__image">
                    <img src="assets/images/apis/hero.webp" srcset="assets/images/apis/hero.webp 1x, assets/images/apis/hero@2x.webp 2x, assets/images/apis/hero@2x.webp 3x" width="471" height="307" alt="Integración APIs de kamiPay">
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="simplifica">
    <div class="container2">
        <h3 class="simplifica__title">Simplificá los pagos <strong>internacionales con API PIX</strong></h3>
        <p class="simplifica__text">En <strong>kamiPay</strong>, facilitamos transacciones fluidas y seguras entre negocios argentinos y turistas de Brasil. <strong>Nuestras APIs optimizan  pagos y cobros en PIX,</strong> transformándolos rápidamente en dólares digitales USDt, ofreciendo la mejor tasa de cambio sin comisión para el comercio.  Descubrí cómo integrarte con kamiPay y los negocios que más se benefician.</p>
    </div>
</section>
    
<section class="negocios">
    <div class="container2">
        <h3 class="negocios__title">¿Qué negocios pueden agregar más valor <strong>con la integración con PIX de las APIs de kamiPay?</strong></h3>
        <ul class="negocios__list">
            <li class="negocios__list-item">
                <figure><img src="assets/images/apis/icon-fintechs.svg" width="70" height="70" alt="Fintechs"></figure>
                <h4 class="negocios__list-title">Fintechs</h4>
            </li>
            <li class="negocios__list-item">
                <figure><img src="assets/images/apis/icon-procesadores.svg" width="60" height="60" alt="Procesadores de pagos"></figure>
                <h4 class="negocios__list-title">Procesadores<br> de pagos</h4>
            </li>
            <li class="negocios__list-item">
                <figure><img src="assets/images/apis/icon-pos.svg" width="40" height="63" alt="Desarrolladores e implementadores de POS"></figure>
                <h4 class="negocios__list-title">Desarrolladores e implementadores de POS</h4>
            </li>
            <li class="negocios__list-item">
                <figure><img src="assets/images/apis/icon-ecommerce.svg" width="70" height="48" alt="Plataformas de e-commerce"></figure>
                <h4 class="negocios__list-title">Plataformas de <br>e-commerce</h4>
            </li>
            <li class="negocios__list-item">
                <figure><img src="assets/images/apis/icon-software.svg" width="80" height="83" alt="Software de cobranza y facturación"></figure>
                <h4 class="negocios__list-title">Software de<br> cobranza y facturación</h4>
            </li>
            <li class="negocios__list-item">
                <figure><img src="assets/images/apis/icon-insurtechs.svg" width="70" height="66" alt="InsurTechs"></figure>
                <h4 class="negocios__list-title">InsurTechs</h4>
            </li>
            <li class="negocios__list-item">
                <figure><img src="assets/images/apis/icon-comercial.svg" width="70" height="78" alt="Software de gestión comercial"></figure>
                <h4 class="negocios__list-title">Software de<br> gestión comercial</h4>
            </li>
            <li class="negocios__list-item">
                <figure><img src="assets/images/apis/icon-hoteles.svg" width="76" height="48" alt="Sotfware para hoteles o rent a cars."></figure>
                <h4 class="negocios__list-title">Sotfware para<br> hoteles o rent a cars</h4>
            </li>
        </ul>
        <p class="negocios__text">Hacé que tus clientes moneticen más oportunidades con las integraciones de cobros con PIX a sus consumidores brasileños. Incrementá tus comisiones al permitir más flujo de transacciones por tickets más altos integrándose a las APIs PIX de kamiPay.</p>
    </div>
</section>
    
<section class="apis">
    <div class="container2">
        <div class="apis__grid">
            <div class="apis__content">
                <h3 class="apis__title">¿Qué son las APIs de <strong>kamiPay?</strong></h3>
                <div class="apis__text">
                    <p>Las APIs de kamiPay permiten a los desarrolladores integrar en sus plataformas la posibilidad de cobrar o pagar con PIX. Con la integración podrás habilitar a comercios a generar códigos QR de PIX, aceptar pagos directamente en reales los cuales serán convertidos automáticamente en dólar digital USDt de forma segura e inmediata.</p>
                    <p>También podrás habilitar a pagar cuentas en reales a través de  PIX usando USDt en forma instantánea.</p>
                </div>
            </div>
            <div class="apis__image">
                <img src="assets/images/apis/apis.webp" srcset="assets/images/apis/apis.webp 1x, assets/images/apis/apis@2x.webp 2x, assets/images/apis/apis@2x.webp 3x" width="432" height="424" alt="¿Qué son las APIs de kamiPay?">
            </div>
        </div>
    </div>
</section>
    
<section class="beneficios-api">
    <div class="container2">
        <h3 class="beneficios-api__title">Beneficios de integrar las <strong>APIs de kamiPay</strong></h3>
        <ul class="beneficios-api__gridx3">
            <li class="beneficios-api__list-item">
                <h4 class="beneficios-api__list-title">Seguridad</h4>
                <p>Utilizamos los más altos estándares de seguridad para garantizar que todas las transacciones se realicen de forma segura y confiable.</p>
            </li>
            <li class="beneficios-api__list-item">
                <h4 class="beneficios-api__list-title">Transacciones<br> irrevocables </h4>
                <p>Con PIX, los pagos y acreditaciones se realizan de forma instantánea, eliminando la incertidumbre, las pérdidas económicas por inflación o por pagos no aceptados, como ocurre con el uso de otros medios de pago como las TDC.</p>
            </li>
            <li class="beneficios-api__list-item">
                <h4 class="beneficios-api__list-title">Conversión<br> automática </h4>
                <p>Los pagos en reales se convierten automáticamente a USDt al mejor tipo de cambio, similar al tipo de cambio libre, eliminando la necesidad de manejar múltiples divisas y cotizaciones.</p>
            </li>
        </ul>
        <ul class="beneficios-api__gridx2">
            <li class="beneficios-api__list-item">
                <h4 class="beneficios-api__list-title">Facilidad de uso </h4>
                <p>Nuestras APIs están diseñadas para ser intuitivas y fáciles de integrar, con documentación clara y soporte técnico dedicado.</p>
            </li>
            <li class="beneficios-api__list-item">
                <h4 class="beneficios-api__list-title">Adaptabilidad </h4>
                <p>Las APIs de kamiPay se puede integrar con diversos sistemas de puntos de venta (POS), software de gestión y más.</p>
            </li>
        </ul>
        <a href="https://walink.co/5e95a6" target="_blank" class="beneficios-api__btn">HABLAR CON UN <strong>ESPECIALISTA</strong></a>
    </div>
</section>
    
<section class="sectores">
    <div class="container2">
        <h3 class="sectores__title">Sectores que pueden beneficiarse <strong>de las APIs de kamiPay</strong></h3>
        <p class="sectores__text">Nuestras APIs son ideales para una variedad de negocios que reciben turistas brasileños y buscan simplificar sus procesos de pago.</p>
        <ul class="sectores__list">
            <li class="sectores__list-item">
                <div class="sectores__list-head">
                    <figure><img src="assets/images/apis/icon-hospedaje.svg" width="120" height="79" alt="Hospedajes"></figure>
                    <h4 class="sectores__list-title">Hospedajes</h4>
                </div>
                <p>Facilitando el pago de habitaciones y servicios adicionales, mejorando la experiencia del huésped.</p>
            </li>
            <li class="sectores__list-item">
                <div class="sectores__list-head">
                    <figure><img src="assets/images/apis/icon-autos.svg" width="94" height="75" alt="Alquiler de autos"></figure>
                    <h4 class="sectores__list-title">Alquiler de autos</h4>
                </div>
                <p>Simplificando el pago del alquiler de vehículos a los turistas brasileños, haciendo el proceso más rápido y conveniente.</p>
            </li>
            <li class="sectores__list-item">
                <div class="sectores__list-head">
                    <figure><img src="assets/images/apis/icon-minoristas.svg" width="96" height="78" alt="Tiendas minoristas"></figure>
                    <h4 class="sectores__list-title">Tiendas minoristas</h4>
                </div>
                <p>Aceptando pagos en reales de manera sencilla y segura como si estuvieran en su propio país.</p>
            </li>
            <li class="sectores__list-item">
                <div class="sectores__list-head">
                    <figure><img src="assets/images/apis/icon-restaurantes.svg" width="104" height="69" alt="Restaurantes"></figure>
                    <h4 class="sectores__list-title">Restaurantes</h4>
                </div>
                <p>Permitiendo a los comensales brasileños pagar fácilmente utilizando PIX, incrementando el ticket promedio y la satisfacción de sus clientes.</p>
            </li>
            <li class="sectores__list-item">
                <div class="sectores__list-head">
                    <figure><img src="assets/images/apis/icon-agencias.svg" width="86" height="78" alt="Agencias de turismo"></figure>
                    <h4 class="sectores__list-title">Agencias de turismo</h4>
                </div>
                <p>Permitiendo gestionar pagos de tours y actividades de manera anticipada y remota mediante el envío de un link QR. Ofreciendo una experiencia de pago sin fricciones.</p>
            </li>
            <li class="sectores__list-item">
                <div class="sectores__list-head">
                    <figure><img src="assets/images/apis/icon-freelance.svg" width="89" height="82" alt="Profesionales freelance"></figure>
                    <h4 class="sectores__list-title">Profesionales freelance</h4>
                </div>
                <p>Personas que trabajan para Brasil en forma remota y cobran sus sueldos u honorarios digitalmente, mediante envío de link de pago QR.</p>
            </li>
        </ul>
        <a href="https://walink.co/5e95a6" target="_blank" class="sectores__btn">QUIERO INTEGRAR LAS <strong>APIS DE KAMIPAY</strong></a>
    </div>
</section>
    
<section class="integrar">
    <div class="container2">
        <h3 class="integrar__title">¿Cómo integrar las APIs <strong>de kamiPay en tu sistema?</strong></h3>
        <ul class="integrar__list">
            <li class="integrar__list-item">
                <h4 class="integrar__list-title">Registro</h4>
                <p>Contactanos para registrarte y obtener las credenciales.</p>
            </li>
            <li class="integrar__list-item">
                <h4 class="integrar__list-title">Documentación</h4>
                <p>Accedé a nuestra documentación, donde encontrarás ejemplos de código, endpoints y guías paso a paso para la integración.</p>
            </li>
            <li class="integrar__list-item">
                <h4 class="integrar__list-title">Testeos y pruebas</h4>
                <p>Utilizá nuestro entorno de pruebas para asegurarte que la integración funciona correctamente antes de pasar a producción.</p>
            </li>
            <li class="integrar__list-item">
                <h4 class="integrar__list-title">Soporte técnico</h4>
                <p>Nuestro equipo de soporte está disponible para ayudarte en cada etapa de la integración, asegurando que el proceso sea fluido y seguro.</p>
            </li>
        </ul>
        <a href="https://apidocs.kamipay.io/docs/api-reference/introduction" target="_blank" class="integrar__btn">Documentación <strong>técnica</strong></a>
    </div>
</section>

<section class="contacto contacto-apis" id="hablemos">
    <div class="container2">
        <h3 class="contacto-apis__title">Mejorá tus sistemas de pagos, añadiendo valor con nuestro QR PIX.</h3>
        <p class="contacto-apis__text">Simplificá los pagos internacionales y permití que los negocios que adquieren tu servicios facturen más cobrando en reales a turistas de Brasil en comercios argentinos.</p>
        <h4 class="contacto-apis__subtitle">Aumentá tu volumen de comisiones integrándote a las APIs de kamiPay.</h4>
        <a href="https://walink.co/5e95a6" target="_blank" class="contacto-apis__btn">HABLAR CON UN <strong>ESPECIALISTA</strong></a>
    </div>
    <div class="container2" id="hablemos">
        <?php include "partial/contacto.php"; ?>
    </div>
</section>
    
<footer>
    <div class="container2">
        <div class="footer__top">
            <h5 class="footer__logo"><a href="index.php"><img src="assets/images/kamipay-white.svg" width="158" height="26" alt="kamiPay"></a></h5>
            <ul class="footer__nav">
                <li><a href="cobrar-reales-en-dolares-con-pix.php">Qué es kamiPay</a></li>
                <li><a href="sistema-de-cobro-para-negocios.php">Rubros</a></li>
                <li><a href="integracion-apis.php">Integración Apis</a></li>
                <li><a href="prensa.php">Prensa</a></li>
            </ul>
            <div class="footer__contact">
                <a href="#hablemos" class="footer__btn anchorLink">Hablemos</a>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__copy">© kamiPay 2024. Todos los derechos reservados.</p>
        </div>
    </div>    
</footer>
    
<div class="whatsapp">
    <a href="https://walink.co/5e95a6" target="_blank" aria-label="Whatsapp">
        <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
            <g class="layer">
                <circle cx="40" cy="40" fill="#fff" id="svg_1" r="38" stroke="#000000" stroke-width="0"></circle>
                <path d="m57.81072,21.975c-4.48928,-4.5 -10.46786,-6.975 -16.82142,-6.975c-13.11429,0 -23.78571,10.67143 -23.78571,23.78571c0,4.18928 1.09286,8.28215 3.17143,11.89286l-3.375,12.32142l12.61072,-3.31072c3.47143,1.89642 7.38215,2.89286 11.36786,2.89286l0.01072,0c13.10358,0 24.01072,-10.67143 24.01072,-23.78571c0,-6.35357 -2.7,-12.32142 -7.18928,-16.82142l-0.00001,-0.00001l-0.00001,0l-0.00002,0.00001zm-16.82142,36.6c-3.55714,0 -7.03928,-0.95357 -10.07143,-2.75357l-0.71785,-0.42857l-7.47858,1.96072l1.99286,-7.29642l-0.47143,-0.75c-1.98215,-3.15 -3.02142,-6.78215 -3.02142,-10.52142c0,-10.89642 8.87143,-19.76786 19.77858,-19.76786c5.28215,0 10.24286,2.05714 13.97143,5.79642c3.72857,3.73928 6.02142,8.7 6.01072,13.98215c0,10.90714 -9.09642,19.77858 -19.99286,19.77858l0,-0.00002l-0.00001,0l-0.00001,-0.00001zm10.84286,-14.80714c-0.58928,-0.3 -3.51429,-1.73572 -4.06072,-1.92857c-0.54643,-0.20358 -0.94286,-0.3 -1.33928,0.3c-0.39642,0.6 -1.53214,1.92857 -1.88571,2.33572c-0.34286,0.39642 -0.69642,0.45 -1.28571,0.15c-3.49286,-1.74643 -5.78571,-3.11785 -8.08928,-7.07143c-0.61072,-1.05 0.61072,-0.975 1.74643,-3.24643c0.19286,-0.39642 0.09642,-0.73928 -0.05357,-1.03928c-0.15,-0.3 -1.33928,-3.225 -1.83214,-4.41429c-0.48215,-1.15714 -0.975,-0.99642 -1.33928,-1.01785c-0.34286,-0.02142 -0.73928,-0.02142 -1.13572,-0.02142c-0.39642,0 -1.03928,0.15 -1.58571,0.73928c-0.54643,0.6 -2.07858,2.03572 -2.07858,4.96072c0,2.925 2.13214,5.75357 2.42142,6.15c0.3,0.39642 4.18928,6.39642 10.15714,8.97858c3.77143,1.62857 5.25,1.76786 7.13572,1.48928c1.14643,-0.17143 3.51429,-1.43572 4.00714,-2.82857c0.49286,-1.39286 0.49286,-2.58215 0.34286,-2.82857c-0.13928,-0.26786 -0.53572,-0.41785 -1.125,-0.70714l-0.00001,-0.00001l0.00002,-0.00001l-0.00002,-0.00001z" fill="currentColor" id="svg_2"></path>
            </g>
        </svg>
    </a>
</div>

<script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/rotator/jquery.wordrotator.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@19.1.3/dist/lazyload.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/js.js"></script>
<script type="text/javascript" src="assets/js/contacto.js"></script>
</body>
</html>