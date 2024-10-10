<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class="contacto__grid">
    <div class="contacto__column">
        <h3 class="contacto__title"><strong>¿Preguntas o comentarios?</strong> ¡Contactanos!</h3>
        <div class="contacto__social">
            <p class="contacto__social-text">Seguinos en nuestras redes sociales</p>
            <ul class="contacto__social-redes">
                <li><a href="https://www.facebook.com/kamiPay.io/" target="_blank"><img src="assets/images/iconos/icon-facebook.svg" width="35" height="35" alt="Facebook" title="Facebook"></a></li>
                <li><a href="https://www.instagram.com/kamipay_io/" target="_blank"><img src="assets/images/iconos/icon-instagram.svg" width="35" height="35" alt="Instagram" title="Instagram"></a></li>
                <li><a href="https://twitter.com/kamipay_io" target="_blank"><img src="assets/images/iconos/icon-x.svg" width="35" height="35" alt="X" title="X"></a></li>
                <li><a href="https://www.linkedin.com/company/kamipay/" target="_blank"><img src="assets/images/iconos/icon-linkedin.svg" width="35" height="35" alt="Linkedin" title="Linkedin"></a></li>
            </ul>
        </div>
        <div class="contacto__info">
            <h4 class="contacto__info-title">Atención a clientes</h4>
            <ul>
                <li>Correo: <strong><a href="mailto:info@kamipay.io" target="_blank">info@kamipay.io</a></strong></li>
                <li>Teléfono: <strong><a href="https://walink.co/5e95a6" target="_blank">+54 9 11 7360-5795</a></strong></li>
            </ul>
            <a href="https://calendly.com/juancruz-kamipay/30min" target="_blank" class="btn">Agendá una llamada</a>
        </div>
    </div>
    <div class="contacto__form">
        <h3 class="contacto__title"><strong>¿Preguntas o comentarios?</strong> ¡Contactanos!</h3>
        <form id="contacto__form" data-key="<?php echo $mkey = md5($key); ?>">
            <div class="contacto__form-field">
                <input type="text" placeholder="Nombre" name="nombre" id="name" class="contacto__form-input">
            </div>
            <div class="contacto__form-field">
                <input type="email" placeholder="Email" name="email" id="email" class="contacto__form-input">
            </div>
            <!--<div class="contacto__form-field">
                <input type="text" placeholder="Asunto" class="contacto__form-input">
            </div>-->
            <div class="contacto__form-field">
                <textarea placeholder="Mensaje" name="mensaje" id="message" rows="1" class="contacto__form-textarea"></textarea>
            </div>
            <div class="g-recaptcha" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired" data-sitekey="<?php echo $recaptcha_html_key ?>"></div>
            <input id="hidden-grecaptcha" name="hidden-grecaptcha" placeholder="" type="text" style="opacity: 0; position: absolute; top: 0; left: 0; height: 1px; width: 1px;"/>
            <!--<div class="contacto__form-field-captcha">
                <img src="assets/images/home/fake-captcha.png" width="302" height="76" alt="Captcha">
            </div>-->
            <div class="contacto__form-field-btn" style="margin-top:5px">
                <input id="btn-send" type="submit" value="Enviar" class="contacto__form-btn">                
            </div>
        </form>
    </div>
</div>

<div class="modal gracias">
    <div class="close-trigger"></div>
    <div class="modal-center">
        <div class="head">
            <button class="modal-close">x</button>
        </div>
        <div class="modal-body">
            <h4 class="gracias__title">Gracias por contactarte.</h4>
            <p class="gracias__text">Te responderemos a la brevedad.</p>
        </div>
    </div>
</div>
