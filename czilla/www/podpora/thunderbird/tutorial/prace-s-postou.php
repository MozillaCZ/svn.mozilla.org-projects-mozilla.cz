<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Základy práce s elektronickou poštou');
	$page->setHeadline('Základy práce s elektronickou poštou','Úvod do Thunderbirdu, 2. část');
	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial, ovládání, základ');
	$page->setDescription ('Základní práce s Mozilla Thunderbirdem');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
	  <a href="./prace-s-postou2.php">Vytváření a&nbsp;používání podpisu</a></li>
	<li>Předchozí:
		<a href="./instalace.php">Instalace</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>Doufám, že v&nbsp;tomto bodě máte již úspěšně nakonfigurovaný Thunderbird 
a&nbsp;staženou elektronickou poštu. V&nbsp;následujícím kroku vás seznámím se 
samotným programem. Druhý díl se bude "točit" okolo základních 
tlačítek/voleb na <span class="nabidka">Liště pošty</span> a&nbsp;toho, 
jak si přečíst došlý e-mail.</p>

<div class="img-center">
<img src="../images/t2-obr01.png" alt="Mozilla Thunderbird - Hlavní okno" 
width="715" height="522" />
</div>

<h2 class="nice thunderbird">Tlačítka Lišty panelů</h2>

<ul>

<li><h3>Přijmout</h3>

<img src="../images/t2-obr02.png" alt="Přijmout" width="59" height="50" />

<p>Tlačítko <span class="nabidka">Přijmout</span> provede připojení 
programu Thunderbird k&nbsp;serveru elektronické pošty a&nbsp;stažení došlých
 e-mailových zpráv. Jestliže dojde ke stažení nové zprávy, zobrazí se 
 v&nbsp;pravém dolním rohu upozornění.</p></li>

<li><h3>Nová zpráva</h3>

<img src="../images/t2-obr03.png" alt="Nová zpráva" width="78" height="49" />

<p>Tlačítko <span class="nabidka">Nová zpráva</span> otevře nové okno,
 kde můžete napsat novou e-mailovou zprávu, přiložit přílohy a&nbsp;odeslat.</p></li>

<li><h3>Adresář</h3>

<img src="../images/t2-obr04.png" alt="Adresář" width="49" height="49" />

<p>Tlačítko <span class="nabidka">Adresář</span> otevře nové okno.
 V&nbsp;něm uvidíte, jaké e-mailové adresy máte ve složkách kontaktů 
 (nyní nejspíš žádné). Zde můžete přidávat nové kontakty. Detailně 
 si vše probereme ve 4.&nbsp;díle.</p></li>

<li><h3>Odpovědět</h3>

<img src="../images/t2-obr05.png" alt="Odpovědět" width="68" height="49" />

<p>Tlačítko <span class="nabidka">Odpovědět</span> otevře nové okno. 
V&nbsp;něm můžete poslat odpověď na označenou zprávu.</p></li>

<li><h3>Odpovědět všem (Odp. všem)</h3>

<img src="../images/t2-obr06.png" alt="Odpovědět všem" width="68" height="47" />

<p>Tlačítko <span class="nabidka">Odpovědět všem</span> otevře nové okno. 
V&nbsp;něm můžete poslat odpověď všem příjemcům, kterým byla označená zpráva spolu 
s vámi doručena.</p></li>

<li><h3>Přeposlat</h3>

<img src="../images/t2-obr07.png" alt="Přeposlat" width="55" height="47" />

<p>Tlačítko <span class="nabidka">Přeposlat</span> otevře nové okno 
a označenou zprávu připojí jako přílohu či přímou součást nové zprávy.</p></li>

<li><h3>Smazat</h3>

<img src="../images/t2-obr08.png" alt="Smazat" width="50" height="47" />

<p>Tlačítko <span class="nabidka">Smazat</span> vymaže označenou 
e-mailovou zprávu. Pokud jste příznivci klávesnice, můžete též použít 
klávesu <kbd>Del</kbd>.</p></li>

<li><h3>Nevyžádané</h3>

<img src="../images/t2-obr09.png" alt="Nevyžádané" width="68" height="47" />

<p>Tlačítko <span class="nabidka">Nevyžádané</span> označí zprávu 
jako nevyžádanou (spam). Detailně si tuto volbu probereme v&nbsp;5.&nbsp;díle.</p></li>

<li><h3>Tisk</h3>

<img src="../images/t2-obr10.png" alt="Tisk" width="52" height="47" />

<p>Tlačítko <span class="nabidka">Tisknout</span> provede vytištění 
označené zprávy.</p></li>

<li><h3>Zastavit</h3>

<img src="../images/t2-obr11.png" alt="Zastavit" width="52" height="48" />

<p>Tlačítko <span class="nabidka">Zastavit</span> slouží k&nbsp;zastavení 
aktuálně prováděné operace. Např. pokud chcete zrušit odesílání velké 
e-mailové zprávy (s&nbsp;přílohou) nebo zastavit stahování velkého 
množství e-mailových zpráv ze serveru. </p></li>

</ul>

<h2 class="nice thunderbird">Jak číst email</h2>

<div class="img-center">
<img src="../images/t2-obr14.png" alt="Složka Doručená pošta" 
width="715" height="522" />
</div>

<p>Po spuštění se program Thunderbird automaticky připojí k serveru 
elektronické pošty a&nbsp;podívá se, zda-li nejsou ve vaší schránce nové 
e-mailové zprávy. Ty pak stáhne do složky 
<span class="nabidka">Doručená pošta</span>. Tu naleznete na levé 
straně okna jako podsložku vašeho účtu (nejčastěji 
<span class="nabidka">Místní složky</span>). Klepněte na tuto složku 
a&nbsp;nové emaily se vám zobrazí na pravé straně okna.</p>

<p>Thunderbird u POP účtů kontroluje nové e-mailové zprávy 
každých 10 minut. Pokud si to nepřejete, můžete zvolit jiné 
nastavení (v&nbsp;nabídce 
<span class="nabidka">Nástroje -&gt; Nastavení účtů...</span>).</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
	  <a href="./prace-s-postou2.php">Vytváření a&nbsp;používání podpisu</a></li>
	<li>Předchozí:
		<a href="./instalace.php">Instalace</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
