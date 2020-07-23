<?php
ob_start();
require_once('authorized.php');
$page = 'Беговые дорожки';

require_once('connect.php');
require_once('app.php');
?>
<body>
<div id="main">
<h1>Админ панель</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" size="4000000">
	
<table>
	<tr>

	<td><label>Страница:</label><select name="page">
	<option value="run_trainers">Беговая дорожка(img - 40kb(200x200))</option>
	</select></td>

	</tr>
	<tr>

	<td><label>Название:</label><input type="text" name="firstname"></td>

	</tr>
	<tr>

	<td><label>Cкорость:</label><input type="text" name="speed"></td>

	</tr>
	<tr>

	<td><label>Полотно:</label><input type="text" name="background"></td>

	</tr>

<tr>

	<td><label>Вес:</label><input type="text" name="heft"></td>

	</tr>
	<tr>

	<td><label>Мощность:</label><input type="text" name="power"></td>

	</tr>

<tr>

	<td><label>Изображение:</label><input type="file" name="screenshot"></td>

	</tr>
<tr>

	<td><label>Цена:</label><input type="text" name="price"></td>

	</tr>
	<tr>

	<td><input type="submit" name="submit" value="Отправить"></td>

	</tr>
	</table>

	</form>
	
	<?php
	
	if(isset($_POST['submit'])){
		$first_name = $_POST['firstname'];
		$speed = $_POST['speed'];
		$background = $_POST['background'];
		$heft = $_POST['heft'];
		$power = $_POST['power'];
		$screenshot = $_FILES['screenshot']['name'];
		$screenshot_size = $_FILES['screenshot']['size'];
		$screenshot_type = $_FILES['screenshot']['type'];
		$price = $_POST['price'];
		

		
		 
		 if (!empty($first_name) && !empty($speed) && !empty($background) && !empty($heft) && !empty($power) && !empty($screenshot) && !empty($price)){
	
	$target = UPLOAD . $screenshot;
	
	if(move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)){
	
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Ошибка подключения к базе данных');
mysqli_query($dbc, "SET NAMES 'utf-8'");
$query = "INSERT INTO run_trainers (first_name, speed, background, heft, power,  screenshot, price) VALUES('$first_name', '$speed', '$background', '$heft', '$power', '$screenshot', '$price')";
$result = mysqli_query($dbc, $query);

mysqli_close($dbc);	
}
		 }		
		
	}
	
	?>
	
</div>
</body>
</html>