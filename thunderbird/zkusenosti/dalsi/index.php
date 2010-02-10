<?php
	require_once '../../inc/page.php';
	$page->setTitle('Další zkušenosti lidí, kteří již používají Thunderbird');
	$page->setDescription('Přicházejí nám e-maily od lidí, kteří popisují svoji zkušenost s přechodem na klient Mozilla Thunderbird. Přečtěte si, co je zaujalo, čím je Thunderbird potěšil a co si o Thunderbirdu myslí.');
	$page->setKeywords('zkušenost zážitek mozilla thunderbird outlook express změna');
	$page->includeTemplate('header');
?>
<div class="main exp-short">

<h1>Zkušenosti</h1>

<p>Spojil jsem Thunderbird s&nbsp;NOD32 a&nbsp;zjistil jsem, že je to
to nejlepší. Totiž, TB má velice účinný antispamový filtr, který mně velice
chyběl, a&nbsp;NOD32 odchytil doposud všechny viry. Navíc odpadla chyba,
kdy bylo více než 2000 zpráv a&nbsp;OE se již nespustil, protože neměl paměť
pro načtení. Navíc velice kvalitní import z&nbsp;OE překlopil vše bez
jakýchkoliv problémů. Právě se chystám otestovat Kalendář ... předpokládám,
že tím plně nahradím jakýkoliv jiný produkt (MS). Díky, pokračujte ... doporučuji
vás svým známým (doporučuji pouze to, čemu sám důvěřuji).</p>

<p class="sig">Martin Hrdlička</p>

<hr />

<p>Programům většinou zůstávám věrný. Hlavně těm, které používám neustále.
Mezi takové patři i&nbsp;e-mailový klient. Po nějaké době zkoušení a&nbsp;testování Thunderbirdu
jsem udělal výjimku a&nbsp;již bych se k&nbsp;Outlooku Express nevrátil. Thunderbird má
samozřejmé i&nbsp;pár zanedbatelných drobností, které mně osobně nevyhovují (např. práce s&nbsp;podpisy).
Výhod je ovšem tolik a&nbsp;tak velkých, že nemám pochyb o&nbsp;spravné volbě. Mezi mnoho výhod
patři bezproblémový přechod z&nbsp;Outlook Express, skvělá práce se spamem, RSS čtečka,
multiplatformnost, opravdu skvělé filtrování zpráv pro dokonalý přehled nad
velkým množstvím mailů&nbsp;atd. Zkrátka Thunderbird je program, který si zaslouží
víc než jen pochvalu.</p>

<p class="sig">Jiří Pytela</p>

<hr />

<p>Nainstaloval jsem a už nikdy nic jiného!!!</p>

<p class="sig">Libor Starý</p>

<hr />

<p>S Thunderbirdem jsem spokojena, má celkem příjemné nástroje jako např.
načítání obrázků vložených do těla zprávy až po potvrzení tlačítkem. Rovněž
příjemné je i nastavení pro nevyžádanou poštu, kdy si ji mohu odfiltrovávat
dle zvoleného klíče.</p>

<p class="sig">Gábina Ficková</p>

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
		<strong>Další zkušenosti</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
