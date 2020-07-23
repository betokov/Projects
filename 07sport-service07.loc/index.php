<?php
$page = 'Главная';
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
		<div class="slider-content">
				<div class="slider">
					<div class="item">
						<div class="view">
							<img src="images/slider/capt1.jpg" alt="img" class="img-responsive">
						</div>
					</div>
					<div class="item">
						<div class="view">
							<img src="images/slider/capt2.jpg" alt="img" class="img-responsive">
						</div>
					</div>
					<div class="item">
						<div class="view">
							<img src="images/slider/capt3.jpg" alt="img" class="img-responsive">
						</div>
					</div>
					<div class="item">
						<div class="view">
							<img src="images/slider/capt4.jpg" alt="img" class="img-responsive">
						</div>
					</div>
					<div class="item">
						<div class="view">
							<img src="images/slider/capt5.jpg" alt="img" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		
			<div class="index">
				<div class="index-h1">
					<span>Главная</span>	
				</div>
				<div class="index-p">
					<p>	
						Сервис по обслуживанию тренажёров. <br>
						Сборка, монтаж, настройка, ремонт и обслуживание тренажёров: <br>
						Силовых станций, а так же велотренажеров, беговых дорожек, эллиптических и любых других кардио тренажеров. <br>
						Так же:<br>
						Ремонт, сборка, установка, монтаж мебели (стенки, кухни, детские кроватки, офисные, компьютерные, парикмахерские, косметологические кресла и тд.), перетяжка стульев и многое другое.
					</p>
				</div>
				<div class="top_menu-block">
					<img src="images/menu.png" alt="menu_image">
				</div>

				<div class="menu">
					<div class="menu-one">
						<div class="menu-one-one">
							<a href="#">Кресла</a>
						</div>
						<div class="menu-one-two">
							<a href="#"><img src="images/picture_content_1.png" alt="content-image1" class="img-responsive"></a>
						</div>
					</div>
					<div class="menu-two">
						<div class="menu-two-one">
							<a href="#">Тренажёры</a>
						</div>
						<div class="menu-two-two">
							<a href="#"><img src="images/picture_content_2.png" alt="content-image2" class="one" class="img-responsive"></a>
						</div>
					</div>
					<div class="menu-three">
						<div class="menu-three-one">
							<a href="#">Мебель</a>
						</div>
						<div class="menu-three-two">
							<a href="#"><img src="images/picture_content_6.png" alt="content-image3" class="one" class="img-responsive"></a>
						</div>
					</div>
					<div class="menu-four">
						<div class="menu-four-one">
							<a href="#">Комплектующие,<br>Офисные<br>принадлежности,<br>запасные части</a>
						</div>
						<div class="menu-four-two">
							<a href="#"><img src="images/picture_content_3.png" alt="content-image4" class="img-responsive"></a>
						</div>
					</div>
					<div class="menu-five">
						<div class="menu-five-one">
							<a href="#">Ремонт,<br>Сборка,<br>Сервисное<br>Обслуживание</a>
						</div>
						<div class="menu-five-two">
							<a href="#"><img src="images/picture_content_4.png" alt="content-image5" class="img-responsive"></a>
						</div>
					</div>
				</div>
				<br><br>
			</div>

		</div><!--END CONTENT-->
		<div class="clearfix"></div>
		<?php 
		require_once('footer.php');
		?>

	</div><!--END CONTAINER-->

</body>

</html>