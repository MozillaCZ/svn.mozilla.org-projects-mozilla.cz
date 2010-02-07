<?php
	require_once '../../inc/page.php';
	$page->setTitle('Tomáš Brabenec: Směji se nad problémy ostatních');
	$page->setDescription('Tomáš Brabenec se přes Mozilla Suite dostal k Firefoxu a je s ním spokojený.');
	$page->setKeywords('mozilla firefox standardy webové stránky tvorba spokojenost');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Směji se nad problémy ostatních</h1>

<p>Víte, když jsem začínal trošku profesionálněji s&nbsp;Internetem (zhruba
v&nbsp;roce 1997 a slovem profesionálněji myslím, když jsem začínal dělat
internetové stránky), věděl jsem o&nbsp;jiných nástrojích než
<abbr title="Internet Explorer" lang="en">IE</abbr>
pouze z&nbsp;doslechu. Vůbec jsem netušil, že existují nějaké standardy,
a&nbsp;stránky, které jsem kdysi vytvořil, podle toho také vypadaly :-)</p>

<p>Věřím, že kdybych předtím věděl to, co teď, nebo měl alespoň po ruce
&quot;inteligentní&quot; prohlížeč, asi by všechno vypadalo jinak. Když jsem
se pak později dostal k&nbsp;Netscape a&nbsp;koukl jsem na svůj výtvor
v&nbsp;tomto prohlížeči, přímo jsem se zhrozil. V&nbsp;té době jsem
o&nbsp;trošku více otevřel oči. Sice jen o&nbsp;trošku, ale přeci. Stále
jsem ale zůstal
u&nbsp;<abbr title="Internet Explorer" lang="en">IE</abbr>.

O&nbsp;něco později se mi do rukou dostala jedna z&nbsp;prvních verzí
Mozilly. Nainstaloval jsem si ji a&nbsp;i přes nepřívětivou grafickou
podobu, kterou zdědila po svém původci, jsem si ji oblíbil (ani nevím proč,
v&nbsp;té době to byla spíš averze ke všemu od Microsoftu). Později jsem
objevil možnost její skinovatelnosti, což se mi velmi líbilo. Přiznávám, že
občas jsem zuřil zlostí, když jsem na některé stránky musel použít
<abbr title="Internet Explorer" lang="en">IE</abbr>.
Zprvu jsem nadával na Mozillu, ale časem, když jsem o&nbsp;standardech
a&nbsp;tvorbě webu věděl víc a&nbsp;víc, jsem si procházel zdrojové kódy
stránek, které pod Mozillou nechodily a&nbsp;snažil jsem se psaním mailů
upozornit webmastery na tu a&nbsp;tu chybu v&nbsp;kódu, kvůli které stránka
v&nbsp;Mozille prostě nešlape. Většinou bohužel bez úspěchu.</p>

<p>I&nbsp;přes velkou spokojenost s&nbsp;Mozillou jsem z&nbsp;ní měl pořád
ale pocit jakési těžkopádnosti, prostě pořád mi tam něco nesedělo,
a&nbsp;nemohl jsem přijít na to co. V&nbsp;té době se již na Internetu
objevovaly zmínky o&nbsp;jakémsi prohlížeči Phoenix. Zprvu jsem tomu nějak
nevěnoval pozornost, ale nakonec jsem si řekl, že jej zkusím. Byl jsem
strašně překvapen, že Phoenix (v&nbsp;té době již Firebird) je vlastně
Navigator z&nbsp;balíku Mozilla. V&nbsp;tu chvíli jsem se pro tento projekt
nadchl a&nbsp;s každou novější verzí, ve které byla ta a&nbsp;ta
vychytávka, jsem byl spokojenější a&nbsp;spokojenější.</p>

<p>Dnes, kdy tento projekt již nese název Firefox, k&nbsp;dispozici je už
verze 1.0, a&nbsp;to i&nbsp;v českém jazyce, nechybí mi v&nbsp;tomto směru
ke spokojenosti vůbec nic.</p>

<p>Jen se vždy pousměji nad problémy ostatních, když se rozčilují, že jim
při spuštění
<abbr title="Internet Explorer" lang="en">IE</abbr>
nabíhá nějaká erotická či jiná stránka a&nbsp;že nejde změnit, nebo že
pořád dokola bojují s&nbsp;internetovými červy a&nbsp;podobnou havětí. Rád
tyto problémy poslouchám a&nbsp;s úsměvem na rtech říkám: <em>&quot;Už jsi
zkusil Firefox?&quot;</em></p>

<p class="sig">
	<a href="http://www.brabenec.net/">Tomáš Brabenec</a>
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
		<strong>Tomáš Brabenec</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
