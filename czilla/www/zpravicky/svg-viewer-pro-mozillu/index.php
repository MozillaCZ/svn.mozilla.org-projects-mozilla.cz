<?php
	require_once '../../inc/page.php';
	$page->setTitle('SVG Viewer pro Mozillu');
	$page->setHeadline('SVG Viewer pro Mozillu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/svg-viewer-pro-mozillu/">SVG Viewer pro Mozillu</a></h3>

	<div>Tak konečně přestane být problémem zobrazování <acronym title="Scalable Vector Graphics">SVG</acronym> v Mozille. Společnost <a href="http://www.adobe.com/">Adobe</a> po předchozích nedorozuměních přistoupila na podporu Mozilly ve svém volně dostupném prohlížeči SVG verze 6.0 (na <a href="http://www.root.cz/">Rootovi</a> píší i o připravované verzi pro <a href="http://www.linux.cz">Linux</a> a <a href="http://www.mujmac.cz/">Mac</a>). Kdo chce, může vyzkoušet <a href="http://www.adobe.com/svg/viewer/install/beta.html">beta verzi pro Windows</a>. Pozn.: Po instalaci zkopírujte soubory z "<tt>C:\Program Files\Common Files\Adobe\SVG Viewer 6.0\Plugins</tt>" do adresáře "<tt>Plugins</tt>" vaší Mozilly. Testováno a funguje v Mozille 1.4, ale (!) při prohlížení dem na <a href="http://www.adobe.com/svg/demos/">adobe.com</a> zjistíte, že nefunguje většina interaktivních věcí (jsou tam evidentně problémy s JavaScriptem). Nicméně i tak to je úspěch (a je to zatím jen pre-release verze :-).</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/07/15/">15. 7. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/07/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

