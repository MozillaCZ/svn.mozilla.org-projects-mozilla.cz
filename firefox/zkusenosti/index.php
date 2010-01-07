<?php

	$inc_path		= "../inc/";
	include($inc_path . "config.inc");

	setTitle("Zkušenosti lidí, kteří přešli na Firefox");
	$page_desc		= "Přečtěte si, co si o přechodu z Internet Exploreru na Mozilla Firefox myslí lidé, kteří již přešli.";
	$page_keywords	= "mozilla firefox přechod internet explorer osobní zkušenost názor důvod příklad proč přejít";

	include($inc_path . "h_head.inc");
	include($inc_path . "x_header.inc");

?>

<div class="main">

<h1>Zkušenosti</h1>

<p>Nabízíme vám zkušenosti některých lidí, kteří úspěšně přešli
z&nbsp;Internet Exploreru na Firefox.</p>


<h2 class="dn">Několik krátkých zkušeností ...</h2>

<div class="med-box">
<h3 class="first">Chtěl jsem lepší alternativu</h3>

<p>Jmenuji se Jan Řezáč, studuji v&nbsp;Brně a&nbsp;poslední tři roky se
věnuju tvorbě webů. Na Firefox jsem z&nbsp;IE&nbsp;6 přešel asi před rokem,
kdy jsem se začal zajímat o&nbsp;podporu standardů mezi jednotlivými
prohlížeči - IE si vedl podstatně hůř než jiné prohlížeče a&nbsp;já chtěl
nějakou lepší alternativu. S&nbsp;Firefoxem jsem nadmíru spokojen - mám více
stránek otevřených v&nbsp;jednom okně, nainstalovanou spoustu pluginů, které
mi zjednodušují práci, a&nbsp;navíc ještě fajn skin.</p>

<p class="sig">Jan Řezáč</p>
</div>

<div class="med-box">
<h3 class="first">Objevil jsem různé vymoženosti</h3>

<p>Používám internet tak tři roky. Ještě asi před rokem jsem byl zarytým IE
a&nbsp;Windows userem. Pak jsem v&nbsp;časopisech začal číst něco jako IE
a&nbsp;jeho bezpečnostní díry, Linux =&nbsp;větší bezpečnost. Tak jsem se
alespoň rozhodl zkusit něco, co je i&nbsp;na Linuxu, Firefox. V počátku mě
tento skvělý prohlížeč nijak neohromoval, ale pak jsem zjistil různé
vymoženosti jako záložky, extenze a&nbsp;vzhledy. Rázem jsem začal mít
k&nbsp;IE velký, opravdu hodně velký odpor a&nbsp;dnes jej spouštím pouze na
testování stránek.</p>

<p class="sig">Jakub Machala</p>
</div>

<h2 id="dalsi">A mnoho dalších</h2>
<ul>
	<li>Zdeněk Bulín:
		<a href="./zdenek-bulin/">Naprosto bez problémů...</a></li>
	<li>Tomáš Brabenec:
		<a href="./tomas-brabenec/">Směji se nad problémy ostatních</a></li>
	<li>Matěj Humpál:
		<a href="./matej-humpal/">Proč používám Mozilla Firefox?</a></li>
	<li>Robert Madaj:
		<a href="./robert-madaj/"
		hreflang="sk" lang="sk">Pred Mozillou a&nbsp;s&nbsp;Firefoxom</a></li>
	<li>Vojtěch Borek:
		<a href="./vojtech-borek/">Firefox mě nadchnul</a></li>
	<li>Otakar Prokeš:
		<a href="./otakar-prokes/">Od teď jsem novým uživatelem Firefoxu</a></li>
	<li>Lukáš Mačí:
		<a href="./lukas-maci/">Firefox mi poskytuje maximální pohodlí</a></li>
	<li>... i&nbsp;řadu
		<a href="./dalsi/">stručných zkušeností</a>.</li>
</ul>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující odkazy</h2>

<?php

	include($inc_path . "x_more_stories.inc");

?>
</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $web_name; ?></a> &gt;
		<strong>Zkušenosti</strong>
	</p>
</div>

<?php

	include($inc_path . "x_footer.inc");

?>
