<?php
	require_once '../../inc/page.php';
	$page->setTitle('Ohlasy médií dostupné přes RSS');
	$page->setHeadline('Ohlasy médií dostupné přes RSS', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/ohlasy-medii-dostupne-pres-rss/">Ohlasy médií dostupné přes RSS</a></h3>

	<div>Sekci <a href="/media/">Ohlasy médií</a> (dříve sekce <a href="/media/">Z tisku</a>), ve které odkazujeme na zajímavé články týkající se produktů Mozilla.org, nyní můžete <a href="/rss/">sledovat i přes <abbr title="Really Simple Syndication" lang="en">RSS</abbr></a>. Pokud objevíte článek, který neodkazujeme, pošlete tip <a href="/czilla/lide.html#kdo-je-LP">Lukáši Petrovickému</a>. Sledovat můžete <a href="/rss/media/">společný kanál</a>, nebo specializované kanály <a href="/rss/media/firefox/">Firefox</a>, <a href="/rss/media/thunderbird/">Thunderbird</a>, <a href="/rss/media/mozilla/">Mozilla</a> a <a href="/rss/">další</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/22/">22. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/czilla/">CZilla</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/02/22/">Ze stejného dne</a></dd>
				<dd><a href="../2005/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

