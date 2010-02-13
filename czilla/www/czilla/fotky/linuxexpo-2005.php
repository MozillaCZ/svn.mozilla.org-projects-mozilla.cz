<?php
	require_once '../../inc/page.php';
	$page->setTitle('LinuxExpo 2005');
	$page->setHeadline('LinuxExpo 2005','12.-14. 4. 2005');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>
<p>Ve dnech 12.&ndash;14. 4. 2005 se CZilla zúčastnila výstavy a konference
<a href="http://www.linuxexpo.cz/">LinuxExpo 2005</a>. Díky
<a href="http://www.linuxsoft.cz/">Linuxsoftu</a> jsme měli k dispozici
vlastní stánek v rámci Free Linux Zone a zde jsme představovali produkty Mozilla.org,
radili uživatelům, odpovídali na jejich zvídavé otázky a v neposlední řadě
navazovali nové kontakty.</p>
<p>Zúčastnili jsme se i konferenční části LinuxExpa, kde David Majda přednesl
krátkou přednášku Mozilla pro vývojáře, ve které představil architekturu Mozilly
a vysvětlil základy programování aplikací nad ní.</p>
<p>Potkat jste nás mohli také na neoficiálním večerním programu, konkrétně
<a href="http://www.linuxsoft.cz/article.php?id_article=803">Mandrakesession</a>,
kde jsme byli zastoupeni ve srovnatelném počtu, jako příznivci samotného
Mandraku.</p>
<p>Celá akce LinuxExpo se po všech stránkách velice povedla, uživatelé si
většinou námi propagované produkty chválili a osobní setkání snad všech lidí,
kteří jsou okolo CZilly sdruženi, stmelilo kolektiv a nepochybně povede k jeho
dalšímu rozšiřování.</p>

<?php
	$photos = array(
		array("050412-01", "Rozhovor s jedním z prvních návštěvníků."),
		array("050412-02", "Láďa Odvářka, Pawell a náš stánek."),
		array("050413-01", "Plathel cosi kutí s notebookem, Lukáš Petrovický by mu do toho nejraději sáhnul sám."),
		array("050413-02", "Pawell vysvětlující."),
		array("050413-03", "GeBu a usmívající se Hoween."),
		array("050413-04", "Plathel oslovuje návštěvníky."),
		array("050413-05", "A tohle je David Majda."),
		array("050413-06", "GeBu v diskuzi s organizátorem InstallFestu Petrem Kolorosem."),
		array("050413-07", "MarLiss se na nás přišel podívat."),
		array("050413-08", "Mik nevěřícně zírá na Thunderbird na Linuxu."),
		array("050413-09", "Pawell zámečníkem. Nutno ovšem podotknout, že slečny si nakonec poradily samy."),
		array("050413-10", "Kepi si asi říká, jaký je ten Firefox úžasný."),
		array("050413-11", "GeBu kupuje od Pawlla trička."),
		array("050413-12", "Sličná hosteska v rozpacích nad našimi aplikacemi."),
		array("050413-13", "Lukáš Petrovický nejspíš vysvětluje, jaká skvělá věc jsou rozšíření..."),
		array("050413-14", "...což se mu asi podařilo a proto se usmívá."),
		array("050413-15", "Na výstavě bylo plno."),
		array("050413-16", "Hosteska už vnutila GeBuovi své materiály."),
		array("050413-17", "GeBu rozmlouvá s Františkem Huckem a Tomášem Krmelou, v pozadí svačí Martin Hassman."),
		array("050413-18", "A na tenhle plakát jsme lákali návštěvníky."),
		array("050413-19", "Pawell, váš lokalizátor Firefoxu."),
		//array("050413-20", "Copak nás to asi rozesmálo?"),
		array("050413-21", "Mezi notebooky je vidět vystavený certifikát o adopci pand."),
		array("050413-22", "Lukáš Petrovický, David Majda, Pawell a naše oblíbená hosteska."),
		array("050413-23", "Gecko najdete i tam, kde ho čekáte nejméně."),
		array("050413-24", "Účastníci Mandrakesession."),
		array("050413-25", "Přišel i šéfredaktor LinuxEXPRESu Lukáš Zapletal."),
		array("050413-26", "Adam Přibyl přemítá nad jídelním lístkem (zbytečně, jídlo dostal stejně jiné)."),
		array("050413-27", "Ivo David, který se stará o Technickou evangelizaci"),
		array("050413-28", "AHA a Pawell."),
		array("050413-29", "František Hucek z LinuxSoft.cz."),
		array("050413-30", "Komupak to asi nasloucháme?"),
		array("050413-31", "Pavel Cvrček, lokalizátor Mozilla Suite, byl stále za objektivem, pročež byl vyfocen druhým foťákem."),
		//array("050413-32", "...a umí i dělat oči"),
		//array("050413-33", "Rezervováno pro Lukáše Petrovického."),
		array("050414-01", "Firefox zaujal příslušníky všech generací."),
		//array("050414-02", "(nevim co duchaplneho napsat)"),
		array("050414-03", "Pawell a Met v rozmluvě s Pavlem Petricem (uprostřed), lokalizátorem Nvu."),
		array("050414-04", "Napravo je Gobbet, známý to účastník fóra."),
		array("050414-05", "Plakát CZilly, vedle ocenění od SW novin a fotky adoptovaných pand."),
		//array("050414-06", "(zahadny clovek v sacku)"),
		//array("050414-07", "David Majda se protahuje."),
		array("050414-08", "David Majda zahajuje přednášku Mozilla pro vývojáře..."),
		array("050414-09", "...a vykládá a vykládá"),
		array("050414-10", "Návštěvnost přednášky byla víc než slušná."),
		array("050414-11", "Uprostřed procesu vyjadřování nějaké náročné myšlenky."),
	);
	$page->includeTemplate('photos', array('photos' => $photos));
?>

<p>Další fotky z akce najdete v galerii <a href="/czilla/fotky/linuxexpo-2005-firefox.php">Firefox na LinuxExpu 2005</a>.</p>

<?php
	$page->includeTemplate('footer');
?>
