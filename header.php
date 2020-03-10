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
					<span class="far fa-bars header__tool menu-btn"></span>
				</div>
				<form action="" class="search-form header__search">
					<input type="search" class="search-form__input">
					<span class="fal fa-times search-form__close-btn"></span>
				</form>
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
					<li class="mobile-item"><a href="#">Доставка</a></li>
					<li class="mobile-item"><a href="#">Оплата</a></li>
					<li class="mobile-item"><a href="#">О нас</a></li>
					<li class="mobile-item"><a href="contacts.php">Контакты</a></li>
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
	<!--Большие выпадающие штуки для меню-->
	<div class="dropdown-window" id="delivery">
		<div class="dropdown-window__column">
			<h3><i class="icon-kremlin"></i> Москва</h3>
			<h4>Курьерская доставка</h4>
			<p>в день заказа или на следующий день</p>
			<ul>
				<li>внутри МКАД — 250 ₽</li>
				<li>за МКАД — от 350 ₽</li>
			</ul>
			<h4>Самовывоз в постаматах</h4> 
			<p>от 1 дня</p>
			<ul>
				<li>от 150 ₽ (все постаматы)</li>
			</ul>
			<h4>Самовывоз в офисе</h4>
			<p>в день заказа</p>
			<ul>
				<li>Автомоторная 7, стр. 1 — бесплатно</li>
			</ul>
		</div>
		<div class="dropdown-window__column">
			<h3><i class="fal fa-plane"></i> Другие города</h3>
			<h4>Курьерские службы </h4>
			<p>от 2-ух дней (при наличии на складе)</p>
			<ul>
				<li>от 300 ₽</li>
			</ul>
			<h4>Почта России</h4>
			<p>от 2-ух дней </p>
			<ul>
				<li>от 350 рублей</li>
			</ul>
			<a href="#" class="dropdown-window__link">Подробнее о доставке</a>
		</div>
	</div>
	<div class="dropdown-window" id="payment">
		<div class="dropdown-window__column">
			<h3><i class="fal fa-money-bill-wave"></i> Наличными</h3>
			<ul>
				<li>при получении товара в офис складе в Москве</li>
				<li>при получении товара с курьером</li>
			</ul>
      <h3><i class="fal fa-credit-card"></i> Оплата картой</h3>
			<ul>
				<li>при оплате заказа на сайте онлайн</li>
				<li>Visa, MasterCard, МИР, Qiwi, YandexMoney и другие</li>
			</ul>
      <h3><i class="fal fa-university"></i> Банковский перевод</h3>
			<h4>При заказе через сайт. Выберите этот метод при формировании заказа онлайн.</h4>
		</div>
		<div class="dropdown-window__column">
			<h3><i class="fal fa-envelope-open-text"></i> Наложный платеж по почте</h3>
			<p>При заказе через сайт. Выберите этот метод при формировании заказа онлайн.</p>
			<h3><i class="fal fa-briefcase"></i> Безналичный расчет </h3>
			<p>Для юридических лиц. Свяжитесь с менеджерами для получения счета на оплату и закрывающих документов</p>
			<a href="#" class="dropdown-window__link">Подробнее об оплате</a>
		</div>
	</div>