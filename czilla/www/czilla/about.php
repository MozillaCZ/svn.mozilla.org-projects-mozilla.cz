<?php
	require_once '../inc/page.php';
	$page->setTitle('About CZilla project');
	$page->setHeadline('About CZilla project','Localization, support and propagation of Mozilla.org project');
	$page->setKeywords('czilla, mozilla, czech, web, localization, support, propagation, contact','en');
	$page->setDescription('Information about our CZilla project in English.','en');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>

<div lang="en">

<p>The aim of CZilla project was popularization of Mozilla.org products in Czech Republic,
organizing translation of popular extensions, translating <a href="/podpora/">helps and tutorials</a>,
providing user support, managing collection of sidebars and
search plugins, working on Technical Evangelization in Czech.</p>


<h2 id="web-sites">Web sites</h2>
<dl>
	<dt><a href="/">Main CZilla web site</a> (www.czilla.cz)</dt>
	<dd>News, articles and tutorials from the Mozilla world.
	Prezentation and localization of Mozilla.org products</dd>

	<dt><a href="http://forum.czilla.cz/">CZilla forum</a> (forum.czilla.cz)</dt>
	<dd>Support for Czech users of Mozilla.org products.</dd>
</dl>

<h2 id="contact">Contact</h2>

<dl>
	<dt>Main contact &ndash;
	<a href="mailto:info@czilla.cz">info@czilla.cz</a></dt>
	<dd>Information, suggestions, requests, partnerships.</dd>
</dl>

<p>List of all <a href="lide.php">CZilla members</a> and a&nbsp;list of <a
href="prispevatele.php">all involved people</a>.</p>

<p><strong>History:</strong> Server CZilla.cz was founded in February 2003 as
a&nbsp;reformation of Jan Urbanek's CZilla.org server, which had been
popularizing Mozilla since 2001.</p>

<h2 id="english-articles">Articles in English</h2>

<dl>
	<dt><a href="/czilla/tiskove-zpravy/gecko-stats-cz-2004-11-english.php">
	Gecko on the Czech Internet in November of 2004</a></dt>
	<dd>Gecko-based browsers usage in the Czech Republic according to
	the statistic service Navrcholu.cz
	<em>(13.&nbsp;12.&nbsp;2004)</em></dd>

	<dt><a href="/czilla/tiskove-zpravy/gecko-stats-cz-2004-03-english.php">
	Gecko on the Czech Internet in March of 2004</a></dt>
	<dd>Gecko-based browsers usage in the Czech Republic according to
	the statistic service Navrcholu.cz
	<em>(21.&nbsp;4.&nbsp;2004)</em></dd>
</dl>

</div>

<?php
	$page->includeTemplate('footer');
?>
