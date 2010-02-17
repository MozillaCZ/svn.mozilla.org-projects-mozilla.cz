<?php
	require_once '../../inc/page.php';
	$page->setTitle('Padáme s Mozillou');
	$page->setHeadline('Padáme s Mozillou', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/padame-s-mozillou/">Padáme s Mozillou</a></h3>

	<div>Padání s Mozillou může být i zábava. Nedávno byl zprovozněn server <a href="http://talkback-public.mozilla.org/">talkback-public.mozilla.org</a>, který umožňuje prohlížet reporty odeslané <a href="/vyvojari/bugzilla/jak-oznamovat-chyby.html#talkback">Talkbackem Mozilly</a> (<a href="http://groups.google.com/groups?as_umsgid=c57ant$74s1@ripley.netscape.com" title="Talkback lookup now available">původní oznámení</a>). K dispozici jsou jen základní údaje (ochrana soukromí), ale i to pro analýzu problému bohatě postačí. Dostupné údaje pomáhají vývojářům snáze odhalit příčinu problému. Zvědavým uživatelům znalým programování to pak umožňuje snáze proniknout do tajů zdrojového kódu Mozilly (kompletní výpis zásobníku při pádu doprovázený odkazy na příslušná místa do zdrojového kódu Mozilly, to přece přímo zavání dobrodružstvím. 8-). Všem nadšeným průzkumníkům zdrojového kódu zdar!</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/05/28/">28. 5. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

