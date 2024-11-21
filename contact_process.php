<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $massage = htmlspecialchars($_POST['massage']);
    require_once './vendor/autoload.php'; 
    $mail = new PHPMailer(true); 

    try {
        $mail = new PHPMailer();
        $mail->isSMTP();  
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;  
        $mail->Port = 587;  
        $mail->Username = 'npra.feedback@gmail.com';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Password = 'ybyzbivlccdwdecd';  
        $mail->setFrom($email, $name);  
        $mail->addAddress('npra.feedback@gmail.com', 'Recipient Name'); 
        $mail->addReplyTo($email, $name);
        $mail->Subject = $subject;
        $mail->isHTML(true);
        $mail->Body = "
            <html>
            <body>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone number:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Messager:</strong> $massage</p>
            </body>
            </html>";
        $mail->AltBody = 'Get a quote: ' . $email;
        if ($mail->send()) {
            $_SESSION['message'] = 'Message has been sent successfully!';
            $_SESSION['message_type'] = 'success';  
            header("Location: contact.php");  
            exit;
        } else {

            $_SESSION['message'] = 'There was an error sending your message.';
            $_SESSION['message_type'] = 'error';
            header("Location: contact.php");  
            exit;
        }
    } catch (Exception $e) {
        $_SESSION['message'] = 'There was an error sending your message.';
        $_SESSION['message_type'] = 'error';
        header("Location: contact.php");  
    }
}
?>
