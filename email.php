<?php

$msg_error = "";
if(!isset($_POST['name']) || !$_POST['name']){
    $msg_error .= "\nCampo nome é obrigatório.";
}

if(!isset($_POST['email']) || !$_POST['email']){
    $msg_error .= "\nCampo e-mail é obrigatório.";
} else {
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $msg .= "\nE-mail inválido.";
    }
}

if(!isset($_POST['message']) || !$_POST['message']){
    $msg_error .= "\nCampo mensagem é obrigatório.";
}

if($msg_error){

    header('Content-Type: application/json');
    $data['code'] = 500;
    $data['message'] = $msg_error;
    http_response_code($data['code']);
    echo json_encode($data);
    die;

}
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'assets/library/PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "sendemailotavio@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "qwer12345";

//Set who the message is to be sent from
$mail->setFrom('sendemailotavio@gmail.com', $_POST['name']);

//Set who the message is to be sent to
$mail->addAddress('otavio.moreira@leadforce.com.br');

//Set the subject line
$mail->Subject = 'Contato Owl Teste';

$mail->IsHTML(true);

//Replace the plain text body with one created manually
$msg = '<b>Nome:</b>' . $_POST['name'];
$msg .= ($_POST['state']) ? '<br> <b>UF:</b>' . $_POST['state'] : null;
$msg .= ($_POST['city']) ? '<br> <b>Cidade:</b>' . $_POST['city'] : null;
$msg .= '<br> <b>E-mail:</b>' . $_POST['email'];
$msg .= ($_POST['office']) ? '<br> <b>Cargo:</b>' . $_POST['office'] : null;
$msg .= '<br> <b>Mensagem:</b>' . $_POST['message'];
$mail->Body = $msg;


header('Content-Type: application/json');

//send the message, check for errors
if (!$mail->send()) {
    $data['code'] = 500;
    $data['message'] =  "Mailer Error: " . $mail->ErrorInfo;
} else {
    $data['code'] = 200;
    $data['message'] = "Mensagem enviada com sucesso.";
}

http_response_code($data['code']);
echo json_encode($data);