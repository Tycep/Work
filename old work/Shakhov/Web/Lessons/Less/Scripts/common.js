$(document).ready(function(){

	$('.logo img').click(function valid(){
		$("#main").show();
	$('html, body').animate({scrollTop: $('#boot').offset().top},0);

		$('html, body').animate({scrollTop: $('#main').offset().top},
			1750, function(){
				$("#boot").hide();
				$( ".chell" ).fadeIn( 1000, function(){
					$(".glados").animate({top: '-8px'}, 2000);
				});
			}
		);
	});
});