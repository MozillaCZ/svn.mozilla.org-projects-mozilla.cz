<?php
	require_once '../../inc/page.php';
	$page->setTitle('Novinky ve vývojové větvi Firefoxu');
	$page->setHeadline('Novinky ve vývojové větvi Firefoxu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/novinky-ve-vyvojove-vetvi-firefoxu/">Novinky ve vývojové větvi Firefoxu</a></h3>

	<div>Do vývojové verze <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> bylo v posledních dnech začleněno několik zajímavých novinek: upravené prohlížení v panelech (včetně přesunu zavíracího tlačítka přímo na panel), odstranění položek menu souvisejících s e-mailem a možnost ladění memory leaks (chyb, kdy prohlížeč zapomíná uvolnit zabranou paměť). Podrobnosti a odkazy na další informace o těchto úpravách <a href="http://jasnapaka.bloguje.cz/261872-novinky-ve-vyvoji-firefoxu.html" title="JasnaPaka Blog - Novinky ve vývoji Firefoxu">najdete u Pavla Cvrčka</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/01/22/">22. 1. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/01/22/">Ze stejného dne</a></dd>
				<dd><a href="../2006/01/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

