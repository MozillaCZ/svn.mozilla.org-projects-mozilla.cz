<?php
	$rootPath = '../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = ' Povolení práce se systémovou schránkou v HTML editoru';
	$page->headline = array('Povolení práce se systémovou schránkou v HTML editoru','');
	$page->addCss($rootPath . 'css/jedit.css');

	$page->includeHeader();
?>

<p><a href="/produkty/firefox">Mozilla Firefox</a> a&nbsp;<a
href="/produkty/suite/">Mozilla Suite</a> od verze 1.3b umožňují vytvoření vizuálního
<abbr title="Hypertext Markup Language" lang="en">HTML</abbr>
editoru označovaného jako
<a href="http://www.mozilla.org/editor/midas-spec.html"
	hreflang="en" lang="en">Midas</a>
ovládaného pomocí JavaScriptu. Z&nbsp;bezpečnostních důvodů je v&nbsp;tomto
editoru JavaScriptu zakázána práce se systémovou schránkou neboli operace
kopírovat, vyjmout a&nbsp;vložit. Tyto operace je možné důvěryhodným
serverům povolit &ndash; buďto pomocí rozšíření
<a href="http://allowclipboard.foxinux.cz/">AllowClipboard</a>,
nebo ruční
<a href="/podpora/firefox/konfigurace.html">editací konfiguračního souboru</a>.</p>

<div id="navigation">
	<a href="#pomoci-allowclipboard">Pomocí AllowClipboard</a> &middot;
	<a href="#rucni-editaci">Ruční editace</a> &middot;
	<a href="#vysvetleni">Vysvětlení předvoleb</a>
</div>

<h2 class="nice" id="pomoci-allowclipboard">Nastavení pomocí rozšíření AllowClipboard</h2>

<p>Toto užitečné rozšíření, které mimochodem
<a href="http://allowclipboard.foxinus.cz/">pochází</a>
z&nbsp;rukou českého autora Petra Šimka, je určeno pro Mozilla
Firefox i Mozilla Suite 1.7. Po nainstalování
<a href="http://allowclipboard.foxinus.cz/allowclipboardhelper-0.5.3.xpi">rozšíření</a>
(pokud se po klepnutí na odkaz neobjeví dialog instalace rozšíření, bude
nutné povolit instalaci rozšíření ze serveru czilla.cz) a&nbsp;restartování
prohlížeče vyberte v&nbsp;menu <span class="nabidka">Nástroje</span> položku
<span class="nabidka">AllowClipboard&nbsp;Pomocník</span>.
Do pole "Adresa serveru" zadejte server, jemuž chcete práci se schránkou
povolit, a&nbsp;klikněte na Povolit.</p>

<div class="img-center"><img
	src="images/allowclipboard.png"
	title="Rozšíření má jednoduché uživatelské rozhranní"
	alt="Dialog rozšíření s textovým polem Adresa serveru"
	height="400" width="300" />
</div>

<p>Nová verze rozšíření navíc pod každým editačním prvkem na serverech s nepovolenou prací se schránkou zobrazuje odkaz na její povolení.</p>

<div class="img-center"><img
	src="images/allowclipboard-1.png"
	title="Odkaz na povolení práce se chránkou je zobrazen jen na serverech s nepovolenou prací se schránkou"
	alt="Záložka na povolení práce se chránkou pod editačním prvkem"
	height="346" width="599" />
</div>

<h2 class="nice" id="rucni-editaci">Ruční editace konfiguračního souboru</h2>

<p>Do souboru
<a href="/podpora/firefox/konfigurace.html#user">user.js</a>
je nutné přidat následující předvolby (zaměňte "http://www.mozilla.org" za
server, jemuž chcete práci se schránkou povolit):</p>

<pre class="codearea"><span class="syntax6">user_pref</span>(<span class="syntax13">&quot;</span><span class="syntax13">capability.policy.policynames</span><span class="syntax13">&quot;</span><span class="syntax18">,</span> <span class="syntax13">&quot;</span><span class="syntax13">allowclipboard</span><span class="syntax13">&quot;</span>)<span class="syntax18">;</span>
<span class="syntax6">user_pref</span>(<span class="syntax13">&quot;</span><span class="syntax13">capability.policy.allowclipboard.sites</span><span class="syntax13">&quot;</span><span class="syntax18">,</span> <span class="syntax13">&quot;</span><span class="syntax13">http://www.mozilla.org</span><span class="syntax13">&quot;</span>)<span class="syntax18">;</span>
<span class="syntax6">user_pref</span>(<span class="syntax13">&quot;</span><span class="syntax13">capability.policy.allowclipboard.Clipboard.cutcopy</span><span class="syntax13">&quot;</span><span class="syntax18">,</span> <span class="syntax13">&quot;</span><span class="syntax13">allAccess</span><span class="syntax13">&quot;</span>)<span class="syntax18">;</span>
<span class="syntax6">user_pref</span>(<span class="syntax13">&quot;</span><span class="syntax13">capability.policy.allowclipboard.Clipboard.paste</span><span class="syntax13">&quot;</span><span class="syntax18">,</span> <span class="syntax13">&quot;</span><span class="syntax13">allAccess</span><span class="syntax13">&quot;</span>)<span class="syntax18">;</span></pre>

<p>Je tu i&nbsp;možnost nastavit tyto předvolby pomocí about:config, ale protože se
jedná o poměrně citlivé předvolby, jejich hodnoty v&nbsp;about:config nebudou
zobrazeny (pro zvídavé viz
<a href="http://lxr.mozilla.org/seamonkey/source/toolkit/components/viewconfig/content/config.js#331"
	hreflang="en">zdrojový kód</a>).</p>

<h2 class="nice" id="vysvetleni">Vysvětlení jednotlivých předvoleb</h2>

<dl>
	<dt>capability.policy.policynames</dt>

	<dd>Seznam bezpečnostních zásad, oddělených mezerami. V&nbsp;našem
	případě je nutná pouze jedna bezpečnostní zásada, pojmenovaná
	allowclipboard. Jméno není podstatné a&nbsp;lze jej zvolit libovolně.
	Typ předvolby je řetězec.</dd>

	<dt>capability.policy.allowclipboard.sites</dt>

	<dd>Udává servery, pro které platí zásada pojmenovaná "allowclipboard".
	Tedy například pro povolení schránky při psaní emailu
	v&nbsp;<abbr title="Hypertext Markup Language" lang="en">HTML</abbr>
	editoru na <a href="http://www.centrum.cz/">Centrum.cz</a> jeho obsah
	nastavit na "centrum.cz". V&nbsp;této předvolbě lze zadat serverů
	i&nbsp;víc, například "centrum.cz seznam.cz". Typ předvolby je řetězec.</dd>

	<dt>capability.policy.allowclipboard.Clipboard.cutcopy
	<br />capability.policy.allowclipboard.Clipboard.paste</dt>

	<dd>Povoluje práci se schránkou pro servery v&nbsp;této zásadě. Typ obou
	předvoleb je Boolean.</dd>
</dl>

<hr />
<p><small>26. 6. 2005,
	<a href="/czilla/lide.html#kdo-je-JM">Jan Matoušek</a></small></p>

<?php
	$page->includeFooter();
?>
