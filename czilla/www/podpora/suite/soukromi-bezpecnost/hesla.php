<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Hesla';
	$page->headline = array('Hesla','Soukromí a bezpečnost v Mozilla Suite, 4. část');

	$page->includeHeader();
?>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./scripty-zasuvne-moduly.html">Scripty a zásuvné moduly</a></li>
	<li>Předchozí:
		<a href="./vyskakovaci-okna.html">Vyskakovací okna</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<h2 class="nice mozilla">Čtvrtý krok - Hesla</h2>

<p>"Je častým omylem myslet si, že musíte být rychlejší než medvěd. Nemusíte - stačí být pouze rychlejší než váš pomocník." - neznámý režisér filmů o přírodě.</p>

<p>Hesla a PIN kódy se stala součástí našeho každodenního života. Bohužel, čím více hesel používáme, tím pravděpodobněji začneme používat ta samá hesla stále dokola, abychom je nezapomněli. Nevýhody tohoto přístupu z hlediska bezpečnosti jsou jasné: pokud se někdo zmocní jednoho vašeho hesla, pak může přistupovat do vaší poštovní schránky, diskusních skupin, bankovních účtů apod.</p>

<p>Proč tedy nepřinutit prohlížeč, aby si hesla pamatoval za nás? <span class="nabidka">Správce hesel</span> v Mozille se o to může postarat za vás.</p>

<div class="img-center"><div class="img-c" style="width:420px">
	<a href="../images/bezpecnost-hesla-predvolby.png"
	class="zoom"><img
	src="../images/bezpecnost-hesla-predvolby-m.png"
	title="Okno předvoleb pro hesla"
	alt="Okno předvoleb pro hesla"
	height="281" width="420" /></a>
</div></div>

<p>Samozřejmě, a co hackeři, kteří mohou hesla "ukrást" z prohlížeče? Samozřejmě, programátoři Mozilly jim krádeže hesel ztížili. Vedle toho, že je adresář vašeho profilu pokaždé jiný (proto přidali adresář typu "df745kdtk.slt" - má pokaždé jiné jméno, tudíž vede k vašemu profilu pokaždé jiná cesta), může Mozilla také šifrovat uložené informace. Přestože neexistuje nic takového jako absolutní bezpečí, stačí, abyste byli těžším cílem, než průměrný uživatel Internet Exploreru.</p>

<ul>
  <li><strong>Doporučená nastavení hesel jsou:</strong>:<br />
Pokud chcete, aby si Mozilla pamatovala hesla za vás, zvolte <span class="nabidka">Ukládat hesla ke stránkám, které vyžadují opětovné přihlášení</span> a <span class="nabidka">Při ukládání soukromých dat použít šifrování</span>.  <br /><br />
Pokud zaškrtnete volbu  <span class="nabidka">Při ukládání soukromých dat použít šifrování</span> (doporučeno), budete si také muset zvolit hlavní heslo.
  </li>
</ul>

<div class="img-center"><div class="img-c" style="width:420px">
	<a href="../images/bezpecnost-hesla-hlavni.png"
	class="zoom"><img
	src="../images/bezpecnost-hesla-hlavni-m.png"
	title="Nastavení hlavního hesla"
	alt="Nastavení hlavního hesla"
	height="281" width="420" /></a>
</div></div>

<p>Ujistěte se, že si vyberete heslo, které je snadné na zapamatování, avšak také bezpečné (např. ne jméno vašeho partnera nebo vaší loďky). Praxí prověřené pravidlo je, že používání kombinace čísel, písmen a symbolů (např. ~) je bezpečnější než používání pouhých číslic nebo písmen. Rozdíl v obtížnosti prolomit heslo je obrovský - pohybuje se zhruba od jedné minuty (při užití pouze písmen) po dobu jednomu roku (písmena, číslice a znaky). Když zadáte svoje hlavní heslo, Mozilla vám ukáže, jak je bezpečné. Čím je sloupec delší, tím je heslo bezpečnější.</p>

<p>Teď můžete namítnout "Ale když se někdo zmocní mého hlavního hesla, nebude také vědět všechna má další hesla?". Teoreticky ano, avšak ta osoba by potřebovala: a) znát vaše heslo a b) mít fyzický přístup k vašemu PC.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./scripty-zasuvne-moduly.html">Scripty a zásuvné moduly</a></li>
	<li>Předchozí:
		<a href="./vyskakovaci-okna.html">Vyskakovací okna</a></li>
</ul>
</div>

<?php
	$page->includeFooter();
?>
