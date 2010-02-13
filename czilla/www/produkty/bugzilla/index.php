<?php
	require_once '../../inc/page.php';
	$page->setTitle('Bugzilla - bug tracking pro váš projekt');
	$page->setHeadline('Bugzilla','Bug tracking pro váš projekt');
	$page->setKeywords('Bugzilla, request tracker, download, instalace, výhody, bugzilla.czilla.cz, odkazy');
	$page->setDescription('Představení Bugzilly - nástroje na sledování chyb, požadavků na rozšíření a dalších úkolů. Povíme vám, k čemu tento nástoj slouží, co všechno umí a také jak ho využíváme u nás v CZille.');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>

<table><tr><td style="vertical-align:top">
<img src="/img/buggie.png" width="95" height="125" alt="Logo Bugzilly" title="Logo Bugzilly" class="vyvojari" />
</td><td style="vertical-align:top">

<p>
Bugzilla je systém pro sledování chyb, požadavků na rozšíření a jiných úkolů.
Je produktem
<a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a>,
která ho používá při vývoji svých produktů. Dnes Bugzillu používají
<a href="http://www.bugzilla.org/installation-list/" hreflang="en">stovky
komerčních i&nbsp;nekomerčních projektů</a>
po celém světě.</p>

<p>Pracujete na nějakém projektu? Hledáte způsob, jak zlepšit komunikaci ve
vašem týmu, který je roztroušen po více městech? Potřebujete ve vaší firmě
systém pro správu požadavků? Bugzilla je dostupná zdarma i&nbsp;pro komerční
použití (pod licencí
<a href="http://www.mozilla.org/MPL/"
	hreflang="en"><abbr title="Mozilla Public License" lang="en">MPL</abbr></a>).</p>
</td></tr></table>

<p>Článek
<a href="http://www.root.cz/clanky/request-tracker-system-pro-sledovani-pozadavku/">Request Tracker &ndash; systém pro sledování požadavků</a> (česky)
vám pomůže objasnit, jak takový obecný systém pro správu chyb či požadavků funguje.</p>

<h2 class="nice">Download a instalace</h2>

<p>Bugzilla je k&nbsp;dispozici ke stažení na stránkách
<a href="http://www.bugzilla.org/download/" hreflang="en">www.bugzilla.org</a>.
Pro její provozování potřebujete webový server
<a href="http://httpd.apache.org/" hreflang="en">Apache</a>,
<a href="http://www.perl.org/" hreflang="en">Perl</a>
(včetně několika modulů z
<a href="http://www.cpan.org/" hreflang="en"><abbr title="Comprehensive Perl Archive Network" lang="en">CPAN</abbr></a>)
a databázi
<a href="http://www.mysql.com/" hreflang="en">MySQL</a>.
Popis instalace najdete v
<a href="http://www.bugzilla.org/docs/" hreflang="en">dokumentaci</a> k jednotlivým verzím.
Bugzilla je primárně určena pro provozování na Linuxu, ale lze ji <a
href="http://www.bugzilla.org/docs/win32install.html" hreflang="en">nainstalovat i na Windows</a>.
</p>

<h2 class="nice">Výhody</h2>

<ul>
	<li>propracované fulltextové vyhledávání</li>
	<li>vzhled je snadno přizpůsobitelný úpravou šablon</li>
	<li>uživatelské rozhraní je lokalizovatelné (lokalizace do češtiny zatím
	ale neexistuje)</li>
	<li>sledování prostřednictvím elektronické pošty (informace
	o&nbsp;provedených změnách přijdou přímo do vaší e-mailové
	schránky)</li>
	<li>systém skupin a&nbsp;přidělování práv &ndash; jednotliví uživatelé
	mohou mít různá oprávnění, některé bugy jsou viditelné pouze pro danou
	skupinu vývojářů atd.</li>
</ul>

<h2 class="nice">Odkazy</h2>

<ul>
	<li><a href="http://www.bugzilla.org/">www.bugzilla.org</a> &ndash;
	stránky projektu</li>

	<li><a href="https://bugzilla.mozilla.org/"
			hreflang="en">bugzilla.mozilla.org</a>
	&ndash; asi nejznámější instalace Bugzilly pro potřeby projektu
	Mozilla.org</li>
</ul>

<?php
	$page->includeTemplate('footer');
?>