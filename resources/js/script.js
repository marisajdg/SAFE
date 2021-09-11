$('.js-scroll-trigger').click(function() {
		$('.navbar-collapse').collapse('hide');
});

function redirect(sURL) {
	location = sURL;
}

$(document).ready(function(){
		var height = $("#brand").height();
		var half = height / 2;
		$("#afe").css({ top: height, right: "1.7%" });
		$("#landingInfo").css({ bottom: half });
		$("#brand").animate({left: 0}, 1100);
}); 