<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Mozilla často kladené otázky');
	$page->setHeadline('Často kladené otázky','Mozilla FAQ: 2. Prohlížeč');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<ul>
<li><a href="#2.1">2.1. Mohu nainstalovat pouze prohlížeč bez všeho ostatního?</a></li>
<li><a href="#2.2">2.2. Jak udělám z Mozilly svůj výchozí prohlížeč?</a></li>
<li><a href="#2.3">2.3. Slyšel jsem o panelovém prohlížení [tabbed browsing]. Jak ho mohu používat?</a></li>
<li><a href="#2.4">2.4. Slyšel jsem o možnosti blokování vyskakovacích oken [popup blocking]. Jak se to udělá?</a></li>
<li><a href="#2.5">2.5. Jak nastavím klíčová slova záložek?</a></li>
<li><a href="#2.6">2.6. Obsahuje Mozilla podporu pro zásuvné moduly [plugin]?</a></li>
<li><a href="#2.7">2.7. Ovlivní odinstalování Netscape 4.x Mozillu?</a></li>
<li><a href="#2.8">2.8. Umí Mozilla ActiveX? (Windows)</a></li>
<li><a href="#2.9">2.9. Proč mi Mozilla nedovolí spouštět .exe (spustitelné soubory) přímo z Internetu?</a></li>
<li><a href="#2.10">2.10. Používám vytáčené spojení. Mohu nějak urychlit nahrávání stránek s mnoha obrázky?</a></li>
<li><a href="#2.11">2.11. Mohu nějak ovládat prohlížeč pomocí pohybů myši?</a></li>
<li><a href="#2.12">2.12. Změna velikosti textu není permanentní. Jak jí změním nastálo?</a></li>
<li><a href="#2.13">2.13. Právě jsem nainstaloval Mozillu a ona si přivlastnila soubory .jpeg a .gif. (Windows)</a></li>
<li><a href="#2.14">2.14. Jak nastavím Mozillu aby se automaticky připojovala přes vytáčené připojení? (Windows)</a></li>
<li><a href="#2.15">2.15. Jak vypnu automatické připojování? (Windows)</a></li>
</ul>


<dl class="faq">
<dt id="question-2.1"><a name="2.1">2.1. Mohu nainstalovat pouze prohlížeč bez všeho ostatního?</a></dt>
<dd id="answer-2.1">
<p>Ano. Vyberte &#8216;Vlastní&#8217; stahování nebo instalaci a zaškrtněte volby &#8216;Prohlížeč&#8217; a &#8216;Personal Security Manager&#8217;. (Personal Security Manager je potřeba pro prohlížení zabezpečených stránek.) </p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.2"><a name="2.2">2.2. Jak udělám z Mozilly svůj výchozí prohlížeč?</a></dt>
<dd id="answer-2.2">

<p>
Po prvním spuštění prohlížeče budete dotázáni, jestli chcete nastavit Mozillu jako svůj výchozí prohlížeč. Pokud odpovíte, že nechcete, a později se rozhodnete, že byste rádi měli Mozillu jako výchozí prohlížeč:
</p>
<ul>
<li><p>
<b>Windows:</b> přejděte na Edit | Preferences | Advanced | System. U položky &#8216;file types&#8217; zaškrtněte &#8216;HTML&#8217;, &#8216;XHTML&#8217; a &#8216;XML&#8217;, u položky &#8216;protokoly&#8217; zaškrtněte všechny možnosti. Z Mozilly můžete také učinit výchozí prohlížeč pro nejrůznější typy obrázků.
</p></li>

<li><p>
<b>MacOS X:</b> přejděte do Apple menu | System Preferences | Internet | Web | Default Browser | Select.
</p></li>

<li><p>
<b>MacOS 8, 9:</b> přejděte do Apple menu | Control Panels | Internet | Web | Default  Web Browser | Select.
</p></li>

<li><p>
<b>GNOME</b> <i>(Unix/Linux)</i><b>:</b> Spusťte Control Panel. Přejděte do Document Handlers | URL Handlers | Default: <kbd>gnome-moz-remote --newwin &quot;%s&quot;</kbd>. Pak vpište následující text do <tt>~/.gnome/gnome-moz-remote</tt> (pokud soubor neexistuje, tak jej vytvořte):
</p></li></ul>
<pre class="screen">
[Mozilla]
 filename=<b><i>absolutní cesta k adresáři, kde máte nainstalovanou Mozillu</i></b>/mozilla
</pre>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.3"><a name="2.3">2.3. Slyšel jsem o panelovém prohlížení [tabbed browsing]. Jak ho mohu používat?</a></dt>
<dd id="answer-2.3">
<ul>
<li>Ctrl-T otvírá nový panel. (<i>Macintosh:</i> pro tyto funkce použijte raději &#8216;Command&#8217; než &#8216;Ctrl&#8217;)</li>

<li>Ctrl-PgUp a Ctrl-PgDn cyklicky zaměňuje panely.</li>

<li>Kliknutím pravým tlačítkem myši na odkaz otevřete menu s nabídkou &#8216;Open Link In New Tab&#8217;. Lze také nastavit upřednostňování otevírání v novém panelu Ctrl-kliknutím nebo kliknutím prostředním tlačítkem myši na odkaz, případně stisknutím Ctrl-Enter při zadávání adresy do adresové lišty</li>

<li>Chcete-li uložit soubor panelů jako skupinu záložek, přejděte do Záložky | File Bookmark a zvolte &#8216;File as group&#8217;. Pokud potom tuto záložku otevřete, načtou se všechny panely. (<i>Pozn.:</i> prozatím není možné mít jako výchozí stránku takovouto skupinovou záložku.)</li>

<li>Pro nastavení předvoleb panelového prohlížení přejděte do Edit | Preferences | Navigator | Tabbed browsing.</li>

<li>Zatím není možné otevřít nový panel přímo ze záložek. Nejprve je třeba otevřít nový panel a pak teprve vybrat záložku, kterou si přejete otevřít.</li>

</ul>

<p>Inteligentnější prohlížeč využívající panelového prohlížení je vyvíjen na <a href="http://multizilla.mozdev.org/">MultiZille</a>.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.4"><a name="2.4">2.4. Slyšel jsem o možnosti blokování vyskakovacích oken [popup blocking]. Jak se to udělá?</a></dt>
<dd id="answer-2.4">

<p>Přejděte do Edit | Preferences | Advanced | Scripts &amp; Windows a odeberte vlastnosti, které nechcete v otvíraných stránkách dovolit. Zakázáním položky &#8216;Open unrequested windows&#8217; zablokujete otvírání vyskakovacích oken.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.5"><a name="2.5">2.5. Jak nastavím klíčová slova záložek?</a></dt>
<dd id="answer-2.5">
<p>Klíčová slova jsou zkratky pro záložky. Pro nastavení klíčového slova jděte do Bookmarks | Manage
Bookmarks a vyberte záložku, ke které chcete nastavit klíčové slovo. Klikněte na &#8216;Properties&#8217; a zadejte klíčové slovo pro danou záložku. Pak stačí napsat do adresové lišty klíčové slovo a prohlížeč načte příslušnou adresu ze záložky.</p>

<p>Více informací najdete na <a href="http://developer.netscape.com/evangelism/docs/articles/bookmarks/">Bookmark
Keywords [en]</a>.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.6"><a name="2.6">2.6. Obsahuje Mozilla podporu pro zásuvné moduly [plugin]?</a></dt>
<dd id="answer-2.6">
<p>Ano, ale většina modulů Mozillu nedetekuje automaticky. Zásuvné moduly, které pracují s Netscapem, Operou nebo Internet Explorerem 3-5 budou pracovat i s Mozillou.</p>

<p>Mozillou nadetekované zásuvné moduly můžete vidět v menu Help |
About Plug-ins.</p>

<p>Detaily k instalaci nejběžnějších zásuvných modulů (<i>např.</i>, Java,
Flash) jsou dostupné na <a href="/doplnky/zasuvne-moduly/">stránce o zásuvných modulech</a>.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.7"><a name="2.7">2.7. Ovlivní odinstalování Netscape 4.x Mozillu?</a></dt>
<dd id="answer-2.7">

<p>Mozilla používá zásuvné moduly z adresáře pro Netscape 4, pokud existuje (vyjma kompilací pro Mac OS X). Odinstalování Netscape 4 může tyto pluginy smazat, proto je třeba před odinstalováním Netscape 4 zkopírovat pluginy z Netscape 4 do adresáře modulů pro Mozilla. Přejděte do Help
| About Plug-ins, abyste zjistili, kde jsou aktuálně uloženy zásuvné moduly, které Mozilla používá.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.8"><a name="2.8">2.8. Umí Mozilla ActiveX? (Windows)</a></dt>
<dd id="answer-2.8">

<p>Mozilla nepodporuje ActiveX, zásuvný modul podporující ActiveX (a který také pracuje s Netscape 4.<i>x</i>) je zatím ve stádiu vývoje. Bude mít několik omezení: nebude sám stahovat a instalovat ovladače, bude pracovat pouze s ovladači, které jsou již nainstalovány a označeny jako bezpečné, tedy nebude tak nebezpečný jako obvykle ActiveX bývá. Nynější modul zatím neumožňuje použitím skriptů ovládat nastavení.</p>

<p>O pluginech najdete více na strankách <a href="http://www.iol.ie/~locka/mozilla/mozilla.htm">Mozilla ActiveX
Project</a>.</p>

<p>Nezapomeňte, že ActiveX může představovat bezpečnostní riziko pro váš počítač. </p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.9"><a name="2.9">2.9. Proč mi Mozilla nedovolí spouštět .exe (spustitelné soubory) přímo z Internetu?</a></dt>
<dd id="answer-2.9">

<p>Je to bezpečnostní opatření, kvůli zabránění působení různých potměšilých programů ve vašem počítači a na síti. Pokud zakážete programu spuštění přímo z Internetu, můžete se ujistit, že to, co jste spustili, je skutečně to, co jste chtěli spustit, a navíc můžete v případě nutnosti soubor prozkoumat antivirovým programem.</p>

<p>Ostatní soubory (dokumenty) lze samozřejmě stále otevřít přímo v Mozille.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.10"><a name="2.10">2.10. Používám vytáčené spojení. Mohu nějak urychlit nahrávání stránek s mnoha obrázky?</a></dt>
<dd id="answer-2.10">

<p>Jděte do Edit | Preferences | Advanced | HTTP Networking a zaškrtněte volbu &#8216;Enable Pipelining&#8217;. To spojí vše na stránce v jednu konexi, místo aby byla pro každou položku extra konexe.</p>

<p>Tato volba je ve výchozím stavu vypnuta, protože některé servery a proxy systémy mají s funkcí pipeline problémy. Tato funkce však ohromně zlepšuje prohlížení.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-2.11"><a name="2.11">2.11. Mohu nějak ovládat prohlížeč pomocí pohybů myši?</a></dt>
<dd id="answer-2.11">

<p>Rozšíření (extension) pro ovládání pohyby myší je ve stádiu vývoje na <a href="http://optimoz.mozdev.org/">OptiMoz</a>.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>

<dt id="question-2.12"><a name="2.12">2.12. Změna velikosti textu není permanentní. Jak jí změním nastálo?</a></dt>
<dd id="answer-2.12">
<p>Zvětšování a zmenšování textu je myšleno jako dočasná oprava při prohlížení stránek na kterých je
text buď přiliš malý nebo příliš velký. Jestliže vám nevyhovuje přednastavená velikost fontů, můžete
ji změnit v Nastaveních. Edit | Preferences | Appearance | Fonts. V pravé části panelu nastavte velikost fontů.
Můžete také nastavit minimální velikost jakéhokoli fontu. (Vemte na vědomí, že nastavení ja jazykově závislé
takže pokud používáte více jazyků je vhodné změny provést ve všech.)
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>

</dd>


<dt id="question-2.13"><a name="2.13">2.13. Právě jsem nainstaloval Mozillu a ona si přivlastnila soubory .jpeg a .gif. (Windows)</a></dt>
<dd id="answer-2.13">
<p>Otevřte Edit | Preferences | Advanced | System. V nastaveních asociací pro soubory obrázků odškrtněte
příslušné volby. Mozilla navrátí asociace do původního stavu.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>

<dt id="question-2.14"><a name="2.14">2.14. Jak nastavím Mozillu aby se automaticky připojovala přes vytáčené připojení? (Windows)</a></dt>
<dd id="answer-2.14">
<p>
Ve Windows 98 otevřete Control Panel (Start | Settings | Control Panel). Dvakrát klikněte na Internet Options.
Vyberte záložku s Connections. Nastavte "Dial whenever a network connection is not present". Nezapomeňte také
nastavit jedno z připojení jako přednastavené.
</p>
<p>
Ve Windows 2000/XP otevřte Control Panel (Start | Settings | Control Panel). Dvakrát klikněte na Administrative Tools a Services.
Hledejte následující:
</p>
<ul>
<li>Remote Access Connection Manager</li>
<li>Remote Access Auto Connection Manager</li>
<li>Telephony</li>
</ul>
<p>
Nastavte všechny tyto služby na "automatic".
</p>
<p>
Pozn.: Mozilla se neumí automaticky odpojovat.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>

<dt id="question-2.15"><a name="2.15">2.15. Jak vypnu automatické připojování? (Windows)</a></dt>
<dd id="answer-2.15">
<p>Jestliže chcete zapnout automatické připojování pro jiný program, ale nechcete aby se vám automaticky
připojovala Mozilla vložte <code>about:config</code> co lišty pro URL a najděte <code>network.autodial-helper.enabled</code>.
Nastavte hodnotu na false.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
</dl>

<?php
	$page->includeTemplate('footer');
?>

