<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Podpora poštovního klientu Mozilla Thunderbird';
	$page->headline = array('Podpora poštovního klientu Thunderbird','Rady, návody, tipy a triky ...');

	$page->setKeywords('podpora, nápověda, pomoc, návod, mozilla, thunderbird, klient, pošta');
	$page->setDescription('Stránka podpory poątovního klientu Mozilla Thunderbird');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links');
	$page->addSideBox('tips','thunderbird');

	$page->includeHeader();
?>

<h2>Odkazy ze startovní stránky z TB</h2>
<p>Pouze pro období vývoje - není v CVS</p>
<ul>
  <li><a href="nevyzadana-posta.html">Adaptivní filtry nevyžádané pošty</a></li>
  <li><a href="rss-ctecka.html">RSS čtečka</a></li>
  <li><a href="globalni-dorucena-posta.html">Globální doručená pošta</a></li>
  <li><a href="slozky-ulozeneho-hledani.html">Složky uloženého hledání</a></li>
  <li><a href="razeni-zprav.html#seskupovani-zprav">Seskupování zpráv</a></li>
  <li><a href="ochrana-soukromi.html">Ochrana soukromí</a></li>

</ul>

<?php
	$page->includeFooter();
?>
