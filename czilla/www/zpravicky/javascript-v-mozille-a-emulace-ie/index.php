<?php
	require_once '../../inc/page.php';
	$page->setTitle('JavaScript v Mozille a emulace IE');
	$page->setHeadline('JavaScript v Mozille a emulace IE', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/javascript-v-mozille-a-emulace-ie/">JavaScript v Mozille a emulace IE</a></h3>

	<div>To, že uživatelé Mozilly mají občas problémy s některými Weby, asi každý ví. To, že ne každý webdesigner je ochoten (či umí) psát JavaScripty dle <a href="/vyvojari/web/webove-standardy.html">standardů</a>, je bohužel pravda. Odpoveď na otázku "Co s tím?" je těžká. Každopádně webmasterům, kteří sice nemají čas předělávat své skripty, ale přesto chtějí, aby fungovaly i pod Mozillou, můžeme doporučit návštěvu stránky <a href="http://webfx.eae.net/dhtml/ieemu/">IE Emu for Moz</a>, odkud mohou stáhnout <a href="http://webfx.eae.net/dhtml/ieemu/ieemu.js">skript</a>, který umožní Mozille emulovat nejčastější nepodporované konstrukce např. <tt>document.all</tt>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/08/14/">14. 8. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/internet-explorer/">Internet Explorer</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/08/14/">Ze stejného dne</a></dd>
				<dd><a href="../2003/08/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

