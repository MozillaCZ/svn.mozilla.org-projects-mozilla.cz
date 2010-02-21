<?php
	require_once '../inc/page.php';
	$page->setTitle('Záchrana kontaktů z poškozené databáze kontaktů');
	$page->setHeadline('Záchrana kontaktů','Záchrana kontaktů z poškozené databáze kontaktů');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<h2 class="nice abook">Poškodila se mi databáze kontaktů</h2>
<p>Ztratili jste v <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> či <a href="/produkty/thunderbird/" title="Mozilla Thunderbird: Stránka o produktu">Mozilla Thunderbirdu</a> všechny své kontakty? K podobné situaci může dojít, pokud např. při pádu vašeho operačního systému zrovna s kontakty pracujete. Následující návod vám poradí s obnovou poškozených dat.</p>

<h3>Kde jsou kontakty uloženy?</h3>
<p>Kontakty naleznete ve <a href="/produkty/suite/poznamky-k-vydani/mozilla1.3/#profileloc" title="Umístění profilu">vašem profilu</a> v souboru <span class="soubor">abook.mab</span>, někdy i v jiném souboru s koncovkou <span class="soubor">*.mab</span>, pokud jste kontakty importovali odjinud (seznam všech vašich <span class="soubor">*.mab</span> souborů s kontakty je uložen v předvolbách Mozilly, konkrétně v položkách <tt>ldap_2.servers.*</tt>).</p>

<h3>Formát souboru abook.mab</h3>
<p>Soubor <span class="soubor">abook.mab</span> je textový soubor (plaintext), ale data v něm jsou uložena ve formátu Mork database, prostřednictvím které k nim Mozilla přistupuje. Takto uložená data jsou bohužel pro člověka prakticky nečitelná. Proto nelze soubor upravovat ručně, ale je lepší k opravě "přimět" Mozillu.</p>

<h2 class="nice abook">Obnova souboru abook.mab</h2>
<p>Obnova při troše štěstí není složitá a zvládne ji kdokoliv, kdo umí editovat obyčejné textové sobory.</p>
<ol>
	<li>Ukončete Mozilla Suite či Thunderbird.</li>
	<li>Poškozený soubor <span class="soubor">abook.mab</span> přejmenujte např. na <span class="soubor">Xabook.mab</span>.</li>
	<li>Ujistěte se, že se ve vašem profilu soubor <span class="soubor">abook.mab</span> nenachází a znovu spusťte Mozillu. Mozilla soubor <span class="soubor">abook.mab</span> nenajde a vytvoří nový.</li>
	<li>Ukončete Mozillu a otevřete <span class="soubor">abook.mab</span> v textovém editoru (např. notepadu). Soubor by měl vypadat asi takto:
<pre>
// <!-- <mdb:mork:z v="1.4"/> -->
&lt; &lt;(a=c)&gt; // (f=iso-8859-1)
  (B8=Custom4)(B9=Notes)(BA=LastModifiedDate)(BB=RecordKey)
  (BC=AddrCharSet)(BD=LastRecordKey)(BE=ns:addrbk:db:table:kind:pab)
  (BF=ListName)(C0=ListNickName)(C1=ListDescription)
  (C2=ListTotalAddresses)(C3=LowercaseListName)
  (C4=ns:addrbk:db:table:kind:deleted)
  (80=ns:addrbk:db:row:scope:card:all)
  (81=ns:addrbk:db:row:scope:list:all)
  (82=ns:addrbk:db:row:scope:data:all)(83=FirstName)(84=LastName)
  (85=PhoneticFirstName)(86=PhoneticLastName)(87=DisplayName)
  (88=NickName)(89=PrimaryEmail)(8A=LowercasePrimaryEmail)
  (8B=SecondEmail)(8C=DefaultEmail)(8D=CardType)(8E=PreferMailFormat)
  (8F=WorkPhone)(90=HomePhone)(91=FaxNumber)(92=PagerNumber)
  (93=CellularNumber)(94=WorkPhoneType)(95=HomePhoneType)
  (96=FaxNumberType)(97=PagerNumberType)(98=CellularNumberType)
  (99=HomeAddress)(9A=HomeAddress2)(9B=HomeCity)(9C=HomeState)
  (9D=HomeZipCode)(9E=HomeCountry)(9F=WorkAddress)(A0=WorkAddress2)
  (A1=WorkCity)(A2=WorkState)(A3=WorkZipCode)(A4=WorkCountry)
  (A5=JobTitle)(A6=Department)(A7=Company)(A8=_AimScreenName)
  (A9=AnniversaryYear)(AA=AnniversaryMonth)(AB=AnniversaryDay)
  (AC=SpouseName)(AD=FamilyName)(AE=DefaultAddress)(AF=Category)
  (B0=WebPage1)(B1=WebPage2)(B2=BirthYear)(B3=BirthMonth)(B4=BirthDay)
  (B5=Custom1)(B6=Custom2)(B7=Custom3)&gt;
</pre>
<pre style="color: red">
&lt;(80=0)&gt;
{1:^80 {(k^BE:c)(s=9)}
  [1:^82(^BD=0)]}

@$${1{@
@$$}1}@
</pre>
	</li>

	<li>Smažte červeně označené řádky na konci souboru a ponechte místo nich jednu <b>prázdnou řádku</b>.</li>
	<li>Otevřete soubor <span class="soubor">Xabook.mab</span>, pokuste se v něm najít konec jeho hlavičky (ta by měla vypadat podobně jako uvedený <span class="soubor">abook.mab</span>, tedy měla by končit na "<tt>(B5=Custom1)(B6=Custom2)(B7=Custom3)&gt;</tt>") a zkopírujte vše pod touto hlavičkou na konec souboru <span class="soubor">abook.mab</span> (na konec, tedy až za tu prázdnou řádku, kterou jste vytvořili).</li>
	<li>Uložte upravený <span class="soubor">abook.mab</span>, spusťte Mozillu a zkontrolujte databázi kontaktů. Měli byste zde najít své adresy.</li>
</ol>

<h2 class="nice abook">Správné přiřazení položek</h2>
<p>Někdy se může stát, že problém nekončí, protože data se sice zachránila, ale položky byly špatně přiřazeny - např. "e-mail" se nachází v položce "přezdívka" apod. I to je však řešitelné. Bude třeba kontakty vyexportovat: <span class="nabidka">Nástroje/Exportovat</span> - jako formát souboru zvolte <span class="nabidka">*.csv "Oddělený čárkou"</span>. <tt>CSV</tt> je jednoduchý soubor, který lze snadno upravovat (pro složitější úpravy tu je prográmek <a href="http://www.slunecnice.cz/product/dbEdit/">dbEdit</a>).</p>
<p>Nyní máme dvě možnosti:</p>
<ul>
	<li>Buď můžeme exportovaný soubor jednoduše upravit - tedy měnit pořadí jednotlivých sloupců (to lze pomocí dbEditu udělat velmi snadno pouhým přetažením sloupců) a zpětně naimportovat do Mozilly.</li>
	<li>Nebo exportovaný soubor rovnou importujeme do Mozilly (<span class="nabidka">Nástroje/Import</span> a zvolit <span class="nabidka">Databáze kontaktů</span> a poté <span class="soubor">Textový soubor</span>") a využijeme možnost, že během importu <span class="soubor">.csv</span> souboru máme možnost ručně navolit, které sloupce v <span class="soubor">*.csv</span> souboru odpovídají kterým položkám v Databázi kontaktů.</li>
</ul>

<p>Prvý způsob použijeme, máme-li po ruce dbEdit či podobný program nebo chceme-li provádět složitější úpravy. V případě, že žádný takový program nemáme, sáhneme bez váhání po druhém způsobu.</p>

<h2 class="nice abook">Generování zobrazeného jména</h2>
<p>Pokud máme opravdu smůlu, může se stát, že máme prázdnou položku "Zobrazené jméno", což je nepříjemné, protože se pak budeme v databázi velmi špatně orientovat. Obyčejně tato položka obsahuje jméno+příjmení.</p>
<p>Zdatnější uživatelé problém snadno vyřeší jednoduchým skriptem, který upraví exportovaný <span class="soubor">*.csv</span> a tuto položku pro každý kontakt vygeneruje (já osobně to řeším jedním příkazem v mocném textovém editoru <a href="http://www.vim.org/" title="Vim: Domovská stránka editoru" hreflang="en">Vim</a>). Pokud nepatříte mezi zdatnější uživatele, tak v lepším případě máte možnost někoho zdatnějšího poprosit o pomoc, anebo si rychlým trikem pomůžete sami. V dbEditu lze totiž kopírovat jednotlivé sloupce, proto můžete zkopírovat např. položku s "Příjmením" na místo položky se "Zobrazeným názvem", a pokud takto upravený <span class="soubor">*.csv</span> soubor importujete do Mozilly, máte vyhráno a v "Zobrazeném jméně" budete mít alespoň příjmení.</p>

<p><small>Při psaní tohoto návodu jsme vycházeli z anglického originálu <a href="http://home.att.net/~cherokee67/ns7manualAB.html" hreflang="en">Manually Copy the Netscape 7.x Address Book</a></small>.</p>

<hr />
<p><small>Poslední úprava: 6. 12. 2003, Martin Hassmann (CZilla)</small></p>

<?php
	$page->includeTemplate('footer');
?>
