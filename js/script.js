$(document).ready(function(){
	$('.carousel').carousel({
	  	interval: 3000
	});

	function scroll(){
		if($(window).scrollTop() === 0) {
			$(".navbar").css({height: "98px"});
			$(".navbar-brand.logo-nav img").css({height: "58px"});
			$(".nav").css({marginTop: "28px"});
			return false;
		}else{
			$(".navbar").css({height: "50px"});
			$(".navbar-brand.logo-nav img").css({height: "30px"});
			$(".nav").css({marginTop: "0px"});
			return false;
		}
	}

	if( $(window).width() > 768) {

		scroll();
		$(window).scroll(function(){
			scroll();
		});

	}

	$('#carousel_comentarios').carousel({
		interval: 3000
	});

});