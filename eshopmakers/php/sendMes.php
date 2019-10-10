<?php
$name = addslashes(trim($_REQUEST['name']));
$phone = addslashes(trim($_REQUEST['phone']));

$to = 'disktimka@gmail.com';
$subject = 'Нужно перезвонить клиенту';

$message = '
	<html>
	<head>
	  <title>Нужно перезвонить клиенту</title>
	</head>
	<body>';
$message .= '<div>Нужно перезвонить клиенту ' . $name . '<br>
		Номер телефона - ' . $phone . '</div>';
$message .= '</body>
	</html>
	';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $subject, $message, $headers);