<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Správa cookies';
	$page->headline = array('Správa cookies','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>


<p>Tento dokument vysvětluje, co vlastně cookies jsou, jak se používají a jak lze spravovat cookies uložené na vašem počítači pomocí Správce cookies v prohlížeči Mozilla Firefox.</p>

<div class="contentsBox">V této kapitole:
  <ul>
    <li><a href="#what_is_a_cookie">Co je cookie?</a></li>
    <li><a href="#setting_up_cookie_rules">Nastavení pravidel pro cookie</a></li>
    <li><a href="#accepting_and_blocking_cookies">Přijímání a blokování cookies</a></li>
    <li><a href="#the_cookie_manager">Správa cookies</a></li>
  </ul>
</div>

<h2 id="what_is_a_cookie">Co je cookie?</h2>

<p>Cookie je soubor vytvořený webovou stránkou a uložený ve vašem počítači, který obsahuje např. informace o nastaveních při návštěvě této webové stánky. Při návštěvě stránky používající cookies se tato stránka může dotázat, zda Firefox povolí uložit jednu nebo více cookies na pevný disk počítače.</p>

<p>Když se později na tuto webovou stránku vrátíte, Firefox odešle cookies, které s touto stranou souvisejí. To umožní stránce přizpůsobit se podle vašich přání.</p>

<p>Cookies mohou také obsahovat informace, které mohou identifikovat vaši osobu, tedy informace, které mohou být použity k vaší identifikaci nebo k vašemu kontaktování; například vaše jméno, e-mailovou adresu, adresu soukromou či pracovní nebo telefonní číslo. Nicméně webová stránka má přístup pouze k těm informacím, které sami poskytnete.Například, webová stránka nemůže zjistit vaši e-mailovou adresu, dokud ji sami nezadáte. Stejně tak webová stránka nemůže získat přístup k ostatním informacím na vašem počítači.</p>

<p>Používáte-li výchozí nastavení pro cookies, jsou všechny tyto činnosti pro vás neviditelné; nevíte, že webová stránka nastavuje cookie nebo že Firefox odesílá webové stránce její cookie. Nicméně je možno nastavit <span class="win">možnosti</span><span                             class="unix">předvolby</span> cookies tak, aby jste byli upozorněni před jeho uložením.</p>

<h2 id="setting_up_cookie_rules">Nastavení pravidel pro cookie</h2>

<p>Podle výchozího nastavení Firefox všechny cookies přijímá. Přejete-li si více kontrolovat ukládané cookies, proveďte následující kroky:</p>

<ol>
  <li>V hlavní nabídce zvolte <span class="win menuPath">Nástroje &gt;                             Možnosti</span><span class="unix menuPath">Úpravy &gt;                             Předvolby</span>.</li>
  <li>Klepněte na panel Soukromí a následně klepněte na nápis Soubory cookie.</li>
  <li>Vyberte volbu <em>Upozornit před přijetím souboru cookie</em> z rozbalovací nabídky <span class="menuPath">Ponechat cookies</span>.</li>
</ol>

<p><img src="../images/help-cookie_ask.png" alt="" width="502" height="353"/></p>

<p>Nyní můžete o každé cookie rozhodnout, zda má či nemá být uložena na disku.</p>

<h3 id="other_settings">Ostatní nastavení</h3>

<p>Existují též další možností správy cookies ve Firefoxu. Nejsou nutné pro nastavení pravidel pro cookies, přesto jsou vysvětleny:</p>

<dl>          
  <dt>Povolit cookie soubory</dt>
  <dd><p>Nechcete-li, aby jakékoli webové stránky ukládaly cookies na váš počítač, zrušte zaškrtnutí této položky. Některé webové stránky nemusejí po zakázaní cookies pracovat správně.</p></dd>
  <dt>pouze pro zdrojový server</dt>
  <dd>
    <p>Pokud Firefox uloží cookie webové stránky, povolí odeslání informací pouze na tuto konkrétní stránku. Firefox nebude poskytovat webové stránce cookies nastavené jinou stránkou. Pokud může webová stránka přijímat pouze své vlastní cookies, získá informace o vaší činnosti na této stránce, ale nikoli o ostatních vašich aktivitách při procházení webových stránek.</p>
    <p>Nicméně, webové stránky někdy zobrazují obsah, který se nachází na jiné stránce. Tento obsah může být jakýkoli; obrázky, text, reklama. Tyto ostatní webové stránky mají také možnost ukládat cookies v Firefox, přestože jste tuto stránku přímo nenavštívili.</p>
    <p>Cookies, které jsou uloženy jinou, než právě prohlíženou stránkou, se nazývají cookies třetích stran nebo cizí cookies. Webové stránky někdy používají cookies třetích stran spolu s transparentními GIFy, což jsou speciální obrázky, které serverům pomáhají při určování návštěvnosti, zjišťují další informace o návštěvnících nebo při přizpůsobování vzhledu stránek vašim potřebám.</p>
  </dd>
  <dt>Ponechat cookies:</dt>
  <dd>         
  <ul>
    <li><strong>Přijmout soubory cookie normálně</strong>: Pokud je tato možnost vybrána, cookie bude odstraněno teprve tehdy, až vyprší jeho platnost.</li>
    <li><strong>Přijmout pouze pro tuto relaci</strong>: Je-li tato možnost vybrána, budou informace obsažené v cookie odstraněny po restartu Firefox. Webové stránky vyžadující pro svou správnou funkci cookies budou stále pracovat, avšak po restartu Firefox se webová stránka bude tvářit jako byste ji navštívili poprvé.</li>
    <li><strong>Upozornit před přijetím souboru cookie</strong>: Pokaždé, když navštívíte web, který bude chtít uložit na váš počítač cookie, budete dotázání, zda si to přejete.</li>
  </ul>
  </dd>
</dl>

<h2 id="accepting_and_blocking_cookies">Přijímání a blokování cookies</h2>

<p>Máte-li nastavena výše popsaná pravidla (dotázat se před přijetím), otevře se dialogové okno Potvrzení kdykoli se webová stránka pokusí uložit na váš počítač cookie (nebo změnit existující cookie):</p>

<p><img src="../images/help-cookie_accept.png" alt="" width="294" height="87"/></p>

<dl>
  <dt>Povolení cookie</dt>
  <dd>Pro povolení této konkrétní cookie klepněte na tlačítko <em>Povolit</em>. Pokud webovému serveru důvěřujete a nepřejete si zobrazování tohoto dialogového okna kdykoli se tento server pokusí uložit cookie na váš počítač nebo jej změnit, zaškrtněte volbu <em>Použít moji volbu pro všechny cookie soubory z tohoto serveru</em> a klepněte na tlačítko <em>Povolit</em>. Firefox si zapamatuje vaši volbu a dialogové okno týkající se cookies pocházejících z této stránky již zobrazovat nebude.Pokud v budoucnosti změníte názor na cookies pocházející z tohoto webového serveru, použijte <em>Správce cookie</em>.</dd>
  <dt>Blokování cookie</dt>
  <dd>Nepřejete-li si tuto cookie uložit, klepněte na tlačítko <em>Zakázat</em>. Pokud webovému serveru nedůvěřujete nebo předpokládáte, že narušuje vaše soukromí, zaškrtněte volbu <em>Použít moji volbu pro všechny cookie soubory z tohoto serveru</em> a klepněte na tlačítko <em>Zakázat</em>. Firefox umístí tento server na seznam blokovaných serverů a nebude ukládat cookies pocházející z tohoto serveru. Toto nastavení může být změněno pomocí <em>Správce cookie</em>.</dd>
</dl>

<h2 id="the_cookie_manager">Správa cookies</h2>

<p>Pro zobrazování, odebírání a správu cookies pro jednotlivé servery použijte <em>Správce cookie</em>, který je přístupný v sekci <em>Soubory cookie</em> na panelu Soukromí v dialogu <em><span class="win">Možnosti</span><span                             class="unix">Předvolby</span></em> pomocí tlačítka <em>Uložené cookie...</em>.</p>

<h3 id="the_cookie_list">Seznam cookies</h3>

<p><img src="../images/help-cookie_list.png" width="306" height="297" alt=""/></p>

<p>Ve <em>Správci cookie</em> jsou zobrazeny všechny cookies, které jsou právě uloženy na vašem počítači. Po vybrání cookie se pod seznamem zobrazí podrobné informace o cookie.Okno <em>Správce cookie</em> se zobrazí klepnutím na tlačítko <em>Uložené cookie...</em> v sekci <em>Cookie soubory</em> panelu <em>Soukromí</em>.</p>

<p>Pro odstranění cookie ze seznamu ji označte a klepněte na tlačítko <em>Smazat cookie</em>. Pro odstranění všech cookies použijte tlačítko <em>Smazat všechny cookie</em>. (Stejnou funkci má tlačítko <em>Vymazat</em> v panelu <a href="prefs.html#privacy_options">Soukromí</a> v okně <a href="prefs.html"><span class="win">Možnosti</span><span                             class="unix">Předvolby</span></a>.)</p>

<p><strong>Zákaz budoucího ukládání serverům, jejichž cookies byly odebrány</strong><br/><br/>
	Přestože jste cookies právě odstranili, budou znovu uloženy při příští návštěvě webové stránky. Pokud si pozdější ukládání právě odstraněných cookies nepřejete, zaškrtněte možnost <em>Nepovolit sídlům, ze kterých byly odebrány cookie soubory příště nastavit cookie</em>.
	Webové stránky, jejichž cookies právě odstraňujete, budou přidány na seznam serverů, jejichž cookies budou automaticky odmítány.<br/><br/><strong> Důležité</strong>: Tuto možnost je nutno vybrat před začátkem odebírání cookies, jinak servery nebudou přidány na seznam blokovaných serverů.</p>

<h3 id="the_site_list">Seznam serverů</h3>

<p><img src="../images/help-cookie_manager.png" alt="" width="247" height="291"/></p>

<p>Toto je seznam serverů, které mají povoleno nebo zakázáno ukládání cookie souborů na váš počítač. Ve sloupci Stav je vidět, zda je pro příslušný server ukládání cookies zakázáno nebo povoleno. Tento seznam zobrazíte klepnutím na tlačítko <em>Výjimky...</em> v sekci <em>Cookie soubory</em> panelu Soukromí.</p>

<p>Pro přidání serveru do seznamu jednoduše zadejte doménové jméno stránky do pole <em>Adresa serveru:</em>. Následně klepnete na tlačítko <em>Blokovat</em> pro zákaz příjímání cookies z této stránky či klepněte na tlačítko 
<em>Povolit</em> pro povolení cookies z tohoto serveru.</p>  

<p>Pro odstranění serveru ze seznamu jej označte a klepněte na tlačítko <em>Odebrat server</em>. Pro odstranění všech serverů použijte tlačítko <em>Odebrat všechny servery</em>. Tato akce vymaže všechna pravidla pro cookies a dialogové okno <em>Potvrzení</em> se zobrazí pro každou cookie znovu.</p>

<div class="contentsBox"><em>2. října 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer</p>

<?php
	$page->includeFooter();
?>
