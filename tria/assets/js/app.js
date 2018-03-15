	jQuery(function ($) {

		var menu = 0;
		$('.menu-burger').click(function () {
			var menu_r = $(".menu").html();
			menu++;
			if (menu == 1) {
				$('.menu_tel').css('width', '80vw');
				$('.menu_tel').css('display', 'flex');
				$('.menu_tel').html("<ul>" + menu_r + "</ul>");
			} else if (menu == 2) {
				$('.menu_tel').css('width', '0%');
				$('.menu_tel').html('');
				menu = 0;
			}
		});


		$('.owl-carousel').owlCarousel({
			margin: 10,
			loop: true,
			items: 6,
			slideTransition: 'linear',
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			responsive: {
				// breakpoint from 0 up
				0: {
					items: 1,
				},
				// breakpoint from 480 up
				480: {
					items: 2,
				},
				// breakpoint from 768 up
				768: {
					items: 3,
				},
				// breakpoint from 480 up
				970: {
					items: 4,
				},
			}
		});

		var background_natation = $("#nav-natation").data('back');
		var background_velo = $('#nav-velo').data('back');
		var backgorund_course = $('#nav-course').data('back');

		var background_natation_tab = $("#nav-natation").data('background');
		var background_velo_tab = $('#nav-velo').data('background');
		var backgorund_course_tab = $('#nav-course').data('background');

		$('#nav-natation-tab div').background_natation_tab;
		$('#nav-velo-tab div').background_velo_tab;
		$('#nav-course-tab div').background_velo_tab;


		$('#nav-natation-tab').click(function () {
			$('header').css('background-image', 'url(' + background_natation + ')');
		});
		$('#nav-velo-tab').click(function () {
			$('header').css('background-image', 'url(' + background_velo + ')');
		});
		$('#nav-course-tab').click(function () {
			$('header').css('background-image', 'url(' + backgorund_course + ')');
		});

	});