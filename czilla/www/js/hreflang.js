window.onload = function() {
	for(i=0;i<document.links.length;i++) {
		if(document.links(i).hreflang) {
			document.links(i).className = "hreflang hreflang-" + document.links(i).hreflang;
		}
	}
}