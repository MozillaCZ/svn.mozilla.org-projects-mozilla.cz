<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Poznámky k vydání');
	$page->setHeadline('Poznámky k vydání','Detailní popis změn a novinek v jednotlivých verzích');
	$page->setKeywords ('mozilla, suite, poznámky k vydání, verze, gecko, prohlížeč, poštovní klient, editor, chatzilla');
	$page->setDescription ('Poznámky k vydání historických verzí Mozilla Suite');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>

<p>Poznámky k&nbsp;vydání jednotlivých verzí (angl. <span lang="en">release
notes</span>) <a href="/produkty/suite/">Mozilla Suite</a> obsahují
informace o&nbsp;tom, jaké nové vlastnosti a&nbsp;vylepšení obsahuje daná
verze oproti předchozím a&nbsp;popisují se zde známé chyby, které se dosud
nepodařilo 100% odstranit, včetně rad, jak se jich pokud možno vyvarovat.
Dále v&nbsp;poznámkách můžete nalézt systémové nároky pro dané verze,
informace o&nbsp;kompatibilitě s&nbsp;pomocnými programy a&nbsp;mnohé další
informace.</p>

<ul>
	<li><a href="mozilla1.3a/">Verze 1.3a</a></li>
	<li><a href="mozilla1.3b/">Verze 1.3b</a></li>
	<li><a href="mozilla1.3/">Verze 1.3</a></li>
	<li><a href="mozilla1.4a/">Verze 1.4a</a></li>
	<li><a href="mozilla1.4b/">Verze 1.4b</a></li>
	<li><a href="mozilla1.4/">Verze 1.4</a></li>
</ul>

<p>Poznámky k&nbsp;vydání jednotlivých verzí jsou překládány
z&nbsp;originálních dokumentů serveru
<a href="http://www.mozilla.org/"
	hreflang="en">mozilla.org</a>,
tam také naleznete poznámky ke starším verzím, které jsme již
nepřekládali.</p>

<?php
	$page->includeTemplate('footer');
?>
