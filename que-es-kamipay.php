<?php include "cookie.php"; ?>       

<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>¿Cómo cobrar reales en dólares con PIX? | Descubrí kamiPay</title>
<meta name="description" content="kamiPay es una webapp que permite cobrar transacciones entre personas físicas o jurídicas realizadas por PIX y convertirlas a dólares digitales.">
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

<div class="header-container">
    <header>
        <div class="container">
            <h1 class="header-logo"><a href="index.php"><img src="assets/images/kamipay.svg" width="165" height="28" alt="kamiPay"></a></h1>
            <nav class="navigation">
                <ul class="navigation__primary">
                    <li><a href="que-es-kamipay.php" class="active">Qué es kamiPay</a></li>
                    <li><a href="rubros.php">Rubros</a></li>
                    <li><a href="integracion-apis.php">Integración Apis</a></li>
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
    
<section class="hero-internal hero-internal--que-es">
    <div class="container2">
        <div class="hero-internal__grid">
            <div class="hero-internal__content">
                <h2 class="hero-internal__title">¿Cómo cobrar PIX en Argentina con kamiPay?</h2>
                <h4 class="hero-internal__subtitle">Descubrí kamiPay, la webApp que te permite cobrar con PIX en Argentina a turistas de Brasil, conviertiendo reales a pesos o a dólares digitales en comercios argentinos.</h4>
            </div>
            <div class="hero-interal__image">
                <img src="assets/images/que-es/hero.webp" srcset="assets/images/que-es/hero.webp 1x, assets/images/que-es/hero@2x.webp 2x, assets/images/que-es/hero@2x.webp 3x" width="371" height="257" alt="Qué es kamiPay">
            </div>
        </div>
    </div>
</section>
    
<section class="pioneros">
    <div class="container2">
        <div class="pioneros__content">
            <h3 class="pioneros__title">Pioneros en pagos crossborder <strong>con Pix</strong></h3>
            <div class="pioneros__text">
                <p><strong>kamiPay</strong> es una app que permite operaciones comerciales entre personas físicas o jurídicas de Argentina y Brasil realizadas por <strong>PIX</strong> de forma inmediata, irreversible y al mejor tipo de cambio, similar a la cotización libre.</p>
                <p>El comercio recibe dólares digitales en segundos, que luego podrá convertir a dólares físicos o a pesos cuando lo prefiera.</p>
            </div>
        </div>
        <ul class="pioneros__list">
            <li class="pioneros__list-item">
                <h4>+1.000</h4>
                <p>empresas ya están utilizando kamiPay</p>
            </li>
            <li class="pioneros__list-item">
                <h4>+ 1 millón</h4>
                <p>de transacciones realizadas en cobros y pagos</p>
            </li>
            <li class="pioneros__list-item">
                <p>Reconocidos por el mercado y los medios como una empresa sólida y confiable</p>
            </li>
        </ul>
    </div>
</section>
    
<section class="queespix">
    <div class="container2">
        <div class="queespix__grid">
            <div class="queespix__content">
                <h3 class="queespix__title">¿Qué es <strong>PIX?</strong></h3>
                <h4 class="queespix__subtitle">Conocé el método de pago QR más popular de Brasil</h4>
                <div class="queespix__text">
                    <p>PIX es un sistema de pagos instantáneos desarrollado por el Banco Central de Brasil. Es el método de pago favorito por más de 160 millones de brasileños por su rapidez, seguridad, disponibilidad 24/7, reemplazando el uso de efectivo, tarjetas de crédito y débito.</p>
                </div>
            </div>
            <div class="queespix__image">
                <img src="assets/images/que-es/pix.svg" width="230" height="82" alt="PIX">
            </div>
        </div>
    </div>
</section>
    
<section class="funciona">
    <div class="container2">
        <h3 class="funciona__title">¿Cómo funciona <strong>kamiPay?</strong></h3>
        <ul class="funciona__list">
            <li class="funciona__list-item">
                <h4 class="funciona__list-title">CONTACTO</h4>
                <p>Iniciá el proceso contactándonos. Te solicitaremos tus datos básicos para configurar tu cuenta.</p>
            </li>
            <li class="funciona__list-item">
                <h4 class="funciona__list-title">WEBAPP</h4>
                <p>Activás una billetera virtual y comenzás a operar el mismo día en nuestra WebApp, muy fácil e intuitiva de usar.</p>
            </li>
            <li class="funciona__list-item">
                <h4 class="funciona__list-title">COBRO EN REALES</h4>
                <p>Cuando tu cliente de Brasil quiera pagar su compra, ingresás el monto en pesos en la pantalla de kamiPay y le mostrará a tu cliente el precio equivalente en reales para que él pueda pagar con PIX mediante QR con su cuenta local.</p>
            </li>
            <li class="funciona__list-item">
               <h4 class="funciona__list-title">ACREDITACIÓN</h4>
                <p>Recibirás dólares digitales (USDt) en tu billetera virtual en cuestión de segundos.</p>
            </li>
            <li class="funciona__list-item">
                <h4 class="funciona__list-title">CONVERSIÓN Y TRANSFERENCIA</h4>
                <p>Los dólares digitales pueden ser enviados a tu banco local en pesos argentinos o convertirlos a dólares billete, según tu preferencia cuando lo decidas, todo sin comisión y al mejor tipo de cambio.</p>
            </li>
        </ul>
    </div>
</section>
    
<section class="ventajas">
    <div class="container2">
        <h3 class="ventajas__title">Ventajas de cobrar en reales mediante PIX, <strong>adhiriéndote a kamiPay</strong></h3>
        <ul class="ventajas__list">
            <li class="ventajas__list-item">
                <div class="ventajas__list-head">
                    <figure><img src="assets/images/que-es/icon-cobrar.svg" width="47" height="82" alt="COBRAR EN REALES"></figure>
                    <h4 class="ventajas__list-title">COBRAR EN REALES</h4>
                </div>
                <p>Al cobrar con PIX, le permitís a tus clientes de Brasil que paguen en reales desde su banco local, usando su método de pago familiar y confiable. Esto reduce las fricciones al momento de la compra, haciendo la experiencia rápida, fácil y eficiente a través de un QR en cuestión de segundos.</p>
            </li>
            <li class="ventajas__list-item">
                <div class="ventajas__list-head">
                    <figure><img src="assets/images/que-es/icon-ganancias.svg" width="87" height="83" alt="GANANCIAS EN DÓLARES"></figure>
                    <h4 class="ventajas__list-title">GANANCIAS EN DÓLARES</h4>
                </div>
                <p>Los clientes pagan sus compras en reales sin complicaciones mientras que al comercio se le acreditan en dólares digitales USDt en segundos y de manera inmediata, que pueden convertir a pesos argentinos o mantener en sus cuentas hasta que decidan transferirlos o cambiarlos a dólar billete.</p>
            </li>
            <li class="ventajas__list-item">
                <div class="ventajas__list-head">
                    <figure><img src="assets/images/que-es/icon-ahorro.svg" width="102" height="69" alt="AHORRO DE COSTOS"></figure>
                    <h4 class="ventajas__list-title">AHORRO DE COSTOS</h4>
                </div>
                <p>Con kamiPay, no hay membresías ni comisiones para el comercio. Ahorrás frente a tarjetas de crédito y otros métodos de pago, y cobrás en segundos en vez de semanas, mejorando tus márgenes y competitividad.</p>
            </li>
            <li class="ventajas__list-item">
                <div class="ventajas__list-head">
                    <figure><img src="assets/images/que-es/icon-pagos.svg" width="89" height="58" alt="PAGOS RÁPIDOS Y SEGUROS"></figure>
                    <h4 class="ventajas__list-title">PAGOS RÁPIDOS Y SEGUROS</h4>
                </div>
                <p>Con PIX, tus pagos son instantáneos, seguros e irreversibles. Esto garantiza que tu negocio reciba los fondos al instante, mejorando así tu flujo de caja y facilitando una gestión financiera más eficiente</p>                
            </li>
        </ul>
    </div>
</section>
    
<section class="operar">
    <div class="container2">
        <h3 class="operar__title">¿CÓMO OPERAR <strong>CON KAMIPAY?</strong></h3>
        <div class="operar__grid">
            <div class="operar__column">
                <h3 class="operar__column-title">MIRÁ CÓMO COBRAR CON <strong>PIX PRESENCIAL CON QR:</strong></h3>
                <figure><span class="link show-presencial"><img src="assets/images/que-es/pix-presencial.webp" width="236" height="460" alt="Presencial"></span></figure>
                <!--<button class="btn show-presencial"><span>Ver video tutorial</span><img src="assets/images/que-es/icon-play.svg" width="39" height="39" alt="Play"></button>-->
            </div>
            <div class="operar__column">
                <h3 class="operar__column-title">MIRÁ CÓMO COBRAR CON <strong>PIX REMOTO CON LINK DE PAGO:</strong></h3>
                <figure><span class="link show-remoto"><img src="assets/images/que-es/pix-remoto.webp" width="236" height="459" alt="Remoto"></span></figure>
                <!--<button class="btn show-remoto"><span>Ver video tutorial</span><img src="assets/images/que-es/icon-play.svg" width="39" height="39" alt="Play"></button>-->
            </div>
        </div>
    </div>
</section>
    
<section class="porque">
    <div class="container2">
        <div class="porque__head">
            <h3 class="porque__title">¿Por qué usar PIX en Argentina para <strong>cobrar en reales a clientes de Brasil?</strong></h3>
            <figure class="porque__image"><img src="assets/images/que-es/porque.webp" srcset="assets/images/que-es/porque.webp 1x, assets/images/que-es/porque@2x.webp 2x, assets/images/que-es/porque@2x.webp 3x" width="337" height="228" alt="¿Por qué usar PIX?"></figure>
        </div>
        <ul class="porque__list">
            <li class="porque__list-item">Superamos el millón de transacciones de brasileños que pagaron con PIX a través de kamiPay.</li>
            <li class="porque__list-item">Más de 160 millones de personas adoptaron PIX como medio de pago principal en Brasil.</li>
            <li class="porque__list-item">Mejor tipo de cambio, similar al dólar libre.</li>
            <li class="porque__list-item">Está exento del 5% de impuesto IOF para el pagador brasileño.</li>
            <li class="porque__list-item">Tu cliente paga en reales por QR sin necesidad de buscar dólares o pesos en casas de cambio.</li>
            <li class="porque__list-item">Vendés más y cobrás en dólares, sin necesidad de manejar efectivo, gracias a un proceso seguro y digitalizado.</li>
            <li class="porque__list-item">Innová tu sistema de pagos, aumentá tus ventas conquistando el turismo de Brasil y además podés cobrar en dólares o pesos de forma inmediata.</li>
        </ul>
    </div>
</section>

<section class="contacto contacto-quees">
    <div class="container2">
        <div class="contacto-quees__content">
            <h3 class="contacto-quees__title"><strong>Más de 1.000 negocios ya confían en kamiPay.</strong></h3>
            <h4 class="contacto-quees__subtitle">No te quedes atrás, <strong>empezá a cobrar en dólares hoy.</strong></h4>
            <a href="https://calendly.com/juancruz-kamipay/30min?month=2024-09" target="_blank" class="btn">
                <span>AGENDÁ UNA <strong>LLAMADA</strong></span>
                <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M38.445 6.6788C34.3895 2.55249 28.7873 0 22.5989 0C10.2233 0 0.188148 10.2087 0.188148 22.8018C0.188148 26.9926 1.29895 30.9176 3.23651 34.2929L3.17922 34.1855L0 46L11.8781 42.8296C14.9705 44.5765 18.6592 45.6049 22.585 45.6049H22.5941C34.9697 45.5999 45 35.39 45 22.7981C45 16.504 42.4944 10.8076 38.4438 6.68126L38.445 6.67942V6.6788ZM22.5941 41.7528H22.585C19.0886 41.7528 15.8171 40.7711 13.0238 39.0635L13.1083 39.1114L12.428 38.7015L5.37971 40.5833L7.25939 33.5898L6.81615 32.8731C5.02995 30.0169 3.9686 26.5361 3.9686 22.8024C3.9686 12.3378 12.3068 3.85389 22.5923 3.85389C32.8777 3.85389 41.2159 12.3385 41.2159 22.8024C41.2159 33.2664 32.8789 41.751 22.5923 41.751H22.5935L22.5941 41.7528ZM32.8096 27.562C32.2499 27.2766 29.4971 25.9004 28.9845 25.709C28.4707 25.5187 28.0962 25.4255 27.7229 25.9961C27.3521 26.5655 26.2786 27.8479 25.9518 28.2277C25.6262 28.6099 25.2975 28.6554 24.7379 28.3719C23.0041 27.6571 21.5146 26.7048 20.2199 25.531L20.235 25.5451C19.0307 24.41 17.9977 23.1111 17.1643 21.6784L17.1221 21.5986C16.7965 21.0292 17.0877 20.7212 17.3663 20.4377C17.6178 20.1831 17.9272 19.772 18.2064 19.4406C18.4265 19.1664 18.6146 18.8516 18.7581 18.5141L18.7672 18.4877C18.8323 18.3546 18.8697 18.1994 18.8697 18.0337C18.8697 17.8331 18.8142 17.6453 18.7177 17.4858L18.7208 17.4907C18.579 17.2054 17.4604 14.4013 16.9949 13.26C16.5396 12.1495 16.0764 12.3016 15.7345 12.2826C15.4089 12.2673 15.035 12.2642 14.6611 12.2642C14.0653 12.2796 13.5364 12.5526 13.1716 12.9747L13.1698 12.9778C11.9607 14.1448 11.2099 15.7911 11.2099 17.6146C11.2099 17.6545 11.2099 17.6962 11.2117 17.7361V17.73C11.4089 19.9806 12.2381 22.0005 13.5141 23.6461L13.496 23.6234C15.9142 27.2723 19.1375 30.1918 22.9203 32.1583L23.062 32.2239C23.8882 32.6043 24.9465 33.0112 26.029 33.359L26.2539 33.4222C26.9203 33.637 27.6879 33.7616 28.484 33.7616C28.9405 33.7616 29.3897 33.7198 29.8239 33.6419L29.7769 33.648C31.3888 33.3063 32.7257 32.3166 33.541 30.9649L33.5549 30.9385C33.804 30.3771 33.9481 29.7224 33.9481 29.0333C33.9481 28.7498 33.924 28.4719 33.8769 28.2019L33.8818 28.2308C33.7431 27.9927 33.3692 27.8522 32.8084 27.565L32.8114 27.562H32.8096Z" fill="#00A686"/>
                </svg>
            </a>
            <h4 class="contacto-quees__form-title">Completá tus datos para activar kamiPay.</h4>
            <p>Es GRATIS, sin costos mensuales ni comisiones para tu negocio.</p>
        </div>
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
                <li><a href="rubros.php">Rubros</a></li>
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
    
<div class="modal presencial">
    <div class="modal-center">
        <div class="head">
            <button class="modal-close">x</button>
        </div>
        <div class="modal-body">
            <div class="video-wrapper">
            <video width="320" height="240" controls class="modal-video" id="video2">
                <source src="assets/videos/tutorial-pix-presencial-y-link-de-pago.mp4" type="video/mp4">
            </video>
            </div>
        </div>
    </div>
</div>
    
<div class="modal remoto">
    <div class="modal-center">
        <div class="head">
            <button class="modal-close">x</button>
        </div>
        <div class="modal-body">
            <div class="video-wrapper">
                <video width="320" height="240" controls class="modal-video" id="video3">
                    <source src="assets/videos/link-de-pago.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>
    
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