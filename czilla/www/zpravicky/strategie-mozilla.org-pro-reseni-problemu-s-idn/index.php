<?php
	require_once '../../inc/page.php';
	$page->setTitle('Strategie Mozilla.org pro řešení problémů s IDN');
	$page->setHeadline('Strategie Mozilla.org pro řešení problémů s IDN', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/strategie-mozilla.org-pro-reseni-problemu-s-idn/">Strategie Mozilla.org pro řešení problémů s IDN</a></h3>

	<div><a href="http://www.mozilla.org/" title="The Mozilla Foundation" hreflang="en">Mozilla.org</a> oznámila, jak se chce vypořádat s problémy okolo <abbr title="International Domain Names">IDN</abbr>. Zastává názor, že ač problémy způsobují především registrátoři domén, je i na tvůrcích prohlížečů, aby ochránili uživatele před možným spoofingem. Krátkodobé řešení (pro <a href="/produkty/firefox/">Firefox</a> 1.0.1 a <a href="/produkty/suite/">Mozilla Suite</a> 1.7.6/1.8 Beta) je defaultní vypnutí podpory <abbr title="International Domain Names">IDN</abbr> a možnost instalace rozšíření, které ji zapne zpět. Dlouhodobé řešení je stále otevřené, jedna z uvažovaných možností je blacklisting/whitelisting <abbr title="International Domain Names">IDN</abbr> domén. Blíže viz <a href="http://weblogs.mozillazine.org/gerv/archives/007556.html" title="IDN Spoofing Strategy" hreflang="en">příspěvek</a> a <a href="http://weblogs.mozillazine.org/gerv/archives/007562.html" title="IDN Policy Clarifications" hreflang="en">následné vyjasnění</a> od <a href="http://weblogs.mozillazine.org/gerv/" title="hacking for Christ" hreflang="en">Gervase Markhama</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/16/">16. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/02/16/">Ze stejného dne</a></dd>
				<dd><a href="../2005/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

