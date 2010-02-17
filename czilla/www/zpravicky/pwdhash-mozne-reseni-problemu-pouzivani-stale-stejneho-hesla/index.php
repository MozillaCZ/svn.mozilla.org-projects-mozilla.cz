<?php
	require_once '../../inc/page.php';
	$page->setTitle('PwdHash - možné řešení problému používání stále stejného hesla');
	$page->setHeadline('PwdHash - možné řešení problému používání stále stejného hesla', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/pwdhash-mozne-reseni-problemu-pouzivani-stale-stejneho-hesla/">PwdHash - možné řešení problému používání stále stejného hesla</a></h3>

	<div>Jedním z častých bezpečnostních problémů je, že uživatelé si nastavují stejná hesla na různých serverech. Stačí pak prolomit zabezpečení u jednoho z nich a rázem jsou přístupné i všechny ostatní účty uživatele. Na tento problém se zaměřil <a href="http://blakeross.com/" title="Blake Ross on Firefox and Beyond &raquo; Blog" hreflang="en">Blake Ross</a> a výsledkem je <a href="http://blakeross.com/index.php?p=39" hreflang="en">projekt PwdHash</a>. Jde o plugin (překvapivě do <abbr title="Internet Explorer" lang="en">IE</abbr>, verze pro <a href="/produkty/firefox/">Firefox</a> se plánuje v budoucnu), který hesla před odesláním zhašuje spolu s doménou a výsledkem je tak unikátní heslo pro každý server - bez nutnosti na serveru cokoliv měnit. Bližší popis <a href="http://crypto.stanford.edu/PwdHash/pwdhash.pdf" title="A Browser Plug-in Solution to the Unique Password Problem" hreflang="en">najdete v článku</a> (PDF, 146&nbsp;kB) a nejspíš vás stejně jako mě překvapí, kolik se okolo zdánlivě jednoduché myšlenky objevilo zajímavých problémů.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/25/">25. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/internet-explorer/">Internet Explorer</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/02/25/">Ze stejného dne</a></dd>
				<dd><a href="../2005/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

