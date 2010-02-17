<?php
	require_once '../inc/page.php';
	$page->setTitle('Archiv CZilla zpráviček');
	$page->setHeadline('Archiv zpráviček', 'CZilla zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<h2>Zprávičky podle data</h2>
<ul style="-moz-column-count:3">
	<li><a href="/zpravicky/2003/">2003</a></li>
	<li><a href="/zpravicky/2004/">2004</a></li>
	<li><a href="/zpravicky/2005/">2005</a></li>
	<li><a href="/zpravicky/2006/">2006</a></li>
	<li><a href="/zpravicky/2007/">2007</a></li>
	<li><a href="/zpravicky/2008/">2008</a></li>
	<li><a href="/zpravicky/2009/">2009</a></li>
</ul>

<h2>Zprávičky podle autorů</h2>
<ul style="-moz-column-count:3">
	<li><a href="/zpravicky/a/aha">Adam Hauner</a></li>
	<li><a href="/zpravicky/a/burda">Jiří Burda</a></li>
	<li><a href="/zpravicky/a/cvrcek">Pavel Cvrček</a></li>
	<li><a href="/zpravicky/a/dvorak">Stanislav Dvořák</a></li>
	<li><a href="/zpravicky/a/franc">Pavel Franc</a></li>
	<li><a href="/zpravicky/a/funtomas">Tomáš Marek</a></li>
	<li><a href="/zpravicky/a/hades">Štěpán Tračík</a></li>
	<li><a href="/zpravicky/a/hassman">Martin Hassman</a></li>
	<li><a href="/zpravicky/a/chomat">Jiří Chomát</a></li>
	<li><a href="/zpravicky/a/jayfinch">Jay Finch</a></li>
	<li><a href="/zpravicky/a/jirsa">Petr Jirsa</a></li>
	<li><a href="/zpravicky/a/joelp">Luděk Janča</a></li>
	<li><a href="/zpravicky/a/kotva">Josef Kotva</a></li>
	<li><a href="/zpravicky/a/kurc">Pavel Kurc</a></li>
	<li><a href="/zpravicky/a/machala">Jakub Machala</a></li>
	<li><a href="/zpravicky/a/majda">David Majda</a></li>
	<li><a href="/zpravicky/a/matousek">Jan Matoušek</a></li>
	<li><a href="/zpravicky/a/merta">Jan Merta</a></li>
	<li><a href="/zpravicky/a/mik">Michal Kec</a></li>
	<li><a href="/zpravicky/a/novotny">Lukáš Novotný</a></li>
	<li><a href="/zpravicky/a/pegrimek">David Pěgřímek</a></li>
	<li><a href="/zpravicky/a/petric">Pavel Petric</a></li>
	<li><a href="/zpravicky/a/petrovicky">Lukáš Petrovický</a></li>
	<li><a href="/zpravicky/a/petru">Štěpán Petrů</a></li>
	<li><a href="/zpravicky/a/pribyl">Adam Přibyl</a></li>
	<li><a href="/zpravicky/a/rozbora">Branislav Rozbora</a></li>
	<li><a href="/zpravicky/a/stepanek">Stanislav Štěpánek</a></li>
	<li><a href="/zpravicky/a/suchy">Miroslav Suchý</a></li>
	<li><a href="/zpravicky/a/tomanek">Jakub Tománek</a></li>
	<li><a href="/zpravicky/a/tomes">Petr Tomeš</a></li>
	<li><a href="/zpravicky/a/urbanek">Jan Urbanek</a></li>
</ul>

<h2>Zprávičky podle štítků</h2>
<ul style="-moz-column-count:3">
	<li><a href="/zpravicky/s/bezpecnost">Bezpečnost</a></li>
	<li><a href="/zpravicky/s/bugzilla">Bugzilla</a></li>
	<li><a href="/zpravicky/s/camino">Camino</a></li>
	<li><a href="/zpravicky/s/czilla">CZilla</a></li>
	<li><a href="/zpravicky/s/firefox">Firefox</a></li>
	<li><a href="/zpravicky/s/gecko">Gecko</a></li>
	<li><a href="/zpravicky/s/humor">Humor</a></li>
	<li><a href="/zpravicky/s/internet-explorer">Internet explorer</a></li>
	<li><a href="/zpravicky/s/lokalizace">Lokalizace</a></li>
	<li><a href="/zpravicky/s/minimo">Minimo</a></li>
	<li><a href="/zpravicky/s/motivy-vzhledu">Motivy vzhledu</a></li>
	<li><a href="/zpravicky/s/mozilla-foundation-corporation">Mozilla Foundation</a></li>
	<li><a href="/zpravicky/s/mozilla-sk">Mozilla.sk</a></li>
	<li><a href="/zpravicky/s/netscape">Netscape</a></li>
	<li><a href="/zpravicky/s/nvu">Nvu</a></li>
	<li><a href="/zpravicky/s/odvozene-prohlizece">Odvozené prohlížeče</a></li>
	<li><a href="/zpravicky/s/opera">Opera</a></li>
	<li><a href="/zpravicky/s/rozsireni">Rozšíření</a></li>
	<li><a href="/zpravicky/s/safari">Safari</a></li>
	<li><a href="/zpravicky/s/seamonkey">Seamonkey</a></li>
	<li><a href="/zpravicky/s/statistiky">Statistiky</a></li>
	<li><a href="/zpravicky/s/suite">Suite</a></li>
	<li><a href="/zpravicky/s/sunbird">Sunbird</a></li>
	<li><a href="/zpravicky/s/thunderbird">Thunderbird</a></li>
	<li><a href="/zpravicky/s/vyvojari">Vývojáři</a></li>
	<li><a href="/zpravicky/s/webove-technologie">Webové technologie</a></li>
	<li><a href="/zpravicky/s/xulrunner">Xulrunner</a></li>
</ul>

<?php
	$page->includeTemplate('footer');
?>
