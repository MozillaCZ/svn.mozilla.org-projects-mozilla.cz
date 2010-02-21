<?php
	require_once './inc/page.php';
	$page->setTitle('Projekt CZilla');
	$page->setHeadline('Projekt CZilla','Podpora a propagace Mozilly');
	$page->setDescription ('Stránky projektu CZilla zabývající se podporou a propagací projektu Mozilla');
	$page->setKeywords ('mozilla, firefox, prohlížeč, thunderbird, gecko, suite, poštovní klient, e-mail, email, editor, nvu, chatzilla');
	$page->includeTemplate('header');

	define("NEWS_HOMEPAGE_FULL", 4);
	define("NEWS_HOMEPAGE_TOTAL", 8);
	define('RSS_HEADER_LENGTH', 60);
?>
<div class="in-prod">
<div class="in-prod-one">
	<div class="in-prod-desc">
		<h3><a href="/produkty/firefox/">Mozilla Firefox</a></h3>
		<a href="/produkty/firefox/"><img src="/img/logo-ff.png" width="60" height="60" alt="" /></a>
		<p>Tento prohlížeč nové generace vás překvapí svou rychlostí a množstvím funkcí.</p>
		<div>
			<strong>Chcete vědet více</strong> - navštivte web
			<a href="http://firefox.mozilla.cz" title="Proč na něj přejít a proč je lepší">Přejděte na Firefox</a>
		</div>
	</div>
</div>
<div class="in-prod-one">
	<div class="in-prod-desc">
		<h3><a href="/produkty/thunderbird/">Mozilla Thunderbird</a></h3>
		<a href="/produkty/thunderbird/"><img src="/img/logo-tb.png" width="60" height="60" alt="" /></a>
		<p>Poštovní klient pro každodenní použití s vestavěným filtrem pro blokování nevyžádané pošty.</p>
		<div>
			<strong>Chcete vědet více</strong> - navštivte web
		<a href="http://thunderbird.mozilla.cz" title="Proč ho používat a proč je lepší">Používejte Thunderbird</a>
		</div>
	</div>
</div>
<div class="next">
	<strong><a href="/produkty/">Další produkty</a>:</strong>
		<a href="/produkty/seamonkey/">SeaMonkey</a> |
		<a href="http://www.mozilla.cz/produkty/kompozer/">Kompozer</a>
</div>
</div>

<?php
$resource = $page->getFeedHandler('http://www.mozilla.cz/feed/');
if (!empty($resource['items'])): ?>
<div class="in-news">
	<h2><a href="http://www.mozilla.cz">Zprávičky z Mozilla.cz</a></h2>
<?php
	$ni = 0;
	$today = date('j. n. y');
	$yesterday = date('j. n. y', time()-86400);
	$items = $resource['items'];
	reset($items);
	while($ni++ < NEWS_HOMEPAGE_FULL && list($key,$item) = each($items)):
?>
<div class="news">
	<h3><a href="<?php echo $item['link']?>"><?php echo htmlspecialchars($item['title'])?></a></h3>
	<div><?php echo str_replace(array('<![CDATA[', ']]>'), array('', ''), $item['description'])?></div>
	<div class="ft"><?php
		echo htmlspecialchars($item['dc:creator']) . '&nbsp;|&nbsp;';
		$date = date('j. n. y', strToTime($item['pubDate']));
		echo ($date == $today) ? 'dnes' : ($date == $yesterday ? 'včera' : $date);
		?></div>
	<span class="cb"></span>
</div>
<?php
	endwhile;
	if(NEWS_HOMEPAGE_FULL == --$ni):
?>
	<h3 class="dn">Předchozí</h3>
	<ul class="news">
<?php while(list($key,$item) = each($items)): ?>
		<li><a href="<?php echo $item['link']?>"><?php echo htmlspecialchars($item['title'])?></a>&nbsp;(<?php
			$date = date('j. n. y', strToTime($item['pubDate']));
			echo ($date == $today) ? 'dnes' : ($date == $yesterday ? 'včera' : $date);
		?>)</li>
<?php endwhile; endif; ?>
	</ul>
<?php endif; ?>
	<span class="cb"></span>
	<div class="next"><a href="/zpravicky/">Archiv CZilla zpráviček</a></div>
</div>
<?php
	$page->includeTemplate('footer');
