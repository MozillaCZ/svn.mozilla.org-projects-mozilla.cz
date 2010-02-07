<?php
	require_once '../../inc/page.php';
	$page->setTitle('Martin Kopta: Proč prohlížím web ve Firefoxu');
	$page->setDescription('Martin Kopta zkusil Mozilla Firefox pro jednu vlastnost a objevil celou řadu dalších. Dnes má pocit, že Firefox byl napsán jemu na míru.');
	$page->setKeywords('mozilla firefox zkušenost msie přechod formulář zvětšování písma blokování vyskakovací okna RSS rozšíření hledání');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Proč prohlížím web ve Firefoxu</h1>

<p>Nikdy bych asi nepřestal používat Microsoft Internet Explorer, kdybych si
nepořídil nový notebook. Abyste rozuměli, ten notebook má klávesy pro
listování na předcházející a&nbsp;následující stránku, a&nbsp;má je tak nešikovně
umístěné, že je tu a&nbsp;tam nechtěně stisknu, když chci stisknout klávesu se
šipkou. Často se mi to stalo v&nbsp;okamžiku, kdy jsem něco psal do formuláře na
webu. Dovedete si představit, jak jsem zuřil, když jsem se po pár minutách
psaní překlepl, prohlížeč načetl předchozí stránku a&nbsp;já o&nbsp;všechen napsaný
text přišel.</p>

<p>Kamarádi mi doporučili prohlížeč Mozilla Firefox, ten si po návratu na
stránku napsané texty pamatuje. Z&nbsp;počátku jsem Firefox otevíral jen pro
psaní textů do formulářů, ale jak jsem odhaloval jeho nové a&nbsp;nové
vlastnosti, postupem času jsem na Firefox přešel docela. Vlastně nejde o&nbsp;nic
převratného, ale hned se mi zalíbila možnost otevírat stránky do panelů
místo do nových oken&#xA0;&ndash; je to pro mě přehlednější a&nbsp;pohodlnější.
Pak jsem si zvykl na jednoduché zvětšování písma. Zatímco v&nbsp;Exploreru je
tahle možnost schovaná v&nbsp;programových nabídkách, ve Firefoxu stačí stisknout
klávesovou zkratku <kbd>Ctrl</kbd>+<kbd>+</kbd>. A&nbsp;co je na tom nejlepší,
funguje to opravdu na všech stránkách. V&nbsp;Exploreru jsem si písmo nikdy
nezvětšoval, ale když je to ve Firefoxu tak snadné, už si nemusím namáhat
oči při čtení malých muněk.</p>

<p>Pak jsem objevil klíčová slova ve vlastnostech oblíbených odkazů
v&nbsp;záložkách. Do adresního řádku stačí napsat klíčové slovo a&nbsp;otevře se stránka
ze záložek. Protože často otevírám různé slovníky na webu, úplně jsem
propadl Firefoxu v&nbsp;okamžiku, kdy jsem zjistil, že když nahradím v&nbsp;záložkách
v&nbsp;adrese hledané slovo za <code>%s</code>, můžu pak ve slovnících hledat
přímo z&nbsp;adresního řádku tak, že za klíčové slovo záložky vložím
hledané slovo a&nbsp;Firefox můj dotaz doplní do adresy a&nbsp;otevře rovnou výsledek.
Firefox mi šetří sice jen vteřiny, ale za den se to nasčítá.</p>

<p>Těch pomůcek, které jsem ve Firefoxu objevil, je spousta. Například
blokování vyskakujících oken s&nbsp;reklamou, otevření jednoho rámu do celého
okna, automatické doplňování údajů do formulářů na stránkách, kam se vracím,
rychlé hledání textů v&nbsp;odkazech a&nbsp;na stránce a&nbsp;podobně. Na webu Mozilly jsem
našel mnoho doplňků, z&nbsp;nichž teď některé používám. Hned jsem si oblíbil
zvýrazňovač vyhledaných slov, otevírání adres, které jsou napsány v&nbsp;textu
(nejsou u&nbsp;nich odkazy), vlastní rozvržení ovládacích lišt, zabudovanou
čtečku zpráv
(<abbr title="Really Simple Syndication" lang="en">RSS</abbr>
agregátor Sage) a&nbsp;skoro desítku dalších. Mám pocit, že někdo Firefox napsal
přímo mně na míru.</p>

<p class="sig">
	Martin Kopta
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
		<strong>Martin Kopta</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
