<?php
	require_once '../inc/page.php';
	$page->setTitle('Jak přejít?');
	$page->setDescription('Průvodce nahrazením Internet Exploreru prohlížečem Mozilla Firefox.');
	$page->setKeywords('msie internet explorer mozilla firefox přechod import převod záložky oblíbené adresy zachování návod');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Jak přejít?</h1>

<p>Vyměnit Internet Explorer za Firefox je jednoduché. Stačí
<a href="/stahnout/">stáhnout</a> a&nbsp;nainstalovat Firefox. Pak už jen
zbývá přenést vaše oblíbené položky z&nbsp;Internet Exploreru. Následujte
našeho jednoduchého průvodce.</p>


<h2>Import Oblíbených položek z&nbsp;Internet Exploreru</h2>

<p>Importování oblíbených položek do Firefoxu je velmi snadné. Při prvním
spuštění se Firefox zeptá, odkud chcete importovat data. Vyberte
&quot;Microsoft Internet Explorer&quot;. A&nbsp;je to! Všechny oblíbené položky
jsou v&nbsp;záložkách Firefoxu. Můžete je spravovat pomocí <strong>Správce
záložek</strong>, který najdete v&nbsp;hlavní nabídce Záložky.</p>

<p>Všechna nastavení ukládá Firefox na váš disk do adresáře s&nbsp;profilem.</p>

<div class="note">
<p>Na <strong>Windows XP/2000</strong> je adresář obvykle umístěn v&nbsp;cestě
<span class="file">
<a href="http://www.mozilla.org/support/firefox/edit.html#appdata"
	hreflang="en"
	title="Firefox Help: Editing Configuration Files">%AppData%</a>\Mozilla\Firefox\Profiles\[Náhodné znaky].default\</span>.
Stačí si prohlédnout
<span class="file">C:\Documents and Settings\<var>[Uživatelské jméno]</var>\Data aplikací\Mozilla\Firefox\Profiles\</span>
a&nbsp;zbytek by měl být jasný.</p>

<p>Na <strong>Windows 95/98/ME</strong> je adresář obvykle umístěn
v&nbsp;<span class="file">C:\WINDOWS\Application Data\Mozilla\Firefox\Profiles\[Náhodné znaky].default</span>.</p>
</div>

<p><strong>Nemáte své oblíbené položky?</strong> Báječné, tím bude přechod
ještě jednodušší! Jen nainstalujte a&nbsp;máte hotovo.</p>


<h2>Vychutnejte si znovu prohlížení Internetu</h2>

<p>A&nbsp;je to! Vidíte? Nebylo to těžké. Ve skutečnosti Firefox udělá většinu
věcí za vás. Tak si užívejte nepřekonatelnou rychlost a&nbsp;spolehlivost, aniž
byste se vzdali své bezpečnosti. Vraťte se zpátky na web s&nbsp;Mozilla
Firefoxem.</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující informace</h2>

	<h3 class="first">Seznámení pro nováčky</h3>

	<p>Pokud chcete lépe poznat svůj nový prohlížeč, můžete si na
	<a href="http://www.czilla.cz/">CZille</a> přečíst průvodce
	<a href="http://www.czilla.cz/podpora/firefox/tutorial/">Začínáme používat
	prohlížeč Firefox</a>. Jeho obsah tvoří:</p>

	<ol>
		<li><a href="http://www.czilla.cz/podpora/firefox/tutorial/">Úvod</a></li>
		<li><a href="http://www.czilla.cz/podpora/firefox/tutorial/instalace.html">Instalace a&nbsp;konfigurace</a></li>
		<li><a href="http://www.czilla.cz/podpora/firefox/tutorial/prohlizeni-v-panelech.html">Prohlížení v&nbsp;panelech</a></li>
		<li><a href="http://www.czilla.cz/podpora/firefox/tutorial/ovladani.html">Základní ovládání</a></li>
		<li><a href="http://www.czilla.cz/podpora/firefox/tutorial/rozsireni.html">Rozšíření</a></li>
		<li><a href="http://www.czilla.cz/podpora/firefox/tutorial/historie.html">Procházení historií</a></li>
		<li><a href="http://www.czilla.cz/podpora/firefox/tutorial/zalozky.html">Záložky</a></li>
		<li><a href="http://www.czilla.cz/podpora/firefox/tutorial/stahovani-souboru.html">Stahování souborů</a></li>
		<li><a href="http://www.czilla.cz/podpora/firefox/tutorial/tisk-stranek.html">Tisk stránek</a></li>
	</ol>

	<h3>Rychlé ovládání</h3>

	<p>Poznejte, jak efektivně ovládat Firefox pomocí klávesnice a&nbsp;myši:</p>

	<dl>
		<dt><a href="/otazky/klavesove-zkratky/">Klávesové zkratky</a></dt>
		<dd>Přehled nejběžnějších klávesových zkratek ve Firefoxu
		a&nbsp;porovnání s&nbsp;ekvivalenty v&nbsp;Internet Exploreru.</dd>

		<dt><a href="/otazky/ovladani-mysi/">Ovládání myší</a></dt>
		<dd>Nejčastěji používané funkce, které lze v&nbsp;prohlížeči Mozilla
		Firefox ovládat myší, a&nbsp;jejich ekvivalenty v&nbsp;Internet Exploreru.</dd>
	</dl>

</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $web_name; ?></a> &gt;
		<strong>Jak přejít?</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
