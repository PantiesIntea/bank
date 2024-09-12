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




	<!-- CREDIT -->


	<section class="credit">
		<div class="cond-links">
			<div class="container">
				<a href="credit">Для физических лиц</a>
				<a href="credit2" class="current">Для юридических лиц</a>
			</div>
		</div>
		<div class="container">
			<div class="credit__title section-title">
				Онлайн-заявка на кредит
			</div>
			<form action="#" class="credit-form">

				<!-- FORM-INPUT ЭТО СТАНДАРТНЫЙ РАЗМЕР, У НЕСТАНДАРТНЫХ СВОИ КЛАССЫ ДОПОЛНИТЕЛЬНЫЕ-->

				<div class="form-input form-input-sub">
					<p>Наименование хозяйствующего субъекта<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input">
					<p>ИНН<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-date">
					<p>Дата регистрации<span>*</span></p>
					<input type="date">
				</div>
				<div class="form-input">
					<p>Место регистрации<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input">
					<p>Юридический адрес<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input">
					<p>Адрес деятельности<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-half">
					<p>Вид деятельности<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-half">
					<p>Обслуживающий банк</p>
					<input type="text">
				</div>
				<div class="form-input form-input-pass">
					<p>Серия паспорта<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-pass">
					<p>Номер паспорта<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-gave">
					<p>Кем выдан<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input">
					<p>Стаж работы<span>*</span></p>
					<select name="exp" class="custom-select">
						<option>1 год</option>
						<option>2 года</option>
						<option>3 года</option>
						<option>4 года</option>
						<option>5 лет</option>
						<option>6 лет</option>
						<option>7 лет</option>
						<option>8 лет</option>
						<option>9 лет</option>
						<option>10 лет</option>
						<option>Более 10 лет</option>
					</select>
				</div>
		

				<div class="credit__title section-title">
					Выберите сумму и срок кредита
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
								<div class="calc-tab__select">
									<select name="credit" class="custom-select">
										<option>Название кредита</option>
										<option>Название кредита 2 </option>
										<option>Название кредита3 </option>
										<option>Название кредита4 </option>
									</select>
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
						</div>
					</div>
				</div>



				<div class="form-input form-input-priv">
					<p>Цель кредита<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-priv">
					<p>Льготный период<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-sec">
					<p>Обеспечение №1<span>*</span></p>
					<select name="sec" class="custom-select">
						<option>1 год</option>
						<option>2 года</option>
						<option>3 года</option>
						<option>4 года</option>
					</select>
				</div>
				<div class="form-input form-input-sec">
					<p>Обеспечение №2<span>*</span></p>
					<select name="sec" class="custom-select">
						<option>1 год</option>
						<option>2 года</option>
						<option>3 года</option>
						<option>4 года</option>
					</select>
				</div>


				<div class="credit__title section-title">
					Информация о директоре
				</div>
				<div class="form-input form-input-sur">
					<p>Фамилия<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-name">
					<p>Имя<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-name">
					<p>Отчество<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-sur">
					<p>Номер телефона<span>*</span></p>
					<input type="text">
				</div>



				
				<div class="credit__title section-title">
					Информация о бухгалтере
				</div>
				<div class="form-input form-input-sur">
					<p>Фамилия<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-name">
					<p>Имя<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-name">
					<p>Отчество<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-sur">
					<p>Номер телефона<span>*</span></p>
					<input type="text">
				</div>
				


				<div class="credit__title section-title">
					Загрузите документы
				</div>
				<div class="form-input form-input-file form-input-file-legacy">
					<p>Удостоверение</p>
					<input id="file-upload1" type="file" name="fileUpload" />
					<label for="file-upload1" class="file-upload">
						<img src="img/upload.svg" alt="ico">
						Перетащите файлы сюда или нажмите, чтобы загрузить.
					</label>
					<div class="form-input__advice">
						Разрешенные форматы: .png, .jpeg, .jpg
					</div>
				</div>
				<div class="form-input form-input-file form-input-file-legacy">
					<p>Бухгалтерский отчет. Форма 1</p>
					<input id="file-upload2" type="file" name="fileUpload" />
					<label for="file-upload2" class="file-upload">
						<img src="img/upload.svg" alt="ico">
						Перетащите файлы сюда или нажмите, чтобы загрузить.
					</label>
					<div class="form-input__advice">
						Разрешенные форматы: .png, .jpeg, .jpg
					</div>
				</div>
				<div class="form-input form-input-file form-input-file-legacy">
					<p>Бухгалтерский отчет. Форма  2</p>
					<input id="file-upload" type="file" name="fileUpload" />
					<label for="file-upload" class="file-upload">
						<img src="img/upload.svg" alt="ico">
						Перетащите файлы сюда или нажмите, чтобы загрузить.
					</label>
					<div class="form-input__advice">
						Разрешенные форматы: .png, .jpeg, .jpg
					</div>
				</div>
				<div class="form-input form-input-file form-input-file-legacy">
					<p>Документы обеспечения</p>
					<input id="file-upload" type="file" name="fileUpload" />
					<label for="file-upload" class="file-upload">
						<img src="img/upload.svg" alt="ico">
						Перетащите файлы сюда или нажмите, чтобы загрузить.
					</label>
					<div class="form-input__advice">
						Разрешенные форматы: .png, .jpeg, .jpg
					</div>
				</div>




				<div class="form-input form-input-tel">
					<p>Номер телефона<span>*</span></p>
					<input type="tel">
				</div>
				<div class="form-input form-input-code">
					<button class="btn">Получить код</button>
				</div>
				<div class="form-input">
					<p>Введите полученный код<span>*</span></p>
					<input type="tel">
				</div>
				<div class="form-input form-input-submit">
					<button class="btn" type="submit">Отправить заявку</button>
				</div>
			</form>
		</div>
	</section>

	

	@yield('footer')
	
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.custom-select.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/main.js"></script>
</body>
</html>