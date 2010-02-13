<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Konfigurační soubory Thunderbirdu';
	$page->headline = array('Konfigurační soubory','Návod kde najít konfigurační soubory Thunderbirdu');

	$page->setKeywords('podpora, nápověda, pomoc, návod, mozilla, thunderbird, pošťák');
	$page->setDescription('Návod kde najít konfigurační soubory pošťáka Mozilla Thunderbird');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links'); 
	$page->addSideBox('tips','thunderbird');

	$page->includeHeader();
?>

<p id="top">Mnoho uvedených tipů a triků po vás vyžaduje editaci konfiguračních souborů
Thunderbirdu. Měli byste proto vědět o následujících třech souborech:</p>

<ul>
	<li><a href="#user">user.js</a> &ndash; používá se pro změnu různých
	nastavení programu.</li>

	<li><a href="#css">userChrome.css</a> &ndash; používá se pro změnu
	vzhledu programu.</li>

	<li><a href="#content">userContent.css</a> &ndash; používá se pro změnu
	vzhledu poštovních zpráv.</li>

</ul>

<p>Jedná se o prosté textové soubory uložené ve vašem
<a href="#profile">profilu</a>, které mohou být editovány použitím běžného textového editoru.
Postačí Poznámkový blok, <a href="http://www.texturizer.net/" lang="en"
hreflang="en">Texturizer</a> (Windows), gedit nebo kate (Linux).</p>

<h2 class="nice thunderbird" id="profile">Složka profilu</h2>
<p>Předtím, než budou představeny konfigurační soubory, byste měli
vědět, jak najít vaši "složku profilu". Složka profilu je místo, kam
Thunderbird ukládá veškerá vaše nastavení a
odkazuje na místo na pevném disku.</p>


<p>Ve <strong>Windows 2000/XP</strong> je cesta obvykle <span class="soubor"><a
href="#appdata"><var>%AppData%</var></a>\Thunderbird\Profiles\default\<var>xxxxxxxx</var>.slt\</span>,
kde <var>xxxxxxxx</var> je náhodný řetězec o délce 8 znaků. Jednoduše přejděte
do cesty <span class="soubor">C:\Documents and Settings\<var>[Jméno uživatele]</var>\Data Aplikací\Thunderbird\Profiles\</span> a zbytek by měl být zřejmý.</p>

<p>Ve <strong>Windows 95/98/Me</strong> je cesta obvykle
<span class="soubor">C:\WINDOWS\Application
Data\Thunderbird\Profiles\default\xxxxxxxx.slt\</span>.</p>

<p>V <strong>Linuxu</strong> je cesta obvykle
<span class="soubor">~/.thunderbird/default/<var>xxxxxxxx</var>.slt</span>.</p>

<p>V <strong>MacOS X</strong> je cesta obvykle
<span class="soubor">~/Library/Thunderbird/Profiles/default/<var>xxxxxxxx</var>.slt</span>.</p>


<p><strong>Poznámka:</strong> Thunderbird je schopen pracovat s více než jedním
uživatelem, a tedy i více než jedním profilem. Příklady cest uvedených
výše odkazují na <strong>výchozí profil</strong>, který je automaticky vytvořen,
když poprvé spustíte Thunderbird. Větší počet profilů můžete spravovat
použitím <a href="faq.html#profilemanager">Správce profilů</a>.</p>

<p id="appdata"><strong><var>%AppData%</var></strong> je zkratka pro cestu
do Application Data ve Windows 2000/XP. Použijete ji tak, že klepnete na <span
class="nabidka">Start -&gt; Spustit...</span>, zadáte <tt>%AppData%</tt> a
stisknete <kbd>Enter</kbd>. Budete přesunuti do "skutečné" složky, která má
cestu <span class="soubor">C:\Documents and Settings\<var>[Jméno Uživatele]</var>\Data
aplikací</span> (používáte-li anglická Windows, bude se adresář jmenovat
<var>Application Data</var>).</p>

<h2 id="user" class="nice thunderbird">user.js</h2>
<p>Jedná se o soubor s uživatelským nastavením pro Thunderbird, který je uložen ve
vaší <a href="#profile">složce profilu</a>. Ve výchozím stavu soubor
<em>neexistuje</em>, takže předtím, než začnete přidávat svá nastavení, jej
musíte vytvořit.</p>

<p><strong>Uživatelé Windows</strong>: Pokud víte, jak vytvořit soubor, přeskočte tuto sekci.
Předtím, než vytvoříte soubor, se ujistěte, že máte nastaveno zobrazování
přípon souborů ve Windows. Spusťte Průzkumníka (klepněte na ploše na ikonu Tento
počítač) a v nabídce zvolte <span class="nabidka">Soubor -&gt; Nástroje -&gt;
Možnosti složky...</span>. Klepněte na záložku <span class="nabidka">Zobrazit</span> a zrušte
zatržení volby <span class="nabidka">Skrýt přípony souborů známých typů</span>.
Nyní přejděte do vaší složky profilu a zvolte <span class="nabidka">Soubor &gt;
Nový -&gt; Textový Dokument</span>. Mělo by se zobrazit výchozí jméno <span class="nabidka">Nový
Textový Dokument.txt</span>. Změňte jméno na <em>user.js</em> (klepněte na <span
class="nabidka">Ano</span> v upozornění na typ souboru, které se zobrazí).</p>

<p><strong>Uživatelé Linuxu</strong>: Předpokládáme, že pokud používáte Linux,
víte, jak vytvořit textový soubor. Prostě vytvořte <span
class="soubor">user.js</span> ve vaší složce s profilem.</p>

<h2 id="css" class="nice thunderbird">userChrome.css</h2>
<p>Tento soubor nastavuje pravidla zobrazení různých prvků uživatelského
rozhraní Thunderbirdu a je umístěn v podsložce pojmenované <span class="soubor">chrome</span> ve vaší
<a href="#profile">složce profilu</a>. Stejně jako <a href="#user">user.js</a>,
i tento soubor ve výchozím stavu <em>neexistuje</em>, takže předtím, než
začnete přidávat svá nastavení, jej musíte vytvořit.</p>

<h2 id="content" class="nice thunderbird">userContent.css</h2>
<p>Tento soubor nastavuje pravidla zobrazení pro obsah zpráv a je umístěn
v podsložce pojmenované <span class="soubor">chrome</span> ve vaší <a href="#profile">složce profilu</a>.
Stejně jako <a href="#user">user.js</a>, i tento soubor ve výchozím
stavu <em>neexistuje</em>, takže předtím, než začnete přidávat svá nastavení,
jej musíte vytvořit.</p>

<p><a href="#top">Na začátek stránky</a></p>

<?php
	$page->includeFooter();
?>
