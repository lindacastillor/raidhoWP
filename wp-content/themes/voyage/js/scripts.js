// Display the optional Dev menu on top navigation

$(document).keypress(function(e){
	if(e.charCode === 97) {
		// Your Code
		$("#dev_nav").toggle();
	}
});

$(function () {
	$("#slider1").responsiveSlides({
		pager: false,
		auto: false,
		prevText: "-",
		nextText: "-",
		nav: true,
		manualControls: '#slider1-pager'
	});

	$(".slider2").responsiveSlides({
		pager: true,
		auto: false,
		nav: true,
		namespace: "centered-btns"
	});

	$("#slider3").responsiveSlides({
		pager: false,
		auto: false,
		prevText: "-",
		nextText: "-",
		nav: true,
		manualControls: '#slider3-pager'
	});
});

$(".fancybox").fancybox({
	prevEffect	: 'false',
	nextEffect	: 'false',
	maxHeight	: 700,
	fitToView	: true,
	width		: '100%',
	arrows		: false,
	autoSize	: false,
	closeBtn	: false,
	closeClick	: false,
	openEffect	: 'fade',
	closeEffect	: 'fade'
});
