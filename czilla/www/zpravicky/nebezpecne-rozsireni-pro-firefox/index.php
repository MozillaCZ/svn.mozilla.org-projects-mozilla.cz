<?php
	require_once '../../inc/page.php';
	$page->setTitle('Nebezpečné rozšíření pro Firefox');
	$page->setHeadline('Nebezpečné rozšíření pro Firefox', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/nebezpecne-rozsireni-pro-firefox/">Nebezpečné rozšíření pro Firefox</a></h3>

	<div>Antivirové firmy <a href="http://www.mcafee.com/cz/">McAfee</a> a <a href="http://www.sophos.com/" hreflang="en">Sophos</a> zachytily na Internetu výskyt velmi nebezpečného rozšíření pro prohlížeč <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Mozilla Firefox</a>. Toto rozšíření se vyskytuje jako součást trojského koně, který byl pojmenován <a href="http://vil.nai.com/vil/content/v_140256.htm" hreflang="en">FormSpy</a> resp. <a href="http://www.sophos.com/security/analyses/trojfirespya.html" hreflang="en">Troj/FireSpy-A</a> a do Firefoxu se nejčastěji nainstaluje pomocí tři roky staré <strong>bezpečnostní chyby v Internet Exploreru</strong> (exploit <a href="http://vil.nai.com/vil/content/v_100749.htm" hreflang="en">VBS/Psyme</a>) či pomocí <strong>ručního spuštění zákeřného souboru šířeného zpravidla jako příloha v e-mailu</strong> (malware <a href="http://vil.nai.com/vil/content/v_140257.htm" hreflang="en">Downloader-AXM</a>). Tento trojský kůň tak nevyužívá žádné zranitelnosti Firefoxu.
<br/><br/>
FormSpy se ve Firefoxu maskuje za rozšíření 
<a href="http://numberedlinks.mozdev.org/" hreflang="en">numberedlinks</a> ve verzi 0.9 a krade různé důvěrné informace (např. hesla či bankovní údaje) zadávaná do okna prohlížeče. Mimo vlastní Firefox dokáže tento trojský kůň  krást hesla uživatelů ICQ, poštovních programů komunikujících po nezabezpečených kanálech či FTP klientů. Jako obranu proti útoku tohoto typu doporučujeme dodržovat zásady bezpečné práce s Internetem - tj. spouštět programy či instalovat rozšíření pouze z důvěryhodných míst, aktualizovat software a provádět pravidelné kontroly vašeho počítače antivirovým softwarem.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/07/27/">27. 7. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/internet-explorer/">Internet Explorer</a></dd>
				<dd><a href="/zpravicky/s/rozsireni/">Rozšíření</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/07/27/">Ze stejného dne</a></dd>
				<dd><a href="../2006/07/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

