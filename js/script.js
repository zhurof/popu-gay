function isMobile(){
	return innerWidth < 992;
}
$('.catalog-btn').click(function(e){
	e.preventDefault();
	$(this).toggleClass('catalog-btn--active')
	$('.catalog-banner').toggleClass('catalog-banner--open')
})

$('.slider-block__slider').slick({
	prevArrow: '<span class="fas fa-angle-left slider-block__arrow slider-block__arrow--prev" />',
	nextArrow: '<span class="fas fa-angle-right slider-block__arrow slider-block__arrow--next" />',
	dots: true,
	dotsClass: 'slick-dots slider-block__dots',
	customPaging: function(){return ''}
})
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
$('.small-card__slider').on('init reInit',function(){
	if(isMobile()){
		$(this).off('mousemove',changeSlideByMousemove);
	}else{
		$(this).on('mousemove',changeSlideByMousemove);
		
	}
	
});
$('.small-card__slider').slick({
	arrows: false,
	dots: true,
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


$('.upsell__slider').each(function(index,element){
	$(element).slick({
		slidesToShow: 5,
		/*сложно сделать его бесконечным, поскольку внутри его слайдов есть свои слайдеры*/
		infinite: false,
		prevArrow: '<span class="fas fa-arrow-left slider-arrow upsell__arrow upsell__arrow--prev" />',
		nextArrow: '<span class="fas fa-arrow-right slider-arrow upsell__arrow upsell__arrow--next" />',
		appendArrows: '.upsell__nav:eq('+index+')'
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