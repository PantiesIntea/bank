@extends('layout')
@section('content')

	<!-- OFFER-->

	<div class="offer">
		<div class="container">
			<a href="#">Главная</a>
			<a href="#">Частным клиентам</a>
			<a href="#">Кредиты</a>
		</div>
	</div>

	<!-- SINGLE CARDS -->

	<section class="cards-single">
		<div class="container">
			<div class="cards-single__wrap">
				<div class="cards-single__content">
					<div class="cards-single__title">
						Кредитный продукт «Кредит карта 30»
					</div>
					<div class="cards-single__text">
						Небольшое описание описание кредита
					</div>
					<div class="cards-single__info">
						<div class="cards-single__info-item">
							<div>до 48 месяцев</div>
							<p>Срок кредита</p>
						</div>
						<div class="cards-single__info-item">
							<div>до 30 млн.сум</div>
							<p>Сумма кредита</p>
						</div>
						<div class="cards-single__info-item">
							<div>60 минут</div>
							<p>Время выдачи кредита</p>
						</div>
					</div>
					<a href="#" class="cards-single__btn btn">
						Оставить заявку
					</a>
				</div>
				<div class="cards-single__img">
					<img src="img/1.png" alt="ico">
				</div>
			</div>
		</div>
	</section>

	<!-- CONDITION-->

	<section class="cond">
		<div class="cond-links">
			<div class="container">
				<a href="#" class="current">Условия кредита</a>
				<a href="#calc">Калькулятор кредита</a>
			</div>
		</div>
		<div class="cond-content">
			<div class="container">
				<div class="cond-item">
					<div class="cond-item__title">
						<img src="img/cond1.svg" alt="ico">
						<span>Цель кредита</span>
					</div>
					<div class="cond-item__text">
						Для оформления кредита цель не требуется
					</div>
				</div>
				<div class="cond-item">
					<div class="cond-item__title">
						<img src="img/cond2.svg" alt="ico">
						<span>Документы</span>
					</div>
					<div class="cond-item__text">
						Паспорт и справка о заработной плате за месяц
					</div>
				</div>
				<div class="cond-item">
					<div class="cond-item__title">
						<img src="img/cond3.svg" alt="ico">
						<span>Честные условия</span>
					</div>
					<div class="cond-item__text">
						Без скрытых комиссий и платежей — только по желанию
					</div>
				</div>
			</div>
		</div>
		<div class="calc" id="calc">
			<div class="container">
				<div class="calc-wrap">
					<div class="calc__title section-title">
						Калькулятор
					</div>
					<div class="calc-content">
						<div class="calc-left">
							<div class="calc-tabs">
								<div class="calc-tab">
									<div class="calc-tab__item">
										<div class="calc-tab__info">
											<div>
												Сколько вам нужно
											</div>
											<div>
												<span class="value">
													100 000
												</span>
												UZS
											</div>
										</div>
										<div class="custom-range">
											<input type="range" min="100000" max="5000000">
										</div>
										<div class="calc-tab__values">
											<div>
												от 100 000 UZS
											</div>
											<div>
												до 5 000 000 UZS
											</div>
										</div>
									</div>
									<div class="calc-tab__item">
										<div class="calc-tab__info">
											<div>
												Срок кредита
											</div>
											<div>
												<span class="value">
													11
												</span>
												месяцев
											</div>
										</div>
										<div class="custom-range">
											<input type="range" min="3" max="60">
										</div>
										<div class="calc-tab__values">
											<div>
												от 3 месяцев
											</div>
											<div>
												до 5 лет
											</div>
										</div>
									</div>
									<div class="calc-tab__item">
										<div class="calc-tab__info">
											<div>
												Первоначальный взнос
											</div>
											<div>
												<span class="value">
													15
												</span>
												%
											</div>
										</div>
										<div class="custom-range">
											<input type="range" min="0" max="100">
										</div>
										<div class="calc-tab__values">
											<div>
												от 100 000 UZS
											</div>
											<div>
												до 5 000 000 UZS
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="calc-right">
							<div class="calc-right__item">
								<p>
									Ежемесячный платеж
								</p>
								<div>
									28 501 UZS
								</div>
							</div>
							<div class="calc-right__wrap">
								<div class="calc-right__item">
									<p>
										Ставка
									</p>
									<div>
										8,9%
									</div>
								</div>
								<div class="calc-right__item">
									<p>
										Сумма кредита
									</p>
									<div>
										5 000 000 UZS
									</div>
								</div>
								<div class="calc-right__item">
									<p>
										Необходимый доход
									</p>
									<div>
										615 000 UZS
									</div>
								</div>
							</div>
							<div class="calc-right__text">
								Уже отправили заявку на кредит?
							</div>
							<a href="#" class="calc-right__btn btn status-popup__open">
								Проверить статус заявки
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- POPUP -->

	<div class="status-popup">
		<div class="status-popup__content">
			<div class="status-popup__close">
				<img src="img/close.svg" alt="ico">
			</div>
			<div class="status-popup__title section-title">
				Проверить статус заявки
			</div>
			<div class="status-popup__input">
				<p>Введите код заявки</p>
				<input type="text">
			</div>
			<div class="status-popup__value">
				Статус заявки: <span class="wait">На рассмотрении в банке</span>
							<!-- 
								<span class="done">Заявка принята</span>
								<span class="error">Отказано в заявке</span>
							-->
			</div>
			<button class="status-popup__btn btn">
				Проверить статус заявки
			</button>
		</div>
	</div>
@endsection