   $(document).ready(function(){

	$('.carousel').carousel({
	  	interval: 3000
	});

	function scroll(){
		if($(window).scrollTop() === 0) {
			$(".navbar").css({height: "98px"});
			$(".navbar-brand.logo-nav img").css({height: "58px"});
			$(".nav").css({marginTop: "28px"});
			$(".navbar-brand.logo-nav").css({paddingTop: "25px"});
			return false;
		}else{
			$(".navbar").css({height: "50px"});
			$(".navbar-brand.logo-nav img").css({height: "30px"});
			$(".nav").css({marginTop: "0px"});
			$(".navbar-brand.logo-nav").css({paddingTop: "15px"});
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

	$("#btn_paneles_termicos").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#info_paneles_termicos").offset().top
	    }, 2000);
	    return false;
	});
	/**/
	$("#btn_bigsystem").click(function() {$('html, body').animate({scrollTop: $("#info_bigsystem").offset().top}, 2000);return false;});

	$("#btn_multisystem").click(function() {$('html, body').animate({scrollTop: $("#info_multisystem").offset().top}, 2000);return false;});

	$("#btn_megasystem").click(function() {$('html, body').animate({scrollTop: $("#info_megasystem").offset().top}, 2000);return false;});

	/*******************************/
	$("#btn_equipamiento_comercial").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#info_equipamiento_comercial").offset().top
	    }, 2000);
	    return false;
	});
	/**/
	$("#btn_vitrinas").click(function() {$('html, body').animate({scrollTop: $("#info_vitrinas").offset().top}, 2000);return false;});

	$("#btn_murales").click(function() {$('html, body').animate({scrollTop: $("#info_murales").offset().top}, 2000);return false;});

	$("#btn_islas").click(function() {$('html, body').animate({scrollTop: $("#info_islas").offset().top}, 2000);return false;});

	$("#btn_autocontenidos").click(function() {$('html, body').animate({scrollTop: $("#info_autocontenidos").offset().top}, 2000);return false;});

	$("#btn_congelados").click(function() {$('html, body').animate({scrollTop: $("#info_congelados").offset().top}, 2000);return false;});

	$("#btn_pasillos").click(function() {$('html, body').animate({scrollTop: $("#info_pasillos").offset().top}, 2000);return false;});

	/*******************************/
	$("#btn_sist_frigorificos").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#info_sistemas_frigorificos").offset().top
	    }, 2000);
	    return false;
	});

	$("#btn_equipamiento").click(function() {$('html, body').animate({scrollTop: $("#info_equipamiento").offset().top}, 2000);return false;});

	$("#btn_camaras").click(function() {$('html, body').animate({scrollTop: $("#info_camaras").offset().top}, 2000);return false;});

	$("#btn_puertas").click(function() {$('html, body').animate({scrollTop: $("#info_puertas").offset().top}, 2000);return false;});

	/*******************************/
	$("#btn_montajes").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#info_montajes").offset().top
	    }, 2000);
	    return false;
	});
	$("#btn_servicio").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#info_servicio").offset().top
	    }, 2000);
	    return false;
	});
	$("#btn_instalaciones").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#info_instalaciones").offset().top
	    }, 2000);
	    return false;
	});	
});