<?php
	require_once '../../inc/page.php';
	$page->setTitle('Jan Bína: Thunderbird na Linuxu i Windows');
	$page->setDescription('Jan Bína o své zkušenosti se snadnou přenositelnosti pošty Thunderbirdu mezi více PC');
	$page->setKeywords('mozilla thunderbird přechod poštovní klient legálně zdarma');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Thunderbird na Linuxu i&nbsp;Windows</h1>

<p>Na Netscape jsem přešel před asi pěti lety (nebo už je to možná
i&nbsp;víc) z&nbsp;Outlooku kvůli jedné věci. V&nbsp;tehdejší době měl
Outlook pro mě naprosto nepoužitelnou správu kontaktů, kterých jsem měl již
tehdy hodně &ndash; jednak tehdy uměl třídit pouze podle jména a&nbsp;jednak nutil
uživatele vybírat kontakty myší (když jsem jich měl kolem 100, bylo to
docela únavné pořád myšovat na správný mail). Přezdívky, chytání se na
jakýkoli psaný kus adresy atd. &ndash; to bylo tehdy pro mě hlavní.</p>

<p>U&nbsp;Thunderbirdu si cením především formátu ukládání mailů
a&nbsp;profilů a&nbsp;jejich přenositelnosti, protože musím často pendlovat
mezi více počítači. Mám na všech počítačích dual boot &ndash; Linux
a&nbsp;Windows. Díky tomu, že Thunderbird bez problémů funguje v obou
prostředích, mám veškerou poštu (profil) nasměrovánu na šuplíkový disk,
který pouze přenáším s&nbsp;sebou a&nbsp;kdekoli, v&nbsp;jakémkoli prostředí
mám po ruce kompletní poštu a&nbsp;stejné ovládání. No a&nbsp;už jsem si
prostě zvykl.</p>

<p>Navíc jsem teď našel oproti Netscapu (myslím ve verzi&nbsp;7)
v&nbsp;Thunderbirdu konečně dobrou správu více účtů, lepší grafickou práci
s&nbsp;přílohami a&nbsp;jejich vybírání (naráz několik pomocí
<kbd>Shift</kbd> a&nbsp;<kbd>Ctrl</kbd>), takže jsem opravdu velmi spokojený
uživatel.</p>

<p class="sig">
Jan Bína
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
		<strong>Jan Bína</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
