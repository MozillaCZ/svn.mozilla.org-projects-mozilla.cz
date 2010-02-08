<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zdeněk Koch: Dejte šanci Thunderbirdu');
	$page->setDescription('Zdeněk Koch o svém přechodu z Outlook Express na Thunderbird');
	$page->setKeywords('mozilla thunderbird přechod poštovní klient legálně zdarma');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Dejte šanci Thunderbirdu</h1>

<p>Jmenuji se Zdeněk Koch a&nbsp;jsem vysokoškolský student. Je to tak asi
2&nbsp;roky, co jsem začal používat e-mail. Po roce už bylo neúnosné
obsluhovat několik emailových účtů přes webové rozhraní. Samozřejmě jsem
využil Outlook Express, který je součástí instalace Windows. Nebudu tu moc
přehánět, ale dalo mi asi tak týden práce, než jsem vůbec nastavil e-mailové
účty pro stahování pošty a&nbsp;poznal některé funkce tohoto pošťáka.</p>

<p>Samozřejmě jsem otestoval i&nbsp;velkého bratra
z&nbsp;MS&nbsp;Office. Nevypadal špatně, spousta funkcí, vcelku
i&nbsp;dobře graficky propracovaný, no ale ta doba, než to celé naběhlo, to
jsem se rovnou mohl koukat na poštu pomocí prohlížeče. Takže od toho ruce
pryč! Shodou náhod však moje "PCčko" začalo protestovat a&nbsp;milá Windows
směřovala do křemíkového nebe. V&nbsp;naději jsem provedl "zálohování". Co
mě zděsilo, bylo krkolomné zálohování (export) celé pošty, kontaktů,
e-mailových účtů. Po obnově systému jsem opravdu věřil, že půjde importovat
vše zpátky do Outlook Express &ndash; "ani ránu, milej Outlooku, takže končím
s&nbsp;tebou!"</p>

<p>Nastává úvaha: "Proč předhazovat člověku něco, co není dobré pro každého?
Člověk přece může posuzovat a&nbsp;vybírat alternativy."</p>

<p>Po několika doporučeních od kamarádů si ke mně "Hromopták" našel cestu.
Ihned po instalaci a&nbsp;prvním spuštění si u&nbsp;mě vydobyl dobré mínění.
Musím říct, že ať jsem hledal jakoukoliv funkci, tak jsem ji ihned našel. Na
první pohled i&nbsp;na ty další opravdu přehledné, snadné nastavování.
Zkrátka super!</p>

<p class="sig">
	Zdeněk Koch
</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující odkazy</h2>
<?php
	$page->includeTemplate('stories');
?>
</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<a href="../">Zkušenosti</a> &gt;
		<strong>Zdeněk Koch</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
