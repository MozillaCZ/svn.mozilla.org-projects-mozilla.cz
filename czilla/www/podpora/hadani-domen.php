<?php
	$rootPath = '../';
	include($rootPath . '../cas/includes-web.inc.php');  
	$page->title    = 'Hádání domén v Mozille';
	$page->headline = array('Hádání domén v Mozille','Popis, jak Mozilla odhaduje doménu, kterou jste neúplně zadali');

	$page->includeHeader();
?>
  
<h2 class="nice">Co to je hádání domén?</h2>

<p>Hádání domén vylepšuje chování adresního řádku v případě, kdy byla adresa webové stránky zadána chybně a nemůže být  proto nalezena. Předpokládejme tedy, že výchozí doménové jméno uživatele je <tt>.cz</tt>.</p>

<p>Pokud do adresního řádku zadáte slovo <tt>sunbird</tt>, webový prohlížeč by měl zobrazit hlášení:</p>

<p>"sunbird nebyl nalezen. Zkontrolujte prosím název a zkuste to znovu."</p>

<p>Hádání domén zachytý chybové hlášení <abbr title="Domain Name Server" lang="en">DNS</abbr> a pokusí se tedy zaslat požadavek na adresu dle výchozího doménového jména uživatele. Nejprve však doplní <tt>www</tt> před a/nebo <tt>.cz</tt> za hledaný výraz. Postupuje se podle následující tabulky:</p>
 
<div class="tbl-1">
<table border="1">
<thead>
<tr>
 <th>Popis</th>
 <th>Zadáno</th>
 <th>Předpokládaná adresa</th>
</tr>
</thead>
<tbody>
<tr>
 <td>slovo</td>
 <td><strong>mozilla</strong></td>
 <td><strong>www.mozilla.com</strong></td>
</tr>
<tr>
 <td>chybějící "přípona" .com</td>
 <td><strong>www.mozilla</strong></td>
 <td>www.mozilla.<strong>com</strong></td>
</tr> 
<tr>
 <td>chybějící "předpona" www.</td>
 <td><strong>czilla.cz </strong></td>
 <td><strong>www</strong>.czilla.cz</td> 
</tr> 
</tbody>
</table>
</div> 

<p>Hádání domén se aktivuje pouze v případě, kdy požadavek na webovou stránku selže tj. ne vše, co je zadáno do adresního řádku, musí být špatně. Pokud jsou aktivovány klíčová slova, má tato funkce větší prioritu před hádáním domén a zachytí tedy hodně případů, kdy nebyla adresa zadána korektně.</p>

<h2 class="nice">Jak použítat hádání domén?</h2>

<p>V <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> můžete hádání domén povolit/zakázat v dialogu <span class="nabidka">Předvolby</span> pod <span class="nabidka">Prohlížeč -> Související stránky</span>. V <a href="/produkty/firefox/" title="Mozilla Firefox: Stránka o produktu">Mozilla Firefoxu</a> je tato funkce automaticky aktivována. Jednotlivé předvolby lze též měnit skrze stránku předvoleb <tt>about:config</tt>. Jedná se o předvolby:</p>

<pre class="codearea">
<code>browser.fixup.alternate.enabled - true/false
browser.fixup.alternate.prefix - "www."
browser.fixup.alternate.suffix - ".cz"
</code></pre>

<h2 class="nice">Proč je tato funkce nazývá zrovna hádání domén?</h2>

<p>Podobné chování měli již dlouhou dobu prohlížeče Internet Explorer a Netscape Communicator, ale žádný jednotný název se neujal. Hlavním důvodem ustálení na tomto názvu je opravdu hádání. Prohlížeč neví, jestli uživatel myslí <tt>www.hostitel.cz</tt> a také neví jestli taková adresa v <abbr title="Domain Name System">DNS</abbr> skutečně existuje. Nejedná se o automatické dokončování, protože prohlížeč nejprve získá chybu a teprve následovně zkouší hádat bez zásahu uživatele. Nejedná se ani o automatické doplňování, protože to je něco, jako když zadáváte adresu do adresního řádku a prohlížeč vám na základě zadávané adresy zobrazuje v seznamu jednotlivé adresy, které jste v minulosti zadali. Proto se tedy jedná o hádání domén.</p>

<h2 class="nice">Omezení</h2>

<p>
  
Doménové hádání má zřejmé výhody, protože možňuje komukoliv navštívit webovou stránku "www.*.cz" bez nutnosti zadávat celou adresu. Jedná se tedy o velmi rychlou metodu, jak převést vstupu uživatele na stránku, kterou chtěl zobrazit. Další forma, jak rozpoznávat vstup od uživatele z adresního řádku, jsou klíčová slova, která z pomocí vzdáleného serveru umožní zobrazit odpovídající stránky.</p>

<p>Hádání domén má několik důležitých omezení:</p>

<ol>
  <li><strong>Pomalost</strong>
      <p>Hádání domén vyžaduje posílání několika <abbr title="Domain Name Server" lang="en">DNS</abbr> požadavků navíc a to bez varování. Stavový řádek sice zobrazí, že je vyhledávána adresa <tt>www.hostitel.cz</tt>, ale v řadě případů jsou odesílány další <abbr title="Domain Name Server" lang="en">DNS</abbr> požadavky.</p>
  </li>
  
  <li><strong>Nepředvídatelné chování</strong>
      <p>Hádání domén ovlivní adresy URL mající jen hostitele (například <tt>http://mozilla/index.html</tt>), ale nikoliv plně kvalifikovaná doménová jména (<abbr title="Fully Qualified Domain Name" lang="en">FQDN</abbr>) jako například <tt>http://www.mozilla.org</tt>. Hádání domén se spustí také v případě, že je na URL přistupováno přes odkazy v dokumentech. Hádání domén je také ovlivněno nastavením klíčových slov, a proto se chová velmi nepředvídatelně.</p>
  </li>
  
  <li><strong>Nesprávná chybová hlášení</strong>
      <p>
      Jestliže zadáte <tt>hostname</tt>, zobrazí se zpráva informující, že hledaná stránka <tt>www.hostname.com</tt> nebyla nalezena místo informace, že nebyla nalezena stránka <tt>hostname</tt>. To může být matoucí, pokud uživatel chtěl navštívit místní adresu pojmenovanou <tt>hostname</tt>, která neexistuje nebo byla zadána chybně.
      </p>
  </li>
  <li><strong>Chybné používání <abbr title="Domain Name Server" lang="en">DNS</abbr></strong></li>
  <li><strong>Bezpečnost</strong></li>
  <li><strong>Nefunguje za proxy servery</strong></li>
</ol>

<?php
	$page->includeFooter();
?>
