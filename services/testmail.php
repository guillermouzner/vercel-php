<?php

// Load Composer's autoloader
require '../vendor/autoload.php';

// Config + Mailer 
require '../config.php';
require '../helpers/configuration.php';
require '../helpers/mailer.php';

$config = new Configuration($configData);
$sender = new EmailSender($config);

$to = 'mzacarias77@gmail.com';
$subject = 'TEST MAIL KAMIPAY';
$body = '<p>Mail de prueba</p>';

if ($sender->sendEmail($to, $subject, $body)) {
    echo 'Correo enviado con éxito';
} else {
    echo 'Error al enviar correo';
}