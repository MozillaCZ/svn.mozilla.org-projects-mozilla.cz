<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Rozšíření pro Firefox';
	$page->headline = array('Rozšíření','Začínáme používat prohlížeč Firefox, 4. část');
	
	$page->setKeywords ('mozilla, firefox, prohlížeč, browser, začátečník, beginner, návod, rozšíření, extensions');
	$page->setDescription ('Návod jak nainstalovat rozšíření do Firefoxu.');		

	$page->includeHeader();
?>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./historie.html">Procházení historií</a></li>
	<li>Předchozí:
		<a href="./ovladani.html">Základní ovládání Firefoxu</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>Mozilla Firefox je multifunkční aplikace, a&nbsp;proto vám umožní
stáhnout a&nbsp;nainstalovat rozšíření, známé též jako "Extensions". Rozšíření 
je balíček, který přidává do aplikace nové funkce. Po celý tento díl budu rozebírat,
jak tato rozšíření instalovat. V&nbsp;tomto článku budu
instalovat skvělé rozšíření <a href="http://forecastfox.mozdev.org" 
title="ForecastFox: Domovská stránka" hreflang="en">ForecastFox</a>.</p>

<p>Stejně jako v&nbsp;řadě dalších situací, začnete volbou 
<span class="nabidka">Nástroje -> Správce rozšíření</span> v&nbsp;hlavní nabídce. 
Pokud jste zvolili správně, měl by se vám zobrazit následující dialog:</p>

<div class="img-center"><div class="img-c" style="width:483px"><img
	src="../images/t4-obr01.png"
	alt="Okno Správce rozšíření"
	style="height:300px;width:483px" />
</div></div>

<p>V&nbsp;levém dolním rohu je odkaz <span class="nabidka">Získat nová 
rozšíření</span>. Klepněte na něj. Firefox otevře nové okno, kde si budete 
moci vybrat z&nbsp;řady rozmanitých rozšíření. Jak jsem již řekl dříve, já chci 
používat rozšíření ForecastFox.</p>

<div class="img-center"><div class="img-c" style="width:631px"><img
	src="../images/t4-obr02.png"
	alt="Webová stránka addons.mozilla.org"
	style="height:579px;width:631px" />
</div></div>

<p>Klepněte na odkaz rozšíření, které chcete instalovat. Já jsem si vybral
ForecastFox. Klepnutím na odkaz se dostanete na novou stránku (můžete vidět
níže) a&nbsp;zde pokračujte klepnutím na zvýrazněný odkaz pro instalaci.</p>

<div class="img-center"><div class="img-c" style="width:631px"><img
	src="../images/t4-obr03.png"
	alt="Stránka s rozšířením ForecastFox" width="508"
	style="height:579px;width:631px" />
</div></div>

<p>Zobrazí se vám dialog, zda-li chcete či nechcete dané rozšíření
nainstalovat. Volba je na vás&nbsp;:). Já volím klepnutí na tlačítko 
<span class="nabidka">Instalovat nyní</span>.</p>

<div class="img-center"><div class="img-c" style="width:337px"><img
	src="../images/t4-obr04.png"
	alt="Instalační dialog"
	style="height:342px;width:337px" />
</div></div>

<p>Poté, co je rozšíření staženo a&nbsp;nainstalováno, uvidíte ve Správci
rozšíření něco podobného jako na následujícím obrázku:</p>

<div class="img-center"><div class="img-c" style="width:483px"><img
	src="../images/t4-obr05.png"
	alt="Okno Správce stahování po instalaci rozšíření ForecastFox"
	style="height:300px;width:483px" />
</div></div>

<p>Pokud nyní ukončíte a znovu spustíte Firefox, zobrazí se vám okno 
rozšíření ForecastFox, které je potřeba nakonfigurovat.</p>

<div class="img-center"><div class="img-c" style="width:521px"><img
	src="../images/t4-obr06.png"
	alt="Dialog konfigurace rozšíření ForecastFox"
	style="height:385px;width:521px" />
</div></div>

<p>Jediné nastavení, které musíte udělat, je zadat vaše umístění - klepněte na 
tlačítko <span class="nabidka">Vyhledat kód</span> a&nbsp;v&nbsp;zobrazeném dialogu 
zadejte město, ve kterém žijete. Výsledkem vyhledávání může být jedno či více 
míst, které můžete zvolit. Na závěr zvolte, jaké měrné jednotky chcete používat. 
Já volím <span class="nabidka">Metrické</span>.</p>

<div class="img-center"><div class="img-c" style="width:521px"><img
	src="../images/t4-obr07.png"
	alt="Dialog konfigurace rozšíření ForecastFox II"
	style="height:385px;width:521px" />
</div></div>

<p>A je to! Nyní máte lištu, která vám oznámí, jaké je aktuální počasí 
(netřeba koukat ven z&nbsp;okna) a&nbsp;jaké bude, včetně hezkých satelitních 
snímků.</p>

<div class="img-center"><div class="img-c" style="width:665px"><img
	src="../images/t4-obr08.png"
	alt="Okno Firefoxu s rozšířením"
	style="height:398px;width:665px" />
</div></div>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./historie.html">Procházení historií</a></li>
	<li>Předchozí:
		<a href="./ovladani.html">Základní ovládání Firefoxu</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeFooter();
?>
