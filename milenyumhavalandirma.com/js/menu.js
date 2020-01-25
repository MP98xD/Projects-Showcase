/*
	Programmed By: Mosab
	musabbasil@ortakfikir.com
	Web Programmer
*/
window.onload = initMenu;

function initMenu () {
	var menuItems = document.getElementById("headerMenu").getElementsByTagName("a");
	
	for (var i=0; i<menuItems.length; i++) {
		if (menuItems[i].parentNode.className.indexOf("click") != -1) {
			menuItems[i].onmouseout = function (){this.parentNode.className = "menuHover click"}
			menuItems[i].onmouseover = function (){this.parentNode.className = "menuHover click"}
		} else {
			menuItems[i].onmouseout = function (){this.parentNode.className = "menuNormal"}
			menuItems[i].onmouseover = function (){this.parentNode.className = "menuHover"}
		}
	}
}