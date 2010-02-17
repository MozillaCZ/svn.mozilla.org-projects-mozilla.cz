<?php
	require_once '../../inc/page.php';
	$page->setTitle('FTP vs. HTTP');
	$page->setHeadline('FTP vs. HTTP', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/ftp-vs.-http/">FTP vs. HTTP</a></h3>

	<div>Radostnou zprávu nesu těm, kteří si stěžovali, že si nemohou z CZilly stáhnout Mozillu, protože to lze jen přes ftp a to někteří mají filtrováno. Ode dneška je obsah ftp.czilla.cz pristupný i přes protokol http. Pro stažení tedy můžete použít http ekvivalentní adresy. Z technických důvodů se zatím nejedná o plnohodnotné rozhraní (na což velice rychle příjdete :-), proto pokud můžete, preferujte ftp. Pokud máte zájem, můžete to rovnou <a href="http://ftp.czilla.cz/mozilla.org/">vyzkoušet</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/05/05/">5. 5. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/czilla/">CZilla</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/05/05/">Ze stejného dne</a></dd>
				<dd><a href="../2003/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

