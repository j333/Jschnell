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

});

//GOOGLE MAPS
window.onload = function () {
    var styles = [
    	{
            featureType: 'poi.business',
            elementType: 'all',
            stylers: [
                { hue: '#000000' },
                { saturation: -100 },
                { lightness: 100 },
                { visibility: 'off' }
            ]
        }
    ];

var options = {
    mapTypeControlOptions: {
        mapTypeIds: ['Styled']
    },
    center: new google.maps.LatLng(-32.8943609,-68.8242109),
    zoom: 13,
    disableDefaultUI: true, 
    mapTypeId: 'Styled',
    scrollwheel: false,
    zoomControl: true,
};
var div = document.getElementById('map-canvas');
var map = new google.maps.Map(div, options);


var companyLogo = new google.maps.MarkerImage('img/map.png',
    new google.maps.Size(45,50),
    new google.maps.Point(0,0),
    new google.maps.Point(22,50)
);
var companyPos = new google.maps.LatLng(-32.8943609,-68.8242109);
var companyMarker = new google.maps.Marker({
    position: companyPos,
    map: map,
    icon: companyLogo,
    title:"Jschnell Group"
});

var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
map.mapTypes.set('Styled', styledMapType);

}