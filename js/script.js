$('.slider-block__slider').slick({
	prevArrow: '<span class="fas fa-angle-left slider-block__arrow slider-block__arrow--prev" />',
	nextArrow: '<span class="fas fa-angle-right slider-block__arrow slider-block__arrow--next" />',
	dots: true,
	dotsClass: 'slick-dots slider-block__dots',
	customPaging: function(){return ''}
})