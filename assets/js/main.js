jQuery(document).ready(function ($) {
	$("#unite").unitegallery({
		gallery_theme: "compact",
		slider_enable_text_panel: true,
		strippanel_enable_handle: false,
		strippanel_background_color: "transparent",
		thumb_round_corners_radius: 15,
		thumb_height: 120,
		thumb_fixed_size: false,
		strip_space_between_thumbs: 15,
		gallery_height: 800,
	});
	$(".menucontact").click(function () {
		$(this).toggleClass("ouvert");
		$(".projet").toggleClass("ouvert");
	});
});
