<?php
	require_once '../../inc/page.php';
	$page->setTitle('Radek Růžička: Chci pracovat zejména efektivně');
	$page->setDescription('Přečtěte si, jak Firefox vyhrál pomyslný konkurz na internetový prohlížeč u Radka Růžičky.');
	$page->setKeywords('mozilla firefox prohlížeč přechod student webový vývojář uživatel zkoušení');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Chci pracovat zejména efektivně</h1>

<p>Svůj internetový profil &ndash; můžeme-li si tak dovolit nazvat přístup
k&nbsp;tomuto médiu &ndash; bych zařadil hned do tří vrstev. Jsem student technické
fakulty a&nbsp;tak internet používám jako zdroj odborných informací. Pracuji
jako vývojář webových aplikací. Internet je tedy zdrojem znalostí, řešením
problémů a&nbsp;jevištěm mé práce. A&nbsp;do třetice, jsem běžný uživatel ulehčující si
život elektronickým bankovnictvím, lehce dostupnými odpověďmi na odjezd
ranního autobusu nebo na právě probíhající kulturu.</p>

<p>Ať už sedím před monitorem v&nbsp;roli studenta luštícího cizojazyčné
definice, či jako profesionál, po konferencích zoufale hledající zapeklitou
chybu, a&nbsp;nebo jako běžný uživatel&nbsp;... používám jeden prohlížeč.
Firefox. A&nbsp;rád vám povím proč.</p>

<p>Firefox mně přináší přesně to co potřebuji &ndash; rychlost a spolehlivost. Pro
mě je však i&nbsp;docela důležité, že mně zbytečně nenutí nic víc.</p>

<p>K&nbsp;Firefoxu mě přivedl balík Mozilla, který dodnes k&nbsp;naprosté spokojenosti
používám pod Linuxem. Líbilo se mně přehledné surfování díky systému panelů
(tabbed-browsing), které mně nesmírně usnadňovalo práci např. s&nbsp;vyhledávači,
ale trošku jsem balíku vyčítal prodlevu při startu.</p>

<p>Ve Windows jsem používal
<abbr title="Microsoft Internet Explorer" lang="en">MSIE</abbr>.
V&nbsp;roce 1997, kdy už jsem se mohl dostat pravidelně na
internet, mě tato integrovaná aplikace dostačovala. Od té doby se ale
internet hodně proměnil. S&nbsp;nástupem &quot;šestkové&quot; verze Exploreru se
nahrály do mého počítače nejen spousty opravných balíčků, ale také mraky
červů a&nbsp;dalších potvor, na které jsem narazil při svých toulkách sítí. Před
rokem a&nbsp;půl mě procházení internetem zajišťoval prohlížeč plus další tři
programy, které postupně stahovali a&nbsp;blokovali, ať už pop-up okna, reklamní
obrázky, zákeřné Active-X komponenty či další vymoženosti neustále
agresivnějšího, ale i&nbsp;účinějšího internetového marketingu. Na starších
počítačích byl potom požitek čekat, až se systém, popřípadně takto
vyšperkovaný <abbr title="Internet Explorer" lang="en">IE</abbr>
spustil.</p>

<p>Překonal jsem nechuť měnit zaběhlou aplikaci s&nbsp;prověřeným nastavením
a&nbsp;vyzkoušel Firefox (tenkrát ještě Firebird). Pro ověření výsledků své práce
jsem vždy využíval služeb jiných prohlížečů, ale většinou mně u&nbsp;nich vadila
rychlost na slabších konfiguracích (hlavně Opera), nebo nevyhovující
ovládání (záložky v&nbsp;Mozille, interface v&nbsp;Konqueroru). Firefox na mne
zapůsobil bleskovou rychlostí jak při startu, tak při načítání vlastních
stránek.</p>

<p>Oblíbené položky (záložky) tvoří cenný poklad každého uživatele internetu
a&nbsp;já na tom nejsem jinak. Ve Firefoxu si záložky bez problémů vyexportuji do
<abbr title="HyperText MarkUp Language" lang="en">HTML</abbr>
souboru, ať už kvůli jejich záloze, nebo třeba pro snadný import do jiného
prohlížeče. Otevírání nových oken do panelů se pro mě stalo samozřejmostí
značně zefektivňující mou práci. Z&nbsp;profesionálního hlediska zase oceňuji
plnou podporu moderních standardů
(<abbr title="HyperText MarkUp Language" lang="en">XHTML</abbr>,
<abbr title="HyperText MarkUp Language" lang="en">HTML</abbr>,
<abbr title="Extensible Markup Language" lang="en">XML</abbr>,
<abbr title="Cascading Style Sheets" lang="en">CSS</abbr> atd.).
Prohlížeč si může uživatel pomocí
<a href="https://addons.mozilla.org/cs/firefox/">různých rozšíření</a>
<span lang="en">(extensions)</span> přizpůsobit, ale je fajn, že vývojáři
uživatelům nic nenutí. Firefox (a&nbsp;rovněž skvělý poštovní klient
Thuderbird) se k mé radosti neustále vyvíjí a&nbsp;každá nová verze mně
přinese příjemné překvapení.</p>

<p>Chci pracovat zejména efektivně. Proto můj pomyslný internetový konkurz
vyhrál stále vylepšující se Firefox.</p>

<p class="sig">
	<a href="http://www.roosei.cz/">Radek Růžička</a>
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
		<strong>Radek Růžička</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
