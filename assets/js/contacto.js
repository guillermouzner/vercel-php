$(document).ready(function() {

    window.recaptchaCallback = function() {
        var response = grecaptcha.getResponse(),
            $button = jQuery(".button-register");
        jQuery("#hidden-grecaptcha").val(response);
        if (jQuery("#contacto__form").valid()) {
            $button.attr("disabled", false);
        }
        else {
            $button.attr("disabled", "disabled");
        }
    }
    window.recaptchaExpired = function() {
        var $button = jQuery(".button-register");
        jQuery("#hidden-grecaptcha").val("");
        var $button = jQuery(".button-register");
        if (jQuery("#contacto__form").valid()) {
            $button.attr("disabled", false);
        }
        else {
            $button.attr("disabled", "disabled");
        }
    }

    $("#contacto__form").validate({
        rules: {
            nombre: "required",
            email: {
                required: true,
                email: true
            },
            mensaje: "required",
            "hidden-grecaptcha": {
              required: true,
              minlength: "255"
            }
        },
        messages: {
            nombre: "Por favor, completá tu nombre",
            email: "Por favor, utilizá una dirección de email válida",
            mensaje: "Por favor, escribí un breve mensaje",
            "hidden-grecaptcha": "Por favor, completá el reCAPTCHA"
        },
        submitHandler: function(form) {            

            $("#btn-send").val("Enviando...");

            var data = {
                key: $("#contacto__form").attr("data-key"),
                name: $("#name").val(),
                email: $("#email").val(),
                message: $("#message").val(),
                recaptcha: grecaptcha.getResponse()
            };

            $.post(base_url + "services/send.php", data)
            .done(function(data) {
                $(".gracias").slideDown();
                $("body").addClass("noscroll");
                $("#contacto__form").trigger("reset");
                $("#btn-send").val("Enviar");
            })
            .fail(function(e) {
                alert("No se pudo enviar el mensaje. Por favor intenta nuevamente en unos instantes.")
            });            
        }
    });
    
});