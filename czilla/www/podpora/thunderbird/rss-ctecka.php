<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'RSS čtečka v Thunderbirdu';
	$page->headline = array('RSS čtečka v Thunderbirdu','Návod jak používat RSS čtečku v Thunderbirdu');

	$page->setKeywords('podpora, nápověda, pomoc, návod, mozilla, thunderbird, pošťák');
	$page->setDescription('Návod jak používat RSS čtečku v Thunderbirdu');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links'); 
	$page->addSideBox('tips','thunderbird');

	$page->includeHeader();
?>

<p>Dnes již prakticky každý významnější web nabízí 
<abbr title="Really Simple Syndication">RSS</abbr> kanál, což je malý soubor,
který se do vaší čtečky pravidelně stahuje a&nbsp;ta na jeho základě zjistí,
zda se na sledovaném webu neobjevil nový článek, příspěvek či nová verze
vašeho oblíbeného programu. Pro představu uvedu příklad: Zajímáte se
o&nbsp;fotografování a&nbsp;často navštěvujete ruzdné fotoblogy. V&nbsp;takovém
fotoblogu věšinou není každý den nějaká nová fotka, ale nová fotka přibyde
například za týden, měsíc. Pokud takových fotoblogů navštěvujete více je 
zbytečné každý den hledat nové fotografie na stránkách, ale přidat si 
<abbr title="Really Simple Syndication">RSS</abbr> fotoblogu (pokud má
<abbr title="Really Simple Syndication">RSS</abbr>) do vaší 
<abbr title="Really Simple Syndication">RSS</abbr> čtečky.
Takto můžete mít například 50 fotoblogů ve čtečce a&nbsp;okamžitě se dozvíte,
kde je nějaká nová fotka.</p>

<h2>Vytvoření RSS účtu</h2>
<p>Poštovní klient 
<a href="/produkty/thunderbird/" 
 title="Mozilla Thunderbird: Stránka o produktu">Mozilla Thunderbird</a>
jednu takovouto čtečku obsahuje. Nyní si ukážeme jak ji lze nastavit. 
V&nbsp;první řadě si musíme vytvořit účet pro 
<abbr title="Really Simple Syndication">RSS</abbr> kanály. Z&nbsp;nabídky
<span class="nabidka">Soubor &gt; Nový objekt</span> klepneme na 
<span class="nabidka">Účet</span>.</p>

<div class="img-center"><img src="images/rss-01.png" 
 alt="Vytvoření nového účtu" height="249" width="417" /></div>

<p>Otevře se dialogové okno s&nbsp;výběrem účtu.</p>

<div class="img-center">
<img src="images/rss-02.png" alt="Volba Účet pro RSS kanály" 
 height="450" width="491" /></div>

<p>Zvolíme tedy
<span class="nabidka">Účet pro RSS kanály</span>
a&nbsp;pokračujeme klepnutím na tlačítko <span class="nabidka">Další</span>.
V následujícím dialogovém okně pak stačí napsat libovolný název účtu (např. 
<strong>RSS kanály</strong> &ndash; pod tímto názvem pak najdete
<abbr title="Really Simple Syndication">RSS</abbr> čtečku mezi ostatními
poštovními účty) a&nbsp;klepnout na tlačítko <span class="nabidka">Další</span>.
V&nbsp;posledním dialogovém okně vidíte přehled zadaných údajů. Pokud vše 
souhlasí, klepněte na tlačítko <span class="nabidka">Dokončit</span>.</p>

<p>Pokud se vám v&nbsp;průvodci v okně <span class="nabidka">Vytvoření nového 
účtu</span> nezobrazí nabídka <span class="nabidka">Účet pro RSS kanály</span>
je pravděpodobné, že  jste při instalaci vybrali 
<span class="nabidka">Vlastní</span> typ instalace (namísto 
<span class="nabidka">Standardní</span>) a&nbsp;zvolili neinstalovat podporu 
<abbr title="Really Simple Syndication">RSS</abbr>, popřípadě máte staší verzi 
<a href="/produkty/thunderbird/" 
 title="Mozilla Thunderbird: Stránka o produktu">Thunderbirdu</a> než 0.8.

<h2>Správce RSS kanálů</h2>
<p>Účet již máme vytvořený, nyní zbývá jen přidat adresy vašich oblíbených
<abbr title="Really Simple Syndication">RSS</abbr> kanálů do vaší čtečky. Pokud 
nevíte, jak takové adresy získat, podívejte se na <a 
 href="#adresa-kanalu">konec tohoto návodu</a>.</p>

<p>Pro přidání kanálů potřebujete spustit <span class="nabidka">Správce RSS 
kanálů</span>. To lze provést několika způsoby:</p>
<ul>
<li>V panelu <span class="nabidka">Složky</span> klepněte prvým tlačítkem na 
váš RSS účet&nbsp;a zvolte <span class="nabidka">Správce RSS kanálů</span>.
<div class="img-center"><img src="images/rss-03.png" alt="Spravovat odebírání" 
 height="182" width="327"></div></li>
<li>Nebo v panelu <span class="nabidka">Složky</span> klepněte levým
tlačítkem na váš RSS účet a&nbsp;v&nbsp;hlavním okně zvolte 
<span class="nabidka">Spravovat odebírání</span>, či použijte dialog pro nastavení
vašeho <a href="#nastaveni-rss">RSS účtu</a>.</p> 
</ul>

<p>Ve <span class="nabidka">Správci RSS kanálů</span>. klepněte na tlačítko
<span class="nabidka">Přidat</span> a&nbsp;objeví se dialog pro přidání adresy
kanálu. Zde vložte adresu kanálu. </p>

<div class="img-center"><img src="images/rss-04.png" alt="Přidat RSS kanál"
 height="379" width="516" /></div>

<p>Tímto způsobem můžete přidat všechny své oblíbené 
<abbr title="Really Simple Syndication">RSS</abbr> kanály. Pokud chcete odebírat
<abbr title="Really Simple Syndication">RSS</abbr> kanálů větší množství, je
výhodné vytvořit si více <abbr title="Really Simple Syndication">RSS</abbr> účtů
a&nbsp;při přidávání <abbr title="Really Simple Syndication">RSS</abbr> kanálu 
vybrat vždy odpovídající složku.</p>

<h2 id="nastaveni-rss">Nastavení 
<abbr title="Really Simple Syndication">RSS</abbr> kanálů</h2>

<p>Pro každý <abbr title="Really Simple Syndication">RSS</abbr> účet existuje
několik základních nastavení, která najdete v&nbsp;nabídce 
<span class="nabidka">Nástroje</span> &gt; 
<span class="nabidka">Nastavení účtu</span> &gt; 
<span class="nabidka">[Název účtu]</span>:</p>

<div class="img-center"><img src="images/rss-05.png" alt="Nastavení RSS kanálů" height="239" width="452"></div>

<ul>
<li>Kontrolovat nové stránky každých ___ minut</li>
<li>Po spuštení zkontrolovat nové články</li>
<li>Zobrazit stručný obsah článku namísto načtení webové stránky.</li> 
</ul>

<p>Pro každý přihlášený <abbr title="Really Simple Syndication">RSS</abbr> kanál:</p>
<ul>
	<li>Přejete-li si mít články k danému kanálu uloženy ve stejném adresáři 
	jako články k&nbsp;ostatním kanálům, otevřete Správce 
	<abbr title="Really Simple Syndication">RSS</abbr> kanálů, zvolte příslušný
	kanál a&nbsp;v&nbsp;roletce vyberte vyberte požadovanou složku.</li>
	<li>Přejete-li si přejmenovat 
	<abbr title="Really Simple Syndication">RSS</abbr> kanál, klepněte na něj 
	pravým tlačítkem a&nbsp;zvolte <span class="nabidka">Přejmenovat 
	složku</span> (nebo zvolte položku <span class="nabidka">Přejmenovat 
	složku</span> v&nbsp;nabídce <span class="nabidka">Soubor</span>) 
	a&nbsp;následně vepište nové jméno.</li>
	<li>Přejete-li si změnit výchozí kódovaní znaků, klepněte pravým tlačítkem 
	na složu v&nbsp;panelu složek (nebo zvolte položku 
	<span class="nabidka">Vlastnosti složky</span> v&nbsp;nabídce 
	<span class="nabidka">Úpravy</span>), a&nbsp;zvolte požadované kódování.
	</li>
</ul>

<h2 id="adresa-kanalu">Získání adresy kanálu</h2>
<p>Pokud používáte prohlížeč
<a href="/produkty/firefox/" 
title="Mozilla Firefox: Stránka o produktu">Mozilla Firefox</a> je přítomnost
<abbr title="Really Simple Syndication">RSS</abbr> kanálu na stránce 
signalizována ikonkou
<img src="/images/articles/az-rss-ikonka.png" alt="RSS ikonka" height="14" width="14" />
umístěnou adresním řádku. Pokud si do Firefoxu přidáte 
<a href="/podpora/firefox/aktualni-zalozky.html">aktuální záložku</a> tohoto
<abbr title="Really Simple Syndication">RSS</abbr> kanálu, můžete jeho adresu získat v dialogu
vlastnosti této aktuální záložky.</p>

<div class="img-center"><img src="images/rss-06.png" 
 alt="Vlastnosti aktuální záložky ve Firefoxu" height="210" width="337" /></div>

<p>Dalším způsobem je hledat na stránkách vašeho oblíbeného serveru, zda někde
na svých stránkách sami své <abbr title="Really Simple Syndication">RSS</abbr>
kanály neinzerují. Pro příklad použijeme stránky 
<a href="http://www.czilla.cz/" 
 title="http://www.czilla.cz"><tt>http://www.czilla.cz</tt></a>.
Úplně dole (v patičce) vidíte odkaz <span class="nabidka">Seznam RSS</span>.
Klepneme-li na něj, objeví se stránka se seznamem 
<abbr title="Really Simple Syndication">RSS</abbr> kanálů serveru CZilla.cz.
Pokud nyní klepnete např. na odkaz 
<a href="http://www.czilla.cz/rss/rss.html">RSS kanál novinek z&nbsp;titulní 
stránky</a>, načte se vám <abbr title="eXtensible Markup Language">XML</abbr>
zdroj tohoto kanálu, jehož adresu si do schránky můžete zkopírovat 
z&nbsp;adresního řádku.</p>

<div class="img-center"><img src="images/rss-07.png" alt="Náhled RSS" 
 height="409" width="594" /></div>

<p>Poslední námi nabízenou možností je navštívit některý ze specializovaných 
serverů, zabývající se katalogizací 
<abbr title="Really Simple Syndication">RSS</abbr> kanálů. Takovýmto serverem 
je například server <a href="http://www.feedcat.net/">Feedcat.net</a>.</p>

<?php
	$page->includeFooter();
?>