<?php 
$title = 'Удаление рейтинга';
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
		else if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['score']) && isset($_POST['screenshot'])){

			$id = $_POST['id'];
			$name = $_POST['name'];
			$score = $_POST['score'];
			$screenshot = $_POST['screenshot'];

		}
		else{
			echo '<p class="error">Извините ниодного рейтинга не выбрано для удаления</p>';
		}

		if(isset($_POST['submit'])){

			if($_POST['confirm'] == 'yes'){

				@unlink(GW_UPLOADPATH.$screenshot);

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Ошибка соединения");
				mysqli_select_db($dbc, DB_NAME) or die("Ошибка выбора базы данных");
				mysqli_query($dbc, "SET NAMES utf8");
				$query = "DELETE FROM guitarwars WHERE id = $id LIMIT 1";
				mysqli_query($dbc, $query) or die("Ошибка запроса 1");

				mysqli_close($dbc);

				echo '<p>Рейтинг со значением '.$score.' для пользователя '.$name.' был успешно удален из базы</p>';
			}else{
				echo '<p class="error">Рейтинг не удален.</p>';
			}

		}else if(isset($id) && isset($date) && isset($name) && isset($score) && isset($screenshot)){

			echo '<p>Вы уверены что хотите удалить тот рейтинг?</p>';
			echo '<p><strong>Имя: </strong>'.$name.'<br><strong>Дата: </strong>'.$date.'<br><strong>Рейтинг: </strong>'.$score.'</p>';
			echo '<form action="removescore.php" method="post">';
			echo '<br><input type="radio" name="confirm"value="yes">Да ';
			echo '<input type="radio" name="confirm"value="no">Нет<br><br>';
			echo '<input type="submit" name="submit" value="Удалить">';
			echo '<input type="hidden" name="id" value="'.$id.'">';
			echo '<input type="hidden" name="name" value="'.$name.'">';
			echo '<input type="hidden" name="screenshot" value="'.$screenshot.'">';
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