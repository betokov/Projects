
<?php
$username = 'rock';
$password = 'roll';

if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password))
{
	
	header('HTTP/1.1 401 Unauthorized');
	header('WWW-Authenticate: Basic realm = "Admin panel"');
	exit('<h2>Админ панель</h2> Извините, вы должны ввести правильные логин и пароль, чтобы получить доступ к этой странице');
}
?>