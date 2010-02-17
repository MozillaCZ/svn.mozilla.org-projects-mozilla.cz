<?php
	require_once '../../inc/page.php';
	$page->setTitle('Změňte si ikony');
	$page->setHeadline('Změňte si ikony', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/zmente-si-ikony/">Změňte si ikony</a></h3>

	<div>Chcete změnit ikony jednotlivých oken Mozilly? Není nic snazšího než upravit soubory v adresáři <tt>chrome/icons/default/</tt>.  Scháníte již připravené sady ikon? Od toho je tu projekt <a href="http://iconpacks.mozdev.org/">Mozilla Icon Packs</a> (instalujte balíček ikon jedním kliknutím :-). Pozn.: bohužel jen pro OS Windows :-(</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/06/10/">10. 6. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/06/10/">Ze stejného dne</a></dd>
				<dd><a href="../2003/06/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

