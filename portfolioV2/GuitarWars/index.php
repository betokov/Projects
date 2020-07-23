<?php 
	$title = 'Список рейтингов';
	require_once('includes/header.php');
	require_once('includes/header-top.php');

 ?>
		
	<div class="content">
		<div class="container">
			<div class="list-ratings">

				<p>Добро пожаловать, гитарный воин! <br>Твой рейтинг бьет рекорд, зарегистрированный в этом списке рейтингов? <br>Если так, просто <a href="addscore.php">добавь свой рейтинг</a> в список.</p>

				<?php 

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Ошибка соединения");
				mysqli_select_db($dbc, DB_NAME) or die("Ошибка выбора базы данных");
				
				$query = "SELECT * FROM guitarwars WHERE approved = 1 ORDER BY score DESC, 'date' ASC";
				
				$result = mysqli_query($dbc, $query) or die("Ошибка запроса1");
				
				if(mysqli_num_rows($result) == 0){
					echo "<h2>Список рейтингов пустой</h2>";
				}
				$i = 0;
				
				while($row = mysqli_fetch_array($result)){

					if($i == 0){
						echo '<span class="topscoreheader">Наивысший рейтинг: '.$row['score'].'</span><br><br>';
					}


					echo '<div class="list-block"><span class="score">'.$row['score'].'</span><br>';
					echo '<strong>Имя: </strong>'.$row['name'].'<br>';
					echo '<strong>Дата: </strong>'.$row['date'].'<br>';

					if(is_file(GW_UPLOADPATH . $row['screenshot']) && filesize(GW_UPLOADPATH . $row['screenshot']) > 0){
						echo '<img src="'. GW_UPLOADPATH . $row['screenshot'] .'" class="img-responsive" alt="Подтверждено" class="list-img"></div>';
					}else{
						echo '<img src="img/unverified.gif" alt="Не подтверждено"></div>';
					}


					$i++;

				}
				
				mysqli_close($dbc);
				?>

			</div>
		</div>
	</div>
	<?php 

	require_once('includes/footer.php');

	 ?>