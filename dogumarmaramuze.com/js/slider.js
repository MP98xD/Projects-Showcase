$(function() {
	$("#number_slideshow").number_slideshow({
		slideshow_autoplay: 'enable',//enable disable
		slideshow_time_interval: 4000,
		slideshow_window_background_color: "#fff",
		slideshow_window_padding: '0',
		slideshow_window_width: '940',
		slideshow_window_height: '394',
		slideshow_border_size: '0',
		slideshow_transition_speed: 500, //'normal','slow','fast' or numeral
		slideshow_show_button: 'enable',//enable disable
		slideshow_show_title: 'disable',//enable disable
		slideshow_button_text_color: '#CCC',
		slideshow_button_current_text_color: '#000',
		slideshow_button_background_color: '#333333',
		slideshow_button_current_background_color: '#FFFFFF',
		slideshow_loading_gif: 'images/loading.gif',//loading pic, you can replace it.
		slideshow_button_border_size: '0'
	});
});
