<?php
	$rootPath = '../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Podpora produktů Mozilla';
	$page->headline = array('Podpora produktů Mozilla','Firefox, Thunderbird, Suite ...');

	$page->setKeywords('podpora, nápověda, pomoc, návod, mozilla, firefox, thunderbird, suite, nvu');
	$page->setDescription('Podpora uživatelů aplikací Mozilla Firefox, Mozilla Thunderbird a Mozilla Suite');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links');
	$page->addSideBox('tips');

	$page->includeHeader();
?>

<p>Vítejte v&nbsp;sekci podpory uživatelů aplikací Mozilla.
V&nbsp;této sekci naleznete řadu užitečných návodů, rad a&nbsp;tipů na
zpříjemnění práce s&nbsp;těmito aplikacemi. Pokud hledáte odpověď na svou
otázku týkající se aplikace Mozilla, jste na správném místě.</p>

<p><strong>Zvolte produkt</strong>, který používáte a&nbsp;ke kterému chcete získat
informace:</p>

<h3 style="height:32px;margin:0.5em 0;background:url(/images/ico-ff.gif) no-repeat 10px 0;padding:8px 0 0 50px"><a
	href="./firefox/" title="Mozilla Firefox: Podpora produktu">Mozilla Firefox</a></h3>
<h3 style="height:32px;margin:0.5em 0;background:url(/images/ico-tb.gif) no-repeat 10px 0;padding:8px 0 0 50px"><a
	href="./thunderbird/" title="Mozilla Thunderbird: Podpora produktu">Mozilla Thunderbird</a></h3>
<h3 style="height:32px;margin:0.5em 0;background:url(/images/ico-ms.gif) no-repeat 10px 0;padding:8px 0 0 50px"><a
	href="./suite/" title="Mozilla Suite a SeaMonkey: Podpora produktů">Mozilla Suite / SeaMonkey</a></h3>

<h3>Webové fórum</h3>

<p>Nenašli jste odpověď na svou otázku? Položte svůj dotaz ve
<a href="http://forum.czilla.cz/"
	title="Fórum na podporu uživatelů aplikací Mozilla">fóru na podporu uživatelů</a>,
kde vám řada zkušených uživatelů ochotně poradí. Řada dotazů je zde již
zodpovězena, takže si postačí přečíst řešení.</p>


<h2 class="nice">Komerční podpora</h2>

<p>Pokud máte specifické požadavky, můžete využít komerční podporu aplikací
Mozilla. Tu v&nbsp;rámci České republiky nabízejí firmy
<a href="http://www.foxinus.cz/"
	title="FOXINUS solutions: Domovská stránka">FOXINUS solutions</a>
a&nbsp;<a href="http://www.blue-point.cz/"
	title="blue.point Solutions: Domovská stránka">Blue.point solutions</a>.</p>

<?php
	$page->includeFooter();
?>
