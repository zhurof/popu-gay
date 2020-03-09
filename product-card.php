<div class="product-card">
	<div class="product-card__slider">
		<?
			$slideCount = rand(3,5);
			for($i = 0;$i < $slideCount; $i++):
		?>
			<a href="#" class="product-card__slide"><img src="img/catalog/<?=rand(0,8);?>.png" alt=""></a>
		<?endfor;?>
	</div>
	<div class="product-card__text">
		<div class="product-card__tools">
			<? $status = rand(0,2);?>
			<span class="product-card__status <?=$status ? '': 'product-card__status--none'?>"><?=$status?'В наличии':'Нет в наличии'?></span>
			<span class="fal fa-star product-card__favourites-btn"></span>
		</div>
		<? $discount = !rand(0,2);?>
		<?if($discount):?>
		<div class="discount product-card__discount">
			<span class="discount__key">Распродажа!</span>
			<span class="discount__value">-25%</span>
		</div>
		<?endif;?>		
		<?
			$titles = ['Электрошокер «Оса 928»','Фонарь-электрошокер Молния 1311 Cree Vip Original','Фонарь-дубинка-электрошокер «Молния 1119А»','Электрошокер-фонарь «X-MAN»']
		?>
		<h4 class="product-card__title"><?=$titles[rand(0,count($titles)-1)];?></h4>
		<div class="product-card__category">Электрошокеры</div>
		<div class="product-card__description">
			<p>Выгодно отличается от других моделей благодаря эргономичному корпусу, повышенной надежности и высокой эффективности.</p>
		</div>
		<div class="product-card__price-block">
			<div class="product-card__price">1 300</div>
			<?if($discount):?>
			<div class="product-card__price product-card__price--old">1 625</div>
			<?endif;?>
		</div>
		<div class="product-card__footer">
			<button class="btn btn--small product-card__btn">В корзину</button>
			<a href="#" class="product-card__buy-link">купить в 1 клик</a>
		</div>
	</div>
	<a href="#" class="product-card__link"></a>
</div>