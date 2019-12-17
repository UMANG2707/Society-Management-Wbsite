"use strict";

$(window).load(function() {
	$(".loader_inner").fadeOut();
	$(".loader").delay(200).fadeOut("slow");

	initMasonry();
	return true
});

$(document).ready(function(){
	"use string";

	initControls();
	initRange();
	languageDropDownInit();
	initScrollTop();
	carouselInit();
	initContacMap();
	initBannerMap1();
	galleryInit();
	initAudio();
	initMasonryPosts();
	initGalleryVerticalThumb();
	countDown();
	shopGalleryInit();

	$(function () {
		$('.plus-btn').on('click',function(){
			var $qty=$(this).closest('.items-count-block').find('input');
			var currentVal = parseInt($qty.val(), 10);
			if (!isNaN(currentVal)) {
				$qty.val(currentVal + 1);
			}
		});
		$('.minus-btn').on('click',function(){
			var $qty=$(this).closest('.items-count-block').find('input');
			var currentVal = parseInt($qty.val(), 10);
			if (!isNaN(currentVal) && currentVal > 0) {
				$qty.val(currentVal - 1);
			}
		});
	});
});


$('.preview .like, .favourite, .like-box, .like-btn').each(function(){
	$(this).on('click', function(){
		$(this).toggleClass('active');
		return false;
	});
});
//initControls()
function initControls() {

	if($('.products-cart-container, .item-nav-block').length>0){
		var number = document.getElementById('number');
		number.onkeydown = function(e) {
		if(!((e.keyCode > 95 && e.keyCode < 106)
			|| (e.keyCode > 47 && e.keyCode < 58) 
			|| e.keyCode == 8)) {
				return false;
			}
		}
	}

	if($('.select').length>0){
		$('.select').selectmenu({
			width: '100%'
		});
	}
	if($('.tabs').length>0){
		$('.tabs').tabs({active: 0});
	}
	if($('.flags-select').length>0){
		$('.flags-select').selectmenu({
			icons: [
				{find: '.usa'},
				{find: '.ru'},
				{find: '.fr'}
			]
		});
	}
	if($('.accordion-control').length>0){
		$('.accordion-control').accordion({
			// autoHeight: false,
			// heightStyle: "content"
		});
	}
	if($('.datepicker').length>0){
		$('.datepicker').datepicker().datepicker("setDate", new Date());
		$('.datepicker-btn').on('click', function (){
			$('.datepicker').datepicker("show");
			return false;
		});
	}
	if($('.rating-block').length>0){
		$('.rating').rating({
			extendSymbol: function (rate) {
				$(this).tooltip({
					container: 'body',
					placement: 'bottom',
					title: 'Rate ' + rate
				});
			},
			filled: 'glyphicon glyphicon-star active',
			empty: 'glyphicon glyphicon-star'
		});
	}
	if($('.progressbar').length>0){
		$('.progressbar').each(function(){			
			var progress_percents = parseInt($(this).attr('data-value'), 10);
			
			$(this).progressbar({value:1});
			$(this).append('<span class="progressbar-percent"></span>');
			$(this).find('.progressbar-percent').html(progress_percents + '%');
			$(this).parent().find('.ui-progressbar-value').animate({
				width: progress_percents + '%'
			}, 500);
		})
	}
}
var countDown = function(){
	if($(".countdown-container").length>0){
		$(".countdown-container").each(function(){
			$(this).countdown("2017/01/01", function(event) {
				$('.days', this).text(
					event.strftime('%D')
				);
				$('.hours', this).text(
					event.strftime('%H')
				);
				$('.mins', this).text(
					event.strftime('%M')
				);
				$('.secs', this).text(
					event.strftime('%S')
				);
			});
		})
	}
};

//initResponsiveNav
var initResponsiveNav = function() {
	var navTree = $('.nav-block .main-navigation .navigation-listing');
	var submitBtn = $('.nav-block .submit-nav');
	var navClone = navTree.clone().addClass('mobile-nav').removeClass('visible-md visible-lg hidden-xs');
	var submitClone = submitBtn.clone().removeClass('hidden-xs').hide();
		$('.mobile-block').append(navClone);
		$('.mobile-block').append(submitClone);
		$(navClone).toggleClass('collapse');
		// $(submitClone).addClass('hidden-xs');

		$('.mobile_menu_btn').on('click', function() {
			$(".sandwich").toggleClass('active');
			navClone.toggleClass('collapse');
			submitClone.toggle();
			$('.mobile-block').toggleClass('active');
		});
	$(window).resize(function(){
		if ($(window).width() > 767){
			if(navClone.css('display') == 'block') {
				navClone.addClass('collapse');
				// submitClone.removeClass('hidden-xs').addClass('visible-xs');
				$('.mobile-block').toggleClass('active');
			}
			
			$(".sandwich").removeClass('active');
		} else if ($(window).width() < 767){
			navClone.addClass('collapse');
			// submitClone.addClass('hidden-xs').removeClass('visible-xs');
			$('.mobile-block').removeClass('active');
		}
	});
};
initResponsiveNav();

//initRange

function initRange() {
	function addCommas(nStr) {
		var x, x1,x2;
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	}
	$(".slider").slider({
		min: 0,
		max: 1000000,
		step: 100000,
		values: [200000,500000],
		range: true,
		stop: function(event, ui) {
			$("input#min-field").val("$" + addCommas(ui.values[0].toString()));
			$("input#max-field").val("$" + addCommas(ui.values[1]));
		},
		slide: function(event, ui){
			$("input#min-field").val("$" + addCommas(ui.values[0].toString()));
			$("input#max-field").val("$" + addCommas(ui.values[1]));
		}
	});
	$('.range-wrap').each(function(){
		$("input#min-field").val("$" + addCommas($(".slider").slider("values", 0)));
		$("input#max-field").val("$" + addCommas($(".slider").slider("values", 1)));
		$('.min-value').text($('.slider').slider('option', 'min'));
		$('.max-value').text($('.slider').slider('option', 'max'));
		

		$("input#min-field").change(function(){
			var value1=$("input#min-field").val().replace(/\D/g,'');
			var value2=$("input#max-field").val().replace(/\D/g,'');

			if(parseInt(value1, 10) > parseInt(value2, 10)){
				value1 = value2;
				$("input#min-field").val(value1);
			}
			$(".slider").slider("values",0,value1);	
		});

		
		$("input#max-field").change(function(){
			var value1=$("input#min-field").val().replace(/\D/g,'');
			var value2=$("input#max-field").val().replace(/\D/g,'');
			
			if (value2 > 1000000) { value2 = 1000000; jQuery("input#max-field").val(1000000)}

			if(parseInt(value1, 10) > parseInt(value2, 10)){
				value2 = value1;
				$("input#max-field").val(value2);
			}
			$(".slider").slider("values",1,value2);
		});
	});
}

//languageDropDownInit

function languageDropDownInit(){
	createDropDown();

	var $dropTrigger = $(".dropdown dt a");
	var $languageList = $(".dropdown dd ul");
	
	// open and close list when button is clicked
	$dropTrigger.on('click',function() {
		$languageList.slideToggle(200);
		$dropTrigger.toggleClass("active");
	});

	// close list when anywhere else on the screen is clicked
	$(document).bind('click', function(e) {
		var $clicked = $(e.target);
		if (! $clicked.parents().hasClass("dropdown"))
		$languageList.slideUp(200);
	});

	// when a language is clicked, make the selection and then hide the list
	$(".dropdown dd ul li a").on('click',function() {
		var clickedValue = $(this).parent().attr("class");
		var clickedTitle = $(this).find("em").html();
		$("#target dt").removeClass().addClass(clickedValue);
		$("#target dt em").html(clickedTitle);
		$languageList.hide();
	});

	// actual function to transform select to definition list
	function createDropDown(){
		var $form = $("div.country-select form");
		$form.hide();
		var source = $(".country-options");
		source.removeAttr("autocomplete");
		var selected = source.find("option:selected");
		var options = $("option", source);
		$(".country-select").append('<dl id="target" class="dropdown"></dl>')
		$("#target").append('<dt class="' + selected.val() + '"><a href="#"><div class="flag-border"><span class="flag"></span></div><em>' + selected.text() + '</em><span class="arrow"></span></a></dt>')
		$("#target").append('<dd><ul></ul></dd>')
		options.each(function(){
			$("#target dd ul").append('<li class="' + $(this).val() + '"><a href=""><span class="flag"></span><em>' + $(this).text() + '</em></a></li>');
		});
	}
}

//initScrollTop

function initScrollTop(){
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scroll-top-btn').fadeIn();
		} else {
			$('.scroll-top-btn').fadeOut();
		}
	});
	$('.scroll-top-btn').on('click', function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
}

//initMasonry

function initMasonry(){
	var el = $('.js-masonry');
		el.each(function(i) {
		var $this = $(this);
		var settings = [];
		if ($this.data('settings')) {
			settings = $this.data('settings');
		}
		$this.isotope(
			settings
		);
	});
	$('.js-masonry').each(function(){
		var qsRegex;
		var buttonFilter;
		var $filterLinks;
		$filterLinks = $('.navigation-gallery .navigation a.filter');
		// init Isotope
		var $container = $(this);
		
		$container.isotope({
			itemSelector: '.gallery-element',
			// layoutMode: 'fitRows',
			filter: function() {
			  var $this = $(this);
			  var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
			  var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
			  return searchResult && buttonResult;
			}
		})

		$('.navigation-gallery .navigation').on( 'click', '.filter', function() {
			buttonFilter = $( this ).attr('data-filter');
			$container.isotope();
			return false
		});
		if ($('.our-objects-gallery.style-3').length>0){
			$('.navigation-gallery .navigation a.is-checked').trigger('click');
		}
		// change is-checked class on buttons
		 $('.navigation-gallery .navigation').each( function( i, buttonGroup ) {
			var $buttonGroup = $( buttonGroup );
			$buttonGroup.on( 'click', '.filter', function() {
				$buttonGroup.find('.is-checked').removeClass('is-checked');
				$( this ).addClass('is-checked');
			});
		});
	});
}

//initMasonryPosts

function initMasonryPosts(){
	if($('.masonry-container').length>0) {
		$(window).load(function(){
			$('.masonry-container').masonry({
				itemSelector: '.grid-item',
				columnWidth: '.grid-item',
				percentPosition: true
			})
		});	
	}
}

//carouselInit

function carouselInit() {
	var items_obj;
	if($('.obj-carousel').length>0) {
		items_obj = 4;
		// var jcarousel_obj = $('.obj-carousel');
		$('.obj-carousel').each(function(){
			var jcarousel_obj = $(this);
				jcarousel_obj
				.on('jcarousel:reload jcarousel:create', function () {
				var width = jcarousel_obj.innerWidth();
				var inner_width = jcarousel_obj.find('.object-slider').width();
				if (width >= 992) {                    
					items_obj = 4;
				} else if (width >= 767) {                    
					items_obj = 3;
				} else if (width >= 640) {                    
					items_obj = 2;
				} else {
					items_obj = 1;
				}
				$.when(
					jcarousel_obj.css('width',inner_width + 'px')
					).then(function(){
						width = (jcarousel_obj.innerWidth() / items_obj) - ((30 * items_obj- 30)/items_obj);
					jcarousel_obj.jcarousel('items').css('width', width + 'px');
				});
			})
			
		})
		.jcarousel({
			wrap: 'circular'
		});
		
		$('.object-slider').find('.prev-slide')
		.jcarouselControl({
			target: '-=1'
			// target: '-='+items_offers
		});

		$('.object-slider').find('.next-slide')
		.jcarouselControl({
			target: '+=1'
			// target: '+='+items_offers
		});
		
	}

	var items_ag;
	if($('.ag-carousel').length>0) {
		items_ag = 4;
		// var jcarousel_obj = $('.obj-carousel');
		$('.ag-carousel').each(function(){
			var jcarousel_ag = $(this);
				jcarousel_ag
				.on('jcarousel:reload jcarousel:create', function () {
				var width = jcarousel_ag.innerWidth();
				var inner_width = jcarousel_ag.parent().width();  
				if (width >= 992) {                    
					items_ag = 4;
				} else if (width >= 767) {                    
					items_ag = 3;
				} else if (width >= 640) {                    
					items_ag = 2;
				} else {
					items_ag = 1;
				}
				$.when(
					jcarousel_ag.css('width',inner_width + 'px')
					).then(function(){
						width = (jcarousel_ag.innerWidth() / items_ag) - ((30 * items_ag- 30)/items_ag);
					jcarousel_ag.jcarousel('items').css('width', width + 'px');
				});
			})
			
		})
		.jcarousel({
			wrap: 'circular'
		});
		
		$('.best-agents .prev-slide')
		.jcarouselControl({
			target: '-=1'
			// target: '-='+items_offers
		});

		$('.best-agents .next-slide')
		.jcarouselControl({
			target: '+=1'
			// target: '+='+items_offers
		});
		
	}
	
	if($('.country-carousel').length>0) {
		var holder;
			holder = '.country-holder';
		var items_c = 6;
		var jcarousel_country = $('.country-carousel');
		jcarousel_country
		.on('jcarousel:reload jcarousel:create', function () {
			var width = $('.container').innerWidth();
			var inner_width = $('.country-holder').parent().width(); 
			
			if (width > 991) {                    
				items_c = 5;
			} else if (width >= 768) {                    
				items_c = 4;
			} else if (width >= 600) {                    
				items_c = 2;
			} else {
				items_c = 1;
			}
			$.when(
				jcarousel_country.css('width',inner_width + 'px')
			).then(function(){
				width = (jcarousel_country.innerWidth() / items_c) - ((30 * items_c - 30)/items_c);
				jcarousel_country.jcarousel('items').css('width', width + 'px');
				if(width<220) {
					jcarousel_country.jcarousel('items').children('a').css('width', '100%');
				} else {
					jcarousel_country.jcarousel('items').children('a').css('width', '175px');
				}
			});
		})
		.jcarousel({
			wrap: 'circular'
		});
		$('.country-holder .prev-slide')
		.jcarouselControl({
			target: '-=1'
			// target: '-='+items_p
		});
		$('.country-holder .next-slide')
		.jcarouselControl({
			target: '+=1'
			// target: '+='+items_p
		});
	}
	if($('.country-holder.style-2 .country-carousel').length>0) {
			holder = '.country-holder.style-2';
		var items_c = 3;
		var jcarousel_country = $('.country-holder.style-2 .country-carousel');
		jcarousel_country
		.on('jcarousel:reload jcarousel:create', function () {
			var width = $('.container').innerWidth();
			var inner_width = $('.country-holder.style-2').parent().width(); 
			
			if (width > 991) {                    
				items_c = 3;
			} else if (width >= 768) {                    
				items_c = 3;
			} else if (width >= 600) {                    
				items_c = 2;
			} else {
				items_c = 1;
			}
			$.when(
				jcarousel_country.css('width',inner_width + 'px')
			).then(function(){
				width = (jcarousel_country.innerWidth() / items_c) - ((30 * items_c - 30)/items_c);
				jcarousel_country.jcarousel('items').css('width', width + 'px');
				if(width<220) {
					jcarousel_country.jcarousel('items').children('a').css('width', '100%');
				} else {
					jcarousel_country.jcarousel('items').children('a').css('width', '175px');
				}
			});
		})
		.jcarousel({
			wrap: 'circular'
		});
		$('.country-holder .prev-slide')
		.jcarouselControl({
			target: '-=1'
			// target: '-='+items_p
		});
		$('.country-holder .next-slide')
		.jcarouselControl({
			target: '+=1'
			// target: '+='+items_p
		});
	}

	if($('.blog-posts-carousel').length>0) {
			holder = '.blog-posts-holder';
		var items_p = 2;
		var jcarousel_posts = $('.blog-posts-carousel');
		jcarousel_posts
		.on('jcarousel:reload jcarousel:create', function () {
			var width = $('.container').innerWidth();
			var inner_width = $('.blog-posts-holder').parent().width(); 
			
			if (width > 991) {                    
				items_p = 2;
			} else {                    
				items_p = 1;
			}
			$.when(
				jcarousel_posts.css('width',inner_width + 'px')
			).then(function(){
				width = (jcarousel_posts.innerWidth() / items_p) - ((30 * items_p - 30)/items_p);
				jcarousel_posts.jcarousel('items').css('width', width + 'px');
				if(width<220) {
					jcarousel_posts.jcarousel('items').children('a').css('width', '100%');
				} else {
					jcarousel_posts.jcarousel('items').children('a').css('width', '175px');
				}
			});
		})
		.jcarousel({
			wrap: 'circular'
		});
		$('.blog-posts-holder .prev-slide')
		.jcarouselControl({
			target: '-=1'
			// target: '-='+items_p
		});
		$('.blog-posts-holder .next-slide')
		.jcarouselControl({
			target: '+=1'
			// target: '+='+items_p
		});
	}
	
	if($('.partners-carousel').length>0) {
			holder = '.partners-holder';
		var items_p = 6;
		var jcarousel_partners = $('.partners-carousel');
		jcarousel_partners
		.on('jcarousel:reload jcarousel:create', function () {
			var width = $('.container').innerWidth();
			var inner_width = $('.partners-holder').parent().width(); 
			
			if (width > 991) {                    
				items_p = 6;
			} else if (width >= 768) {                    
				items_p = 4;
			} else if (width >= 600) {                    
				items_p = 3;
			} else if (width >= 450) {                    
				items_p = 2;
			}else {
				items_p = 1;
			}
			$.when(
				jcarousel_partners.css('width',inner_width + 'px')
			).then(function(){
				width = (jcarousel_partners.innerWidth() / items_p) - ((30 * items_p - 30)/items_p);
				jcarousel_partners.jcarousel('items').css('width', width + 'px');
				if(width<220) {
					jcarousel_partners.jcarousel('items').children('a').css('width', '100%');
				} else {
					jcarousel_partners.jcarousel('items').children('a').css('width', '175px');
				}
			});
		})
		.jcarousel({
			wrap: 'circular'
		});
		$('.partners-holder .prev-slide')
		.jcarouselControl({
			target: '-=1'
			// target: '-='+items_p
		});
		$('.partners-holder .next-slide')
		.jcarouselControl({
			target: '+=1'
			// target: '+='+items_p
		});
	}

$('.item-photos').each(function(){
	var connector = function(itemNavigation, carouselStage) {
		return carouselStage.jcarousel('items').eq(itemNavigation.index());
	};

	var carouselStage = $('#slides-to-show')
	.on('jcarousel:create jcarousel:reload', function() {
		var element = $(this),
		width = element.innerWidth();
		element.jcarousel('items').css('width', width + 'px');
	})
	.jcarousel({
		wrap: 'circular'
	});

	$('#slideshow-main .jcarousel-arrows .prev-slide', this)
		.on('jcarouselcontrol:inactive', function() {
			$(this).addClass('inactive');
		})
		.on('jcarouselcontrol:active', function() {
			$(this).removeClass('inactive');
		})
		.jcarouselControl({
			target: '-=1'
		});

	$('#slideshow-main .jcarousel-arrows .next-slide', this)
		.on('jcarouselcontrol:inactive', function() {
			$(this).addClass('inactive');
		})
		.on('jcarouselcontrol:active', function() {
			$(this).removeClass('inactive');
		})
		.jcarouselControl({
			target: '+=1'
		});

	var items_t = 8;
	var carouselNavigation = $('.main-thumbnail');
	carouselNavigation
	.on('jcarousel:create jcarousel:reload', function() {
		var width = $('body').width();
		var inner_width = $('.item-photos').width(); 

		if (width > 1400) {
			items_t = 8;
		} else if (width > 1200) {
			items_t = 6;
		} else if (width > 991) {
			items_t = 5;
		} else if (width >= 768) {
			items_t = 4;
		} else if (width >= 640) {
			items_t = 3;
		} else {
			items_t = 2;
		}
		$.when(
			carouselNavigation.css('width',inner_width + 'px')
		).then(function(){
			width = (carouselNavigation.innerWidth()) / items_t-1.5;
			carouselNavigation.jcarousel('items').css('width', width + 'px');
			if(width<220) {
				carouselNavigation.jcarousel('items').children('li').css('width', '100%');
			} else {
				carouselNavigation.jcarousel('items').children('li').css('width', '175px');
			}
		});
	})
	.jcarousel({
		wrap: 'circular'
	});

	carouselNavigation.jcarousel('items').each(function() {
		var item = $(this);
		var target = connector(item, carouselStage);

		item
			.on('jcarouselcontrol:active', function() {
				carouselNavigation.jcarousel('scrollIntoView', this);
				item.addClass('active');
			})
			.on('jcarouselcontrol:inactive', function() {
				item.removeClass('active');
			})
			.jcarouselControl({
				target: target,
				carousel: carouselStage
			});
	});
});

$('.full-width-slider .slider-entry').each(function(){
	var connector = function(itemNavigation, carouselStage) {
		return carouselStage.jcarousel('items').eq(itemNavigation.index());
	};

	var jcarousel_full_width = $('.full-width-slider .slider-entry');

	var carouselStage = $('#slides-to-show')
	.on('jcarousel:create jcarousel:reload', function() {
		var element = $(this),
		width = $(window).width();
		element.jcarousel('items').css('width', width + 'px');
	})
	.jcarousel({
		wrap: 'circular'
	});

	$('.prev-slide', this)
	.on('jcarouselcontrol:inactive', function() {
		$(this).addClass('inactive');
	})
	.on('jcarouselcontrol:active', function() {
		$(this).removeClass('inactive');
	})
	.jcarouselControl({
		target: '-=1'
	});

$('.next-slide', this)
	.on('jcarouselcontrol:inactive', function() {
		$(this).addClass('inactive');
	})
	.on('jcarouselcontrol:active', function() {
		$(this).removeClass('inactive');
	})
	.jcarouselControl({
		target: '+=1'
	});

	var items_t = 8;
	var carouselNavigation = $('#slideshow-carousel');
	carouselNavigation
	.on('jcarousel:create jcarousel:reload', function() {
		var width = $('.full-width-slider .slider-entry').innerWidth();
		var inner_width = $('#slideshow-carousel').parent().width(); 

		if (width > 1400) {
			items_t = 8;
		} else if (width > 1200) {
			items_t = 6;
		} else if (width > 991) {
			items_t = 5;
		} else if (width >= 768) {
			items_t = 4;
		} else if (width >= 640) {
			items_t = 3;
		} else {
			items_t = 2;
		}
		$.when(
			carouselNavigation.css('width',inner_width + 'px')
		).then(function(){
			width = (carouselNavigation.innerWidth()) / items_t -2;
			carouselNavigation.jcarousel('items').css('width', width + 'px');
		});
	})
	.jcarousel({
		wrap: 'circular'
	});

		carouselNavigation.jcarousel('items').each(function() {
			var item = $(this);
			var target = connector(item, carouselStage);

			item
				.on('jcarouselcontrol:active', function() {
					carouselNavigation.jcarousel('scrollIntoView', this);
					item.addClass('active');
				})
				.on('jcarouselcontrol:inactive', function() {
					item.removeClass('active');
				})
				.jcarouselControl({
					target: target,
					carousel: carouselStage
				});
		});
});
	
	if($('.testimonials-holder').length>0) {
		$('.testimonials-holder .testimonials-carousel').each(function(){
			var jcarousel_testimonial = $('.testimonials-holder .testimonials-carousel');
			jcarousel_testimonial.on('jcarousel:reload jcarousel:create', function () {
				var width = $('.testimonials-holder').width();
				$(this).jcarousel('items').css('width', width + 'px');
			})
			.jcarousel({
				wrap: 'circular'
			});
		})
		
		
		$('.testimonials-holder .prev-slide')
		.jcarouselControl({
			target: '-=1'
		});

		$('.testimonials-holder .next-slide')
		.jcarouselControl({
			target: '+=1'
		});
	}

	if($('.hero-slider-holder').length>0) {
		var jcarousel_testimonial = $('.hero-slider-holder .hero-slider');
		jcarousel_testimonial
		.on('jcarousel:reload jcarousel:create', function () {
			var width = jcarousel_testimonial.innerWidth();
			 jcarousel_testimonial.jcarousel('items').css('width', width + 'px');
		})
		.jcarousel({
			wrap: 'circular'
		});
		$('.hero-slider-holder .jcarousel-pagination')
		.on('jcarouselpagination:active', 'a', function() {
			$(this).addClass('active');
		})
		.on('jcarouselpagination:inactive', 'a', function() {
			$(this).removeClass('active');
		})
		.jcarouselPagination({
			item: function(page) {
				return '<a href="#' + page + '" class="page-item">' + page + '</a>';
			}
		});
	}

	if($('.style-2 .testimonials-carousel, .style-4 .testimonials-carousel, .style-6 .testimonials-carousel').length>0) {
			holder = '.style-2 .testimonials-holder';
		var items_t = 2;
		var jcarousel_testimonial2 = $('.style-2 .testimonials-carousel, .style-4 .testimonials-carousel, .style-6 .testimonials-carousel');
		jcarousel_testimonial2
		.on('jcarousel:reload jcarousel:create', function () {
			var width = $('.container').innerWidth();
			var inner_width = $('.style-2 .testimonials-carousel, .style-4 .testimonials-carousel, .style-6 .testimonials-carousel').parent().width(); 
			
			if (width > 991) {                    
				items_t = 2;
			} else if (width >= 768) {                    
				items_t = 2;
			} else {
				items_t = 1;
			}
			$.when(
				jcarousel_testimonial2.css('width',inner_width + 'px')
			).then(function(){
				width = (jcarousel_testimonial2.innerWidth()) / items_t - 30;
				jcarousel_testimonial2.jcarousel('items').css('width', width + 'px');
				if(width<220) {
					jcarousel_testimonial2.jcarousel('items').children('a').css('width', '100%');
				} else {
					jcarousel_testimonial2.jcarousel('items').children('a').css('width', '175px');
				}
			});
		})
		.jcarousel({
			wrap: 'circular'
		});

		//jcarouselControl
		$('.style-2 .testimonials-holder .prev-slide')
		.jcarouselControl({
			target: '-=1'
		});
		$('.style-2 .testimonials-holder .next-slide')
		.jcarouselControl({
			target: '+=1'
		});
	}

	if($('.testimonials-holder').length>0) {
		var jcarousel_testimonial = $('.style-5 .testimonials-carousel');
		jcarousel_testimonial
		.on('jcarousel:reload jcarousel:create', function () {
			var width = $('.style-5 .testimonials-holder').width();
			$('.style-5 .testimonials-carousel').css('width', width + 'px');
			$('.style-5 .testimonials-holder ul li').css('width', width + 'px');
		})

		//jcarousel
		.jcarousel({
			wrap: 'circular'
		});

		//jcarouselControl
		$('.testimonials-holder .prev-slide')
		.jcarouselControl({
			target: '-=1'
		});

		$('.testimonials-holder .next-slide')
		.jcarouselControl({
			target: '+=1'
		});
	}
	if($('.sidebar .widget.agents').length>0) {
		var jcarousel_agents_widg = $('.sidebar .widget.agents .wg-ag-carousel');
		jcarousel_agents_widg
		.on('jcarousel:reload jcarousel:create', function () {
			var width = jcarousel_agents_widg.innerWidth();
			jcarousel_agents_widg.jcarousel('items').css('width', width + 'px');
		})
		.jcarousel({
			wrap: 'circular'
		});
		
		$('.sidebar .widget.agents .prev-slide')
		.jcarouselControl({
			target: '-=1'
		});

		$('.sidebar .widget.agents .next-slide')
		.jcarouselControl({
			target: '+=1'
		});
	}
	if($('.property-image-carousel').length>0) {
		var jcarousel_property_item = $('.property-image-carousel');
		jcarousel_property_item
		.on('jcarousel:reload jcarousel:create', function () {
		})
		.jcarousel({
			wrap: 'both'
		});
		
		$('.property-carousel-holder .prev-slide')
		.jcarouselControl({
			target: '-=1'
		});

		$('.property-carousel-holder .next-slide')
		.jcarouselControl({
			target: '+=1'
		});
		
		$('.property-carousel-holder a').on('click', function(e){
			e.preventDefault();
			var new_i = $(this).parent().index();
			var old_i = $('.property-image .img-large.active').index();
			if(new_i != old_i) {
				var elem = $('.property-image .img-large.active');
				$('.property-image').css('height', $('.property-image').height()+'px');
				$('.property-image .img-large.active').fadeOut(400,function(){
					elem.removeClass('active');
					var new_elem = $('.property-image .img-large:eq('+new_i+')');                    
					new_elem.fadeIn(400, function(){new_elem.addClass('active');$('.property-image').css('height','')});
				});
			}
		})
	}
	
	var d_items = 3;
	if($('.double-offers-carousel').length>0) {
		var carouselStage      = $('.double-offers-carousel').jcarousel();
		var carouselNavigation = $('.double-carousel-control > .carousel').jcarousel();
		
		var connector = function(itemNavigation, carouselStage) {
			var idx = itemNavigation.index();            
			idx = Math.floor(idx/d_items)*d_items +Math.floor(d_items/3);
			if(d_items == 3) { idx--;}
			return carouselStage.jcarousel('items').eq(idx);
		};
		carouselStage.on('jcarousel:reload jcarousel:create', function () {        
			var width = $('#content').innerWidth();
			var inner_width = $('.double-carousel-holder').width();   
			
			if (width > 767) {
				d_items = 3;
			} else if(width>480) {                    
				d_items = 2;
			} else {
				d_items = 1;
			}
			
			$.when(
				carouselStage.css('width',inner_width + 'px')
			).then(function(){
					
				var width = (carouselStage.innerWidth()) / d_items;

				carouselStage.jcarousel('items').css('width', width + 'px');
					
				initCarouselNavigation();
			});
		}).jcarousel('reload');

		//initCarouselNavigation
		 var initCarouselNavigation = function() {
			carouselNavigation.jcarousel('items').each(function() {                
				var item = $(this);
				item.removeClass('active left right');

				var target = connector(item, carouselStage);
				item
				.on('jcarouselcontrol:active', function() {
					carouselNavigation.jcarousel('scrollIntoView', this);
					item.addClass('active');                
					if(d_items == 3) {
						if(!item.prev().hasClass('active') && item.hasClass('active')){
							item.addClass('left');
						} 
						if(item.prev().hasClass('active') && item.prev().prev().hasClass('active')) {
							item.addClass('right');
						}
					} else if(d_items == 2) {
						if(!item.prev().hasClass('active') && item.hasClass('active')) {
							item.addClass('left');
						}
						if(item.prev().hasClass('active') && item.prev().hasClass('active')) {
							item.addClass('right');
						}
					} else {
						item.addClass('left right');
					}
				})
				.on('jcarouselcontrol:inactive', function() {
					item.removeClass('active');
					if(d_items == 3) {
						if(item.prev().hasClass('active') && !item.next().hasClass('active')) item.removeClass('left');
						if(!item.prev().hasClass('active') && !item.prev().hasClass('active')) item.removeClass('right');
					}  else if(d_items == 2) {
						if(item.prev().hasClass('active') && !item.next().hasClass('active')) item.removeClass('left');
						if(!item.prev().hasClass('active') && !item.prev().hasClass('active')) item.removeClass('right');
					} else {
						item.removeClass('left right');
					}
				})
				.jcarouselControl({
					target: target,
					carousel: carouselStage
				});
			});

			$('.double-carousel-control > .prev-slide')
			.on('jcarouselcontrol:active', function() {
				$(this).removeClass('inactive');
			})
			.on('jcarouselcontrol:inactive', function() {
				$(this).addClass('inactive');
			})
			.jcarouselControl({
				target: '-='+d_items
			});

			$('.double-carousel-control > .next-slide')
			.on('jcarouselcontrol:active', function() {
				$(this).removeClass('inactive');
			})
			.on('jcarouselcontrol:inactive', function() {
				$(this).addClass('inactive');
			})
			.jcarouselControl({
				target: '+='+d_items
			});
		};
	}	
}

//galleryInit
function galleryInit(){
	$('.construction-item').each(function(index, element){

		var itemId = $(this).attr('id', 'item' + index);
		var idValue = $(this).attr('id');

		var connector = function(itemNavigation, carouselStage) {
			return carouselStage.jcarousel('items').eq(itemNavigation.index());
		};

		var carouselStage      = $(this).find('#slides-to-show')
		.on('jcarousel:create jcarousel:reload', function() {
			var element = $(this),
			width = element.innerWidth();
			element.jcarousel('items').css('width', width + 'px');
		})
		.jcarousel({
			wrap: 'circular'
		});
		var carouselNavigation = $(this).find('#slideshow-carousel').jcarousel({
			wrap: 'circular'
		});

		carouselNavigation.jcarousel('items').each(function() {
			var item = $(this);
			var target = connector(item, carouselStage);

			item
				.on('jcarouselcontrol:active', function() {
					carouselNavigation.jcarousel('scrollIntoView', this);
					item.addClass('active');
				})
				.on('jcarouselcontrol:inactive', function() {
					item.removeClass('active');
				})
				.jcarouselControl({
					target: target,
					carousel: carouselStage
				});
		});
			
		$('#' + idValue).find('.jcarousel-arrows .prev-slide').jcarouselControl({
			target: '-=1'
		});

		$('#' + idValue).find('.jcarousel-arrows .next-slide').jcarouselControl({
			target: '+=1'
		});
	});
}


//initBannerMap1
var map;
function initBannerMap1(){
	if(!document.getElementById('map-banner-canvas')) return false;
	function initialize(){
		
		var mapOptions = {
			scrollwheel: false,
			zoom: 12,
			disableDefaultUI: true,
			center: new google.maps.LatLng(locations[0][1], locations[0][2])
		};

		map = new google.maps.Map(document.getElementById('map-banner-canvas'), mapOptions);

		for(var i in locations) {
			var marker;
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map,
				icon: locations[i][3]
			});
		}
	}
	disableMapPan('map-banner-canvas');
	google.maps.event.addDomListener(window, 'load', initialize);
	return true; 
}

//shopGalleryInit
function shopGalleryInit(){
	if($('.shop-item-gallery').length>0){
		$('.shop-item-gallery').each(function(index, element){

			var itemId = $(this).attr('id', 'item' + index);
			var idValue = $(this).attr('id');

			var connector = function(itemNavigation, carouselStage) {
				return carouselStage.jcarousel('items').eq(itemNavigation.index());
			};

			var carouselStage      = $(this).find('#slides-to-show')
			.on('jcarousel:create jcarousel:reload', function() {
				var element = $(this),
				width = element.innerWidth();
				element.jcarousel('items').css('width', width + 'px');
			})
			//jcarousel
			.jcarousel({
				wrap: 'circular'
			});
			var carouselNavigation = $(this).find('#slideshow-carousel')

			var items_ag = 4;
			carouselNavigation.on('jcarousel:reload jcarousel:create', function () {
				var width = $(window).width();
				var inner_width = $('.shop-item-gallery').width();  
				if (width >= 992) {                    
					items_ag = 4;
				}else {
					items_ag = 3;
				}
					width = (carouselNavigation.innerWidth() / items_ag) - ((8 * items_ag - 8)/items_ag);
					carouselNavigation.jcarousel('items').css('width', width + 'px');
			}).jcarousel({
				wrap: 'circular'
			});
			carouselNavigation.jcarousel('items').each(function() {
				var item = $(this);
				var target = connector(item, carouselStage);

				item
					.on('jcarouselcontrol:active', function() {
						carouselNavigation.jcarousel('scrollIntoView', this);
						item.addClass('active');
					})
					.on('jcarouselcontrol:inactive', function() {
						item.removeClass('active');
					})
					.jcarouselControl({
						target: target,
						carousel: carouselStage
					});
			});
				
			$('#' + idValue).find('.jcarousel-arrows .prev-slide').jcarouselControl({
				target: '-=1'
			});

			$('#' + idValue).find('.jcarousel-arrows .next-slide').jcarouselControl({
				target: '+=1'
			});
		});
	}
}

//initContacMap
function initContacMap() {
	if(!document.getElementById('contact-map')) return false; 
	function initialize() {
		var image = {
			url: 'images/markers/green-map-marker.png'
		};
		var orangeImg = {
			url: 'images/markers/orange-map-marker.png'
		};
		var darkGreenImg = {
			url: 'images/markers/dark-green-map-marker.png'
		};
		var darkGreenImg2 = {
			url: 'images/markers/dark-green-map-marker-2.png'
		};

		var myLatlng = new google.maps.LatLng(40.71903012, -73.98419201);

		var mapOptions = {
			zoom: 17,                
			scrollwheel: false,
			disableDefaultUI: true,
			center: myLatlng
		};

		if ($('body').hasClass('orange-scheme')){
			map = new google.maps.Map(document.getElementById('contact-map'),
			mapOptions);

			var beachMarker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				icon: orangeImg
			});
		} else if ($('body').hasClass('turquoise-sheme')){
			map = new google.maps.Map(document.getElementById('contact-map'),
			mapOptions);

			var beachMarker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				icon: darkGreenImg
			});
		} else if ($('body').hasClass('dark-green-sheme')){
			map = new google.maps.Map(document.getElementById('contact-map'),
			mapOptions);

			var beachMarker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				icon: darkGreenImg2
			});
		} else{
			map = new google.maps.Map(document.getElementById('contact-map'),
			mapOptions); 

			var beachMarker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				icon: image
			});
		}
		
		
		disableMapPan('contact-map');
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	return true; 
}
function addMapMarker(lat, lng, title, baloon) {
	var myLatLng = new google.maps.LatLng(lat, lng);
	var markerIconGreen = new google.maps.MarkerImage("images/map-marker.png", null, null, null, new google.maps.Size(24,37));
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		icon: markerIcon,
		title: title
	});
	
	if(baloon) {
		var baloonOptions = {
			 content: '<div class="baloon"><img src="'+ baloon.img+ '" alt="'+title+'"> <div class="data"><div class="title">'+title+'</div>'+baloon.content+'<div class="price">'+baloon.price+'</div></div></div>',
			 closeBoxURL: "",
			 pixelOffset: new google.maps.Size(-440,55)
		};
		google.maps.event.addListener(marker, "click", function() {
			if(infobox_handler != undefined){
				infobox_handler.setMap(null);
			}
			infobox_handler = new InfoBox(baloonOptions);
			infobox_handler.open(map, this);
	   });  
	}
	
	marker.setMap(map);
}

//disableMapPan
function disableMapPan(map_id) {
	//disable map pan for mobile devices               
	var isMobile = function () {
		try{
			document.createEvent("TouchEvent");
			return true;
		}
		catch(e){
			return false;
		}
	};
	if(isMobile() && $("#"+map_id).length>0) {
		map.setOptions( {
			draggable: false
		});

		var dragFlag = false;
		var start = 0, end = 0;

		var thisTouchStart = function(e)
		{
			dragFlag = true;
			start = e.touches[0].pageY;
		}

		var thisTouchEnd = function()
		{
			dragFlag = false;
		}

		var thisTouchMove = function (e)
		{
			if ( !dragFlag ) return;
			end = e.touches[0].pageY;
			window.scrollBy( 0,( start - end ) );
		}

		document.getElementById(map_id).addEventListener("touchstart", thisTouchStart, true);
		document.getElementById(map_id).addEventListener("touchend", thisTouchEnd, true);
		document.getElementById(map_id).addEventListener("touchmove", thisTouchMove, true);
	}
}

function initGalleryVerticalThumb(){
	if ($('.items-gallery').length>0){
		// We only want these styles applied when javascript is enabled
		$('div.content').css('display', 'block');
		var gallery = $('#thumbs');
		// Initialize Advanced Galleriffic Gallery
		gallery.galleriffic({
			delay:                     2500,
			numThumbs:                 7,
			enableTopPager:            true,
			enableBottomPager:         true,
			maxPagesToShow:            7,
			imageContainerSel:         '#slideshow',
			controlsContainerSel:      '#controls',
			loadingContainerSel:       '#loading',
			renderSSControls:          false,
			renderNavControls:         true,
			prevLinkText:              '',
			nextLinkText:              '',
			enableHistory:             false,
			autoStart:                 false,
			syncTransitions:           true,
			defaultTransitionDuration: 900,
			onPageTransitionOut:       function(callback) {
				this.fadeTo('fast', 0.0, callback);
			},
			onPageTransitionIn:        function() {
				this.fadeTo('fast', 1.0);
			}
		});
		gallery.find('ul.thumbs > li.more').show();
	}
}

//initAudio
function initAudio(){
	if ($('audio').length>0){
		$('audio').audioPlayer({
			classPrefix: 'player', // default value: 'audioplayer'
			strPlay: '', // default value: 'Play'
			strPause: '', // default value: 'Pause'
			strVolume: 'Volume', // default value: 'Volume'
		});
	}	
}			
