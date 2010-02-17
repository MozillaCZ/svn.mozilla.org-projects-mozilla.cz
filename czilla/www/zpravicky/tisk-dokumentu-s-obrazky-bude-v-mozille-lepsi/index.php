<?php
	require_once '../../inc/page.php';
	$page->setTitle('Tisk dokumentů s obrázky bude v Mozille lepší');
	$page->setHeadline('Tisk dokumentů s obrázky bude v Mozille lepší', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/tisk-dokumentu-s-obrazky-bude-v-mozille-lepsi/">Tisk dokumentů s obrázky bude v Mozille lepší</a></h3>

	<div>Velmi aktivní <a href="http://web.mit.edu/bzbarsky/www/index.shtml">Boris Zbarsky</a> opravil jednu z nepříjemných chyb tisku v Mozille. Pokud obrázek vycházel na rozhraní dvou tištěných stránek, objevil se na obou stránkách chybně celý a ještě se špatným poměrem stran (zmáčknutý). Oprava <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=125276" title="Bugzilla: bug 125276 - Printing causes squished images on second page; replicates images on first page">bugu 125276</a> se objeví v Mozille 1.8a3 a pravděpodobně i ve Firefoxu 1.0 PR.</div>
	<div class="ft">
		<a href="/zpravicky/a/aha/">Adam Hauner</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/08/11/">11. 8. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/08/11/">Ze stejného dne</a></dd>
				<dd><a href="../2004/08/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

