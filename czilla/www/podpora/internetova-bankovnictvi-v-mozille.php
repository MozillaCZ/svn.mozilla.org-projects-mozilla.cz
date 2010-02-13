<?php
	$rootPath = '../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Internetová bankovnictví v Mozille';
	$page->headline = array('Internetová bankovnictví v Mozille','Přehled funkčních a nefunkčních internetových bankovnictví');

	$page->includeHeader();
?>

<p>Internetové bankovnictví (<span lang="en">internet banking</span>)
zaznamenává v&nbsp;poslední době velký rozmach.
Je to vcelku pochopitelné. Klient banky nemusí kvůli zadání platebního
příkazu do banky, ale může vše udělat přímo z&nbsp;domova či práce. Ušetří
tak čas a&nbsp;&quot;čas jsou peníze&quot;.</p>

<p>K&nbsp;přístupu do banky potřebujete přístup na Internet a&nbsp;webový
prohlížeč, který vám kontakt s&nbsp;bankou zprostředkuje. Webové prohlížeče
<a href="/produkty/suite/"
	title="Mozilla Suite: Stránka o&nbsp;produktu">Mozilla Suite</a>
i&nbsp;<a href="/produkty/firefox/"
	title="Mozilla Firefox: Stránka o&nbsp;produktu">Mozilla Firefox</a>
obsahují vše potřebné, co je k&nbsp;přístupu potřeba (podpora bezpečného
spojení, certifikátů apod.).</p>

<p>Bohužel ne u&nbsp;všech bank s&nbsp;těmito prohlížeči uspějete. Příčina
problému není na straně prohlížečů, jak by se mohlo na první pohled zdát,
ale na straně bankovnictví, které bylo vytvořeno tak, aby podporovalo pouze
prohlížeč Internet Explorer. V&nbsp;poslední době si bankovní ústavy
začínají uvědomovat vzrůstající popularitu prohlížečů Mozilla a&nbsp;situace
se začíná postupně zlepšovat.</p>

<p>Abychom vám umožnili rychlou orientaci v&nbsp;bankovnictvích, které lze
s&nbsp;prohlížečích Mozilla provozovat, připravili jsme pro vás následující
přehled. Ten může rychle zastarat, a&nbsp;proto od vás
<a href="mailto:info@czilla.cz?subject=Bankovnictvi-v-Mozille">uvítáme informace o&nbsp;změnách</a>,
které ve funkčnosti/nefunkčnosti nastanou.</p>

<h2>Funkční bankovnictví</h2>

<div class="tbl-1">
<table border="1">
<thead>
<tr>
	<th>Banka</th>
	<th>Bankovnictví</th>
	<th><abbr title="Uniform Resource Locator" lang="en">URL</abbr></th>
</tr>
</thead>
<tbody>
<tr>
	<td colspan="2"><strong>Bawag Bank</strong> <sup><small><a href="#pozn-bawag-bank">1</a></small></sup></td>
	<td><a href="http://www.bawag.cz/"
			title="Bawag Bank: Domovská stránka">http://www.bawag.cz</a></td>
</tr>
<tr>
	<td colspan="2"><strong>Citibank</strong></td>
	<td><a href="http://www.citibank.com/czech/"
		title="Citibank: Domovská stránka">http://www.citibank.com/czech</a></td>
</tr>
<tr>
	<td><strong>Česká spořitelna</strong></td>
	<td>Servis 24 <sup><small><a href="#pozn-ceska-sporitelna">2</a></small></sup></td>
	<td><a href="https://www.servis24.cz/"
			title="Servis 24: Domovská stránka">https://www.servis24.cz</a></td>
</tr>
<tr>
	<td><strong><abbr title="Československá obchodní banka" lang="cs">ČSOB</abbr></strong></td>
	<td>Homebanking 24</td>
	<td><a href="https://pb.csob.cz/"
		title="ČSOB Homebanking 24: Domovská stránka">https://pb.csob.cz</a></td>
</tr>
<tr>
	<td><strong><abbr title="Československá obchodní banka" lang="cs">ČSOB</abbr></strong></td>
	<td>Internetbanking 24</td>
	<td><a href="https://ib24.csob.cz/"
		title="ČSOB Internetbanking 24: Domovská stránka">https://ib24.csob.cz</a></td>
</tr>
<tr>
	<td><strong>eBanka</strong></td>
	<td>eBanka</td>
	<td><a href="http://www.ebanka.cz/"
		title="eBanka: Domovská stránka">http://www.ebanka.cz</a></td>
</tr>
<tr>
	<td><strong>eBanka</strong></td>
	<td>Banka.Seznam.cz</td>
	<td><a href="http://banka.seznam.cz/"
		title="Banka.Seznam.cz: Domovská stránka">http://banka.seznam.cz</a></td>
</tr>
<tr>
	<td colspan="2"><strong>Fio záložna</strong></td>
	<td><a href="http://www.fio-zalozna.cz/"
		title="Fio záložna: Domovská stránka">http://www.fio-zalozna.cz</a></td>
</tr>
<tr>
	<td><strong><abbr title="General Electric" lang="en">GE</abbr> Money Bank</strong></td>
	<td>IB Genius</td>
	<td><a href="http://www.internetbanka.cz/"
		title="GE Money Bank: Domovská stránka">http://genius.internetbanka.cz</a></td>
</tr>
<tr>
	<td><strong><abbr title="General Electric" lang="en">GE</abbr> Money Bank</strong></td>
	<td>Internet Banka</td>
	<td><a href="http://www.internetbanka.cz/"
		title="GE Money Bank: Domovská stránka">http://www.internetbanka.cz</a></td>
</tr>
<tr>
	<td colspan="2"><strong><abbr title="HypoVereinsbank" lang="de">HVB</abbr> Bank</strong></td>
	<td><a href="http://www.hvb.cz/"
		title="HVB: Domovská stránka">http://www.hvb.cz</a></td>
</tr>
<tr>
	<td colspan="2"><strong>ING Bank N.V.</strong></td>
	<td><a href="http://www.ing.cz"
		title="ING: Domovská stránka">http://www.ing.cz</a></td>
</tr>
<tr>
	<td><strong>Komerční banka</strong></td>
	<td>Moje Banka</td>
	<td><a href="http://www.mojebanka.cz/"
		title="Moje Banka: Domovská stránka">http://www.mojebanka.cz</a></td>
</tr>
<tr>
	<td><strong>Poštovní spořitelna</strong></td>
	<td>MAX IB</td>
	<td><a href="https://maxibps.postovnisporitelna.cz/"
		title="Poštovní spořitelna - MAX Internet Banking: Domovská stránka">https://maxibps.postovnisporitelna.cz</a></td>
</tr>
<tr>
	<td colspan="2"><strong>Raiffeisenbank</strong></td>
	<td><a href="http://www.rb.cz/"
		title="Raiffeisenbank: Domovská stránka">http://www.rb.cz</a></td>
</tr>
<tr>
	<td colspan="2"><strong>Volksbank</strong> <sup><small><a href="#pozn-volksbank">3</a></small></sup></td>
	<td><a href="https://www.volksbank.cz/"
		title="Volksbank: Domovská stránka">https://www.volksbank.cz</a></td>
</tr>
<tr>
	<td><strong>Živnostenská banka</strong></td>
	<td>Netbanka</td>
	<td><a href="http://www.netbanka.cz/"
		title="Netbanka: Domovská stránka">http://www.netbanka.cz</a></td>
</tr>
</tbody>
</table>
</div>

<h3>Poznámky</h3>
<ol>
	<li id="pozn-bawag-bank">U Bawag Bank se vyskytuje problém s přesměrováním při detekci prohlížeče. 
  Řešením je uložení následujících odkazů do záložek: 
  <a href="https://www.ibnet.cz/INPAIBS32/ControllerServlet?javaVM=7" 
  title="Bawag: Přihlášení do banky">Přihlášení do banky</a>, 
  <a href="https://www.ibnet.cz:444/INPAWebRA/ControllerServlet?javaVM=7" 
  title="Bawag: Registrační autorita">Registrační autorita</a>.</li>

	<li id="pozn-ceska-sporitelna">Česká spořitelna doporučuje používání Internet Exploreru, ale
	bankovnictví je v prohlížečích Mozilla též funkční.</li>
	
	<li id="pozn-volksbank">První příhlášení do bankovnictví Volksbank je potřeba provést v
	prohlížeči Interenet Explorer.</li>
</ol>

<h2>Nefunkční bankovnictví</h2>

<div class="tbl-1">
<table border="1">
<thead>
<tr>
	<th>Banka</th>
	<th>Bankovnictví</th>
	<th><abbr title="Uniform Resource Locator" lang="en">URL</abbr></th>
</tr>
</thead>
<tbody>
<tr>
	<td><strong><abbr title="Waldviertler Sparkasse" lang="de">WSPK</abbr></strong></td>
	<td>Internetbanking</td>
	<td><a href="http://www.wspk.cz/internetbanking/"
		title="Wspk Internetbanking: Domovská stránka">http://www.wspk.cz/internetbanking</a></td>
</tr>
</tbody>
</table>
</div>


<h2>Odkazy</h2>

<ul>
	<li><a href="http://www.mesec.cz/texty/testy-internetovych-bankovnictvi/"
			title="Měšec.cz: Testy internetových bankovnictví">Testy internetových bankovnictví</a>
		(<a href="http://www.mesec.cz/"
			title="Mesec.cz: Domovská stránka">Měšec.cz</a>)</li>
	<li><a href="http://www.mesec.cz/clanky/internetove-bankovnictvi-banky-nenabizi-vsem/"
			title="Měšec.cz: Internetové bankovnictví banky nenabízí všem">Internetové bankovnictví banky nenabízí všem</a>
		(<a href="http://www.mesec.cz/"
			title="Měšec.cz: Domovská stránka">Měšec.cz</a>)</li>
	<li><a href="http://www.linuxsoft.cz/article_list.php?id_kategory=173"
			title="Linuxsoft.cz: Internetová bankovnictví pod Linuxem">Internetové bankovnictví pod Linuxem</a>
		(<a href="http://www.linuxsoft.cz/">Linuxsoft.cz</a>)</li>
</ul>

<hr />
<p><small>Sepsal: <a href="/czilla/lide.html#kdo-je-PC">Pavel Cvrček</a> (CZilla),
Poslední aktualizace: 5. prosince 2005</small></p>

<?php
	$page->includeFooter();
?>
