(function($){$(document).ready(function() {	/*header nav*/		$("li.dropdown").on("mouseenter mouseleave", function(){		  $(this).toggleClass("open");		});		$('.navbar .dropdown').hover(function() {			$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();		}, function() {			$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();		});		$('.navbar .dropdown > a').click(function() {			location.href = this.href;		});});$(window).resize(function() {	    	if ((window.innerWidth)>768) {		}	else {		}});$( window ).scroll(function() {});})(jQuery);