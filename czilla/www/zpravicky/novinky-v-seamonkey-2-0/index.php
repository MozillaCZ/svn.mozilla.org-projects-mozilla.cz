<?php
	require_once '../../inc/page.php';
	$page->setTitle('Novinky v SeaMonkey 2.0');
	$page->setHeadline('Novinky v SeaMonkey 2.0', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/novinky-v-seamonkey-2-0/">Novinky v SeaMonkey 2.0</a></h3>

	<div>Dnešním dnem dosáhl vývoj balíku aplikací <a href="/produkty/seamonkey/" title="SeaMonkey: Stránka o produktu">SeaMonkey</a> významného milníku. Po téměř <a href="http://home.kairo.at/blog/2007-05/working_on_seamonkey_2_0" hreflang="en" title="Home of KaiRo: Working on SeaMonkey 2.0">půldruhém roce vývoje</a> oznámili vývojáři <a href="http://home.kairo.at/blog/2007-05/toolkit_is_so_suite" hreflang="en" title="Home of KaiRo: Toolkit is so... suite ;-)">úspěšné splnění</a> jednoho z hlavních úkolů: <a href="http://wiki.mozilla.org/SeaMonkey:Toolkit_Transition" hreflang="en" title="SeaMonkey:Toolkit Transition">přechod na nový Toolkit</a>. XUL Toolkit je <a href="http://developer.mozilla.org/en/docs/Toolkit_API" hreflang="en">sdílený kód</a> pro různé aplikace založené na jádře <a href="http://www.mozilla.org/newlayout/" title="Gecko - vykreslovací jádro Mozilly" hreflang="en">Gecko</a> a díky jeho využití bude <a href="http://wiki.mozilla.org/SeaMonkey:New_for_2.0" hreflang="en" title="SeaMonkey:New for 2.0">v nové SeaMonkey</a> dlouho očekávaný Správce doplňků, automatická aktualizace a další novinky známé z <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> či <a href="/produkty/thunderbird/" title="Thunderbird: Stránka o produktu">Thunderbirdu</a>.

<br />Tato modifikovaná verze SeaMonkey existovala již delší dobu pod kódovým označením <a href="http://wiki.mozilla.org/SeaMonkey:suiterunner" hreflang="en">suiterunner</a> a od <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=328887#c16" hreflang="en" title="Bugzilla: Turn on the MOZ_XUL_APP flag for SeaMonkey">této chvíle</a> jsou <a href="http://jasnapaka.bloguje.cz/354532-suiterunner.php" title="JasnaPaka: SuiteRunner">dlouho připravované změny</a> součástí hlavní vývojové větve. Nahrazení <a href="http://www.mozilla.org/xpfe/" hreflang="en" title="XPToolkit: Cross-Platform UI Toolkit">XPFE</a> zděděným po původní Mozilla Suite novým Toolkitem a s tím související novinky jsou natolik významná změna, že vývojáři rozhodli o změně čísla verze - chystaná SeaMonkey tedy bude mít označení 2.0.</div>
	<div class="ft">
		<a href="/zpravicky/a/mik/">Michal Kec</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/05/29/">29. 5. 07</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/seamonkey/">SeaMonkey</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2007/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

