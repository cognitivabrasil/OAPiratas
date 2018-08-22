<?php
$email_to = 'contato@lamid.egc.ufsc.br';
$email_from = 'contato@lamid.egc.ufsc.br';
$subject = 'Objeto de aprendizagem - Piratas';
$message = 'Questionários respondidos:';
$message .= $_POST['texto'];
$headers = 'From: '.$email_from."\r\n" .
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo $message;
//mail($email_to, $subject, $message, $headers);

?>