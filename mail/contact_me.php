<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check for empty fields
if (empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
// Create the email and send the message
$email_subject = "Website Contact formulier:  $name";
$email_body = "<p>U hebt een nieuw bericht ontvangen via uw website contact formulier.</p>" . "<p>Hier zijn de details:</p><p>Naam: $name</p><p>Email: $email_address</p><p>Gsm: $phone</p><p>Bericht: $message</p>";

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'email';             // SMTP username
    $mail->Password   = 'pass';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply@DN.com', 'DN bouwwerken');
    $mail->addAddress('email', 'Alex');     // Add a recipient
    $mail->addAddress('email', 'DN Bouwwerken');               // Name is optional
    $mail->addReplyTo('email', 'DN Bouwwerken');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $email_subject;
    $mail->Body    = $email_body;
    $mail->AltBody = $email_body;

    $mail->send();
    echo 'Message has been sent';
    return true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    return false;
}
?>
