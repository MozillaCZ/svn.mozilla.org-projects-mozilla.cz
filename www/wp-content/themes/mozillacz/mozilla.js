function addSearchEngine() {
	if (window.external && ("AddSearchProvider" in window.external)) {
		window.external.AddSearchProvider ("http://www.mozilla.cz/wp-content/themes/mozillacz/Mozilla.cz.xml");
	} else {	
		alert("Váš prohlížeč bohužel nepodporuje vyhledávací moduly ve formátu OpenSearch.");
	}
}