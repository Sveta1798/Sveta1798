$(window).scroll(function(){
	var st = $(this).scrollTop();	
	$("#fon1 h1").css({
		"transform": "translate(0%,-"+ st/20 +"%"
	});
	$(".menu").css({
		"background": "rgba(255,255,255,.2)"
	});
});