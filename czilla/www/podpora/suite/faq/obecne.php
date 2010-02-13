<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Mozilla často kladené otázky';
	$page->headline = array('Často kladené otázky','Mozilla FAQ: 1. Všeobecné');

	$page->includeHeader();
?>

<ul>
<li><a href="#1.1">1.1. Pro koho je Mozilla 1.0 určena?</a></li>
<li><a href="#1.2">1.2. Jak nainstaluji novější verzi Mozilly?</a></li>
<li><a href="#1.3">1.3. Kde mohu získat rozšířené funkce Mozilly?</a></li>
<li><a href="#1.4">1.4. Jaké má Mozilla klávesové zkratky?</a></li>
<li><a href="#1.5">1.5. Jak zapnu tyto &#8216;skryté vlastnosti&#8217;, o kterých jsem slyšel?
</a></li>
<li><a href="#1.6">1.6. Obsahuje Mozilla zotavení/obnovení po pádu/chybě?</a></li>
<li><a href="#1.7">1.7. Mohu používat AOL Instant Messenger přímo v Mozille, jako v Netscape?</a></li>
<li><a href="#1.8">1.8. Jaké zdroje novinek a rad jsou zde k dispozici?</a></li>
<li><a href="#1.9">1.9. Pro koho je určena Mozilla 1.5?</a></li>
<li><a href="#1.10">1.10. Proč existuje tolik verzí Mozilly? Kterou mám používat?</a></li>

</ul>


<dl class="faq">
<dt id="question-1.1"><a name="1.1">1.1. Pro koho je Mozilla 1.0 určena?</a></dt>
<dd id="answer-1.1">

<p>Mozilla 1.0 byla první plně funkční ukázka technologie pro ty, kteří chtějí vidět, čeho všeho lze s Mozillou dosáhnout, a pro ty, kteří chtějí tvořit balíky a produkty založené na Mozille. Zamýšlenou cílovou skupinou je komunita vývojářů. Mozilla je <a href="../start/open-source.html">otevřený software</a>, tedy každá osoba nebo společnost ji může měnit a distribuovat dál, pokud bude dodržovat podmínky <a href="http://www.mozilla.org/MPL/">licence</a>.</p>

<p>Mozilla 1.0 je připravena k pohodlnému používání všemi uživateli, &#8211; a ti, kteří ji chtějí používat
tak, jak byla vydána na <a href="http://www.mozilla.org/">mozilla.org</a>, jsou více než vítáni, aby tak učinili &#8211; mozilla.org
nemá žádné zdroje, které by nabízely
<a href="uzivatel.html">podporu koncových uživatelů</a>. Nicméně vždy uvítá nové <a href="jak-se-zapojit.html">testery a hlášení chyb</a>.</p>


<p>Vyvíjí se také další aplikace založené na Mozille.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-1.2"><a name="1.2">1.2. Jak nainstaluji novější verzi Mozilly?</a></dt>
<dd id="answer-1.2">

<p>Nejprve odinstalujte Mozillu podle postupu, který je pro jednotlivé operační systémy popsán detailně na
<a href="http://www.mozilla.org/releases/mozilla1.0/#uninstall">Mozilla 1.0 - Poznámky k verzi</a>, potom nainstalujte novou verzi. <strong>Nikdy</strong> neinstalujte novou verzi přes starou.</p>

<p>Pokud máte adresář pro zásuvné moduly (plugins) uvnitř adresáře pro aplikace Mozilly, je radno ho před přeinstalováním
uložit jinam, abyste jej pak znova obnovili. Adresář se zásuvnými moduly můžete také uložit do svých
<a href="profil.html#7.3">profilů</a>. Chcete-li znát umístění jednotlivých modulů, které právě Mozilla používá,
přejděte na Help | About Plug-ins. </p>

<p>Pokud takto odinstalujete Mozillu, vaše profily a osobní nastavení zůstanou. Nejspíš však
ztratíte přístup k některým přídavným modulům, ty je pak třeba přeinstalovat.
Nová instalace by měla detekovat témata a opravu pravopisu (pokud byla instalována).</p>

<p>Po nainstalování novější verze Mozilly je lepší vytvořit nový profil než se snažit používat profil starší verze.
Sdílení profilů mezi různými verzemi Mozilly může vést k <a href="profil.html#7.5">poškození profilů</a>.</p>

<p>Pokud se při vaší instalaci Mozilly vyskytnou chyby, zkuste dokument o <a href="problemy.html">odstraňování problémů</a>. </p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-1.3"><a name="1.3">1.3. Kde mohu získat rozšířené funkce Mozilly?</a></dt>
<dd id="answer-1.3">

<p>Viz stránka o <a href="/doplnky/rozsireni/">přídavných modulech</a>. Spousta projektů je též na
<a href="http://www.mozdev.org/">MozDev</a>.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-1.4"><a name="1.4">1.4. Jaké má Mozilla klávesové zkratky?</a></dt>
<dd id="answer-1.4">

<p>Seznam klávesových zkratek je k nalezení na
<tt><a href="http://www.mozilla.org/docs/end-user/moz_shortcuts.html">http://www.mozilla.org/docs/end-user/moz_shortcuts.html</a></tt>.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-1.5"><a name="1.5">1.5. Jak zapnu tyto &#8216;skryté vlastnosti&#8217;, o kterých jsem slyšel?
</a></dt>
<dd id="answer-1.5">

<p>Stejně jako v nastaveních, které jsou v Edit | Preferences (<i>MacOS X:</i> Mozilla |
Preferences), má pokročilý uživatel chytrý přehled o spoustě parametrů Mozilly. Nejprve si ale pročtěte oddíl
<a href="http://www.mozilla.org/unix/customizing.html#prefs">přizpůsobování Mozilly [en]</a>,
<a href="http://www.mozilla.org/mailnews/arch/compose/hiddenprefs.html">skrytá nastavení pošty [en]</a>
a <a href="http://www.mozilla.org/mailnews/arch/addrbook/hiddenprefs.html">
skrytá nastavení v adresáři</a>.
Když napíšete do adresové lišty řetězec <kbd>about:config</kbd>, vypíší se vám všechny nastavitelné proměnné Mozilly.</p>

<p>Pro nastavení skrytých vlastností ukončete Mozillu (včetně funkce rychlého startu [Quick Launch]),
přejděte do adresáře se svými <a href="http://www.mozilla.org/releases/mozilla1.0/#profiles">profily</a>,
pro případ ztroskotání vyzálohujte soubor <tt>prefs.js</tt> a vytvořte nebo upravte soubor <tt>user.js</tt>.
V souboru by mělo být:</p>
<pre class="screen">
user_pref(&quot;extensions.irc.nickname&quot;, &quot;MyName&quot;)
</pre>
<p>Aby byly změny provedeny, restartujte Mozillu.</p>

<p>V souboru <tt>user.js</tt> jsou uložena osobní nastavení uživatele a Mozilla jej při přeinstalování nezmění
(narozdíl od souboru <tt>prefs.js</tt>). Je to tedy záznam toho, co jste osobně změnili. </p>

<p>Při upravování skrytých nastavení buďte opatrní. Pokud uděláte chybu, po které bude Mozilla nepoužitelná,
smažte soubor <tt>user.js</tt> a obnovte <tt>prefs.js</tt> ze záložní kopie.
(Pokud nemáte <tt>prefs.js</tt>, Mozilla obnoví všechna nastavení do jejich výchozí podoby a zapomene veškeré
poštovní účty a nastavení diskusí. Vaše <abbr>POP</abbr>soubory s poštou však zůstanou zachovány a je možné je tedy obnovit.)</p>

<p>Na <a href="http://andrewwooldridge.com/tm/">TweakMoz</a> je experimentální nastavení vylepšující aplikaci
pro Windows a MacOS 8/9.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-1.6"><a name="1.6">1.6. Obsahuje Mozilla zotavení/obnovení po pádu/chybě?</a></dt>
<dd id="answer-1.6">

<p>Projekt obnovení po pádu byl ve vývoji na <tt><a href="http://recall.mozdev.org/">http://recall.mozdev.org/</a></tt>,
ale již několik měsíců nepokračuje. Nicméně dosud vyvinutá verze je stále dostupná.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-1.7"><a name="1.7">1.7. Mohu používat AOL Instant Messenger přímo v Mozille, jako v Netscape?</a></dt>
<dd id="answer-1.7">

<p>AIM je chráněným produktem AOL a je integrován pouze v Netscape. Můžete používat
<a href="http://www.aim.com/">samostatnou</a> verzi AIM nebo
<a href="http://www.aim.com/get_aim/express/aim_expr.adp">Java verzi</a> (pokud máte instalován Java zásuvný modul). </p>

<p>Vyvíjí se také Jabber instant messaging klient pro Mozillu, více na
<a href="http://jabberzilla.mozdev.org/">Jabberzille</a>.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-1.8"><a name="1.8">1.8. Jaké zdroje novinek a rad jsou zde k dispozici?</a></dt>
<dd id="answer-1.8">


<p>Následující stránky obsahují zdroje a novinky k Mozille:</p>
<ul>
<li>
<a href="http://www.mozillazine.org/">MozillaZine</a> &#8211;
včetně <a href="http://www.mozillazine.org/build_comments/">komentářů</a> každodenních <a href="jak-se-zapojit.html">verzí</a>
</li>

<li><a href="http://www.mozillanews.org/">MozillaNews</a></li>

<li>
<a href="http://www.deftone.com/blogzilla/">BlogZilla</a> &#8211;
tipy a novinky</li>

<li><a href="http://www.grayrest.com/moz/">Grayrest&#8217;s Mozilla
News</a></li>

<li>MozillaZine <a href="http://www.mozillazine.org/weblogs/">vývojářské weblogy</a>
</li>

</ul>

<p>Na stránkách <a href="http://www.mozilla.org/banners/">Mozilla reklamní bannery</a> jsou Mozilla bannery pro vaše stránky.</p>

<p>Pomocí inkoustové tiskárny a potisku (nakonec jde přece o otevřený projekt) si také můžete potisknout vlastní tričko s náměty
<a href="http://www.mozilla.org/banners/shirt2.gif">shirt2.gif</a> nebo <a href="http://www.mozilla.org/banners/shirt3.gif">shirt3.gif</a>.
Můžete si také koupit <a href="http://www.cafepress.com/cp/store/store.aspx?storeid=mozillazine">MozillaZine tričko</a>.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>


<dt id="question-1.9"><a name="1.9">1.9. Pro koho je určena Mozilla 1.5?</a></dt>
<dd id="answer-1.9">
<p>Mozilla 1.5 je plně funkční aplikace pro ty kteří se o Mozillu a její možnosti zajímají, a pro ty, kteří
chtějí vytvářet aplikace založené na Mozille. Mozilla je otevřený software a může ji tedy
jakákoli osoba nebo firma modifikovat a redistribuovat pokud je to v souladu s Mozilla Public Licence.
</p>

<p>Mozilla 1.5 je navíc připravena pro použití širokou veřejností. Všichni kdo mají zájem o používání
Mozilly jsou více než vítáni. Mozilla.org nyní také nabízí podporu pro koncové uživatele.
</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>


<dt id="question-1.10"><a name="1.10">1.10. Proč existuje tolik verzí Mozilly? Kterou mám používat?</a></dt>
<dd id="answer-1.10">
<p>Mozilla prochází rychlým vývojem a nové verze jsou nyní vydávány podle <a href="http://www.mozilla.org/roadmap.html">vývojového plánu [EN]</a>.
V roce 2003 byla Mozilla vydávána každého čtvrt roku.
</p>

<p>Pokud máte zájem používat nejnovější vymožnosti Mozilly doporučujeme používat poslední stabilní verzi. (alpha a beta jsou označení pro verze vývojové)
</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>

</dd>

</dl>

<?php
	$page->includeFooter();
?>