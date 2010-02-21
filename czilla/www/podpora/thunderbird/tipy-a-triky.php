<?php
	require_once '../../inc/page.php';
	$page->setTitle('Tipy a triky pro pošťáka Thunderbird');
	$page->setHeadline('Tipy a triky','Jak si můžete upravit pošťáka Thunderbird');
	$page->setKeywords('podpora, tipy, triky, nápověda, pomoc, návod, mozilla, thunderbird, pošťák');
	$page->setDescription('Stránka s různými tipy a triky pro pošťáka Mozilla Thunderbird');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<p id="top">Tato stránka obsahuje různé tipy a triky pro <a href="./">Mozilla
Thunderbird</a>. Většina těchto
tipů vyžaduje editaci textových souborů na vašem pevném disku a nedoporučuje se,
pokud si nejste 100% jisti se základním používáním souborů a složek.
</p>

<div><strong><a href="#vzhled-programu">Vzhled programu</a></strong>
	<ul>
		<li><a href="#pouziti-jinych-barev">Použití jiných barev pro úrovně citace</a></li>
		<li><a href="#cela-jmena-diskusnich-skupin">Zobrazovat jména diskusních skupin rozvinutá, ne zkrácená</a></li>
		<li><a href="#zmena-barvy-pozadi">Změna barvy pozadí pro Seskupit tříděním</a></li>
	</ul>
</div>

<div><strong><a href="#chovani-programu">Chování programu</a></strong>
	<ul>
		<li><a href="#kontrola-vsech-imap">Kontrola všech IMAP složek na nové zprávy</a></li>
		<li><a href="#nezobrazovat-okno-odesilani">Nezobrazovat okno průběhu odesílání</a></li>
		<li><a href="#zmena-hlavicky-odpovedi">Změna hlavičky odpovědi</a></li>
		<li><a href="#ochrana-panelu-zprav">Ochrana panelu zpráv heslem (pouze <acronym title="Internet Message Access Protocol">IMAP</acronym>)</a></li>
		<li><a href="#pamatovat-stav-serveru">Pamatovat si stav serverů diskusních skupin v panelu složek</a></li>
		<li><a href="#otevirat-odkazy-ze-zprav">Otevírat odkazy ze zpráv v nových záložkách prohlížeče</a></li>
		<li><a href="#zmena-chovani-prejit">Změna chování Přejít na další zprávu</a></li>
		<li><a href="#zmena-url">Změna <acronym title="Uniform Resource Locator">URL</acronym> throbberu</a></li>
		<li><a href="#nastaveni-casu-upozorneni">Nastavení času do upozornění na novou zprávu</a></li>
	</ul>
</div>


<h2 id="vzhled-programu" class="nice thunderbird">Vzhled programu</h2>

<h3 id="pouziti-jinych-barev">Použití jiných barev pro úrovně citace</h3>

<img src="images/tips_quotelevels.png" alt="Náhled použití barev pro odlišení urovní citací" />

<p>Tento tip je velmi užitečný, protože nastavuje různé barvy jak textu,
tak pozadí jednotlivých úrovní citací ve zprávách. To například velmi usnadňuje
sledování dlouhých diskusí v diskusních skupinách, kde úroveň citací při
odpovědích může jít velmi hluboko.</p>

<p>Samozřejmě si můžete barvy v kódu uvedeném níže přizpůsobit dle vlastního vkusu.
Přidejte následující kód do vašeho souboru <a
href="konfigurace.php#content">userContent.css</a>:</p>

<pre class="codearea"><code>/* Barvy úrovní citací */
blockquote[type=cite] {
   color: navy !important; background-color: RGB(245,245,245) !important;
}
blockquote[type=cite] blockquote {
   color: maroon !important; background-color: RGB(235,235,235) !important;
}
blockquote[type=cite] blockquote blockquote {
   color: green !important; background-color: RGB(225,225,225) !important;
}
blockquote[type=cite] blockquote blockquote blockquote {
   color: purple !important; background-color: RGB(215,215,215) !important;
}
blockquote[type=cite] blockquote blockquote blockquote blockquote {
   color: teal !important; background-color: RGB(205,205,205) !important;
}</code></pre>


<h3 id="cela-jmena-diskusnich-skupin">Zobrazovat jména diskusních skupin rozvinutá, ne zkrácená</h3>
<p>Jména serverů diskusních skupin se v panelu složek zobrazují
zkrácená. Chcete-li místo toho zobrazovat plná jména, přidejte následující
kód do vašeho souboru <a href="konfigurace.php#user">user.js</a>:</p>

<pre class="codearea"><code>// Nezkracovat jména diskusních skupin:
user_pref("mail.server.default.abbreviate", false);
</code></pre>

<h3 id="zmena-barvy-pozadi">Změna barvy pozadí pro Seskupit tříděním</h3>

<p>Můžete změnit barvu pozadí pro titulky Seskupit tříděním ("Dnes", "Včera", a tak dále).
Pouze přidejte následující kód do vašeho souboru
<a href="konfigurace.php#css">userChrome.css</a>:</p>

<pre class="codearea"><code>/* Změní barvu pozadí pro
   Seskupit tříděním "Dnes, Včera a tak dále..." */
treechildren::-moz-tree-row(dummy)  {
   background-color:  <acronym title="Změňte tento kód barvy na jakoukoliv barvu, kterou chcete použít.">#96C0EF</acronym> !important;
   margin-bottom: 1px !important;
   padding-left: 2px !important;
}

treechildren::-moz-tree-row(dummy, selected) {
   background-color: -moz-Dialog !important;
}

treechildren::-moz-tree-row(dummy, selected, focus)  {
   background-color: Highlight !important;
}

treechildren::-moz-tree-cell-text(dummy) {
   font-weight: bold !important;
}
</code></pre>

<p><a href="#top">Na začátek stránky</a></p>


<h2 id="chovani-programu" class="nice thunderbird">Chování programu</h2>

<h3 id="kontrola-vsech-imap">Kontrola všech <acronym title="Internet Message Access Protocol"
lang="en">IMAP</acronym> složek na nové zprávy</h3>

<p>Thunderbird může stáhnout poštu ze všech účtů při spuštění programu.
Pouze přidejte následující kód do vašeho souboru <a
href="konfigurace.php#user">user.js</a>:</p>

<pre class="codearea"><code>// Stáhnout zprávy ze všech účtů při spuštění
user_pref("mail.check_all_imap_folders_for_new", true);</code></pre>

<h3><a id="nezobrazovat-okno-odesilani">Nezobrazovat okno průběhu odesílání</a></h3>

<p>Můžete si zvolit skrytí okna průběhu, které se zobrazuje při odesílání zprávy, přidáním
následujícího kódu do vašeho souboru
<a href="konfigurace.php#user">user.js</a>:</p>

<pre class="codearea"><code>// Nezobrazovat okno průběhu odesílání
user_pref("mailnews.show_send_progress", false);
</code></pre>


<h3 id="zmena-hlavicky-odpovedi">Změna hlavičky odpovědi</h3>

<p>Standardní hlavičku odpovědi <q>[autor] napsal:</q> můžete změnit
prakticky na cokoliv, a své e-maily přizpůsobit svým potřebám.
Upravte a přidejte následující kód do vašeho souboru <a
  href="konfigurace.php#user">user.js</a>, pokyny jsou v
komentářích:</p>

<pre class="codearea"><code>// Změna hlavičky odpovědi
// 0 - Žádná hlavička
// 1 - "[Autor] napsal:"
// 2 - "Dne [datum] [autor] napsal:"
// 3 - Uživatelsky definovaná hlavička odpovědi. Použijte příkazy níže v kombinaci s tímto:
user_pref("mailnews.reply_header_type", 3);

// Pokud jste nastavili 3 pro příkaz výše, potom můžete nastavit následující.
user_pref("mailnews.reply_header_authorwrote", "%s napsal následující");
user_pref("mailnews.reply_header_ondate", "dne %s");
user_pref("mailnews.reply_header_separator", " ");
user_pref("mailnews.reply_header_colon", ":");
// Konečný výsledek bude ve tvaru [authorwrote][separator][ondate][colon]
</code></pre>


<h3 id="ochrana-panelu-zprav">Ochrana panelu zpráv heslem (pouze <acronym
title="Internet Message Access Protocol" lang="en">IMAP</acronym>)</h3>

<p>S tímto trikem bude Mozilla Thunderbird chránit heslem panel seznamu zpráv (známý též jako
panel vláken) tak, že jej ponechá prázdný, dokud se nepřihlásíte heslem pro příslušný účet.</p>

<pre class="codearea"><code>// Chránit heslem panel seznamu zpráv
user_pref("mail.password_protect_local_cache", true);
</code></pre>


<h3 id="pamatovat-stav-serveru">Pamatovat si stav serverů diskusních skupin v panelu složek</h3>

<p>V zájmu snížení zátěže na serverech diskusních skupin sbalí Thunderbird ve
výchozím nastavení při startu jména serverů, takže nekontroluje přítomnost
nových zpráv. Perzistenci diskusních
skupin můžete zapnout přidáním následujícího kódu do vašeho souboru
<a href="konfigurace.php#user">user.js</a>:</p>

<pre class="codearea"><code>// Pamatovat si stav serverů diskusních skupin v panelu složek:
user_pref("news.persist_server_open_state_in_folderpane", true); </code></pre>


<h3 id="otevirat-odkazy-ze-zprav">Otevírat odkazy ze zpráv v nových záložkách prohlížeče</h3>

<p>Pokud jako prohlížeč používáte <a href="/produkty/firefox/">Firefox</a>, můžete
otvírat odkazy z poštovních zpráv
v nových záložkách (nebo oknech) místo využití existujícího okna prohlížeče. Pokud toto
chcete nastavit, postupujte podle instrukcí na stránkách
<a href="/podpora/firefox/tipy-a-triky.php#beh_reuse">nápovědy k programu Mozilla Firefox</a>.</p>


<h3 id="zmena-chovani-prejit">Změna chování Přejít na další zprávu</h3>

<p>Když klepnete na tlačítko Další (nebo když zvolíte
<span class="nabidka">Přejít -> Další -> Nepřečtená zpráva</span>
či stisknete klávesu <kbd>N</kbd>), jste normálně přesunuti na další nepřečtenou zprávu v aktuální
složce. Pokud nejsou ve složce další nepřečtené zprávy, Thunderbird se vás
zeptá, zda-li chcete postoupit do další složky obsahující nepřečtené zprávy.
Toto chování můžete změnit přidáním (a úpravou) následujícího kódu do vašeho
souboru <a href="konfigurace.php#user">user.js</a>:</p>

<pre class="codearea"><code>// Toto nastavení mění chování "Přejít na další nepřečtenou zprávu v [x] složce"
// <strong>0</strong> - Vždy přejít do další složky bez dotazování
// <strong>1</strong> - Dotázat se před přejitím (výchozí chování)
// <strong>2</strong> - Nikdy nepřecházet do další složky s nepřečtenými zprávami
user_pref("mailnews.nav_crosses_folders", <strong>1</strong>);</code></pre>


<h3 id="zmena-url">Změna <acronym title="Uniform Resource Locator">
URL</acronym> throbberu</h3>

<p>Když klepnete na throbber (ikona v pravém horním rohu hlavního okna), jste
přesměrováni na <a href="http://www.mozilla.org/">www.mozilla.org</a>. Tato
adresa může být změněna na jakoukoliv adresu (<abbr title="Uniform Resource
Locator" lang="en">URL</abbr>) přidáním následujícího kódu do vašeho souboru <a
href="konfigurace.php#user">user.js</a>:</p>

<pre class="codearea"><code>// Klepnutím na throbber přejít na Thunderbird nápovědu:
user_pref("messenger.throbber.url", "http://www.mozilla.org/support/thunderbird/");</code></pre>


<h3 id="nastaveni-casu-upozorneni">Nastavení doby zobrazení oznámení nové zprávy</h3>

<p>Když je přijata nová poštovní zpráva, zobrazí se malé upozornění v pravém
dolním rohu obrazovky. Pomocí tohoto tipu můžete určit dobu zobrazení oznámení.
Přidejte následující kód do vašeho souboru
<a href="konfigurace.php#user">user.js</a>:</p>

<pre class="codearea"><code>// Určení doby zobrazení oznámení nové zprávy (v milisekundách):
user_pref("alerts.totalOpenTime", 4000);</code></pre>

<p><a href="#top">Na začátek stránky</a></p>

<?php
	$page->includeTemplate('footer');
?>
