<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender
{
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        try {
            // Server settings
            $this->mail->isSMTP();
            $this->mail->Host = 'smtp.gmail.com';
            $this->mail->SMTPAuth = true;
            $this->mail->SMTPSecure = 'tls';
            $this->mail->Port = 587;
        } catch (Exception $e) {
            echo "Error initializing email sender: {$this->mail->ErrorInfo}";
        }
    }

    public function sendEmail($senderEmail, $senderName, $recipientEmail, $recipientName, $subject, $body)
    {
        try {
            // Recipients
            $this->mail->setFrom($senderEmail, $senderName);
            $this->mail->addAddress($recipientEmail, $recipientName);

            // Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body = $body;
            $this->mail->send();
            return true;
        } catch (Exception $e) {
            echo "Error initializing email sender: {$this->mail->ErrorInfo}";
        }
    }
}