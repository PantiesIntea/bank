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
	<link rel="stylesheet" href="css/changes18.01.css">
	<link rel="stylesheet" href="css/changes19.01.css">
	<title>Davrbank</title>
</head>
<body>

@yield('header')

	<!-- MAIN BLOCK-->

	<!-- ИЗМЕНЕНИЯ ТУТ-->

	<section class="main">
		<div class="main-carousel owl-carousel">
			@for ($i = 1; $i <= 5; $i++)
			<div class="main-carousel__item">
				<div class="main-carousel__bg">
					<img src="img/newmain.jpg" alt="bg">
				</div>
				<div class="main-carousel__img">
					<img src="img/007.jpg" alt="main">
				</div>
				<div class="main-carousel__content">
					<div class="main-carousel__subtitle">
						{{ __('messages.carousel.subtitle') }}
					</div>
					<div class="main-carousel__title">
						{{ __('messages.carousel.title'.$i) }}
					</div>
					<div class="main-carousel__text">
						{{ __('messages.carousel.text') }}
					</div>
					<div class="main-carousel__btns">
						<a href="#" class="btn">
							{{ __('messages.carousel.btn_learn_more') }}
						</a>
						<a href="#" class="btn btn-trans">
							{{ __('messages.carousel.btn_services') }}
						</a>
					</div>
				</div>
			</div>
			@endfor
		</div>
	</section>	

	<!-- PRODUCTS-->

	<section class="products">
		<div class="container">
			<div class="products__title section-title">
				Востребованные продукты
			</div>
			<div class="products-wrap">
				<div class="products-carousel owl-carousel">
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/1.png" alt="products">
						</div>
						<div class="products-carousel__wrap">
							<div class="products-carousel__title">
								Микрозаймы
							</div>
							<div class="products-carousel__text">
								Небольшое описание услуги в несколько строк
							</div>
							<a href="#" class="products-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/2.png" alt="products">
						</div>
						<div class="products-carousel__wrap">
							<div class="products-carousel__title">
								Карты
							</div>
							<div class="products-carousel__text">
								Небольшое описание услуги в несколько строк
								Небольшое описание услуги в несколько строк
							</div>
							<a href="#" class="products-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/3.png" alt="products">
						</div>
						<div class="products-carousel__wrap">
							<div class="products-carousel__title">
								Вклады
							</div>
							<div class="products-carousel__text">
								Небольшое описание услуги в несколько строк
							</div>
							<a href="#" class="products-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/4.png" alt="products">
						</div>
						<div class="products-carousel__wrap">
							<div class="products-carousel__title">
								Ипотека
							</div>
							<div class="products-carousel__text">
								Небольшое описание услуги в несколько строк
							</div>
							<a href="#" class="products-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/5.png" alt="products">
						</div>
						<div class="products-carousel__wrap">
							<div class="products-carousel__title">
								Автокредиты
							</div>
							<div class="products-carousel__text">
								Небольшое описание услуги в несколько строк
								Небольшое описание услуги в несколько строк
							</div>
							<a href="#" class="products-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
					</div>
					<div class="products-carousel__item">
						<div class="products-carousel__img">
							<img src="img/6.png" alt="products">
						</div>
						<div class="products-carousel__wrap">
							<div class="products-carousel__title">
								Экспресс-почта
							</div>
							<div class="products-carousel__text">
								Небольшое описание услуги в несколько строк
							</div>
							<a href="#" class="products-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
					</div>
					
				</div>
				<div class="products-carousel__arrows">
					<span class="arrow-left">
						<img src="img/chevron-left.svg" alt="ico">
					</span>
					<span class="arrow-right">
						<img src="img/chevron-right.svg" alt="ico">
					</span>
				</div>
			</div>
		</div>
	</section>

	<!-- RATES -->

	<section class="rates">
		<div class="container">
			<div class="rates-left">
				<div class="rates__title section-title">
					Курсы валют
				</div>
				<div class="rates-values">
					<div class="rates-values__item">
						<div class="rates-values__currency">
							$
						</div>
						<div class="rates-values__wrap">
							<div class="rates-values__type">
								Покупка:
							</div>
							<div class="rates-values__number" id="usd-buy">
								<!-- Значение будет подставлено динамически -->
							</div>
						</div>
						<div class="rates-values__wrap">
							<div class="rates-values__type">
								Продажа:
							</div>
							<div class="rates-values__number" id="usd-sell">
								<!-- Значение будет подставлено динамически -->
							</div>
						</div>
						<div class="rates-values__wrap">
							<div class="rates-values__type">
								Курс ЦБ:
							</div>
							<div class="rates-values__number" id="usd-cb">
								<!-- Значение будет подставлено динамически -->
							</div>
						</div>
					</div>
					<div class="rates-values__item">
						<div class="rates-values__currency">
							€
						</div>
						<div class="rates-values__wrap">
							<div class="rates-values__type">
								Покупка:
							</div>
							<div class="rates-values__number" id="eur-buy">
								<!-- Значение будет подставлено динамически -->
							</div>
						</div>
						<div class="rates-values__wrap">
							<div class="rates-values__type">
								Продажа:
							</div>
							<div class="rates-values__number" id="eur-sell">
								<!-- Значение будет подставлено динамически -->
							</div>
						</div>
						<div class="rates-values__wrap">
							<div class="rates-values__type">
								Курс ЦБ:
							</div>
							<div class="rates-values__number" id="eur-cb">
								<!-- Значение будет подставлено динамически -->
							</div>
						</div>
					</div>
					<div class="rates-values__item">
						<div class="rates-values__currency">
							₽
						</div>
						<div class="rates-values__wrap">
							<div class="rates-values__type">
								Покупка:
							</div>
							<div class="rates-values__number" id="rub-buy">
								<!-- Значение будет подставлено динамически -->
							</div>
						</div>
						<div class="rates-values__wrap">
							<div class="rates-values__type">
								Продажа:
							</div>
							<div class="rates-values__number" id="rub-sell">
								<!-- Значение будет подставлено динамически -->
							</div>
						</div>
						<div class="rates-values__wrap">
							<div class="rates-values__type">
								Курс ЦБ:
							</div>
							<div class="rates-values__number" id="rub-cb">
								<!-- Значение будет подставлено динамически -->
							</div>
						</div>
					</div>
				</div>
				<div class="rates-convert">
					<div class="rates-convert__item">
						<div class="rates-convert__title">
							Хочу продать:
						</div>
						<div class="rates-convert__input">
							<input type="text" id="sellAmount" oninput="validateInput(event)">
							<select id="sellCurrency" name="rates" class="custom-select" onchange="updateReceiveCurrency()">
								<option value="USD" selected>USD</option>
								<option value="EUR">EUR</option>
								<option value="RUB">RUB</option>
							</select>
						</div>
					</div>
					<div class="rates-convert__item">
						<div class="rates-convert__title">
							Получу:
						</div>
						<div class="rates-convert__input">
							<input type="text" id="receiveAmount" readonly>
							<select id="receiveCurrency" name="rates" class="custom-select">
								<option value="USD">EUR</option>
								<option value="EUR" selected>EUR</option>
								<option value="RUB">RUB</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="rates-right">
				<div class="rates-right__wrap">
					<div class="rates__title section-title">
						Экспресс-оплата
					</div>
					<div class="rates__text">
						Воспользуйтесь функциями онлайн-банкинга:
					</div>
					<div class="rates-info">
						<div class="rates-info__item">
							<div class="rates-info__img">
								<img src="img/rates1.svg" alt="ico">
							</div>
							<div class="rates-info__text">
								Переводы с карты на карту
							</div>
						</div>
						<div class="rates-info__item">
							<div class="rates-info__img">
								<img src="img/rates2.svg" alt="ico">
							</div>
							<div class="rates-info__text">
								Мобильные операторы
							</div>
						</div>
						<div class="rates-info__item">
							<div class="rates-info__img">
								<img src="img/rates3.svg" alt="ico">
							</div>
							<div class="rates-info__text">
								Погашение кредитов
							</div>
						</div>
						<div class="rates-info__item">
							<div class="rates-info__img">
								<img src="img/rates4.svg" alt="ico">
							</div>
							<div class="rates-info__text">
								Другие категории
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- DOWNLOAD -->

	<section class="download">
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
	</section>

	<!-- MAIN MAP -->

	<section class="main-map">
		<div class="container">
			<div class="main-map__wrap">
				<div class="main-map__title section-title">
					Карта банкоматов
				</div>
				<div class="main-map__content">
					<div id="map">

					</div>
				</div>
			</div>
		</div>
	</section>

	@yield('footer')
	
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.custom-select.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/map.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/main.js"></script>
</body>
</html>