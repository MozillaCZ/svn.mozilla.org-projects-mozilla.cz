<?php
	require_once '../inc/page.php';
	$page->setTitle('Zkušenosti lidí, kteří používají Thunderbird');
	$page->setDescription('Přečtěte si, co si o přechodu z jiných poštovních klientů na Mozilla Thunderbird myslí lidé, kteří již přešli.');
	$page->setKeywords('mozilla thunderbird přechod outlook express osobní zkušenost názor důvod příklad proč přejít');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Zkušenosti</h1>

<p>Nabízíme vám zkušenosti některých lidí, kteří přešli na Thunderbird
z&nbsp;jiných poštovních klientů.</p>


<h2 class="dn">Několik krátkých zkušeností ...</h2>

<div class="med-box">
<h3 class="first">Bezpečnější a&nbsp;přítulnější</h3>

<p>Když jsem hledal bezpečnější a&nbsp;uživatelsky přítulnější poštovní
klient než do té doby používaný Outlook, vyzkoušel jsem snad všechny
existující programy. Poté, co jsem narazil na Thunderbird, jsem už dále
hledat nemusel. Umí vše, co od poštovního programu požaduji &ndash;
jednoduchá konfigurace, velmi účinný antispamový filtr, automatické třídění
pošty, kontrola pravopisu u&nbsp;odesílané pošty a&nbsp;v&nbsp;neposlední
řadě je velice kvalitně lokalizován. V&nbsp;současné době ho používám
k&nbsp;naprosté spokojenosti ke čtení tří e-mailových účtů a&nbsp;mohu ho
všem vřele doporučit.</p>

<p class="sig">Jiří Parkan</p>
</div>

<div class="med-box">
<h3 class="first">Oceňuji multiplatformnost</h3>

<p>Thunderbird používám již od verze 0.7 a&nbsp;musím říci, že už tehdy jsem
ho považoval za &quot;nejlepšího e-mailovýho klienta.&quot; Nejvíce oceňuji
jeho multiplatformnost. To znamená, že ať už jsem zrovna v&nbsp;prostředí
Windows nebo Linux, vždy tam mám svého hromového ptáka, který mi nosí poštu.
Thunderbird dělá vždy to, co chci, narozdíl od jiných poštovních klientů
typu Outlook. A&nbsp;proč taky platit stovky Kč, když můžu mít to nejlepší
zadarmo &ndash; snadnou změnu vzhledu, jednoduché <abbr title="Graphical
User Interface" lang="en">GUI</abbr>, stabilitu, spolehlivost.</p>

<p class="sig">Tomáš Bambas</p>
</div>

<div class="cb"></div>

<div class="med-box">
<h3>Lepší antispamový filtr</h3>

<p>S&nbsp;příchodem paušálního Internetu jsem začal hledat nějaký e-mailový
klient, který by mi vyhovoval. Nepotřeboval jsem nic náročného, prostě jen
to, co bude dobře fungovat. Vyzkoušel jsem řadu klientů &ndash; např.
Outlook, The&nbsp;Bat!, M2 v&nbsp;Opeře atd. Ze všech mi však nejvíce
vyhovoval Thunderbird díky své nenáročnosti a&nbsp;intuitivnímu ovládání.
Jeden z&nbsp;hlavních důvodů, proč jsem u&nbsp;něj také zůstal, je to, že
jsem neviděl lepší antispamový filtr.</p>

<p class="sig">Pavel Čermák</p>
</div>

<div class="med-box">
<h3>Thunderbird je dokonalá volba</h3>

<p>Thunderbird je vynikající program. Zejména díky antispamovému filtru
a&nbsp;bezpečnosti. Kvůli těmto dvěma důležitým věcem jsem přestal používat
Outlook. Pro uživatele, který se nechce ztratit v&nbsp;nevyžádané poště
a&nbsp;strachovat se při každém stahování pošty, &quot;co mu do počítače
skočí&quot;, je Thunderbird naprosto dokonalá volba. Rodině a&nbsp;všem
známým ho vždy vřele doporučuji.</p>

<p class="sig">Michal Novák</p>
</div>

<h2 id="dalsi">Další zkušenosti</h2>

<p>
Přečtěte si <a href="/zkusenosti/dalsi/"
title="Další zkušenosti uživatelů">další zkušenosti uživatelů</a>
s&nbsp;tímto poštovním klientem.
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
		<strong>Zkušenosti</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
