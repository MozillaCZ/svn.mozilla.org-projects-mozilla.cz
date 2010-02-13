<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Podpora Mozilla Suite a SeaMonkey';
	$page->headline = array('Podpora Mozilla Suite a SeaMonkey','Rady, návody, tipy a triky ...');

	$page->setKeywords('podpora, nápověda, pomoc, návod, mozilla, suite, seamonkey');
	$page->setDescription('Stránka podpory balíků webových aplikací Mozilla Suite a SeaMonkey');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links');
	$page->addSideBox('tips','suite');

	$page->includeHeader();
?>

<div id="navigation">
	<a href="#dokumentace-navody">Dokumentace a návody</a> &#183;
	<a href="#online-napoveda">Online nápověda</a> &#183;
	<a href="#dalsi-zdroje">Další zdroje informací</a>
</div>

<p><strong>Vítejte na stránce podpory</strong> balíku webových aplikací <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> a&nbsp;jeho nástupce <a href="/produkty/seamonkey/" title="SeaMonkey: Stránka o produktu">SeaMonkey</a>. Naleznete zde řadu užitečných informací týkajících se tohoto balíku webových aplikací. Pokud zde nenajdete odpověď na to, co hledáte a&nbsp;budete se chtít zeptat, navštivte naše <strong><a href="http://forum.czilla.cz/viewforum.php?f=23" title="Fórum na podporu uživatelů Mozilla Suite">fórum na podporu uživatelů</a></strong>. Rádi vám poradíme.</p>

<p>Hledáte, jak si balík Mozilla Suite či SeaMonkey vylepšit? Navštivte <a href="/doplnky/" title="Doplňky aplikací Mozilla">sekci s doplňky</a>.</p>

<h2 id="dokumentace-navody" class="nice">Dokumentace a&nbsp;návody</h2>

<h3>Dokumentace</h3>

<ul>
  <li><a href="start/" title="Startovní stránka Mozilla Suite">Originální startovní stránka</a></li>
  <li><a href="pruvodce/" title="Průvodce Mozilla Suite">Průvodce Mozillou</a></li>
  <li><a href="faq/" title="Často kladané otázky k Mozilla Suite">Často kladené otázky</a></li>
</ul>

<h3>Návody a články</h3>

<ul>
  <li><a href="instalace.html" title="Návod na instalaci Mozilla Suite">Návod na instalaci Mozilla Suite</a></li>
  <li><a href="lokalizace.html" title="Často kladené dotazy k instalaci lokalizace">Řešení problémů při instalaci lokalizace</a></li>
	<li><a href="instalace-rozsireni.html" title="Návod na instalaci rozšíření">Instalace rozšíření</a></li>
  <li><a href="instalace-motivu-vzhledu.html" title="Návod na instalaci motivu vzhledu">Instalace motivů vzhledu</a></li>
  <li><a href="/podpora/internetova-bankovnictvi-v-mozille.html" title="Přehled internetových bankovnictví a jejich podpory v Mozilla Suite">Internetová bankovnictví v&nbsp;Mozille</a></li>
  <li><a href="/podpora/mozilla-a-download-managery.html" title="Přehled download manageru a jejich funkčnosti v Mozille Suite">Mozilla Suite a&nbsp;download managery</a></li>
  <li><a href="/podpora/suite/ochrana-pred-viry.html" title="Několik rad, jak se v Mozille chránit před viry">Ochrana před viry v&nbsp;Mozille</a></li>
  <li><a href="/podpora/zachrana-kontaktu.html" title="Návod na obnovení poškozených kontaktů po havárii">Obnova poškozených kontaktů</a></li>
	<li><a href="mozilla-s-parametry.html" title="Parametry příkazové řádky Mozilla Suite">Parametry příkazové řádky Mozilly</a></li>
  <li><a href="/podpora/soubory-v-profilu.html" title="Přehled souborů, co se nalézaji ve složce s profilem">Soubory v&nbsp;profilu aplikací Mozilla</a></li>
	<li><a href="/podpora/talkback.html" title="Jak použít Talkback k nahlášení pádu Mozilly">Talkback &ndash; pomocník při pádu Mozilly</a></li>
  <li><a href="/podpora/ukladani-podle-title-v-mozille.html" title="Návod na ukládání stránek podle značky TITLE">Ukládání stránek v&nbsp;Mozille podle značky TITLE</a></li>
</ul>

<h2 id="dalsi-zdroje" class="nice mozilla">Další zdroje informací</h2>

<ul>
  <li><a href="/produkty/suite/poznamky-k-vydani/" title="Mozilla Suite: Poznámky k vydání">Poznámky k&nbsp;vydání</a> &ndash; přeložené starší poznámky k verzi</li>
  <li><a href="mozpexeso.html">Mozilla pexeso</a> &ndash; trocha zábavy při chvílích volna</li>
  <li><a href="http://kb.mozillazine.org/Mozilla_Suite" title="Wiki na Mozillazine" hreflang="en">MozillaZine Knowledge Base</a> &ndash; řada užitečných informací o Mozilla Suite</li>
  <li><a href="http://www.mozilla.org/products/mozilla1.x/" title="Mozilla.org: Domovská stránka Mozilla Suite" hreflang="en">Domovská stránka Mozilla Suite</a> &ndash; základní informace o&nbsp;Mozilla Suite v&nbsp;angličtině</li>
  <li><a href="http://www.mozilla.org/projects/seamonkey/" title="Mozilla.org: Domovská stránka SeaMonkey" hreflang="en">Domovská stránka SeaMonkey</a> &ndash; základní informace o&nbsp;SeaMonkey v&nbsp;angličtině</li>
</ul>

<?php
	$page->includeFooter();
?>
