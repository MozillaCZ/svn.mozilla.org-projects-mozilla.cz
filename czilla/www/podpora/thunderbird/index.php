<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Podpora poštovního klientu Mozilla Thunderbird';
	$page->headline = array('Podpora poštovního klientu Thunderbird','Rady, návody, tipy a triky ...');

	$page->setKeywords('podpora, nápověda, pomoc, návod, mozilla, thunderbird, klient, pošta, pošťák');
	$page->setDescription('Stránka podpory poštovního klientu Mozilla Thunderbird');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links');
	$page->addSideBox('tips','thunderbird');

	$page->includeHeader();
?>

<div id="navigation">
	<a href="#uvod-do-thunderbirdu">Úvod do Thunderbirdu</a> &#183;
 	<a href="#dokumentace-navody">Dokumentace a&nbsp;návody</a> &#183;
	<a href="#dalsi-zdroje">Další zdroje informací</a>
</div>

<p><strong>Vítejte na stránce podpory</strong> poštovního klientu <a href="/produkty/thunderbird/" title="Mozilla Thunderbird: Stránka o produktu">Mozilla Thunderbird</a>. Naleznete zde řadu užitečných informací týkajících se tohoto kvalitního poštovního klientu. Pokud zde nenajdete odpověď na to, co hledáte a&nbsp;budete se chtít zeptat, navštivte naše <strong><a href="http://forum.czilla.cz/viewforum.php?f=21" title="Fórum na podporu uživatelů Mozilla Thunderbirdu">fórum na podporu uživatelů</a></strong>. Rádi vám poradíme.</p>

<p>
Hledáte, jak si poštovní klient Mozilla Thunderbird vylepšit? Navštivte <a href="/doplnky/" title="Doplňky aplikací Mozilla">sekci s&nbsp;doplňky</a>.
</p>

<h2 id="uvod-do-thunderbirdu" class="nice thunderbird">Úvod do Thunderbirdu</h2>

<p>Přehledný průvodce pro začínající uživatele Mozilla Thunderbirdu. Provede vás základními funkcemi tohoto poštovního klientu a&nbsp;naučí vás jej efektivně používat. Autorem tohoto průvodce je <a href="mailto:kay@nidelven-it.no">Frode Petersen</a> a&nbsp;originál naleznete na adrese <a href="http://www.nidelven-it.no/articles/introduction_to_thunderbird" title="Introduction to Mozilla Thunderbird" hreflang="en">Nidelven-it.no</a>.</p>

<p><strong>Obsah:</strong></p>

<ul>
	<li><a href="tutorial/">Úvod</a></li>
	<li><a href="tutorial/instalace.html">Instalace</a></li>
	<li><a href="tutorial/prace-s-postou.html">Základy práce s&nbsp;elektronickou poštou</a></li>
	<li><a href="tutorial/prace-s-postou2.html">Základy práce s&nbsp;elektronickou poštou, dokončení</a></li>
	<li><a href="tutorial/prilohy.html">Práce s&nbsp;přílohami</a></li>
	<li><a href="tutorial/antispamovy-filtr.html">Antispamový filtr</a></li>
	<li><a href="tutorial/import.html">Import elektronické pošty a&nbsp;kontaktů</a></li>
	<li><a href="tutorial/filtry.html">Filtry</a></li>
	<li><a href="tutorial/diskusni-skupiny.html">Diskuzní skupiny</a></li>
	<li><a href="tutorial/motivy-vzhledu.html">Motivy vzhledu</a></li>
</ul>

<p>Máte nějakou otázku? Zeptejte se v&nbsp;našem <strong><a href="http://forum.czilla.cz/viewforum.php?f=21" title="Fórum na podporu uživatelů Mozilla Thunderbird">fóru na podporu uživatelů</a></strong>, kde vám řada zkušených uživatelů poradí.</p>

<h2 id="dokumentace-navody" class="nice tb">Dokumentace, návody a&nbsp;knihy</h2>

<h3>Dokumentace</h3>

<ul>
	<li><a href="faq.html" title="Často kladané otázky k poštovnímu klientu">Často kladené otázky</a></li>
	<li><a href="tipy-a-triky.html" title="Tipy a triky pro Thunderbird">Tipy a&nbsp;triky</a></li>
	<li><a href="konfigurace.html" title="Konfigurace důležitých souborů">Konfigurační soubory</a></li>
	<li><a href="http://thunderbird.czilla.cz/otazky/klavesove-zkratky/" title="Přehled klávesových zkratek Thunderbirdu">Klávesové zkratky</a></li>
</ul>

<h3>Návody a články</h3>

<ul>
  <li><a href="instalace-rozsireni.html" title="Návod na instalaci rozšíření">Instalace rozšíření</a></li>
  <li><a href="/podpora/zachrana-kontaktu.html" title="Návod na obnovení poškozených kontaktů po havárii">Obnova poškozených kontaktů</a></li>
	<li><a href="/podpora/soubory-v-profilu.html" title="Přehled souborů, co se nalézaji ve složce s profilem">Soubory v&nbsp;profilu aplikací Mozilla</a></li>
	<li><a href="/podpora/talkback.html" title="Jak použít Talkback k nahlášení pádu Mozilly">Talkback &ndash; pomocník při pádu Mozilly</a></li>
</ul>

<h3>Knihy</h3>
<ul>
	<li><a href="http://knihy.cpress.cz/Book.asp?ID=2034">Mozilla Thunderbird - Kompletní uživatelská příručka</a></li>
	<li><a href="http://www.chovancik.cz/mozilla-thunderbird-15-uzivatelska-prirucka-manual/">Mozilla Thunderbird 1.5 Uživatelská příručka</a></li>
</ul>

<h2 id="dalsi-zdroje" class="nice tb">Další zdroje informací</h2>

<ul>
  <li><a href="http://kb.mozillazine.org/Thunderbird" title="Wiki na Mozillazine" hreflang="en">MozillaZine Knowledge Base</a> &ndash; řada užitečných informací o&nbsp;Mozilla Thunderbirdu</li>
  <li><a href="http://www.mozilla.com/thunderbird/" title="Mozilla.org: Domovská stránka Mozilla Thunderbirdu" hreflang="en">Domovská stránka produktu</a> &ndash; základní informace o&nbsp;Mozilla Thunderbirdu v angličtině</li>
</ul>



<?php
	$page->includeFooter();
?>
