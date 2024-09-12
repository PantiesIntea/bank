@extends('layout')
@section('content')


	<section class="notfound">
		<div class="container">
			<div class="notfound__title">
				Извините, такой страницы не существует
			</div>
			<div class="notfound__text">
				Вы можете воспользоваться поиском
			</div>
			<div class="notfound__search">
				<input type="text" placeholder="Поиск по сайту">
				<img src="img/search.png" alt="ico">
			</div>
		</div>
		<div class="download">
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
		</div>
	</section>
@endsection