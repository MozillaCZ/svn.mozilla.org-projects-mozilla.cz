<?php
	require_once '../../inc/page.php';
	$page->setTitle('Lukáš Janoušek: Thunderbird šetří můj čas i nervy');
	$page->setDescription('Lukáš Janoušek o tom, jak mu Thunderbird šetří čas');
	$page->setKeywords('mozilla thunderbird poštovní klient čas legálně zdarma');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Thunderbird šetří můj čas i nervy</h1>

<p>Ahoj. Jmenuji se Lukáš a&nbsp;je mi 22 let. Pokládám se za docela
zaměstnaného člověka (studuji 3.&nbsp;ročník VŠ s&nbsp;ekonomickým
zaměřením, provozuji firmu na tvorbu webových stránek a&nbsp;k&nbsp;tomu
ještě pracuji jako Student Brand Manager pro významnou společnost
vyrábějící energetický nápoj). Jako takový trávím vyřizováním elektronické
pošty opravdu dost času. Thunderbird se mi stal spolehlivým partnerem,
který mi nejen pomůže ušetřit cenné desítky minut.</p>

<p>Dříve jsem používal Outlook Express, ale s&nbsp;tímto programem jsem
vůbec nebyl spokojený a&nbsp;vlastně díky němu jsem zanevřel na čas na
poštovní klienty a&nbsp;poměrně dlouhou dobu používal pouze nepohodlné
webové rozhraní. O&nbsp;Thunderbirdu jsem se dozvěděl od kamaráda, který mi
doporučil, ať ho vyzkouším. </p>

<p>Příjemně mě překvapila jednoduchost instalace. Vše bylo intuitivní
a&nbsp;rychlé. S&nbsp;orientaci v prostředí jsem od začátku neměl sebemenší
problémy, rozvržením (layoutem) se Thunderbird přesně trefil do mého
vkusu.</p>

<p>V&nbsp;současné době používám Thunderbird již několik měsíců a&nbsp;nejvíce
si na něm cením tří vlastností: velmi kvalitní integrovaný antispamový filtr,
možnost spravovat více účtu najednou, možnost filtrace přijatých zpráv do
různých složek dle mnohých kriterií a&nbsp;možnost řazení zpráv do vláken
podle toho, jak probíhal dialog s&nbsp;dotyčným adresátem. To jsou pro mě
klíčové vlastnosti, které mi pomáhají velice zefektivnit práci
s&nbsp;elektronickou poštou a&nbsp;ušetří mi tak čas i&nbsp;nervy. Škoda,
že Thunderbird není více medializován, já ho mohu všem jen doporučit!</p>

<p class="sig">
	Lukáš Janoušek
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
		<strong>Lukáš Janoušek</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
