@extends('layout')
@section('content')
	
	<!-- PRODUCT -->

	<section class="product">
		<div class="container">

			<!-- КАРТОЧКА -->

			<div class="product-card">
				<div class="cards-single__wrap">
					<div class="cards-single__content">
						<div class="offer">
							<a href="#">Главная</a>
							<a href="#">Частным клиентам</a>
							<a href="#">Кредиты</a>
						</div>
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
						<img src="product/img/product.png" alt="ico">
					</div>
				</div>
			</div>


			<!-- ИНФОРМАЦИЯ -->

			<div class="product-info">
				<h2 class="product-title section-title">
					Информация о кредите
				</h2>
				<div class="product-info__btns">
					<div class="product-info__btn btn current">
						Условия кредита
					</div>
					<div class="product-info__btn btn">
						Информация
					</div>
				</div>
				<div class="product-info__tabs">

					<!-- УСЛОВИЯ-->

					<div class="product-info__tab current">
						<ul class="product-info__list">
							<li>
								<div>
									Название автокредита
								</div>
								<div>
									Автокредит «KIA»
								</div>
							</li>
							<li>
								<div>
									Цель автокредита
								</div>
								<div>
									Приобретение автомобиля "Kia" у официальных дилеров OOO "Roodell”
								</div>
							</li>
							<li>
								<div>
									Сумма автокредита
								</div>
								<div>
									По договору (не превышая цены официальных дилеров)
								</div>
							</li>
							<li>
								<div>
									Срок автокредита
								</div>
								<div>
									По договору (не превышая цены официальных дилеров)
								</div>
							</li>
							<li>
								<div>
									Процентная ставка по автокредиту

								</div>
								<div>
									От 11.7% до 28.1% годовых
								</div>
							</li>
							<li>
								<div>
									Первоначальный взнос
								</div>
								<div>
									25-50% от суммы кредита
								</div>
							</li>
							<li>
								<div>
									Залог
								</div>
								<div>
									Транспортное средство, страховой полис
								</div>
							</li>
						</ul>
					</div>

					<!-- ИНФОРМАЦИЯ-->


					<div class="product-info__tab">
						<div class="product-info__text">
							Полная стоимость кредита (ПСК) — платежи Заёмщика по кредитному договору, размеры и сроки уплаты которых известны на момент его заключения, в том числе с учётом платежей в пользу третьих лиц, определённых договором, если обязанность Заёмщика по таким платежам вытекает из условий договора. Полная стоимость кредита вычисляется в годовых процентах.
							<br>
							<br>В расчет ПСК включаются платежи Заемщика:
							<br>по основному долгу и процентам,
							<br>в пользу банка - кредитора, если обязанность Заемщика по таким платежам следует из условий договора и (или) если выдача кредита или займа поставлена в зависимость от совершения таких платежей;
							<br>в пользу третьих лиц, если обязанность Заемщика по уплате таких платежей следует из условий договора, в том числе платежи:
							<br>в пользу страховой организации, если выгодоприобретателем по договору страхования в случае наступления страхового случая выступает банк;
							<br>в пользу страховых организаций при страховании предмета залога по договору залога, обеспечивающего обязательства клиента по договору и находящегося в пользовании залогодателя.
							<br>гаранту (поручителю) за получение гарантии (поручительства), а также оценщику за оценку передаваемого в залог имущества;
							<br>в пользу организаций (посредников), оказывающих услуги банку по привлечению клиентов, осуществлению проверки предоставляемых клиентами документов для получения кредита или займа, приему платежей и переводов от клиентов банка в счет погашения кредита или займа.
						</div>
					</div>
				</div>
			</div>


			<!-- ЭТАПЫ -->


			<div class="product-steps">
				<h2 class="product-title section-title">
					Этапы получения кредита
				</h2>

				<div class="product-steps__wrap">
					<div class="product-steps__item">
						<div class="product-steps__number">
							1
						</div>
						<div class="product-steps__title">
							Заявка
						</div>
						<div class="product-steps__text">
							Оформите заявку онлайн на сайте за 5 минут
						</div>
						<a href="#" class="product-steps__link">
							<span>Оформить заявку</span>
							<svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.25 8.5L5.375 7.53333L7.59375 5.16667H0V3.83333H7.59375L5.375 1.46667L6.25 0.5L10 4.5L6.25 8.5Z" fill="#0C84C8"/>
							</svg>
						</a>
					</div>
					<div class="product-steps__item">
						<div class="product-steps__number">
							2
						</div>
						<div class="product-steps__title">
							Встреча
						</div>
						<div class="product-steps__text">
							В нашем офисе за 15 минут одобрим Ваш кредит
						</div>
						<a href="#" class="product-steps__link">
							<span>Посмотреть офисы</span>
							<svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.25 8.5L5.375 7.53333L7.59375 5.16667H0V3.83333H7.59375L5.375 1.46667L6.25 0.5L10 4.5L6.25 8.5Z" fill="#0C84C8"/>
							</svg>
						</a>
					</div>
					<div class="product-steps__item">
						<div class="product-steps__number">
							3
						</div>
						<div class="product-steps__title">
							Готово
						</div>
						<div class="product-steps__text">
							Кредит оформлен, Вы можете получить деньги
						</div>
						<a href="#" class="product-steps__link">
							<span>Калькулятор кредита</span>
							<svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.25 8.5L5.375 7.53333L7.59375 5.16667H0V3.83333H7.59375L5.375 1.46667L6.25 0.5L10 4.5L6.25 8.5Z" fill="#0C84C8"/>
							</svg>
						</a>
					</div>
				</div>

			</div>



			<!-- КАЛЬКУЛЯТОР -->



			<div class="product-calc">
				<h2 class="product-title section-title">
					Калькулятор
				</h2>
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
								<a href="#" class="calc-tab__btn btn">
									Показать детали расчета
								</a>
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



			<!-- ПРЕИМУЩЕСТВА -->


			<div class="product-advantages">
				<h2 class="product-title section-title">
					Преимущества кредита
				</h2>
				<div class="other-wrap">
					<div class="other-carousel owl-carousel">
						<div class="product-advantages__item">
							<div class="product-advantages__img">
								<img src="product/img/advantages1.png" alt="product">
							</div>
							<div class="product-advantages__title">
								Цель кредита
							</div>
							<div class="product-advantages__text">
								Для оформления кредита цель не требуется
							</div>
						</div>
						<div class="product-advantages__item">
							<div class="product-advantages__img">
								<img src="product/img/advantages2.png" alt="product">
							</div>
							<div class="product-advantages__title">
								Документы
							</div>
							<div class="product-advantages__text">
								Паспорт и справка о заработной плате за месяц
							</div>
						</div>
						<div class="product-advantages__item">
							<div class="product-advantages__img">
								<img src="product/img/advantages3.png" alt="product">
							</div>
							<div class="product-advantages__title">
								Честные условия
							</div>
							<div class="product-advantages__text">
								Без скрытых комиссий и платежей — только по желанию
							</div>
						</div>
						<div class="product-advantages__item">
							<div class="product-advantages__img">
								<img src="product/img/advantages1.png" alt="product">
							</div>
							<div class="product-advantages__title">
								Цель кредита
							</div>
							<div class="product-advantages__text">
								Для оформления кредита цель не требуется
							</div>
						</div>
						<div class="product-advantages__item">
							<div class="product-advantages__img">
								<img src="product/img/advantages2.png" alt="product">
							</div>
							<div class="product-advantages__title">
								Документы
							</div>
							<div class="product-advantages__text">
								Паспорт и справка о заработной плате за месяц
							</div>
						</div>
						<div class="product-advantages__item">
							<div class="product-advantages__img">
								<img src="product/img/advantages3.png" alt="product">
							</div>
							<div class="product-advantages__title">
								Честные условия
							</div>
							<div class="product-advantages__text">
								Без скрытых комиссий и платежей — только по желанию
							</div>
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



			<!-- ДОКУМЕНТАЦИЯ -->


			<div class="product-docs">
				<h2 class="product-title section-title">
					Документация по кредиту
				</h2>
				<div class="product-docs__wrap">
					<a href="#" class="product-docs__item">
						<img src="product/img/pdf.svg" alt="ico">
						<span>Кредитный договор без Созаёмщика для ознакомления</span>
					</a>
					<a href="#" class="product-docs__item">
						<img src="product/img/pdf.svg" alt="ico">
						<span>Кредитный договор без Созаёмщика для ознакомления</span>
					</a>
					<a href="#" class="product-docs__item">
						<img src="product/img/pdf.svg" alt="ico">
						<span>Кредитный договор без Созаёмщика для ознакомления</span>
					</a>
					<a href="#" class="product-docs__item">
						<img src="product/img/pdf.svg" alt="ico">
						<span>Кредитный договор без Созаёмщика для ознакомления</span>
					</a>
					<a href="#" class="product-docs__item">
						<img src="product/img/pdf.svg" alt="ico">
						<span>Кредитный договор без Созаёмщика для ознакомления</span>
					</a>
					<a href="#" class="product-docs__item">
						<img src="product/img/pdf.svg" alt="ico">
						<span>Кредитный договор без Созаёмщика для ознакомления</span>
					</a>
				</div>
			</div>


			<!-- ОТЗЫВЫ -->

			<div class="product-reviews">
				<h2 class="product-title section-title">
					Отзывы клиентов
				</h2>
				<div class="other-wrap">
					<div class="other-carousel owl-carousel">
						<div class="product-reviews__item">
							<div class="product-reviews__head">
								<div class="product-reviews__wrap">
									<div class="product-reviews__photo">
										<img src="product/img/review1.jpg" alt="people">
									</div>
									<div class="product-reviews__name">
										Floyd Miles
									</div>
								</div>
								<div class="product-reviews__mark">
									<svg width="132" height="24" viewBox="0 0 132 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_0_1)">
										<path d="M12.3372 17.388L18.2597 20.9626L16.6881 14.2255L21.9206 9.6926L15.0302 9.10802L12.3372 2.75427L9.64432 9.10802L2.75391 9.6926L7.98641 14.2255L6.41474 20.9626L12.3372 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip1_0_1)">
										<path d="M39.1419 17.388L45.0644 20.9626L43.4928 14.2255L48.7253 9.6926L41.8348 9.10802L39.1419 2.75427L36.449 9.10802L29.5586 9.6926L34.7911 14.2255L33.2194 20.9626L39.1419 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip2_0_1)">
										<path d="M65.9505 17.388L71.873 20.9626L70.3014 14.2255L75.5339 9.6926L68.6434 9.10802L65.9505 2.75427L63.2576 9.10802L56.3672 9.6926L61.5997 14.2255L60.028 20.9626L65.9505 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip3_0_1)">
										<path d="M102.339 9.6926L95.4481 9.09844L92.7552 2.75427L90.0623 9.10802L83.1719 9.6926L88.4044 14.2255L86.8327 20.9626L92.7552 17.388L98.6777 20.9626L97.1156 14.2255L102.339 9.6926ZM92.7552 15.5959V6.68344L94.394 10.5551L98.5915 10.9193L95.4098 13.6793L96.3681 17.7809L92.7552 15.5959Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip4_0_1)">
										<path d="M129.147 9.6926L122.257 9.09844L119.564 2.75427L116.871 9.10802L109.98 9.6926L115.213 14.2255L113.641 20.9626L119.564 17.388L125.486 20.9626L123.924 14.2255L129.147 9.6926ZM119.564 15.5959L115.96 17.7714L116.919 13.6697L113.737 10.9097L117.935 10.5455L119.564 6.68344L121.203 10.5551L125.4 10.9193L122.218 13.6793L123.177 17.7809L119.564 15.5959Z" fill="#0C84C8"/>
										</g>
										<defs>
										<clipPath id="clip0_0_1">
										<rect width="23" height="23" fill="white" transform="translate(0.835938 0.837524)"/>
										</clipPath>
										<clipPath id="clip1_0_1">
										<rect width="23" height="23" fill="white" transform="translate(27.6406 0.837524)"/>
										</clipPath>
										<clipPath id="clip2_0_1">
										<rect width="23" height="23" fill="white" transform="translate(54.4492 0.837524)"/>
										</clipPath>
										<clipPath id="clip3_0_1">
										<rect width="23" height="23" fill="white" transform="translate(81.2539 0.837524)"/>
										</clipPath>
										<clipPath id="clip4_0_1">
										<rect width="23" height="23" fill="white" transform="translate(108.062 0.837524)"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="product-reviews__text">
								Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва 
							</div>
						</div>
						<div class="product-reviews__item">
							<div class="product-reviews__head">
								<div class="product-reviews__wrap">
									<div class="product-reviews__photo">
										<img src="product/img/review2.jpg" alt="people">
									</div>
									<div class="product-reviews__name">
										Ronald Richards
									</div>
								</div>
								<div class="product-reviews__mark">
									<svg width="132" height="24" viewBox="0 0 132 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_1416_639)">
										<path d="M12.3372 17.388L18.2597 20.9626L16.6881 14.2255L21.9206 9.6926L15.0302 9.10802L12.3372 2.75427L9.64432 9.10802L2.75391 9.6926L7.98641 14.2255L6.41474 20.9626L12.3372 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip1_1416_639)">
										<path d="M39.1419 17.388L45.0644 20.9626L43.4928 14.2255L48.7253 9.6926L41.8348 9.10802L39.1419 2.75427L36.449 9.10802L29.5586 9.6926L34.7911 14.2255L33.2194 20.9626L39.1419 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip2_1416_639)">
										<path d="M65.9505 17.388L71.873 20.9626L70.3014 14.2255L75.5339 9.6926L68.6434 9.10802L65.9505 2.75427L63.2576 9.10802L56.3672 9.6926L61.5997 14.2255L60.028 20.9626L65.9505 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip3_1416_639)">
										<path d="M92.7552 17.388L98.6777 20.9626L97.106 14.2255L102.339 9.6926L95.4481 9.10802L92.7552 2.75427L90.0623 9.10802L83.1719 9.6926L88.4044 14.2255L86.8327 20.9626L92.7552 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip4_1416_639)">
										<path d="M129.147 9.6926L122.257 9.09844L119.564 2.75427L116.871 9.10802L109.98 9.6926L115.213 14.2255L113.641 20.9626L119.564 17.388L125.486 20.9626L123.924 14.2255L129.147 9.6926ZM119.564 15.5959L115.96 17.7714L116.919 13.6697L113.737 10.9097L117.935 10.5455L119.564 6.68344L121.203 10.5551L125.4 10.9193L122.218 13.6793L123.177 17.7809L119.564 15.5959Z" fill="#0C84C8"/>
										</g>
										<defs>
										<clipPath id="clip0_1416_639">
										<rect width="23" height="23" fill="white" transform="translate(0.835938 0.837524)"/>
										</clipPath>
										<clipPath id="clip1_1416_639">
										<rect width="23" height="23" fill="white" transform="translate(27.6406 0.837524)"/>
										</clipPath>
										<clipPath id="clip2_1416_639">
										<rect width="23" height="23" fill="white" transform="translate(54.4492 0.837524)"/>
										</clipPath>
										<clipPath id="clip3_1416_639">
										<rect width="23" height="23" fill="white" transform="translate(81.2539 0.837524)"/>
										</clipPath>
										<clipPath id="clip4_1416_639">
										<rect width="23" height="23" fill="white" transform="translate(108.062 0.837524)"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="product-reviews__text">
								Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва 
							</div>
						</div>
						<div class="product-reviews__item">
							<div class="product-reviews__head">
								<div class="product-reviews__wrap">
									<div class="product-reviews__photo">
										<img src="product/img/review3.jpg" alt="people">
									</div>
									<div class="product-reviews__name">
										Savannah Nguyen
									</div>
								</div>
								<div class="product-reviews__mark">
									<svg width="132" height="24" viewBox="0 0 132 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_0_1)">
										<path d="M12.3372 17.388L18.2597 20.9626L16.6881 14.2255L21.9206 9.6926L15.0302 9.10802L12.3372 2.75427L9.64432 9.10802L2.75391 9.6926L7.98641 14.2255L6.41474 20.9626L12.3372 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip1_0_1)">
										<path d="M39.1419 17.388L45.0644 20.9626L43.4928 14.2255L48.7253 9.6926L41.8348 9.10802L39.1419 2.75427L36.449 9.10802L29.5586 9.6926L34.7911 14.2255L33.2194 20.9626L39.1419 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip2_0_1)">
										<path d="M65.9505 17.388L71.873 20.9626L70.3014 14.2255L75.5339 9.6926L68.6434 9.10802L65.9505 2.75427L63.2576 9.10802L56.3672 9.6926L61.5997 14.2255L60.028 20.9626L65.9505 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip3_0_1)">
										<path d="M102.339 9.6926L95.4481 9.09844L92.7552 2.75427L90.0623 9.10802L83.1719 9.6926L88.4044 14.2255L86.8327 20.9626L92.7552 17.388L98.6777 20.9626L97.1156 14.2255L102.339 9.6926ZM92.7552 15.5959V6.68344L94.394 10.5551L98.5915 10.9193L95.4098 13.6793L96.3681 17.7809L92.7552 15.5959Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip4_0_1)">
										<path d="M129.147 9.6926L122.257 9.09844L119.564 2.75427L116.871 9.10802L109.98 9.6926L115.213 14.2255L113.641 20.9626L119.564 17.388L125.486 20.9626L123.924 14.2255L129.147 9.6926ZM119.564 15.5959L115.96 17.7714L116.919 13.6697L113.737 10.9097L117.935 10.5455L119.564 6.68344L121.203 10.5551L125.4 10.9193L122.218 13.6793L123.177 17.7809L119.564 15.5959Z" fill="#0C84C8"/>
										</g>
										<defs>
										<clipPath id="clip0_0_1">
										<rect width="23" height="23" fill="white" transform="translate(0.835938 0.837524)"/>
										</clipPath>
										<clipPath id="clip1_0_1">
										<rect width="23" height="23" fill="white" transform="translate(27.6406 0.837524)"/>
										</clipPath>
										<clipPath id="clip2_0_1">
										<rect width="23" height="23" fill="white" transform="translate(54.4492 0.837524)"/>
										</clipPath>
										<clipPath id="clip3_0_1">
										<rect width="23" height="23" fill="white" transform="translate(81.2539 0.837524)"/>
										</clipPath>
										<clipPath id="clip4_0_1">
										<rect width="23" height="23" fill="white" transform="translate(108.062 0.837524)"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="product-reviews__text">
								Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва 
							</div>
						</div>
						<div class="product-reviews__item">
							<div class="product-reviews__head">
								<div class="product-reviews__wrap">
									<div class="product-reviews__photo">
										<img src="product/img/review1.jpg" alt="people">
									</div>
									<div class="product-reviews__name">
										Floyd Miles
									</div>
								</div>
								<div class="product-reviews__mark">
									<svg width="132" height="24" viewBox="0 0 132 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_0_1)">
										<path d="M12.3372 17.388L18.2597 20.9626L16.6881 14.2255L21.9206 9.6926L15.0302 9.10802L12.3372 2.75427L9.64432 9.10802L2.75391 9.6926L7.98641 14.2255L6.41474 20.9626L12.3372 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip1_0_1)">
										<path d="M39.1419 17.388L45.0644 20.9626L43.4928 14.2255L48.7253 9.6926L41.8348 9.10802L39.1419 2.75427L36.449 9.10802L29.5586 9.6926L34.7911 14.2255L33.2194 20.9626L39.1419 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip2_0_1)">
										<path d="M65.9505 17.388L71.873 20.9626L70.3014 14.2255L75.5339 9.6926L68.6434 9.10802L65.9505 2.75427L63.2576 9.10802L56.3672 9.6926L61.5997 14.2255L60.028 20.9626L65.9505 17.388Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip3_0_1)">
										<path d="M102.339 9.6926L95.4481 9.09844L92.7552 2.75427L90.0623 9.10802L83.1719 9.6926L88.4044 14.2255L86.8327 20.9626L92.7552 17.388L98.6777 20.9626L97.1156 14.2255L102.339 9.6926ZM92.7552 15.5959V6.68344L94.394 10.5551L98.5915 10.9193L95.4098 13.6793L96.3681 17.7809L92.7552 15.5959Z" fill="#0C84C8"/>
										</g>
										<g clip-path="url(#clip4_0_1)">
										<path d="M129.147 9.6926L122.257 9.09844L119.564 2.75427L116.871 9.10802L109.98 9.6926L115.213 14.2255L113.641 20.9626L119.564 17.388L125.486 20.9626L123.924 14.2255L129.147 9.6926ZM119.564 15.5959L115.96 17.7714L116.919 13.6697L113.737 10.9097L117.935 10.5455L119.564 6.68344L121.203 10.5551L125.4 10.9193L122.218 13.6793L123.177 17.7809L119.564 15.5959Z" fill="#0C84C8"/>
										</g>
										<defs>
										<clipPath id="clip0_0_1">
										<rect width="23" height="23" fill="white" transform="translate(0.835938 0.837524)"/>
										</clipPath>
										<clipPath id="clip1_0_1">
										<rect width="23" height="23" fill="white" transform="translate(27.6406 0.837524)"/>
										</clipPath>
										<clipPath id="clip2_0_1">
										<rect width="23" height="23" fill="white" transform="translate(54.4492 0.837524)"/>
										</clipPath>
										<clipPath id="clip3_0_1">
										<rect width="23" height="23" fill="white" transform="translate(81.2539 0.837524)"/>
										</clipPath>
										<clipPath id="clip4_0_1">
										<rect width="23" height="23" fill="white" transform="translate(108.062 0.837524)"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="product-reviews__text">
								Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва Текст отзыва 
							</div>
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

			<!-- FAQ -->

			<div class="product-faq">
				<h2 class="product-title section-title">
					Часто задаваемые вопросы
				</h2>
				<ul class="product-faq__list">
					<li class="product-faq__item">
						<div class="product-faq__quest">
							Как вносить ежемесячный платеж по кредиту?
						</div>
						<div class="product-faq__answer">
							Для погашения ежемесячного платежа по кредиту Вы можете воспользоваться одним из нижеуказанных способов:
							<ul>
								<li>Через мобильное приложение Банка «Tenge24»;</li>
								<li>Через кассу в отделениях Банка;</li>
								<li>Через платежные системы (Click, Payme и.т.п.).</li>
							</ul>
						</div>
					</li>
					<li class="product-faq__item">
						<div class="product-faq__quest">
							Как вносить ежемесячный платеж по кредиту?
						</div>
						<div class="product-faq__answer">
							Для погашения ежемесячного платежа по кредиту Вы можете воспользоваться одним из нижеуказанных способов:
							<ul>
								<li>Через мобильное приложение Банка «Tenge24»;</li>
								<li>Через кассу в отделениях Банка;</li>
								<li>Через платежные системы (Click, Payme и.т.п.).</li>
							</ul>
							
						</div>
					</li>
					<li class="product-faq__item">
						<div class="product-faq__quest">
							Как вносить ежемесячный платеж по кредиту?
						</div>
						<div class="product-faq__answer">
							Для погашения ежемесячного платежа по кредиту Вы можете воспользоваться одним из нижеуказанных способов:
							<ul>
								<li>Через мобильное приложение Банка «Tenge24»;</li>
								<li>Через кассу в отделениях Банка;</li>
								<li>Через платежные системы (Click, Payme и.т.п.).</li>
							</ul>
							
						</div>
					</li>
					<li class="product-faq__item">
						<div class="product-faq__quest">
							Как вносить ежемесячный платеж по кредиту?
						</div>
						<div class="product-faq__answer">
							Для погашения ежемесячного платежа по кредиту Вы можете воспользоваться одним из нижеуказанных способов:
							<ul>
								<li>Через мобильное приложение Банка «Tenge24»;</li>
								<li>Через кассу в отделениях Банка;</li>
								<li>Через платежные системы (Click, Payme и.т.п.).</li>
							</ul>
							
						</div>
					</li>
					<li class="product-faq__item">
						<div class="product-faq__quest">
							Как вносить ежемесячный платеж по кредиту?
						</div>
						<div class="product-faq__answer">
							Для погашения ежемесячного платежа по кредиту Вы можете воспользоваться одним из нижеуказанных способов:
							<ul>
								<li>Через мобильное приложение Банка «Tenge24»;</li>
								<li>Через кассу в отделениях Банка;</li>
								<li>Через платежные системы (Click, Payme и.т.п.).</li>
							</ul>
							
						</div>
					</li>
				</ul>
			</div>

			<!-- СЕРТИФИКАТЫ -->

			<div class="product-cert">
				<h2 class="product-title section-title">
					Сертификаты
				</h2>
				<div class="product-cert__carousel owl-carousel">
					<div class="product-cert__item">
						<img src="product/img/cert.png" alt="cert">
					</div>
					<div class="product-cert__item">
						<img src="product/img/cert.png" alt="cert">
					</div>
					<div class="product-cert__item">
						<img src="product/img/cert.png" alt="cert">
					</div>
					<div class="product-cert__item">
						<img src="product/img/cert.png" alt="cert">
					</div>
					<div class="product-cert__item">
						<img src="product/img/cert.png" alt="cert">
					</div>
					<div class="product-cert__item">
						<img src="product/img/cert.png" alt="cert">
					</div>
				</div>
				<div class="product-cert__zoom">
					<div class="product-cert__close">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect y="21.6808" width="30.6613" height="3.27922" rx="1.63961" transform="rotate(-45 0 21.6808)" fill="#fff"/>
							<rect width="30.6613" height="3.27922" rx="1.63961" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 24 21.6808)" fill="#fff"/>
						</svg>
					</div>
					<img src="" alt="" class="product-cert__big">
				</div>
			</div>

		</div>
	</section>


@endsection