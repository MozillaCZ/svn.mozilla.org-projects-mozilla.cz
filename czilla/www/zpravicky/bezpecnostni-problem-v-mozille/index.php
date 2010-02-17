<?php
	require_once '../../inc/page.php';
	$page->setTitle('Bezpečnostní problém v Mozille?');
	$page->setHeadline('Bezpečnostní problém v Mozille?', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/bezpecnostni-problem-v-mozille/">Bezpečnostní problém v Mozille?</a></h3>

	<div>Na každého jednou dojde. A tak i v Mozille byl včera objeven <a href="http://secunia.com/advisories/10419/" title="Mozilla Status Bar Manipulation Weakness" hreflang="en">menší bezpečnostní problém</a>. Nicméně se nejedná o nic kritického, jak si hned ukážeme. Vychází z problému, který byl již dříve pozorován u <a href="http://secunia.com/advisories/10395/" title="Internet Explorer URL Spoofing Vulnerability" hreflang="en">Internet Exploreru 6.0</a>, a který umožňoval "útočníkovi" přimět prohlížeč zobrazovat jiné <abbr title="Uniform Resource Locator">URL</abbr>, než o jaké se právě jedná. Problém si lze vyzkoušet na testovacích stránkách <a href="http://secunia.com/internet_explorer_address_bar_spoofing_test/" hreflang="en">Secunia.com</a> a <a href="http://www.zapthedingbat.com/security/ex01/vun1.htm" hreflang="en">zapthedingbat.com</a> (porovnejte si chování v různých prohlížečích). Včera bylo <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=228176" title="%00 in a URL causes incorrect display of hovered link in status bar" hreflang="en">nahlášeno</a>, že se problém částečně týká i Mozilly. Částečně znamená, že není ovlivněna zobrazovaná URL v adresním řádku prohlížeče, ale jen a pouze zobrazovaná adresa ve stavovém řádku při najetí na odkaz. Reálné zneužití je diskutabilní, ale jistě možné. Vývojáři problém již řeší a tak můžeme jen s napětím čekat, zda se potvrdí pravidlo, že bezpečnostní chyby v Open Source programech bývají řešeny velmi rychle (obvykle během několika dní). O dalším vývoji budeme samozřejmě informovat. Další informace najdete na <a href="http://www.mozillazine.org/talkback.html?article=4078" title="Mozilla Partially Vulnerable to Internet Explorer URL Spoofing Security Flaw" hreflang="en" lang="en">MozillaZine</a> a <a href="http://www.theage.com.au/articles/2003/12/12/1071125632006.html" title="URL spoofing flaw could be used in bank scams" hreflang="en" lang="en">TheAge.com</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/12/12/">12. 12. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/internet-explorer/">Internet Explorer</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/12/12/">Ze stejného dne</a></dd>
				<dd><a href="../2003/12/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

