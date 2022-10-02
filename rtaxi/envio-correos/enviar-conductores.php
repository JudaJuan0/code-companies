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
$last_name = $_POST["last_name"] ;
$years = $_POST["years"]; 
$cc = $_POST["cc"] ;
$email = $_POST["email"] ;
$phone = $_POST["phone"] ;

try {

   
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // *******************Pruebas*******************//
    $mail->Username   = 'enviar.correos.taxis@gmail.com';                     //SMTP username
    $mail->Password   = 'Temporal1';                               //SMTP password
    

    // *******************Produccion*******************//
    // $mail->Username   = 'rtaconductores1@gmail.com';                     //SMTP username
    // $mail->Password   = 'Rta12345';                               //SMTP password


    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('enviar.correos.taxis@gmail.com', 'Rtaxi correo');
    // $mail->addAddress('rtaconductores1@gmail.com');     //Add a recipient
    $mail->addAddress('judaropid1@gmail.com');     //Add a recipient
    


    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Solicitud de informacion conductores';
    $mail->AddEmbeddedImage("../images/logo.png", "url-logo");
    $mail->Body    = '<div style="background-color: #e9eaeb; text-align: center; width: 100%;">'.
                    '   <img src="cid:url-logo" alt="logo-rtaxi" style="width: 250px;padding: 40px;">'.
                 '   </div>'.
                 '   <div style="background-color: #fff; text-align: center; font-family: Arial, Helvetica, sans-serif; color: #575a5b;padding: 30px 200px;">'.
                    '   <h1 style="font-size: 40px;"><b> &iexcl;ESTOS SON LOS DATOS ENVIADOS A NUESTRO SISTEMA!</b></h1>'.
                 '   </div>'.
                 '   <div style="background-color: #e9eaeb; text-align: center; width: 100%;color: #575a5b;">'.
                     '   <ul style="list-style:none;">'.
                         '   <li style="padding: 5px 0;"> <b style="font-family: Arial, Helvetica, sans-serif;font-size: 35px;color: #e62830;">Nombre:</b> <b style="font-family: Arial, Helvetica, sans-serif;font-size: 30px;padding: 0 20px;">'.$name.'</b></li>'.
                         '   <li style="padding: 5px 0;"> <b style="font-family: Arial, Helvetica, sans-serif;font-size: 35px;color: #e62830;">Apellidos:</b><b style="font-family: Arial, Helvetica, sans-serif;font-size: 30px;padding: 0 20px;">'.$last_name.'</b></li>'.
                         '   <li style="padding: 5px 0;"> <b style="font-family: Arial, Helvetica, sans-serif;font-size: 35px;color: #e62830;">Edad:</b><b style="font-family: Arial, Helvetica, sans-serif;font-size: 30px;padding: 0 20px;">'.$years.'</b></li>'.
                         '   <li style="padding: 5px 0;"> <b style="font-family: Arial, Helvetica, sans-serif;font-size: 35px;color: #e62830;">C&eacute;dula</b><b style="font-family: Arial, Helvetica, sans-serif;font-size: 30px;padding: 0 20px;">'.$cc.'</b></li>'.
                         '   <li style="padding: 5px 0;"> <b style="font-family: Arial, Helvetica, sans-serif;font-size: 35px;color: #e62830;">E-mail:</b><b style="font-family: Arial, Helvetica, sans-serif;font-size: 30px;padding: 0 20px;">'.$email.'</b></li>'.
                         '   <li style="padding: 5px 0;"> <b style="font-family: Arial, Helvetica, sans-serif;font-size: 35px;color: #e62830;">N&uacute;mero de T&eacute;lefono:</b><b style="font-family: Arial, Helvetica, sans-serif;font-size: 30px;padding: 0 20px;">'.$phone.'</b> <br></li>'.
                     '   </ul>'.
                    '</div> <br>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '1';
} catch (Exception $e) {
    echo "Message  Error: {$mail->ErrorInfo}";
}