<?php
	require_once '../../inc/page.php';
	$page->setTitle('Tipy pro link prefetching');
	$page->setHeadline('Tipy pro link prefetching', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/tipy-pro-link-prefetching/">Tipy pro link prefetching</a></h3>

	<div>Co to je <em>link prefetching</em> a jak na straně serveru pomoci <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> a <a href="http://webaccelerator.google.com/" hreflang="en" title="Google Web Accelerator Download">Google Web Acceleratoru</a>, které ho využívají pro zrychlení načítání stránek, se dovíte v <a href="http://www.edochan.com/programming/pf.htm" hreflang="en" title="Prefetching Hints - Helping Firefox and Google speed up your site">článku od Edmunda Edgara</a>. Užitečným doplňkem článku je i <a href="http://www.edochan.com/programming/parsehints.pl.txt" hreflang="en">perlový skript</a>, který podle logů Apache vybere stránky, které je vhodné prefetchovat. Zájemci o podrobnosti k tématu si mohou také přečíst <a href="http://www.mozilla.org/projects/netlib/Link_Prefetching_FAQ.html" hreflang="en" title="Link Prefetching FAQ">Link Prefetching FAQ</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/01/10/">10. 1. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/01/10/">Ze stejného dne</a></dd>
				<dd><a href="../2006/01/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

