<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * The EmailSender class provides functionality to send emails using the PHPMailer library. 
 * It has a constructor that initializes the PHPMailer object and sets the server 
 * settings for sending emails.
 */
class EmailSender
{
    private $mail;

    /**
     * Initialize the PHPMailer object and set the server settings for sending emails.
     * If an error occurs during initialization, an exception is caught and an error message is displayed.
     */
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

    /**
     * The sendEmail() method is used to send an email. It takes the necessary parameters 
     * such as the sender's email and name, recipient's email and name, subject, and body of the email. 
     * It sets up the recipient and content of the email using the PHPMailer object
     * and attempts to send the email. If the email is sent successfully, it returns true. 
     * Otherwise, it catches any exceptions that occur and displays an error message, 
     * then returns false.
     */
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