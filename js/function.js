(function ($) {
    "use strict";

	/* Keep the site at a fixed browser scale on desktop and touch devices. */
	document.addEventListener('wheel', function (event) {
		if (event.ctrlKey || event.metaKey) {
			event.preventDefault();
		}
	}, { passive: false });

	document.addEventListener('keydown', function (event) {
		if ((event.ctrlKey || event.metaKey) && ['+', '-', '=', '0'].includes(event.key)) {
			event.preventDefault();
		}
	});

	['gesturestart', 'gesturechange', 'gestureend'].forEach(function (eventName) {
		document.addEventListener(eventName, function (event) {
			event.preventDefault();
		}, { passive: false });
	});
	
	var $window = $(window); 
	var $body = $('body'); 

	/* Start below-fold videos only when they are close to the viewport. */
	document.querySelectorAll('video[data-lazy-video]').forEach(function (video) {
		if ('IntersectionObserver' in window) {
			var videoObserver = new IntersectionObserver(function (entries, observer) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						video.play().catch(function () {});
						observer.disconnect();
					}
				});
			}, { rootMargin: '300px 0px' });
			videoObserver.observe(video);
		} else {
			video.play().catch(function () {});
		}
	});

	/* Preloader Effect */
	$window.on('load', function(){
		$(".preloader").fadeOut(600);
	});

	/* Sticky Header */	
	if($('.active-sticky-header').length){
		$window.on('resize', function(){
			setHeaderHeight();
		});

		function setHeaderHeight(){
	 		$("header.active-sticky-header").css("height", $('header.active-sticky-header .header-sticky').outerHeight());
		}	
	
		$window.on("scroll", function() {
			var fromTop = $(window).scrollTop();
			setHeaderHeight();
			var headerHeight = $('header.active-sticky-header .header-sticky').outerHeight()
			$("header.active-sticky-header .header-sticky").toggleClass("hide", (fromTop > headerHeight + 100));
			$("header.active-sticky-header .header-sticky").toggleClass("active", (fromTop > 600));
		});
	}	
	
	/* Slick Menu JS */
	$('#menu').slicknav({
		label : '',
		prependTo : '.responsive-menu'
	});

	if($("a[href='#top']").length){
		$(document).on("click", "a[href='#top']", function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	}

	/* Hero search form pickers */
	if ($('.hero-search-box').length) {
		var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
		var monthsShort = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		var weekdays = ['Su','Mo','Tu','We','Th','Fr','Sa'];
		var weekdaysShort = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
		var selectedDate = new Date();
		var viewDate = new Date();
		var selectedHour = 8;
		var selectedMin = 0;
		var selectedAmpm = 'AM';

		function pad(n) {
			return String(n).padStart(2, '0');
		}

		function formatDate(date) {
			return weekdaysShort[date.getDay()] + ', ' + monthsShort[date.getMonth()] + ' ' + pad(date.getDate()) + ', ' + date.getFullYear();
		}

		function formatTime() {
			return pad(selectedHour) + ' ' + selectedAmpm + ' : ' + pad(selectedMin);
		}

		function toHiddenTime() {
			var hour24 = selectedAmpm === 'PM' ? (selectedHour === 12 ? 12 : selectedHour + 12) : (selectedHour === 12 ? 0 : selectedHour);
			return pad(hour24) + ':' + pad(selectedMin);
		}

		function closePickers() {
			$('.hero-search-field').removeClass('is-open');
		}

		function renderCalendar() {
			var year = viewDate.getFullYear();
			var month = viewDate.getMonth();
			var firstDay = new Date(year, month, 1).getDay();
			var daysInMonth = new Date(year, month + 1, 0).getDate();
			var prevDays = new Date(year, month, 0).getDate();
			var html = '';
			html += '<div class="hero-calendar-head">';
			html += '<button type="button" class="hero-calendar-nav" data-cal="prev"><i class="fa-solid fa-chevron-left"></i></button>';
			html += '<strong>' + months[month] + ' ' + year + '</strong>';
			html += '<button type="button" class="hero-calendar-nav" data-cal="next"><i class="fa-solid fa-chevron-right"></i></button>';
			html += '</div><div class="hero-calendar-week">';
			weekdays.forEach(function (day) {
				html += '<span>' + day + '</span>';
			});
			html += '</div><div class="hero-calendar-days">';
			for (var i = 0; i < 42; i++) {
				var dayNum, cellDate, muted = false;
				if (i < firstDay) {
					dayNum = prevDays - firstDay + i + 1;
					cellDate = new Date(year, month - 1, dayNum);
					muted = true;
				} else if (i >= firstDay + daysInMonth) {
					dayNum = i - firstDay - daysInMonth + 1;
					cellDate = new Date(year, month + 1, dayNum);
					muted = true;
				} else {
					dayNum = i - firstDay + 1;
					cellDate = new Date(year, month, dayNum);
				}
				var active = cellDate.toDateString() === selectedDate.toDateString() ? ' is-active' : '';
				html += '<button type="button" class="' + (muted ? 'is-muted' : '') + active + '" data-date="' + cellDate.getFullYear() + '-' + pad(cellDate.getMonth() + 1) + '-' + pad(cellDate.getDate()) + '">' + dayNum + '</button>';
			}
			html += '</div>';
			$('#datePanel').html(html);
		}

		function renderTime() {
			var hoursHtml = '';
			var minsHtml = '';
			for (var h = 1; h <= 12; h++) {
				hoursHtml += '<li><button type="button" class="' + (h === selectedHour ? 'is-active' : '') + '" data-hour="' + h + '">' + pad(h) + '</button></li>';
			}
			for (var m = 0; m < 60; m += 5) {
				minsHtml += '<li><button type="button" class="' + (m === selectedMin ? 'is-active' : '') + '" data-min="' + m + '">' + pad(m) + '</button></li>';
			}
			$('.hero-time-hours').html(hoursHtml);
			$('.hero-time-mins').html(minsHtml);
			$('.hero-time-ampm').html(
				'<li><button type="button" class="' + (selectedAmpm === 'AM' ? 'is-active' : '') + '" data-ampm="AM">AM</button></li>' +
				'<li><button type="button" class="' + (selectedAmpm === 'PM' ? 'is-active' : '') + '" data-ampm="PM">PM</button></li>'
			);
		}

		function syncSearchValues() {
			$('#dateDisplay').text(formatDate(selectedDate));
			$('#pickupdate').val(selectedDate.getFullYear() + '-' + pad(selectedDate.getMonth() + 1) + '-' + pad(selectedDate.getDate()));
			$('#timeDisplay').text(formatTime());
			$('#pickuptime').val(toHiddenTime());
		}

		renderCalendar();
		renderTime();
		syncSearchValues();

		$(document).on('click', '.hero-search-field', function (e) {
			if ($(e.target).closest('.hero-search-panel').length) {
				return;
			}
			var $field = $(this);
			var wasOpen = $field.hasClass('is-open');
			closePickers();
			if (!wasOpen) {
				$field.addClass('is-open');
			}
		});

		$(document).on('click', function (e) {
			if (!$(e.target).closest('.hero-search-field').length) {
				closePickers();
			}
		});

		$(document).on('click', '[data-cal]', function (e) {
			e.stopPropagation();
			viewDate.setMonth(viewDate.getMonth() + ($(this).data('cal') === 'next' ? 1 : -1));
			renderCalendar();
		});

		$(document).on('click', '#datePanel [data-date]', function (e) {
			e.stopPropagation();
			var parts = $(this).data('date').split('-');
			selectedDate = new Date(parseInt(parts[0], 10), parseInt(parts[1], 10) - 1, parseInt(parts[2], 10));
			viewDate = new Date(selectedDate);
			syncSearchValues();
			renderCalendar();
			closePickers();
		});

		$(document).on('click', '[data-hour]', function (e) {
			e.stopPropagation();
			selectedHour = parseInt($(this).data('hour'), 10);
			renderTime();
			syncSearchValues();
		});

		$(document).on('click', '[data-min]', function (e) {
			e.stopPropagation();
			selectedMin = parseInt($(this).data('min'), 10);
			renderTime();
			syncSearchValues();
		});

		$(document).on('click', '[data-ampm]', function (e) {
			e.stopPropagation();
			selectedAmpm = $(this).data('ampm');
			renderTime();
			syncSearchValues();
		});

		$(document).on('click', '.hero-location-item', function (e) {
			e.stopPropagation();
			var value = $(this).data('value');
			var $field = $(this).closest('.hero-search-field');
			$field.find('.hero-search-value').text(value);
			$field.find('input[type="hidden"]').val(value);
			closePickers();
		});
	}

	/* Service picker */
	$(document).on("click", ".hero-service-item", function (e) {
		e.stopPropagation();
		var value = $(this).data("value");
		$("#service").val(value);
		$("#serviceDisplay").text(value);
		closeHeroPickers();
	});

	function closeHeroPickers(){
		$(".hero-search-field").removeClass("is-open");
	}

	$(document).on("click", ".service-item[data-service]", function (e) {
		e.preventDefault();
		var value = $(this).data("service");
		$("#service").val(value);
		$("#serviceDisplay").text(value);
		var target = document.getElementById("booking-search");
		if (target) {
			target.scrollIntoView({ behavior: "smooth", block: "center" });
		}
	});


	/* Hero Banner Slider JS */
	if ($('.hero-bg-slider').length) {
		const hero_slider = new Swiper('.hero-bg-slider .swiper', {
			slidesPerView: 1,
			loop: true,
			speed: 1600,
			watchSlidesProgress: true,
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			autoplay: {
				delay: 5500,
				disableOnInteraction: false
			},
			navigation: {
				nextEl: '.hero-slider-next',
				prevEl: '.hero-slider-prev'
			}
		});
	}

	/* Company Support Slider JS */
	if ($('.company-logo-slider').length) {
		const company_logo_slider = new Swiper('.company-logo-slider .swiper', {
			slidesPerView : 2,
			speed: 2000,
			spaceBetween: 20,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			breakpoints: {
				767:{
				  	slidesPerView: 	4,
				},
				1025:{
					slidesPerView:  4,
				}
			}
		});
	}

	/* Services Slider JS */
	if ($('.services-slider').length) {
		const services_slider = new Swiper('.services-slider .swiper', {
			slidesPerView: 'auto',
			speed: 900,
			spaceBetween: 24,
			loop: true,
			loopedSlides: 6,
			centeredSlides: true,
			grabCursor: true,
			autoplay: {
				delay: 4500,
				disableOnInteraction: false,
				pauseOnMouseEnter: true,
			},
			navigation: {
				nextEl: '.services-slider-next',
				prevEl: '.services-slider-prev',
			},
		});
	}

	/* Fleets Slider JS */
	if ($('.fleets-slider').length) {
		const fleets_slider = new Swiper('.fleets-slider .swiper', {
			slidesPerView : 1,
			speed: 900,
			spaceBetween: 30,
			loop: true,
			loopAdditionalSlides: 4,
			watchOverflow: true,
			grabCursor: true,
			resistanceRatio: 0.65,
			autoplay: {
				delay: 4200,
				disableOnInteraction: false,
				pauseOnMouseEnter: true,
			},
			navigation: {
				nextEl: '.fleets-slider-next',
				prevEl: '.fleets-slider-prev',
			},
			breakpoints: {
				576:{
					slidesPerView: 2,
				},
				992:{
					slidesPerView: 3,
				},
				1200:{
					slidesPerView: 4,
				}
			}
		});
	}
	
	/* Testimonial Slider JS */
	if ($('.testimonial-slider').length) {
		const testimonial_slider = new Swiper('.testimonial-slider .swiper', {
			slidesPerView : 'auto',
			speed: 900,
			spaceBetween: 24,
			loop: true,
			grabCursor: true,
			centeredSlides: true,
			autoplay: {
				delay: 4500,
				disableOnInteraction: false,
				pauseOnMouseEnter: true,
			},
		});
	}

	/* Testimonial Slider JS */
	if ($('.testimonial-slider-silver').length) {
		const testimonial_slider_silver = new Swiper('.testimonial-slider-silver .swiper', {
			slidesPerView : 1,
			speed: 1500,
			spaceBetween: 30,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			breakpoints: {
				768:{
					slidesPerView: 2,
				},
				1300:{
					slidesPerView: 3,
				}
			}
		});
	}
	
	/* Testimonial Slider JS */
	if ($('.testimonial-slider-gold').length) {
		const testimonial_slider_gold = new Swiper('.testimonial-slider-gold .swiper', {
			slidesPerView : 1,
			speed: 1500,
			spaceBetween: 30,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			navigation: {
				nextEl: '.testimonial-button-next-gold',
				prevEl: '.testimonial-button-prev-gold',
			},
			
		});
	}

	/* Service Single Slider JS */ 
	if ($('.page-single-image-slider').length) {
		const page_single_image_slider = new Swiper('.page-single-image-slider .swiper', {
			slidesPerView : 1,
			speed: 2500,
			spaceBetween: 30,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: '.page-single-image-pagination',
				clickable: true,
			}
		});
	}

	/* Progress Bar */
	if ($('.circle').length){	
		$('.circle').each(function() {			
			var el = $(this).circleProgress({value: 0});
			
			var rawValue = $(this).data('value'); 
				var progressValue = rawValue >= 1 ? 1 : rawValue;
				var progressBarOptions = {
					startAngle: -1.6,
					thickness: 4,
					fill: {
						color: window.getComputedStyle($(this)[0]).color 
					}
				};

			new Waypoint({
			  element: el.get(0),
			  handler: function() {
				// Initialize the progress bar
				el.circleProgress($.extend({}, progressBarOptions, {
					value: el.data('value')  
				})).on('circle-animation-progress', function(event, progress, stepValue) {
					
					var displayValue = Math.round(stepValue * 100); 
					$(this).find('.progress_value .pro_data').text(displayValue);
				});
					
				this.destroy();
			  },
			  offset: '80%'
			});			
		});		
	}

	/* Skill Bar */
	if ($('.skills-progress-bar').length) {
		$('.skills-progress-bar').waypoint(function() {
			$('.skillbar').each(function() {
				$(this).find('.count-bar').animate({
				width:$(this).attr('data-percent')
				},2000);
			});
		},{
			offset: '70%'
		});
	}

	/* Youtube Background Video JS */
	if ($('#herovideo').length) {
		var myPlayer = $("#herovideo").YTPlayer();
	}

	/* Init Counter */
	if ($('.counter').length) {
		$('.counter').counterUp({ delay: 6, time: 3000 });
	}

	/* Image Reveal Animation */
	if ($('.reveal').length) {
        gsap.registerPlugin(ScrollTrigger);
        let revealContainers = document.querySelectorAll(".reveal");
        revealContainers.forEach((container) => {
            let image = container.querySelector("img");
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: container,
                    toggleActions: "play none none none"
                }
            });
            tl.set(container, {
                autoAlpha: 1
            });
            tl.from(container, 1, {
                xPercent: -100,
                ease: Power2.out
            });
            tl.from(image, 1, {
                xPercent: 100,
                scale: 1,
                delay: -1,
                ease: Power2.out
            });
        });
    }


	/* Text Effect Animation */
	function initHeadingAnimation() {
		
		if($('.text-effect').length) {
			var textheading = $(".text-effect");

			if(textheading.length === 0) return; gsap.registerPlugin(SplitText); textheading.each(function(index, el) {
				
				el.split = new SplitText(el, { 
					type: "lines,words,chars",
					linesClass: "split-line"
				});
				
				if( $(el).hasClass('text-effect') ){
					gsap.set(el.split.chars, {
						opacity: .3,
						x: "-7",
					});
				}
				el.anim = gsap.to(el.split.chars, {
					scrollTrigger: {
						trigger: el,
						start: "top 92%",
						end: "top 60%",
						markers: false,
						scrub: 1,
					},

					x: "0",
					y: "0",
					opacity: 1,
					duration: .7,
					stagger: 0.2,
				});
				
			});
		}
		
		if ($('.text-anime-style-1').length) {
			let staggerAmount 	= 0.05,
				translateXValue = 0,
				delayValue 		= 0.5,
			   animatedTextElements = document.querySelectorAll('.text-anime-style-1');
			
			animatedTextElements.forEach((element) => {
				let animationSplitText = new SplitText(element, { type: "chars, words" });
					gsap.from(animationSplitText.words, {
					duration: 1,
					delay: delayValue,
					x: 20,
					autoAlpha: 0,
					stagger: staggerAmount,
					scrollTrigger: { trigger: element, start: "top 85%" },
					});
			});		
		}
		
		if ($('.text-anime-style-2').length) {				
			let	 staggerAmount 		= 0.03,
				 translateXValue	= 20,
				 delayValue 		= 0.1,
				 easeType 			= "power2.out",
				 animatedTextElements = document.querySelectorAll('.text-anime-style-2');
			
			animatedTextElements.forEach((element) => {
				let animationSplitText = new SplitText(element, { type: "chars, words" });
					gsap.from(animationSplitText.chars, {
						duration: 1,
						delay: delayValue,
						x: translateXValue,
						autoAlpha: 0,
						stagger: staggerAmount,
						ease: easeType,
						scrollTrigger: { trigger: element, start: "top 85%"},
					});
			});		
		}
		
		if ($('.text-anime-style-3').length) {		
			let	animatedTextElements = document.querySelectorAll('.text-anime-style-3');
			
			 animatedTextElements.forEach((element) => {
				//Reset if needed
				if (element.animation) {
					element.animation.progress(1).kill();
					element.split.revert();
				}

				element.split = new SplitText(element, {
					type: "lines,words,chars",
					linesClass: "split-line",
				});
				gsap.set(element, { perspective: 400 });

				gsap.set(element.split.chars, {
					opacity: 0,
					x: "50",
				});

				element.animation = gsap.to(element.split.chars, {
					scrollTrigger: { trigger: element,	start: "top 90%" },
					x: "0",
					y: "0",
					rotateX: "0",
					opacity: 1,
					duration: 1,
					ease: Back.easeOut,
					stagger: 0.02,
				});
			});		
		}
	}
	
	if (typeof SplitText !== 'undefined' && typeof gsap !== 'undefined') {
		if (document.fonts && document.fonts.ready) {
			document.fonts.ready.then(() => {
				initHeadingAnimation();
			});
		} else {
			window.addEventListener("load", initHeadingAnimation);
		}
    }

	
	/* Parallaxie js */
	/* var $parallaxie = $('.parallaxie');
	if($parallaxie.length && ($window.width() > 1024))
	{
		if ($window.width() > 768) {
			$parallaxie.parallaxie({
				speed: 0.55,
				offset: 0,
			});
		}
	} */

	/* Zoom Gallery screenshot */
	if ($.fn.magnificPopup) {
		$('.gallery-items').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom',
		image: {
			verticalFit: true,
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
			  return element.find('img');
			}
		}
		});
	}

	/* Contact form validation */
	var $contactform = $("#contactForm");
	if ($contactform.length && $.fn.validator) {
		$contactform.validator({focus: false}).on("submit", function (event) {
			if (!event.isDefaultPrevented()) {
				event.preventDefault();
				submitForm();
			}
		});
	}

	function submitForm(){
		/* Ajax call to submit form */
		$.ajax({
			type: "POST",
			url: "form-process.php",
			data: $contactform.serialize(),
			success : function(text){
				if (text === "success"){
					formSuccess();
				} else {
					submitMSG(false,text);
				}
			}
		});
	}

	function formSuccess(){
		$contactform[0].reset();
		submitMSG(true, "Message Sent Successfully!")
	}

	function submitMSG(valid, msg){
		if(valid){
			var msgClasses = "h4 text-success";
		} else {
			var msgClasses = "h4 text-danger";
		}
		$("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
	}
	/* Contact form validation end */

	/* Booking search form */
	var $rentForm = $("#rentForm");
	if ($rentForm.length) {
		$rentForm.on("submit", function (event) {
			event.preventDefault();

			var service = $("#service").val();
			var pickup = $("#pickuplocation").val();
			var dropoff = $("#droplocation").val();
			var date = $("#pickupdate").val();
			var time = $("#pickuptime").val();

			if (!service) {
				$("#msgSubmit").removeClass().addClass("h3 text-danger").text("Please select a service.");
				return;
			}
			if (!pickup || !dropoff) {
				$("#msgSubmit").removeClass().addClass("h3 text-danger").text("Please select your pickup and drop-off locations.");
				return;
			}
			if (!date || !time) {
				$("#msgSubmit").removeClass().addClass("h3 text-danger").text("Please select your date and time.");
				return;
			}

			var params = new URLSearchParams($(this).serialize());
            window.location.href = "booking?" + params.toString();
		});
	}

	/* Animated Wow Js */	
	if (typeof WOW !== 'undefined') {
		new WOW().init();
	}

	/* Popup Video */
	if ($.fn.magnificPopup && $('.popup-video').length) {
		$('.popup-video').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: true
		});
	}		
	
})(jQuery);
