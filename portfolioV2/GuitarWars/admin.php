<?php 
$title = 'Админ панель';
require_once('autorized.php');
require_once('includes/header.php');
require_once('includes/header-top.php');

?>

<div class="container">
	<div class="content">
		<h2>Гитарные войны. <?php echo $title; ?></h2><br>
		<?
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Ошибка соединения");
		mysqli_select_db($dbc, DB_NAME) or die("Ошибка выбора базы данных");
		mysqli_query($dbc, "SET NAMES utf8");

		$query = "SELECT * FROM guitarwars ORDER BY score DESC";
		$result = mysqli_query($dbc, $query) or die("Ошибка запроса 1");

		echo '<table>';

		while($row = mysqli_fetch_array($result)){

			echo '<tr><td><strong>'.$row['name'].'&nbsp;&nbsp;</strong> </td><td>'.$row['date'].'&nbsp;&nbsp;</td><td><i>'.$row['score'].' </i></td>';
			echo '<td><a href="removescore.php?id='.$row['id'].'&amp;date='.$row['date'].'&amp;name='.$row['name'].'&amp;score='.$row['score'].'&amp;screenshot='.$row['screenshot'].'">&nbsp;&nbsp;Удалить</a>';
			if($row['approved'] == 0){

				echo '/ <a href="approvescore.php?id='.$row['id'].'&amp;date='.$row['date'].'&amp;name='.$row['name'].'&amp;score='.$row['score'].'&amp;screenshot='.$row['screenshot'].'">Санкционировать</a>';

			}
			echo '</td></tr>';

		}


		echo '</table>';

		mysqli_close($dbc);



		?>
		<br>
		<a href="/GuitarWars">&lt;&lt; На главную</a>
	</div>
</div>

<?php 
require_once('includes/footer.php');
?>