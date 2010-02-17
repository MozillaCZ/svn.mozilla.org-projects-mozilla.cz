<?php
	require_once '../../inc/page.php';
	$page->setTitle('Doprava či doleva?');
	$page->setHeadline('Doprava či doleva?', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/doprava-ci-doleva/">Doprava či doleva?</a></h3>

	<div>Ne, tohle nemá být politická otázka. Pokud jste si na Mozillu či Mozilla Firefox zvykli a chcete se na ně podívat z trochu jiného úhlu, zkuste v Mozille (či Firefoxu) nastavit "<tt>bidi.direction</tt>" na 2 (např. přes <tt>about:config</tt>) a restartujte prohlížeč. Až vás to přestane bavit, vraťte "<tt>bidi.direction</tt>" zpět na výchozí hodnotu 1. Hodí se to i v případě, když váš kolega právě opustil počítač, na chvíli odešel, a vy mu chcete ochoťně pomoci s tréninkem na internetové kavárny v asijských zemích ;-)</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/05/03/">3. 5. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/05/03/">Ze stejného dne</a></dd>
				<dd><a href="../2004/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

