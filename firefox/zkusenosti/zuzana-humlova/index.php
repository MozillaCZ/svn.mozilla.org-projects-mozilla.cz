<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zuzana Humlová: Proč používám Firefox?');
	$page->setDescription('Zuzana trávila v práci hodiny obcházením chyb Internet Exploreru. Nakonec se tento ztracený čas stal jedním z důvodů, proč vyzkoušela Firefox. Dnes by jej doporučila všem uživatelům.');
	$page->setKeywords('mozilla firefox zkušenost msie přechod formulář vyhledávání rozšíření změna designu');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Proč používám Firefox?</h1>

<p>Pro procházení internetem jsem odjakživa používala Internet Explorer
a&nbsp;vůbec mne nenapadlo prohlížet stránky v&nbsp;jiném browseru. Situace
se změnila o&nbsp;pár let později, kdy jsem začala pracovat na přípravě
webových služeb. Kvůli optimalizaci stránek pro prohlížeče jsem si mimo jiné
nainstalovala také Mozillu a&nbsp;Operu, ale ani jeden prohlížeč mne příliš
nezaujal. Po jejich výhodách jsem také příliš nepátrala, asi proto, že
jediný problém, který jsem s&nbsp;Explorerem měla, byla nepřehlednost
způsobená velkým množstvím otevřených oken. Časem jsem však začala přicházet
na další problémy: například na to, že v&nbsp;Exploreru se některé
internetové stránky vůbec nezobrazí. Navíc jsem ho přestala mít
v&nbsp;oblibě kvůli tomu, že jsme v&nbsp;práci trávili hodiny času
obcházením jeho chyb jen proto, aby se stránky s&nbsp;validním kódem
zobrazily správně.</p>

<p>Tyto důvody mne vedly k&nbsp;tomu, že jsem vyzkoušela Firefox. Kromě
možnosti otevírat stránky do tabů místo do oken se mi zalíbily i&nbsp;další
funkce &ndash; jednoduchá změna velikosti textu, možnost vyhledávání
v&nbsp;různých vyhledávačích přímo z&nbsp;horní lišty a&nbsp;hlavně
<a href="https://addons.mozilla.org/cs/firefox/">velké množství rozšíření</a>
&ndash; třeba
<a href="https://addons.mozilla.org/cs/firefox/addon/60" lang="en">Web Developer Toolbar</a> nebo
<a href="https://addons.mozilla.org/cs/firefox/addon/139" lang="en">Image Zoom</a>
mi denně usnadňují práci. Potěší i&nbsp;drobné vychytávky, jako je rozšíření
<a href="https://addons.mozilla.org/cs/firefox/addon/134" lang="en">Copy Plain Text</a>.</p>

<p>Zejména v&nbsp;Bugzille se mi často stane, že potvrdím bug, který nemá
vyplněné všechny povinné položky &ndash; to znamená, že bug se neuloží
a&nbsp;text zmizí. Zatímco moji <em>nefirefoxoví</em> kolegové
v&nbsp;takovém případě nešťastně vykřikují, mně stačí kliknout na tlačítko
<em>Zpět</em> a&nbsp;texty jsou zpátky &ndash; Firefox je totiž chytrý
a&nbsp;text si pamatuje.</p>

<p>Protože nejsem člověk, který by pozorně a&nbsp;pravidelně pátral po všech
funkcích, co Firefox nabízí, objevila jsem teprve nedávno možnost změnit
design tohoto prohlížeče a&nbsp;hned jsem jich několik vyzkoušela &ndash;
toto vylepšení se mi hned zalíbilo, přináší příjemné oživení.</p>

<p>Stručně řečeno, s&nbsp;Firefoxem se Internetem prochází rychleji,
jednodušeji a&nbsp;příjemněji a&nbsp;s&nbsp;klidným svědomím bych ho všem
uživatelům doporučila.</p>

<p class="sig">
	<a href="http://cz.linkedin.com/pub/zuzana-humlova/4/539/43">Zuzana Humlová</a>
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
		<strong>Zuzana Humlová</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
