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

// Add class to hide menu element
$('ul#nav li:contains("Recent")').addClass('hide_mobile');

// Delay Home Container Elements
//quickly setting up shortcuts, personal preference
var head, lA, lB, lC, lD, h1;
header = $('.home_cover');
project = $('.feat_project_home');
lA = $('.home_cover_info > h1');

header.animate({opacity:1}, 600, function() {});
project.animate({opacity:1}, 600, function() {});
lA.delay(700).animate({opacity:1}, 400, function() {});


// Cycle Images form Work Post
// $(function () {
//     //alert("Hello");
//     var p = 0;

//     var interval;

//     var imgstack = [];

//     // var imgs = $( ".cycled-featured img" );

//     for (i = 0; i < $('.cycled-images').children().length; i++) {
//         imgstack.push($('.cycled-images').find('img').eq(i).text());
//     }

//     //alert(imgstack);

//     $('.cycled-featured').mouseover(function () {
//         interval = setInterval(
//             function changeImg() {
//                 if (p < imgstack.length) {

//                     var img = imgstack[p];
//                     //$('.thumb').attr('src', img);
//                     $('.cycled-featured').html(img);
//                     p = p + 1;
//                 }

//                 else {
//                     p = 0;
//                 }
//             }
//         , 1000);
//     });



//     $('.cycled-featured').mouseout(function () {
//         clearInterval(interval);
//         p = 0;
//         var img = imgstack[p];
//         //$('.thumb').attr('src', 'Images/1.jpg');
//         $('.cycled-featured').html(img);
//     });
// });




$(document).ready(function(){
    var allImg = document.querySelectorAll(".cheese img");
    var images = [];
    for (var i = 0; i < allImg.length; i++) {
        images.push(allImg[i].src);
    }
    var Ding = '';
    var firstImg = document.getElementById("main").src;
    $('.main img').hover(function(){
        var Counter = 0;
        Ding = setInterval(function(){
            if(Counter <=1){
                Counter++;
                $('.main img').attr('src',images[Counter]);
            }
            else{
                Counter = 0;
                $('.main img').attr('src',images[Counter]);
            }
        }, 500);
    },function(){
        clearInterval(Ding);
    });
});
