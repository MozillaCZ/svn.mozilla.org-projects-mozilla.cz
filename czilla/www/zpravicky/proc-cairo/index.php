<?php
	require_once '../../inc/page.php';
	$page->setTitle('Proč Cairo?');
	$page->setHeadline('Proč Cairo?', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/proc-cairo/">Proč Cairo?</a></h3>

	<div>Tim Rowley odpovídá na <a href="http://weblogs.mozillazine.org/tor/" hreflang="en" title="Mozilla SVG Update">svém blogu</a> na otázku, <a href="http://weblogs.mozillazine.org/tor/archives/2006/04/why_cairo.html" hreflang="en" title="Mozilla SVG Update: &quot;Why Cairo?&quot;">proč Mozilla zvolila jako svou low-level grafickou knihovnu Cairo</a> a ne například konkurenční <a href="http://www.antigrain.com/" hreflang="en" title="Anti-Grain Geometry -">Anti-Grain</a>. Důvody jsou tři: Knihovna <a href="http://cairographics.org/" hreflang="en">Cairo</a> je napsána v C (nikoliv v C++), umí výstup do formátů <abbr title="PostScript" lang="en">PS</abbr> a <abbr title="Portable Document Format" lang="en">PDF</abbr> a především obsahuje podporu pro hardwarovou grafickou akceleraci. Mimochodem, od včerejška je Cairo <a href="http://developer.mozilla.org/devnews/index.php/2006/04/05/cairo-now-default-for-linux-on-trunk/" hreflang="en" title="Mozilla Developer News &#187; Blog Archive &#187; Cairo now default for Linux on trunk">zapnuto v nočních sestaveních Firefoxu na Linuxu</a> (již dříve bylo <a href="http://www.czilla.cz/zpravicky/cairo-zapnuto-v-nocnich-sestavenich/" title="Cairo zapnuto v nočních sestaveních">zapnuto na Windows</a>).</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/04/06/">6. 4. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/04/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

