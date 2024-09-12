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


	<!-- CARDS -->

	<section class="cards">
		<div class="container">
			<div class="cards__title section-title">
				Кредитные карты
			</div>
			<div class="cards-item">
				<div class="cards-item__img">
					<img src="img/cards1.png" alt="Card">
				</div>
				<div class="cards-item__wrap">
					<div class="cards-item__title">
						Кредитная карта UzCard
					</div>
					<div class="cards-item__text">
						Решение за 2 минуты. Онлайн. Без документов.
					</div>
					<div class="cards-info">
						<div class="cards-info__item">
							<p>Размер страхового депозита</p>
							<div>0 UZS</div>
						</div>
						<div class="cards-info__item">
							<p>Комиссия за операции оплаты товаров и услуг</p>
							<div>0 %</div>
						</div>
						<div class="cards-info__item">
							<p>Первичное оформление карты*</p>
							<div>Бесплатно</div>
						</div>
					</div>
					<div class="cards-item__advice">
						*Выпущенные в рамках зарплатных проектов. <br> Годовое обслуживание бесплатно.
					</div>
					<div class="main-carousel__btns">
						<a href="cards-single" class="btn">
							Подробнее
						</a>
						<a href="credit" class="btn btn-trans">
							Отправить заявку
						</a>
					</div>
				</div>
			</div>
			<div class="cards-item">
				<div class="cards-item__img">
					<img src="img/cards2.png" alt="Card">
				</div>
				<div class="cards-item__wrap">
					<div class="cards-item__title">
						Кредитная карта HUMO
					</div>
					<div class="cards-item__text">
						Решение за 2 минуты. Онлайн. Без документов.
					</div>
					<div class="cards-info">
						<div class="cards-info__item">
							<p>Размер страхового депозита</p>
							<div>0 UZS</div>
						</div>
						<div class="cards-info__item">
							<p>Комиссия за операции оплаты товаров и услуг</p>
							<div>0 %</div>
						</div>
						<div class="cards-info__item">
							<p>Первичное оформление карты*</p>
							<div>Бесплатно</div>
						</div>
					</div>
					<div class="cards-item__advice">
						*Выпущенные в рамках зарплатных проектов. <br> Годовое обслуживание бесплатно.
					</div>
					<div class="main-carousel__btns">
						<a href="cards-single" class="btn">
							Подробнее
						</a>
						<a href="credit" class="btn btn-trans">
							Отправить заявку
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- ДРУГИЕ SMTH-->

		<div class="other">
			<div class="container">
				<div class="other__title section-title">
					Другие карты
				</div>
				<div class="other-wrap">
					<div class="other-carousel owl-carousel">
						<div class="other-carousel__item">
							<div class="other-carousel__img">
								<img src="img/other-card1.png" alt="Card">
							</div>
							<div class="other-carousel__title">
								UnionPay Classic
							</div>
							<div class="other-carousel__text">
								Решение за 2 минуты. Онлайн. Без документов.
							</div>
							<a href="cards-single" class="other-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
						<div class="other-carousel__item">
							<div class="other-carousel__img">
								<img src="img/other-card2.png" alt="Card">
							</div>
							<div class="other-carousel__title">
								VISA Classic
							</div>
							<div class="other-carousel__text">
								Решение за 2 минуты. Онлайн. Без документов.
							</div>
							<a href="cards-single" class="other-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
						<div class="other-carousel__item">
							<div class="other-carousel__img">
								<img src="img/other-card3.png" alt="Card">
							</div>
							<div class="other-carousel__title">
								VISA Gold
							</div>
							<div class="other-carousel__text">
								Решение за 2 минуты. Онлайн. Без документов.
							</div>
							<a href="cards-single" class="other-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
						<div class="other-carousel__item">
							<div class="other-carousel__img">
								<img src="img/other-card1.png" alt="Card">
							</div>
							<div class="other-carousel__title">
								UnionPay Classic
							</div>
							<div class="other-carousel__text">
								Решение за 2 минуты. Онлайн. Без документов.
							</div>
							<a href="cards-single" class="other-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
						<div class="other-carousel__item">
							<div class="other-carousel__img">
								<img src="img/other-card2.png" alt="Card">
							</div>
							<div class="other-carousel__title">
								VISA Classic
							</div>
							<div class="other-carousel__text">
								Решение за 2 минуты. Онлайн. Без документов.
							</div>
							<a href="cards-single" class="other-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
						<div class="other-carousel__item">
							<div class="other-carousel__img">
								<img src="img/other-card3.png" alt="Card">
							</div>
							<div class="other-carousel__title">
								VISA Gold
							</div>
							<div class="other-carousel__text">
								Решение за 2 минуты. Онлайн. Без документов.
							</div>
							<a href="cards-single" class="other-carousel__btn btn">
								Подробнее
								<img src="img/arrow-right.svg" alt="ico">
							</a>
						</div>
					</div>
					<div class="other-carousel__arrows">
						<span class="arrow-left">
							<img src="img/chevron-left.svg" alt="ico">
						</span>
						<span class="arrow-right">
							<img src="img/chevron-right.svg" alt="ico">
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	@yield('footer')

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.custom-select.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/main.js"></script>
</body>
</html>