<?php
	require_once '../../inc/page.php';
	$page->setTitle('Instalace Mozilla Suite');
	$page->setHeadline('Instalace Mozilla Suite','Návod k instalaci Mozilla Suite');
	$page->setKeywords('podpora, nápověda, pomoc, návod, mozilla, suite');
	$page->setDescription('Návod k instalaci balíku internetových aplikací Mozilla Suite');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Vývoj aplikace Mozilla Suite <strong>byl ukončen</strong>,
jejím nástupcem s řadou novinek je aplikace <strong><a href="/produkty/seamonkey/">Seamonkey</a></strong>.</div>

<p>
<strong><a href="/produkty/suite/"
title="Mozilla - balík Internetových aplikací">Mozilla</a></strong> je
balík webových aplikací zaměřených na Internet. Obsahuje zejména
moderní webový prohlížeč, pokročilý e-mailový klient, editor webových
stránek a IRC klienta. Vyznačuje se též velkým důrazem na <strong>
<a href="/podpora/bezpecnost-mozilly-a-odvozenych-prohlizecu.php"
title="Bezpečnost Mozilly a odvozených prohlížečů">
bezpečnost uživatele</a></strong>. Celý balík je k dispozici
<strong><a href="/podpora/shrnuti-mpl.php" title="Licence Mozilly">
zdarma</a></strong> a v <strong>češtině</strong>.
</p>

<h3>Získání Mozilly</h3>
<p>
Mozillu můžete získat několika způsoby. Nejsnazší způsob je její
stažení ze stránek CZilly. Lokalizovaná verze je k dispozici pro
operační systémy Windows a Linux. V mém případě volím instalační
program pro Windows, který dále popíšu. Jeho velikost je přibližně 13
MB.
</p>

<p>
Další způsob získání Mozilly jsou <strong>CD přílohy časopisů</strong>. Tato možnost
je výhodná pro ty, kteří mají pomalé připojení k Internetu a nechce
se jim proto Mozillu stahovat.
</p>

<h3>Instalace</h3>
<p>
Nyní předpokládám, že máte Mozillu obstaránu. Dalším krokem je
tedy její instalace. Spusťte stažený či jiným způsobem získaný
instalační soubor. V mém případě se jedná o soubor
"<tt>mozilla-win32-1.7.2-csCZ-installer.exe</tt>" (ve vašem případě se může
jmenovat trochu jinak). Po spuštění se vám objeví následující okno:
</p>

<p><img src="images/instalace-vitejte.png"
alt="Úvodní okno instalačního programu" height="365" width="479" /></p>

<p>
Jedná se o úvodní okno instalačního programu, na kterém
naleznete informaci o verzi a doporučení ukončit všechny spuštěné aplikace.
<strong>Klepněte na tlačítko Další</strong>.
</p>

<p>
<img src="images/instalace-licence.png" alt="Okno s licenčním ujednáním"
height="365" width="479" /></p>

<p>
V následujícím okně musíte přijmout licenci. Odsouhlasením této
licence se z hlediska používání balíku k ničemu nezavazujete. Pro její
odsouhlasení <strong>klepněte na tlačítko Přijmout</strong>.
</p>

<p><img src="images/instalace-typ.png" alt="Volba typu instalace"
height="365" width="479" /></p>

<p>
Po odsouhlasení licence je potřeba zvolit typ instalace a místo,
kam se aplikace nainstaluje. Pro nejsnazší instalaci ponechte výchozí
hodnoty a <strong>klepněte na tlačítko Další</strong>.
</p>

<p><img src="images/instalace-turbo.png" alt="Rychlé spouštění"
height="365" width="479" /></p>

<p>
V předposledním dialogu máte možnost zvolit rychlé spouštění aplikace
Mozilla. Rozhodnete-li se pro rychlý start, bude v paměti část kódu stále
připravená k okamžitému spuštění. <strong>Klepněte na tlačítko Další</strong>.
</p>

<p><img src="images/instalace-zaver.png" alt="Závěrečné informace před instalací"
height="365" width="479" /></p>

<p>
Zobrazí se vám poslední okno průvodce před začátkem instalace.
Naleznete v něm všechny důležité informace týkající se instalace jako
jsou typ instalace, vybrané součásti apod. <strong>Po klepnutí na tlačítko
Instalovat se zahájí instalace</strong>. Po úspěšné instalaci se
Mozilla spustí.
</p>

<h3>Po prvním spuštění</h3>
<p><img src="images/instalace-asociace.png" alt="Nastavení výchozího prohlížeče"
height="123" width="475" /></p>

<p>
Po spuštění jste dotázáni, zda si přejete nastavit Mozillu jako
výchozí aplikaci pro prohlížení webových stránek. Pokud tak chcete
učinit, <strong>klepněte na tlačítko Ano</strong>. Webové stránky se
pak budou otevírat právě v prohlížeči Mozilla. Pokud si nejste jisti
nebo si přejete ponechat jako výchozí váš stávající prohlížeč,
klepněte na tlačítko Ne. Mozillu můžete nastavit jako výchozí i
kdykoliv později.
</p>

<?php
	$page->includeTemplate('footer');
?>

