<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$name = $_POST["name"] ;
$cell = $_POST["cell"] ;
$email = $_POST["email"]; 
$dir = $_POST["dir"] ;

try {

   
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'enviar.correos.taxis@gmail.com';                     //SMTP username
    $mail->Password   = 'Temporal1';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('enviar.correos.taxis@gmail.com', 'Rtaxi correo');
    $mail->addAddress('judaropid1@gmail.com');     //Add a recipient
    


    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Solicitud de informacion conductores';
    $mail->Body    = 'Esta es la informacion: <br><br><br><br><br> <p>Nombre conductor: </p><br> <b>'.$name.'</b>'.
                    '<br><br> <p>Numero de contacto o whattsapp: </p><br> <b>'.$cell.'</b>'.
                    '<br><br> <p>Correo : </p><br> <b>'.$email.'</b>'.
                    '<br><br> <p>Direccion : </p><br> <b>'.$dir.'</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '1';
} catch (Exception $e) {
    echo "Message  Error: {$mail->ErrorInfo}";
}