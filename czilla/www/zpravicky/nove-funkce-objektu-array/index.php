<?php
	require_once '../../inc/page.php';
	$page->setTitle('Nové funkce objektu Array');
	$page->setHeadline('Nové funkce objektu Array', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/nove-funkce-objektu-array/">Nové funkce objektu Array</a></h3>

	<div>Nejen příznivce programovacího jazyka Lisp jistě potěší, že ve vývojové verzi <a href="http://www.mozilla.org/js/spidermonkey/" title="SpiderMonkey (JavaScript-C) Engine" hreflang="en">JavaScript enginu</a> byly ke standardnímu objektu <code>Array</code> doplněny metody <code>indexOf</code>, <code>lastIndexOf</code>, <code>forEach</code>, <code>map</code>, <code>filer</code>, <code>some</code> a <code>every</code>. JavaScript tak se tak opět o kousek přiblížil funkcionálnímu programovacímu jazyku. Více informací viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=290592" title="Bug 290592 - Array extras: forEach, indexOf, filter, map, some, every" hreflang="en">příslušný bug</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/09/">9. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Další zprávičky:</dt>
				<dd><a href="../2005/05/09/">Ze stejného dne</a></dd>
				<dd><a href="../2005/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

