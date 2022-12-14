jQuery(document).ready(function ($) {
	if ($(window).width() < 767) {
		$("#unite").unitegallery({
			gallery_theme: "compact",
			slider_scale_mode: "fit",
			slider_enable_text_panel: true,
			strippanel_enable_handle: false,
			strippanel_background_color: "transparent",
			thumb_round_corners_radius: 15,
			thumb_height: 120,
			thumb_fixed_size: false,
			strip_space_between_thumbs: 15,
			gallery_min_height: 400,
			gallery_width: 3000,
		});
	} else {
		$("#unite").unitegallery({
			gallery_theme: "compact",
			slider_scale_mode: "fit",
			slider_enable_text_panel: true,
			strippanel_enable_handle: false,
			strippanel_background_color: "transparent",
			thumb_round_corners_radius: 15,
			thumb_height: 120,
			thumb_fixed_size: false,
			strip_space_between_thumbs: 15,
			gallery_min_height: 800,
			gallery_width: 3000,
		});
	}

	$(".menucontact,.btnContact").click(function (event) {
		event.preventDefault();
		$(".menucontact,.projet").toggleClass("ouvert");
	});

	$(".burger").click(function () {
		$(".menu").toggleClass("ouvert");
	});

	function scroll_to_top() {
		$(".scroll-top").click(function () {
			$("html,body").animate({ scrollTop: 0 }, "slow");
		});
		$(window).scroll(function () {
			if ($(window).scrollTop() < 250) {
				$(".scroll-top").fadeOut();
			} else {
				$(".scroll-top").fadeIn();
			}
		});
	}
	scroll_to_top("#");
});
