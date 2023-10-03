<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; // Include PHPMailer library

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["email"]; //the email to which the message will be sent
    $subject = "Please confirm your email";
    $message = "Please click on the link below to confirm your email address: \n\n";
    $link = "http://localhost/register/confirm.php?email=$to&key=$confirmationKey";

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'mailhog'; // Your SMTP server hostname
        $mail->SMTPAuth = true;
        $mail->Username = 'user';
        $mail->Password = 'password';
        $mail->Port = 1025;

        //Recipients
        $mail->setFrom('no-reply@haarlem-zoo.nl', 'Haarlem Zoo');
        $mail->addAddress($to);

        //Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $message . $link;

        if ($mail->send()) {
            header("Location: mail_sent.php");
        }
    } catch (Exception $e) {
        echo "Email sending failed. Error: {$mail->ErrorInfo}";
    }
}
