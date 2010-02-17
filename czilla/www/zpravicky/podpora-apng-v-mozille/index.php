<?php
	require_once '../../inc/page.php';
	$page->setTitle('Podpora APNG v Mozille');
	$page->setHeadline('Podpora APNG v Mozille', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/podpora-apng-v-mozille/">Podpora APNG v Mozille</a></h3>

	<div>Do vývojové větve Mozilly byla přidána podpora pro <abbr title="Animated Portable Network Graphics">APNG</abbr>, což je grafický formát rozšířující formát <abbr title="Portable Network Graphics" lang="en">PNG</abbr> o podporu animací, podobně jako to zvládá formát <abbr title="Graphics Interchange Format" lang="en">GIF</abbr>, a to včetně  zachování zpětné kompatibility s neanimovanými <abbr title="Portable Network Graphics" lang="en">PNG</abbr> soubory. Tento formát byl v roce 2004 <a href="http://wiki.mozilla.org/APNG_Specification" hreflang="en">navržen vývojáři Mozilly</a> Stuartem Parmenterem a Vladimirem Vukicevicem a v současnosti je v rámci <abbr title="Portable Network Graphics" lang="en">PNG</abbr> skupiny dokončována jeho standardizace. Andrew Smith, který jej do Mozilly implementoval, přidal jeho podporu i <a href="http://littlesvr.ca/apng/">do knihovny libpng</a>, takže ho mohou snadno začít používat i ostatní aplikace.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/03/21/">21. 3. 07</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dd><a href="/zpravicky/s/vyvojari/">Vývojáři</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2007/03/21/">Ze stejného dne</a></dd>
				<dd><a href="../2007/03/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

