// Masonry activation + imagesLoaded with jQuery
var $container = $('.masonry');
// initialize Masonry after all images have loaded
$container.imagesLoaded( function() {
	$container.masonry({
	columnWidth: '.masonry_column',
	gutter: '.masonry_gutter',
	itemSelector: '.masonry_item'
	});
});

// Lazy Load
$(document).scroll(function () {
  var y = $(this).scrollTop();
  var h = window.innerHeight;
  $('.hidden_element').each(function () {
	var t = $(this).offset().top - h;
	if (y > t) {
			$(this).animate({'opacity':'1', 'margin-top':'0px'},400);
		}
	});
});

// Lazy Load Applied
// Home
$("ul.log > li").addClass("hidden_element");
$(".feat_project_home .wrap .feat_project_info").addClass("hidden_element");
// About
$("#about > div, #about .people_founders > div, #about .people_team > div ").addClass("hidden_element");
$("#about > div:nth-child(1), #about .wrap .section_pad").removeClass("hidden_element");
// Work
$("#recent_work > .project_wrapper .bl-party-three-w-captions ul > li").addClass("hidden_element");
$("#recent_work > .project_wrapper .bl-party-four-w-captions ul > li").addClass("hidden_element");
// Recent
$("#loader ul.log > li:nth-child(-n+5)").removeClass("hidden_element");


// Delay Home Container Elements
//quickly setting up shortcuts, personal preference
var head, lA, lB, lC, lD, h1;
header = $('.home_cover');
project = $('.feat_project_home');
lA = $('.home_cover_info > h1');

header.animate({opacity:1}, 600, function() {});
project.animate({opacity:1}, 600, function() {});
lA.delay(700).animate({opacity:1}, 400, function() {});
