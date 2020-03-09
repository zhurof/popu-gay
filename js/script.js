function isMobile(){
	return innerWidth < 992;
}

//Шапка
$('.catalog-btn').click(function(e){
	e.preventDefault();
	$(this).toggleClass('catalog-btn--active')
	$('.catalog-banner').toggleClass('catalog-banner--open')
})
$('#search-btn').click(function(e){
	$('.search-form').addClass('search-form--open').find('input').focus();
})
$('.search-form__close-btn').click(function(){
	$(this).siblings('input').val('').closest('.search-form').removeClass('search-form--open');
})

//Выпадающие блоки из меню в шапке вне самого меню
$('.header__menu .dropdown>a').click(function(e){	
	if(!isMobile()){
		e.preventDefault();
		$('.dropdown-window').not(this.hash).removeClass('dropdown-window--open');
		var target = $(this.hash),
				position = $(this).offset(),
				height = this.clientHeight;
		if(target.length){
			target.toggleClass('dropdown-window--open').css({
				top: position.top + +height + 10 + 'px',
				left: position.left + 'px'
			})
		}
	}
})
$(document).click(function(e){
	if(!$(e.target).is('.header__menu .dropdown>a') && !$(e.target).is('.dropdown-window') && !$(e.target).closest('.dropdown-window').length){
		$('.dropdown-window').removeClass('dropdown-window--open');
	}
})
//Большой слайдер на главной
$('.slider-block__slider').slick({
	prevArrow: '<span class="fas fa-angle-left slider-block__arrow slider-block__arrow--prev" />',
	nextArrow: '<span class="fas fa-angle-right slider-block__arrow slider-block__arrow--next" />',
	dots: true,
	dotsClass: 'slick-dots slider-block__dots',
	customPaging: function(){return ''}
})

//Смена слайда наведением мыши
function changeSlideByMousemove(e){
	var slick = $(this).slick('getSlick'),
			slideCount = slick.slideCount,
			width = this.clientWidth,
			x = e.offsetX,
			targetSlide = Math.floor(x / width * slideCount);
	if(targetSlide >=0){
		slick.slickGoTo(targetSlide,true);
	}
}
$('.product-card__slider,.small-card__slider').on('init reInit',function(){
	//Вешаю обрабочик только после инициализации слайдера и только в полной версии. В мобиле удобнее swipe
	if(isMobile()){
		$(this).off('mousemove',changeSlideByMousemove);
	}else{
		$(this).on('mousemove',changeSlideByMousemove);		
	}	
});

/*Карточка товара*/
$('.product-card__slider').slick({
	arrows: false,
	dots: true,
	swipe: false,
	infinite: false,
	dotsClass: 'slick-dots slick-dots--small product-card__dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				swipe: true,
				infinite: true
			}
		}
	]
})

//Показ доп. информации в карточке при наведении
function showFullCard(e){
	if(!$(e.relatedTarget).is('.product-card') && !$(e.ralatedTarget).closest('.product-card').length){
		//$('.product-card--clone').remove();		
		var clone = $(this).clone().addClass('product-card--clone'),
				textPosition = $(this).find('.product-card__text').offset(),
				cardWidth = $(this).width();
				
		$(this).addClass('product-card--hover');
				
		clone.removeClass('slick-slide slick-active slick-current product-card--hover').appendTo('body').css({
			top: textPosition.top - 1 + 'px',
			left: textPosition.left + 'px',
			width: cardWidth + 'px'
		})
	}
}
function hideFullCard(e){
	if(!$(e.relatedTarget).is('.product-card') && !$(e.relatedTarget).closest('.product-card').length){
		$('.product-card--clone').remove();
		$('.product-card').removeClass('product-card--hover');
	}
}
//На мобильных устройствах такие фокусы явно не нужны. Устанавливаю только для полной версии
$(window).on('load resize',function(){
	if(isMobile()){
		$(document).off('mouseenter','.product-card:not(.product-card--clone,.product-card--horizontal)',showFullCard);
		$(document).off('mouseleave','.product-card',hideFullCard);
	}else{
		$(document).on('mouseenter','.product-card:not(.product-card--clone,.product-card--horizontal)',showFullCard);
		$(document).on('mouseleave','.product-card',hideFullCard);
	}
})


$('.small-card__slider').slick({
	arrows: false,
	dots: true,
	swipe: false,
	infinite: false,
	dotsClass: 'slick-dots slick-dots--small small-card__dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				swipe: true,
				infinite: true
			}
		}
	]
})

$('.category-block__slider').each(function(index,element){
	$(element).slick({
		slidesToShow: 4,
		variableWidth: true,
		speed: 300,
		/*сложно сделать его бесконечным, поскольку внутри его слайдов есть свои слайдеры*/
		infinite: false,
		swipe: false,
		prevArrow: '<span class="fas fa-arrow-left slider-arrow category-block__arrow category-block__arrow--prev" />',
		nextArrow: '<span class="fas fa-arrow-right slider-arrow category-block__arrow category-block__arrow--next" />',
		appendArrows: '.category-block__nav:eq('+index+')',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					swipe: true
				}
			}
		]
	})
})
$('.upsell__slider').each(function(index,element){
	$(element).slick({
		slidesToShow: 5,
		speed: 300,
		/*сложно сделать его бесконечным, поскольку внутри его слайдов есть свои слайдеры*/
		infinite: false,
		swipe: false,
		prevArrow: '<span class="fas fa-arrow-left slider-arrow upsell__arrow upsell__arrow--prev" />',
		nextArrow: '<span class="fas fa-arrow-right slider-arrow upsell__arrow upsell__arrow--next" />',
		appendArrows: '.upsell__nav:eq('+index+')',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					swipe: true
				}
			}
		]
	})
})
$('.promo-block__slider').each(function(index,element){
	$(element).slick({
		slidesToShow: 2,
		//infinite: false,
		//prevArrow: '<span class="fas fa-arrow-left slider-arrow promo-block__arrow promo-block__arrow--prev" />',
		prevArrow: false,
		nextArrow: '<span class="fas fa-arrow-right slider-arrow promo-block__arrow promo-block__arrow--next" />',
		appendArrows: '.promo-block__nav:eq('+index+')'
	})
})

//переключение вида карточек в каталоге
$('.sort__btn').click(function(){
	var view = $(this).data('view');
	if(view == 'list'){
		$('.product-card').addClass('product-card--horizontal');
	}else{
		$('.product-card').removeClass('product-card--horizontal');
	}
	$('.product-card__slider').slick('setPosition');
	$(this).addClass('sort__btn--active').siblings().removeClass('sort__btn--active');
})

//модальные окна
$('.image-link').magnificPopup({type:'image'});
$('.modal-link').magnificPopup({type:'inline'});