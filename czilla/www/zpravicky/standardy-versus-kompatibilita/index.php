<?php
	require_once '../../inc/page.php';
	$page->setTitle('Standardy versus kompatibilita');
	$page->setHeadline('Standardy versus kompatibilita', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/standardy-versus-kompatibilita/">Standardy versus kompatibilita</a></h3>

	<div><a href="http://weblogs.mozillazine.org/hyatt/" hreflang="en">Dave Hyatt</a>, bývalý vývojář <a href="http://www.mozilla.org/" hreflang="en">Mozilly</a> (dnes <a href="http://www.apple.com/safari/" hreflang="en">Safari</a>), <a title="Float Nightmares" hreflang="en" href="http://weblogs.mozillazine.org/hyatt/archives/2005_01.html#007252"> píše o obtížích při implementaci plovoucích prvků</a> v <abbr title="HyperText Markup Language" lang="en">HTML</abbr>/<abbr title="Cascading Style Sheets" lang="en">CSS</abbr> v prohlížečích. Spíše než technická stránka věci je důležité zjištění, že i u stránek renderovaných ve <a href="/mozcestnik/?sect=51">standardním módu prohlížeče</a> je dnes nutné brát ohledy na kompatibilitu s existujícím obsahem a občas jednat v rozporu s příslušnou specifikací. Mimochodem, popis nekonzistentního chování Internet Exploreru v této situaci také stojí za přečtení.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/08/">8. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/internet-explorer/">Internet Explorer</a></dd>
				<dd><a href="/zpravicky/s/safari/">Safari</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/01/08/">Ze stejného dne</a></dd>
				<dd><a href="../2005/01/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

