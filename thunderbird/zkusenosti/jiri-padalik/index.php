<?php
	require_once '../../inc/page.php';
	$page->setTitle('Jiří Padalík: Proč Thunderbird?');
	$page->setDescription('Jiří Padalík opustil Outlook a začal používat Thunderbird. Objevil jeho bezpečnost, rozšiřitelnost a uživatelskou podporu');
	$page->setKeywords('mozilla thunderbird přechod poštovní klient legálně zdarma');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Proč Thunderbird?</h1>

<p>Do nedávné doby jsem používal Microsoft Outlook, ale po nainstalování
Mozilla Thunderbird, původně za účelem vyzkoušení něčeho nového, jsem se od
něj již zpět nevrátil. Thunderbird pro mě představuje jednoduchý
a&nbsp;účelný e-mailový klient. A&nbsp;co více, je zdarma. A&nbsp;to je
velký rozdíl oproti Microsoft Outlook, který přeci jen stojí nějaké
peníze.</p>

<p>Microsoft Outlook pro mě představoval náročný program instalovaný spolu
s&nbsp;Microsoft Office. Thunderbird má, narozdíl od Outlooku, několik
malých, ale přesto podstatných výhod. Poskytuje mi daleko více jistoty než
Outlook, protože v&nbsp;něm nejsou zásadní bezpečnostní chyby, které by
umožňovali cizímu člověku dostat se do mého počítače. Netvrdím, že je to
program bezchybný, ale je určitě bezpečnější.</p>

<p>Thunderbird je velice lehce rozšiřitelný o&nbsp;všelijaké doplňky, které
v&nbsp;základní instalaci nejsou. Jsou k&nbsp;nalezení na Internetu
a&nbsp;jejich instalace je velice jednoduchá. Thunderbird také umožňuje
kompletní změnu vzhledu. Vlastně všechno si zde lze změnit a&nbsp;doplnit
podle vaší potřeby a&nbsp;vkusu. Další výhodou je jednoduchý systém třídění
zpráv. Ochrana proti spamu je také na vynikající úrovni, na dobré úrovni je
i&nbsp;uživatelská podpora.</p>

<p>Další nespornou výhodou je jednoduché oddělení a&nbsp;nastavení různých
e-mailových účtů. Já mám osobně tři účty, ze kterých přijímám zprávy
a&nbsp;každý účet si nakonfiguruji podle svých potřeb. Z&nbsp;některého účtu
mi stačí stahovat zprávy 1x&nbsp;za den, z&nbsp;některého zase každých
5&nbsp;minut. V&nbsp;nastavení lze toto vše jednoduše zajistit.</p>

<p>Prozatím u&nbsp;mne vyhrál Thunderbird pro svou jednoduchost
a&nbsp;rozšiřitelnost na plné čáře. Jedinou změnou mailového klienta, kterou
provedu, pro mě bude nová, lepší verze Thunderbirdu.</p>

<p class="sig">
	Jiří Padalík
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
		<strong>Jiří Padalík</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
