<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class EmailSender {
    private $mail;

    public function __construct($config) {
        $this->mail = new PHPMailer(true);        

        $this->mail->isSMTP();
        // $this->mail->SMTPDebug = SMTP::DEBUG_SERVER; 
        $this->mail->Host = $config->getValue('MAIL_HOST');
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $config->getValue('MAIL_USERNAME');
        $this->mail->Password = $config->getValue('MAIL_PASSWORD');
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Port = $config->getValue('MAIL_PORT');
    }

    public function sendEmail($to, $subject, $body, $from = null, $fromName = null) {
        try {
            $this->mail->setFrom($from ?? $this->mail->Username, $fromName ?? '');
            $this->mail->addAddress($to);

            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body = $body;

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            echo "Error al enviar correo: {$e->getMessage()}";
            return false;
        }
    }
}
