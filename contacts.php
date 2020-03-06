<?php	include "header.php";?>		
	<main>
		<script>
			window.addEventListener('load',function(){
				document.querySelector('.header').remove();
				document.querySelector('.footer').remove();
				document.querySelector('.contacts-block').remove();
			})
			
		</script>
		<div class="wrapper">
			<div class="small-card">
				<div class="small-card__head">
					<div class="small-card__slider">
						<a href="#" class="small-card__slide"><img src="img/catalog/9.png" alt=""></a>
						<a href="#" class="small-card__slide"><img src="img/catalog/10.png" alt=""></a>
						<a href="#" class="small-card__slide"><img src="img/catalog/11.png" alt=""></a>
						<a href="#" class="small-card__slide"><img src="img/catalog/12.png" alt=""></a>
					</div>
				</div>
				<div class="small-card__body">
					<h4 class="small-card__title">«Ястреб 200» отпугиватель <br>крыс и мышей</h4>
					<div class="small-card__price">1 700</div>
				</div>
				<a href="#" class="small-card__link"></a>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	