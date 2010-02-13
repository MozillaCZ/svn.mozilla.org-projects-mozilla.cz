<?php
	require_once '../../inc/page.php';
	$page->setTitle('LinuxExpo a Open Government 2006');
	$page->setHeadline('LinuxExpo a Open Government 2006','10.-12. 4. 2006');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>
<p>Ve dnech 10.&ndash;12. 4. 2006 se CZilla zúčastnila výstavy a konference
<a href="http://www.linuxexpo.cz/">LinuxExpo 2006</a> a přidružené konference
<a href="http://www.oss.cz/opengovernment">Open Government 2006</a>.</p>

<p>Díky spolupráci s neziskovou organizací <a href="http://www.liberix.cz/">Liberix</a>, o.p.s
měla CZilla na LinuxExpu k dispozici vlastní stánek v rámci Free &amp; Open Zone,
kde jsme představovali produkty Mozilla.org, radili uživatelům, odpovídali
na jejich zvídavé otázky a v neposlední řadě navazovali nové kontakty.
Zúčastnili jsme se i konferenční části LinuxExpa, kde měl David Majda krátkou přednášku
Vývojová platforma Mozilla, ve které představil architekturu Mozilly a běhové prostředí XULRunner.</p>

<p>Na konferenci Open Government, kterou pořádalo
<a href="http://www.micr.cz/">Ministerstvo informatiky ČR</a>
ve spolupráci s neziskovou organizací
<a href="http://www.oss.cz/" title="Společnost pro výzkum a podporu Open Source">OSS Aliance</a>,
vystoupil se svým příspěvkem
<a href="http://www.nitot.com/mozilla/prague-2006/mozilla-prague.html">Mozilla and the Public Sector</a>
i prezident <a href="http://www.mozilla-europe.org/cs/" title="Titulní stránka | Mozilla Europe">Mozilla Europe</a>
<a href="http://standblog.org/" hreflang="en" title="Standblog - Tristan Nitot sur les standards du W3C, les navigateurs et la technologie">Tristan Nitot</a>.

<p>Potkat jste nás mohli také na neoficiálním večerním programu v restauraci
<a href="http://www.ferdinanda.cz">Ferdinanda</a>,
kde jsme se setkali s vývojáři rozšíření
<a href="http://www.allpeers.com/blog/">AllPeers</a>.</p>

<?php
	$photos = array(
		array('060409-01', 'Příprava na konferenci<br/> Open Government 2006.'),
		array('060410-01', 'Ministryně Dana Bérová zahajuje konferenci.'),
		array('060410-02', 'Tristan Nitot přednáší I.'),
		array('060410-03', 'Zaplněný sál I.'),
		array('060410-04', 'Zaplněný sál II.'),
		array('060410-05', 'Tristan Nitot přednáší II.'),
		array('060410-06', 'U stánku na LinuxExpu.'),
		array('060410-07', 'Naše sličná hosteska David.'),
		array('060410-08', 'Lukáš s Plathelem testují prezentaci.'),
		array('060410-09', 'Naše sličná hosteska Lukáš.'),
		array('060410-10', 'Společné foto u stánku.'),
		array('060410-11', 'Propagační plakát s Thunderbirdem.'),
		array('060410-12', 'Večerní program - na úvod večeře I.'),
		array('060410-13', 'Večerní program - na úvod večeře II.'),
		array('060410-14', 'TheZero zezadu...'),
		array('060410-15', 'CZilla z nadhledu...'),
		array('060410-16', 'Dorazili AllPeers,<br/>nutná změna zasedacího pořádku I.'),
		array('060410-17', 'Dorazili AllPeers,<br/>nutná změna zasedacího pořádku II.'),
		array('060410-18', 'Bohdan Milar.'),
		array('060410-19', 'David píše zprávičku I.'),
		array('060410-20', 'Bohdan, Ivo a Lukášova hlava.'),
		array('060410-21', 'Lukáš a vývojáři z AllPeers.'),
		array('060410-22', 'ZvědaváOliheň a Marrliss.'),
		array('060410-23', 'David píše zprávičku II.'),
		array('060410-24', 'AllPeers diskutují s Plathelem.'),
		array('060410-25', 'Tajná porada &quot;vedení&quot;.'),
		array('060410-26', 'Covex, Met a Plathel.'),
		array('060410-27', 'Lukáš a vývojář z AllPeers.'),
		array('060410-28', 'Methew, Celdric (vedení AllPeers)<br/> a Tristan Nitot.'),
		array('060410-29', 'Diskuze v plném proudu.'),
		array('060410-30', 'Lukášův již druhý steak.'),
		array('060410-31', 'Vývojový tým AllPeers.'),
		array('060410-32', 'Tristan Nitot má dobrou náladu.'),
		array('060410-33', 'Lukáš a jeho oblíbený nápoj.'),
		array('060410-34', 'ZvědaváOliheň.'),
		array('060410-35', 'S krytkou to nefotí...'),
		array('060410-36', 'Diskuze o nových stránkách I.'),
		array('060410-37', 'Met, Plathel a plechovky od CocaColy.'),
		array('060410-38', 'Ivo David a ostatní.'),
		array('060410-39', 'Diskuze o nových stránkách II.'),
		array('060410-40', 'drAcOniS.'),
		array('060411-01', 'Oliheň, Lukáš a samolepky.'),
		array('060412-01', 'Přednáška Davida Majdy I.'),
		array('060412-02', 'Přednáška Davida Majdy I.'),
		array('060412-03', 'David Majda přednáší I.'),
		array('060412-04', 'David Majda přednáší II.'),
		array('060412-05', 'Zcela zaplněný sál.'),
		array('060412-06', 'David zodpovídal po přednášce <br/>i individuální dotazy.'),
	);
	$page->includeTemplate('photos', array('photos' => $photos));
?>

<?php
	$page->includeTemplate('footer');
?>
