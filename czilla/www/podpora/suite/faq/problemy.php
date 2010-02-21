<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Mozilla často kladené otázky');
	$page->setHeadline('Často kladené otázky','Mozilla FAQ: 10. Odstraňování problémů');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>


<ul>
<li><a href="#10.1">10.1. Proč moje stránka nevypadá v Mozille jak má?</a></li>
<li><a href="#10.2">10.2. Proč nemohu přistupovat na zabezpečené stránky (https://)?</a></li>
<li><a href="#10.3">10.3. Používám trasparentní proxy jako Junkbuster a mám podivné problémy s prohlížením stránek. Co se děje?</a></li>
<li><a href="#10.4">10.4. Pokouším se prohlédnout si soubor z webu, adresa vypadá správně, přesto vidím na obrazovce jen změť znaků.</a></li>
<li><a href="#10.5">10.5. Mám rád téma které používám, ale dějí se s ním divné věci. Dá se s tím něco dělat?</a></li>
<li><a href="#10.6">10.6. Když ze připojuji k server na port jiný než 80, dostávám zprávu, že přístup na port byl z bezpečnostních důvodů zakázán. Jak se mohu připojit k tomuto serveru?</a></li>
<li><a href="#10.7">10.7. Pokusil jsem se nainstalovat rozšíření (extension) do Mozilly pře XPI přímo z webu, ale po kliknutí na instalaci odkaz nefunguje.</a></li>
<li><a href="#10.8">10.8. Stáhl jsem si rozšíření (extension) pro Mozillu XPI, ale nemohu přijít na to jak ho nainstalovat.</a></li>
<li><a href="#10.9">10.9. Jak odinstaluji něco z XPI?</a></li>
<li><a href="#10.10">10.10. Nainstaloval jsem novou verzi Mozilly přes starou, a nyní mám různé divné problémy (např. prázné okno po startu prohlížeče).</a></li>
<li><a href="#10.11">10.11. Postranní lišta se mi otevřela zcela prázdná.</a></li>
<li><a href="#10.12">10.12. Pomoc! Nemohu se dostat ke své poště!</a></li>
<li><a href="#10.13">10.13. Používám jak Mozillu tak Netscape 6.x, a mám strašně velký soubor se záložkami! Co se děje?</a></li>
<li><a href="#10.14">10.14. Používám GNOME. Nainstaloval jsem binární verzi Mozilly z mozilla.org, a nyní nefunguje Nautilus jak má.</a></li>
<li><a href="#10.15">10.15. Můj antivirový program si myslí, že můj INBOX obsahuje virus a nedovolí mi do něj přistupovat!</a></li>

<li><a href="#10.16">10.16. Nemohu otevřít Mozillu s mým profilem. Mozilla hlásí, že profil je již používán.</a></li>
<li><a href="#10.17">10.17. Klik prostředním myšítkem (nebo Ctrl+klik) neotvírá nový panel.</a></li>
<li><a href="#10.18">10.18. Zmizel mi toolbar a menubar. Jak je dostanu zpět?</a></li>
<li><a href="#10.19">10.19. Můj osobní toolbar je prázný a mně se nedaří do něj přidat jakoukoli záložku. Jak to napravím?</a></li>
<li><a href="#10.20">10.20. Nedaří se mi stahovat velké soubory.</a></li>
<li><a href="#10.21">10.21. Stahování souborů je čím dál pomalejší. Proč?</a></li>
<li><a href="#10.22">10.22. Můj systém spadl, když jsem ukončil Mozillu, a přišel jsem o veškerou poštu. Co mám dělat?</a></li>
<li><a href="#10.23">10.23. Pomoc, ztratily se mi všechny záložky!</a></li>
<li><a href="#10.24">10.24. Na stránky mé banky se nedá dostat s Mozillou.</a></li>


</ul>

<ul>
<li><p>Před tím, něž budete hledat řešení svého problému zde, byste měli zkusit přečíst si
<b><a href="/produkty/suite/poznamky-k-vydani/">poznámky k příslušné verzi</a></b>, neboť zde jsou zaznamenány některé známé problémy.
Pokud zde nenajdete poznámky k vámi používané verzi v češtině, zkuste anglické stránky <a href="http://www.mozilla.org/releases/">na mozilla.org</a>.</p></li>
</ul>

<p><br /></p>

<dl class="faq">
<dt id="question-10.1"><a name="10.1">10.1. Proč moje stránka nevypadá v Mozille jak má?</a></dt>
<dd id="answer-10.1">
<p>Kód Mozilly je navržen tak aby podporoval standardy <a href="http://www.w3.org/">W3C</a> tak přesně jak je to jen možné.
Některé stránky, jejichž senam můžete nalézt např. na <a href="http://developer.netscape.com/evangelism/tools/practical-browser-sniffing/">
stránkách technického evagelismu Netscape</a> nebo v <a href="http://bugzilla.czilla.cz/">buzgille na czille pod kapitolou technické evangelizace</a>,
stále používají nesprávně kód detekce prohlížeče, případně kód napsaný pro starší nestandardní prohlížeče, místo aby stránky přepsali
do HTML, které všechny současné prohlížeče (např. Mozilla, Konqueror, Opera, Internet Explorer 6+) mohou bez problémů zobrazit.
Pokud je to tento případ, měli byste odkázat autora webu (webmastera) na
<a href="http://www.mozilla.org/docs/web-developer/faq.html">Mozilla Web Author
FAQ</a> a <a href="http://developer.netscape.com/">Netscape DevEdge</a>.</p>

<p>Jestliže vaše stránka používá CSS a server posílá style sheety jako
&#8216;text/plain&#8217;  a ne jako &#8216;text/css&#8217;, potom style sheet nebude
použit. V tomto případě byste měli kontaktovat administrátora a upozornit ho na
<a href="http://developer.netscape.com/evangelism/docs/technotes/incorrect-mime-types/">
špatnou konfiguraci</a>.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.2"><a name="10.2">10.2. Proč nemohu přistupovat na zabezpečené stránky (https://)?</a></dt>
<dd id="answer-10.2">
<p>Nejpravděpodobnější je, že jste si nenainstalovali osobní bezpečnostní manažer [Personal Security Manager],
když jste instalovali Mozillu. Přeinstalujte Mozillu znovu s bezpečnostním manžerem,
nebo nainstalujte pouze manažer přímo ze stránek mozilly.
Verze pro <a href="http://ftp.mozilla.org/pub/mozilla/releases/mozilla1.0/windows-xpi/psm.xpi" onclick="installXPI(this,'Windows');return false">Windows</a>
a <a href="http://ftp.mozilla.org/pub/mozilla/releases/mozilla1.0/linux-xpi/psm.xpi" onclick="installXPI(this,'Linux');return false">Linux</a>.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.3"><a name="10.3">
10.3. Používám trasparentní proxy jako Junkbuster a mám podivné problémy s prohlížením stránek. Co se děje?
</a></dt>
<dd id="answer-10.3">
<p>Některé transaprentní proxy (včetně některých verzí JunkBusteru)
nepracují správně s HTTP/1.1. Nejjednodužší je jít do Edit | Preferences | Advanced | HTTP Networking a
vybrat &#8216;Use HTTP 1.0&#8217;.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.4"><a name="10.4">
10.4. Pokouším se prohlédnout si soubor z webu, adresa vypadá správně, přesto vidím na obrazovce jen změť znaků.
</a></dt>
<dd id="answer-10.4">
<p>Tento problém lze většinou vyřešit tak, že kliknete pravym tlačítkem na odkaz a zvolíte
&#8216;Save Link Target As&#8217;. Po uložení na disku budete moci soubor normálně prohlížet.
</p>

<p>Nejpravděpodobnější příčina je, že server posílaidetifikátor stránky MIME
content-type souboru jako &#8216;text/plain&#8217;.
Mozilla rozpoznává obsah souboru v první řadě podle typu, který server posílá v hlavičce
a ne podle přípony. Jak je stránka identifikována můžete zjisit ve View | Page Info.
Jestliže je identifikace špatně, měli byste aministrátora servu upozornit na
chybu v konfiguraci.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.5"><a name="10.5">
10.5. Mám rád téma které používám, ale dějí se s ním divné věci. Dá se s tím něco dělat?
</a></dt>
<dd id="answer-10.5">
<p>Některá témata třetích stran neobsahují soubor
<tt>fakeAccount.css</tt>. Absence tohoto souboru může způsobit nesprávné chování
jako např. že okna se správně neminimalizují. Zkontrolujte jestli neexistuje novější verze vašeho tématu.
</p>

<p>Jestliže se cítíte na experimentování s tématy, vytvořte si prázndý soubor
<tt>fakeAccount.css</tt> a vložte to něj JAR daného tématu.
JAR jsou standardní zip sobory, takže je můžete otevřit nebo vytvořit vaším
olíbeným nástrojem pro práci se zip. Pokud se budete pokoušet JAR měnít
nezapomeňte si zazálohova původní verzi.
</p>

<p>Jestliže nedojde k nápravě problému a jste si jisti, že
v připadě použiti Classci ani Modern problém nenastává, můžete nahlásit problém
autorovi.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.6"><a name="10.6">
10.6. Když ze připojuji k server na port jiný než 80, dostávám zprávu, že přístup na port byl z bezpečnostních důvodů zakázán. Jak se mohu připojit k tomuto serveru?
</a></dt>
<dd id="answer-10.6">
<p>Otevřete <a href="obecne.php#1.5"><tt>user.js</tt></a> a vložte místo <tt>1,3,7</tt>
seznam čísel portů, které chcete používat:</p>

<pre>
user_pref(&quot;network.security.ports.banned.override&quot;, &quot;1,3,7&quot;);
</pre>

<!-- FAQs hacked by David Gerard, Brian Heinrich and Jayesh Sheth. These FAQs
fueled by deep-fried battered jalapenos, vanilla tobacco and BBC 6 Music:
http://ogg.bbc.co.uk:8001/6music_low.ogg -->

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.7"><a name="10.7">
10.7. Pokusil jsem se nainstalovat rozšíření (extension) do Mozilly pře XPI přímo z webu, ale po kliknutí na instalaci odkaz nefunguje.
</a></dt>
<dd id="answer-10.7">
<p>Potřebujete zapnout dvě věci a to JavaScript (v Edit | Preferences |
Advanced | Scripts &amp; Windows) a Software Installation (v
Edit | Preferences | Advanced | Software Installation).</p>

<p>Pokud to stále nefunguje, zkuste stáhnout XPI přímo do počítače a nainstalova ho přímo.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.8"><a name="10.8">
10.8. Stáhl jsem si rozšíření (extension) pro Mozillu XPI, ale nemohu přijít na to jak ho nainstalovat.
</a></dt>
<dd id="answer-10.8">
<p>Zkontroujte, že máte povolenu instalaci dalšího software, pak
otevřete soubor v Mozille, např. tak, že ho chytnete a přetáhnete do prohlížeče;
nebo pomocí File | Open File; vepsáním URL do lišty; nebo dvojitým kliknutím na soubor XPI
a přiřazením souboru <tt>.xpi</tt> k Mozille (Windows).</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.9"><a name="10.9">
10.9. Jak odinstaluji něco z XPI?</a></dt>
<dd id="answer-10.9">
<p>Zatím není žádný způsob jak automaticky odinstalovat XPI moduly jiné než témata vzhledu.
Ovšem pokud budete např. přeinstalovávat Mozillu, můžete XPI odebrat ručně.
</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.10"><a name="10.10">
10.10. Nainstaloval jsem novou verzi Mozilly přes starou, a nyní mám různé divné problémy (např. prázné okno po startu prohlížeče).
</a></dt>
<dd id="answer-10.10">
<p><strong>Nikdy</strong> byste neměli instalovat novou verzi přímo přes starou.
</p>

<p>Existují tedy dvě řešení:</p>

<ol>
<li>
<p>Správně <a href="obecne.php#1.2">odinstalujte Mozillu</a> a pak se ji pokuste znovu nainstalovat.</p>
</li>

<li>
<p>Jestliže stále máte problémy, ukončete Mozillu (včetně rychlého spouštění [Quick
Launch]), <a href="http://www.mozilla.org/releases/mozilla1.0/#profiles">
jděte do složky profilů</a> a smažte <tt>localstore.rdf</tt>.
(Některá vaše nastavení se však vráti k počátečním hodnotám.)</p>
</li>
</ol>

<p>Jestliže ani to nepomůže, můžete mít <a href="profil.php#7.5">poškozený profil</a> a bude tedy potřeba
obnovit obsah, nebo vytvořit nový.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.11"><a name="10.11">
10.11. Postranní lišta se mi otevřela zcela prázdná.
</a></dt>
<dd id="answer-10.11">
<p>Zkuste zavřit a znovu otevřít postranní lištu pomocí klávesy F9. Pokud dojde k chybě
můžete mít poškozen <a href="profil.php#7.5">profil</a> &#8211;
zkuste založit nový a sledujte zda zde postranní lišta funguje správně.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.12"><a name="10.12">
10.12. Pomoc! Nemohu se dostat ke své poště!
</a></dt>
<dd id="answer-10.12">
<p>Dva nejčastější problémy v poštou v Mozille jsou:</p>

<ol>
<li><p>Některé testovací verze Mozilly obsahovaly chybu, která způsobovala
špatnou kompresi adresářů s poštou, což způsobovalo, že pošta pak byla
v Mozille nečitelná.
</p></li>

<li><p>Soubory obsahující seznam mailů (sobory s příponou <tt>.msf</tt>)
byly poškozeny.</p></li>
</ol>

<p>
<i>V prvním případě:</i> soubory pošty jsou ukládány jako čistý text
a můžete se tedy pokusit otevřít jej v textovém editoru.
Tak se dostanete k textu mailů ručně.</p>

<p>
<i>Ve druhém případě:</i> ukončete Mozillu včetně rychlého startu, najděte
adresář ve svém <a href="http://www.mozilla.org/releases/mozilla1.0/#profiles">uživatelském profilu</a>,
který obsahuje poštu (<tt>Mail</tt> a pokud používáte IMAP, pak také
adresář <tt>ImapMail</tt>). Zazálohujte si obsah těchto adresářů a smažte
<tt>.msf</tt> soubory.
<b>Nemažte</b> soubory bez přípon - to jsou soubory obsahující aktuální poštu.
Po restartu by Mozilla měla vygenerovat automaticky nové seznamy pošty.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.13"><a name="10.13">
10.13. Používám jak Mozillu tak Netscape 6.x, a mám strašně velký soubor se záložkami! Co se děje?
</a></dt>
<dd id="answer-10.13">
<p>To je první příznak poškození profilu jeho <a href="profil.php#7.6">sdílením</a> mezí Mozillou a
Netscape. (Jeden z pisatelů těchto odpovědí měl soubor záložek velký 497MB.)
Jediným řešením je bohužel smazat poškozený soubor. Pokud jste však začaly používat Mozillu
mělo by stále být jěště možné pouze překopírováním souboru do samostaného profilu Mozilly záložky zachovat.
</p>

<p>Pokud chcete používat zároveň Mozillu i Netscape, ujistěte se, že oba pouzžívají vlastní
profil. Jedině tak předejte jeho poškození.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.14"><a name="10.14">
10.14. Používám GNOME. Nainstaloval jsem binární verzi Mozilly z mozilla.org, a nyní nefunguje Nautilus jak má.
</a></dt>
<dd id="answer-10.14">
<p>Jestliže byl Nautilus skonfigurován tak, aby používal renderovací stroj Gecko Mozilly, nainstalování
binární distribuce Mozilly prímo z mozilla.org, může způsobit konflikt.
Proto byste měli používat pouze balíky dodané vaším dodavatelem Unixu nebo GNU/Linuxu, protože jejich
verze by měli pracovat správně.</p>

<p>Jestliže chcete nainstalovat <a href="jak-se-zapojit.php">testovací verze</a> Mozilly,
nainstalujte je do jiných míst (<i>např.</i> do domovského adresáře) a
nechte normálě používat systém starší verzi.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-10.15"><a name="10.15">
10.15. Můj antivirový program si myslí, že můj INBOX obsahuje virus a nedovolí mi do něj přistupovat!
</a></dt>
<dd id="answer-10.15">
<p>To se stává často v případě, že antivirový program je nastaven tak,
aby kontroloval <i>všechny</i> soubory, ne jen ty které skutečně mohou obsahovat viry
a ten pak zamkne jakýkoli soubor o kterem se domnívá, že obsahuje známky viru.
</p>

<p>Vypněte antivirový rprogram a otevřete inbox (případně smažte
mail obsahující přílohu, která by mohla obsahovat virus), poté nastavte antivirus tak,
aby prohledával skutečně jen soubory, které mohou nějaky spustitelný kód, případně vypnětě u
antiviru &#8216;paranoidní&#8217; mód pokud se v něm nachází.</p>

<p>Poštovní klient Mozilly není náchylný k nakažení žádným ze známých virů.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>


<dt id="question-10.16"><a name="10.16">
10.16. Nemohu otevřít Mozillu s mým profilem. Mozilla hlásí, že profil je již používán.
</a></dt>
<dd id="answer-10.16">
<p>
Podívejte se do <a href="profil.php#location">adresáře se svým profilem</a> a najděte soubor
<tt>parent.lock</tt>, <tt>lock</tt> nebo <tt>.parentlock</tt> a smažte jej.
Tento soubor Mozilla vytváří při startu, aby zabránila více aplikacím přistupovat k profilu najednou.
Soubor je při ukončení Mozilly odstraněn. Pokud však dojde např. k násilnému ukončení
Mozilly nebo k pádu systému soubor zůstane v profilu a blokuje další spuštění Mozilly s tímto profilem.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>


<dt id="question-10.17"><a name="10.17">
10.17. Klik prostředním myšítkem (nebo Ctrl+klik) neotvírá nový panel.
</a></dt>
<dd id="answer-10.17">
<p>
Volba otvírání odkazů v novém panelu pomocí prostředního myšítka (nebo Ctrl+klik)
je vypnutá. Zapněte ji v Edit | Preferences | Navigator | Tabbed Browsing v levé části.
Zde zaškrtněte <q>Middle-Click, Ctrl+Click or Enter+Click on links in a web page</q>.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>

<dt id="question-10.18"><a name="10.18">
10.18. Zmizel mi toolbar a menubar. Jak je dostanu zpět?
</a></dt>
<dd id="answer-10.18">
<p>
Pokud nejde zobrazit toolbar v menu View | Show/Hide, podívejte se do místa pod menubarem
resp. toolbarem. Měli byste tam nalézt malé obdélníkové tlačítko. Klikněte na něj.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>


<dt id="question-10.19"><a name="10.19">
10.19. Můj osobní toolbar je prázný a mně se nedaří do něj přidat jakoukoli záložku. Jak to napravím?
</a></dt>
<dd id="answer-10.19">
<p>
Spusťte Správce záložek. Z nabídky záložek zvolte Presonal Toolbar Folder.
Otevřte menu View a zvolte Set as Personal Toolbar Folder.
</p>
<p>
Pokud to nepomůže, ukončete všechny části Mozilly a poté smažte soubor
<tt>localstore.rdf</tt> v <a href="profil.php#location">adresáři se svým profilem</a>.
(Upozornění: pravděpodobně přijdete o některá nastavení uživatelského rozhraní
jako je umístění tlačítek nebo viditelnost postranních lišt. To ale můžete snadno napravit.)
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>


<dt id="question-10.20"><a name="10.20">
10.20. Nedaří se mi stahovat velké soubory.
</a></dt>
<dd id="answer-10.20">
<p>
Během stahování Mozilla ukládá nekompletní soubor do odkládacího adresáře vašeho systému.
Pokud máte prostor pro tento adresář omezený, bylo by vhodné ho zvětšit, nebo zkuste
používat některý z mnoha Download Managerů.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>

<dt id="question-10.21"><a name="10.21">
10.21. Stahování souborů je čím dál pomalejší. Proč?
</a></dt>
<dd id="answer-10.21">
<p>
Pokud je historie vašich stahovaných souborů velmi dlouhá, Mozilla musí zpracovat
velké množství dat na začátku a na konci stahování souboru, což zdržuje.
Je tedy záhodno historii pročistit, což uděláte přímo v Download Manageru tak,
že označíte záznamy, které chcete smazat, a poté kliknete na Remove from List.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>

<dt id="question-10.22"><a name="10.22">
10.22. Můj systém spadl, když jsem ukončil Mozillu, a přišel jsem o veškerou poštu. Co mám dělat?
</a></dt>
<dd id="answer-10.22">
<p>
Soubor s vaším nastavením byl poškozen a proto byl nastaven na původní hodnoty.
Pokud máte <a href="profil.php#backup">zálohu</a> vašeho profilu, nejsnazší je obnovit z ní
soubor <tt>prefs.js</tt>.
</p>
<p>Pokud nemáte zálohu profilu, postupujte následovně:</p>
<ol>
<li>Nejdříve profil zazálohujte nebo aspoň zkopírujte jinam.</li>
<li>Vlezte do adresáře Mail v adresáři s profilem.</li>
<li>Otevřte Mozilla Mail &amp; Newsgroup. Poté menu File a zde vyberte Offline
a následně Work Offline z podmenu.</li>
<li>Vytvořte znovu vaše účty. Při zadávání serverů musíte uvést naprosto stejné
údaje, jaké jste v diskusích měli původně. Zkontrolujte adresář s diskusemi.
Měli byste tam najít zdvojeny adresáře a soubory pro vaše účty.</li>
<li>Ukončete všechny části Mozilly.</li>
<li>Otevřte soubor <tt>prefs.js</tt> z vašeho profilu v jednoduchém
textovém editoru.</li>
<li>Najděte řádky popisující adresáře vašich účtů.
<pre class="example">
user_pref(&quot;mail.server.server2.directory&quot;, &quot;C:\\...\\Mail\\<strong>Local Folders-1</strong>&quot;);
user_pref(&quot;mail.server.server3.directory&quot;, &quot;C:\\...\\Mail\\<strong>pop.isp-1.com</strong>&quot;);
user_pref(&quot;mail.server.server4.directory&quot;, &quot;C:\\...\\News\\<strong>news.isp-1.com</strong>&quot;);
</pre>

<!--
user_pref(&quot;mail.server.server2.directory-rel&quot;, &quot;[ProfD]Mail/Local Folders-1");
user_pref(&quot;mail.server.server3.directory-rel&quot;, &quot;[ProfD]Mail/pop.isp-1.com");
-->
Změňte tyto řádky tak, aby odpovídaly vašim původním účtům.
<pre class="example">
user_pref(&quot;mail.server.server2.directory&quot;, &quot;C:\\...\\Mail\\<strong>Local Folders</strong>&quot;);
user_pref(&quot;mail.server.server3.directory&quot;, &quot;C:\\...\\Mail\\<strong>pop.isp.com</strong>&quot;);
user_pref(&quot;mail.server.server4.directory&quot;, &quot;C:\\...\\News\\<strong>news.isp.com</strong>&quot;);
</pre>
Uložte soubor. Po startu Mozilly byste již měli vidět všechnu svou původní poštu.
</li>
</ol>
<p>Abyste předešli takovýmto nepříjemnostem, doporučujeme periodicky profil zálohovat.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>

<dt id="question-10.23"><a name="10.23">
10.23. Pomoc, ztratily se mi všechny záložky!
</a></dt>
<dd id="answer-10.23">
<p>
Ve velmi nepravděpodobném případě, že vaše záložky se ztratily, neexistuje žádný jiný způsob
jak je obnovit, než že je máte zálohovány. Některé z nich se můžete pokusit zachránit
z vaší historie prošlých stránek a to tak, že si otevřete okno s historií a kliknete
na odkaz, který chcete dát do záložek, pravým myšítkem a vyberete Bookmark this link.
Abyste takové situaci předešli, doporučujeme profil periodicky zálohovat.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>

<dt id="question-10.24"><a name="10.24">
10.24. Na stránky mé banky se nedá dostat s Mozillou.
</a></dt>
<dd id="answer-10.24">
<p>
Některé finanční instituce blokují přístup na své stránky z Mozilly.
Většinou je jediným důvodem to, že administrátoři daného institutu neznají Mozillu.
Mozilla je bezpečná a nemá žádné známé bezpečnostní problémy, proto k takovému chování
není důvod. Upozorněte na danou situaci svou banku a poproste ji o nápravu.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>




</dl>

<?php
	$page->includeTemplate('footer');
?>
