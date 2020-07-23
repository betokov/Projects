<?php 

$firstname = trim($_POST['firstname']);
$email = trim($_POST['email']);
$title = trim($_POST['title']);
$message = trim($_POST['message']);


if(!empty($firstname) && !empty($email) && !empty($title) && !empty($message)){

	$to = 'betokov93@mail.ru';
	$subject = 'С сайта blog.skysoul.ru';
	$msg = " Имя: $firstname; \n Тема сообщения: $title; \n Email: $email; \n Сообщение: $message.";
	$from = 'С сайта blog.skysoul.ru';

	mail($to, $subject, $msg, $from);

}

?>