<?php 
$title = 'Санкционирование рейтинга';
require_once('autorized.php');
require_once('includes/header.php');
require_once('includes/header-top.php');

?>


<div class="container">
	<div class="content">

		<h2>Гитарные войны. <?php echo $title; ?></h2><br>


		<?php

		if(isset($_GET['id']) && isset($_GET['date']) && isset($_GET['name']) && isset($_GET['score']) && isset($_GET['screenshot'])){

			$id = $_GET['id'];
			$date = $_GET['date'];
			$name = $_GET['name'];
			$score = $_GET['score'];
			$screenshot = $_GET['screenshot'];

		}
		else if(isset($_POST['id'])){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$score = $_POST['score'];
		}
		else{
			echo '<p class="error">Извините ниодного рейтинга не выбрано для санкционирования</p>';
		}

		if(isset($_POST['submit'])){

			if($_POST['confirm'] == 'yes'){

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Ошибка соединения");
				mysqli_select_db($dbc, DB_NAME) or die("Ошибка выбора базы данных");
				mysqli_query($dbc, "SET NAMES utf8") or die("Ошибка кодировки");
				$query = "UPDATE guitarwars SET approved = 1 WHERE id = $id";

				mysqli_query($dbc, $query);
				mysqli_close($dbc);

				echo '<p>Рейтинг со значением '.$score.' для пользователя '.$name.' был успешно cанкционирован</p>';

			}
			else{
				echo 'Рейтинг не был санкционирован';
			}

		}
		else if(isset($id) && isset($date) && isset($name) && isset($score) && isset($screenshot)){

			echo '<p>Вы хотите санкционировать этот рейтинг?</p>';
			echo '<p><strong>Имя: </strong>'.$name.'<br><strong>Дата: </strong>'.$date.'<br><strong>Рейтинг: </strong>'.$score.'<br><br>
			<img src="'.GW_UPLOADPATH.$screenshot.'" alt="Изображение рейтинга">
			</p><br>';
			echo '<form action="approvescore.php" method="post">';
			echo '<input type="radio" name="confirm"value="yes" checked>Да ';
			echo '<input type="radio" name="confirm"value="no">Нет<br><br>';
			echo '<input type="submit" name="submit" value="Санкционировать">';
			echo '<input type="hidden" name="id" value="'.$id.'">';
			echo '<input type="hidden" name="name" value="'.$name.'">';
			echo '<input type="hidden" name="score" value="'.$score.'">';
			echo '</form>';
		}

		echo '<br><p><a href="admin.php">&lt;&lt; Назад к списку рейтингов</a></p>';


		?>

	</div>
</div>
<?php 
require_once('includes/footer.php');
?>