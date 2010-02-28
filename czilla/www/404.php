<?php
	require_once './inc/page.php';
	$page->handleRedirect();

	$page->setTitle('Dokument nenalezen (404) / Document not found (404)');
	$page->setHeadline('Dokument nenalezen', 'Document not found');
	$page->includeTemplate('header');
?>
	<p>Tento dokument nebyl na serveru projektu <a href="/">CZilla</a>
	nalezen. Zkontrolujte prosím, zda je jeho adresa zadaná správně. Domovská stránka serveru
	<a href="/">CZilla</a>.</p>

	<p lang="en">This document was not found on project <a href="/">CZilla</a> website.
	Please check if its location has been typed correctly. Homepage of
	<a href="/">CZilla</a> site.</p>

<h2>Další doporučené servery</h3>
<ul>
	<li><a href="http://www.mozilla.cz/">Mozilla.cz</a></li>
	<li><a href="http://www.mozilla-europe.org/cs/" hreflang="cs" lang="en">Mozilla Europe</a></li>
	<li><a href="http://www.mozilla.sk/" hreflang="sk">Mozilla.sk</a></li>
	<li><a href="http://www.mozilla.org/" hreflang="en" class="l-en" lang="en">Mozilla.org</a></li>
	<li><a href="http://www.mozillazine.org/" hreflang="en" class="l-en" lang="en">MozillaZine</a></li>
	<li><a href="http://www.spreadfirefox.com/" hreflang="en" class="l-en" lang="en">Spread Firefox</a></li>
	<li><a href="http://planet.mozilla.org/" hreflang="en" class="l-en" lang="en">Planet Mozilla</a></li>
</ul>
<?php
	$page->includeTemplate('footer');
?>
