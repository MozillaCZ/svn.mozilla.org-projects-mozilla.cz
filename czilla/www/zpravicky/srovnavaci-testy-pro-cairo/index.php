<?php
	require_once '../../inc/page.php';
	$page->setTitle('Srovnávací testy pro Cairo');
	$page->setHeadline('Srovnávací testy pro Cairo', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/srovnavaci-testy-pro-cairo/">Srovnávací testy pro Cairo</a></h3>

	<div>Zatímco finišují práce na Firefoxu 1.5, vývojáři už zároveň pokročili v přípravách verze 2.0, jejímž důležitým bodem bude přechod na novou grafickou knihovnu <a href="http://cairographics.org/" hreflang="en">Cairo</a>. <a href="http://blog.vlad1.com/" hreflang="en" title="Vladimir Vukićević">Vladimir Vukićević</a> minulý týden <a href="http://blog.vlad1.com/archives/2005/10/28/74/" hreflang="en" title="Vladimir Vukićević &#187; Blog Archive &#187; Trender">zprovoznil sadu srovnávacích testů</a>, které by měly pomoci právě s optimalizací vykreslování pomocí Caira a zjistit případná slabá místa. Pokud máte některé z testovacích sestavení Firefoxu, můžete si i vyzkoušet <a href="javascript:c=21;skip=4;wh=1024;ww=1024;window.resizeTo(wh,ww); var wu = window.QueryInterface(Components.interfaces.nsIInterfaceRequestor).getInterface(Components.interfaces.nsIDOMWindowUtils); r = []; for (var i = 0; i &lt; c; i++) { var start = Date.now(); wu.redraw(); var end = Date.now(); r.push(end - start); } var t=0; (r.slice(skip)).forEach(function(v){t+=v;});alert('Average: ' + (t/(c-skip)).toFixed(3) + ' \nRaw: ' + r);">bookmarklet</a>, který změří čas potřebný k vykreslení právě zobrazené stránky.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/10/30/">30. 10. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/10/30/">Ze stejného dne</a></dd>
				<dd><a href="../2005/10/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

