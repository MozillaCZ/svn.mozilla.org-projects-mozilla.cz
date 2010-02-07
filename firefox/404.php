<?php
	$badUrl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$redirectUrl = '';

	if ($redirectUrl != '') {
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: " . $redirectUrl);
		header("Connection: close");
		exit;
	}

	require_once './inc/page.php';
	$page->setTitle('Dokument nenalezen / Document not found');
	$page->includeTemplate('header');
?>
<div class="main">

	<h1>Dokument nenalezen (404)</h1>

	<p>Tento dokument nebyl na serveru <a href="/"><?php echo $page->getWebName()?></a>
	nalezen. Zkontrolujte prosím, zda je jeho adresa zadaná správně.</p>
	<p>Domovská stránka serveru <a href="/"><?php echo $page->getWebName()?></a>.</p>

	<hr />

	<p lang="en">This document was not found on <a href="/" hreflang="cs">Switch To Firefox</a>
	website. Please check if its location has been typed correctly.</p>
	<p lang="en">Homepage of <a href="/" hreflang="cs">Switch To Firefox</a> site.</p>
</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující informace</h2>
	<h3 class="first">Doporučené servery</h3>
	<ul>
		<li><a href="http://www.mozilla.cz/">Mozilla.cz</a></li>
		<li><a href="http://www.mozilla-europe.org/cs/" hreflang="cs" lang="en">Mozilla Europe</a></li>
		<li><a href="http://www.mozilla.org/" hreflang="en" class="l-en" lang="en">Mozilla.org</a></li>
		<li><a href="http://www.mozillazine.org/" hreflang="en" class="l-en" lang="en">MozillaZine</a></li>
		<li><a href="http://www.spreadfirefox.com/" hreflang="en" class="l-en" lang="en">Spread Firefox</a></li>
		<li><a href="http://planet.mozilla.org/" hreflang="en" class="l-en" lang="en">Planet Mozilla</a></li>
	</ul>
</div></div>
<div class="path">
	<hr />
	<p><a href="/"><?php echo $page->getWebName()?></a> &gt; <strong>Dokument nenalezen</strong></p>
</div>
<?php
	$page->includeTemplate('footer');
?>
