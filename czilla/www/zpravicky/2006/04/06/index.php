<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky,  6. duben 2006');
	$page->setHeadline('Zprávičky,  6. duben 2006', 'Přehled zpráviček ze světa Mozilly,  6. duben 2006');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2006/04/">duben 2006</a>: 	
		
						<a href="/zpravicky/2006/04/01/" title="Počet zpráviček: 1">1.</a>
		 
		|
						<a href="/zpravicky/2006/04/04/" title="Počet zpráviček: 1">4.</a>
		 
		|
						<a href="/zpravicky/2006/04/05/" title="Počet zpráviček: 5">5.</a>
		 
		|
						<strong>6.</strong>
		 
		|
						<a href="/zpravicky/2006/04/07/" title="Počet zpráviček: 2">7.</a>
		 
		|
						<a href="/zpravicky/2006/04/08/" title="Počet zpráviček: 2">8.</a>
		 
		|
						<a href="/zpravicky/2006/04/09/" title="Počet zpráviček: 1">9.</a>
		 
		|
						<a href="/zpravicky/2006/04/10/" title="Počet zpráviček: 2">10.</a>
		 
		|
						<a href="/zpravicky/2006/04/13/" title="Počet zpráviček: 2">13.</a>
		 
		|
						<a href="/zpravicky/2006/04/14/" title="Počet zpráviček: 2">14.</a>
		 
		|
						<a href="/zpravicky/2006/04/18/" title="Počet zpráviček: 4">18.</a>
		 
		|
						<a href="/zpravicky/2006/04/19/" title="Počet zpráviček: 1">19.</a>
		 
		|
						<a href="/zpravicky/2006/04/20/" title="Počet zpráviček: 2">20.</a>
		 
		|
						<a href="/zpravicky/2006/04/21/" title="Počet zpráviček: 1">21.</a>
		 
		|
						<a href="/zpravicky/2006/04/23/" title="Počet zpráviček: 2">23.</a>
		 
		|
						<a href="/zpravicky/2006/04/24/" title="Počet zpráviček: 1">24.</a>
		 
		|
						<a href="/zpravicky/2006/04/27/" title="Počet zpráviček: 1">27.</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/proc-cairo/">Proč Cairo?</a></h3>

	<div>Tim Rowley odpovídá na <a href="http://weblogs.mozillazine.org/tor/" hreflang="en" title="Mozilla SVG Update">svém blogu</a> na otázku, <a href="http://weblogs.mozillazine.org/tor/archives/2006/04/why_cairo.html" hreflang="en" title="Mozilla SVG Update: &quot;Why Cairo?&quot;">proč Mozilla zvolila jako svou low-level grafickou knihovnu Cairo</a> a ne například konkurenční <a href="http://www.antigrain.com/" hreflang="en" title="Anti-Grain Geometry -">Anti-Grain</a>. Důvody jsou tři: Knihovna <a href="http://cairographics.org/" hreflang="en">Cairo</a> je napsána v C (nikoliv v C++), umí výstup do formátů <abbr title="PostScript" lang="en">PS</abbr> a <abbr title="Portable Document Format" lang="en">PDF</abbr> a především obsahuje podporu pro hardwarovou grafickou akceleraci. Mimochodem, od včerejška je Cairo <a href="http://developer.mozilla.org/devnews/index.php/2006/04/05/cairo-now-default-for-linux-on-trunk/" hreflang="en" title="Mozilla Developer News &#187; Blog Archive &#187; Cairo now default for Linux on trunk">zapnuto v nočních sestaveních Firefoxu na Linuxu</a> (již dříve bylo <a href="http://www.czilla.cz/zpravicky/cairo-zapnuto-v-nocnich-sestavenich/" title="Cairo zapnuto v nočních sestaveních">zapnuto na Windows</a>).</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/04/06/">6. 4. 06</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
