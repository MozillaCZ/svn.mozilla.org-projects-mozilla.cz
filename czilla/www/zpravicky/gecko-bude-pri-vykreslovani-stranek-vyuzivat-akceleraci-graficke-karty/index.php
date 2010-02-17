<?php
	require_once '../../inc/page.php';
	$page->setTitle('Gecko bude při vykreslování stránek využívat akceleraci grafické karty');
	$page->setHeadline('Gecko bude při vykreslování stránek využívat akceleraci grafické karty', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/gecko-bude-pri-vykreslovani-stranek-vyuzivat-akceleraci-graficke-karty/">Gecko bude při vykreslování stránek využívat akceleraci grafické karty</a></h3>

	<div><a href="http://weblogs.mozillazine.org/roc/" title="Well, I'm Back" hreflang="en">Robert O'Callahan</a> ve svém blogu <a href="http://weblogs.mozillazine.org/roc/archives/2005/04/glimpse_of_the.html" title="Well, I'm Back: Glimpse Of The Future" hreflang="en">píše o velkém přepracování grafického subsystému Gecka</a> ve verzi 1.9, na kterém pracuje spolu s <a href="http://www.vlad1.com:8080/~vladimir/blog/" hreflang="en">Vladimirem Vukićevićem</a> a <a href="http://www.pavlov.net/blog/" title="Evil Thoughts" hreflang="en">Stuartem Parmenterem</a>. Veškeré vykreslování by mělo probíhat přes knihovnu <a href="http://cairographics.org/" hreflang="en">Cairo</a>, která umožňuje využít akceleraci grafické karty k urychlení renderingu. Dalšími pozitivy jejího využití bude lepší integrace mezi <abbr title="HyperText Markup Language" lang="en">HTML</abbr> a <abbr title="Scalable Vector Graphics" lang="en">SVG</abbr>, vylepšení tisku a možnost snadno dopsat kód pro vykreslení stránky třeba do <abbr title="Portable Document Format" lang="en">PDF</abbr> nebo <abbr title="Portable Network Graphics" lang="en">PNG</abbr> souboru.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/23/">23. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/04/23/">Ze stejného dne</a></dd>
				<dd><a href="../2005/04/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

