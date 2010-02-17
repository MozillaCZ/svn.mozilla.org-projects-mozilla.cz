<?php
	require_once '../../inc/page.php';
	$page->setTitle('Bugxula');
	$page->setHeadline('Bugxula', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/bugxula/">Bugxula</a></h3>

	<div>Hledáte často v <a href="http://www.bugzilla.org/">Bugzille</a>? Zkuste <a href="http://bugxula.mozdev.org/">Bugxulu</a> - rozšíření Mozilly pro hledání v Bugzille. Pokud chcete používat Bugxulu s vaší Bugzillou, přečtěte si jednoduchý návod '<a href="http://bugxula.mozdev.org/server.html">Server-Side How To</a>'. (Pozn.: <a href="http://bugzilla.czilla.cz/">bugzilla.czilla.cz</a> již lze Bugxulou prohledávat :-)</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/06/02/">2. 6. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bugzilla/">Bugzilla</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/06/02/">Ze stejného dne</a></dd>
				<dd><a href="../2003/06/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

