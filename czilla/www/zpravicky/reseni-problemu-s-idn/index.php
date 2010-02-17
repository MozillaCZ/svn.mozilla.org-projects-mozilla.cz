<?php
	require_once '../../inc/page.php';
	$page->setTitle('Řešení problémů s IDN');
	$page->setHeadline('Řešení problémů s IDN', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/reseni-problemu-s-idn/">Řešení problémů s IDN</a></h3>

	<div><a href="http://weblogs.mozillazine.org/gerv/archives/008469.html" title="Hacking for Christ: IDN Update (2)" hreflang="en">Gervease Markham oznámil</a>, že produkty <a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a> nyní budou obsahovat seznam <abbr title="Top Level Domain" lang="en">TLD</abbr>, podle kterého se budou rozhodovat, jak zobrazit domény obsahující v názvu znaky národních abeced (<abbr title="Internationalized Domain Name" lang="en">IDN</abbr>). Domény spadající pod <abbr title="Top Level Domain" lang="en">TLD</abbr>, které nejsou v seznamu, budou zobrazeny v rozkódované podobě, zatímco domény ze seznamu budou zobrazeny pomocí národních znaků. V seznamu budou jen ty <abbr title="Top Level Domain" lang="en">TLD</abbr>, jejichž správci přijali dostatečná opatření proti <abbr title="Internationalized Domain Name" lang="en">IDN</abbr> spoofingu (tj. registraci doménových jmen opticky vypadajících jako jiná jména, což umožňuje záměnu). O problémech s <abbr title="Internationalized Domain Name" lang="en">IDN</abbr> <a href="/archiv-2005.html#news:621cbf7bee805e67bbb217401867ae1" title="Objeveny čtyři nové bezpečnostní problémy">jsme</a> <a href="/archiv-2005.html#news:364d357bd7c0bd02a5cb9ac4ec2142fc" title="Strategie Mozilla.org pro řešení problémů s IDN">několikrát</a> <a href="/archiv-2005.html#news:e80976e06e62f855b30b675e482343b0" title="Změna plánů na řešení IDN spoofingu">psali</a>. Dočasným řešením těchto problémů bylo zobrazování všech domén v rozkódované podobě.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/08/">8. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Další zprávičky:</dt>
				<dd><a href="../2005/07/08/">Ze stejného dne</a></dd>
				<dd><a href="../2005/07/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

