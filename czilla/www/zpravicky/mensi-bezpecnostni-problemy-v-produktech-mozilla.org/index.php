<?php
	require_once '../../inc/page.php';
	$page->setTitle('Menší bezpečnostní problémy v produktech Mozilla.org');
	$page->setHeadline('Menší bezpečnostní problémy v produktech Mozilla.org', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/mensi-bezpecnostni-problemy-v-produktech-mozilla.org/">Menší bezpečnostní problémy v produktech Mozilla.org</a></h3>

	<div>I na <a href="http://www.mozilla.org/" hreflang="en">Mozillu</a> občas dolehnou bezpečnostní problémy a <a href="http://www.securityfocus.com/" hreflang="en">SecurityFocus</a> <a href="http://www.securityfocus.com/archive/1/386070/2005-01-04/2005-01-10/0" hreflang="en">o třech takových informuje</a>. Prvním problémem je chyba v protokolu <abbr title="Network News Transport Protocol" lang="en">NNTP</abbr>, o které jsme vás už <a title="Chyba v NNTP protokolu Mozilla Suite 1.7.3 a starší" href="/archiv.html#news:44141f3c02a8488b69b08d54e64b3ced"> dříve informovali</a> a v nejnovějších verzích Mozilly je opravena. Další nedostatky už jsou méně závažné, konkrétně jde o <a title="Secunia - Advisories - Mozilla / Mozilla Firefox Download Dialog Source Spoofing" href="http://secunia.com/advisories/13599" hreflang="en">podstrčení falešné URL ve stahovacím dialogu</a> Mozilly a Firefoxu a <a href="http://broadcast.ptraced.net/advisories/008-firefox.thunderbird.txt" hreflang="en">ne zrovna ideální manipulaci se soubory</a> v UNIXovém adesáři pro dočasné soubory (postižen je Firefox a Thunderbird). Na opravách se pracuje a pravděpodobně budou začleněny v nejbližších vydaných verzích postižených produktů.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/08/">8. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/thunderbird/">Thunderbird</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/01/08/">Ze stejného dne</a></dd>
				<dd><a href="../2005/01/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
