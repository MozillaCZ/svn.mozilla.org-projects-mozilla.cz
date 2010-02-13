<?php
	require_once '../../inc/page.php';
	$page->setTitle('Fosdem 2006');
	$page->setHeadline('Fosdem 2006','25. - 26. 2. 2006');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>

<?php
	$photos = array(
		array("060225-01", "Tristan Nitot &ndash; prezident Mozilla Europe <br/> při rozhovoru pro televizi."),
		array("060225-02", "Pascal Chevrel (uprostřed) &ndash; tajemník Mozilla <br/> Europe a španělský lokalizační tým."),
		array("060225-03", "Stánek Mozilla Europe."),
		array("060225-04", "David Baron &ndash; pan Gecko hacker."),
		array("060225-05", "Zbigniew Braniecki &ndash; člen polského l10n týmu <br/>a vývojář Flocku si připravuje svoji přednášku."),
		array("060225-06", "Zbigniew Braniecki přednáší o Flocku."),
		array("060225-07", "David Baron, v pozadí Tristan Nitot"),
		array("060225-08", "Rober Kaiser (vlevo) po své přednášce<br/> o SeaMonkey."),
		array("060225-09", "Alex Fritze &ndash; vývojář komunikačního<br/> SIP klienta ZAP."),
		array("060225-10", "Branislav Rozbora (vlevo) a Vlado Valaštiak <br/> &ndash; kolegové ze slovenského týmu."),
		array("060225-11", "Peter Van der Beken &ndash; správce DOM a XSLT modulu a  <br/> člen správní rady Mozilla Europe."),
		array("060225-12", "Španělský lokalizační tým."),
		array("060225-13", "Tristan Nitot, Gervase Markham &ndash; <br/>člen Mozilla Foundation, a David Baron "),
		array("060225-14", "Zbigniew Braniecki a jeho partnerka <br/> Anna Białkowska při rozhovoru s Paul Kimem"),
		array("060225-15", "Paul Kim &ndash; zástupce Mozilla Corporation <br/> zodpovědný za marketing."),
		array("060225-16", "Ludovic Hirlimann (vlevo) <br/> vývojář prohlížeče Camino"),
		array("060225-17", "Peter Van der Beken, Alex Fritze <br/>a lokalizátoři"),
		array("060225-18", "Stůl hlavních Mozillistů &ndash; uprostřed zády <br/> Matthew Gertner z AllPeers."),
		array("060225-19", "Lukáš Petrovický (vlevo) a Vlado Valaštiak"),
		array("060225-20", "Christoph Safferling &ndash; Phd. student ekonomie <br/> zkoumající ekonomické otázky Open Source."),
		array("060225-21", "Christoph Safferling a jeho mušle."),
		array("060225-22", "Video ze společné večeře.","avi","jpg"),
		array("060226-01", "David Baron přednáší o změnách v Gecku."),
		array("060226-02", "Vývojáři Flocku o Flocku a Mozille."),
		array("060226-03", "Alex Fritze demonstruje funkčnost ZAPu."),
		array("060226-04", "Daniel Kirsch &ndash; německý vývojář prezentuje <br/>svou komerční aplikaci postavenou na Mozille."),
		array("060226-05", "Snaha o navázání online spojení <br/> s Axelem Hechtem  &ndash; správcem lokalizace."),
		array("060226-06", "Martin Creutziger (uprostřed) &ndash; německý lokalizátor <br/>se snaží navázat spojení na svém Macu."),
		array("060226-07", "Anna Białkowska chatuje s Axelem Hechtem <br/> alespoň přes IRC"),
		array("060226-08", "Gervase Markham a Zbigniew Braniecki <br/>zahajují lokalizační meeting."),
		array("060226-09", "Adrian Kalla (vpředu) &ndash; polský lokalizátor  <br/> a zátiší s kabely."),
		array("060226-10", "Jednotliví lokalizátoři se představují."),
		array("060226-11", "Vlado Valaštiak a Branislav Rozbora."),
		array("060226-12", "Jednotliví lokalizátoři se stále <br/> představují &ndash; v popředí Rober Kaiser"),
		array("060226-13", "Simon Montagu &ndash; správce I18N modulu"),
		array("060226-14", "Gervase Markham a Zbigniew Braniecki <br/>při lokalizačním meetingu."),
		array("060226-15", "Brian King &ndash; vývojář Mozdev.org a člen <br/>irského lokalizačního týmu."),
		array("060226-16", "Axel Hecht online z Berlína."),
		array("060226-17", "Dwayne Bailey &ndash; vedoucí lokalizace  <br/> Open Source do afrických jazyků <br/>  představuje projekt Pootle."),
		array("060226-18", "Paul Kim informuje o plánech <br/>Mozilla Corporation v oblasti marketingu."),
	);
	$page->includeTemplate('photos', array('photos' => $photos));
?>

<?php
	$page->includeTemplate('footer');
?>
