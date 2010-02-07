<?php
	require_once '../../inc/page.php';
	$page->setTitle('Matěj Humpál: Proč používám Mozilla Firefox?');
	$page->setDescription('Webdesigner Matěj Humpál vyměnil Internet Explorer za Firefox kvůli rozšíření EditCSS.');
	$page->setKeywords('mozilla firefox přechod msie internet explorer css editcss rozšíření extenze komponenta kaskádové styly');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Proč používám Mozilla Firefox?</h1>

<p>Je to už dávno, co jsem se začal zabývat webdesignem. Tenkrát jsem to
ovšem jako webdesign nebral, byl jsem rád, že mé stránky, poctivě psané
v&nbsp;Poznámkovém bloku, patří k&nbsp;nejlepším ve třídě. To bylo v&nbsp;sekundě, tedy
v&nbsp;&quot;sedmičce&quot;.</p>

<p>Čas šel dál, Poznámkový blok se změnil v&nbsp;MS&nbsp;Frontpage a&nbsp;grafická
kvalita mých webů se zlepšovala. Situace mi vyhovovala, ale měla jednu
nevýhodu. Webové stránky jsem dělal, ale nesledoval jsem trendy,
technologie, směrnice.
K&nbsp;<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>
jsem přišel jen náhodou a&nbsp;používal jsem je výhradně k&nbsp;vytváření přechodových
efektů na odkazech. Ale čas byl, naštěstí pro mne, neúprosný a&nbsp;s&nbsp;věkem
přibývaly zkušenosti, upustil jsem od Frontpage, vrátil se k&nbsp;Poznámkovému
bloku, později zkusil profesionálnější <em>webotvorné</em> aplikace. Jediné
co zůstalo při starém, byl internetový prohlížeč. Internet Explorer, tenkrát
ve verzi&nbsp;5, zobrazoval všechny weby stejně, občas se sice při vstupu na
špatnou webovou stránku otevřela nějaká ta nevyžádaná okna, ale stále se to
dalo přežít.</p>

<p>Ale změna přišla. Jako pokročilejší uživatel internetu jsem začal
navštěvovat řadu webů zabývající se tematikou webdesignu a&nbsp;na weblogu
Pixylophone jsem se dozvěděl o&nbsp;báječné komponentě
<a href="https://addons.mozilla.org/cs/firefox/addon/179" lang="en">EditCSS</a>.
Údajně se s&nbsp;ní dají editovat kaskádové styly přímo v&nbsp;okně prohlížeče
a&nbsp;výsledek je vidět okamžitě. Ale byl tu malý háček. Tato komponenta je určena
pouze pro Firefox. Řekl jsem si, že za zkoušku mi to stojí, a&nbsp;nový
browser nainstaloval. A&nbsp;byl jsem celkem potěšen.</p>

<p>EditCSS fungovalo, ale Firefox mě potěšil i&nbsp;jinými svými vlastnostmi:
rychlostí, se kterou pracuje; blokováním nevyžádaných oken, o&nbsp;kterých jsem
se už zmiňoval; volitelnými rozšířeními; prohlížením v&nbsp;panelech &ndash; když
pracujete s&nbsp;několika programy a&nbsp;ještě si prohlížíte čtyři nebo pět
internetových stránek, lišta s&nbsp;programy začne být nepřehledná; skiny (ikony
nástrojů každému podle jeho gusta) a&nbsp;mnohými klávesovými zkratkami (na
<kbd>Ctrl</kbd>+<kbd>U</kbd> pro zobrazení zdrojového kódu stránky jako
webdesiner nedám dopustit). V začátcích jsem sice, ze zvyku, spouštěl
Internet Explorer, ale když jsem v&nbsp;něm marně hledal &quot;vychytávky&quot;
Firefoxu, pro jistotu jsem nahradil modré <em>E</em> na ploše oranžovou
liškou Firefoxu. Teď už Internet Explorer spouštím jen při ladění některého
ze svých webů. A jsem za to rád.</p>

<p class="sig">
	<a href="http://finwe.info/" title="Finweblog">Matěj Humpál</a>
</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující odkazy</h2>
<?php
	$page->includeTemplate('stories');
?>
</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<a href="../">Zkušenosti</a> &gt;
		<strong>Matěj Humpál</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
