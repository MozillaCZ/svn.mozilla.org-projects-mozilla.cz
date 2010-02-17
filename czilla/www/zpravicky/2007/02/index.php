<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky, únor 2007');
	$page->setHeadline('Zprávičky, únor 2007', 'Přehled zpráviček ze světa Mozilly, únor 2007');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2007/">rok 2007</a>: 	
		
						<a href="/zpravicky/2007/01/" title="Počet zpráviček: 5">leden</a>
		 
		|
						<strong>únor</strong>
		 
		|
						<a href="/zpravicky/2007/03/" title="Počet zpráviček: 10">březen</a>
		 
		|
						<a href="/zpravicky/2007/04/" title="Počet zpráviček: 7">duben</a>
		 
		|
						<a href="/zpravicky/2007/05/" title="Počet zpráviček: 8">květen</a>
		 
		|
						<a href="/zpravicky/2007/07/" title="Počet zpráviček: 4">červenec</a>
		 
		|
						<a href="/zpravicky/2007/08/" title="Počet zpráviček: 7">srpen</a>
		 
		|
						<a href="/zpravicky/2007/09/" title="Počet zpráviček: 5">září</a>
		 
		|
						<a href="/zpravicky/2007/10/" title="Počet zpráviček: 3">říjen</a>
		 
		|
						<a href="/zpravicky/2007/11/" title="Počet zpráviček: 6">listopad</a>
		 
		|
						<a href="/zpravicky/2007/12/" title="Počet zpráviček: 1">prosinec</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/zahajeny-nominace-na-anketu-czech-open-source-2007/">Zahájeny nominace na anketu CZECH OPEN SOURCE 2007</a></h3>

	<div>Server <a href="http://www.root.cz/">Root.cz</a> pořádá anketu <a href="http://www.root.cz/clanky/czech-open-source-2007-nominujte-ty-nejlepsi/">CZECH OPEN SOURCE 2007</a>. Do ankety můžete do 11.&nbsp;března <a href="http://cos.root.cz/nominace/">nominovat</a> kterýkoliv projekt, software, akci nebo osobnost, která má přímý vztah k Open Source v České republice. Anketa navazuje na loňský <a href="http://cos.root.cz/2006/">první ročník</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/02/15/">15. 2. 07</a>
	</div>
	<span class="cb"></span>
</div>
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
<div class="news">
	<h3><a href="/zpravicky/firefox-dosahl-300-milionu-stazeni/">Firefox dosáhl 300 milionů stažení</a></h3>

	<div>Podle serveru <a href="http://mozillalinks.org/wp/" hreflang="en" title="mozilla links - Your source for Firefox, Thunderbird, Camino, SeaMonkey news, tips and more.">mozilla links</a> dnes dosáhl Firefox <a href="http://mozillalinks.org/wp/2007/02/firefox-300-million-downloads/" hreflang="en">300 milionů stažení</a>. Gratulujeme!</div>
	<div class="ft">
		<a href="/zpravicky/a/mik/">Michal Kec</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/02/12/">12. 2. 07</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
