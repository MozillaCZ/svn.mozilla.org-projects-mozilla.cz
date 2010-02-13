<?php
	require_once '../../inc/page.php';
	$page->setTitle('Firefox na LinuxExpu 2005');
	$page->setHeadline('Firefox na LinuxExpu 2005','12. 4. 2005');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>

<p>V průběhu výstavy <a href="http://www.linuxexpo.cz/">LinuxExpo 2005</a>,
které se
<a href="/czilla/fotky/linuxexpo-2005.php">CZilla účastnila</a>,
nás napadla zvídavá otázka: Kolik vystavovatelů tak
asi používá <a href="/produkty/firefox/">Firefox</a>? Rozhodli jsme se na ni odpovědět,
a tak jsme se vydali po výstavní ploše, obešli všechny stánky a jednotlivé
vystavující jsme z používání Firefoxu usvědčili fotografií.</p>

<p>Nabízíme vám chronologický přehled vzniklých fotek a jsme rádi, že najít stánek,
kde nepoužívali Firefox, bylo opravdu obtížné.</p>

<?php
	$photos = array(
		array("050413-34", "Nsys Framework"),
		array("050413-35", "Linuxsoft.cz"),
		array("050413-36", "Danix"),
		array("050413-37", "OfficePlus s.r.o"),
		array("050413-38", "COMMANDER SYSTEMS s.r.o."),
		array("050413-39", "Insight Strategy, a.s."),
		array("050413-40", "Kerio Technologies"),
		array("050413-41", "EPOS PRO, s.r.o."),
		array("050413-42", "Orange &amp; Green Solutions, s.r.o."),
		array("050413-43", "NETHOST s.r.o."),
		array("050413-44", "QCM, s.r.o."),
		array("050413-45", "REKONix s. r.o."),
		array("050413-46", "blue.point Solutions, s. r.o."),
		array("050413-47", "2GM s.r.o."),
		array("050413-48", "S.I.C. s. r.o."),
		array("050413-49", "Seznam.cz"),
		array("050413-50", "INTAC spol. s r.o."),
		array("050413-51", "Hry v Linuxu"),
	);
	$page->includeTemplate('photos', array('photos' => $photos));
?>

<p>Nenašli jste mezi fotkami stánek CZilly? Snad nám i bez důkazů uvěříte,
že u nás Firefox běžel od rána do večera. A kdyby ne, můžete se přesvědčit v
<a href="/czilla/fotky/linuxexpo-2005.php">samostatné fotogalerii</a>.</p>

<?php
	$page->includeTemplate('footer');
?>
