<?php
	require_once '../../inc/page.php';
	$page->setTitle('SVG ve Firefoxu 1.5 bude postaveno na grafické knihovně Cairo');
	$page->setHeadline('SVG ve Firefoxu 1.5 bude postaveno na grafické knihovně Cairo', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/svg-ve-firefoxu-1.5-bude-postaveno-na-graficke-knihovne-cairo/">SVG ve Firefoxu 1.5 bude postaveno na grafické knihovně Cairo</a></h3>

	<div>O plánech na začlenění knihovny <a href="http://www.cairographics.org/introduction" hreflang="en" title="cairo - introduction">Cairo</a> do <a href="http://www.cairographics.org/introduction" hreflang="en" title="cairo - introduction">Firefoxu</a> a s tím spojenými výhodami, jsme na CZille <a href="/archiv-2005.html#news:ce6322923339ac60708b58cfbf814be0" title="Gecko bude při vykreslování stránek využívat akceleraci grafické karty">psali</a> <a href="/archiv-2005.html#news:d798b4a9bb1010c8e82b7dc3552b65ad" title="Brendan Eich: Firefox 1.1 a co přijde po něm">již</a> <a href="/archiv-2005.html#news:4d8592c6bac4f28e49432e6ee29272b2" title="Pokroky v renderování pomocí knihovny Cairo">mnohokrát</a>. Vývojáři se nyní rozhodli, že <a href="http://weblogs.mozillazine.org/tor/archives/2005/09/call_for_testing_cairo_backend.html" hreflang="en" title="Mozilla SVG Update: Call for testing: cairo backend for win32">pro účely vykreslování <abbr title="Scalable Vector Graphics" lang="en">SVG</abbr> začlení Cairo nikoliv do Firefoxu 2.0, ale už do blížící se verze 1.5</a>. Důvodem je především fakt, že vykreslování <abbr title="Scalable Vector Graphics" lang="en">SVG</abbr> na Windows doposud využívalo knihovnu GDI+, která je předinstalována jen na Windows XP a uživatelé starších verzí Windows by si ji museli stáhnout a doinstalovat. K dispozici už je i <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/nightly/experimental/firefox-1.5b1-svg-cairo1.0/firefox-1.5b1-win32-cairo-1.0.0-vc6.zip">testovací build</a> vývojové větve Firefoxu 1.5 (pouze pro Windows).</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/09/27/">27. 9. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/09/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

