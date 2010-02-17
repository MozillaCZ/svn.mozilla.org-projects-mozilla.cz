<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozedit');
	$page->setHeadline('Mozedit', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/mozedit/">Mozedit</a></h3>

	<div><a href="http://mozedit.mozdev.org/">Mozedit</a> je jednoduchý textový editor pro Mozilla Firebird šikovný nejen pro editaci HTML. Verze 0.1.1-preview je už docela použitelná - <a href="http://mozedit.mozdev.org/screenshots.html">screeshoty</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/10/10/">10. 10. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/10/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
