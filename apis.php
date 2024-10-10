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
</head>

<body>

<header>
    <div class="container">
        <h1 class="header-logo"><a href="index.php"><img src="assets/images/kamipay.svg" width="165" height="28" alt="kamiPay"></a></h1>
        <nav class="navigation">
            <ul class="navigation__primary">
                <li><a href="que-es-kamipay.php">Qué es kamiPay</a></li>
                <li><a href="rubros.php">Rubros</a></li>
                <li><a href="apis.php" class="active">Integración Apis</a></li>
                <li><a href="prensa.php">Prensa</a></li>
            </ul>
            <ul class="navigation__secondary">
                <li><a href="https://app.kamipay.io/" target="_blank" class="btn">Webapp</a></li>
                <li><a href="#hablemos" class="btn btn--inverse anchorLink">Hablemos</a></li>
                <li>
                    <a href="https://www.instagram.com/kamipay_io/" target="_blank" class="social" aria-label="Instagram" title="Instagram">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9571 0.146597C18.9108 0.235099 20.6037 0.712713 21.9711 2.07385C23.343 3.44279 23.8146 5.14264 23.9032 7.0756C23.9581 8.28193 24.2794 17.3977 23.3478 19.7885C22.7196 21.401 21.4827 22.6415 19.8552 23.2713C19.0959 23.5665 18.2289 23.7669 16.9571 23.8251C6.32406 24.3063 2.3823 24.0441 0.72027 19.7885C0.425365 19.0309 0.222263 18.1648 0.166162 16.8961C-0.319847 6.23587 0.245062 3.92491 2.09819 2.07385C3.56822 0.60771 5.29714 -0.390118 16.9571 0.146597ZM16.8593 21.6812C18.0237 21.629 18.6552 21.4346 19.0767 21.2717C20.1369 20.8598 20.9334 20.0663 21.3429 19.0123C22.0521 17.1958 21.8169 8.56844 21.7536 7.1725C21.6915 5.80476 21.4146 4.55552 20.4498 3.5907C19.2558 2.39936 17.7129 1.81584 7.20878 2.28986C5.83805 2.35196 4.58554 2.62857 3.61832 3.5907C2.4243 4.78203 1.83209 6.33637 2.3145 16.8004C2.367 17.9617 2.5617 18.5917 2.7252 19.0123C3.80582 21.7814 6.29196 22.1666 16.8593 21.6812ZM7.09297 5.62715C7.09297 6.41588 6.45186 7.057 5.66015 7.057C4.86844 7.057 4.22613 6.41588 4.22613 5.62715C4.22613 4.83843 4.86844 4.19791 5.66015 4.19791C6.45186 4.19791 7.09297 4.83903 7.09297 5.62715ZM18.1656 11.9852C18.1656 15.3633 15.4205 18.1021 12.0341 18.1021C8.6476 18.1021 5.90256 15.3633 5.90256 11.9852C5.90256 8.60714 8.6476 5.87016 12.0341 5.87016C15.4205 5.87016 18.1656 8.60714 18.1656 11.9852ZM16.0139 11.9852C16.0139 9.79367 14.2325 8.01552 12.0341 8.01552C9.83562 8.01552 8.05419 9.79397 8.05419 11.9852C8.05419 14.1765 9.83562 15.9568 12.0341 15.9568C14.2325 15.9568 16.0139 14.1783 16.0139 11.9852Z" fill="#00A3E4"/>
                        </svg>
                        <span>instagram</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="nav-mobile">
            <button class="hamburguer" aria-label="Mostrar menu"><span></span><span></span><span></span></button>
        </div>
    </div>
</header>
    
<section class="hero-internal hero-internal--apis">
    <div class="container2">
        <div class="hero-internal__grid">
            <div class="hero-internal__content">
                <h2 class="hero-internal__title">Integración APIs de kamiPay</h2>
                <h4 class="hero-internal__subtitle">La solución que tus clientes quieren y tu sistema de pago necesita.</h4>
                <a href="#" class="hero-internal__btn">HABLAR CON UN <strong>ESPECIALISTA</strong></a>
            </div>
            <div class="hero-interal__image">
                <img src="assets/images/apis/hero.webp" width="471" height="307" alt="Integración APIs de kamiPay">
            </div>
        </div>
    </div>
</section>
    
<section class="simplifica">
    <div class="container2">
        <h3 class="simplifica__title">Simplificá los pagos <strong>internacionales con PIX</strong></h3>
        <p class="simplifica__text">En <strong>kamiPay</strong>, facilitamos transacciones fluidas y seguras entre negocios argentinos y turistas de Brasil. <strong>Nuestras APIs optimizan  pagos y cobros en PIX,</strong> transformándolos rápidamente en dólares digitales USDt, ofreciendo la mejor tasa de cambio sin comisión para el comercio.  Descubrí cómo integrarte con kamiPay y los negocios que más se benefician.</p>
    </div>
</section>
    
<section class="negocios">
    <div class="container2">
        <h3 class="negocios__title">¿Qué negocios pueden agregar más valor <strong>con la integración de las APIs de kamiPay?</strong></h3>
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
                <h4 class="negocios__list-title">Software de<br< gestión comercial</h4>
            </li>
            <li class="negocios__list-item">
                <figure><img src="assets/images/apis/icon-hoteles.svg" width="76" height="48" alt="Sotfware para hoteles o rent a cars."></figure>
                <h4 class="negocios__list-title">Sotfware para<br> hoteles o rent a cars.</h4>
            </li>
        </ul>
        <p class="negocios__text">Hacé que tus clientes moneticen más oportunidades al cobrar con PIX a sus consumidores brasileños. Incrementá tus comisiones al permitir más flujo de transacciones por tickets más altos integrándose a las APIs de kamiPay.</p>
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
                <img src="assets/images/apis/apis.webp" width="432" height="424" alt="¿Qué son las APIs de kamiPay?">
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
        <a href="#" class="beneficios-api__btn">HABLAR CON UN <strong>ESPECIALISTA</strong></a>
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
        <a href="#" class="sectores__btn">QUIERO INTEGRAR LAS <strong>APIS DE KAMIPAY</strong></a>
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
        <a href="#" class="integrar__btn">Documentación <strong>técnica</strong></a>
    </div>
</section>

<section class="contacto contacto-apis">
    <div class="container2">
        <h3 class="contacto-apis__title">Mejorá tus sistemas de pagos, añadiendo valor con nuestro QR PIX.</h3>
        <p class="contacto-apis__text">Simplificá los pagos internacionales y permití que los negocios que adquieren tu servicios facturen más cobrando en reales a turistas de Brasil en comercios argentinos.</p>
        <h4 class="contacto-apis__subtitle">Aumentá tu volumen de comisiones integrándote a las APIs de kamiPay.</h4>
        <a href="#" class="contacto-apis__btn">HABLAR CON UN <strong>ESPECIALISTA</strong></a>
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
                <li><a href="que-es-kamipay.php">Qué es kamiPay</a></li>
                <li><a href="beneficios.php">Rubros</a></li>
                <li><a href="apis.php">Integración Apis</a></li>
                <li><a href="prensa.php">Prensa</a></li>
            </ul>
            <!--<div class="footer__contact">
                <a href="#hablemos" class="footer__btn anchorLink">Hablemos</a>
            </div>-->
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