<?php
$page = 'Беговая дорожка MaxFit';
require_once('app.php');
require_once('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cпорт - Сервис/<?php echo $page; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--ЗАСТАВЛЯЕТ РАННИЕ ВЕРСИИ INTERNET EXPLORER РАСПОЗНАВАТЬ ТЕГИ HTML5 И ПРИМЕНЯТЬ К НИМ CSS-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/FF-style.css">
<link rel="stylesheet" href="css/Safari-style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css">
<!--[if IE]>
  <link rel="stylesheet" type="text/css" href="css/IE-style.css" />
  <![endif]-->
  <!-- JS BLOCK -->
  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/main.js"></script>
  <script src="libs/owl.carousel/owl.carousel.js"></script>
</head>
<body>
	<div id="container">
		<?php 
		require_once('header.php');
		?>


		<div id="top_menu">
			<ul>
				<li><a href="#">ГЛАВНАЯ</a></li>
				<li><a href="#">О НАС</a></li>
				<li><a href="#">ГОСТЕВАЯ</a></li>
				<li><a href="#">ОПЛАТА И ДОСТАВКА</a></li>
				<li><a href="#">ONLINE ЗАЯВКА</a></li>
				<li><a href="#">КОНТАКТЫ</a></li>
				<li><a href="#">НОВОСТИ</a></li>
			</ul>
			<form>
				<div class="search">
					<input type="search" name="search" value="Найти..." onfocus="this.value=''" onblur="this.value='Найти...'">
					<input type="submit" value="">
				</div><!--END SEARCH-->
			</form>
		</div><!--END TOP_MENU-->

		<?php require_once('left.php');?>

		<div id="content">
			<div class="trainers_run">

				<div class="xleb">
					Тренажеры &raquo; Кардио &raquo; Беговая дорожка &raquo; <span>MaxFit</span>
				</div>

				<div class="index">
					<div class="index-h1">
						<span>MaxFit</span>	
					</div>
					<div class="maxfit">
						<table>
						<tr>
											<?php

											$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Ошибка подключения базы данных');
											mysqli_query($dbc, "SET NAMES utf8");
											$query = "SELECT * FROM run_trainers";

											$result = mysqli_query($dbc, $query);
											$s = 0;
											$i = 1;

											while ($row = mysqli_fetch_array($result)){

												?> 
													
												<td>
												<table>
												
												<tr><td><h3><?php echo $row['first_name'];?></h3><hr></td></tr>
												
												<tr><td><span class="name-db">Скорость:</span><?php echo $row['speed'];  ?></td></tr>
												<tr><td><span class="name-db">Полотно:</span><?php echo $row['background'];  ?></td></tr>
												<tr><td><span class="name-db">Макс.вес:</span><?php echo $row['heft'];  ?></td></tr>
												<tr><td><span class="name-db">Мощность:</span><?php echo $row['power'];  ?></td></tr>
												<tr><td><div class="img-box">
													<img src="<?php echo UPLOAD . $row['screenshot']; ?>" alt="img" >
												</div>
												</td></tr>
												<tr><td>
												<hr>
												<div class="price-b"><span><?php echo $row['price'];  ?></span>руб.</div>

												<div>
													<a href="link_run<?php echo $s; ?>" class="add unlink_run<?php echo $s; ?>" price="<?php echo $row['price']; ?>">
														<img src="images/buy.png" alt="img" class="img-responsive"></a>
													</div>

													<div>
														<a href="unlink_run<?php echo $s; ?>" class="remove link_run<?php echo $s; ?>" price="<?php echo $row['price']; ?>">
															<img src="images/buy.png" alt="img" class="img-responsive link-run<?php echo $s;?>"></a>
														</div>

														<hr>
														</td>
														</tr>
														</table>
														</td>
														<?php
														if($i == 3){
															echo "</tr>";
															echo "<tr>";
															$i = 0;
														}
														$i++;

														$s++;
													}

													mysqli_close($dbc);

													?>
												
											
										
									</table>
								</div>
							</div>
						</div>


					</div><!--END CONTENT-->
					<div class="clearfix"></div>
					<?php 
					require_once('footer.php');
					?>

				</div><!--END CONTAINER-->

			</body>

			</html>