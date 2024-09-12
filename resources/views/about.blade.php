@include('layout')
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/custom.select.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<title>Davrbank | О банке</title>
</head>
<body>

	@yield('header')


	<section class="about">
		<div class="container">
			<div class="about__title section-title">
				Миссия банка
			</div>
			<div class="about-content">
				<div class="about-main">
					<p>
						Миссия ЧАКБ "ДАВР БАНК" — достичь прочного положения на рынке банковских услуг как универсального и стабильного финансового учреждения. Наша цель — сохранять стабильность, всегда быть надёжным партнером, тщательно планируя будущую деятельность в интересах наших клиентов.
					</p>
					<h4>
						Доброе имя
					</h4>
					<p>
						Мы дорожим нашим добрым именем, которое заслужили за годы упорной работы. Наши клиенты знают: ЧАКБ "ДАВР БАНК" – это надёжность и порядочность. Мы ценим такое отношение и понимаем, что доброе имя – наш капитал. Мы уверены, что управление деньгами должно быть этичным, а сами деньги должны работать на созидательные цели.
					</p>
					<h4>
						Честность
					</h4>
					<p>
						Мы стремимся действовать с достоинством по отношению к себе и другим. Мы предлагаем клиентам, партнерам и инвесторам прозрачные условия сотрудничества.
					</p>
					<h4>
						Надежные отношения с клиентом
					</h4>
					<p>
						Мы создаем долгосрочные отношения с клиентами и будем делать всё необходимое для того, чтобы человек, пришедший в банк, стал нашим постоянным клиентом и рекомендовал нас своим друзьям, знакомым, партнёрам. Мы бережно относимся к доверию клиента и стремимся оправдать его.
					</p>
					<h4>
						Командный дух
					</h4>
					<p>
						Наша команда – это единый живой организм. Наши отношения строятся на взаимном уважении, взаимопомощи и поддержке. Наш сотрудник – это человек, который осознанно и честно выполняет взятые на себя обязательства, работает с максимальной отдачей. Нам интересно вместе решать сложные задачи и добиваться выдающихся результатов.
					</p>
				</div>
				<div class="about-side">
					<ul class="about-side__menu">
						<li>
							<a href="#">История банка</a>
						</li>
						<li>
							<a href="#" class="current">Миссия банка</a>
						</li>
						<li>
							<a href="#">Кодекс корпоративной этики</a>
						</li>
						<li>
							<a href="#">Организационная структура</a>
						</li>
						<li>
							<a href="#">Правление банка</a>
						</li>
						<li>
							<a href="#">Корпоративное управление</a>
						</li>
						<li>
							<a href="#">Лицензии</a>
						</li>
						<li>
							<a href="#">Карьера</a>
						</li>
						<li>
							<a href="#">Финансовая отчетность</a>
						</li>
						<li>
							<a href="#">Совет банка</a>
						</li>
						<li>
							<a href="#">Стратегия</a>
						</li>
						<li>
							<a href="#">Законы</a>
						</li>
						<li>
							<a href="#">Банкоматы</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<!-- FOOTER -->

	@yield('footer')
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.custom-select.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/main.js"></script>
</body>
</html>