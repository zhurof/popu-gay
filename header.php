<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/magnific/magnific-popup.min.css" />
	<link rel="stylesheet" href="libs/likely/likely.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header class="header">
		<div class="wrapper">
			<div class="header__topline">
				<span class="header__location">Москва</span>
				<ul class="header__menu">
					<li class="dropdown"><a href="#delivery">Доставка</a></li>
					<li class="dropdown"><a href="#payment">Оплата</a></li>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
				<a href="/" class="logo header__logo">
					<img src="img/logo.png" alt="" class="logo__img">
					<span class="logo__text">Интернет-магазин защитных электронных товаров</span>
				</a>
				<a href="tel:88001004435" class="phone-link header__phone">8 (800) 100-44-35</a>
				<div class="header__tools">
					<span class="header__tool far fa-search" id="search-btn"></span>
					<a href="#" class="header__tool header__tool--hovered far fa-star"></a>
					<a href="#" class="header__tool header__tool--hovered far fa-shopping-cart"></a>
					<a href="#" class="header__tool header__tool--big far fa-user"></a>					
				</div>
			</div>
			<div class="header__bottomline">
				<ul class="main-menu">
					<li class="catalog-btn"><a href="#">Каталог</a></li>
					<li><a href="#">Отпугиватели</a></li>
					<li><a href="#">Уничтожители</a></li>
					<li><a href="#">Электрошокеры</a></li>
					<li><a href="#">Сад и огород</a></li>
					<li><a href="#">Здоровое питание</a></li>
					<li><a href="#">Автотовары</a></li>
					<li class="highlighted"><a href="#">Распродажа</a></li>
				</ul>
			</div>
		</div>
		<div class="catalog-banner header__catalog">
			<div class="wrapper catalog-banner__wrapper">
				<div class="catalog-banner__main">
					<div class="menu catalog-banner__menu">
						<div class="menu__column">
							<ul class="menu__item">
								<li>
									<a href="#">Отпугиватели</a>
									<ul>
										<li>
											<a href="#">Грызунов</a>
											<ul>
												<li><a href="#">Ястреб</a></li>
												<li><a href="#">Торнадо</a></li>
												<li><a href="#">Ультразвуковые</a></li>
												<li><a href="#">Экоснайпер</a></li>
											</ul>
										</li>											
										<li><a href="#">Змей</a></li>
										<li><a href="#">Клопов</a></li>
										<li><a href="#">Комаров</a></li>
										<li><a href="#">Кротов</a></li>
										<li><a href="#">Летучих мышей</a></li>
										<li>
											<a href="#">Птиц</a>
											<ul>
												<li><a href="#">Ястреб</a></li>
												<li><a href="#">Торнадо</a></li>
											</ul>
										</li>											
										<li><a href="#">Собак</a></li>
										<li><a href="#">Тараканов</a></li>
									</ul>
								</li>							
							</ul>
						</div>
						<div class="menu__column">
							<ul class="menu__item">
								<li>
									<a href="#">Уничтожители</a>
									<ul>
										<li><a href="#">Грызунов</a></li>
										<li><a href="#">Комаров</a></li>
										<li><a href="#">Насекомых</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Электрошокеры</a>
									<ul>
										<li><a href="#">ОСА</a></li>
										<li><a href="#">Парализаторы</a></li>
										<li><a href="#">Фонари</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="menu__column">
							<ul class="menu__item">
								<li>
									<a href="#">Сад и огород</a>
									<ul>
										<li><a href="#">Биопрепараты для сада и огорода</a></li>
										<li><a href="#">Капельный полив</a></li>
										<li><a href="#">Парники</a></li>
										<li><a href="#">Сетки от кротов</a></li>
										<li><a href="#">Системы полива</a></li>
										<li><a href="#">Шланги</a></li>
									</ul>
								</li>							
							</ul>
						</div>
						<div class="menu__column">
							<ul class="menu__item">
								<li>
									<a href="#">Здоровое&nbsp;питание</a>
									<ul>
										<li><a href="#">Зерновые напитки</a></li>
										<li><a href="#">Макробиотические каши</a></li>
										<li><a href="#">Оздоровительные  курсы</a></li>
										<li><a href="#">«Народные рецепты здоровья»</a></li>
										<li><a href="#">Для снижения веса</a></li>
									</ul>
								</li>
								<li class="highlighted"><a href="#">Распродажа</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="catalog-banner__sidebar">
					<div class="compilation-block catalog-banner__compilation">
						<h4 class="compilation-block__title">Подборки</h4>
						<ul class="compilation-block__list">
							<li><a href="#"><i class="far fa-bug"></i><span>Избавиться от насекомых</span></a></li>
							<li><a href="#"><i class="far fa-shield-alt"></i><span>Защитить себя</span></a></li>
							<li><a href="#"><i class="far fa-weight"></i><span>Сбросить вес</span></a></li>
							<li><a href="#"><i class="far fa-paw"></i><span>Выгнать крыс раз и навсегда</span></a></li>
							<li><a href="#"><i class="far fa-shovel"></i><span>Антикрот</span></a></li>
						</ul>
					</div>
					<div class="contacts-widget catalog-banner__contacts">
						<h4 class="contacts-widget__title">Контакты</h4>
						<a href="tel:88001004435" class="contacts-widget__phone">8 (800) 100-44-35</a>
						<div class="contacts-widget__worktime">Пн - Пт: с 9:00 до 18:00</div>
						<p><a href="mailto:hello@po-pugay.ru">hello@po-pugay.ru</a></p>
						<p><a href="#">Где забрать товар?</a></p>
					</div>
					<div class="social-block">
						<a href="https://vk.com" class="social-block__link social-block__link--small fab fa-vk" target="_blank"></a>
						<a href="https://facebook.com" class="social-block__link social-block__link--small fab fa-facebook-square" target="_blank"></a>
						<a href="https://youtube.com" class="social-block__link social-block__link--small fab fa-youtube" target="_blank"></a>
						<a href="https://instagram.com" class="social-block__link social-block__link--small fab fa-instagram" target="_blank"></a>
					</div>
				</div>
			</div>
		</div>
	</header>