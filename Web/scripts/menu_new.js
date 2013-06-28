// If javascript is enabled, make the menu invisible until the proper mouseovers have been defined and give special styles to the submenus
if (document.getElementById && document.getElementsByTagName) {
	document.write("<link type=\"text/css\" rel=\"stylesheet\" href=\"nav.css\" />");
}

window.onload = init;

function init() {
	if (document.getElementById && document.getElementsByTagName) {
		var myMenu = document.getElementById("menu").getElementsByTagName("A");
		if (!myMenu) { return; }
		else {
			for (var i=0;i<myMenu.length;i++) {
				myMenu[i].onmouseover = navHoverStyle;
				myMenu[i].onfocus = navHoverStyle;
			}
			document.getElementById("menu").style.visibility = "visible";
		}
	}
}

// Stores the currently open UL objects
var openMenus = new Array();

// Stores the timer for closing the menu
var navTimer;

$(document).click(function() {
    closeAll(0);
});

function navHoverStyle(e) {
	if (!e) var e = window.event;
	if (e.target) var tg = e.target;
	else if (e.srcElement) var tg = e.srcElement;

	var linkElm = tg;
	while (linkElm.nodeName != 'A')
		linkElm.parentNode;

	while (tg.nodeName != 'LI')
		tg = tg.parentNode;

	// Determine if and if so, which submenu items to close
	var tgParent = tg.parentNode;
	while (tgParent.nodeName != 'UL')
		tgParent = tgParent.parentNode;

	if (tgParent.id == 'menu') {
		closeAll(0);
	}
	else {
		var j=0;
		while (openMenus[j] != tgParent) {
			j++;
		}
		closeAll(j+1);
	}

	// Determine if the current item has a submenu and if so, open it
	for ( var i=0;i<tg.childNodes.length;i++) {
		if ( tg.childNodes[i].nodeName == 'UL') {
			var subMenuElm = tg.childNodes[i];
		}
	}

	if (subMenuElm) {
		linkElm.className = 'unfolded';
		subMenuElm.style.display = 'block';
		openMenus.push(subMenuElm);
	}

	// Set the timer
	checkNavTimer();

	return false;
}

function checkNavTimer() {
	if (navTimer) clearTimeout(navTimer);
	navTimer = setTimeout('closeAll(0)',5000);
}

function closeAll(lvl) {
	var oMl = openMenus.length-1;
	for ( var i=oMl;i>=lvl;i--) {
		var linkElm = openMenus[i].previousSibling;
		while (linkElm.nodeName != 'A')
			linkElm = linkElm.previousSibling;

		linkElm.className = '';
		openMenus[i].style.display = 'none';
		openMenus.pop();
	}
}