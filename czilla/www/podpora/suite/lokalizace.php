<?php
	require_once '../../inc/page.php';
	$page->setTitle('Otázky lokalizace Mozilla Suite');
	$page->setHeadline('Lokalizace Mozilla Suite','Často kladené otázky lokalizace Mozilla Suite');
	$page->setKeywords('podpora, tipy, triky, nápověda, pomoc, návod, mozilla, firefox, prohlížeč');
	$page->setDescription('Stránka s často kladenými otázky lokalizace balíku internetových aplikací Mozilla Suite');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>


<p>Máte problémy s instalací české lokalizace Mozilly? Níže najdete odpovědi na vaše nejčastější dotazy.</p>

<p><b>Dotaz: Po kliknutí na odkaz k instalaci se neobjevilo dialogové okno pro instalaci programového vybavení</b><br />
Příčiny mohou být dvě. Buď máte vypnuto používání JavaScriptu nebo máte zakázánu instalaci softwaru pomocí Mozilly.
<br />Řešení: Zkontrolujte, zda máte zaškrtnuto 'Edit -&gt; Preferences -&gt; Advanced -&gt; Scripts &amp; Plugins -&gt; Enable JavaScript for Navigator' a 'Edit -&gt; Preferences -&gt; Advanced -&gt; Software Installation -&gt; Enable software installation'.</p>

<p><b>Dotaz: Nefunguje mi po instalaci správně čeština, jsou české pouze
některé nabídky nebo dialogy...</b><br />
Bohužel po instalaci lokalizačního balíčku se tento problém někdy objeví. Zejména pokud nainstalujete do Mozilly nějakou přídavnou aplikaci (addin) po instalaci našeho lokalizačního balíčku. Není to problém našeho balíčku, ale samotné Mozilly.<br />
Řešení:</p>
<ul>
	<li>Obvykle pomůže provést cyklus přepnutí Mozilly do originálního jazyka (angličtiny) a zpět. Tedy nastavte v 'Úpravy -&gt; Předvolby -&gt; Vzhled -&gt; Jazyky/Obsah' v horním okně "English (US)" a v dolním "US Region", restartujte Mozillu, nastavte zpět české nastavení (jak v horním tak dolním okně) a opět restartujte Mozillu.</li>

<li>Pokud to nepomůže, vypněte Mozillu a smažte soubor rychlého spouštění ve vašem <a href="/produkty/suite/poznamky-k-vydani/mozilla1.3/#profileloc">uživatelském profilu</a>. Tento soubor se jmenuje XUL.mfl, XUL.mfasl nebo 'XUL FastLoad File' - záleží na platformě, na které pracujete a lze jej bez jakýchkoliv obav smazat (pokud je Mozilla vypnutá - včetně "rychlého spouštění"). Mozilla si jej při příštím restartu vytvoří znovu (ale již aktualizovaný).</li>
<li>Pokud ani to nepomůže (ale to se nestává), zeptejte se v <a href="http://forum.mozilla.cz/">diskusním fóru</a>. Je možné, že jako poslední pokus nezbyde než odinstalovat Mozillu, vymazat všechny adresáře a soubory, které po ní po odinstalaci zbudou (kromě podadresáře plugins) a nainstalovat Mozillu znova včetně lokalizačních balíčků.</li>
</ul>

<p><b>Dotaz: Instalace mi skončila s oznámením chyby 999, co mám dělat?</b><br />
Tak v tomto případě vás můžeme uklidnit, vše je v naprostém pořádku. Chyba 999 znamená jen, že musíte restartovat Mozillu, aby mohla být instalace dokončena. Zatím se to oznamuje jako chyba, což je trochu nešťastné a pro někoho matoucí. Pracuje se na odstranění - do budoucna by se neměla objevovat chyba 999, ale výzva k restartu Mozilly.</p>

<p><b>Dotaz: Při instalaci lokalizace do češtiny se mi objeví oznámení o chybě -201, co to znamená?</b><br />
Toto se stává u novějších verzí Mozilly na operačním systému Windows, pokud se snažíte nainstalovat češtinu do Mozilly, ve které již čeština nainstalována je - stávající lokalizační soubory jsou totiž používány a Mozilla vám je nedovolí přepsat. Pokud chcete takovou instalaci provést, je nutné přepnout Mozillu do jiného jazyka (angličtiny) - tedy nastavte v 'Úpravy -&gt; Předvolby -&gt; Vzhled -&gt; Jazyky/Obsah' v horním okně "English (US)" a v dolním "US Region" a pro jistotu Mozillu restartujte. Nyní by měla jít stará lokalizace přepsat tou novou.
</p>

<p><b>Dotaz: Proč není počeštěna i nápověda? Bude někdy?</b><br />
Počeštěná nápověda je jistě velmi vhodná, i když většina uživatelů asi ani neví, že prohlížeč nějakou nápovědu má...<br />Na překladu nápovědy se <a href="/podpora/suite/">pracuje</a>.</p>

<p><b>Dotaz: Je někde seznam chybových kódů instalačního programu Mozilly?</b><br />
Mozilla používá ke své instalaci a k instalaci svých rozšíření (tedy mimo jiné i lokalizace, ale třeba i všech rozšíření (extensions) rozhraní <a href="http://www.xulplanet.com/references/xpcomref/group_XPInstall.html">XPInstall</a>. Přehled <a href="http://multizilla.mozdev.org/xpi/return-codes.html">chybových kódů spolu s popisem</a>.
</p>

<p><b>Dotaz: Během instalace Mozilly v Linuxu se mi v instalátoru nezobrazuje písmo</b><br />
Pravděpodobně používáte distribuci, která využívá jako své základní kódování UTF-8 (RedHat 8, 9, Fedora Core 1), se kterým instalátor neumí pracovat. Řešením je přepnout pro instalaci prostředí do kódování ISO-8859-2, se kterým instalátor funguje v pořádku. Pro přepnutí do ISO-8859-2 lze použít toto volání instalátoru (předpokládáme, že se nacházíte v adresáři, kde je instalátor uložen):</p>
<pre>LANG=cs_CZ ./mozilla-installer</pre>
<p>Při vlastním běhu již nainstalované Mozilly by se mělo vše zobrazovat správně a není potřeba ji spouštět tímto stylem.</p>

<?php
	$page->includeTemplate('footer');
?>
