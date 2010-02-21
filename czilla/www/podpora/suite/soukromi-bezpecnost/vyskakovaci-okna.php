<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Vyskakovací okna');
	$page->setHeadline('Vyskakovací okna','Soukromí a bezpečnost v Mozilla Suite, 3. část');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./hesla.php">Hesla</a></li>
	<li>Předchozí:
		<a href="./obrazky-bannery.php">Obrázky a bannery</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<h2 class="nice mozilla">Třetí krok - Vyskakovací (pop-up) okna</h2>

<p>"...záblesky rozumu vyskakují jako ostrostřelci" - Honore de Balzac</p>

<p>Kdyby byly všechna vyskakovací okna záblesky rozumu, patrně by většině uživatelů příliš nevadila jejich vlezlost. Naneštěstí tomu tak u většiny reklamních oken není. Ta nejotravnější se otevřou, když zavřete stránku a někdy i otevře několik dalších vyskakovacích oken, když ho zavřete.</p>

<p>Naštěstí obsahují <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> a Netscape 7 výborného správce vyskakovacích oken, jenž vám umožňuje blokovat okna, která se otevřou buď při vstupu na stránku nebo při jejím opuštění. Osobně si myslím, že nastavení Netscape 7 jsou lepší, než Mozilly, protože vám umožňují buď blokovat, nebo povolit všechna vyskakovací okna, kromě stránek, které sami určíte.</p>

<div class="img-center"><div class="img-c" style="width:420px">
	<a href="../images/bezpecnost-okna-predvolby.png"
	class="zoom"><img
	src="../images/bezpecnost-okna-predvolby-m.png"
	title="Okno předvoleb k vyskakovacím oknům"
	alt="Okno předvoleb k vyskakovacím oknům"
	height="281" width="420" /></a>
</div></div>

<ul>
  <li><strong>Doporučená nastavení předvoleb <span class="nabidka">Pop-up okna</span> jsou</strong>:<br />
  Zvolte <span class="nabidka">Blokovat popup okna</span> a <span class="nabidka">Zobrazit ikonu ve stavové liště prohlížeče</span>. </li>
</ul>

<p>Druhá volba je důležitá, protože některé stránky používají vyskakovací okna za účelem přihlášení se ke stránkám. Pokud jste těmto stránkám tato okna zablokovali, nebudou fungovat správně. V několika málo případech jsem si tohoto problému všimnul (internetové obchody, půjčovny aut). Normálně by blokování vyskakovacích oken v Mozille mělo blokovat pouze nevyžádaná okna, například ta, která vyskakují automaticky. Některé stránky však otevírají okna takovým způsobem, že je Mozilla považuje za nevyžádané (třeba se zpožděním), a tím pádem je blokuje. Pokud klepnete na odkaz a něco by se mělo dít, ale neděje, podívejte se do spodní pravé části vašeho prohlížeče, zda tam neuvidíte ikonu zablokovaného vyskakujícího okna:</p>

<div class="img-center">
<img src="../images/bezpecnost-okna-ikona.png" alt="Ikona" width="126" height="88" />
</div>

<p>Pokud se ikona objeví (musíte používat Mozillu 1.3 a výše nebo Netscape 7.01 a výše), dvojklepněte na ni a objeví se <span class="nabidka">Správce popup oken</span>. Klepnutím na tlačítko <span class="nabidka">Přidat</span> povolíte stránce, na které jste, otevírat vyskakující okna.</p>

<div class="img-center"><div class="img-c" style="width:210px">
	<a href="../images/bezpecnost-okna-vyjimky.png"
	class="zoom"><img
	src="../images/bezpecnost-okna-vyjimky-m.png"
	title="Okno výjimek k vyskakovacím oknům"
	alt="Okno výjimek"
	height="289" width="210" /></a>
</div></div>

<p>Obnovte stránku, na které jste a zkuste to znovu. Nyní by vše mělo fungovat.</p>

<h2 class="nice mozilla">Pro uživatele Netscape 7.x</h2>

<p>Správce vyskakovacích oken v Netscapu má přednastavených několik stránek Netscapu a AOL partnerů, kterým je otevírání vyskakovacích oken standardně povoleno. I tak je ale můžete snadno odstranit pomocí <span class="nabidka">Správce popup oken</span>. V hlavní nabídce zvolte <span class="nabidka">Nástroje -> Správce popup oken -> Spravovat popup okna</span> a objeví se vám dialog Správce popup oken. Tam můžete, pokud si to přejete, tyto stránky odstranit. (Dík za poukázání patří Zachariovi.)
</p>

<p><strong>Nevýhody</strong></p>

<p>V některých případech si můžete všimnout, že se vyskakovací okna neblokují, přestože jste toto nastavení zvolili. Je to proto, že existují mechanismy pro otevření vyskakovacích oken, které (zatím) Mozilla nerozpozná. Naštěstí je to málo častý jev.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./hesla.php">Hesla</a></li>
	<li>Předchozí:
		<a href="./obrazky-bannery.php">Obrázky a bannery</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
