<?php
	require_once '../../inc/page.php';
	$page->setTitle('Cache a předkompilovaný XUL budou ukládány lokálně');
	$page->setHeadline('Cache a předkompilovaný XUL budou ukládány lokálně', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/cache-a-predkompilovany-xul-budou-ukladany-lokalne/">Cache a předkompilovaný XUL budou ukládány lokálně</a></h3>

	<div>Do vývojového stromu Mozilly <a href="http://gemal.dk/blog/2005/04/26/disk_cache_on_local_filesystem/" title="gemal.dk - Disk cache on local filesystem" hreflang="en">byla zahrnuta úprava</a>, která zajišťuje, že cache a soubor s předkompilovaným <abbr title="XML user Interface Language" lang="en">XUL</abbr> se už nebudou ukládat v adresáři profilu, ale v adresáři, který bude vždy na lokálním disku. Dřívější uspořádání způsobovalo problémy, pokud byl profil načítán například ze síťového disku. Po úpravě dlouho volaly zejména firmy nasazující produkty <a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a> ve velkém.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/27/">27. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Další zprávičky:</dt>
				<dd><a href="../2005/04/27/">Ze stejného dne</a></dd>
				<dd><a href="../2005/04/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

