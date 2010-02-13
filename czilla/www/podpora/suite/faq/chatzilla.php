<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Mozilla často kladené otázky';
	$page->headline = array('Často kladené otázky','Mozilla FAQ: 6. ChatZilla');

	$page->includeHeader();
?>

<ul>
<li><a href="#6.1">6.1. Co je to IRC (Internet Relay Chat) a co je ChatZilla?</a></li>
<li><a href="#6.2">6.2. Spustil jsem ChatZillu. Co mám dělat teď?</a></li>
</ul>


<dl class="faq">
<dt id="question-6.1"><a name="6.1" href="#6.1">6.1. Co je to IRC (Internet Relay Chat) a co je ChatZilla?</a></dt>
<dd id="answer-6.1">
<p>IRC je původní Internetová chat síť. Pro základní úvod do IRC se podívejte na <a href="http://dmoz.org/Computers/Software/Internet/Clients/Chat/IRC/Help/">
Open Directory IRC Help</a>.</p>

<p>ChatZilla je aplikace Mozilly napsaná v <a href="http://www.mozilla.org/projects/xul/">XUL</a> a <a href="http://www.mozilla.org/js/">JavaScriptu</a>, jako demonstrace toho co je možné udělat na základě technologií Mozilly.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-6.2"><a name="6.2">6.2. Spustil jsem ChatZillu. Co mám dělat teď?</a></dt>
<dd id="answer-6.2">
<p>ChatZilla používá stejné standardní příkazy jako většina IRC programů
(<kbd>/server</kbd>, <kbd>/join</kbd>, <kbd>/nick</kbd>, <i>atd</i>).
<a href="http://www.mozilla.org/projects/rt-messaging/chatzilla/">Domácí stránka ChatZilly</a>
obsahuje odpovědi na často kladené otázky nových uživatelů.</p>

<p>Některé jednodušší příkazy pro začátek:</p>

<dl>

<dt><kbd>/networks</kbd></dt>
<dd>Zobrazí seznam všech dostupných sítí jako stránka s odkazy.</dd>

<dt>
<kbd>/server</kbd> <i>jméno-serveru</i>
</dt>
<dd>Připojí se k danému serveru. Nebo můžete pouze kliknut na jméno sítě
v horní části okna ChatZilly za &#8216;<tt>[INFO]
Available networks are</tt>&#8217;.</dd>

<dt>
<kbd>/nick</kbd> <i>přezdívka</i>
</dt>
<dd>Změní vaši přezdívku.</dd>

<dt><kbd>/list</kbd></dt>
<dd>Zobrazí seznam všech otevřených kanálů v dané síti. </dd>

<dt>
<kbd>/join #</kbd><i>kanál</i>
</dt>
<dd>Připojení k debatě v kanálu <tt>#</tt><i>kanál</i>.</dd>

<dt>
<kbd>/me</kbd> <i>popis akce</i>
</dt>
<dd>Řekne, že vaše přezdívka vykonala nějakou akci.</dd>

<dt>
<kbd>/whois</kbd> <i>přezdívka</i>
</dt>
<dd>Zobrazí informace o osobě na serveru.</dd>

<dt>
<kbd>/help</kbd> <i>příkaz</i>
</dt>
<dd>Zobrazí nápovědu k <i>příkazu</i>.</dd>

<dt><kbd>/help</kbd></dt>
<dd>Vypíše nápovědu pro všechny příkazy.</dd>
</dl>

<p>Na <a href="http://www.vorstrasse91.com/moztips/chatzilla/chatzillafaq.htm">
MozTips</a> můžete nalézt rozsáhlý úvod do ChatZilly.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
</dl>

<?php
	$page->includeFooter();
?>