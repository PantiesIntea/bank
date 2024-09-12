@extends('layout')
@section('content')


	
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


@endsection