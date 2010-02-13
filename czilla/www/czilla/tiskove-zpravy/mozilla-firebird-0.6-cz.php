<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla Firebird 0.6 CZ - tisková zpráva');
	$page->setHeadline('Mozilla Firebird 0.6 CZ','Tisková zpráva k vydání Mozilla Firebird 0.6 CZ');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>

<h2>Malý, rychlý a český: Pták Ohnivák se představuje</h2>

<p>Pokud sledujete dění v oblasti webových prohlížečů, určitě jste
zaznamenali, že byla zveřejněna nová verze aplikace Mozilla Firebird 0.6. Od
dnešního dne mají možnost využít plně lokalizovanou aplikaci také čeští
uživatelé. Kódové označení Firebird znamená v překladu Ohnivý pták a proto
je česká lokalizace této aplikace nazvána Pták Ohnivák.</p>

<p>Aplikace Mozilla Firebird je následníkem prohlížeče Phoenix, jehož
uživatelské rozhraní bylo napsáno v jazyce XUL. Tento jazyk sloužící pro
popis uživatelského rozhraní ve spolupráci s jazykem JavaScript se vyznačuje
možností běhu na více platformách, snadného rozšíření a návazností na další
programovací jazyky.</p>

<p>Nová verze má řadu stejných vlastností jako aktuální verze Mozilla 1.4b,
takže můžete kromě velké řady různých témat vzhledu využít i rozšíření v
podobě zásuvných modulů, rychlejší běh na slabších počítačích a další.</p>

<p>Protože Mozilla Firebird není zatím připraven na tak snadný způsob
instalace jazykové lokalizace jako klasická verze prohlížeče Mozilla, je pro
uživatele připraven ke stažení celý lokalizovaný balíček, který je možné mít
nainstalovaný souběžně s klasickou verzí aplikace Mozilla.</p>

<p>Pokud jste tedy dosud čekali na prohlížeč, který je rychlý, dodržuje
platné standardy webových stránek a je plně lokalizován, právě jste se
dočkali.</p>

<p>Oba balíčky naleznete na serveru CZilla.cz na URL:</p>
<ul>
	<li><a href="ftp://ftp.czilla.cz/mozilla.org/firefox/0.6/MozillaFirebird-0.6-i686-pc-linux-gnu-csCZ.tar.gz">ftp://ftp.czilla.cz/mozilla.org/firefox/0.6/MozillaFirebird-0.6-i686-pc-linux-gnu-csCZ.tar.gz</a><br />
	(verze pro Linux, cca 10&nbsp;MB)</li>
	<li><a href="ftp://ftp.czilla.cz/mozilla.org/firefox/0.6/MozillaFirebird-0.6-win32-csCZ-installer.exe">ftp://ftp.czilla.cz/mozilla.org/firefox/0.6/MozillaFirebird-0.6-win32-csCZ-installer.exe</a><br />
	(verze pro Windows, cca 7 MB)</li>
</ul>

<p>Uživatelé operačního systému Linux si stažený balíček mohou rozbalit
pomocí příkazu <code>&quot;tar zvxf Mozilla*gz&quot;</code> do libovolného
adresáře a potom již stačí spustit samotnou aplikaci pomocí příkazu
./MozillaFirebird v daném adresáři.</p>

<p>Uživatelé operačního systému Windows se nemusí děsit, pro ně stačí umět
klikat :) a průvodce instalací zařídí vše podstatné včetně možnosti následné
odinstalace.</p>

<p>Server CZilla.cz kromě souborů s lokalizací také poskytuje informace,
které s celou sadou aplikaci Mozilla souvisí. Najdete zde návod na
používání, často kladené otázky, tipy a triky, tzv. Mozcestník, celou řadu
užitečných rozšíření atd. Pro uživatele je také k dispozici <a
href="http://forum.czilla.cz/">forum</a>, kde mohou o aplikaci diskutovat s
ostatními.</p>

<p>Jednou z posledních aktivit je snaha sestavit seznam webových stránek,
které různým způsobem ztěžují či znemožňují uživatelům aplikace Mozilla
jejich prohlížení a přimět tak jejich &quot;webmastery&quot; k respektování
skutečnosti, že webové stránky se dají napsat tak, že po dodržení uznávaných
standardů vypadají správně ve všech prohlížečích.</p>

<p>Za tým serveru CZilla.cz:<br />
Radek Vybíral<br />
Martin Hassman</p>

<?php
	$page->includeTemplate('footer');
?>