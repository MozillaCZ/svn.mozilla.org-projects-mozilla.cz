<?php
	require_once '../../inc/page.php';
	$page->setTitle('Lukáš Mačí: Firefox mi poskytuje maximální pohodlí');
	$page->setDescription('Firefox s řadou vynikajících rozšíření si Lukáše Mačího naprosto získal. Používání Internetu si bez něj nedokáže představit.');
	$page->setKeywords('mozilla firefox zkušenost vývoj prohlížeč aktualizace opravy čeština usnadnění práce');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Maximální pohodlí</h1>

<p>Jako obyčejnému uživateli mi Firefox poskytuje maximální pohodlí, které
se snoubí s&nbsp;jednoduchostí při ovládání, a&nbsp;přitom vím, že se při
troše opatrnosti nemusím obávat o&nbsp;bezpečnost při každodenním prohlížení
webových stránek. Firefox je možné doplnit řadou
<a href="https://addons.mozilla.org/cs/firefox/">vynikajících rozšíření</a>,
bez kterých si již nedokáži představit každodenní používání Internetu,
a&nbsp;která mi usnadňují mojí práci.</p>

<p>Firefox používám již od dob, kdy se ještě nejmenoval Firefox. Za ten
čas prošel vývojem, na kterém pracovalo a&nbsp;stále pracuje mnoho lidí,
kteří mají jediný cíl &ndash; posunout prohlížení webových stánek dopředu.
Že se můj oblíbený prohlížeč stále vyvíjí, je pro mne důležité.
S&nbsp;každou verzí se mohu těšit na řadu vylepšení a&nbsp;vím, že
v&nbsp;případě problémů či chyb vývojáři zareagují a&nbsp;oprava bude brzy
k&nbsp;dispozici.</p>

<p>K&nbsp;tomu všemu je zde vynikající tým CZilly, který umožňuje používání
a&nbsp;podporu Firefoxu bez nutnosti znát jakýkoli jiný jazyk než český.
Věřím, že s&nbsp;takovýmto přístupem se v&nbsp;dohledné době stane Firefox
synonymem k&nbsp;pohodlnému brouzdání na Internetu.</p>

<p class="sig">
	<a href="http://maciweb.net/">Lukáš Mačí</a>
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
		<strong>Lukáš Mačí</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
