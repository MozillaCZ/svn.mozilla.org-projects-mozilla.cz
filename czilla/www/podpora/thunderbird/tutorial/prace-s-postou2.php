<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Základy práce s elektronickou poštou, dokončení';
	$page->headline = array('Základy práce s elektronickou poštou, dokončení','Úvod do Thunderbirdu, 3. část');

	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial, ovládání, základ');
	$page->setDescription ('Základní práce s Mozilla Thunderbirdem');		

	$page->includeHeader();
?>

<div class="ipn-top">
<ul>
	<li>Následující:
	  <a href="./prilohy.html">Práce s&nbsp;přílohami a&nbsp;kontakty</a></li>
	<li>Předchozí:
		<a href="./prace-s-postou.html">Základy práce s&nbsp;poštou</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>Nyní byste měli být schopni získat došlé e-mailové zprávy. V&nbsp;tomto 
díle si ukážeme, jak napsat/odeslat e-mailovou zprávu s&nbsp;podpisem.</p>

<h2 class="nice thunderbird">Jak vytvořit podpis</h2>

<div class="img-center">
<img src="../images/t3-obr01.png" alt="Poznámkový blok" 
width="369" height="231" />
</div>

<p>Otevřete <span class="soubor">Poznámkový blok</span> nebo 
jiný program, který umožňuje ukládat soubory jako čistý text. Je čistě 
na vás, co chcete umístit do svého podpisu. Přinejmenším by měl obsahovat 
vaše jméno a&nbsp;kontakt na vás. Často se též přidává odkaz na soukromé či 
obchodní webové stránky. Až budete mít váš podpis hotov(a), uložte jej 
na libovolné místo na disku. </p>

<h2 class="nice thunderbird">Jak přidat podpis</h2>
<p>Otevřete program Thunderbird a&nbsp;jděte do nabídky 
<span class="nabidka">Nástroje -&gt; Nastavení účtu...</span>.</p>

<div class="img-center">
<img src="../images/t3-obr02.png" alt="Nastavení účtu" width="667" height="582" />
</div>

<ul>
<li>Označte v&nbsp;dialogu váš účet (na levé straně).</li>
<li>Zaškrtněte volbu <span class="nabidka">Připojovat tento podpis</span>.</li>
<li>Pomocí tlačítka <span class="nabidka">Vybrat...</span> zvolte umístění 
vašeho podpisu.</li>
<li>Klepněte na tlačítko <span class="nabidka">OK</span>.</li>
</ul>

<p>Jednoduché, že? Nyní můžete sami sobě poslat e-mailovou zprávu, abyste 
mohli zkontrolovat výsledek. Pokud nejste spokojeni, můžete podpis upravit. </p>

<h2 class="nice thunderbird">Jak napsat/odeslat e-mailovou zprávu</h2>

<p>V&nbsp;této části návodu vám ukáži pouze to, jak odeslat e-mailovou zprávu. 
Adresář a&nbsp;jiné "pokročilé" funkce ponechám do dalšího dílu.</p>

<div class="img-center">
<img src="../images/t3-obr03.png" alt="Mozilla Thunderbird" width="681" height="572" />
</div>

<p>Klepněte na tlačítko <span class="nabidka">Nová zpráva</span> na 
<span class="nabidka">Liště pošty</span>. Otevře se vám nové okno, 
kde můžete napsat vaši e-mailovou zprávu a odeslat ji.</p>

<div class="img-center">
<img src="../images/t3-obr04.png" alt="Psaní nové zprávy" width="640" height="473" />
</div>

<p>Jak vidíte, podpis je automaticky přidán do dolní části zprávy. Nad 
tento podpis napište to, co chcete poslat. Následně vyplňte e-mailové 
adresy osob, kterým chcete e-mailovou zprávu poslat. Tu zadejte na místo 
vedle <span class="nabidka">Komu:</span>. Postačí na toto místo klepnout 
myší a&nbsp;zobrazený kurzor vás ujistí, že jste klepli na správné místo.</p>

<p>Do pole <span class="nabidka">Předmět</span> vyplňte nadpis vaší 
e-mailové zprávy. Pokud jej nyní nevyplníte, program se vás při odesílání dotáže.</p>

<p>Nyní klepněte na tlačítko <span class="nabidka">Odeslat</span>.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
	  <a href="./prilohy.html">Práce s přílohami a&nbsp;kontakty</a></li>
	<li>Předchozí:
		<a href="./prace-s-postou.html">Základy práce s&nbsp;poštou</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeFooter();
?>
