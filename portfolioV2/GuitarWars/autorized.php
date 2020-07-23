<?php 

$username = 'admin';
$password = 'admin';

if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)){

	header('HTTP/1.1 401 Unauthorized');
	header('WWW-Authenticate: Basic realm="Гитарные войны"');
	exit('<h2>Гитарные войны</h2> Извините, вы должны ввести правильные имя пользователя и пароль, чтобы получить доступ к админ панеле <br><br> <a href="./" style="text-decoration:none; font-size:20px">&lt;&lt; На главную</a>');
}


 ?>