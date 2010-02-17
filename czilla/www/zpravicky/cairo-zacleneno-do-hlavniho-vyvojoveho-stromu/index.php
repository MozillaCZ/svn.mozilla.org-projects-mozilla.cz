<?php
	require_once '../../inc/page.php';
	$page->setTitle('Cairo začleněno do hlavního vývojového stromu');
	$page->setHeadline('Cairo začleněno do hlavního vývojového stromu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/cairo-zacleneno-do-hlavniho-vyvojoveho-stromu/">Cairo začleněno do hlavního vývojového stromu</a></h3>

	<div><a href="http://blog.vlad1.com/" hreflang="en" title="Vladimir Vukićević">Vladimir Vukićević</a> minulý týden oznámil, že <a href="http://blog.vlad1.com/archives/2005/10/05/72/" hreflang="en" title="Vladimir Vukićević &#187; Blog Archive &#187; More cairo merging..">podpora renderovací knihovny Cairo byla začleněna do hlavního vývojového stromu</a> (ze kterého mj. vznikne Firefox 2.0). Dosud si s <a href="http://cairographics.org/introduction" hreflang="en">Cairem</a> vývojáři hráli pouze na experimentální vývojové větvi. Sestavení <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> s podporou Caira je zatím nutné zapnout v konfiguraci buildu a není úplně bez problémů. Připomínáme, že hlavním důvodem začlenění knihovny Cairo je vylepšení práce s grafikou v Gecku, včetně využití grafické akcelerace.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/10/09/">9. 10. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/10/09/">Ze stejného dne</a></dd>
				<dd><a href="../2005/10/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

