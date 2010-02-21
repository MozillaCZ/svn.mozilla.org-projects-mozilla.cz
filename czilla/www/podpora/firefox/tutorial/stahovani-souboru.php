<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Stahování souborů ve Firefoxu');
	$page->setHeadline('Stahování souborů','Začínáme používat prohlížeč Firefox, 6. část');
	$page->setKeywords ('mozilla, firefox, prohlížeč, browser, začátečník, beginner, návod, tutorial, stažení, stahování, download');
	$page->setDescription ('Návod jak ve Firefoxu pracovat se Správcem stahování');	
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./tisk-stranek.php">Tisk stránek</a></li>
	<li>Předchozí:
		<a href="./historie.php">Procházení historií</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>
Správce stahování zobrazíte tak, že stisknete klávesovou zkratku 
<kbd>Ctrl</kbd>-<kbd>J</kbd>. Poté se vám zobrazí okno podobné 
následujícímu.</p>

<div class="img-center"><div class="img-c" style="width:400px"><img
	src="../images/t6-obr01.png"
	alt="Dialog Správce stahování"
	style="height:300px;width:400px" />
</div></div>

<p>Jedná se o&nbsp;Správce stahování prohlížeče Mozilla Firefox. Ten pokrývá dvě
funkce. Jednak zde můžete vidět aktuálně stahované soubory, a též přehled
již stažených souborů. Pokud se podíváte na obrázek nad tímto odstavcem,
jistě vás potěší příjemné uživatelské rozhraní.</p>

<div class="img-center"><div class="img-c" style="width:400px"><img
	src="../images/t6-obr02.png"
	alt="Dialog Správce stahování - výchozí cesta"
	style="height:300px;width:400px" />
</div></div>

<p>V označeném místě můžete vidět, kam se při výchozím nastavení ukládají 
stažené soubory. Klepnutím na ikonu či jméno otevřete tuto složku ve svém
oblíbeném správci souborů.</p>

<div class="img-center"><div class="img-c" style="width:400px"><img
	src="../images/t6-obr03.png"
	alt="Dialog Správce stahování - tlačítko na vymazání seznamu"
	style="height:300px;width:400px" />
</div></div>

<p>Tlačítko <span class="nabidka">Vyčistit</span> vymaže ze seznamu všechny 
záznamy o&nbsp;stažených souborech.</p>

<div class="img-center"><div class="img-c" style="width:400px"><img
	src="../images/t6-obr04.png"
	alt="Dialog Správce stahování - stahování souboru"
	style="height:300px;width:400px" />
</div></div>

<p>Na obrázku nad tímto odstavcem můžete vidět stahování "v akci". Jak jistě
sami vidíte, dialog ukazuje, jaký soubor stahujete, jakou rychlostí a&nbsp;jaká
část je již stažena. Můžete též klepnout na volbu 
<span class="nabidka">Zrušit</span>. Touto volbou
zrušíte stahování vybraného souboru.</p>

<div class="img-center"><div class="img-c" style="width:400px"><img
	src="../images/t6-obr05.png"
	alt="Dialog Správce stahování - volby"
	style="height:300px;width:400px" />
</div></div>

<p>Klepnutím na <span class="nabidka">Otevřít</span> otevřete stažený soubor 
ve výchozí aplikaci. Pokud není definována, Firefox se vás zeptá, 
čím by měl být otevřen.</p>

<p>Pokud stahujete často, možná se vám bude hodit rozšíření 
<a href="https://addons.mozilla.org/cs/firefox/addon/26" 
title="Download Statusbar: Stránka serveru Doplňky Mozilly">Download Statusbar</a>, 
které učiní vaše stahování příjemnější a&nbsp;snadnější na správu.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./tisk-stranek.php">Tisk stránek</a></li>
	<li>Předchozí:
		<a href="./historie.php">Procházení historií</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
