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
	<title>Davrbank | Приемная</title>
</head>
<body>

	@yield('header')


	
	<!-- RECEPTION 	-->

	<section class="reception">
		<div class="container">
			<div class="reception__title section-title">
				Виртуальная приемная
			</div>
			<form action="#" class="reception-form credit-form">
				<div class="form-input form-input-name">
					<p>Имя<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-name">
					<p>Электронный адрес<span>*</span></p>
					<input type="email">
				</div>
				<div class="form-input form-input-sur">
					<p>Номер телефона<span>*</span></p>
					<input type="tel">
				</div>
				<div class="form-input form-input-sur">
					<p>Пол<span>*</span></p>
					<select name="sex" class="custom-select">
						<option>Мужской</option>
						<option>Женский</option>
						<option>Не определено</option>
					</select>
				</div>
				<div class="form-input">
					<p>Город<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input">
					<p>Район проживания<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input">
					<p>Дата регистрации<span>*</span></p>
					<input type="date">
				</div>
				<div class="form-input form-input-full">
					<p>Тема обращения<span>*</span></p>
					<input type="text">
				</div>
				<div class="form-input form-input-full">
					<p>Введите текст обращения<span>*</span></p>
					<textarea></textarea>
				</div>
				<div class="form-input form-input-submit">
					<button class="btn" type="submit">Отправить заявку</button>
				</div>
			</form>
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