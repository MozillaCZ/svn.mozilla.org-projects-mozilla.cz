<?php
	$rootPath = '../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Přehled předvoleb about:config';
	$page->headline = array('Přehled předvoleb about:config','Pokročilá konfigurace aplikací Mozilla');

	$page->includeHeader();
?>

<h2>Accessibility.*</h2>
<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>accessibility. accesskeycausesactivation</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>
			(výchozí): Použití klíčové klávesy vyvolá stejný efekt, jako kliknutí myší na příslušný prvek.<br />
			<strong>False</strong>: Na příslušném prvku bude funkční pouze klíčová klávesa.
		</td>
	</tr>
	<tr>
		<th>accessibility. browsewithcaret</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Povolí zobrazení znaku ^ v okně prohlížeče k provedení výběru textu klávesnicí.<br />
			<strong>False</strong>
			(výchozí): Zakáže zobrazení znaku ^ v okně prohlížeče.<br />
			Toto nastavení lze přepínat klávesou 
			<code>[F7]</code>.
		</td>
	</tr>
	<tr>
		<th>accessibility. disablecache</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Zákaz kešování dle 
			<a href="http://www.mozilla.org/access/windows/msaa-server" title="Stránky o MSAA anglicky" hreflang="en">normy MSAA</a><br />
			<strong>False</strong>
			(výchozí): MSAA kešování je aktivní
		</td>
	</tr>
	<tr>
		<th>accessibility. disableenumvariant</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Zákaz 
			<a href="http://www.mozilla.org/access/windows/msaa-server" title="Stránky o MSAA anglicky" hreflang="en">MSAA </a>
			volání 
			<a href="http://www.mozilla.org/access/windows/at-apis#perf" title="Stránky na mozilla.org, anglicky" hreflang="en">IEnumVARIANT</a><br />
			<strong>False</strong>
			<a href="http://www.mozilla.org/access/windows/at-apis#perf" title="Stránky na mozilla.org, anglicky" hreflang="en">IEnumVARIANT</a>
			je aktivní
		</td>
	</tr>
	<tr>
		<th>accessibility. tabfocus</th>
		<td>Integer</td>
		<td>
			Určuje, které prvky webové stránky lze zvýraznit/vybrat stiskem klávesy 
			<code>
				[Tab]
				</code>.
				<br />
				<strong>1</strong>: Pouze textové položky formuláře
				<br />
				<strong>2</strong>: Všechny ovládací prvky formuláře mimo textových položek
				<br />
				<strong>3</strong>: Všechny ovládací prvky
				<br />
				<strong>4</strong>: Hyperlinky a obrázkové hyperlinky
				<br />
				<strong>7</strong>
				(výchozí): Všechny ovládací prvky a hyperlinky
		</td>
	</tr>
	<tr>
		<th>accessibility. tabfocus_applies_to_xul</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>
			(výchozí pro Mac OS X): Umožní výběr XUL prvků klávesou 
			<code>
				[Tab]
				</code>
				dle nastavení 
				<strong>accessibility.tabfocus</strong>. Další informace najdete na stránce 
				<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=277516" title="Popis chyby 277516 na mozilla.org" hreflang="en">Chyba 277516</a>.
				<br />
				<strong>False</strong>
				(výchozí všude jinde): Opak výše uvedeného.
		</td>
	</tr>
	<tr>
		<th>accessibility. typeaheadfind</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Aktivuje 
			<a href="http://www.mozilla.org/access/type-ahead/" title="Popis vlastnosti Hledání psaním na mozilla.org" hreflang="en">Hledání psaním</a>.<br />
			<strong>False</strong>
			(původní): Zákaz Hledání psaním.<br />
			Poznámka: Ve Firefoxu lze toto nastavení pomocí menu změnou nastavení v: "Nástroje/Tools - Možnosti/Options - Ostatní/Advanced - Usnadnění/Accessibility - Psaním vyhledávat text na stránce/Begin finding when you begin typing"
		</td>
	</tr>
	<tr>
		<th>accessibility. typeaheadfind. autostart</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>
			(výchozí): 
			<a href="http://www.mozilla.org/access/type-ahead/" title="Popis vlastnosti Hledání psaním na mozilla.org" hreflang="en">Hledání psaním</a>
			bude automaticky spuštěno v okamžiku zahájení psaní, pokud textový kurzor nebude umístěn v textové oblasti nebo textovém rámečku.<br />
			<strong>False</strong>:	Hledání psaním bude spuštěno pouze stiskem znaku 
			<code>
				/
				</code>
				pro hledání slova a stiskem klávesy 
				<code>
					"
					</code>
					pro hledání internetového odkazu.
		</td>
	</tr>
	<tr>
		<th>accessibility. typeaheadfind. enablesound</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>
			(výchozí): 
			<a href="http://www.mozilla.org/access/type-ahead/" title="Popis vlastnosti Hledání psaním na mozilla.org" hreflang="en">Hledání psaním</a>
			přehraje zvuk po napsání znaku, jestliže po jeho napsání žádný výraz na stránce neodpovídá hledanému vzoru. <br />
			<strong>False</strong>: Hledání psaním nebude přehrávat žádné zvuky.
		</td>
	</tr>
	<tr>
		<th>accessibility. typeaheadfind. enabletimeout</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>
			(výchozí): 
			<a href="http://www.mozilla.org/access/type-ahead/" title="Popis vlastnosti Hledání psaním na mozilla.org" hreflang="en">Hledání psaním</a>
			bude ukončeno po uplynutí nastaveného času od stisku poslední klávesy. (Čas se nastavuje v 
			<strong>accessibility.typeaheadfind.timeout</strong>
			).<br />
			<strong>False</strong>:	Hledání psaním nebude ukončeno uplynutím časové lhůty.	K ukončení Hledání psaním lze použít klávesu 
			<code>
				[F7]
			</code>.
		</td>
	</tr>
	<tr>
		<th>accessibility. typeaheadfind. flashBar</th>
		<td>Integer</td>
		<td>
			<strong>0</strong>: Po nalezení výsledku bude lišta Hledání psaním skryta<br />
			<strong>1</strong>: Lišta Hledání po nalezení výsledku zůstane viditelná.<br />
			Poznámka: Podobně jako ve Firefoxu 1.0, je tato vlastnost ve stádiu tzv. nestabilní verze. Nemusí být plně funkční.
		</td>
	</tr>
	<tr>
		<th>accessibility. typeaheadfind. linksonly</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: 
			<a href="http://www.mozilla.org/access/type-ahead/" title="Popis vlastnosti Hledání psaním na mozilla.org" hreflang="en">Hledání psaním</a>
			bude prohledávat pouze odkazy.<br />
			<strong>False</strong>
			(výchozí): Hledání psaním bude prohledávat veškerý text.
		</td>
	</tr>
	<tr>
		<th>accessibility. typeaheadfind. soundURL</th>
		<td>String</td>
		<td>
			Prohlížeč přehraje zvuk, pokud 
			<a href="http://www.mozilla.org/access/type-ahead/" title="Popis vlastnosti Hledání psaním na mozilla.org" hreflang="en">Hledání psaním</a>
			nenalezne výraz.<br />
			<strong>(filename)</strong>: Prohlížeč přehraje jako chybové upozornění soubor 
			<code>.wav
			</code><br />
			<strong>původní</strong>
			(výchozí): Výchozí zvuk<br />
			<strong>beep</strong>: Systémové pípnutí
		</td>
	</tr>
	<tr>
		<th>accessibility. typeaheadfind. startlinksonly</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Pokud máte nastaveno vyhledávání odkazů, 
			<a href="http://www.mozilla.org/access/type-ahead/" title="Popis vlastnosti Hledání psaním na mozilla.org" hreflang="en">Hledání psaním</a>
			bude vyhledávat jen v textu odkazů.<br />
			<strong>False</strong>
			(výchozí): Hledání psaním bude procházet celé texty označené jako odkazy.
		</td>
	</tr>
	<tr>
		<th>accessibility. typeaheadfind. timeout</th>
		<td>Integer</td>
		<td>
			Počet milisekund, které 
			<a href="http://www.mozilla.org/access/type-ahead/" title="Popis vlastnosti Hledání psaním na mozilla.org" hreflang="en">Hledání psaním</a>
			bude čekat na stisk klávesy před skrytím lišty Hledání psaním. Původní hodnota je 
			<strong>5000</strong>.
		</td>
	</tr>
	<tr>
		<th>accessibility. usebrailledisplay</th>
		<td>String</td>
		<td>
			Určuje modul použitý k Braillovu zobrazení. Původní hodnota je prázdný řetězec.<br />
			Poznámka: Nyní nepoužíváno. 
			<a href="http://access-mozilla.sourceforge.net/" title="Odkaz na stránky na sourceforge.net/">Plánováno pro budoucí použití</a>.
		</td>
	</tr>
	<tr>
		<th>accessibility. usetexttospeech</th>
		<td>String</td>
		<td>
			Specifikuje řečový modul pro použití s prohlížečem (např. "ViaVoice"). Původní hodnota je prázdný řetězec.<br />
			Poznámka: V současnosti nefunkční.
		</td>
	</tr>
	<tr>
		<th>accessibility. warn_on_browsewithcaret</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>
			(výchozí): Budete vyzváni k povolení používání značky ^ k prohledávání z klávesnice. Další informace najdete u popisu nastavení vlastnosti 
			<strong>accessibility.browsewithcaret</strong>.<br />
			<strong>False</strong>: Opak výše uvedeného.
		</td>
	</tr>
</tbody>
</table>
</div>

<h2>Advanced.*</h2>
<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>advanced. always_load_images</th>
		<td>Boolean</td>
		<td>
			Nastavení odstraněno 
			<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=300084" title="Stránka s popisem chyby číslo 300084" hreflang="en">(nepoužito)</a>. Pozůstatek z Netscape 4.x (tam položka general.always_load_images). Původní hodnota je 
			<strong>true</strong>.
		</td>
	</tr>
	<tr>
		<th>advanced. mailftp</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Použije vybranou emailovou adresu (hodnota v 
			<strong>network.ftp.anonymous_password</strong>
			) jako heslo pro anonymní FTP servery<br />
			<strong>False</strong>
			(původní): Odešle jako heslo původní "mozilla@example.com" .
		</td>
	</tr>
	<tr>
		<th>advanced. system. supportDDEExec</th>
		<td>Boolean</td>
		<td>
			Používáno dříve (před verzí Firefox 0.9) k otevření odkazů z vnějších zdrojů v záložkách v jediného okna.	Nyní 
			<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=257011" title="Stránka s popisem chyby č. 257011" hreflang="en">překonáno</a>
			snadným nastavením v předvolbách v "Nástroje/Tools &rarr; Možnosti/Options &rarr; Ostatní/Advanced &rarr; Prohlížení v panelech/Tabbed Browsing". Původní hodnota je 
			<strong>true</strong>.
		</td>
	</tr>
</tbody>
</table>
</div>

<h2>Alerts.*</h2>
<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>alerts. height</th>
		<td>Integer</td>
		<td>
			Výška výstražného rámečku v pixelech. Původní hodnota je 
			<strong>50</strong>.
		</td>
	</tr>
	<tr>
		<th>alerts. slideIncrement</th>
		<td>Integer</td>
		<td>
			Kolik pixelů činí jeden krok při "posunu" výstražného rámečku. Původní hodnota je 
			<strong>1</strong>.
		</td>
	</tr>
	<tr>
		<th>alerts. slideIncrementTime</th>
		<td>Integer</td>
		<td>
			Kolik milisekund trvá posun výstražného rámečku o jeden krok při "klouzavém" posunu. Původní hodnota je 
			<strong>10</strong>.
		</td>
	</tr>
	<tr>
		<th>alerts. totalOpenTime</th>
		<td>Integer</td>
		<td>
			Kolik milisekund bude výstraha zobrazena. Původní hodnota je 
			<strong>4000</strong>.
		</td>
	</tr>
</tbody>
</table>
</div>

<h2>App.*</h2>
<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>app. build_id</th>
		<td>String</td>
		<td>
			Nastavení bylo odstraněno 
			<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=273417" title="Stránka s popisem chyby číslo 273417" hreflang="en">(překonané)</a>. Dříve: Datum verze (sestavení) ve formátu RRRRMMDD (R-rok;M-měsíc;D-den)
		</td>
	</tr>
	<tr>
		<th>app. extensions. version</th>
		<td>String</td>
		<td>
			Verze prohlížeče využívaná rozšířeními pro kontrolu kompatibility
		</td>
	</tr>
	<tr>
		<th>app. id</th>
		<td>String</td>
		<td>
			Nastavení bylo odstraněno 
			<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=273417" title="Stránka s popisem chyby číslo 273417" hreflang="en">(překonané)</a>. Dříve: GUID (
			<strong>G</strong>
			lobally 
			<strong>U</strong>
			nique 
			<strong>ID</strong>
			entifier, další informace například 
			<a href="http://www.webopedia.com/term/g/guid.html" title="Definice pojmu GUID v encyklopedii Webopedia" hreflang="en">zde</a>
			) odpovídající programu. Původní hodnota pro Firefox je 
			<strong><code>{ec8030f7-c20a-464f-9b0e-13a3a9e97384}</code></strong>.
		</td>
	</tr>
	<tr>
		<th>app. update. autoInstallMode</th>
		<td>Integer</td>
		<td>
			Pokud je povolena automatická aktualizace prohlížeče na pozadí, určí, jak se naloží s aktualizací po dokončení stahování.<br />
			<strong>0</strong>
			(původní): Instalace aktualizace proběhne automaticky bez upozornění<br />
			<strong>1</strong>: Před instalací se zobrazí výzva k povolení aktualizace<br />
			<strong>2</strong>: Výzva se zobrazí před veškerou činností v souvislosti s aktualizací 
			<strong>ZDE SI NEJSEM JIST</strong><br />
			Poznámka: Pouze pro verze Firefox 1.1 a vyšší.
		</td>
	</tr>
	<tr>
		<th>app. update. autoUpdateEnabled</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>
			(původní): Pravidelná kontrola na serveru addons.mozilla.org na pozadí zjišťuje dostupné aktualizace prohlížeče<br />
			<strong>False</strong>: Zákaz všech kontrol dostupných aktualizací prohlížeče<br />
			Poznámka: Ve Firefoxu lze změnit v "Nástroje/Tools &rarr; Možnosti/Options &rarr; Ostatní/Advanced &rarr; Aktualizace software/Software Update &rarr; Opakovaně kontrolovat aktualizace následujících komponent - Firefox/Periodically check for updates to Firefox"
		</td>
	</tr>
	<tr>
		<th>app. update. enabled</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Umožnit aktualizace prohlížeče<br />
			<strong>False</strong>
			(původní): Zakázat aktualizace prohlížeče<br />
			Poznámka: Využití nepochybně omezeno díky jednoduššímu nastavení uvedenému v 
			<strong>app.update.autoUpdateEnabled</strong>
		</td>
	</tr>
	<tr>
		<th>app. update. interval</th>
		<td>Integer</td>
		<td>
			Počet sekund mezi kontrolami dostupných aktualizací. Původní hodnota je 
			<strong>86400</strong>
			(1 den).
		</td>
	</tr>
	<tr>
		<th>app. update. lastUpdateDate</th>
		<td>Integer</td>
		<td>
			Čas poslední aktualizace ve formátu období používaného v systémech UNIX (sekundy od 1.1.1970)
		</td>
	</tr>
	<tr>
		<th>app. update. logEnabled</th>
		<td>
			Boolean
		</td>
		<td>
			<strong>True</strong>
			(původní nastavení): Záznam činnosti aktualizační služby do souboru <br />
			<strong>False</strong>: Zákaz záznamu<br />
			Poznámka: Pouze pro noční připojení. 
			<strong>ZDE SI NEJSEM JIST</strong>
		</td>
	</tr>
	<tr>
		<th>app. update. nagTimer. download</th>
		<td>Integer</td>
		<td>
			Čas v sekundách, který uplyne mezi zobrazením výzvy ke stažení nové verze od okamžiku jejího zjištění. Původní hodnota je 
			<strong>86400</strong>
			(1 den).
		</td>
	</tr>
	<tr>
		<th>app. update. nagTimer. restart</th>
		<td>Integer</td>
		<td>
			Čas v sekundách, který uplyne mezi zobrazením výzvy, aby uživatel restartoval prohlížeč a dokončením instalace poslední aktualizace. Původní hodnota je 
			<strong>1800</strong>
			(30 minut).
		</td>
	</tr>
	<tr>
		<th>app. update. performed</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Aktualizace prohlížeče mohou být instalovány v současné relaci <br />
			<strong>False</strong>
			(původní): Prohlížeč nebude aktualizován během současné relace
		</td>
	</tr>
	<tr>
		<th>app. update. timer</th>
		<td>Integer</td>
		<td>
			Počet milisekund mezi kontrolami všech doporučených závislých aktualizací časovačů. 
			<strong>ZDE SI NEJSEM JIST</strong>
			Původní hodnota je 
			<strong>5000</strong>
			(5 sekund).<br />
			Poznámka: Pouze pro verzi Firefox 1.1 a vyšší.
		</td>
	</tr>
	<tr>
		<th>app. update. updatesAvailable</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Instalátor našel novou aktualizaci<br />
			<strong>False</strong>
			(původní): Není k dispozici nic ke stažení nebo instalaci
		</td>
	</tr>
	<tr>
		<th>app. update. url</th>
		<td>String</td>
		<td>
			URL adresa pro oznámení aktualizace prohlížeče. Původní hodnota je umístěna v 
			<strong>chrome://mozapps/locale/update/updates.properties</strong>.
		</td>
	</tr>
	<tr>
		<th>app. update. url. manual</th>
		<td>String</td>
		<td>
			URL adresa, kterou může uživatel navštívit ručně, pokud selže aktualizační služba. Původní umístění je v 
			<strong>chrome://mozapps/locale/update/updates.properties</strong>.
		</td>
	</tr>
	<tr>
		<th>app. update. url. override</th>
		<td>String</td>
		<td>
			Uživatelsky nastavitelný seznam URL, který je je upřednosněn před 
			<strong>app.update.url</strong>, je určen pro testovací účely. Umístění je v 
			<strong>chrome://mozapps/locale/update/updates.properties</strong>.
		</td>
	</tr>
	<tr>
		<th>app. version</th>
		<td>String</td>
		<td>
			Nastavení bylo odstraněno 
			<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=273417" title="Stránka s popisem chyby číslo 273417" hreflang="en">(překonané)</a>. Dříve: Číslo verze prohlížeče
		</td>
	</tr>
</table>
</div>

<h2>Bidi.*</h2>
<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>bidi. browser. ui</th>
		<td>Boolean</td>
		<td>
			<strong>True</strong>: Umožní v uživatelském rozhraní prohlížeče použít dvojjazyčné nastavení<br />
			<strong>False</strong>
			(false): Opak výše uvedeného.
		</td>
	</tr>
	<tr>
		<th>bidi. characterset</th>
		<td>Integer</td>
		<td>
			Stanoví způsob, který prohlížeč použije k výběru znakové sady<br />
			<strong>1</strong>
			(původní): Znaková sada určena hlavičkou dokumentu<br />
			<strong>2</strong>: Původní znaková sada nastavená v prohlížeči
		</td>
	</tr>
	<tr>
		<th>bidi. controlstextmode</th>
		<td>Integer</td>
		<td>
			Jaké ovladače jsou použity<br />
			<strong>1</strong>
			(původní): Logické<br />
			<strong>2</strong>: Obrazové<br />
			<strong>3</strong>: Schránka
		</td>
	</tr>
	<tr>
		<th>bidi. direction</th>
		<td>Integer</td>
		<td>
			Určí směr toku textu<br />
			<strong>1</strong>
			(původní): Od levého okraje vpravo (např. jako v češtině)<br />
			<strong>2</strong>: Od pravého okraje doleva (např. jako v hebrejštině)
		</td>
	</tr>
	<tr>
		<th>bidi. numeral</th>
		<td>Integer</td>
		<td>
			Jak jsou zobrazena čísla<br />
			<strong>0</strong>
			(původní): Nominální hodnoty<br />
			<strong>1</strong>: Obvyklé kontextové číslice<br />
			<strong>2</strong>: Indické kontextové číslice<br />
			<strong>3</strong>: Arabské číslice<br />
			<strong>4</strong>: Indické číslice
		</td>
	</tr>
	<tr>
		<th>bidi. support</th>
		<td>Integer</td>
		<td>
			Výběr poskytovatele interaktivní podpory<br />
			<strong>1</strong>
			(původní): Mozilla<br />
			<strong>2</strong>: OS<br />
			<strong>3</strong>: Zakázáno
		</td>
	</tr>
	<tr>
		<th>bidi. texttype</th>
		<td>Integer</td>
		<td>
			Vkládaný text<br />
			<strong>1</strong>
			(původní): Znaková sada<br />
			<strong>2</strong>: Logický<br />
			<strong>3</strong>: Obrazový
		</td>
	</tr>
</table>
</div>

<h2>Browser.*</h2>
<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>browser. active_color</th>
		<td>Řetězec</td>
		<td>Barva aktivního odkazu(zapsaná jako číslo v šestnáctkové soustavě). Výchozí hodnota je <strong><code>#EE0000</code></strong>.</td>
	</tr>
	<tr>
		<th>browser. anchor_color</th>
		<td>Řetězec</td>
		<td>Barva odkazu(zapsaná jako číslo v šestnáctkové soustavě). Výchozí hodnota je <strong><code>#0000EE</code></strong><br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Písma &amp; Barvy... &rarr; Nenavštívené odkazy</span>".</td>
	</tr>
	<tr>
		<th>browser. backspace_action</th>
		<td>Číslo</td>
		<td>Určuje chování klávesy backspace <br/><strong>0</strong>: Přejde o jednu stránku zpět<br/><strong>1</strong>: Stejný účinek jako klávesa Page Up<br/><strong>2</strong> (a vyšší): Nedělá nic<br/>Poznámka: Tato předvolba se týká pouze Mozilla Suite (viz. <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=301248"	title="https://bugzilla.mozilla.org/show bug.cgi?id=301248">bug 301248</a>)</td>
	</tr>
	<tr>
		<th>browser. blink_allowed</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Jestliže je ve zdrojovém kódu stránky použit tag blink nebo <a href="http://kb.mozillazine.org/CSS" title="CSS">CSS</a> vlastnost <code><a href="http://www.w3.org/TR/CSS21/text.html#propdef-text-decoration" title="http://www.w3.org/TR/CSS21/text.html#propdef-text-decoration">text-decoration: blink</a></code>, pak bude daný element blikat.<br/><strong>False</strong>: Blikání elementů je zakázáno.</td>
	</tr>
	<tr>
		<th>browser. bookmarks. added_static_root</th>
		<td>Boolean</td>
		<td>Zjišťuje, zda byl v souboru <span class="soubor">bookmarks.html</span> vytvořen kořenový adresář pro systémové (importované) záložky.<br/><strong>True</strong>: Kořenový adresář již byl vytvořen<br/><strong>False</strong> (výchozí, dokud se neprovede import): Vytvoří se kořenový adresář, (pokud nejsou používány dynamické záložky - <strong>browser.bookmarks.import_system_favorites</strong>) a tato předvolba je nastavena na true.</td>
	</tr>
	<tr>
		<th>browser. block. target_new_window</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Odkazy, které mají nastaven parametr target na <code>_blank</code>, se otevřou v právě otevřeném panelu a ne v novém okně.<br/><strong>False</strong>: Odkazy, které mají nastaven parametr target na <code>_blank</code>, se otevřou v novém okně.<br/>Poznámka: Tato předvolba je ignorována. Místo ní se používá <strong>browser.link.open_newwindow</strong>.</td>
	</tr>
	<tr>
		<th>browser. bookmarks. file</th>
		<td>Řetězec</td>
		<td>Úplná cesta a jméno vašeho souboru se záložkami (<span class="soubor">bookmarks.html</span>). Jen pro Windows: Jestliže je tato předvolba nastavena ručně (v souborech <span class="soubor">user.js</span> nebo <span class="soubor">prefs.js</span>), pak se musí zdvojovat zpětná lomítka (např. "<span class="soubor">C:\\Cesta\\K\\bookmarks.html</span>"). Jestliže je ale nastavena přes <strong>about:config</strong>, tak se zpětná lomítka nezdvojují.</td>
	</tr>
	<tr>
		<th>browser. bookmarks. import_system_favorites</th>
		<td>Boolean</td>
		<td>Určuje, jak aktualizovat systémové záložky.<br/><strong>True</strong>: Povolit "aktuální dohled" na systémové záložky(při startu prohlížeče se vždy aktualizují)<br/><strong>False</strong> (výchozí): Opak výše uvedeného.<br/>Poznámka: Pokud se tato předvolba nastaví na "true", pak toto zabrání smazání záložek, které byly importované z Internet Exploreru (viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=22642" title="https://bugzilla.mozilla.org/show bug.cgi?id=22642">bug 22642</a>).</td>
	</tr>
	<tr>
		<th>browser. bookmarks. livemark_refresh_seconds</th>
		<td>Číslo</td>
		<td>Počet sekund mezi dvěma aktualizacemi aktuálních záložek. Hodnoty menší než 60 se automaticky upravují na 60; výchozí hodnota je <strong>3600</strong> (1 hodina).</td>
	</tr>
	<tr>
		<th>browser. bookmarks. restore_default_bookmarks</th>
		<td>Boolean</td>
		<td><b>True</b>: Soubor <span class="soubor">bookmarks.html</span> chybí nebo je poškozený; obnovit jej ze zálohy<br/><b>False</b> (default): Neobnovovat poškozený nebo chybějící soubor se záložkami<br/>Poznámka: Pouze pro Firefox 1.5 a vyšší</td>
	</tr>
	<tr>
		<th>browser. bookmarks. sort. direction</th>
		<td>Řetězec</td>
		<td>Způsob, jakým jsou řazeny záložky ve správci záložek.<br/><strong>descending</strong> (výchozí): Nesetříděné<br/><strong>natural</strong>: Abecedně, A-Z<br/><strong>ascending</strong>: Abecedně, Z-A<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Záložky &rarr; Správce záložek... &rarr; Zobrazit</span>"</td>
	</tr>
	<tr>
		<th>browser. bookmarks. sort. resource</th>
		<td>Řetězec</td>
		<td>Zdroj rdf, který se použije při třídění záložek ve správci záložek<br/><strong>rdf:<a href="http://home.netscape.com/NC-rdf#Name"	title="http://home.netscape.com/NC-rdf#Name">http://home.netscape.com/NC-rdf#Name</a></strong> (výchozí): podle názvu<br/><strong>rdf:<a href="http://home.netscape.com/NC-rdf#URL"	title="http://home.netscape.com/NC-rdf#URL">http://home.netscape.com/NC-rdf#URL</a></strong>: podle umístění<br/><strong>rdf:<a href="http://home.netscape.com/NC-rdf#ShortcutURL"	title="http://home.netscape.com/NC-rdf#ShortcutURL">http://home.netscape.com/NC-rdf#ShortcutURL</a></strong>: podle klíčového slova<br/><strong>rdf:<a href="http://home.netscape.com/NC-rdf#Description"	title="http://home.netscape.com/NC-rdf#Description">http://home.netscape.com/NC-rdf#Description</a></strong>: podle popisu<br/><strong>rdf:<a href="http://home.netscape.com/NC-rdf#BookmarkAddDate"	title="http://home.netscape.com/NC-rdf#BookmarkAddDate">http://home.netscape.com/NC-rdf#BookmarkAddDate</a></strong>: podle data přidání<br/><strong>rdf:<a href="http://home.netscape.com/WEB-rdf#LastModifiedDate"	title="http://home.netscape.com/WEB-rdf#LastModifiedDate">http://home.netscape.com/WEB-rdf#LastModifiedDate</a></strong>: podle data poslední změny<br/><strong>rdf:<a href="http://home.netscape.com/WEB-rdf#LastVisitDate"	title="http://home.netscape.com/WEB-rdf#LastVisitDate">http://home.netscape.com/WEB-rdf#LastVisitDate</a></strong>: podle data poslední návštěvy<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Záložky &rarr; Správce záložek... &rarr; Zobrazit</span>"</td>
	</tr>
	<tr>
		<th>browser. cache. check_doc_frequency</th>
		<td>Číslo</td>
		<td>Určuje, jak často se má zjišťovat, jestli není na internetu k dispozici novější verze stránky než je ta, která je uložena ve vyrovnávací paměti<br/><strong>0</strong>: Zjišťovat jen jednou za relaci(session)<br/><strong>1</strong>: Zjišťovat při každém zobrazení stránky<br/><strong>2</strong>: Nikdy nezjišťovat (použít verzi uloženou ve vyrovnávací paměti)<br/><strong>3</strong> (výchozí): Zjistit, kdy stránce vyprší platnost (určeno automaticky)</td>
	</tr>
	<tr>
		<th>browser. cache. disk. capacity</th>
		<td>Číslo</td>
		<td>Velikost diskového prostoru (v KB), který se použije pro uložení vyrovnávací paměti. Výchozí hodnota je <strong>50000</strong>.<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti &rarr; Soukromí &rarr; Vyrovnávací disková paměť</span>"</td>
	</tr>
	<tr>
		<th>browser. cache. disk. enable</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Povolit diskovou vyrovnávaci paměť(její maximální velikost nastavuje předvolba <strong>browser.cache.disk.capacity</strong>)<br/><strong>False</strong>: Zakázat diskovou vyrovnávací paměť (má stejný účinek, jako když se nastaví předvolba <strong>browser.cache.disk.capacity</strong> na 0)</td>
	</tr>
	<tr>
		<th>browser. cache. disk. parent_directory</th>
		<td>Řetězec</td>
		<td>Plná cesta ke složce pro diskovou vyrovnávací paměť. Jen pro Windows: Jestliže je tato předvolba nastavena ručně (v souborech <span class="soubor">user.js</span> nebo <span class="soubor">prefs.js</span>), pak se musí zdvojovat zpětná lomítka (např. "<span class="soubor">C:\\Cesta\\K\\bookmarks.html</span>"). Jestliže je ale nastavena přes <strong>about:config</strong>, tak se zpětná lomítka nezdvojují.</td>
	</tr>
	<tr>
		<th>browser. cache. disk_cache_ssl</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Ukládat do vyrovnávací paměti stránky zabezpečené protokolem <abbr title="Secure Sockets Layer">SSL</abbr> (bezpečnostní riziko!)<br/><strong>False</strong> (výchozí): Neukládat do vyrovnávací paměti zabezpečené stránky<br/>Poznámka: Více informací viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=205921"	title="https://bugzilla.mozilla.org/show bug.cgi?id=205921">bug 205921</a></td>
	</tr>
	<tr>
		<th>browser. cache. memory. capacity</th>
		<td>Číslo</td>
		<td>Určuje, jak má prohlížeč ukládat svoji vyrovnávací paměť do paměti RAM.<br/><strong>-1</strong> (výchozí): <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=105344"	title="https://bugzilla.mozilla.org/show bug.cgi?id=105344">Automaticky zabrat část paměti</a> (podle její velikosti)<br/><strong>0</strong>: zakázat ukládání vyrovnávací paměti do RAM<br/><strong>(n)</strong>: Zabrat maxinálně <strong>n</strong> KB v paměti RAM.</td>
	</tr>
	<tr>
		<th>browser. cache. memory. enable</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Povolit ukládání vyrovnávací paměti do RAM (velikost zabrané RAM určuje předvolba <strong>browser.cache.memory.capacity</strong> - tedy pokud je nastavena; pokud nastavena není se automaticky zabere část fyzické paměti RAM (viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=105344"	title="https://bugzilla.mozilla.org/show bug.cgi?id=105344">bug 105344</a><br/><strong>False</strong>: Zakázat ukládání vyrovnávací paměti do RAM (má stejný účinek, jako když se nastaví předvolba <strong>browser.cache.memory.capacity</strong> na 0)</td>
	</tr>
	<tr>
		<th>browser. chrome. favicons</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Načíst a zobrazit "ikonu stránky (favicon)", která je s danou stránkou asociovaná<br/><strong>False</strong>: Opak výše uvedeného<br/>Poznámka: Tato předvolba by měla být nastavena na stejnou hodnotu jako <strong>browser.chrome.site_icons</strong>.</td>
	</tr>
	<tr>
		<th>browser. chrome. image_icons. max_size</th>
		<td>Číslo</td>
		<td>Jestliže je šířka nebo výška obrázku větší než tato předvolba,
			tak se pro daný obrázek nezobrazí v panelu (nebo v poli <span class="nabidka">Umístění</span>) žádná miniatura.
			Pokud se tato předvolba nastaví na <b>0</b>, tak se nebudou používat vůbec žádné miniatury. Výchozí hodnota je <b>1024</b> pixelů.<br/>
			Poznámka: Pouze pro Firefox 1.5 a vyšší.</td>
	</tr>
	<tr>
		<th>browser. chrome. load_toolbar_icons</th>
		<td>Číslo</td>
		<td><strong>0</strong> (výchozí): Když se zobrazují záložky v nabídkách, tak k nim nikdy nenačítat ikony stránek (má vyšší prioritu než <strong>browser.chrome.site_icons</strong>)<br/><strong>1</strong>: Načíst ikony stránek pouze v případě, že již byly uloženy do vyrovnávací paměti<br/><strong>2</strong>: Vždy načítat ikony stránek</td>
	</tr>
	<tr>
		<th>browser. chrome. site_icons</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Načíst a zobrazit ikonu stránky (specifikovaná v elementu <code>link</code>)<br/><strong>False</strong>: Opak výše uvedeného<br/>Poznámka: Tato předvolba by měla být nastavena na stejnou hodnotu jako <strong>browser.chrome.favicons</strong>.</td>
	</tr>
	<tr>
		<th>browser. chrome. toolbar_style</th>
		<td>Číslo</td>
		<td>Určuje styl nástrojové lišty v prohlížeči<br/><strong>0</strong>: Pouze obrázky<br/><strong>1</strong>: Pouze text<br/><strong>2</strong> (výchozí): Obrázky i text</td>
	</tr>
	<tr>
		<th>browser. chrome. toolbar_tips</th>
		<td>Boolean</td>
		<td>Určuje chování bublinkové nápovědy u grafického rozhraní prohlížeče.<br/><strong>True</strong> (výchozí): Zobrazit bublinkovou nápovědu u tlačítek nástrojových lišt a u záložek (zde zobrazit jméno a URL)<br/><strong>False</strong>: Zakázat bublinkovou nápovědu</td>
	</tr>
	<tr>
		<th>browser. chromeURL</th>
		<td>Řetězec</td>
		<td>Umístění definice grafického rozhraní(chrome); používá se jen při startu prohlížeče. Výchozí hodnota je <strong>chrome://browser/content/</strong></td>
	</tr>
	<tr>
		<th>browser. display. background_color</th>
		<td>Řetězec</td>
		<td>Výchozí barva pozadí stránek (zapsaná jako číslo v šestnáctkové soustavě). Tato předvolba se týká prázdných panelů, těch stránek, které nemají explicitně nastavenu barvu pozadí a chybových stránek ve formátu XUL. Výchozí hodnota je <strong><code>#FFFFFF</code></strong>.<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Písma &amp; Barvy... &rarr; Text a pozadí &rarr; Pozadí</span>"</td>
	</tr>
	<tr>
		<th>browser. display. focus_background_color</th>
		<td>Řetězec</td>
		<td>Výchozí barva pozadí elementů, které jsou označeny (zapsaná jako číslo v šestnáctkové soustavě). Výchozí hodnota je <strong><code>#117722</code></strong>. Aby měla tato předvolba nějaký efekt, tak musí být <strong>browser.display.use_focus_colors</strong> nastaveno na true</td>
	</tr>
	<tr>
		<th>browser. display. focus_ring_on_anything</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Orámovat libovolné označené elementy na stránce(standartně se rámují jen odkazy)<br/><strong>False</strong> (výchozí): Orámovat pouze označené odkazy</td>
	</tr>
	<tr>
		<th>browser. display. focus_ring_width</th>
		<td>Číslo</td>
		<td>Šířka orámování označeného elementu.<br/><strong>0</strong>: Orámování se nezobrazí<br/><strong>1</strong> (výchozí): Tečky tvořící orámování budou velké 1 pixel<br/><strong>(n)</strong>: Tečky tvořící orámování budou velké <strong>n</strong> pixelů. Poznámka: Ve Firefoxu 1.0 je největší možná hodnota 4. Vyšší hodnoty se projeví jako 1.</td>
	</tr>
	<tr>
		<th>browser. display. focus_text_color</th>
		<td>Řetězec</td>
		<td>Výchozí barva pro text označeného elementu (zapsaná jako číslo v šestnáctkové soustavě). Výchozí hodnota je <strong><code>#ffffff</code></strong>. Aby měla tato předvolba nějaký efekt, tak musí být <strong>browser.display.use_focus_colors</strong> nastaveno na true</td>
	</tr>
	<tr>
		<th>browser. display. force_inline_alttext</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Místo chybějících obrázků se zobrazí alternativní text (<code>alt</code>), a to na jednom řádku<br/><strong>False</strong> (výchozí): Pokud je prohlížeč v Quirks módu a chybějící obrázek nemá žádný alternativní text (<code>alt</code>) nebo má nastaveny rozměry, tak se na jeho místě zobrazí ikona chybějícího obrázku.</td>
	</tr>
	<tr>
		<th>browser. display. foreground_color</th>
		<td>Řetězec</td>
		<td>Výchozí barva popředí stránky (zapsaná jako číslo v šestnáctkové soustavě).
Tato předvolba se týká stránek, které nemají explicitně nastaveny barvu textu
a chybovýchstránek ve fomátu XUL.
Výchozí hodnota je <strong><code>#000000</code></strong>.<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Písma &amp; Barvy... &rarr; Text a pozadí &rarr; Text</span>"</td>
	</tr>
	<tr>
		<th>browser. display. normal_lineheight_calc_control</th>
		<td>Číslo</td>
		<td>Determine method of calculating line-height (leading) in layout<br/><strong>-1</strong>: Uninitialized<br/><strong>0</strong>: Don't include external leading<br/><strong>1</strong>: Use what the font vendor provides<br/><strong>2</strong> (výchozí): Compensate leading if vendor's leading is insufficient</td>
	</tr>
	<tr>
		<th>browser. display. screen_resolution</th>
		<td>Číslo</td>
		<td>Určuje počet bodů na palec. Tato předvolba ovlivní výpočet těch vlastností <a href="http://kb.mozillazine.org/CSS" title="CSS">CSS</a>, které mají absolutní délkovou jednotku (např. pt, mm).<br/><strong>-1</strong>: Prohlížeč není schopen zjistit rozlišení <br/><strong>0</strong>: Použít systémové rozlišení<br/><strong>(n)</strong>: Nastavit počet bodů na palec na <strong>n</strong>. Výchozí hodnota je <strong>96</strong>.<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Písma &amp; Barvy... &rarr; Rozlišení obrazovky</span>"</td>
	</tr>
	<tr>
		<th>browser. display. show_image_placeholders</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Zobrazit symbol obrázku, dokud není daný obrázek načten<br/><strong>False</strong>: Opak výše uvedeného</td>
	</tr>
	<tr>
		<th>browser. display. use_document_colors</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Povolit stránkám používat své vlastní barvy<br/><strong>False</strong>: Opak výše uvedeného<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Písma &amp; Barvy... &rarr; Vždy používat mé barvy</span>"</td>
	</tr>
	<tr>
		<th>browser. display. use_document_fonts</th>
		<td>Číslo</td>
		<td><strong>0</strong>: Nikdy nepoužívat písma, která definuje stránka<br/><strong>1</strong>: Povolit stránkám používat svá vlastní písma<br/><strong>2</strong>: Vždy použít písma, která definuje daná stránka (nedoporučuje se)<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit (jen mezi <strong>0</strong> a <strong>1</strong>) přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Písma &amp; Barvy... &rarr; Vždy používat má písma</span>"</td>
	</tr>
	<tr>
		<th>browser. display. use_focus_colors</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Nastavovat barvy u označených elementů podle předvoleb(např. <strong>browser.display.focus_text_color</strong>)<br/><strong>False</strong> (výchozí): Neměnit barvy u označených elementů</td>
	</tr>
	<tr>
		<th>browser. display. use_system_colors</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Při zobrazování stránek používat systémové barvy<br/><strong>False</strong> (výchozí): Opak výše uvedeného<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Písma &amp; Barvy... &rarr; Použít systémové barvy</span>"</td>
	</tr>
	<tr>
		<th>browser. dom. document. all. disabled</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Zakázat emulaci nestandartní kolekce <code>document.all</code> (výmysl <abbr title="Internet Explorer">IE</abbr>)<br/><strong>False</strong> (výchozí): Povolit nedetekovatelnou podporu <code>document.all</code> (v quirks módu; viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=248549"	title="https://bugzilla.mozilla.org/show bug.cgi?id=248549">bug 248549</a>)</td>
	</tr>
	<tr>
		<th>browser. dom. global_scope_pollution. disabled</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Zakázat přímý přístup k parametru ID (výmysl <abbr title="Internet Explorer">IE</abbr>).<br/><strong>False</strong> (výchozí): Automaticky přidat ID do globálního kontextu (čili zpřístupnit je přes objekt <code>window</code>; v quirks módu).</td>
	</tr>
	<tr>
		<th>browser. dom. window. dump. enabled</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Povolit <a href="http://kb.mozillazine.org/JavaScript" title="JavaScript">JavaScriptový</a> <a href="http://kb.mozillazine.org/Viewing_dump%28%29_output" title="Viewing dump() output"> výstup pomocí <code>dump()</code></a><br/><strong>False</strong>: Opak výše uvedeného</td>
	</tr>
	<tr>
		<th>browser. download. defaultFolder</th>
		<td>Řetězec</td>
		<td>Nastavuje cestu k výchozí složce pro stahované soubory. O jaký "druh" složky jde nastavuje předvolba <strong>browser.download.folderList</strong>. Tato předvolba není standartně zadána; zapíše se až tehdy, když si uživatel nastaví možnosti stahování.</td>
	</tr>
	<tr>
		<th>browser. download. dir</th>
		<td>Řetězec</td>
		<td>Složka, do které byl pomocí dialogu "Co má (browser) udělat s tímto souborem?" uložen poslední stahovaný soubor.</td>
	</tr>
	<tr>
		<th>browser. download. downloadDir</th>
		<td>Řetězec</td>
		<td>Určuje složku, do které se uloží stahovaný soubor, pokud je předvolba <strong>browser.download.useDownloadDir</strong> nastavena na <strong>false</strong>.</td>
	</tr>
	<tr>
		<th>browser. download. folderList</th>
		<td>Číslo</td>
		<td>Určuje, která z vnitřně nastavených složek se použije jako výchozí pro stahování<br/><strong>0</strong> (výchozí): plocha<br/><strong>1</strong>: složka "moje stažené soubory"<br/><strong>2</strong>: složka, do které byl uložen poslední stažený soubor<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Stahování &rarr; Složka pro stahování &rarr; Uložit všechny soubory do složky</span>"</td>
	</tr>
	<tr>
		<th>browser. download. hide_plugins_without_extensions</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Skrýt v dialogu <span class="nabidka">Download Actions</span> všechny zásuvné moduly, které nejsou asociovány s žádnou příponou souboru.<br/><strong>False</strong>: Opak výše uvedeného.</td>
	</tr>
	<tr>
		<th>browser. download. lastDir</th>
		<td>Řetězec</td>
		<td>Cesta ke složce, kam byl naposledy přes dialog <span class="nabidka">Uložit stránku jako...</span> uložen soubor.</td>
	</tr>
	<tr>
		<th>browser. download. manager. alertOnEXEOpen</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Zobrazit varování, když se uživatel pokouší ze <span class="nabidka">Správce stahování</span> otevřít spustitelný soubor<br/><strong>False</strong>: Nezobrazit žádné varování a spustit soubor<br/>Poznámka: Tuto předvolbu lze ve Firefoxu změnit tím, že se v dialogu <span class="nabidka">Otevřít spustitelný soubor?</span> zaškrtne <span class="nabidka">Příště se již neptat</span>.</td>
	</tr>
	<tr>
		<th>browser. download. manager. closeWhenDone</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Zavřít správce stahování po dokončení všech stahování<br/><strong>False</strong> (výchozí): Opak výše uvedeného<br/>Poznámka:
Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Stahování &rarr;
Správce stahování &rarr; Zavřít správce stahování souborů po dokončení všech stahování</span>"</td>
	</tr>
	<tr>
		<th>browser. download. manager. flashCount</th>
		<td>Číslo</td>
		<td>Kolikrát má okno <span class="nabidka">Správce stahování</span> zablikat,
jestliže okno <span class="nabidka">Správce stahování</span> není v popředí.
Výchozí hodnota je <strong>2</strong>. Pokud je tato předvolba nastavena na 0, tak se blikání zakáže.</td>
	</tr>
	<tr>
		<th>browser. download. manager. focusWhenStarting</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Vynést okno <span class="nabidka">Správce stahování</span> do popředí, když se začíná stahovat<br/><strong>False</strong> (výchozí): Vytvořit okno v pozadí</td>
	</tr>
	<tr>
		<th>browser. download. manager. openDelay</th>
		<td>Číslo</td>
		<td>Jestliže stažení souboru zabere méně než touto předvolbou nastavený počet milisekund,
tak vůbec nezobrazovat okno <span class="nabidka">Správce stahování</span>.
Výchozí hodnota je <strong>0</strong> (vždy zobrazit okno <span class="nabidka">Správce stahování</span>).</td>
	</tr>
	<tr>
		<th>browser. download. manager. retention</th>
		<td>Číslo</td>
		<td>Kdy odebrat soubory ze <span class="nabidka">Správce stahování</span><br/><strong>0</strong>: Po úspěšném stažení<br/><strong>1</strong>: Po ukončení aplikace<br/><strong>2</strong> (výchozí): Ručně<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Soukromí &rarr; Historite správce stahování</span>"</td>
	</tr>
	<tr>
		<th>browser. download. manager. showAlertInterval</th>
		<td>Číslo</td>
		<td>Čas (v milisekundách) po kterém se zobrazí hláška <strong>Stahování dokončeno</strong> (tedy pokud bylo skutečně úspěšně dokončeno). Výchozí hodnota je <strong>2000</strong>.</td>
	</tr>
	<tr>
		<th>browser. download. manager. showAlertOnComplete</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Na ukončení stahování upozorní vysouvací okno v pravém dolním rohu obrazovky.<br/><strong>False</strong>: Žádné vysouvací okno.</td>
	</tr>
	<tr>
		<th>browser. download. manager. showWhenStarting</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Zobrazit okno <span class="nabidka">Správce stahování</span> při začátku stahování<br/><strong>False</strong>: Opak výše uvedeného<br/>Poznámka:
Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Stahování &rarr;
Správce stahování &rarr; Zobrazit okno Správce stahování při začátku stahování</span>"</td>
	</tr>
	<tr>
		<th>browser. download. manager. useWindow</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Používat okno <span class="nabidka">Správce stahování</span> při stahování<br/><strong>False</strong>: Opak výše uvedeného<br/>Poznámka: Tato předvolba má ve Firefoxu stejný účinek, jako <strong>browser.download.manager.showWhenStarting</strong>; <span class="nabidka">Správce stahování</span> je ale používán bez ohledu na nastavení</td>
	</tr>
	<tr>
		<th>browser. download. save_converter_index</th>
		<td>Číslo</td>
		<td>Formát naposledy uložené internetové stránky<br/><strong>0</strong>: Webová stránka, kompletní<br/><strong>1</strong>: Webová stránka, pouze HTML<br/><strong>2</strong>: Textové soubory<br/>Poznámka: Formát ukládané stránky lze ve Firefoxu nastavit v dialogu <span class="nabidka">Uložit jako</span>.</td>
	</tr>
	<tr>
		<th>browser. download. show_plugins_in_list</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Zobrazovat v dialogu <span class="nabidka">Download Actions</span> akce a typy souborů, které jsou asociované se zásuvnými moduly.<br/><strong>False</strong>: Opak výše uvedeného.</td>
	</tr>
	<tr>
		<th>browser. download. useDownloadDir</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Browser uloží stahovaný soubor do složky určené předvolbou <strong>browser.download.folderList</strong>, aniž by se zeptal uživatele<br/><strong>False</strong>: Při ukládání se vždy zeptat<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Stahování &rarr; Složka pro stahování &rarr; Při ukládání souboru se vždy zeptat</span>"</td>
	</tr>
	<tr>
		<th>browser. enable_automatic_image_resizing</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Pokud má prohlížeč zobrazit samostatný obrázek,
který se nevejde do okna, pak bude tento obrázek zmenšen tak, aby se tam vešel.
Na svoji původní velikost se obrázek zvětší tím, že se na něj klepne levým tlačítkem myši.
<br/><strong>False</strong>: Obrázky se zobrazí vždy ve své původní velikosti.<br/>Poznámka:
Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Ostatní &rarr;
Prohlížení &rarr; Změnit velikost větších obrázků tak, aby se vešly do okna prohlížeče</span>"</td>
	</tr>
	<tr>
		<th>browser. feedview. articleLength</th>
		<td>Číslo</td>
		<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=304362#c7" title="https://bugzilla.mozilla.org/show bug.cgi?id=304362#c7" rel="nofollow">Předvolba byla odstraněna.</a> Dřívější význam:<br />
Počet slov v jednom článku. Výchozí hodnota je <strong>50</strong>.
<br/>Poznámka: Tato předvolba měla význam jen krátkou dobu před Firefoxem 1.5 Beta</td>
	</tr>
	<tr>
		<th>browser. feedview. reloadInterval </th>
		<td>Číslo</td>
		<td>
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=304362#c7" title="https://bugzilla.mozilla.org/show bug.cgi?id=304362#c7" rel="nofollow">Předvolba byla odstraněna.</a> Dřívější význam:<br />
Určuje, jak často zjišťovat, jestli se současný RSS/Atom zdroj nezměnil. Výchozí hodnota je <strong>0</strong> (nezjišťovat).
<br/>Poznámka: Tato předvolba měla význam jen krátkou dobu před Firefoxem 1.5 Beta</td>
	</tr>
	<tr>
		<th>browser. feedview. showBar</th>
		<td>Boolean</td>
		<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=304362#c7" title="https://bugzilla.mozilla.org/show bug.cgi?id=304362#c7" rel="nofollow">Předvolba byla odstraněna.</a> Dřívější význam:<br />
 <strong>True</strong> (výchozí): Zobrazovat možnosti nastavení při prohlížení RSS/Atom článků.<br/><strong>False</strong>: Opak výše uvedeného
 <br/>Poznámka: Tato předvolba měla význam jen krátkou dobu před Firefoxem 1.5 Beta</td>
	</tr>
	<tr>
		<th>browser. feedview. showImage</th>
		<td>Boolean</td>
		<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=304362#c7" title="https://bugzilla.mozilla.org/show bug.cgi?id=304362#c7" rel="nofollow">Předvolba byla odstraněna.</a> Dřívější význam:<br />
<strong>True</strong>
(výchozí): Zobrazit u jednotlivých článků obrázky.<br/><strong>False</strong>: Opak výše uvedeného.
<br/>Poznámka: Tato předvolba měla význam jen krátkou dobu před Firefoxem 1.5 Beta</td>
	</tr>
	<tr>
		<th>browser. feedview. showMenu</th>
		<td>Boolean</td>
		<td>
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=304362#c7" title="https://bugzilla.mozilla.org/show bug.cgi?id=304362#c7" rel="nofollow">Předvolba byla odstraněna.</a> Dřívější význam:<br />
<strong>True</strong>
(výchozí): Zobrazit vedle jednotlivých článků menu s důležitými funkcemi.<br/><strong>False</strong>: Opak výše uvedeného.
<br/>Poznámka: Tato předvolba měla význam jen krátkou dobu před Firefoxem 1.5 Beta</td>
	</tr>
	<tr>
		<th>browser. feedview. timerInterval</th>
		<td>Číslo</td>
		<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=304362#c7" title="https://bugzilla.mozilla.org/show bug.cgi?id=304362#c7" rel="nofollow">Předvolba byla odstraněna.</a> Dřívější význam:<br />
Určuje, jak často zjišťovat, jestli se daný RSS/Atom zdroj nezměnil. Výchozí hodnota je <strong>0</strong> (nezjišťovat).
<br/>Poznámka: Tato předvolba měla význam jen krátkou dobu před Firefoxem 1.5 Beta</td>
	</tr>
	<tr>
		<th>browser. feedview. externalCSS</th>
		<td>Řetězec</td>
		<td>
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=304362#c7" title="https://bugzilla.mozilla.org/show bug.cgi?id=304362#c7" rel="nofollow">Předvolba byla odstraněna.</a> Dřívější význam:<br />
Cesta k souboru CSS, pomocí kterého se budou formátovat zdroje RSS/Atom. Výchozí hodnota je prázdný řetězec.
<br/>Poznámka: Tato předvolba měla význam jen krátkou dobu před Firefoxem 1.5 Beta</td>
	</tr>
	<tr>
		<th>browser. fixup. alternate. enabled</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Opravit <a href="http://foo/"	title="http://foo">http://foo</a> na <a href="http://%28prefix%29foo%28suffix%29/"	title="http://(prefix)foo(suffix)">http://(prefix)foo(suffix)</a><br/><strong>False</strong>: Neopravovat pravděpodobné neúplné adresy</td>
	</tr>
	<tr>
		<th>browser. fixup. alternate. prefix</th>
		<td>Řetězec</td>
		<td>Pokud se opravují neúplné adresy, pak se tento řetězec vloží po http://. Výchozí hodnota je "<strong>www.</strong>" (včetně tečky na konci). Aby tato předvolba měla nějaký efekt, musí být <strong>browser.fixup.alternate.enabled</strong> nastaveno na true.</td>
	</tr>
	<tr>
		<th>browser. fixup. alternate. suffix</th>
		<td>Řetězec</td>
		<td>Pokud se opravují neúplné adresy, pak se tento řetězec vloží po daném neúplném URL. V české lokalizaci je výchozí hodnota "<strong>.cz</strong>" (původní je "<strong>.com</strong>"). Aby tato předvolba měla nějaký efekt, musí být <strong>browser.fixup.alternate.enabled</strong> nastaveno na true.</td>
	</tr>
	<tr>
		<th>browser. fixup. hide_user_pass</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Jestliže se prohlížeč pokouší opravit neúplnou adresu a tato adresa obsahuje zadané heslo, tak se toto heslo z adresy vypustí.(čili. adresu <a href="http://foo/"	title="http://user:password@foo">http://user:password@foo</a> neopravit na <a href="http://%28prefix%29foo%28suffix%29/"	title="http://user:password@(prefix)foo(suffix)">http://user:password@(prefix)foo(suffix)</a>, ale na <a href="http://%28prefix%29foo%28suffix%29%29/"	title="http://user@(prefix)foo(suffix))">http://user@(prefix)foo(suffix))</a><br/><strong>False</strong>: Zachovat heslo v opravené adrese</td>
	</tr>
	<tr>
		<th>browser. formfill. enable</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Ukládat informace zadané do formulářů na stránkách a ve <a href="http://kb.mozillazine.org/Search_Bar" title="Search Bar">vyhledávácí liště</a><br/><strong>False</strong>: Opak výše uvedeného<br/>Poznámka:
Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Soukromí &rarr;
Informace z formulářů &rarr; Ukládat informace zadané do formulářů na stránkách a ve <a href="http://kb.mozillazine.org/Search_Bar" title="Search Bar">vyhledávací liště</a></span>"</td>
	</tr>
	<tr>
		<th>browser. forms. submit. backwards_compatible</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Při odesílání formulářů na server neposílat povinnou hlavičku <code>Content-Transfer-Encoding</code><br/><strong>False</strong>: Zaslat tuto hlavičku přesně tak, jak to vyžaduje specifikace<br/>Poznámka: Posílání této hlavičky může vést teoreticky až k pádu serveru (viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=83065"	title="https://bugzilla.mozilla.org/show bug.cgi?id=83065">bug 83065</a>). Jedná se ale o problém objevený již v roce 2001. Tato předvolba může být v budoucnu odstraněna.</td>
	</tr>
	<tr>
		<th>browser. frames. enabled</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Povolit zobrazení HTML rámů<br/><strong>False</strong>: Opak výše uvedeného; zobrazí se obsah definovaný v tagu <code>&lt;noframes&gt;</code></td>
	</tr>
	<tr>
		<th>browser. goBrowsing. enabled</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Jestliže se nepodaří nalézt danou URL ve jmenných serverech (DNS) do stanovené lhůty, tak se hledá pomocí <a href="http://www.google.com">Google</a><br/><strong>False</strong>: Opak výše uvedeného<br/>Poznámka: Nepoužívá se</td>
	</tr>
	<tr>
		<th>browser. helperApps. alwaysAsk. force</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Vždy se zeptat, co provést s neznámým typem MIME (zakázat prohlížeči zapamatovat si, jaký program má soubor daného typu otvírat)<br/><strong>False</strong> (výchozí): Opak výše uvedeného</td>
	</tr>
	<tr>
		<th>browser. helperApps. neverAsk. openFile</th>
		<td>Řetězec</td>
		<td>Seznam typů MIME(oddělených čárkou), které má prohlížeč automaticky otevřít. Výchozí hodnota je prázdný řetězec.</td>
	</tr>
	<tr>
		<th>browser. helperApps. neverAsk. saveToDisk</th>
		<td>Řetězec</td>
		<td>Seznam typů MIME(oddělených čárkou), které má prohlížeč
automaticky uložit na disk. Výchozí hodnota je prázdný řetězec.</td>
	</tr>
	<tr>
		<th>browser. hiddenWindowChromeURL</th>
		<td>Řetězec</td>
		<td>Adresa(URL) chrome:// pro skrytá okna. Tato předvolba je používána jen v Mac OS X a to
tehdy, když běží prohlížeč, ale nemá otevřená žádná okna.
 Výchozí hodnota je <strong>chrome://browser/content/hiddenWindow.xul</strong></td>
	</tr>
	<tr>
		<th>browser. history. grouping</th>
		<td>Řetězec</td>
		<td>Jakým způsobem zhlukovat záznamy v <span class="nabidka">Historii</span> (netýká se postraní lišty "<span class="nabidka">Historie</span>). Výchozí hodnota je <strong>day</strong>.</td>
	</tr>
	<tr>
		<th>browser. history_expire_days</th>
		<td>Číslo</td>
		<td>Určuje, po kolik dní je v minulosti navštívená stránka umístěna v <span class="nabidka">Historii</span>. Výchozí hodnota je <strong>9</strong>.<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Soukromí &rarr; Historie &rarr; Platnost stránek v historii vyprší za ___ dní</span>"</td>
	</tr>
	<tr>
		<th>browser. jsannoyances. disabled</th>
		<td>Boolean</td>
		<td>Společný stav několika dalších předvoleb, konkrétně <strong>dom.event.contextmenu.enabled</strong>, <strong>dom.disable_window_move_resize</strong>, <strong>dom.disable_window_flip</strong>, <strong>dom.disable_window_open_feature.status</strong>, a <strong>dom.disable_window_status_change</strong>.
Tuto předvolbu používá dialog <span class="nabidka">Možnosti</span> pouze pro vlastní potřebu; to znamená, že manuální změna této předvolby nezmění předvolby sledované(výše uvedené).<br/><strong>True</strong>:
Předpokládá se, že všechny výše uvedené předvolby mají hodnotu <strong>true</strong> (kromě <strong>dom.event.contextmenu.enabled</strong>, u které se předpokládá hodnota <strong>false</strong>)<br/><strong>False</strong> (výchozí): Opak výše uvedeného<br/>Poznámka: Pouze pro Firefox 1.5 a vyšší.</td>
	</tr>
	<tr>
		<th>browser. link. open_external</th>
		<td>Číslo</td>
		<td>Kde otvírat odkazy z ostatních aplikací<br/><strong>2</strong>: V novém okně<br/><strong>3</strong>: V novém panelu naposledy použitého okna<br/><strong>1</strong> (nebo cokoliv jiného) (výchozí): V naposledy použitém panelu/okně<br/>Poznámka:
Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Ostatní &rarr;
Prohlížení v panelech &rarr; Odkazy z ostatních aplikací otevírat v</span>"</td>
	</tr>
	<tr>
		<th>browser. link. open_newwindow</th>
		<td>Číslo</td>
		<td>Kde se mají otvírat odkazy, které by se normálně měly načíst do nového okna<br/><strong>1</strong>: V současném panelu<br/><strong>2</strong> (výchozí): V novém okně<br/><strong>3</strong>: V novém panelu</td>
	</tr>
	<tr>
		<th>browser. link. open_newwindow. restriction</th>
		<td>Číslo</td>
		<td>Pouze pro Firefox. Zdroj: <a href="http://www.squarefree.com/burningedge/archives/000590.html"	title="http://www.squarefree.com/burningedge/archives/000590.html">The Burning Edge</a>.<br/><strong>0</strong> (výchozí): Všechna nová okna vytvořená pomocí javascriptu se otevřou jako nový panel.<br/><strong>1</strong>: Dovolit všem novým oknům otevřeným pomocí javascriptu otevřít se jako nová okna. (Standartní chování IE.)<br/><strong>2</strong>:
Zachytit ta nová okna otevřená pomocí JavaScriptu, která nemají nastaveny
žádné hodnoty(např. jak velké má být dané okno, má-li mít stavovou lištu...).
Toto může být užitečné, jelikož některá vyskakovací okna jsou žádoucí &mdash;
může být užitečné vidět najednou originální stránku a její vyskakovací okno.
Některá reklamní (tudíž nežádoucí) okna ale mají svoje parametry nastaveny.</td>
	</tr>
	<tr>
		<th>browser. link. open_newwindow. ui</th>
		<td>Číslo</td>
		<td>Určuje, které vlastnosti nového okna jsou nastavitelné z grafického rozhraní prohlížeče. Ve Firefoxu 1.0 se již nepoužívá. Výchozí hodnota je <strong>3</strong>.</td>
	</tr>
	<tr>
		<th>browser. offline</th>
		<td>Boolean</td>
		<td>Stav volby <span class="nabidka">Pracovat Offline</span><br/><strong>True</strong>: Prohlížeč se pokusí najít požadovanou stránku(soubor) ve vyrovnávací paměti a nesnaží se získat její aktuální verzi.<br/><strong>False</strong> (výchozí): Prohlížeč předpokládá, že je aktivní připojení k internetu a pokud je to nutné, tak načte aktuální verzi stránky(souboru).<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Soubor &rarr; Pracovat offline</span>"</td>
	</tr>
	<tr>
		<th>browser. popups. showPopupBlocker</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Pokud bylo zablokováno vyskakovací okno, tak se zobrazí ikona ve stavové liště.<br/><strong>False</strong>: Nezobrazovat žádnou ikonu.</td>
	</tr>
	<tr>
		<th>browser. preferences. advanced. selectedTabIndex</th>
		<td>Číslo</td>
		<td>Určuje, který panel se zobrazí při otevření dialogu <span class="nabidka">Možnosti</span> sekce(panel) <span class="nabidka">Ostatní</span><br/><strong>0</strong> (výchozí): General<br/><strong>1</strong>: Update<br/><strong>2</strong>: Security</td>
	</tr>
	<tr>
		<th>browser. preferences. animateFadeIn</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí na Mac OS X): Při změně panelu
v dialogu <span class="nabidka">Možnostosti</span> se změní velikost dialogu
(přizpůsobí se velikosti panelu) a panel se postupně objeví.
<br/><strong>False</strong> (výchozí všude jinde): Neanimovat panely v dialogu <span class="nabidka">Možnosti</span><br/>Poznámka: Pouze pro Firefox 1.5 a vyšší.</td>
	</tr>
	<tr>
		<th>browser. preferences. instantApply</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí na všech platformách mimo Windows):
Pokud je pomocí dialogu <span class="nabidka">Možnosti</span> změněna libovolná předvolba,
tak se změna projeví ihned. Dialog také není modální a namísto tlačítek <span class="nabidka">OK</span>
a <span class="nabidka">Zrušit</span> obsahuje pouze tlačítko <span class="nabidka">Zavřít</span>
<br/><strong>False</strong>: Změny se projeví až po klepnutí na tlačítko <span class="nabidka">OK</span>. Dialog <span class="nabidka">Možnosti</span> je modální.<br/>Poznámka: Pouze pro Firefox 1.5 a vyšší.</td>
	</tr>
	<tr>
		<th>browser. preferences. lastpanel</th>
		<td>Číslo</td>
		<td>Určuje, která sekce byla naposledy aktivní v dialogu <span class="nabidka">Možnosti</span> (a která se tedy objeví při jeho příštím otevření).<br/> Ve Firefoxu platí toto:<br/><strong>0</strong>: Obecné<br/><strong>1</strong>: Soukromí<br/><strong>2</strong>: Webové stránky<br/><strong>3</strong>: Stahování<br/><strong>4</strong>: Ostatní<br/></td>
	</tr>
	<tr>
		<th>browser. preferences. privacy. selectedTabIndex</th>
		<td>Číslo</td>
		<td>Určuje, který panel byl naposledy otevřen v sekci <span class="nabidka">Soukromí</span> (v dialogu <span class="nabidka">Možnosti</span>).<br/><strong>0</strong> (výchozí): Historie<br/><strong>1</strong>: Informace z formulářů<br/><strong>2</strong>: Uložená hesla<br/><strong>3</strong>: Historie správce stahování<br/><strong>4</strong>: Cookies<br/><strong>5</strong>: Vyrovnávací disková paměť</td>
	</tr>
	<tr>
		<th>browser. related. autoload</th>
		<td>Číslo</td>
		<td>Automaticky načítat související stránky pro danou URL<br/><strong>0</strong>: Vždy<br/><strong>1</strong> (výchozí): Po prvním použití (výchozí)<br/><strong>2</strong>: Nikdy<br/>Poznámka: Tato předvolba se nepoužívá ve Firefoxu (postraní lišta postrádá kartu "Související odkazy").</td>
	</tr>
	<tr>
		<th>browser. related. disabledForDomains</th>
		<td>Řetězec</td>
		<td>Seznam domén (oddělených čárkami), které mají zakázány funkci "Související stránky". Výchozí hodnota je prázdný řetězec.<br/>Poznámka: Tato předvolba se nepoužívá ve Firefoxu (postraní lišta postrádá kartu "Související odkazy").</td>
	</tr>
	<tr>
		<th>browser. related. enabled</th>
		<td>Boolean</td>
		<td>Funkce "Související stránky" je<br/><strong>True</strong> (výchozí): Povolena<br/><strong>False</strong>: Zakázána<br/>Poznámka: Tato předvolba se nepoužívá ve Firefoxu (postraní lišta postrádá kartu "Související odkazy").</td>
	</tr>
	<tr>
		<th>browser. related. provider</th>
		<td>Řetězec</td>
		<td>URL, ze kterého se přijímají data pro funkci "Související stránky". Výchozí hodnota je <strong><a href="http://www-rl.netscape.com/wtgn?"	title="http://www-rl.netscape.com/wtgn?">http://www-rl.netscape.com/wtgn?</a></strong><br/>Poznámka: Tato předvolba se nepoužívá ve Firefoxu (postraní lišta postrádá kartu "Související odkazy").</td>
	</tr>
	<tr>
		<th>browser. search. basic. min_ver</th>
		<td>Řetězec</td>
		<td>Číslo verze, které určuje, jestli mají být nainstalovány/zobrazeny <a href="http://kb.mozillazine.org/Search_Bar" title="Search Bar">Vyhledávací moduly</a>. Výchozí hodnota je <strong>0.0</strong>.</td>
	</tr>
	<tr>
		<th>browser. search. defaultenginename</th>
		<td>Řetězec</td>
		<td>Výchozí <a href="http://kb.mozillazine.org/Search_Bar" title="Search Bar"> Vyhledávací modul</a>. Výchozí hodnota je <strong>Google</strong>.</td>
	</tr>
	<tr>
		<th>browser. search. defaulturl</th>
		<td>Řetězec</td>
		<td>URL, která se přidá před vyhledávaný řětězec. Výchozí hodnota je <strong><a href="http://www.google.com/search?lr=&amp;ie=UTF-8&amp;oe=UTF-8&amp;q="	title="http://www.google.com/search?lr=&amp;ie=UTF-8&amp;oe=UTF-8&amp;q=">http://www.google.com/search?lr=&amp;ie=UTF-8&amp;oe=UTF-8&amp;q=</a></strong></td>
	</tr>
	<tr>
		<th>browser. search. openintab</th>
		<td>Boolean</td>
		<td><b>True</b>: Zobrazovat výsledky vyhledávání z Vyhledávací lišty v novém panelu.<br/><b>False</b> (default): Otevřít výsledky vyhledávání v aktuálním okně/panelu.<br/>Note: Pouze pro "noční" sestavení Firefoxu.</td>
	</tr>
	<tr>
		<th>browser. search. order. (číselné_pořadí)</th>
		<td>Řetězec</td>
		<td>(číselné_pořadí) určuje, kolikátý bude daný <a href="http://kb.mozillazine.org/Search_Bar" title="Search Bar">Vyhledávací modul</a>(VM) v seznamu VM. Hodnota této předvolby je jméno daného VM.</td>
	</tr>
	<tr>
		<th>browser. search. order. (název_modulu). (číselné_pořadí)</th>
		<td>Řetězec</td>
		<td>Používá se při tříděné vstupu do vyhledávacího modulu. Hodnota této předvolby ukazuje na soubor <code>.properties</code>.</td>
	</tr>
	<tr>
		<th>browser. search. param. (název_modulu). (číselné_pořadí). ("custom" nebo "default")</th>
		<td>Řetězec</td>
		<td>Umožňuje do dotazu vyhledávacího modulu <strong>(název_modulu)</strong> přidat libovolnou proměnnou.</td>
	</tr>
	<tr>
		<th>browser. search. selectedEngine</th>
		<td>Řetězec</td>
		<td>Jméno aktuálně vybraného Vyhledávacího modulu</td>
	</tr>
	<tr>
		<th>browser. search. selectedEngineInDialog</th>
		<td>String</td>
		<td>Jméno aktuálně vybraného Vyhledávacího modulu ve vyhledávacím dialogu (používá se, jestliže je skrytá <a href="/Search_Bar" title="Search Bar">Vyhledávací lišta</a>)<br/>Poznámka: Pouze pro Firefox 1.5 a vyšší</td>
	</tr>
	<tr>
		<th>browser. search. update</th>
		<td>Boolean</td>
		<td><b>True</b> (default): Automaticky zjišťovat, jestli není k dispozici novější verze Vyhledávacích modulů.<br/><b>False</b>: Opak výše uvedeného.<br/>Poznámka: Pouze pro Firefox 1.5 a vyšší.</td>
	</tr>
	<tr>
		<th>browser. sessionhistory. cache_subframes</th>
		<td>Boolean</td>
		<td><b>True</b>: Ukládat vnořené rámy do vyrovnávací paměti (ovšem jen pokud je předvolba <b>browser.sessionhistory.max_viewers</b> větší než 0)<br/><b>False</b> (default): Opak výše uvedeného<br/>Poznámka: Pouze pro Firefox 1.5 a vyšší.</td>
	</tr>
	<tr>
		<th>browser. sessionhistory. max_entries</th>
		<td>Číslo</td>
		<td>Maximální počet stránek, které si prohlížeč pamatuje během jedné relace(session).
Jinými slovy, jedná se o počet stránek, mezi kterými se může uživatel pohybovat pomocí
tlačítek <span class="nabidka">Zpět</span> a <span class="nabidka">Vpřed</span>.
Výchozí hodnota je <strong>50</strong>.</td>
	</tr>
	<tr>
		<th>browser. sessionhistory. max_viewers</th>
		<td>Číslo</td>
		<td>Počet stránek, které si prohlížeč uloží do "bfcache" (rychlá navigace zpět/vpřed - vyrovnávací pamět pro <abbr title="Document object model">DOM</abbr>). Výchozí hodnota je <strong>3</strong>.<br/>Poznámka: Pouze pro Firefox 1.5 a vyšší.</td>
	</tr>
	<tr>
		<th>browser. shell. checkDefaultBrowser</th>
		<td>Boolean</td>
		<td>Určuje, jestli se má při startu kontrolovat, zdali je (prohlížeč) <a href="http://kb.mozillazine.org/Setting_Your_Default_Browser" title="Setting Your Výchozí Browser">výchozím prohlížečem </a><br/><strong>True</strong> (výchozí): Zkontrolovat, zdali je prohlížeč nastaven jako výchozí; pokud není, tak se zeptat uživatele, jestli chce nastavit výchozí prohlížeč<br/><strong>False</strong>: Nic nekotrolovat<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Výchozí Prohlížeč</span>"</td>
	</tr>
	<tr>
		<th>browser. startup. homepage</th>
		<td>Řetězec</td>
		<td>Adresa (nebo seznam adres oddělených znakem |), která se otevře při přechodu na domovskou stránku<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Domovská stránka</span>"</td>
	</tr>
	<tr>
		<th>browser. startup. homepage_override. 1</th>
		<td>Boolean</td>
		<td>Testovací předvolba pro browser.startup.homepage_override (užíváno v Netscape 4.x). Nepoužívá se. Výchozí hodnota je <strong>false</strong>.</td>
	</tr>
	<tr>
		<th>browser. startup. homepage_override. mstone</th>
		<td>Řetězec</td>
		<td>Verze posledního prohlížeče, který použil tento profil.
Jestliže je odlišná od současné verze, pak je hodnota této předvolby změněna právě na současnou verzi.</td>
	</tr>
	<tr>
		<th>browser. startup. homepage_reset</th>
		<td>Řetězec</td>
		<td>Jestliže si uživatel během instalace prohlížeče vyžádá resetování domácí stránky,
pak se z této předvolby načte jméno souboru, který definuje adresu domovské stránky.
Výchozí hodnota je <strong>resource:/browserconfig.properties</strong></td>
	</tr>
	<tr>
		<th>browser. startup. page</th>
		<td>Číslo</td>
		<td>Určuje, jaká stránka se otevře při startu prohlížeče<br/><strong>0</strong>: Prázdná<br/><strong>1</strong> (výchozí): Domovská (nastavuje předvolba <strong>browser.startup.homepage</strong>)<br/><strong>2</strong>: Naposledy otevřená</td>
	</tr>
	<tr>
		<th>browser. tabs. autoHide</th>
		<td>Boolean</td>
		<td>Chování panelu v době, kdy je otevřen jen jeden<br/><strong>True</strong> (výchozí): Skrýt lištu s panely<br/><strong>False</strong>: Neskrývat lištu s panely<br/>Poznámka:
Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Ostatní &rarr;
Prohlížení v panelech &rarr; Skrýt lištu s panely, pokud je otevřena jen jedna stránka</span></td>
	</tr>
	<tr>
		<th>browser. tabs. forceHide</th>
		<td>Boolean</td>
		<td>Zobrazení lišty s panely<br/><strong>True</strong>: Skrýt lištu s panely <br/><strong>False</strong>: Zobrazit lištu s panely normálně <br/> Poznámka: Tato předvolba není používána na zobrazení/skrytí lišty s panely. Je používána interně, aby se mohl program rozhodnout, zda zobrazit či skrýt lištu s panely.</td>
	</tr>
	<tr>
		<th>browser. tabs. loadBookmarksInBackground</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Jestliže uživatel otevře záložku do nového panelu, pak se tento panel otevře do pozadí.<br/><strong>False</strong> (výchozí): Panel, kam se otevře záložka, se přemístí do popředí a stane se aktivním.<br/>Poznámka:
Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Ostatní &rarr;
Prohlížení v panelech &rarr; Přepnout na nový panel otevřený ze záložek či historie</span>"</td>
	</tr>
	<tr>
		<th>browser. tabs. loadDivertedInBackground</th>
		<td>Boolean</td>
		<td>Určuje chování stránek, které by se normálně otevřely do nového okna (<code>target="_new"</code> nebo z jiné aplikace), ale namísto toho se otevřely v novém panelu(<strong>browser.link.open_external</strong>=3).<br/><strong>True</strong>: Otevřít nový panel na pozadí<br/><strong>False</strong> (výchozí): Otevřít nový panel v popředí a přenést na něj fokus(učinit jej aktivním).
<br/>Poznámka: I když bude tato předvolba nastavena na <b>True</b>, odkazy otevírané z ostatních aplikací stejně způsobí přemístění okna prohlížeče do popředí.</td>
	</tr>
	<tr>
		<th>browser. tabs. loadFolderAndReplace</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Když uživatel otevře v panelech složku záložek, pak se tyto stránky otevřou do již existujících panelů.<br/><strong>False</strong>:
Existující panely budou zachovány a pro otevírané stránky se vytvoří panely nové.</td>
	</tr>
	<tr>
		<th>browser. tabs. loadGroup</th>
		<td>Číslo</td>
		<td><strong>0</strong>: Připojit skupinu panelů k panelům již existujícím<br/><strong>1</strong> (výchozí): Nahradit současné panely<br/>Poznámka: Zdá se, že tato předvolba není používána. Má stejný účel jako <strong>browser.tabs.loadFolderAndReplace</strong></td>
	</tr>
	<tr>
		<th>browser. tabs. loadInBackground</th>
		<td>Boolean</td>
		<td>Chování nových panelů(aktivní/neaktivní)<br/><strong>True</strong> (výchozí): Nový panel, který byl otevřen z odkazu, se načte v pozadí(nestane se aktivním)<br/><strong>False</strong>: Opak výše uvedeného<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Ostatní &rarr; Prohlížení v panelech &rarr; Přepnout na nový panel otevřený z odkazu</span>"</td>
	</tr>
	<tr>
		<th>browser. tabs. loadOnNewTab</th>
		<td>Číslo</td>
		<td>Určuje, co se zobrazí v novém panelu<br/><strong>-1</strong>: Startovní stránka prohlížeče<br/><strong>0</strong> (výchozí): Prázdná stránka<br/><strong>1</strong>: Domovská stránka<br/><strong>2</strong>: Poslední navštívená stránka<br/>Poznámka: Nepracuje ve Firefoxu 1.0 (viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=269664"	title="https://bugzilla.mozilla.org/show bug.cgi?id=269664">bug 269664</a>).</td>
	</tr>
	<tr>
		<th>browser. tabs. opentabfor. bookmarks</th>
		<td>Boolean</td>
		<td>Určuje, zda se záložka otevře v novém panelu, je-li na ní klepnuto prostředním tlačítkem myši.<br/>Poznámka: <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=230304"	title="https://bugzilla.mozilla.org/show bug.cgi?id=230304">Předvolba byla odstraněna (zastaralá)</a>. <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=268039"	title="https://bugzilla.mozilla.org/show bug.cgi?id=268039">Tato funkce je zbytečná</a> (otevření záložky do nového panelu se dá dosáhnout jinak: stisknout klávesu CTRL a klepnout na záložku).</td>
	</tr>
	<tr>
		<th>browser. tabs. opentabfor. middleclick</th>
		<td>Boolean</td>
		<td>Určuje chování odkazu, je-li ne něj klepnuto prostředním tlačítkem myši.<br/><strong>True</strong> (výchozí): Odkaz se otevře v novém panelu<br/><strong>False</strong>: Odkaz se otevře v novém okně</td>
	</tr>
	<tr>
		<th>browser. tabs. opentabfor. searchdialog</th>
		<td>Boolean</td>
		<td>Určuje, zda se mají výsledky vyhledávání z vyhledávacího dialogu zobrazit v novém panelu (používá se, jestliže je skrytá <a href="/Search_Bar" title="Search Bar">Vyhledávací lišta</a>)<br/>Poznámka: Pouze pro Firefox 1.5 a vyšší</td>
	</tr>
	<tr>
		<th>browser. tabs. opentabfor. urlbar</th>
		<td>Boolean</td>
		<td>Určuje, co se stane při stisknutí klávesy Enter v poli <span class="nabidka">Umístění</span>(adresní řádek) nebo při klepnutí na tlačítko <span class="nabidka">Přejít</span>. V současnosti nepracuje.<br/><strong>True</strong> (výchozí): Adresa se otevře v novém panelu<br/><strong>False</strong>: Adresa se otevře v současném panelu<br/>Poznámka: <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=268039"	title="https://bugzilla.mozilla.org/show bug.cgi?id=268039">Tato funkce je zbytečná</a>.</td>
	</tr>
	<tr>
		<th>browser. tabs. opentabfor. windowopen</th>
		<td>Boolean</td>
		<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=230304"	title="https://bugzilla.mozilla.org/show bug.cgi?id=230304">Předvolba byla odstraněna (zastaralá)</a>.</td>
	</tr>
	<tr>
		<th>browser. tabs. showSingleWindowModePrefs</th>
		<td>Boolean</td>
		<td>Určuje, jestli se má v dialogu <span class="nabidka">Možnosti</span> sekci <span class="nabidka">Ostatní &rarr; Prohlížení v panelech</span> zobrazit volba <span class="nabidka">odkazy otevírající nové okno otevírat v</span> (viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=266759"	title="https://bugzilla.mozilla.org/show bug.cgi?id=266759">bug 266759</a>).<br/><strong>True</strong>: Zobazit tuto volbu<br/><strong>False</strong> (výchozí): Nezobrazit</td>
	</tr>
	<tr>
		<th>browser. tabs. warnOnClose</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Je-li zavíráno více panelů najednou, tak prohlížeč zobrazí varování.<br/><strong>False</strong>: Prohlížeč se zavře bez varování.<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Ostatní &rarr; Prohlížení v panelech &rarr; Varovat, je-li zavíráno více panelů najednou</span>"</td>
	</tr>
	<tr>
		<th>browser. tabs. warnOnCloseOther</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí): Jestliže uživatel klepnul v kontextové nabídce na volbu <span class="nabidka">Zavřít ostatní panely</span>, tak prohlížeč zobrazí varování<br/><strong>False</strong>: Opak výše uvedeného</td>
	</tr>
	<tr>
		<th>browser. throbber. url</th>
		<td>Řetězec</td>
		<td>Určuje, která sránka se načte, když uživatzel klepne na indikátor průběhu. V české lokalizaci je výchozí hodnota <strong><a href="http://www.czilla.cz/"	title="http://www.czilla.cz/">http://www.czilla.cz/</a></strong> (původní je <strong><a href="http://www.mozilla.org/products/firefox/central.html"	title="http://www.mozilla.org/products/firefox/central.html">http://www.mozilla.org/products/firefox/central.html</a></strong>)</td>
	</tr>
	<tr>
		<th>browser. trim_user_and_password</th>
		<td>Boolean</td>
		<td>Zdá se že nic nenastavuje, protože ve zdrojovém kódu není tato předvolba ani jednou využívána.</td>
	</tr>
	<tr>
		<th>browser. triple_click_selects_paragraph</th>
		<td>Boolean</td>
		<td><b>True</b> (výchozí): Trojité klepnutí označí odstavec pod kurzorem myši.<br/><b>False</b>: Trojité klepnutí označí pouze řádek pod kurzorem myši.<br/>Poznámka: Pouze pro Firefox 1.5 a vyšší.</td>
	</tr>
	<tr>
		<th>browser. turbo. enabled</th>
		<td>Boolean</td>
		<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=259828"	title="https://bugzilla.mozilla.org/show bug.cgi?id=259828">Předvolba byla odstraněna (zastaralá)</a>.<br/>Určuje, jestli má být prohlížen načten v "Turbo Módu" (čili má být v panelu snadného spuštění) (týká se pouze Windows/Mozilla Suite)<br/><strong>True</strong>: Při startu Windows načíst část programu Mozilla do paměti<br/><strong>False</strong> (výchozí): Načíst prohlížeč standartně při spouštění programu</td>
	</tr>
	<tr>
		<th>browser. underline_anchors</th>
		<td>Boolean</td>
		<td>Určuje výchozí formátování pro textové odkazy.<br/><strong>True</strong> (výchozí): Podtrhnout odkaz<br/><strong>False</strong>: Opak výše uvedeného<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Písma &amp; Barvy &rarr; Podtrhávat odkazy</span>"</td>
	</tr>
	<tr>
		<th>browser. update. resetHomepage</th>
		<td>Boolean</td>
		<td>Určuje, zda má být při instalaci prohlížeče resetována domovská stránka<br/><strong>True</strong>: Resetovat domovskou stránku (předvolba <strong>browser.startup.homepage</strong>) na hodnotu předvolby <strong>browser.startup.homepage_reset</strong><br/><strong>False</strong> (výchozí): Neresetovat domovskou stránku</td>
	</tr>
	<tr>
		<th>browser. urlbar. autoFill</th>
		<td>Boolean</td>
		<td><strong>True</strong>: Při psaní adresy do pole <span class="nabidka">Umístění</span> <a href="http://kb.mozillazine.org/Inline_autocomplete" title="Inline autocomplete"> automaticky dokončovat</a> adresu.<br/><strong>False</strong> (výchozí): Opak výše uvedeného.</td>
	</tr>
	<tr>
		<th>browser. urlbar. clickSelectsAll</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí na ne-Unixových sestaveních): Vybrat obsah pole <span class="nabidka">Umístění</span>, jestliže na něj uživatel klepne.<br/><strong>False</strong> (výchozí všude jinde): Opak výše uvedeného</td>
	</tr>
	<tr>
		<th>browser. urlbar. matchOnlyTyped</th>
		<td>Boolean</td>
		<td>Určuje, jaké adresy se budou uživateli nabízet, když začne psát do pole <span class="nabidka">Umístění</span><br/><strong>True</strong>: Pouze adresy, které uživatel ručně zapsal do pole <span class="nabidka">Umístění</span><br/><strong>False</strong> (výchozí): Adresy v Historii</td>
	</tr>
	<tr>
		<th>browser. visited_color</th>
		<td>Řetězec</td>
		<td>Výchozí barva pro navštívené odkazy (zapsaná jako číslo v šestnáctkové soustavě). Výchozí hodnota je <strong><code>#551A8B</code></strong><br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes "<span class="nabidka">Nástroje &rarr; Možnosti... &rarr; Obecné &rarr; Písma &amp; Barvy &rarr; Barvy odkazů &rarr; Navštívené odkazy</span>"</td>
	</tr>
	<tr>
		<th>browser. windows. loadOnNewWindow</th>
		<td>Číslo</td>
		<td>Určuje, co se má zobrazit v novém okně<br/><strong>-1</strong>: Startovní stránka prohlížeče<br/><strong>0</strong>: Prázdná stránka<br/><strong>1</strong> (výchozí): Domovská stránka<br/><strong>2</strong>: Naposledy navštívená stránka</td>
	</tr>
	<tr>
		<th>browser. xul. error_pages. enabled</th>
		<td>Boolean</td>
		<td><strong>True</strong> (výchozí ve Firefoxu 1.5 a vyšším): Prohlížeč používá chybové stránky ve formátu XUL.<br/><strong>False</strong> (výchozí ve Firefoxu 1.0.x a nižším): Prohlížeč používá chybové hlášky(Message Box)</td>
	</tr>
</tbody>
</table>
</div>


<h2>Config.*</h2>
<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>config. trim_on_minimize</th>
		<td>Boolean</td>
		<td>
			Pouze pro Windows. Určuje, jak mají Windows nakládat s pamětí alokovanou
			prohlížečem, když se minimalizuje okno. Nastavením této předvolby na
			<b>false</b> lze často zabránit prodlevám při obnovování okna
			(viz <a title="https://bugzilla.mozilla.org/show bug.cgi?id=76831"
			href="https://bugzilla.mozilla.org/show_bug.cgi?id=76831" rel=nofollow>bug
			76831</a>).<br/><b>True</b> (výchozí): Dovolit, aby Windows při minimalizaci
			okna zachovaly v paměti RAM jen to, co je zcela nezbytné
			<br/><b>False</b>: Windows nebudou provádět žádnou optimalizaci paměti</td>
	</tr>
	<tr>
		<th>config. use_system_prefs</th>
		<td>Boolean</td>
		<td><b>True</b>: Použít systémová nastavení (např. servery proxy,
			připojení)<br/><b>False</b> (výchozí): Opak výše uvedeného<br/>Poznámka:
			Zdá se, že tato předvolba se ve Firefoxu 1.0 nepoužívá</td>
	</tr>
	<tr>
		<th>config. use_system_prefs. accessibility</th>
		<td>Boolean</td>
		<td><b>True</b>: Pouřít systémová nastavení pro připojení k internetu
			<br/><b>False</b> (výchozí): Opak výše uvedeného<br/>Poznámka:
			Zdá se, že tato předvolba se ve Firefoxu 1.0 nepoužívá
			</td>
	</tr>
</tbody>
</table>
</div>

<h2>Content.*</h2>
<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>content. interrupt. parsing</th>
		<td>Boolean</td>
		<td><b>True</b> (výchozí): Umožňuje, aby program během zpracovávání(parsování) stránky
		čas od času odskočil do smyčky zpráv a zprávy zpracoval
		<br/><b>False</b>: Opak výše uvedeného</td>
	</tr>
	<tr>
		<th>content. max. tokenizing. time</th>
		<td>Číslo</td>
		<td>Určuje dobu v mikrosekundách, po které program během zpracovávání(parsování)
		stránky odskočí do smyčky zpráv.
		Výchozí hodnota je
			3×<b>content.notify.interval</b>. Pro nejlepší výsledek nastavte tuto předvolbu
			jako násobek
			<b>content.notify.interval</b>.</td>
	</tr>
	<tr>
		<th>content. maxtextrun</th>
		<td>Číslo</td>
		<td>
			Určuje (částečně), kdy se v okně prohlížeče zobrazí další část textu
			(maximální počet znaků v bufferu, než se tyto znaky pošlou parseru).
			Hodnota je v kilobajtech. Výchozí hodnota je
			<b>8191</b>. Více informací viz. <a
			title="https://bugzilla.mozilla.org/show bug.cgi?id=77540"
			href="https://bugzilla.mozilla.org/show_bug.cgi?id=77540" rel=nofollow>
			bug 77540</a>.</td>
	</tr>
	<tr>
		<th>content. notify. backoffcount</th>
		<td>Číslo</td>
		<td>
			Určuje počet počátečních překreslení stránky
			(jestliže smí prohlížeč překreslovat stránku po přesně daných intervalech).
			Po dosažení tohoto počtu je stránka překreslována
			jen tehdy, je-li hotov výpočet grafické podoby větší části stránky.
			Výchozí hodnota je <b>-1</b> (nikdy).</td>
	</tr>
	<tr>
		<th>content. notify. interval</th>
		<td>Číslo</td>
		<td>
			Určuje časový interval pro počáteční překreslení stránky
			(jestliže smí prohlížeč překreslovat stránku po přesně daných intervalech).
			Jednotka jsou mikrosekundy. Počet překreslení je nastaven předvolbou
			<b>content.notify.backoffcount</b>. Výchozí hodnota je <b>120000</b>.
			Hodnoty menší než 100000 se nedoporučují. Pro dosažení
			co nejlepšího výkonu je dobré tuto předvolbu synchronizovat s
			<b>nglayout.initialpaint.delay</b>.</td>
	</tr>
	<tr>
		<th>content. notify. ontimer</th>
		<td>Boolean</td>
		<td><b>True</b> (výchozí): Povolit, aby prohlížeč během načítání
			stránky tuto stránku překresloval
			po přesně daných intervalech.<br/>
			<b>False</b>: Opak výše uvedeného</td>
	</tr>
	<tr>
		<th>content. switch. threshold</th>
		<td>Číslo</td>
		<td>
			Určuje, jak dlouho (v mikrosekundách) čekat na uživatelský vstup
			(pohyb myši nebo psaní), než se prohlížeč přepne do módu, ve kterém
			kontroluje vstup s menší frekvencí.
			(Při vysokofrekvenčním módu reaguje prohlížeč rychleji, ovšem
			za cenu zpomalení načítání stránky.)
			Výchozí hodnota je <b>750000</b>.</td>
	</tr>
</tbody>
</table>
</div>			
			
<h2>DOM.*</h2>
<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>dom. allow_scripts_to_close_windows</th>
		<td>Boolean</td>
		<td>
		Určuje, které operace <code>close()</code> jsou oprávněné
			<br/><b>True</b>: Jakýkoliv skript může zavřít okno<br/><b>False</b>
			(výchozí): Pouze ta okna, která byla otevřena pomocí skriptu, mohou být
			ukončena zavoláním <code>close()</code>.</td>
	</tr>
	<tr>
		<th>dom. disable_image_src_set</th>
		<td>Boolean</td>
		<td>
		Určuje, zda mohou skripty měnit atribut <code>src</code> u objektů image
		(jinými slovy, nastavuje, zda mohou být obrázky měněny pomocí <a
			title=JavaScript
			href="http://kb.mozillazine.org/JavaScript">JavaScriptu</a>)<br/><b>True</b>:
			Skripty nemohou měnit atribut <code>src</code>
			<br/><b>False</b>
			(výchozí): Opak výše uvedeného<br/>Poznámka: Tuto předvolbu lze ve Firefoxu
			nastavit přes <span class="nabidka">
			"Nástroje  Možnosti...  Webové stránky  Povolit JavaScript / Rozšířené... 
			Měnit obrázky"</span></td>
	</tr>
	<tr>
		<th>dom. disable_open_click_delay</th>
		<td>Číslo</td>
		<td>Jestliže je vyskakovací okno vytvořeno pomocí <a title=JavaScript
			href="http://kb.mozillazine.org/JavaScript">JavaScriptových</a> metod
			<code>setTimeout()</code> nebo <code>setInterval()</code>
				a jejich prodleva je menší než tato předvolba (v milisekundách),
				tak bude nové okno zablokováno (tedy pokud to umožní další předvolby týkající se blokování oken).
			Výchozí hodnota je
			<b>1000</b>.</td>
	</tr>
	<tr>
		<th>dom. disable_open_during_load</th>
		<td>Boolean</td>
		<td>Určuje chování pro blokování oken.<br/><b>True</b> (výchozí): Blokovat vyskakovací okna,
		která si stránka vytváří během načítání
		<br/><b>False</b>: Povolit vyskakovací okna
		<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes <span class="nabidka">
		"Nástroje  Možnosti  Webové stránky  Blokovat vyskakovací okna" </span></td>
	</tr>
	<tr>
		<th>dom. disable_window_flip</th>
		<td>Boolean</td>
		<td>
		Určuje, zda mohou skripty přenášet okna do popředí.
		<br/><b>True</b>:
			Skripty nemohou přenášet okna do popředí<br/><b>False</b> (výchozí):
			Opak výše uvedeného<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes
			<span class="nabidka">"Nástroje
			 Možnosti...  Webové stránky  Povolit JavaScript / Rozšířené... 
			Přenést okno do popředí nebo do pozadí"</span></td>
	</tr>
	<tr>
		<th>dom. disable_window_move_resize</th>
		<td>Boolean</td>
		<td>Určuje, jestli lze pomocí <a title=JavaScript
			href="http://kb.mozillazine.org/JavaScript">JavaScriptu</a> změnit pozici
			nebo velikost okna.<br/><b>True</b>:
			Velikost nebo pozice okna nelze měnit pomocí JavaScriptu<br/><b>False</b>
			(výchozí): Opak výše uvedeného<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes
			<span class="nabidka">"Nástroje  Možnosti...  Webové stránka 
			Povolit JavaScript / Rozšířené...  Přemisťovat nebo měnit velikost otevřených oken" </span></td>
	</tr>
	<tr>
		<th>dom. disable_window_open_feature. *</th>
		<td>Boolean</td>
		<td>

			Autoři webových stránek mohou u vyskakovacích oken zakázat mnoho ovládacích prvků.
			Nastavení těchto předvoleb na true zajistí, že daný prvek se navzdory zdrojovému kódu
			zobrazí v kterémkoli vyskakovacím okně.
			<br/><b>close</b>: Zabrání zákazu tlačítka <span class="nabidka">zavřít</span>.
			<br/><b>directories</b>: Zabrání skrytí <span class="nabidka">Lišty záložek</span>.
			<br/><b>location</b>: Zabrání skrytí pole <span class="nabidka">Umístění</span>.
			<br/><b>menubar</b>: abrání skrytí <span class="nabidka">Nástrojové lišty</span>.
			<br/><b>minimizable</b>: Zabrání zákazu tlačítka <span class="nabidka">minimalizovat</span>.
			<br/><b>personalbar</b>: Zabrání skrytí <span class="nabidka">Lišty záložek</span>.
			<br/><b>resizable</b>: Zabrání tomu, aby nešla měnit velikost okna.
			<br/><b>scrollbars</b>: Zabrání zákazu posuvníků.
			<br/><b>status</b>: Zabrání skrytí stavové lišty.
			<br/><b>titlebar</b>: Zabrání skrytí titulku okna.
			<br/><b>toolbar</b>: Zabrání skrytí lišty <span class="nabidka">Navigace</span>.
			</td>
	</tr>
	<tr>
		<th>dom. disable_window_status_change</th>
		<td>Boolean</td>
		<td>Určuje, jestli je možné měnit text ve stavové liště pomocí
			<a title=JavaScript
			href="http://kb.mozillazine.org/JavaScript">JavaScriptu</a>.<br/><b>True</b>
			(výchozí): Skripty nemohou přistupovat k objektu <code>window.status</code>
			<br/><b>False</b>: Opak výše uvedeného<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes
			<span class="nabidka">"Nástroje  Možnosti  Webové stránky  Povolit JavaScript /
			Rozšířené  Měnit text na stavové liště"</span></td>
	</tr>
	<tr>
		<th>dom. event. contextmenu. enabled</th>
		<td>Boolean</td>
		<td>Určuje, jestli je možné pomocí <a title=JavaScript
			href="http://kb.mozillazine.org/JavaScript">JavaScriptu</a>
			zachytit událost <code>oncontextmenu</code> (např. ve skritpu, který chce potalčit kontextové nabídky).
		<br/><b>True</b> (výchozí): Opak níže uvedeného.
		<br/><b>False</b>: Webové stránky nebudou schopné zachytit událost "vyvolání kontextové nabídky",
		a tak k nim nebudou mít přístup.
		<br/>Poznámka: Tuto předvolbu lze ve Firefoxu nastavit přes <span class="nabidka">"Nástroje  Možnosti
			 Webové stránky  Povolit JavaScript / Rozšířené...  Zakázat nebo nahradit kontextovou nabídku"</span>
		</td>
	</tr>
	<tr>
		<th>dom. max_script_run_time</th>
		<td>Číslo</td>
		<td>Určuje maximální dobu(v sekundách), po kterou může běžet skript.
				Výchozí hodnota je <b>5</b>. Záporné hodnoty jsou ignorovány a namísto nich se použije
				5 sekund.
			<br/>Poznámka: Vyžaduje restart prohlížeče.</td>
	</tr>
	<tr>
		<th>dom. popup_allowed_events</th>
		<td>Řetězec</td>
		<td>
			Seznam událostí (oddělených mezerou), ve kterých je možno vytvořit vyskakovací okno.
			Výchozí hodnota je "<b><code>change click dblclick mouseup reset
			submit</code></b>". Níže jsou uvedeny některé události z <a
			title=http://lxr.mozilla.org/mozilla/source/content/events/src/nsDOMEvent.cpp
			href="http://lxr.mozilla.org/mozilla/source/content/events/src/nsDOMEvent.cpp"
			rel=nofollow>mozilla/content/events/src/nsDOMEvent.cpp</a>:<br/><b>Události formuláře</b>:<br/>
			<dl>
				<dd><b>select</b>:<br/><b>change</b>:<br/><b>input</b>:<br/><b>submit</b>:<br/><b>reset</b>:<br/></dd></dl>
			<p><b>Ostatní události</b>:<br/></p>
			<dl>
				<dd><b>keydown</b>:<br/><b>keypress</b>:<br/><b>keyup</b>:<br/><b>mousedown</b>:<br/><b>mouseup</b>:<br/><b>click</b>:<br/><b>dblclick</b>:<br/><b>error</b>:<br/></dd></dl></td>
	</tr>
	<tr>
		<th>dom. popup_maximum</th>
		<td>Číslo</td>
		<td>Nejvyšší počet současně otevřených vyskakovacích oken. Výchozí hodnota je
			<b>20</b>.</td>
	</tr>
</tbody>
</table>
</div>

<h2>Editor.*</h2>
<p>Těmito předvolbami se řídí hlavně programy jako Composer nebo Mail.
Firefox si většiny z nich nevšímá.</p>
 
<div class="tbl-1"> 
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>editor. css. default_length_unit</th>
		<td>Řetězec</td>
		<td>Určuje výchozí jednotky pro <a title=CSS
			href="http://kb.mozillazine.org/CSS">kaskádové styly </a>.
			<br/><b>cm</b>: centimetry
			<br/><b>em</b>: ems (v typografii je to šířka velkého "M", ale v CSS je to výška řádku)<br/><b>ex</b>: ex (výška malého "x")
			<br/><b>in</b>: palce
			<br/><b>mm</b>: milimetry
			<br/><b>%</b>: procenta vztažená k rodičovskému elementu
			<br/><b>pc</b>: pica (1/6 palce)
			<br/><b>px</b> (výchozí): pixely
			<br/><b>pt</b>: body (1/72 palce)</td>
	</tr>
	<tr>
		<th>editor. htmlWrapColumn</th>
		<td>Číslo</td>
		<td>Maximální délka řádku ve zdrojovém kódu HTML (delší text se zalomí). Výchozí hodnota je <b>72</b>.
	</td>
	</tr>
	<tr>
		<th>editor. positioning. offset</th>
		<td>Číslo</td>
		<td>
		Výchozí pozice (X-ová i Y-ová souřadnice) absolutně umístěných prvků.
			Výchozí hodnota je <b>0</b>.</td>
	</tr>
	<tr>
		<th>editor. quotesPreformatted</th>
		<td>Boolean</td>
		<td>Tato předvolba byla původně zamýšlena jako <a
			title="https://bugzilla.mozilla.org/show bug.cgi?id=69638#c37"
			href="https://bugzilla.mozilla.org/show_bug.cgi?id=69638#c37"
			rel=nofollow>dočasná</a>. Kontroluje chování textu v uvozovkách, který byl vložen do emailu.
			<br/><b>True</b>: Zalomit text v uvozovkách uvnitř elementu
			<code>pre</code><br/><b>False</b> (výchozí): Zalomit text v uvozovkách uvnitř elementu
			<code>span</code></td>
	</tr>
	<tr>
		<th>editor. resizing. preserve_ratio</th>
		<td>Boolean</td>
		<td>
		Určuje chování při zvětšování/změnšování obrázků v programu Composer.
		<br/><b>True</b>
			(výchozí): Zachovat poměr šířky a výšky<br/><b>False</b>:
			Povolit nezávislé změny šířky a výšky</td>
	</tr>
	<tr>
		<th>editor. singleLine. pasteNewlines</th>
		<td>Číslo</td>
		<td>
			Určuje chování při vložení víceřádkového textu do jednořádkového textového pole.
			<br/><b>0</b> (výchozí v Linuxu): Vložit text beze změny (včetně znaků "nový řádek")
			<br/><b>1</b> (výchozí všude jinde): Vložit pouze první řádek textu
			<br/><b>2</b>: Nahradit všechny znaky pro nový řádek mezerami
			<br/><b>3</b>: Vymazat všechny znaky "nový řádek"
			<br/><b>4</b>: Nahradit znaky "nový řádek" čárkami</td>
	</tr>
	<tr>
		<th>editor. use_css</th>
		<td>Boolean</td>
		<td>Určuje upředňostnovanou metodu pro formátování textu.<br/><b>True</b>
			(výchozí): Používat CSS všude tam, kde je to možné
			<br/><b>False</b>: Používat metody, které nejsou založeny na CSS</td>
	</tr>
	<tr>
		<th>editor. use_custom_colors</th>
		<td>Boolean</td>
		<td>Určuje, jestli se mají pro formátování textu používat barvy,
		které si přednastavil uživatel.
			<br/><b>True</b>: Používat barvy nastavené v předvolbách editor.*
			<br/><b>False</b> (výchozí): Používat výchozí barvy</td>
	</tr></tbody></table>
</div>

<h2>Extensions.*</h2>
<p>Tato větev předvoleb je většinou využívána jako sklad nastavení pro nejrůznější rozšíření.
	Jsou zde ale některé předvolby, které s rozšířeními a motivy vzhledu souvisí v obecné
	rovině.
</p>

<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<th>Jméno</th>
		<th>Typ</th>
		<th>Popis položky</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>extensions. {GUID}. description</th>
		<td>Řetězec</td>
		<td>Popis rozšíření, které má identifikátor GUID
			(viz. <a title="Localize extension descriptions"
			href="http://kb.mozillazine.org/Localize_extension_descriptions">
			Popis lokalizace rozšíření</a>).</td>
	</tr>
	<tr>
		<th>extensions. disabledObsolete</th>
		<td>Boolean</td>
		<td>Určuje, zda mají být při změně verze prohlížeče zakázána zastaralá rozšíření.</td>
	</tr>
	<tr>
		<th>extensions. dss. enabled</th>
		<td>Boolean</td>
		<td><b>True</b>: Umožňuje měnit motiv vzhledu za běhu prohlížeče.<br/><b>False</b>
			(výchozí): Při změně motivu vzhledu vyžaduje restart prohlížeče.<br/>Poznámka:
			Změna motivu vzhledu za běhu prohlížeče může způsobit chybu.
			(viz.
			<a title="https://bugzilla.mozilla.org/show bug.cgi?id=226791"
			href="https://bugzilla.mozilla.org/show_bug.cgi?id=226791"
			rel=nofollow>bug 226791</a>).</td>
	</tr>
	<tr>
		<th>extensions. dss. switchPending</th>
		<td>Boolean</td>
		<td>
			Používá se, je-li extensions.dss.enabled nastaveno na false.<br/>
			<b>True</b>: Motiv vzhledu byl změněn a čeká se na restart prohlížeče<br/>
			<b>False</b> (výchozí): Opak výše uvedeného</td>
	</tr>
	<tr>
		<th>extensions. getMoreExtensionsURL</th>
		<td>Řetězec</td>
		<td>
			Určuje adresu, kam se prohlížeč přesměruje po klepnutí na odkaz
			<span class="nabidka">Získat nová rozšíření</span>
			v dialogu <span class="nabidka">Správce rozšíření</span>.
		</td>
	</tr>
	<tr>
		<th>extensions. getMoreThemesURL</th>
		<td>Řetězec</td>
		<td>
			Určuje adresu, kam se prohlížeč přesměruje po klepnutí na odkaz
			<span class="nabidka">Získat nový motiv vzhledu</span>
			v dialogu <span class="nabidka">Správce motivů vzhledu</span>.
		</td>
	</tr>
	<tr>
		<th>extensions. ignoreMTimeChanges</th>
		<td>Boolean</td>
		<td><b>True</b>:
			Zabránit systému, který spravuje rozšíření, aby podle času poslední změny k souboru
			určil, jestli je dané rozšíření nové (a mělo by být tedy registrováno)
			<br/><b>False</b> (výchozí): Opak výše uvedeného
			<br/>Poznámka: Pouze v "nočních verzích" prohlížeče.</td>
	</tr>
	<tr>
		<th>extensions. lastAppVersion</th>
		<td>Řetězec</td>
		<td>Poslední verze prohlížeče, kde lze úspěšně načíst stávající rozšíření.
			Používá se pro určení, zda se mají rozšíření zakázat kvůli možné nekompatibilitě.</td>
	</tr>
	<tr>
		<th>extensions. logging. enabled</th>
		<td>Boolean</td>
		<td><b>True</b>:
			Povolit systému, který spravuje rozšíření, vytvářet podrobný log
			(může zpomalit prohlížeč).<br/>
			<b>False</b> (výchozí): Opak výše uvedeného<br/>
			Poznámka: Pouze v nočních verzích prohlížeče</td>
	</tr>
	<tr>
		<th>extensions. reporter. hidePrivacyStatement</th>
		<td>Boolean</td>
		<td><b>True</b>: Uživatel již viděl a souhlasil s
			bezpečnostní politikou nástroje <span class="nabidka">Report A Broken Website</span>,
			takže se tento dialog již nebude zobrazovat.<br/>
			<b>False</b>: Při otevírání nástroje <span class="nabidka">Report A Broken Website</span>
			zobrazit dialog o bezpečnostní politice.</td>
	</tr>
	<tr>
		<th>extensions. update. autoUpdate</th>
		<td>Boolean</td>
		<td><b>True</b>: Automaticky stáhnout a nainstalovat nové aktualizace
			<br/><b>False</b> (výchozí): Opak výše uvedeného<br/>Poznámka: Není implementováno
			</td>
	</tr>
	<tr>
		<th>extensions. update. autoUpdateEnabled</th>
		<td>Boolean</td>
		<td><b>True</b> (výchozí): Povolit, aby prohlížeč v daném intervalu automaticky zkontroloval,
		zda nejsou k dispozici nové aktualizace
			<br/><b>False</b>: Opak výše uvedeného</td>
	</tr>
	<tr>
		<th>extensions. update. count</th>
		<td>Číslo</td>
		<td>Počet dostupných aktualizací pro rozšíření, motivy vzhledu, atd...
		Výchozí hodnota je <b>0</b>.</td>
	</tr>
	<tr>
		<th>extensions. update. enabled</th>
		<td>Boolean</td>
		<td><b>True</b> (výchozí): Povolit kontrolu dostupných aktualizací<br/><b>False</b>:
			Opak výše uvedeného<br/>Tuto předvolbu lze pro konkrétní rozšíření potlačit nastavením
			<strong>extensions.{GUID}.update.enabled</strong>.</td>
	</tr>
	<tr>
		<th>extensions. update. interval</th>
		<td>Číslo</td>
		<td>Určuje, jak často se mají kontrolovat dostupné aktualizace.
			Tuto předvolbu lze pro konkrétní rozšíření potlačit nastavením
			<strong>extensions.{GUID}.update.interval</strong>.<br/>Ve Firefoxu 1.0.x
			a nižším je výchozí hodnota <b>604800000</b> (počet milisekund v jednom týdnu).
			<br/>Ve Firefoxu 1.5 a vyšším je výchozí hodnota <b>86400</b> (počet sekund v jednom dni).</td>
	</tr>
	<tr>
		<th>extensions. update. lastUpdateDate</th>
		<td>Číslo</td>
		<td>Určuje, kdy se naposledy aktualizovalo nějaké rozšíření (jedná se o čas v UNIXové epoše -
		počet sekund od 1.1.1970).
		Výchozí hodnota je <b>0</b>.</td>
	</tr>
	<tr>
		<th>extensions. update. severity. threshold</th>
		<td>Číslo</td>
		<td>
			Určuje maximální počet uživatelem nevyřízených aktualizací, než se
			ikona signalizující důležitost aktualizace změní z ikony pro nízkou důležitost
			na důležitost střední.
			Výchozí hodnota je <b>5</b>.
		</td>
	</tr>
	<tr>
		<th>extensions. update. url</th>
		<td>Řetězec</td>
		<td>
			Určuje URL, kde se budou hledat aktualizace pro rozšíření.
			Tuto předvolbu lze pro konkrétní rozšíření potlačit nastavením
			<b>extensions.{GUID}.update.url</b>. Výchozí hodnota se načítá z
			chrome://mozapps/locale/update/update.properties.
		</td>
	</tr>
</tbody>
</table>
</div>

<?php
	$page->includeFooter();
?>
