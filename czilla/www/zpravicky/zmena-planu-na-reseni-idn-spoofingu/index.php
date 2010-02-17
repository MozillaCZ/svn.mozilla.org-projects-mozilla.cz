<?php
	require_once '../../inc/page.php';
	$page->setTitle('Změna plánů na řešení IDN spoofingu');
	$page->setHeadline('Změna plánů na řešení IDN spoofingu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/zmena-planu-na-reseni-idn-spoofingu/">Změna plánů na řešení IDN spoofingu</a></h3>

	<div>Plány <a href="http://www.mozilla.org/" title="The Mozilla Foundation" hreflang="en">Mozilla.org</a> na dočasné řešení problémů s <abbr title="International Domain Names" lang="en">IDN</abbr> spoofingem se změnily - místo úplného vypnutí podpory <abbr title="International Domain Names" lang="en">IDN</abbr> se <a href="http://weblogs.mozillazine.org/gerv/archives/007586.html" title="Hacking for Christ: New Short-Term Patch For IDN-based Spoofing" hreflang="en">domény budou zobrazovat v rozkódované podobě</a>, v tzv. <em><abbr title="ASCII Compatible Encoding" lang="en">ACE</abbr> tvaru</em> (trochu nepřesně též <em>punycode</em>). Podrobnosti najdete v <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=282270" title="Bug 282270 - Display IDN urls as punycode by default (pref controlled)" hreflang="en">příslušném bugu</a>, o <abbr title="ASCII Compatible Encoding" lang="en">ACE</abbr> a <abbr title="International Domain Names" lang="en">IDN</abbr> se dovíte více třeba v <a href="http://www.lupa.cz/clanky/jak-funguji-hacky-a-carky-v-domenach/" title="LUPA: Jak fungují háčky a čárky v doménách?">článku Jiřího Peterky</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/18/">18. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/02/18/">Ze stejného dne</a></dd>
				<dd><a href="../2005/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

