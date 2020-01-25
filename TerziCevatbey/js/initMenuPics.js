window.onload = initImages;

function initImages() {
	var doLoc = location.href;
		
	document.getElementById("anaSayfa").onmouseover = function (){this.style.backgroundImage="url(images/anaSayfa_hover.png)"}
	document.getElementById("kurumsal").onmouseover = function (){this.style.backgroundImage="url(images/kurumsal_hover.png)"}
	document.getElementById("belgelerimiz").onmouseover = function (){this.style.backgroundImage="url(images/belgeler_hover.png)"}
	document.getElementById("hizmetlerimiz").onmouseover = function (){this.style.backgroundImage="url(images/hizmetler_hover.png)"}
	document.getElementById("nasilYapilir").onmouseover = function (){this.style.backgroundImage="url(images/nasilYapilir_hover.png)"}
	document.getElementById("iletisim").onmouseover = function (){this.style.backgroundImage="url(images/iletisim_hover.png)"}
	
		if (doLoc.indexOf("page=") == -1) {
			document.getElementById("anaSayfa").style.backgroundImage="url('images/anaSayfa_hover.png')";
			document.getElementById("anaSayfa").childNodes[0].style.cursor = 'default';
			document.getElementById("anaSayfa").childNodes[0].onclick = function (){return false};
			document.getElementById("kurumsal").style.backgroundImage="url('images/kurumsal.png')";
			document.getElementById("belgelerimiz").style.backgroundImage="url('images/belgeler.png')";
			document.getElementById("hizmetlerimiz").style.backgroundImage="url('images/hizmetler.png')";
			document.getElementById("nasilYapilir").style.backgroundImage="url('images/nasilYapilir.png')";
			document.getElementById("iletisim").style.backgroundImage="url('images/iletisim.png')";
			
			document.getElementById("anaSayfa").onmouseout = function (){this.style.backgroundImage="url(images/anaSayfa_hover.png)"}
			document.getElementById("kurumsal").onmouseout = function (){this.style.backgroundImage="url(images/kurumsal.png)"}
			document.getElementById("belgelerimiz").onmouseout = function (){this.style.backgroundImage="url(images/belgeler.png)"}
			document.getElementById("hizmetlerimiz").onmouseout = function (){this.style.backgroundImage="url(images/hizmetler.png)"}
			document.getElementById("nasilYapilir").onmouseout = function (){this.style.backgroundImage="url(images/nasilYapilir.png)"}
			document.getElementById("iletisim").onmouseout = function (){this.style.backgroundImage="url(images/iletisim.png)"}
		}
		if (doLoc.indexOf("index.php?page=kurumsal") > -1) {
			document.getElementById("anaSayfa").style.backgroundImage="url('images/anaSayfa.png')";
			document.getElementById("kurumsal").style.backgroundImage="url('images/kurumsal_hover.png')";
			document.getElementById("kurumsal").childNodes[0].style.cursor = 'default';
			document.getElementById("kurumsal").childNodes[0].onclick = function (){return false};
			document.getElementById("belgelerimiz").style.backgroundImage="url('images/belgeler.png')";
			document.getElementById("hizmetlerimiz").style.backgroundImage="url('images/hizmetler.png')";
			document.getElementById("nasilYapilir").style.backgroundImage="url('images/nasilYapilir.png')";
			document.getElementById("iletisim").style.backgroundImage="url('images/iletisim.png')";
			
			document.getElementById("anaSayfa").onmouseout = function (){this.style.backgroundImage="url(images/anaSayfa.png)"}
			document.getElementById("kurumsal").onmouseout = function (){this.style.backgroundImage="url(images/kurumsal_hover.png)"}
			document.getElementById("belgelerimiz").onmouseout = function (){this.style.backgroundImage="url(images/belgeler.png)"}
			document.getElementById("hizmetlerimiz").onmouseout = function (){this.style.backgroundImage="url(images/hizmetler.png)"}
			document.getElementById("nasilYapilir").onmouseout = function (){this.style.backgroundImage="url(images/nasilYapilir.png)"}
			document.getElementById("iletisim").onmouseout = function (){this.style.backgroundImage="url(images/iletisim.png)"}
		}
		if (doLoc.indexOf("index.php?page=belgeler") > -1) {
			document.getElementById("anaSayfa").style.backgroundImage="url('images/anaSayfa.png')";
			document.getElementById("kurumsal").style.backgroundImage="url('images/kurumsal.png')";
			document.getElementById("belgelerimiz").style.backgroundImage="url('images/belgeler_hover.png')";
			document.getElementById("belgelerimiz").childNodes[0].style.cursor = 'default';
			document.getElementById("belgelerimiz").childNodes[0].onclick = function (){return false};
			document.getElementById("hizmetlerimiz").style.backgroundImage="url('images/hizmetler.png')";
			document.getElementById("nasilYapilir").style.backgroundImage="url('images/nasilYapilir.png')";
			document.getElementById("iletisim").style.backgroundImage="url('images/iletisim.png')";
			
			document.getElementById("anaSayfa").onmouseout = function (){this.style.backgroundImage="url(images/anaSayfa.png)"}
			document.getElementById("kurumsal").onmouseout = function (){this.style.backgroundImage="url(images/kurumsal.png)"}
			document.getElementById("belgelerimiz").onmouseout = function (){this.style.backgroundImage="url(images/belgeler_hover.png)"}
			document.getElementById("hizmetlerimiz").onmouseout = function (){this.style.backgroundImage="url(images/hizmetler.png)"}
			document.getElementById("nasilYapilir").onmouseout = function (){this.style.backgroundImage="url(images/nasilYapilir.png)"}
			document.getElementById("iletisim").onmouseout = function (){this.style.backgroundImage="url(images/iletisim.png)"}
		}
		if (doLoc.indexOf("page=hizmetler") > -1) {
			document.getElementById("anaSayfa").style.backgroundImage="url('images/anaSayfa.png')";
			document.getElementById("kurumsal").style.backgroundImage="url('images/kurumsal.png')";
			document.getElementById("belgelerimiz").style.backgroundImage="url('images/belgeler.png')";
			document.getElementById("hizmetlerimiz").style.backgroundImage="url('images/hizmetler_hover.png')";
			document.getElementById("hizmetlerimiz").childNodes[0].style.cursor = 'default';
			document.getElementById("hizmetlerimiz").childNodes[0].onclick = function (){return false};
			document.getElementById("nasilYapilir").style.backgroundImage="url('images/nasilYapilir.png')";
			document.getElementById("iletisim").style.backgroundImage="url('images/iletisim.png')";
			
			document.getElementById("anaSayfa").onmouseout = function (){this.style.backgroundImage="url(images/anaSayfa.png)"}
			document.getElementById("kurumsal").onmouseout = function (){this.style.backgroundImage="url(images/kurumsal.png)"}
			document.getElementById("belgelerimiz").onmouseout = function (){this.style.backgroundImage="url(images/belgeler.png)"}
			document.getElementById("hizmetlerimiz").onmouseout = function (){this.style.backgroundImage="url(images/hizmetler_hover.png)"}
			document.getElementById("nasilYapilir").onmouseout = function (){this.style.backgroundImage="url(images/nasilYapilir.png)"}
			document.getElementById("iletisim").onmouseout = function (){this.style.backgroundImage="url(images/iletisim.png)"}
		}
		if (doLoc.indexOf("page=nasilYapilir") > -1) {
			document.getElementById("anaSayfa").style.backgroundImage="url('images/anaSayfa.png')";
			document.getElementById("kurumsal").style.backgroundImage="url('images/kurumsal.png')";
			document.getElementById("belgelerimiz").style.backgroundImage="url('images/belgeler.png')";
			document.getElementById("hizmetlerimiz").style.backgroundImage="url('images/hizmetler.png')";
			document.getElementById("nasilYapilir").style.backgroundImage="url('images/nasilYapilir_hover.png')";
			document.getElementById("nasilYapilir").childNodes[0].style.cursor = 'default';
			document.getElementById("nasilYapilir").childNodes[0].onclick = function (){return false};
			document.getElementById("iletisim").style.backgroundImage="url('images/iletisim.png')";
			
			document.getElementById("anaSayfa").onmouseout = function (){this.style.backgroundImage="url(images/anaSayfa.png)"}
			document.getElementById("kurumsal").onmouseout = function (){this.style.backgroundImage="url(images/kurumsal.png)"}
			document.getElementById("belgelerimiz").onmouseout = function (){this.style.backgroundImage="url(images/belgeler.png)"}
			document.getElementById("hizmetlerimiz").onmouseout = function (){this.style.backgroundImage="url(images/hizmetler.png)"}
			document.getElementById("nasilYapilir").onmouseout = function (){this.style.backgroundImage="url(images/nasilYapilir_hover.png)"}
			document.getElementById("iletisim").onmouseout = function (){this.style.backgroundImage="url(images/iletisim.png)"}
		}
		if (doLoc.indexOf("page=iletisim") > -1) {
			document.getElementById("anaSayfa").style.backgroundImage="url('images/anaSayfa.png')";
			document.getElementById("kurumsal").style.backgroundImage="url('images/kurumsal.png')";
			document.getElementById("belgelerimiz").style.backgroundImage="url('images/belgeler.png')";
			document.getElementById("hizmetlerimiz").style.backgroundImage="url('images/hizmetler.png')";
			document.getElementById("nasilYapilir").style.backgroundImage="url('images/nasilYapilir.png')";
			document.getElementById("iletisim").style.backgroundImage="url('images/iletisim_hover.png')";
			document.getElementById("iletisim").childNodes[0].style.cursor = 'default';
			document.getElementById("iletisim").childNodes[0].onclick = function (){return false};
			
			document.getElementById("anaSayfa").onmouseout = function (){this.style.backgroundImage="url(images/anaSayfa.png)"}
			document.getElementById("kurumsal").onmouseout = function (){this.style.backgroundImage="url(images/kurumsal.png)"}
			document.getElementById("belgelerimiz").onmouseout = function (){this.style.backgroundImage="url(images/belgeler.png)"}
			document.getElementById("hizmetlerimiz").onmouseout = function (){this.style.backgroundImage="url(images/hizmetler.png)"}
			document.getElementById("nasilYapilir").onmouseout = function (){this.style.backgroundImage="url(images/nasilYapilir.png)"}
			document.getElementById("iletisim").onmouseout = function (){this.style.backgroundImage="url(images/iletisim_hover.png)"}
		}
		
	initNon();
	initHizmetMenu();
	initNasilMenu();
}

function initNon() {
		var allTags = document.getElementsByTagName("*");
		
		for (var i=0; i<allTags.length; i++) {
			if (allTags[i].className == "nonActive" || allTags[i].className == "hizmetMenuNon") {
				allTags[i].childNodes[0].onclick = function (){return false}
			}
		}
}

function initHizmetMenu() {
	var hizmetLoc = location.href;
	if (hizmetLoc.indexOf("page=hizmetler") > -1) {
		var hizmetLi = document.getElementsByClassName("hizmetMenuHover");
		
		for (var j=0; j<hizmetLi.length; j++) {
			hizmetLi[j].onmouseover = function () {this.style.backgroundImage = "url(images/hizmetMenuNonActive.png)";}
			hizmetLi[j].onmouseout = function () {this.style.backgroundImage = "url(images/hizmetMenuActive.png)";}
		}
	}
}

function initNasilMenu() {
	var nasilLoc = location.href;
	if (nasilLoc.indexOf("page=nasilYapilir") > -1) {
		var nasilLi = document.getElementsByClassName("nasilActive");
		
		for (var k=0; k<nasilLi.length; k++) {
			nasilLi[k].onmouseover = function () {this.style.backgroundImage = "url(images/nasilYapilirMenuNonActive.png)";}
			nasilLi[k].onmouseout = function () {this.style.backgroundImage = "url(images/nasilYapilirMenuActive.png)";}
		}
	}
}
