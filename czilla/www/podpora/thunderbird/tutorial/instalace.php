<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Úvod a instalace';
	$page->headline = array('Úvod a instalace','Úvod do Thunderbirdu, 1. část');
	
	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial, instalace');
	$page->setDescription ('Návod na instalaci Mozilla Thunderbirdu');		

	$page->includeHeader();
?>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./prace-s-postou.html">Základy práce s&nbsp;poštou</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>Microsoft Outlook Express je již několik let nejpopulárnějším programem 
určeným k&nbsp;zasílání a&nbsp;přijímání elektronické pošty. Není to způsobeno pouze 
jeho dobrou funkčností, ale také značným prosazováním ze strany Microsoftu 
a&nbsp;nedostatkem konkurenčních programů.</p>

<p><a href="/produkty/thunderbird/" 
title="Thunderbird: Stránka o produktu">Mozilla Thunderbird</a> je jedním 
z&nbsp;programů, který může programu MS Outlook Express konkurovat a&nbsp;to nejen 
podobnými funkcemi, ale také tím, že je uživatelsky přívětivý a&nbsp;zdarma. 
A&nbsp;nejen tím.</p>

<p>Část uživatelů se často obává používat jiné programy než ty, na které 
je zvyklá. V&nbsp;této sérii článků se pokusím vaše obavy rozptýlit a&nbsp;ukáži vám,
jak snadné je Thunderbird používat.</p>

<h2 class="nice thunderbird">Proč používat Thunderbird?</h2>
<ul>
  <li>je uživatelsky přívětivý, snadno se instaluje a používá</li>
  <li>je k&nbsp;dispozici zdarma, což znamená, že jej můžete volně používat</li>
  <li>je dostupný pro více operačních systému jako MS Windows či GNU/Linux</li>
</ul>

<h2 class="nice thunderbird">Kde si ho mohu stáhnout?</h2>
<p>Navštivte webové stránky <a href="http://www.czilla.cz/">http://www.czilla.cz</a>. 
Na této adrese naleznete vždy nejnovější počeštěnou verzi společně s&nbsp;dalšími 
informacemi o&nbsp;programu Mozilla Thunderbird, jako jsou aktualizace či 
přídavné funkce.</p>

<h3>Přímý odkaz ke stažení</h3>

<p><strong><a href="/produkty/thunderbird/stahnout.html">Stažení poslední verze</a>
</strong></p>

<h2 class="nice thunderbird">Jak ho mám nainstalovat?</h2>

<p>
Stáhněte si soubor s&nbsp;instalátorem z&nbsp;odkazu, který je umístěn výše.
</p>



<p>Instalační program doporučuje uzavřít všechny spuštěné programy. 
Až tak učiníte, <strong>klepněte na tlačítko Další</strong>.</p>

<div class="img-center">
<img src="../images/t1-obr01.png" 
alt="Úvodní okno instalačního programu" width="503" height="393" />
</div>


<p>Přečtěte si licenční ujednání. Pokud s&nbsp;ním souhlasíte, 
<strong>klepněte na tlačítko Další</strong>.</p>

<div class="img-center">
<img src="../images/t1-obr02.png" alt="Okno s licenčním ujednáním" width="503" height="393" />
</div>

<p>Pokud chcete zvolit, kam a&nbsp;jaké součásti nainstalovat, zvolte Vlastní 
instalaci. V&nbsp;opačném případě <strong>zvolte Standardní</strong>.</p>

<div class="img-center">
<img src="../images/t1-obr03.png" alt="Okno s volbou typu instalace" width="503" height="393" />
</div>

<p>Instalátor vám řekne, kam bude Mozilla Thunderbird nainstalován. 
U&nbsp;většiny z&nbsp;vás to bude do cesty, která je uvedena na obrázku. 
Pokud se vším souhlasíte, <strong>klepněte na tlačítko Další</strong>.</p>

<div class="img-center">
<img src="../images/t1-obr04.png" alt="Okno s volbou typu instalace" width="503" height="393" />
</div>

<p>Dále proběhne instalace Mozilla Thunderbird na váš počítač.</p>

<div class="img-center">
<img src="../images/t1-obr05.png" alt="Okno s průběhem instalace" width="503" height="393" />
</div>

<p>Instalace byla dokončena. Klepnutím na tlačítko Dokončit ukončíte 
instalaci. Mozilla Thunderbird se spustí.</p>

<div class="img-center">
<img src="../images/t1-obr06.png" alt="Závěrečné okno instalačního programu" width="503" height="393" />
</div>

<h2 class="nice thunderbird">Jak na konfiguraci?</h2>
<p>Když Thunderbird spustíte poprvé, je potřeba vytvořit nové konto. 
Program vás o&nbsp;to sám požádá. Ukážeme si to krok po kroku.</p>

  <p>Zvolte <span class="nabidka">E-mailový účet</span> a 
  <strong>klepněte na tlačítko Další</strong>.</p>
  
  <div class="img-center">
  <img src="../images/t1-obr07.png" alt="Průvodce vytvářením nového účtu - Vytvoření nového účtu" 
  width="618" height="454" /></div>

  <p>Vyplňte vaše jméno a&nbsp;e-mailovou adresu. <strong>Klepněte na 
  tlačítko Další</strong>.</p>
  
  <div class="img-center">
  <img alt="Průvodce vytvářením nového účtu - Identita"  
  src="../images/t1-obr08.png" height="453" width="613" /></div>

 <p>V tomto okně jste žádáni o&nbsp;adresu a&nbsp;typ příchozího serveru. 
 V&nbsp;mém případě je tato adresa "pop3.beruska.cz" a&nbsp;typ účtu 
 <span class="nabidka">POP</span>. Pokud vytváříte první účet, 
 jste též požádáni o&nbsp;adresu odchozího serveru (mnohdy stejná adresa). 
 Pokud nevíte, jaké údaje máte vyplnit, zeptejte se poskytovatele 
 vaší e-mailové schránky či správce sítě. <strong>Klepněte na 
 tlačítko Další</strong>.</p>
 
 <div class="img-center"><img 
 alt="Průvodce vytvářením nového účtu - Informace o serveru" 
 src="../images/t1-obr09.png" height="454" width="616" /></div>

  <p>Vyplňte uživatelské jméno, které máte přidělené správcem 
  (např. "beruska"). <strong>Klepněte na tlačítko Další</strong>.</p>
  
  <div class="img-center"><img alt="Průvodce vytvářením nového účtu - Uživatelské jméno" 
  src="../images/t1-obr10.png" height="456" width="616" /> </div>

  <p>Dále jste žádání o&nbsp;pojmenování vašeho účtu. Jméno zvolte libovolně 
  či ponechte e-mailovou adresu. <strong>Klepněte na tlačítko 
  Další</strong>.</p>
  
  <div class="img-center"><img 
  alt="Průvodce vytvářením nového účtu - Název účtu" 
  src="../images/t1-obr11.png" height="456" width="616" /></div>

  <p>V&nbsp;posledním dialogu máte zobrazen přehled zadaných údajů. Můžete 
  zde též zvolit volbu <span class="nabidka">Stáhnout zprávy nyní</span>. 
  Pokud vše souhlasí, <strong>klepněte na tlačítko Dokončit</strong>.</p>
  
  <div class="img-center"><img alt="Průvodce vytvářením nového účtu - Gratulujeme" 
  src="../images/t1-obr12.png" height="454" width="617" /></div>

  <p>K&nbsp;získání e-mailové pošty označte váš účet a&nbsp;<strong>klepněte 
  na tlačítko Přijmout</strong>.</p>
  
  <div class="img-center"><img alt="Doručená pošta" 
  src="../images/t1-obr13.png" height="406" width="704" /></div>

  <p>Budete požádáni o&nbsp;zadání hesla k&nbsp;e-mailovému účtu. Vyplňte jej 
  a&nbsp;klepněte na <span class="nabidka">OK</span>. Můžete též zvolit, aby 
  si Thunderbird pro příště pamatoval vámi zadané heslo.</p>
  
<p>Pokud jste vše dobře vyplnili, začne se vaše pošta stahovat.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./prace-s-postou.html">Základy práce s&nbsp;poštou</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeFooter();
?>
