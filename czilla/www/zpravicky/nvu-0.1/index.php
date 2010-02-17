<?php
	require_once '../../inc/page.php';
	$page->setTitle('Nvu 0.1');
	$page->setHeadline('Nvu 0.1', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/nvu-0.1/">Nvu 0.1</a></h3>

	<div>MozillaZine <a href="http://www.mozillazine.org/talkback.html?article=4254" title="MozillaZine: Nvu 0.1 Released">oznámil</a> vydání Nvu 0.1. <a href="http://nvu.com/" title="Nvu: The complete Web Authoring System for Desktop Linux">Nvu</a> je Open Source <abbr title="Hypertext Markup Language">HTML</abbr> editor postavený na Mozille, který na zakázku společnosti <a href="http://www.lindows.com/">Lindows</a> vyvíjí <a href="http://webperso.easyconnect.fr/danielglazman/">Daniel Glazman</a> (bývalý zaměstnanec Netscape, zakladatel <a href="http://disruptive-innovations.com/" title="Disruptive Innovations">Disruptive Innovations</a> a autor <a href="http://webperso.easyconnect.fr/danielglazman/composer/composer++.html" title="Mozilla (standalone) Composer and Composer++">Composer++</a>). Cílem Nvu projektu je vyvinout konkurenční program k programům typu Frontpage či Dreamweaver, nu uvidíme, zda se mu to podaří. K dispozici <a href="http://nvu.com/download.html">ke stažení</a> je verze pro Windows, Linux a samozřejmě LindowsOS. Pokud byste měli pod Windows problém s jeho spuštěním, pravděpodobně postačí upgradovat knihovny <tt>msvcp70.dll</tt> a <tt>msvcr70.dll</tt> (podrobněji na <a href="http://www.mozillazine.org/talkback.html?article=4254" title="MozillaZine: Nvu 0.1 Released">MozillaZine</a>). Nvu je na Mozille zcela nezávislý a svá data si ukládá do svých vlastních profilů (podobně jako to dělají Mozilla Firebird či Mozilla Thunderbird). Jen zdůrazňuji, že se teprve jedná o první beta verzi programu. <b>Update:</b> Daniel mezitím <a href="http://webperso.easyconnect.fr/danielglazman/weblog/index.php/2004/02/05/121-Nvu015InstallerForWin32" title="Glazblog: Nvu 0.15 installer for Win32">vyrobil instalátor pro Windows</a>, který problém s knihovnami vyřeší za vás.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/02/04/">4. 2. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/nvu/">Nvu</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/02/04/">Ze stejného dne</a></dd>
				<dd><a href="../2004/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

