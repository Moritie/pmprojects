<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php
$msg  = $_REQUEST['message'];
echo $msg;
/* Destinataire (votre adresse e-mail) */
$email='infos@pm-projects.net';
$to = $email;

$email1=' infos@sigec.net';
 
/* Construction du message */
$msg  = $_REQUEST['message'];
$name = $_REQUEST['name'];
$expediteur= $_REQUEST['email'];
$sujet='';
/* En-têtes de l'e-mail */
$headers = 'From: '.$name.' <'.$expediteur.'>'."\r\n\r\n";
 
/* Envoi de l'e-mail */
mail($to, $sujet, $msg, $headers);
mail($email1, $sujet, $msg, $headers);

?>
</body>
</html>
