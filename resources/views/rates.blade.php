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
	<title>Davrbank | Курсы валют</title>
</head>
<body>

	@yield('header')


	<!-- RATES-->

	<section class="rates-main">
		<div class="container">
			<div class="rates-main__title section-title">
				Курс валют
			</div>
			<div class="rates-main__time">
				обновлен
			</div>
			<div class="rates-main__table">
				<table>
					<tr class="table-head">
						<td>Валюта</td>
						<td>Курс ЦБ</td>
						<td>Покупка</td>
						<td>Продажа</td>
					</tr>
					<tr>
						<td>Доллар США, USD</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
					</tr>
					<tr>
						<td>Евро, EUR</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
					</tr>
					<tr>
						<td>Российский рубль, RUB</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
					</tr>
					<tr>
						<td>Английский фунт стерлингов, GBP</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
					</tr>
					<tr>
						<td>Швейцарский франк, CHF</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
						<td>10 691,91</td>
					</tr>
				</table>
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