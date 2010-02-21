<?php
	require_once '../../inc/page.php';
	$page->setTitle('Jak a proč používat panel RSS čtečka');
	$page->setHeadline('Panel RSS čtečka','Jak a proč používat panel RSS čtečka');
	$page->setKeywords('podpora, pomoc, návod, rss, čtečka');
	$page->setDescription('Práce s nainstalovanou RSS čtečkou v Mozilla Firefoxu');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<h2 class="nice">Co je to panel RSS čtečka?</h2>

<p>Panel RSS čtečka (v originále <i>RSS Reader panel</i>) je součástí české verze prohlížeče Mozilla Firefox (pokud používáte anglickou verzi prohlížeče Mozilla Firefox, můžete si do ní panel RSS čtečka snadno přidat ve formě rozšíření &ndash; viz <a href="http://fls.moo.jp/moz/rssreader.html">domovská stránka projektu</a>). Panel RSS čtečka slouží ke snadnému zobrazování RSS přímo ve vašem prohlížeči.</p>

<h3>Co je to RSS a k čemu se hodí?</h3>
<p>RSS je jednoduše řečeno soubor, který umožní aplikacím (např. RSS čtečce) zjistit, zda se na vašem oblíbeném webu objevily nové články. Umí dokonce zjistit názvy těchto článků, případně i ukázky jejich obsahu (to již ale záleží na redaktorech daného webu).</p>
<p>Pokud denně procházíte řadu svých oblíbených webů a kontrolujete, zda na nich nevyšly nové články, bude se vám pravděpodobně RSS čtečka hodit. Pokud do ní zařadíte RSS všech svých oblíbených webů (jak to udělat si řekneme níže), nemusíte procházet všechny oblíbené weby, ale stačí, abyste nechali RSS čtečku načíst RSS soubory těchto webů.</p>
<p>Snadno a rychle tak zjistíte, na kterých webech se objevily nové články a dle názvů se můžete rozhodnout, zda vás tyto články zajímají. To ocení zejména uživatelé s pomalým připojením k internetu (modemisté), protože místo toho, aby se z webů stahovala celá stránka se spoustou obrázků a reklam, stáhne se jen malý soubor se seznamem posledních článků.</p>


<h2 class="nice">Jak RSS čtečku používat?</h2>
<p>Používání RSS čtečky je snadné. RSS čtečku si zobrazíte pomocí nabídky <tt>Zobrazit / Postranní lišta / RSS čtečka</tt> (můžete použít i klávesovou zkratku <tt>Alt+R</tt>).</p>

<div class="mainsplash"><img src="images/rssreader.png" alt="Mozilla Firefox s RSS čtečkou" width="463" height="397" /></div>

<p>RSS čtečka používá pro uchovávání seznamu RSS vašich oblíbených webů záložky prohlížeče Mozilla Firefox. Proto je třeba vybrat složku záložek, do které budete své RSS ukládat (pomocí volby <tt>Nástroje / Nastavení...</tt> RSS čtečky). Po instalaci české verze prohlížeče Mozilla Firefox najdete složku se jménem <b>RSS</b>, která již obsahuje RSS několika webů.</p>
<div class="mainsplash"><img src="images/rssreader-settings.png" alt="Nastavní RSS čtečky" width="407" height="291" /></div>

<h3>Přidáváme RSS oblíbených webů</h3>
<p>Rozhodli jste se RSS čtečku použít a chcete přidat RSS svého oblíbeného webu? Nejprve je třeba nalézt odkaz (URL) na RSS toho webu. Obvykle se nachází hned na úvodní stránce webu jako odkaz, případně ikonka s nápisem RSS. Až ji najdete, přidejte si ji do záložek (pomocí volby "<tt>Přidat odkaz k záložkám</tt>" v kontextové nabídce na odkazu).</p>

<div class="mainsplash"><img src="images/rssreader-add-rss.png" alt="Přidání RSS odkazu" width="447" height="334" /></div>

<p>Záložku je třeba přidat do složky, kterou jste si pro RSS vyhradili (v našem případě se jmenuje "RSS").</p>

<div class="mainsplash"><img src="images/rssreader-add-bookmark.png" alt="Přidání RSS do záložek" width="314" height="139" /></div>

<p>Přidané RSS by se mělo hned objevit ve vaší čtečce. Pokud na něj kliknete, načtou se titulky posledních článků do dolní části panelu. Pokud byste rádi viděli i ukázky textů článků, zaškrtněte volbu <tt>Zobrazit / Otevřít v rozšířeném módu</tt> na RSS čtečce a znovu nahrajte RSS vašeho webu.</p>

<h3>Hledáme články</h3>
<p>RSS čtečka umožňuje vyhledávat v článcích pomocí tzv. RSS agregátorů. To je výhodné, když hledáte více článků na nějaké téma. Pokud chcete tuto možnost využít, zaškrtněte volbu <tt>Zobrazit / Zobrazit pole vyhledávání</tt> na RSS čtečce. Objeví se vyhledávací pole:</p>

<div class="mainsplash"><img src="images/rssreader-search.png" alt="Vyhledávací pole RSS čtečky" width="205" height="208" /></div>

<p>Pomocí tohoto pole můžete vyhledávat články podobně jako v internetových vyhledávačích (např. <a href="http://www.google.com/">Googlu</a>). Výhodou je, že RSS agregátory obnovují svou databázi mnohem častěji než internetové vyhledávače (např. v intervalu několika hodin), proto zde nalezené informace jsou mnohem aktuálnější.</p>

<p>Výchozím nastaveným agregátorem pro vyhledávání je agregátor <a href="http://feedster.com/">Feedster</a>, který shromažďuje RSS z celého světa. Pokud chcete hledat české články, doporučuji vám jej zaměnit (kliknutím na ikonu s písmenem "<tt>F</tt>") za český agregátor <a href="http://www.kratce.cz/">Krátce</a>.</p>

<h3>Import/export</h3>
<p>Pokud potřebujete často přenášet RSS seznamy mezi počítači, nebo je chcete poslat vašim přátelům, použijte volby <tt>Nástroje / Import/Export</tt> RSS čtečky &ndash; vaše RSS odkazy budou uloženy do <tt>*.opml</tt> souboru, který na jiném počítači do RSS čtečky opět snadno importujete.</p>

<?php
	$page->includeTemplate('footer');
?>