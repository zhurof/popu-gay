<?php	include "header.php";?>
	<script>
		/*для демонстрации*/
		document.querySelector('.main-menu>li:nth-child(4)').classList.add('active');
	</script>
	<main>
		<div class="catalog-nav">
			<div class="wrapper catalog-nav__wrapper">
				<a href="#" class="catalog-nav__item catalog-nav__item--active">Оса</a>
				<a href="#" class="catalog-nav__item">Парализаторы</a>
				<a href="#" class="catalog-nav__item">Фонари</a>
				<a href="#" class="catalog-nav__item">Дубинки</a>
			</div>
		</div>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li>Электрошокеры</li>
				</ul>
			</div>
		</div>
		<div class="catalog">
			<div class="wrapper">
				<div class="catalog__head">
					<h1 class="catalog__title">Электрошокеры</h1>
					<div class="catalog__amount">Всего 35 товаров</div>
					<div class="sort catalog__sort">
						<span class="sort__text">Сортировать</span>
						<select class="sort__select">
							<option>По популярности</option>
							<option>Сначала дешёвые</option>
							<option>Сначала дорогие</option>
						</select>
						<span class="sort__btn sort__btn--active icon-th" data-view="table"></span>
						<span class="sort__btn icon-th-list" data-view="list"></span>
					</div>
				</div>
				<div class="catalog__text">
					<h4>Отпугните животных или защитите себя от хулиганов с помощью электрошокера. <br>Большая коллекция электрошокеров разной мощности и типов корпуса — классический, дубинка, фонари.</h4>
				</div>
				<div class="box catalog__box">
					<?
						for($x=0;$x<4;$x++){
							include "product-card.php";
						}
					?>
				</div>
				<button class="btn btn--gray btn--high btn--block btn--refresh catalog__btn">загрузить еще</button>
			</div>
		</div>
		<div class="text-block">
			<div class="wrapper">
				<h4>Купить электрошокер в Москве недорого</h4>
				<p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, даже всемогущая пунктуация не имеет власти над рыбными текстами, ведущими безорфографичный образ жизни. Однажды одна маленькая строчка рыбного текста по имени Lorem ipsum решила выйти в большой мир грамматики. </p>
			</div>
		</div>
		<div class="promo-block">
			<div class="wrapper">
				<div class="promo-block__head">
					<div class="promo-block__text">
						<h5>Акции</h5>
						<h3>Проводим распродажи и выгодные акции, <br>делаем скидки на популярные товары</h3>
					</div>
					<div class="promo-block__nav"></div>
				</div>
				<div class="promo-block__slider">
					<div class="promo-card" style="background-image:url(img/promo/0.jpg)">
						<div class="promo-card__text">
							<h3>При покупке отпугивателя «Ястреб» клей от мышей в подарок!</h3>
						</div>
						<div class="promo-card__date">До 16 февраля</div>
						<a href="#" class="promo-card__link"></a>
					</div>
					<div class="promo-card" style="background-image:url(img/promo/1.jpg)">
						<div class="promo-card__text">
							<h3>Скидки до 70% на товары <br>«Здорового питания»!</h3>
						</div>
						<div class="promo-card__date">До 20 марта</div>
						<a href="#" class="promo-card__link"></a>
					</div>
					<div class="promo-card" style="background-image:url(img/promo/0.jpg)">
						<div class="promo-card__text">
							<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta.</h3>
						</div>
						<div class="promo-card__date">До 20 марта</div>
						<a href="#" class="promo-card__link"></a>
					</div>
					<div class="promo-card" style="background-image:url(img/promo/0.jpg)">
						<div class="promo-card__text">
							<h3>При покупке отпугивателя «Ястреб» клей от мышей в подарок!</h3>
						</div>
						<div class="promo-card__date">До 16 февраля</div>
						<a href="#" class="promo-card__link"></a>
					</div>
					<div class="promo-card" style="background-image:url(img/promo/1.jpg)">
						<div class="promo-card__text">
							<h3>Скидки до 70% на товары <br>«Здорового питания»!</h3>
						</div>
						<div class="promo-card__date">До 20 марта</div>
						<a href="#" class="promo-card__link"></a>
					</div>
					<div class="promo-card" style="background-image:url(img/promo/0.jpg)">
						<div class="promo-card__text">
							<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta.</h3>
						</div>
						<div class="promo-card__date">До 20 марта</div>
						<a href="#" class="promo-card__link"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="upsell">
			<div class="wrapper">
				<div class="upsell__head">
					<div class="upsell__text">
						<h3>Вы уже посмотрели</h3>
					</div>
					<div class="upsell__nav"></div>
				</div>
				<div class="upsell__slider">
					<div class="small-card">
						<div class="small-card__slider">
							<a href="#" class="small-card__slide"><img src="img/catalog/9.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/10.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/11.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/12.png" alt=""></a>
						</div>
						<div class="small-card__body">
							<h4 class="small-card__title">«Ястреб 200» отпугиватель <br>крыс и мышей</h4>
							<div class="small-card__price">1 700</div>
						</div>
						<a href="#" class="small-card__link"></a>
					</div>
					<div class="small-card">
						<div class="small-card__slider">
							<a href="#" class="small-card__slide"><img src="img/catalog/10.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/11.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/12.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/9.png" alt=""></a>
						</div>
						<div class="small-card__body">
							<h4 class="small-card__title">Ультразвуковой отпугиватель собак «Ястреб ОС-2»</h4>
							<div class="small-card__price">2100</div>
						</div>
						<a href="#" class="small-card__link"></a>
					</div>
					<div class="small-card">
						<div class="small-card__slider">
							<a href="#" class="small-card__slide"><img src="img/catalog/11.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/12.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/9.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/0.png" alt=""></a>
						</div>
						<div class="small-card__body">
							<h4 class="small-card__title">Ультразвуковой отпугиватель грызунов «Торнадо 1200»</h4>
							<div class="small-card__price">5 900</div>
						</div>
						<a href="#" class="small-card__link"></a>
					</div>
					<div class="small-card">
						<div class="small-card__slider">
							<a href="#" class="small-card__slide"><img src="img/catalog/12.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/9.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/10.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/11.png" alt=""></a>
						</div>
						<div class="small-card__body">
							<h4 class="small-card__title">Парник «Торнадо П-6»</h4>
							<div class="small-card__price">990</div>
						</div>
						<a href="#" class="small-card__link"></a>
					</div>
					<div class="small-card">
						<div class="small-card__slider">
							<a href="#" class="small-card__slide"><img src="img/catalog/9.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/10.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/11.png" alt=""></a>
							<a href="#" class="small-card__slide"><img src="img/catalog/12.png" alt=""></a>
						</div>
						<div class="small-card__body">
							<h4 class="small-card__title">«Ястреб 200» отпугиватель <br>крыс и мышей</h4>
							<div class="small-card__price">1 700</div>
						</div>
						<a href="#" class="small-card__link"></a>
					</div>					
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	