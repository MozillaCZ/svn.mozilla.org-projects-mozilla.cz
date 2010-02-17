<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky, 27. září 2005');
	$page->setHeadline('Zprávičky, 27. září 2005', 'Přehled zpráviček ze světa Mozilly, 27. září 2005');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2005/09/">září 2005</a>: 	
		
						<a href="/zpravicky/2005/09/02/" title="Počet zpráviček: 3">2.</a>
		 
		|
						<a href="/zpravicky/2005/09/03/" title="Počet zpráviček: 3">3.</a>
		 
		|
						<a href="/zpravicky/2005/09/06/" title="Počet zpráviček: 4">6.</a>
		 
		|
						<a href="/zpravicky/2005/09/08/" title="Počet zpráviček: 2">8.</a>
		 
		|
						<a href="/zpravicky/2005/09/09/" title="Počet zpráviček: 4">9.</a>
		 
		|
						<a href="/zpravicky/2005/09/10/" title="Počet zpráviček: 3">10.</a>
		 
		|
						<a href="/zpravicky/2005/09/12/" title="Počet zpráviček: 1">12.</a>
		 
		|
						<a href="/zpravicky/2005/09/13/" title="Počet zpráviček: 1">13.</a>
		 
		|
						<a href="/zpravicky/2005/09/14/" title="Počet zpráviček: 4">14.</a>
		 
		|
						<a href="/zpravicky/2005/09/15/" title="Počet zpráviček: 1">15.</a>
		 
		|
						<a href="/zpravicky/2005/09/16/" title="Počet zpráviček: 2">16.</a>
		 
		|
						<a href="/zpravicky/2005/09/17/" title="Počet zpráviček: 4">17.</a>
		 
		|
						<a href="/zpravicky/2005/09/21/" title="Počet zpráviček: 3">21.</a>
		 
		|
						<a href="/zpravicky/2005/09/22/" title="Počet zpráviček: 6">22.</a>
		 
		|
						<a href="/zpravicky/2005/09/23/" title="Počet zpráviček: 1">23.</a>
		 
		|
						<a href="/zpravicky/2005/09/25/" title="Počet zpráviček: 3">25.</a>
		 
		|
						<a href="/zpravicky/2005/09/26/" title="Počet zpráviček: 5">26.</a>
		 
		|
						<strong>27.</strong>
		 
		|
						<a href="/zpravicky/2005/09/28/" title="Počet zpráviček: 3">28.</a>
		 
		|
						<a href="/zpravicky/2005/09/29/" title="Počet zpráviček: 3">29.</a>
		 
		|
						<a href="/zpravicky/2005/09/30/" title="Počet zpráviček: 1">30.</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/svg-ve-firefoxu-1.5-bude-postaveno-na-graficke-knihovne-cairo/">SVG ve Firefoxu 1.5 bude postaveno na grafické knihovně Cairo</a></h3>

	<div>O plánech na začlenění knihovny <a href="http://www.cairographics.org/introduction" hreflang="en" title="cairo - introduction">Cairo</a> do <a href="http://www.cairographics.org/introduction" hreflang="en" title="cairo - introduction">Firefoxu</a> a s tím spojenými výhodami, jsme na CZille <a href="/archiv-2005.html#news:ce6322923339ac60708b58cfbf814be0" title="Gecko bude při vykreslování stránek využívat akceleraci grafické karty">psali</a> <a href="/archiv-2005.html#news:d798b4a9bb1010c8e82b7dc3552b65ad" title="Brendan Eich: Firefox 1.1 a co přijde po něm">již</a> <a href="/archiv-2005.html#news:4d8592c6bac4f28e49432e6ee29272b2" title="Pokroky v renderování pomocí knihovny Cairo">mnohokrát</a>. Vývojáři se nyní rozhodli, že <a href="http://weblogs.mozillazine.org/tor/archives/2005/09/call_for_testing_cairo_backend.html" hreflang="en" title="Mozilla SVG Update: Call for testing: cairo backend for win32">pro účely vykreslování <abbr title="Scalable Vector Graphics" lang="en">SVG</abbr> začlení Cairo nikoliv do Firefoxu 2.0, ale už do blížící se verze 1.5</a>. Důvodem je především fakt, že vykreslování <abbr title="Scalable Vector Graphics" lang="en">SVG</abbr> na Windows doposud využívalo knihovnu GDI+, která je předinstalována jen na Windows XP a uživatelé starších verzí Windows by si ji museli stáhnout a doinstalovat. K dispozici už je i <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/nightly/experimental/firefox-1.5b1-svg-cairo1.0/firefox-1.5b1-win32-cairo-1.0.0-vc6.zip">testovací build</a> vývojové větve Firefoxu 1.5 (pouze pro Windows).</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/09/27/">27. 9. 05</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
