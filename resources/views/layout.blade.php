@section('header')

<div class="overlay"></div>

	<div class="mobile-menu">
		<div class="container">
			<ul class="menu">
					<li class="menu__item">
						<a href="index" class="menu__link menu__link-current">Частным клиентам</a>
					</li>
					<li class="menu__item">
						<a href="business" class="menu__link">Для бизнеса</a>
					</li>
					<li class="menu__item">
						<a href="rates" class="menu__link">Курсы валют</a>
					</li>
					<li class="menu__item">
						<a href="maps" class="menu__link">Банкоматы</a>
					</li>
					<li class="menu__item">
						<a href="index" class="menu__link">Филиалы</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link menu__link-tel">
							<img src="img/tel.svg" alt="ico">
							<span>(71) 207-09-09</span>
						</a>
					</li>
				</ul>
			<div class="mobile-menu__lang">
				<a href="#">RU</a>
				<a href="#">EN</a>
				<a href="#">UZB</a>
			</div>
			<div class="mobile-menu__search">
				<form action="search" method="GET">
					@csrf
					<input type="text" name="query" placeholder="Поиск по сайту" value="{{ request('query') }}">
					<button type="submit">
						<img src="img/search.png" alt="ico">
					</button>
				</form>
			</div>					
		</div>
	</div>
    <!-- HEADER -->

	<header class="header">
		<div class="header-top">
			<div class="container">
				<div class="header-logo">
					<a href="index">
						<img src="img/logo.png" alt="Davrbank" title="Davrbank">
					</a>
				</div>
				<nav class="header-menu">
					<!-- СТРОКА ПОИСКА -->
					<div class="search-input">
						<input type="text" placeholder="Поиск по сайту">
					</div>
					<ul class="menu">
						<li class="menu__item">
							<a href="#" class="menu__link menu__link-tel">
								<img src="img/tel.svg" alt="ico">
								<span>(71) 207-09-09</span>
							</a>
						</li>
						<li class="menu__item">
							<a href="{{ url('index') }}" class="menu__link {{ Request::is('index') ? 'menu__link-current' : '' }}">Частным клиентам</a>
						</li>
						<li class="menu__item">
							<a href="{{ url('business') }}" class="menu__link {{ Request::is('business') ? 'menu__link-current' : '' }}">Для бизнеса</a>
						</li>
						<li class="menu__item">
							<a href="{{ url('rates') }}" class="menu__link {{ Request::is('rates') ? 'menu__link-current' : '' }}">Курсы валют</a>
						</li>
						<li class="menu__item">
							<a href="{{ url('maps') }}" class="menu__link {{ Request::is('maps') ? 'menu__link-current' : '' }}">Банкоматы</a>
						</li>
						<li class="menu__item">
							<a href="{{ url('branches') }}" class="menu__link {{ Request::is('branches') ? 'menu__link-current' : '' }}">Филиалы</a>
						</li>						
					</ul>
				</nav>
				<div class="header-lang">
					<form action="{{ route('set-language') }}" method="POST">
						@csrf
						<select name="lang" onchange="this.form.submit()">
							<option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
							<option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>RU</option>
							<option value="uzb" {{ app()->getLocale() == 'uzb' ? 'selected' : '' }}>UZB</option>
						</select>
					</form>																						
				</div>				
				<div class="header-search">
					<img src="img/search.png" alt="ico">
				</div>
				<div class="header-wrap">
					<div class="header-login">
						@auth
							<span>{{ Auth::user()->name }}</span>
							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<button type="submit">Logout</button>
							</form>
						@else
							<a href="{{ route('login') }}" class="btn">
								<span>Личный кабинет</span>
								<img src="img/login.png" alt="ico">
							</a>
						@endauth
					</div>					
					<div class="header-mobi">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div>

		<!-- HEADER BOT MENU -->

		<div class="header-bot">
			<div class="container">
				<ul class="header-bot__menu">
					<li>
						<div class="header-bot__menu-item">
							<img src="img/header-ico1.svg" alt="ico">
							<span>О банке</span>

							<!-- DROPDOWN -->
								
							<div class="submenu">
								<div class="container">
									<ul class="submenu-list">
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
									</ul>
									<div class="submenu-card">
										<img src="img/submenu.jpg" alt="submenu" class="submenu-card__img">
										<div class="submenu-card__content">
											<div class="submenu-card__subtitle">
												Полезная статья
											</div>
											<div class="submenu-card__title">
												Зарплатный проект
											</div>
										</div>
										<a href="#" class="btn submenu-card__btn">
											Подробнее
											<img src="img/arrow-right.svg" alt="ico">
										</a>
									</div>
									<span class="submenu__close">
										<img src="img/close.svg" alt="ico">
									</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="header-bot__menu-item">
							<img src="img/header-ico2.svg" alt="ico">
							<span>Кредиты</span>

							
							<!-- DROPDOWN -->
								
							<div class="submenu">
								<div class="container">
									<ul class="submenu-list">
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
									</ul>
									<div class="submenu-card">
										<img src="img/submenu.jpg" alt="submenu" class="submenu-card__img">
										<div class="submenu-card__content">
											<div class="submenu-card__subtitle">
												Полезная статья
											</div>
											<div class="submenu-card__title">
												Кредиты
											</div>
										</div>
										<a href="#" class="btn submenu-card__btn">
											Подробнее
											<img src="img/arrow-right.svg" alt="ico">
										</a>
									</div>
									<span class="submenu__close">
										<img src="img/close.svg" alt="ico">
									</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="header-bot__menu-item">
							<img src="img/header-ico3.svg" alt="ico">
							<span>Ипотека</span>

							
							<!-- DROPDOWN -->
								
							<div class="submenu">
								<div class="container">
									<ul class="submenu-list">
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
									</ul>
									<div class="submenu-card">
										<img src="img/submenu.jpg" alt="submenu" class="submenu-card__img">
										<div class="submenu-card__content">
											<div class="submenu-card__subtitle">
												Полезная статья
											</div>
											<div class="submenu-card__title">
												Ипотека
											</div>
										</div>
										<a href="#" class="btn submenu-card__btn">
											Подробнее
											<img src="img/arrow-right.svg" alt="ico">
										</a>
									</div>
									<span class="submenu__close">
										<img src="img/close.svg" alt="ico">
									</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="header-bot__menu-item">
							<img src="img/header-ico4.svg" alt="ico">
							<span>Вклады</span>


							<!-- DROPDOWN -->
	
							<div class="submenu">
								<div class="container">
									<ul class="submenu-list">
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
									</ul>
									<div class="submenu-card">
										<img src="img/submenu.jpg" alt="submenu" class="submenu-card__img">
										<div class="submenu-card__content">
											<div class="submenu-card__subtitle">
												Полезная статья
											</div>
											<div class="submenu-card__title">
												Зарплатный проект
											</div>
										</div>
										<a href="#" class="btn submenu-card__btn">
											Переводы
											<img src="img/arrow-right.svg" alt="ico">
										</a>
									</div>
									<span class="submenu__close">
										<img src="img/close.svg" alt="ico">
									</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="header-bot__menu-item">
							<img src="img/header-ico5.svg" alt="ico">
							<span>Переводы</span>


							
							<!-- DROPDOWN -->
								
							<div class="submenu">
								<div class="container">
									<ul class="submenu-list">
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
									</ul>
									<div class="submenu-card">
										<img src="img/submenu.jpg" alt="submenu" class="submenu-card__img">
										<div class="submenu-card__content">
											<div class="submenu-card__subtitle">
												Полезная статья
											</div>
											<div class="submenu-card__title">
												Зарплатный проект
											</div>
										</div>
										<a href="#" class="btn submenu-card__btn">
											Переводы
											<img src="img/arrow-right.svg" alt="ico">
										</a>
									</div>
									<span class="submenu__close">
										<img src="img/close.svg" alt="ico">
									</span>
								</div>
							</div>
						<div>
					</li>
					<li>
						<div class="header-bot__menu-item">
							<img src="img/header-ico6.svg" alt="ico">
							<span>Платежи</span>
														
							<!-- DROPDOWN -->
								
							<div class="submenu">
								<div class="container">
									<ul class="submenu-list">
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
									</ul>
									<div class="submenu-card">
										<img src="img/submenu.jpg" alt="submenu" class="submenu-card__img">
										<div class="submenu-card__content">
											<div class="submenu-card__subtitle">
												Полезная статья
											</div>
											<div class="submenu-card__title">
												Зарплатный проект
											</div>
										</div>
										<a href="#" class="btn submenu-card__btn">
											Переводы
											<img src="img/arrow-right.svg" alt="ico">
										</a>
									</div>
									<span class="submenu__close">
										<img src="img/close.svg" alt="ico">
									</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="header-bot__menu-item">
							<img src="img/header-ico7.svg" alt="ico">
							<span>Карты</span>

							<!-- DROPDOWN -->
	
							<div class="submenu">
								<div class="container">
									<ul class="submenu-list">
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
										<li>
											<a href="#">
												Пункт меню
											</a>
										</li>
									</ul>
									<div class="submenu-card">
										<img src="img/submenu.jpg" alt="submenu" class="submenu-card__img">
										<div class="submenu-card__content">
											<div class="submenu-card__subtitle">
												Полезная статья
											</div>
											<div class="submenu-card__title">
												Зарплатный проект
											</div>
										</div>
										<a href="#" class="btn submenu-card__btn">
											Переводы
											<img src="img/arrow-right.svg" alt="ico">
										</a>
									</div>
									<span class="submenu__close">
										<img src="img/close.svg" alt="ico">
									</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="header-bot__menu-item">
							<img src="img/header-ico8.svg" alt="ico">
							<span>Онлайн-банкинг</span>
						</div>


						<!-- DROPDOWN -->
	
						<div class="submenu">
							<div class="container">
								<ul class="submenu-list">
									<li>
										<a href="#">
											Пункт меню
										</a>
									</li>
									<li>
										<a href="#">
											Пункт меню
										</a>
									</li>
									<li>
										<a href="#">
											Пункт меню
										</a>
									</li>
								</ul>
								<div class="submenu-card">
									<img src="img/submenu.jpg" alt="submenu" class="submenu-card__img">
									<div class="submenu-card__content">
										<div class="submenu-card__subtitle">
											Полезная статья
										</div>
										<div class="submenu-card__title">
											Зарплатный проект
										</div>
									</div>
									<a href="#" class="btn submenu-card__btn">
										Переводы
										<img src="img/arrow-right.svg" alt="ico">
									</a>
								</div>
								<span class="submenu__close">
									<img src="img/close.svg" alt="ico">
								</span>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</header>
@endsection

@section('footer')
<footer class="footer">
    <div class="container">
        <div class="footer-wrap">
            <div class="footer-left">
                <ul class="footer-menu">
                    <li>
                        <a href="about">О банке</a>
                    </li>
                    <li>
                        <a href="#">Вакансии</a>
                    </li>
                    <li>
                        <a href="#">Банкоматы</a>
                    </li>
                    <li>
                        <a href="#">Филиалы</a>
                    </li>
                    <li>
                        <a href="rates">Курсы валют</a>
                    </li>
                    <li>
                        <a href="#">Частным клиентам</a>
                    </li>
                    <li>
                        <a href="business">Для бизнеса</a>
                    </li>
                    <li>
                        <a href="#">Микрозаймы</a>
                    </li>
                    <li>
                        <a href="#">Ипотека</a>
                    </li>
                    <li>
                        <a href="#">Автокредиты</a>
                    </li>
                    <li>
                        <a href="cards">Карты</a>
                    </li>
                    <li>
                        <a href="#">Вклады</a>
                    </li>
                    <li>
                        <a href="#">Экспресс-оплата</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a href="#">Виртуальная приемная</a>
                    </li>
                </ul>
                <div class="footer-info">
                    <p>
                        100057, Узбекистан, г.Ташкент, Алмазарский р-н, ул. Шимолий Олмазор, дом 17Б
                        2017 – 2021 Частный акционерный коммерческий банк «Давр Банк» 
                    </p>
                    <p>
                        ЧАКБ «ДАВР БАНК» Генеральная лицензия № 71 ЦБ РУз от 29 сентября 2001 г.
                    </p>
                </div>
            </div>
            <div class="footer-right">
                <div class="footer-right__wrap">
                    <div class="footer-right__item">
                        <a href="#">71 207-40-40</a>
                        <p>
                            Единая информационная служба
                        </p>
                    </div>
                    <div class="footer-right__item">
                        <a href="#">71 248-35-10</a>
                        <p>
                            Телефон доверия
                        </p>
                    </div>
                    <ul class="footer-follow">
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/fb.svg" alt="ico">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/ok.svg" alt="ico">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/tg.svg" alt="ico">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/tw.svg" alt="ico">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/yt.svg" alt="ico">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/inst.svg" alt="ico">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-right__wrap">
                    <div class="footer-right__item">
                        <a href="#">info@davrbank.uz</a>
                        <p>
                            Электронная почта
                        </p>
                    </div>
                    <div class="footer-download">
                        <a href="#">
                            <img src="img/google-play-white.svg" alt="ico">
                        </a>
                        <a href="#">
                            <img src="img/app-store-white.svg" alt="ico">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div>
                &copy; DAVR BANK 2021
            </div>
            <div>
                Разработка сайта — FlyDev
            </div>
        </div>
    </div>
</footer>
@endsection