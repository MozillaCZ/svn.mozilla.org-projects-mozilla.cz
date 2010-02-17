<?php
	require_once '../../inc/page.php';
	$page->setTitle('Offline práce ve Firefoxu 3');
	$page->setHeadline('Offline práce ve Firefoxu 3', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/off-line-prace-ve-firefoxu-3/">Offline práce ve Firefoxu 3</a></h3>

	<div><a href="http://www.bluishcoder.co.nz/" title="Blog Chrise Double" hreflang="en">Chris Double</a> vytvořil <a href="http://www.bluishcoder.co.nz/offlinezimbra" hreflang="en" title="Podpora off-line režimu">demo</a>, které na sestavení <a href="http://www.mozilla.org/projects/firefox/3.0a2/releasenotes/" hreflang="en" title="Firefox 3">Gran Paradiso Alfa 2</a> (budoucí Firefox 3) ukazuje, jak by měla vypadat podpora online aplikací v režimu offline. Toto sestavení již totiž obsahuje veškerou potřebnou funkcionalitu:
<ul>
<li><a href="http://developer.mozilla.org/en/docs/DOM:Storage" hreflang="en">DomStorage</a> &mdash; mechanizmus pro lokální čtení/zápis pomocí páru klíč/hodnota definovaný ve specifikaci <a href="http://www.whatwg.org/specs/web-apps/current-work/" hreflang="en" title="WHATWG specifikace Web Applications 1.0">Web Applications 1.0</a>,</li>
<li>Offline cache &mdash; speciální vyrovnávací paměť pro offline režim, do které aplikace mohou přistupovat pomocí parametru rel="offline-resource" elementu &lt;link&gt;,</li>
<li><a href="http://www.whatwg.org/specs/web-apps/current-work/#offline" hreflang="en">Offline Event</a> &mdash; událost, která je spuštěna při přechodu do off-line režimu.</li>
</ul>
Ačkoliv je demo postavené na známé kancelářské online aplikaci <a href="http://www.zimbra.com/" hreflang="en">Zimbra</a>, jednou z prvních aplikací téže kategorie, umožňující práci v offline režimu, je <a href="http://iscrybe.com/main/index.php" hreflang="en">scrybe</a>, který ovšem používá technologii Flash.</div>
	<div class="ft">
		<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/02/14/">14. 2. 07</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/vyvojari/">Vývojáři</a></dd>
				<dd><a href="/zpravicky/s/webove-technologie/">Webové technologie</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2007/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

