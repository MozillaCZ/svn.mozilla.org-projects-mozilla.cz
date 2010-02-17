<?php
	require_once '../../inc/page.php';
	$page->setTitle('Obrázky proti phishingu');
	$page->setHeadline('Obrázky proti phishingu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/obrazky-proti-phishingu/">Obrázky proti phishingu</a></h3>

	<div>Na univerzitě v Berkley přišli s <a href="http://www.sims.berkeley.edu/~rachna/papers/securityskins.pdf" title="The Battle Against Phishing: Dynamic Security Skins" hreflang="en">nápadem na rozšíření pro Firefox</a> (PDF, 812&nbsp;kB), které efektivně zabraňuje phishingu. <a href="http://it.slashdot.org/it/05/05/26/1725228.shtml?tid=172" title="Slashdot | Security Skins: Single Sign-On with Images" hreflang="en">Podle Slashdotu</a> stačí uživateli k bezpečnému přihlášení na libovolné množství webů, aby si zapamatoval jedno heslo a obrázek. Jako alternativu k bezpečnostním certifikátům pak práce navrhuje &quot;vizuální hash&quot; &ndash; uživatel bude pravost ověřovat porovnáváním obrázků, což je podstatně srozumitelnější.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/27/">27. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/05/27/">Ze stejného dne</a></dd>
				<dd><a href="../2005/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
