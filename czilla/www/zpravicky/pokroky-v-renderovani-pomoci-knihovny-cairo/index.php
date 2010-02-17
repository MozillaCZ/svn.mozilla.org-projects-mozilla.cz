<?php
	require_once '../../inc/page.php';
	$page->setTitle('Pokroky v renderování pomocí knihovny Cairo');
	$page->setHeadline('Pokroky v renderování pomocí knihovny Cairo', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/pokroky-v-renderovani-pomoci-knihovny-cairo/">Pokroky v renderování pomocí knihovny Cairo</a></h3>

	<div>O tom, že <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefox</a> bude v budoucnu využívat grafickou knihovnu <a href="http://www.cairographics.org/introduction" hreflang="en">Cairo</a> a díky ní mj. i hardwarovou akceleraci při vykreslování, antialiasing a další grafické "vychytávky" jsme <a href="/archiv-2005.html#news:ce6322923339ac60708b58cfbf814be0" title="Gecko bude při vykreslování stránek využívat akceleraci grafické karty">již</a> <a href="/archiv-2005.html#news:d798b4a9bb1010c8e82b7dc3552b65ad" title="Brendan Eich: Firefox 1.1 a co přijde po něm">několikrát</a> <a href="/archiv-2005.html#news:8cf7bbbf088a09cd63e1b3741c58e4e6" title="Co nás čeká ve Firefoxu 2.0?">psali</a>. Začlenění kódu Caira s sebou (trochu paradoxně) přineslo <a href="http://weblogs.mozillazine.org/tor/archives/2005/06/win32_backend_r.html" hreflang="en" title="Mozilla SVG Update: Win32 Backend Renderer">dočasné problémy s výkonem</a>, ale vývoj od té doby pokročil a verze se zapnutou podporou Caira <a href="http://weblogs.mozillazine.org/tor/archives/2005/09/win32_backend_renderer_revisit_1.html" hreflang="en" title="Mozilla SVG Update: Win32 backend renderer revisited">jsou dnes na platformě Windows srovnatelně rychlé</a> jako verze používající k vykreslování starší GDI+. Optimalizace renderování pomocí Caira samozřejmě pokračují dál a jistě se dočkáme dalších výrazných zrychlení. Pokud chcete informace "z první ruky" na toto téma, sledujte <a href="http://weblogs.mozillazine.org/tor/" hreflang="en" title="Mozilla SVG Update">weblog Tima Rowleyho</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/09/17/">17. 9. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/09/17/">Ze stejného dne</a></dd>
				<dd><a href="../2005/09/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

