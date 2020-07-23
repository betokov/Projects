<?php 
$title = 'Добавьте свой рейтинг';
require_once('includes/header.php');
require_once('includes/header-top.php');
$form_true = true;
?>
<div class="content">
	<div class="container">

		<h2>Гитарные войны. <?php echo $title; ?></h2><br>

		<?php 

		if(isset($_POST['submit'])){

			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Ошибка соединения");
			mysqli_select_db($dbc, DB_NAME) or die("Ошибка выбора базы данных");
			mysqli_query($dbc, "SET NAMES utf8") or die("Ошибка кодировки");
			$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
			$score = mysqli_real_escape_string($dbc, trim($_POST['score']));
			$screenshot = mysqli_real_escape_string($dbc, trim($_FILES['screenshot']['name']));
			$screenshot_type = $_FILES['screenshot']['type'];
			$screenshot_size = $_FILES['screenshot']['size'];


			if(!empty($name) && is_numeric($score) && !empty($screenshot)){

				if( (($screenshot_type == 'image/jpeg') || ($screenshot_type == 'image/png') || ($screenshot_type == 'image/gif')) && ($screenshot_size > 0) &&  ($screenshot_size <= GW_MAXFILESIZE)){

					if($_FILES['screenshot']['error'] == 0){

				//Перенаправление временного пути изображение--------------------

						$target = GW_UPLOADPATH . $screenshot;

						if(move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)){

			//---------------------------------------------------------------

							$query = "INSERT INTO guitarwars (id, date, name, score, screenshot) VALUES(0, NOW(), '$name', '$score', '$screenshot')";

							$result = mysqli_query($dbc, $query) or die("Ошибка запроса1");

			//Вывод пользователю подтверждения
							echo '<br><br>';
							echo '<div class="list-block"><p>Спасибо за то, что добавили свой рейтинг</p>';
							echo '<p><strong>Имя: </strong>'.$name.'<br>';
							echo '<strong>Рейтинг: </strong>'.$score.'</p>';
							echo '<br><img src="'.GW_UPLOADPATH.$screenshot.'" class="img-responsive" alt="Мой рейтинг"><br><br>';
							echo '<p><a href="/GuitarWars">&lt;&lt; Назад к списку рейтингов</a></p></div>';

							$name = "";
							$score = "";
							$screenshot = "";
							$form_true = false;

						}else{
							echo '<p class="error">Извините, возникла ошибка при загрузке файла изображения</p> ';
						}
					}
				}else{
					echo '<p class="error">Файл подтверждающий рейтинг, должен быть файлом изображения в форматах Jpg, PNG или Gif и его размер не должен превышать '.(GW_MAXFILESIZE/1024).'Кб</p> ';
				}


			//Попытка удаления временного файла изображения
				@unlink($_FILES['screenshot']['tmp_name']);

			}else{

				echo '<p class="error">Введите, пожалуйста, всю информацию в том числе рейтинг(число), необходимую для добавления вашего рейтинга</p>';

			}

			mysqli_close($dbc);

		}

		if($form_true){
			?>

			<!-- FORM -->

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo GW_MAXFILESIZE ?>">
				<label for="name">Имя:</label>
				<input type="text" name="name" value="<?php if(!empty($name)) echo $name; ?>"><br>
				<label for="score">Рейтинг:</label>
				<input type="text" name="score" value="<?php if(!empty($score)) echo $score; ?>"><br>
				<label for="screenshot">Изображение: </label><input type="file" name="screenshot"><br><br>
				<input type="submit" name="submit" value="Добавить">
			</form>
			<br><a href="/GuitarWars">&lt;&lt; На главную</a>
			<?php } ?>
		</div>
	</div>

	<?php 

	require_once('includes/footer.php');

	?>