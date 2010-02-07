<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zdeněk Bulín: Naprosto bez problémů…');
	$page->setDescription('Stáhl Firefox a už u něj zůstal. Taková byla cesta Zdeňka Bulína k modernímu prohlížeči.');
	$page->setKeywords('mozilla firefox přechod použitelný prohlížení stránek');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Naprosto bez problémů...</h1>

<p>Dobrý den,</p>

<p>po malém váhání, jestli nepočkat až na finální verzi jsem se včera
(17.&nbsp;8.&nbsp;04) rozhodl si stáhnout verzi 0.9.3 prohlížeče Firefox.
Jsem rád, že jsem tak učinil, protože jde o&nbsp;prohlížeč, který je naprosto bez
problémů použitelný.</p>

<p>Již od verze 1.4 používám Mozillu. To byla doba, kdy se na internetu
objevila zpráva, že Microsoft přestává nadále vyvíjet Outlook Express
a&nbsp;Internet Explorer nebude od další verze možné stáhnout samostatně. To mě
samozřejmě docela naštvalo a&nbsp;shodou okolností jsem na serveru Slunecnice.cz
narazil na odkaz na stažení Mozilly a&nbsp;tak jsem jí stáhnul. Byl jsem
překvapen jejím vzhledem a&nbsp;celkově tím, co umí, a&nbsp;tak jsem jí začal používat
a&nbsp;také jí vždy v&nbsp;nejnovější české verzi používám dodnes.</p>

<p>Po včerejším stažení to ale začíná vypadat, že začnu pro prohlížení
stránek používat Firefox a&nbsp;na poštu budu zatím používat nadále Mozillu,
protože Thunderbird mi zatím úplně nesedí a&nbsp;tak ještě počkám do doby, kdy se
Thunderbird přiblíží verzi&nbsp;1. Nebudu psát, že používám k&nbsp;prohlížení
stránek jen Mozillu nebo od teď Firefox, protože to není pravda. Pokud se mi
stránka nezobrazí korektně, tak použiji IE&nbsp;6, ale takových stránek je
naprosté minimum a&nbsp;stránky, které navštěvuji pravidelně, se zobrazují
správně v&nbsp;podstatě ve všech případech už teď. Děkuji vám za práci, kterou
děláte.</p>

<p class="sig">
	Zdeněk Bulín
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
		<strong>Zdeněk Bulín</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
