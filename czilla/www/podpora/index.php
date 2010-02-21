<?php
	require_once '../inc/page.php';
	$page->setTitle('Podpora produktů Mozilla');
	$page->setHeadline('Podpora produktů Mozilla', 'Firefox, Thunderbird, Suite ...');
	$page->setKeywords('podpora, nápověda, pomoc, návod, mozilla, firefox, thunderbird, suite, nvu');
	$page->setDescription('Podpora uživatelů aplikací Mozilla Firefox, Mozilla Thunderbird a Mozilla Suite');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/">Mozilla.cz</a>.</div>

<p>Vítejte v&nbsp;sekci podpory uživatelů aplikací Mozilla.
V&nbsp;této sekci naleznete řadu užitečných návodů, rad a&nbsp;tipů na
zpříjemnění práce s&nbsp;těmito aplikacemi. Pokud hledáte odpověď na svou
otázku týkající se aplikace Mozilla, jste na správném místě.</p>

<p><strong>Zvolte produkt</strong>, který používáte a&nbsp;ke kterému chcete získat
informace:</p>

<h3 style="height:32px;margin:0.5em 0;background:url(/img/ico-ff.gif) no-repeat 10px 0;padding:8px 0 0 50px"><a
	href="/podpora/firefox/" title="Mozilla Firefox: Podpora produktu">Mozilla Firefox</a></h3>
<h3 style="height:32px;margin:0.5em 0;background:url(/img/ico-tb.gif) no-repeat 10px 0;padding:8px 0 0 50px"><a
	href="/podpora/thunderbird/" title="Mozilla Thunderbird: Podpora produktu">Mozilla Thunderbird</a></h3>
<h3 style="height:32px;margin:0.5em 0;background:url(/img/ico-ms.gif) no-repeat 10px 0;padding:8px 0 0 50px"><a
	href="http://www.mozilla.cz/podpora/seamonkey/" title="SeaMonkey: Podpora produktů">SeaMonkey</a> (dříve <a
	href="/podpora/suite/" title="Mozilla Suite: Podpora produktů">Mozilla Suite</a>)</h3>

<h3>Webové fórum</h3>

<p>Nenašli jste odpověď na svou otázku? Položte svůj dotaz ve
<a href="http://forum.mozilla.cz/" title="Fórum na podporu uživatelů aplikací Mozilla">fóru na podporu uživatelů</a>,
kde vám řada zkušených uživatelů ochotně poradí. Řada dotazů je zde již zodpovězena, takže si postačí přečíst řešení.</p>

<h3>Návody a články</h3>

<ul>
	<li><a href="bezpecnost-mozilly-a-odvozenych-prohlizecu.php" title="Bezpečnost Mozilly a odvozených prohlížečů">Bezpečnost Mozilly a odvozených prohlížečů</a></li>
	<li><a href="kalendar-otazky.php" title="Otázky kolem kalendáře Mozilly">Mozilla Kalendář - otázky</a></li>
	<li><a href="predvolby-about-config.php" title="Přehled předvoleb about:config">Přehled předvoleb</a></li>
	<li><a href="mozilla-na-kazdy-pad.php" title="Skloňování názvů produktů Mozilla.org">Mozilla na každý pád</a></li>
	<li><a href="shrnuti-mpl.php" title="Mozilla Public Licence - souhrn práv a povinností">Souhrn práv a povinností</a></li>
	<li><a href="document-all.php" title="Document.all - omezená podpora v prohlížečích Mozilla">Document.all</a></li>
	<li><a href="hadani-domen.php" title="Hádání domén v Mozille">Hádání domén</a></li>
	<li><a href="povoleni-schranky-v-html-editoru.php" title="Povolení práce se systémovou schránkou v HTML editoru">Práce se systémovou schránkou</a></li>
</ul>

<h3>Archiv Mozilla Links</h3>
<p>
<a href="./zpravodaj/">Mozilla Links</a> - občasný elektronický zpravodaj vydávaný projektem
<a href="http://newsletter.mozdev.org/" hreflang="en">Mozilla Links Newsletter</a>.
</p>

<h2 class="nice">Podpora v angličtině</h2>
<p>V případě, kdy nenajdete odpověď na svou otázku v češtině, můžete se porozhlédnout na anglických webech. </p>
<ul>
	<li><a href="http://support.mozilla.com/" title="Firefox Support: Domovská stránka" hreflang="en">Firefox Support</a> – oficiální stránky podpory Firefoxu.</li>
	<li><a href="http://kb.mozillazine.org/Knowledge_Base" title="Knowledge Base MozillaZine: Domovská stránka" hreflang="en">Knowledge Base MozillaZine</a> – wiki s řadou návodů a tipů k Firefoxu, Thunderbirdu a dalším aplikacím Mozilla.</li>
	<li><a href="http://forums.mozillazine.org/" title="Diskusní fórum MozillaZine" hreflang="en">Diskusní fórum MozillaZine</a> – nejznámější diskusní fórum věnované produktům Mozilla.</li>
</ul>



<?php
	$page->includeTemplate('footer');
?>
