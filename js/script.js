// $(function() {
// 	$('#slideshow > div:gt(0)').hide();
// 	setInterval(function() {
// 		$('#slideshow > div:first')
// 		.fadeOut(1000)
// 		.next()
// 		.fadeIn(1000)
// 		.end()
// 		.appendTo('#slideshow');
// 	}, 3850);
// });

// (function($) {
// 	'use strict';
// 	$.fn.swapClass = function(remove, add) {
// 		this.removeClass(remove).addClass(add);
// 		return this;
// 	};
// }(jQuery));

var slides = document.querySelectorAll("#slides .slide");
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 2000);

function nextSlide() {
  slides[currentSlide].className = "slide";
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].className = "slide showing";
}
