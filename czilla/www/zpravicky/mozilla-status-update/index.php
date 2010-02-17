<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla status update');
	$page->setHeadline('Mozilla status update', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/mozilla-status-update/">Mozilla status update</a></h3>

	<div>Co nového se minulý týden odehrálo ve vývoji Mozilly přináší poslední <a href="http://www.mozilla.org/status/2003-07-11.html">status update</a>. Mimo jiné se dozvíte, že animované obrázky půjdou zastavit klávesou ESC (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=70030">bug #70030</a>).</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/07/14/">14. 7. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Další zprávičky:</dt>
				<dd><a href="../2003/07/14/">Ze stejného dne</a></dd>
				<dd><a href="../2003/07/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

