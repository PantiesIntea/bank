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
	<title>Davrbank | Карты</title>
</head>
<body>

	@yield('header')


	<section class="maps">
		<div class="maps-side">
			<div class="maps-side__close">
				<img src="img/close.svg" alt="ico">
				<span>Закрыть</span>
			</div>
			<div class="maps-side__form">
				<div class="maps-side__search">
					<input type="text" placeholder="Поиск по карте">
					<img src="img/search.png" alt="ico">
				</div>
				<div class="maps-side__select">
					<p>Выберите район</p>
					<select name="place" class="custom-select">
						<option>Чиланзарский район</option>
						<option>Юнусабадский район</option>
						<option>13й район</option>
					</select>
				</div>
				<div class="maps-side__check">
					<label>
						<input type="checkbox">
						<div>Работает в выходные</div>
					</label>
					<label>
						<input type="checkbox">
						<div>Работает круглосуточно</div>
					</label>
					<label>
						<input type="checkbox">
						<div>Для частных клиентов</div>
					</label>
					<label>
						<input type="checkbox">
						<div>Для юридических лиц</div>
					</label>
				</div>
			</div>
			<div class="maps-list">
				<li class="maps-list__item">
					<div class="maps-list__title">
						<img src="img/map-logo.svg" alt="ico">
						<span>Чорсу</span>
					</div>
					<div class="maps-list__name">
						ОПЕРУ
					</div>

					<!-- DATA ATM ЭТО ИНДЕКС МАССИВА ATM С В ФАЙЛЕ MAP.JS С КООРДИНАТАМИ И НАЗВАНИЯМИ ТОЧЕК-->

					<div class="maps-list__address" data-atm="0"> 
						100021 Ташкент Шайхантаурский район, ул. А.Навои-Заркайнар, Блок «А» (напротив Цирка)
					</div>
					<div class="maps-list__time">
						<img src="img/time.svg" alt="ico">
						<div>
							Понедельник - Пятница с 08:30 до 17:30
							<br><span>Обеденный перерыв:</span> 13.00 - 14.00
						</div>
					</div>
					<div class="maps-list__tel">
						<img src="img/tel.svg" alt="ico">
						<div>
							<span>Контакты:</span>
							<a href="#">+998 (71) 207-09-81</a>
						</div>
					</div>
				</li>
				<li class="maps-list__item">
					<div class="maps-list__title">
						<img src="img/map-logo.svg" alt="ico">
						<span>Чорсу</span>
					</div>
					<div class="maps-list__name">
						ОПЕРУ
					</div>
					<div class="maps-list__address" data-atm="1">
						100021 Ташкент Шайхантаурский район, ул. А.Навои-Заркайнар, Блок «А» (напротив Цирка)
					</div>
					<div class="maps-list__time">
						<img src="img/time.svg" alt="ico">
						<div>
							Понедельник - Пятница с 08:30 до 17:30
							<br><span>Обеденный перерыв:</span> 13.00 - 14.00
						</div>
					</div>
					<div class="maps-list__tel">
						<img src="img/tel.svg" alt="ico">
						<div>
							<span>Контакты:</span>
							<a href="#">+998 (71) 207-09-81</a>
						</div>
					</div>
				</li>
				<li class="maps-list__item">
					<div class="maps-list__title">
						<img src="img/map-logo.svg" alt="ico">
						<span>Чорсу</span>
					</div>
					<div class="maps-list__name">
						ОПЕРУ
					</div>
					<div class="maps-list__address" data-atm="2">
						100021 Ташкент Шайхантаурский район, ул. А.Навои-Заркайнар, Блок «А» (напротив Цирка)
					</div>
					<div class="maps-list__time">
						<img src="img/time.svg" alt="ico">
						<div>
							Понедельник - Пятница с 08:30 до 17:30
							<br><span>Обеденный перерыв:</span> 13.00 - 14.00
						</div>
					</div>
					<div class="maps-list__tel">
						<img src="img/tel.svg" alt="ico">
						<div>
							<span>Контакты:</span>
							<a href="#">+998 (71) 207-09-81</a>
						</div>
					</div>
				</li>
				<li class="maps-list__item">
					<div class="maps-list__title">
						<img src="img/map-logo.svg" alt="ico">
						<span>Чорсу</span>
					</div>
					<div class="maps-list__name">
						ОПЕРУ
					</div>
					<div class="maps-list__address" data-atm="3">
						100021 Ташкент Шайхантаурский район, ул. А.Навои-Заркайнар, Блок «А» (напротив Цирка)
					</div>
					<div class="maps-list__time">
						<img src="img/time.svg" alt="ico">
						<div>
							Понедельник - Пятница с 08:30 до 17:30
							<br><span>Обеденный перерыв:</span> 13.00 - 14.00
						</div>
					</div>
					<div class="maps-list__tel">
						<img src="img/tel.svg" alt="ico">
						<div>
							<span>Контакты:</span>
							<a href="#">+998 (71) 207-09-81</a>
						</div>
					</div>
				</li>
			</div>
		</div>
		<div class="maps-main">
			<div class="maps-open">
				<div class="container">
					<span>Искать на карте</span> 
					<img src="img/chevron-right.svg" alt="ico">
				</div>
			</div>
			<div id="map" class="disable-scroll">

			</div>
		</div>
	</section>




	<!-- FOOTER -->

	@yield('footer')
	
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.custom-select.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/map.js"></script>
	<script src="js/main.js"></script>
</body>
</html>