<?php
	require_once '../inc/page.php';
	$page->setTitle('Mozilla Reporter &ndash; hlášení nefunkčních stránek');
	$page->setHeadline('Mozilla Reporter &ndash; hlášení nefunkčních stránek','Jak na nefungující stránky');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<h2 id="mr-co-je">Co je Mozilla Reporter?</h2>

<p>Pokud používáte aplikace Mozilla.org déle, možná jste se již setkali se 
stránkami, které se vám zobrazovaly špatně &ndash; ať už byla stránka pouze 
špatně čitelná nebo rozházená a&nbsp;naprosto nepoužitelná. Mozilla Reporter je 
nástroj, který vám dává možnost pomoci opravit tyto stránky. Tento program 
odešle hlášení o&nbsp;chybné stránce a&nbsp;lidé zapojení v&nbsp;projektu Technické evangelizace
stránky prozkoumají, zjistí problémy a&nbsp;vhodně upozorní správce webu, jak 
chyby odstranit.</p>

<h2 id="mr-instalace">Instalace</h2>

<p>Mozilla Reporter není potřeba instalovat, je součástí Mozilla Firefox od 
verze 1.5 a&nbsp;Seamonkey od verze 1.0.</p>

<h2 id="mr-nahlaseni">Nahlášení chybné stránky</h2>

<p>Pokud objevíte chybnou stránku, její nahlášení je velmi jednoduché. Mozilla 
Reporter spustíte přes <span class="nabidka">Nápověda</span> &gt; <span 
 class="nabidka">Upozornit na chybnou stránku</span>.</p>

<div class="img-center"><div class="img-c" style="width:200px">
	<a href="images/reporter-nabidka.png"
	class="zoom"><img
	src="images/reporter-nabidka-m.png"
	title="Mozilla Reporter v hlavní nabídce Firefoxu"
	alt="Mozilla Reporter v hlavní nabídce Firefoxu"
	height="77" width="200" /></a>
</div></div>

<p>Poté se objeví okno, které vás v&nbsp;angličtině informuje o&nbsp;dalším 
postupu a&nbsp;o&nbsp;ochraně osobních údajů.</p>

<div class="img-center"><div class="img-c" style="width:200px">
	<a href="images/reporter-privacy.png"
	class="zoom"><img
	src="images/reporter-privacy-m.png"
	title="Ochrana osobních údajů"
	alt="Ochrana osobních údajů"
	height="175" width="200" /></a>
</div></div>

<p>Po zaškrtnutí políčka, kterým vyjadřujete svůj souhlas s&nbsp;ujednáním 
o&nbsp;ochraně osobních údajů, již můžete klepnout na tlačítko <span 
 class="nabidka">Další &gt;</span>.</p>

<div class="img-center"><div class="img-c" style="width:200px">
	<a href="images/reporter-report.png"
	class="zoom"><img
	src="images/reporter-report-m.png"
	title="Detaily hlášení"
	alt="Detaily hlášení"
	height="175" width="200" /></a>
</div></div>

<p>Projevuje-li se chyba na stránce pouze přihlášeným uživatelům, zaškrtněte 
v&nbsp;následujícím okně zaškrtávací políčko <span class="nabidka">Stránka je 
chráněna autorizací</span>. Pokud je stránka přístupná i&nbsp;nepřihlášeným 
uživatelům, ponechte toto pole nezaškrtnuté.</p>

<p>V&nbsp;druhé části formuláře vyberte typ problému, který na dané stránce 
pozorujete (např. rozpadlá grafika stránky, nezobrazující se obrázky atd.). Ve 
spodní části formuláře je prostor pro podrobnější popis problému &ndash; pište 
jej <strong>bez diakritiky</strong> (tj. bez háčků a&nbsp;čárek). Poslední pole
slouží k&nbsp;zadání vašeho e-mailu, který není nutné vyplňovat. Když jsou 
všechna potřebná pole vyplněna, můžete odeslat upozornění.</p>

<div class="img-center"><div class="img-c" style="width:200px">
	<a href="images/reporter-odeslano.png"
	class="zoom"><img
	src="images/reporter-odeslano-m.png"
	title="Závěrečná obrazovka"
	alt="Závěrečná obrazovka"
	height="175" width="200" /></a>
</div></div>

<p>Poslední okno, se kterým se při hlášení setkáte, vám sdělí číslo nahlášené 
chyby. Zaškrtnutím políčka  <span class="nabidka">Zobrazit detaily</span> si 
zobrazíte přehled všech informací, které byly odeslány spolu s&nbsp;chybou. 
Podle nich budou pracovníci Technické evangelizace
analyzovat oznámený problém. Všechny chybové stránky lze nalézt na <a 
 href="http://reporter.mozilla.org/" hreflang="en">stránce Reporteru</a></p>

<p>Gratulujeme, nahlášení chybové stránky je úspěšně za vámi! Nyní už je vše na  
Technické evangelizaci a&nbsp;na ochotě webmasterů opravit web a&nbsp;zpřístupnit ho tak uživatelům
moderních prohlížečů.</p>

<hr />
<p><small>18. 7. 2006, <a href="/czilla/prispevatele.php#kdo-je-JJ">Jiří Janda</a></small></p>

<?php
	$page->includeTemplate('footer');
?>
