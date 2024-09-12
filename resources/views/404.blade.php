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
	<title>Davrbank | 404</title>
</head>
<body>

	@yield('header')


	<section class="notfound">
		<div class="container">
			<div class="notfound__title">
				Извините, такой страницы не существует
			</div>
			<div class="notfound__text">
				Вы можете воспользоваться поиском
			</div>
			<div class="notfound__search">
				<input type="text" placeholder="Поиск по сайту">
				<img src="img/search.png" alt="ico">
			</div>
		</div>
		<div class="download">
			<div class="container">
				<div class="download-wrap">
					<div class="download-content">
						<div class="download__title">
							DAVR BANK в Вашем телефоне!
						</div>
						<div class="download__text">
							Самый простой способ управлять деньгами прямо из своего смартфона. <br>
							В любой точке мира. В любое время.
						</div>
						<div class="download__subtitle">
							Скачивайте приложение
						</div>
						<div class="download__btns">
							<a href="#">
								<img src="img/google-play.svg" alt="google-play">
							</a>
							<a href="#">
								<img src="img/app-store.svg" alt="app-store">
							</a>
						</div>
					</div>
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