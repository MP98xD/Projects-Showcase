// JavaScript Document
var sliding = false;
var int_slider = false;
$(function () {
	slider_baslat("#image_slider", 5000, 1500);
	
	function slider_baslat(obj, zaman, sure) {
		$("<div id='dot_slider'>").insertAfter(obj);
		
		$(obj + ">div").each(function(index, element) {
			var dot_cur = $(element).hasClass("aktif");
			if (dot_cur) {dot_cur = "aktif";}
			else {dot_cur = "";}
			
			$("#dot_slider").append("<a href='#' class='"+ dot_cur +"'></a>");
		});
		$("#dot_slider").append("<div class='clear'></div>");
		
		int_slider = setInterval("anasayfa_slider('"+ obj +"', "+ sure +");", zaman);
		
		$("#dot_slider a").each(function(index, element) {
			$(element).click(function(e) {
				clearInterval(int_slider);
				
				if (!sliding) anasayfa_slider(obj, sure, zaman, index);
				else setTimeout("$('#dot_slider a:eq("+ index +")').trigger('click');", sure);
				
				return false;
			});
		});
	}
});
function anasayfa_slider(obj, sure, zaman, slide) {
	sliding = true;

	var current = $(obj + ">div.aktif");
	if (slide != null) {
		var next = $(obj + ">div:eq("+ slide +")");
	} else {
		var next = current.next();
		if (next.length < 1) next = $(obj + ">div:first");
	}
	
	next.addClass("next").css("opacity", 1);
	var current_index = $(obj + ">div.aktif").index();
	var next_index = $(obj + ">div.next").index();
	$("#dot_slider a:eq("+ next_index +")").addClass("aktif");
	$("#dot_slider a:eq("+ current_index +")").removeClass("aktif");
	
	current.animate({opacity:0}, sure, null, function () {
		current.removeClass("aktif");
		next.addClass("aktif").removeClass("next");
		sliding = false;
		if (slide != null) {
			int_slider = setInterval("anasayfa_slider('"+ obj +"', "+ sure +");", zaman);
		}
	});
}