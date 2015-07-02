﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="topLine">
			<div class="container">
				<div class="topLine-left">				
					<p>Наши проекты:</p>
					<a href="http://promo.itpanda.ru">promo.itpanda.ru</a>
					<a href="http://shop.itpanda.ru">shop.itpanda.ru</a>
				</div>
				<div class="topLine-right">
					<ul>
						<li><a href="">Новости</a></li>
						<li><a href="">Вакансии</a></li>
						<li><a href="">Генератор продаж</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="header">			
				<div class="logo">
					Генератор
				</div>
				<div class="slogan">
					Решаем все задачи по созданию <br> и развитию сайтов в <!-- Екатеринбурге -->  
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Екатеринбурге 
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Челябинск</a></li>
							<li><a href="#">Москва</a></li>
							<li><a href="#">Тюмень</a></li>
							<li><a href="#">Вся Россия</a></li>
						</ul>
					</div>
				</div>
				<div class="headerPhone">
					+7 (343) 226-01-36
				</div>
				<div class="headerButton">
					<a href="#">Оставить заявку</a>
				</div>
			</div>
		</div>
		<nav class="navMeny">
			<div class="container">
				<ul>
					<li><a href="#nowhere">Продукты под ключ</a></li>
					<li><a href="#nowhere"> Недорогие решения</a></li>
					<li><a href="#nowhere"> Услуги </a></li>
					<li><a href="#nowhere">Портфолио</a></li>
					<li><a href="#nowhere">О компании</a></li>
					<li><a href="#nowhere">Контакты</a></li>
					<li><a href="#nowhere" class="lastA">Блог</a></li>
				</ul>
			</div>
		</nav>
	</header>
    <?php echo do_shortcode("[news]");?>
    <?php echo do_shortcode("[blog]");?>
<?php wp_footer(); ?>
</body>
</html>