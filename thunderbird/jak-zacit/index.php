<?php
	require_once '../inc/page.php';
	$page->setTitle('Jak začít?');
	$page->setDescription('Průvodce přechodem z vašeho stávajícího poštovního klientu na Thunderbird.');
	$page->setKeywords('outlook express thunderbird přechod převod import migrace návod');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Jak začít?</h1>

<p>Přejít na Mozilla Thunderbird je jednoduché. Stačí
<a href="/stahnout/">stáhnout</a> a&nbsp;<a
href="http://www.czilla.cz/podpora/thunderbird/tutorial/index.html"
title="Návod na instalaci Mozilla Thunderbirdu">nainstalovat</a>.
Při prvním spuštění si můžete <a
href="http://www.czilla.cz/podpora/thunderbird/tutorial/index.html#konfigurace">vytvořit nový účet</a> nebo
převést poštu z&nbsp;vašeho stávajícího klientu. Převod pošty je snadný.
Po instalaci jen projdete jednoduchého průvodce převodem vaší pošty ze stávajícího klientu.
</p>

<h2>Import pošty do Mozilla Thunderbirdu</h2>

<div class="img-c img-right" style="width:250px">
	<img src="/img/ss-import.png" width="250" height="203" alt="" />
	<p class="comment">Dialog, který vás provede importem pošty z&nbsp;vašeho stávajícího poštovního klienta.</p>
</div>

<p>Import vaší stávající pošty do Thunderbirdu je velmi snadný. Při prvním
spuštění programu budete dotázáni, zda si přejete importovat poštu, kontakty
a&nbsp;nastavení z&nbsp;vašeho stávajícího poštovního klientu. Zvolte ze
seznamu vámi používaný klient a&nbsp;potvrďte. A&nbsp;je to! Vše potřebné se
importovalo a&nbsp;vy můžete začít Thunderbird naplno používat.</p>

<p>Všechna vaše nastavení a&nbsp;data ukládá Thunderbird na váš disk do adresáře s&nbsp;profilem.</p>

<div class="note">
<p>Na <strong>Windows Vista/7</strong> je adresář obvykle umístěn v&nbsp;cestě
<span class="file">C:\Users\<var>[Uživatelské jméno]</var>\AppData\Roaming\Thunderbird\Profiles\</span>
a&nbsp;zbytek by měl být jasný.</p>

<p>Na <strong>Windows XP/2000</strong> je adresář obvykle umístěn v&nbsp;cestě
<span class="file">C:\Documents and Settings\<var>[Uživatelské jméno]</var>\Data aplikací\Thunderbird\Profiles\</span>
a&nbsp;zbytek by měl být jasný.</p>

<p>Na <strong>Windows 95/98/ME</strong> je adresář obvykle umístěn
v&nbsp;<span class="file">C:\WINDOWS\Application Data\Thunderbird\Profiles\[Náhodné znaky].default</span>.</p>
</div>

<p><strong>Chcete provést import později?</strong> Můžete! Stačí když v&nbsp;nabídce
<strong>Nástroje</strong> zvolíte položku <strong>Importovat</strong>.</p>

<p><strong>Není váš aktuální klient v nabídce?</strong> Poštu a kontakty můžete 
importovat ručně i&nbsp;z&nbsp;<a 
href="http://kb.mozillazine.org/Category:Migration_%28mail%29" hreflang="en">řady dalších klientů</a>. </p>



<h2>Snadnější práce s&nbsp;poštou</h2>

<p>A&nbsp;je to! Vidíte? Nebylo to těžké. Thunderbird udělal většinu práce
za vás a&nbsp;vy se tak můžete věnovat důležitějším věcem. Objevujte nové
možnosti, které vám Thunderbird pro práci s&nbsp;poštou nabízí. Určitě se vám
zalíbí.</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující informace</h2>

	<h3 class="first">Seznámení pro nováčky</h3>

	<p>Pokud chcete lépe poznat svého nového pošťáka, můžete si na
	<a href="http://www.czilla.cz/">CZille</a> přečíst seznámení s&nbsp;Thunderbirdem
	pro nováčky:</p>

	<ol>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/index.html">Úvod</a></li>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/instalace.html">Instalace</a></li>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/prace-s-postou.html">Základy práce s&nbsp;elektronickou poštou</a></li>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/prace-s-postou2.html">Základy práce s&nbsp;elektronickou poštou, dokončení</a></li>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/prilohy.html">Práce s&nbsp;přílohami</a></li>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/antispamovy-filtr.html">Antispamový filtr</a></li>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/import.html">Import elektronické pošty a&nbsp;kontaktů</a></li>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/filtry.html">Filtry</a></li>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/diskusni-skupiny.html">Diskuzní skupiny</a></li>
		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/motivy-vzhledu.html">Motivy vzhledu</a></li>
	</ol>

	<h3>Rychlé ovládání</h3>

	<p>Poznejte, jak efektivně ovládat Thunderbird pomocí klávesnice a&nbsp;myši:</p>

	<dl>
		<dt><a href="https://support.mozillamessaging.com/cs/kb/klavesove-zkratky">Klávesové zkratky</a></dt>
		<dd>Přehled nejběžnějších klávesových zkratek v&nbsp;Thunderbirdu
		a&nbsp;porovnání s&nbsp;ekvivalenty v&nbsp;Outlook Expressu.</dd>
	</dl>

</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<strong>Jak začít?</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
