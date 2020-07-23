<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require './PHPMailer/vendor/autoload.php';

    $firstname = trim($_POST['firstname']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $msg = "Имя: $firstname <br>Email: $email.<br>Соообщение: $message";
    $subject = 'Письмо пришло с сайта boka.pw';
    $to = "betokov93@mail.ru";
    $from = "betokov93@gmail.com";
    $error = "";

if(!empty($firstname) && !empty($email) && !empty($message)){

// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
    //Server settings
	$mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'betokov93@gmail.com';                     // SMTP username
    $mail->Password   = 'w5]4=^R8';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($from, 'boka.pw');//От кого
    $mail->addAddress($to, 'Betokov Barasbi');     //куда точно попадет письмо
    //$mail->addAddress('betokov93@gmail.com');               // Name is optional
    $mail->addReplyTo('betokov93@gmail.com', 'Обратная связь');//куда письмо сначало пошлется но не попадет
    //$mail->addCC('betokov93@gmail.com');
    //$mail->addBCC('betokov93@gmail.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $msg;

    $mail->send();

} catch (Exception $e) {
	$error = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

$myPost = $_POST;
$result = ['sucess' => 1, 'message' => 'Hi there, its just a test!', 'myPost' => $myPost, 'error' => $error];
die(json_encode($result));
?>