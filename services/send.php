<?php
header('Content-Type: application/json');

// Load Composer's autoloader
require '../vendor/autoload.php';

// Config + Mailer 
require '../config.php';
require '../helpers/configuration.php';
require '../helpers/mailer.php';
require '../helpers/response.php';

$response = new Response();
$config = new Configuration($configData);

if (!isset($_COOKIE['form-key'])) {
    // no esta seteada la sesion, no hacemos nada 
    $response->send(500, array(
        "result" => "Session Server Error"            
    ));    
}

$ckey = $_COOKIE['form-key']; 

$isValidRequest = true; 

if (!isset($_POST['key'])) $isValidRequest = false;
if (!isset($_POST['name'])) $isValidRequest = false;
if (!isset($_POST['email'])) $isValidRequest = false;
if (!isset($_POST['message'])) $isValidRequest = false;
if (!isset($_POST['recaptcha'])) $isValidRequest = false;

if ($isValidRequest) {
    if ($_POST['key'] == "") $isValidRequest = false;
    if ($_POST['name'] == "") $isValidRequest = false;
    if ($_POST['email'] == "") $isValidRequest = false;    
    if ($_POST['recaptcha'] == "") {
        $isValidRequest = false;    
    }
    else {
        $recaptchaSecret = $config->getValue('RECAPTCHA_SERVER_KEY');
        $recaptchaResponse = $_POST['recaptcha'];
    
        $responseCaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
        $responseData = json_decode($responseCaptcha);
        
        if (!$responseData->success) {
            $isValidRequest = false;
        }
    }
}

if ($isValidRequest) 
{
    $key = $_POST['key']; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($key == md5($ckey))  
    {
        $sender = new EmailSender($config);

        $subject = 'Contacto Web KamiPay';
        $to = $config->getValue('MAIL_TO');
        $body = "<p>Nombre: " . $name . "</p>" . 
        "<p>E-Mail: " . $email . "</p>" . 
        "<p>Mensaje: " . $message . "</p>";

        if ($sender->sendEmail($to, $subject, $body)) {            
            $response->send(200, array(
                "result" => "OK"            
            ));
        } else {            
            $response->send(500, array(
                "result" => "Error sending email"            
            ));
        }
    }
    else {        
        $response->send(401, array(
            "result" => "Unauthorized"            
        ));
    }
}
else {
    $response->send(400, array(
        "result" => "Bad request"            
    ));
}
