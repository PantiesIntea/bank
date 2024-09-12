@extends('layout')
@section('content')




	<!-- CREDIT -->


	<section class="credit">
		<div class="cond-links">
			<div class="container">
				<a href="credit" class="current">Для физических лиц</a>
				<a href="credit2">Для юридических лиц</a>
			</div>
		</div>
		<div class="container">
			<div class="credit__title section-title">
				Онлайн-заявка на кредит
			</div>
			<form action="{{ route('online-application') }}" method="POST" enctype="multipart/form-data" class="credit-form">
				@csrf
				<div class="form-input">
					<p>Фамилия<span>*</span></p>
					<input type="text" name="surname" required>
				</div>
				<div class="form-input">
					<p>Имя<span>*</span></p>
					<input type="text" name="name" required>
				</div>
				<div class="form-input">
					<p>Отчество<span>*</span></p>
					<input type="text" name="patronymic">
				</div>
				<div class="form-input">
					<p>Территория<span>*</span></p>
					<select name="territory" class="custom-select" required>
						<option>Ташкент</option>
						<option>Ташкентская область</option>
					</select>
				</div>
				<div class="form-input">
					<p>Дата рождения<span>*</span></p>
					<input type="date" name="birth_date" required>
				</div>
				<div class="form-input">
					<p>Пол<span>*</span></p>
					<select name="sex" class="custom-select" required>
						<option>Мужской</option>
						<option>Женский</option>
						<option>Не определено</option>
					</select>
				</div>
				<div class="form-input">
					<p>ИНН<span>*</span></p>
					<input type="text" name="inn" required>
				</div>
				<div class="form-input">
					<p>Электронный адрес<span>*</span></p>
					<input type="email" name="email" required>
				</div>
				<div class="form-input">
					<p>Адрес по прописке<span>*</span></p>
					<input type="text" name="address" required>
				</div>
				<div class="form-input">
					<p>Место работы<span>*</span></p>
					<select name="job_type" class="custom-select" required>
						<option>Государственная организация</option>
						<option>Акционерное общество (АО)</option>
						<option>Общество с ограниченной ответственностью (ООО)</option>
						<option>Другое</option>
					</select>
				</div>
				<div class="form-input">
					<p>Название места работы<span>*</span></p>
					<input type="text" name="job_place" required>
				</div>
				<div class="form-input">
					<p>Ежемесячная заработная плата<span>*</span></p>
					<input type="text" name="salary" required>
				</div>
				<div class="form-input form-input-pass">
					<p>Серия паспорта<span>*</span></p>
					<input type="text" name="passport_series" required>
				</div>
				<div class="form-input form-input-pass">
					<p>Номер паспорта<span>*</span></p>
					<input type="text" name="passport_number" required>
				</div>
				<div class="form-input form-input-gave">
					<p>Кем выдан<span>*</span></p>
					<input type="text" name="passport_issued_by" required>
				</div>
				<div class="form-input">
					<p>Стаж работы<span>*</span></p>
					<select name="work_experience" class="custom-select" required>
						<option>1 год</option>
						<option>2 года</option>
						<!-- ... остальные варианты ... -->
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
											<span class="value">100 000</span>
											UZS
										</div>
									</div>
									<div class="custom-range">
										<input type="range" name="credit_amount" min="100000" max="5000000">
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
											<span class="value">11</span>
											месяцев
										</div>
									</div>
									<div class="custom-range">
										<input type="range" name="credit_term" min="3" max="60">
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
									<select name="credit_name" class="custom-select">
										<option>Название кредита</option>
										<option>Название кредита 2</option>
										<!-- ... другие варианты ... -->
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="calc-right">
						<!-- эти поля будут изменяться динамически -->
						<div class="calc-right__item">
							<p>
								Ежемесячный платеж
							</p>
							<div id="monthly-payment">
								28 501 UZS
							</div>
						</div>
						<div class="calc-right__wrap">
							<div class="calc-right__item">
								<p>
									Ставка
								</p>
								<div id="interest-rate">
									8,9%
								</div>
							</div>
							<div class="calc-right__item">
								<p>
									Сумма кредита
								</p>
								<div id="loan-amount">
									5 000 000 UZS
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="form-input">
					<p>Выберите удобное отделение банка<span>*</span></p>
					<select name="bank_branch" class="custom-select" required>
						<option>Оперу</option>
						<!-- ... другие отделения ... -->
					</select>
				</div>
				<div class="form-input form-input-check">
					<p>Укажите наличие кредита<span>*</span></p>
					<label>
						<input type="checkbox" name="has_credit" value="0">
						<span>Нет кредитов</span>
					</label>
					<label>
						<input type="checkbox" name="has_credit" value="1">
						<span>Есть кредиты</span>
					</label>
				</div>
			
				<div class="credit__title section-title">
					Загрузите документы
				</div>
				<div class="form-input form-input-file">
					<p>Фото (сторона паспорта)</p>
					<input id="file-upload1" type="file" name="document_passport_photo" />
					<label for="file-upload1" class="file-upload">
						<img src="img/upload.svg" alt="ico">
						Перетащите файлы сюда или нажмите, чтобы загрузить.
					</label>
					<div class="form-input__advice">
						Разрешенные форматы: .png, .jpeg, .jpg
					</div>
				</div>
				<div class="form-input form-input-file">
					<p>Фото (сторона прописки)</p>
					<input id="file-upload2" type="file" name="document_registration_photo" />
					<label for="file-upload2" class="file-upload">
						<img src="img/upload.svg" alt="ico">
						Перетащите файлы сюда или нажмите, чтобы загрузить.
					</label>
					<div class="form-input__advice">
						Разрешенные форматы: .png, .jpeg, .jpg
					</div>
				</div>
				<div class="form-input form-input-file">
					<p>Справка о доходах за 12 месяцев</p>
					<input id="file-upload3" type="file" name="document_income_certificate" />
					<label for="file-upload3" class="file-upload">
						<img src="img/upload.svg" alt="ico">
						Перетащите файлы сюда или нажмите, чтобы загрузить.
					</label>
					<div class="form-input__advice">
						Разрешенные форматы: .png, .jpeg, .jpg
					</div>
				</div>
			
				<div class="form-input form-input-tel">
					<p>Номер телефона<span>*</span></p>
					<input type="tel" name="phone" required>
				</div>
				<div class="form-input form-input-submit">
					<button class="btn" type="submit">Отправить заявку</button>
				</div>
			</form>
			
		</div>
	</section>

	

@endsection