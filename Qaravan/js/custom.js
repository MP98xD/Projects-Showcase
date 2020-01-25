var isValidAnimate = false;
$(function () {
	$(".post .social .yorumlar .yorum").append($("<div class='clear'></div>"));
	touchGallery(".gallery");
	
	$(".actions .yorum_yap").click(function(e) {
		yorum_formu_ekle(this);
		return false;
	});
});
window.onload = function () {
	$(".gallery .wrapper ul li").width($(".gallery").width()-15);
	$(".gallery").css({"height": $(".gallery .wrapper ul li").height()+"px"});
}
function touchGallery(target) {
	$(target).append($("<div class='pricing'></div>"));
	$(target +" .pricing").each(function(index, element) {
		var price = $(this).parent().find(".wrapper ul li a:eq(0)").attr("title");
		$(this).append($("<span>"+ price +"<br>TL</span>"));
	});
	
	
	$( document ).on( "swipeleft swiperight", target +" li", function( event ) {
		if (!isValidAnimate) {
			var listitem = $( this ),
				// These are the classnames used for the CSS transition
				dir = event.type === "swipeleft" ? "left" : "right",
				// Check if the browser supports the transform (3D) CSS transition
				transition = $.support.cssTransform3d ? dir : false;
				startSwipe(listitem, transition);
		}
	});
}
function startSwipe(obj, dir) {
	var siblin = $(obj).parent().find("li");
	var wrapper = $(obj).parent().parent();
	var leftpos = $(wrapper).css("left");
	leftpos = leftpos.substring(0, leftpos.indexOf("px"))-0;
	
	var stepval = $(obj).width()+2;
	var leftval, inde;
	
	if (dir=="left" && $(obj).index() < $(siblin).size()-1) {
		inde = $(obj).index()+1;
		leftval = leftpos-stepval;
		isValidAnimate = true;
	}
	else if (dir=="right" && $(obj).index() > 0) {
		inde = $(obj).index()-1;
		leftval = leftpos+stepval;
		isValidAnimate = true;
	}
		
	if (isValidAnimate) {
		var pricing = $(wrapper).parent().find(".pricing");
		$(pricing).animate({top:"0px"}, "fast", function () {
			$(this).find("span").html($(obj).parent().find("li:eq("+ inde +") a").attr("title")+"<br>TL");
		});
		$(wrapper).animate({left: leftval}, "slow", function () {
			$(pricing).animate({top:"-68px"}, "fast");
			isValidAnimate = false;
		});
	}
}
function yorum_formu_ekle(element) {
	var actions = $(element).parent().parent();
	var new_name = $(element).attr("href").substr(1);
	
	var if_old_form = $(actions).parent().has(".yorumyap_formu").html();
	
	if (if_old_form != null) {
		$(actions).parent().find(".yorumyap_formu").slideToggle("slow");
	} else {		
		$.ajax({
			type: "GET",
			url: "includes/yorum_yap_formu.html",
			success: function (msg) {
				var new_form = $(msg).insertAfter(actions).trigger( "create" );
				$(new_form).find("form").attr("name", new_name).hide().slideDown("slow");
			}
		});
	}
}