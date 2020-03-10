<?php	include "header.php";?>		
	<main>
		<div class="slider-block">
			<div class="wrapper slider-block__wrapper">
				<div class="slider-block__slider">
					<div class="slider-block__slide">
						<div class="slider-block__text">
							<h2>Истребитель насекомых «Баргузин»</h2>
							<h4>Эффективное приманивание <br>и уничтожение насекомых <br>электрическим током</h4>
							<a href="#" class="btn slider-block__btn">Подробнее</a>
						</div>
						<img src="img/radiator.png" alt="" class="slider-block__img">
					</div>
					<div class="slider-block__slide">
						<div class="slider-block__text">
							<h2>Истребитель черных треугольников</h2>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, ab qui nisi accusamus dicta neque harum soluta delectus sapiente voluptas!</h4>
							<a href="#" class="btn slider-block__btn">Подробнее</a>
						</div>
						<img src="img/logo.png" alt="" class="slider-block__img">
					</div>
					<div class="slider-block__slide">
						<div class="slider-block__text">
							<h2>Капитан Петросян</h2>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda.</h4>
							<a href="#" class="btn slider-block__btn">Подробнее</a>
						</div>
						<img src="img/radiator.png" alt="" class="slider-block__img">
					</div>
				</div>
			</div>
		</div>
		<div class="category-block">
			<div class="category-block__label far fa-bug"></div>
			<div class="category-block__head">
				<div class="wrapper">
					<div class="category-block__topline">
						<h2 class="category-block__title">«Избавиться от насекомых»</h2>
						<div class="category-block__nav"></div>
					</div>
					<div class="category-block__text">
						<h4>Выгоните насекомых раз и навсегда с помощью нашей подборки товаров — электромухобойки, ловушки и даже приборы выделяющие углекислый газ</h4>
					</div>
				</div>
			</div>
			<div class="category-block__inner">
				<div class="category-block__slider">
					<?
						for($x=0;$x<12;$x++){
							include "product-card.php";
						}
					?>
				</div>
			</div>
		</div>
		<div class="category-block">
			<div class="category-block__label far fa-shield-alt"></div>
			<div class="category-block__head">
				<div class="wrapper">
					<div class="category-block__topline">
						<h2 class="category-block__title">«Защитить себя»</h2>
						<div class="category-block__nav"></div>
					</div>
					<div class="category-block__text">
						<h4>Отпугните животных или защитите себя от хулиганов с помощью электрошокера. <br>Большая коллекция электрошокеров разной мощности и типов корпуса — классический, дубинка, фонари.</h4>
					</div>
				</div>
			</div>
			<div class="category-block__inner category-block__inner--double">
				<div class="category-block__slider">
					<?
						for($x=0;$x<12;$x++){
							include "product-card.php";
						}
					?>
				</div>
			</div>
		</div>
		<div class="upsell">
			<div class="wrapper">
				<div class="upsell__head">
					<div class="upsell__text">
						<h2>Популярные товары</h2>
					</div>
					<div class="upsell__nav"></div>
				</div>
				<div class="upsell__slider">
					<div class="small-card">
						<div class="discount small-card__discount">
							<span class="discount__key">Распродажа!</span>
						</div>
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
		<div class="news-block">
			<div class="wrapper">
				<div class="news-block__head">
					<h5 style="text-align:center">Блог</h5>
					<h3 style="text-align:center">Рассказываем о том, в чем сами разбираемся</h3>
				</div>
				<div class="box news-block__box">
					<div class="post-card">
						<a href="#" class="post-card__head">
							<img src="img/blog/0.jpg" alt="" class="post-card__img">
							<span class="post-card__tags">
								<span class="post-card__tag">Статья</span>
							</span>
						</a>
						<h4 class="post-card__title"><a href="#">Что такое «уничтожитель насекомых» и как он помогает избавиться от мух, комаров и тараканов?</a></h4>
					</div>
					<div class="post-card">
						<a href="#" class="post-card__head">
							<img src="img/blog/1.jpg" alt="" class="post-card__img">
							<span class="post-card__tags">
								<span class="post-card__tag">Статья</span>
							</span>
						</a>
						<h4 class="post-card__title"><a href="#">Борьба с птицами. Какие методы самые эффективные?</a></h4>
					</div>
					<div class="post-card">
						<a href="#" class="post-card__head">
							<img src="img/blog/2.jpg" alt="" class="post-card__img">
							<span class="post-card__tags">
								<span class="post-card__tag">Статья</span>
							</span>
						</a>
						<h4 class="post-card__title"><a href="#">Что такое отпугивание собак? Как применяется ультразвук для отпугивания собак?</a></h4>
					</div>
					<div class="post-card">
						<a href="#" class="post-card__head">
							<img src="img/blog/3.jpg" alt="" class="post-card__img">
							<span class="post-card__tags">
								<span class="post-card__tag">Статья</span>
							</span>
						</a>
						<h4 class="post-card__title"><a href="#">Отпугивание крыс. Что такое прибор для отпугивания крыс?</a></h4>
					</div>
				</div>
			</div>
		</div>
		<div class="infographics">
			<div class="wrapper">
				<div class="infographics__head">
					<h3 style="text-align:center;">6 причин купить товар в нашем магазине</h3>
				</div>
				<div class="box infographics__box">
					<div class="infographics__item">
						<img src="img/icons/purse.svg" alt="" class="infographics__img">
						<h4 class="infographics__caption">Любые формы оплаты</h4>
						<a href="#" class="infographics__link">Подробнее</a>
					</div>
					<div class="infographics__item">
						<img src="img/icons/truck.svg" alt="" class="infographics__img">
						<h4 class="infographics__caption">Доставка по России и СНГ</h4>
						<a href="#" class="infographics__link">Подробнее</a>
					</div>
					<div class="infographics__item">
						<img src="img/icons/shield.svg" alt="" class="infographics__img">
						<h4 class="infographics__caption">Гарантия на все товары</h4>
						<a href="#" class="infographics__link">Подробнее</a>
					</div>
					<div class="infographics__item">
						<img src="img/icons/approve.svg" alt="" class="infographics__img">
						<h4 class="infographics__caption">Товар сертифицирован</h4>
						<a href="#" class="infographics__link">Подробнее</a>
					</div>
					<div class="infographics__item">
						<img src="img/icons/warehouse.svg" alt="" class="infographics__img">
						<h4 class="infographics__caption">Все товары в наличии</h4>
						<a href="#" class="infographics__link">Подробнее</a>
					</div>
					<div class="infographics__item">
						<img src="img/icons/radiator.svg" alt="" class="infographics__img">
						<h4 class="infographics__caption">Комплетующие и аксессуары</h4>
						<a href="#" class="infographics__link">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
		<? include "contacts-block.php";?>
	</main>
<?php	include "footer.php";?>	