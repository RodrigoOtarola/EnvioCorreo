<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$comentarios = $_POST['comentarios'];

//Create an instance; passing `true` enables exceptions

//Server settings                     //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host = 'mail.rotarola.cl';                     //Set the SMTP server to send through
$mail->SMTPAuth = true;                                   //Enable SMTP authentication
$mail->Username = 'contacto@rotarola.cl';                     //SMTP username
$mail->Password = 'contacto1234';                               //SMTP password
$mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
$mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('contacto@rotarola.cl', 'Mailer');
$mail->addAddress($email, $nombre);     //Add a recipient
//$mail->addAddress('ellen@example.com');               //Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');


//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Estimado ' . $nombre;
$mail->Body = 'Hola este es un mensaje de prueba <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Error, mensaje no enviado';
    echo 'Error del mensaje: ' . $mail->ErrorInfo;
} else {
    echo 'El mensaje se ha enviado correctamente';
    header("location:form.php");
}

