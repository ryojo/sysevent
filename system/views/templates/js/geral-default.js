$(function () {
	
	//Abrir e Fechar - Menu Mobile
	$('.nav-toggle, .nav-close').click(function(e) {
		
		e.preventDefault();
		$('.nav').toggleClass('active');

	});

	//Aparecer Fundo Barra Menu - Mobile e Desktop
	$(window).scroll(function() {
		if ($(this).scrollTop() > 30) {
			$('.header').addClass('fixed');
		}else{
			$('.header').removeClass('fixed');
		}
	});

});