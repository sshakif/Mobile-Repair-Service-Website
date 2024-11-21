<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectDevice = htmlspecialchars($_POST['flexRadioDefault']);
    $deviceBrand = htmlspecialchars($_POST['device_brand']);
    $deviceModel = htmlspecialchars($_POST['device_model']);
    $repairingNeed = htmlspecialchars($_POST['repairing_need']);
    $serialNumber = htmlspecialchars($_POST['serial_number']);
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $phone = htmlspecialchars($_POST['Phone']);
    $email = htmlspecialchars($_POST['email']);
    $name = $firstName." ".$lastName;

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
        $mail->addAddress('npra.quote@gmail.com', 'Recipient Name'); 
        $mail->addReplyTo($email, $name);
        $mail->Subject = 'Get a quote';
        $mail->isHTML(true);
        $mail->Body = "
            <html>
            <body>
            <p><strong>Selected device:</strong> $selectDevice</p>
            <p><strong>Device brand:</strong> $deviceBrand</p>
            <p><strong>Device model:</strong> $deviceModel</p>
            <p><strong>What need repairing:</strong> $repairingNeed</p>
            <p><strong>EMI/Serial number:</strong> $serialNumber</p>
            <p><strong>First name:</strong> $firstName</p>
            <p><strong>Last name:</strong> $lastName</p>
            <p><strong>Phone number:</strong> $phone</p>
            <p><strong>Email:</strong>$email</p>
            </body>
            </html>";
        $mail->AltBody = 'Get a quote: ' . $email;
        if ($mail->send()) {
            $_SESSION['message'] = 'Message has been sent successfully!';
            $_SESSION['message_type'] = 'success';  
            header("Location: quote.php");  
            exit;
        } else {

            $_SESSION['message'] = 'There was an error sending your message.';
            $_SESSION['message_type'] = 'error';
            header("Location: quote.php");  
            exit;
        }
    } catch (Exception $e) {
        $_SESSION['message'] = 'There was an error sending your message.';
        $_SESSION['message_type'] = 'error';
        header("Location: quote.php");  
    }
}
?>
