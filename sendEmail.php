<?php
$email_to = 'contato@lamid.egc.ufsc.br';
$email_from = 'contato@lamid.egc.ufsc.br';
$subject = 'Objeto de aprendizagem - Piratas';
$message = 'Uso do Aluno x';
$headers = 'From: '.$email_from."\r\n" .
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo $headers;
//mail($email_to, $subject, $message, $headers);

?>