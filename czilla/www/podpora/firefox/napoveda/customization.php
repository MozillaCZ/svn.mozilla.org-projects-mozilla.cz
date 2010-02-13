<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Přizpůsobení Mozilla Firefoxu';
	$page->headline = array('Přizpůsobení Mozilla Firefoxu','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>


<div class="contentsBox">V této kapitole:
 <ul>
   <li><a href="#can_i_customize_my_toolbars">Mohu si přizpůsobit nástrojové lišty?</a></li>
   <li><a href="#how_do_i_customize_the_toolbars">Jak přizpůsobit nástrojové lišty?</a></li>
   <li><a href="#themes">Motivy vzhledu</a></li>
   <li><a href="#extensions">Rozšíření</a></li>
 </ul>
</div>
<h2 id="can_i_customize_my_toolbars">Mohu si přizpůsobit nástrojové lišty?</h2>

<p>Ano, je to možné. Nástrojové lišty v Firefox je možné upravit. Nevíte co je to nástrojová lišta? Nástrojová lišta je úzký pruh (obvykle šedivý) nad místem, kde se zobrazují webové stránky. Po instalaci máte k dispozici lišty pojmenované:</p>

<ul>
  <li><strong>Hlavní nabídka</strong>: Tato lišta obsahuje hlavní nabídku (Soubor, Úpravy, Nápověda, apod.).</li>
  <li><strong>Navigační lišta</strong>: Tato lišta obsahuje pole <em>Umístění</em> a <em>Hledání</em>.</li>
  <li><strong>Lišta záložek</strong>: Tato lišta obsahuje Záložky.</li>

</ul>

<h2 id="how_do_i_customize_the_toolbars">Jak přizpůsobit nástrojové lišty?</h2>

<p>Jsou k dispozici dvě volby pro přizpůsobení lišty Firefoxe:</p>

<ul>
  <li><a href="#adding_removing_toolbars">Přidání/Odebrání nástrojové lišty</a></li>
  <li><a href="#rearranging_toolbar_items">Přizpůsobení jednotlivých položek nástrojové lišty</a></li>
</ul>

<h3 id="adding_removing_toolbars">Přidání/Odebrání nástrojové lišty</h3>

<p>Pokud některou nástrojovou lištu nepotřebujete, můžete ji snadno odstranit z okna prohlížeče.
V současné době jsou odstranitelné lišty:</p>
<ul>
  <li><strong>Navigační lišta</strong></li>
  <li><strong>Lišta záložek</strong></li>
</ul>
<p>Nástrojovou lištu s hlavní nabídkou nelze odstranit, protože by jste se nedostali k jednotlivým volbám nabídky. Proto je narozdíl od jiných lišt nutné, aby zůstala v okně prohlížeče po celou dobu.</p>

<p>
Pokud chcete odstranit nástrojovou lištu, zvolte v hlavní nabídce <em class="menuPath">Zobrazit &gt; Nástrojové lišty</em>. Zde naleznete seznam lišt, které jsou k dispozici. Lišty, které jsou zaškrtnuty, jsou zobrazeny v hlavním okně. Po odškrtnutí konkrétní lišty lišta zmizí. Které lišty chcete zobrazit a které ne, je tedy na vaší volbě.
</p>

<p>
Pokud chcete přidat novou lištu pod hlavní nabídku, zvolte v hlavní nabídce <em class="menuPath">Zobrazit &gt; Nástrojové lišty &gt; Vlastní...</em>. V zobrazeném dialogu klepněte na tlačítko <em>Přidat novou lištu</em>. Zobrazí se vám dialog ve kterém je potřeba vložit jméno nové lišty, vložte libovolné jméno a klepněte na tlačítko <em>OK</em>. Nyní máte k dispozici novou lištu, která se vám okamžitě zobrazí. V hlavní nabídce pod volbou <em class="menuPath">Zobrazit &gt; Nástrojové lišty</em> nyní můžete vaši novou lištu zobrazovat či skrývat dle vašich potřeb.
</p>

<h3 id="rearranging_toolbar_items">Přizpůsobení jednotlivých položek nástrojové lišty</h3>

<p>Pokud chcete upravit existující lištu (ikony, tlačítka, mezery apod.), klepněte nad ní pravým tlačítkem myši (mimo míst, kde jsou textová pole) a v zobrazené nabídce zvolte <em>Vlastní...</em>. Zobrazí se vám dialog pro úpravu lišt.</p>

<p>Snadným přesouváním jednotlivých tlačítek si upravíte lišty do té podoby, která vám vyhovuje. Postačí uchopit kteroukoliv ikonku (v dialogu či na liště) a přesunout ji na požadované místo. Pro odstranění libovolného tlačítka na liště (či textového pole) přesuňte daný prvek z lišty. Pokud naopak chcete přidat nový prvek z nabídky, přesuňte jej na požadované místo na liště. Přesun uskutečníte tak, že uchopíte požadovaný prvek a přesunete jej na nové  místo. Až budete hotovy, klepněte na tlačítko <em>Hotovo</em>.</p>

<h3 id="special_toolbar_items">Speciální položky lišty</h3>

<p>Na lištu též můžete umístit několik speciálních položek, které vám umožní upravovat vzhled lišty. Jsou to:</p>

<ul>
  <li><strong>Oddělovače:</strong> Umožní od sebe oddělit jednotlivé prvky malou vertikální "čárkou".</li>
  <li><strong>Pružné mezery:</strong> Umožní od sebe oddělit jednotlivé prvky mezerou. Tato mezera je automaticky rozšířena na velikost prázdného místa na liště. Tato položka je užitečná tehdy, pokud chcete některé prvky umístit na pravou stranu lišty.</li>
  <li><strong>Mezery:</strong> Umožní oddělit jednotlivé prvky malou mezerou. Obyčejně je mezera široká 20 pixelů.</li>  

</ul>

<h2 id="themes">Motivy vzhledu</h2>

<p>Motivy vzhledu jsou soubory, které jsou nainstalované v Firefox a umožňují změnu jeho vzhledu (nikoliv funkcí).</p>

<h3 id="getting_installing_themes">Stažení a instalace motivu vzhledu</h3>

<p>Motivy vzhledu můžete stahovat a instalovat z webu <a href="https://addons.mozilla.org/themes/" target="_blank">Mozilla Update</a>. Ve vyhledávačích na Internetu pak naleznete řadu dalších.</p>

<p>Obvykle, když klepnete na odkaz pro instalaci motivu vzhledu, Firefox zobrazí dialog, který se vás zeptá, zda-li si přejete daný motiv vzhledu nainstalovat. V dialogu máte volby pro stažení a následnou instalaci či zrušení instalace.</p>

<h3 id="uninstalling_themes">Odinstalace motivu vzhledu</h3>

<p>Pokud si přejete odstranit motiv zhledu z Firefoxu, zvolte v nabídce <span
  class="menuPath">Nástroje</span> a pod touto nabídkou položku <span class="menuPath">Správce motivů vzhledu</span>.</p>

<p><img width="371" height="273" alt="Správce motivů vzhledu" src="../images/help-theme_manager.png"/></p>

<p>Otevře se vám Správce motivů vzhledu. V něm zvolte motiv vzhledu, který chcete odstranit a následně klepněte na tlačítko odinstalovat. Pro projevení změny je potřeba Firefox restartovat.</p>

<h3 id="changing_themes">Změna motivu vzhledu</h3>

<p>Změnu instalovaného motivu vzhledu provedete tak, že v nabídce <span class="menuPath">Nástroje
  </span> zvolíte položku <span class="menuPath">Správce motivů vzhledu</span>.</p>

<p>Otevře se vám Správce motivů vzhledu. V něm jednoduše vyberete motiv vzhledu, který si přejete a klepnete na tlačítko <em>Použít motiv vzhledu</em>. Po této změně je pro správnou funkčnost motivu vzhledu doporučeno Firefox restartovat.</p>

<h3 id="updating_themes">Aktualizace motivu vzhledu</h3>

<p>Kdykoliv budete potřebovat zkontrolovat existenci nové verze motivu vzhledu, který máte nainstalován, zvolte v hlavní nabídce Firefoxu <span class="menuPath">Nástroje</span> a zvolte položku <span class="menuPath">Správce motivů vzhledu</span>.</p>

<p>Jednoduše vyberte motiv vzhledu, který si přejete zaktualizovat a klepněte na tlačítko Aktualizovat.</p>

<h2 id="extensions">Rozšíření</h2>

<p>Rozšíření jsou malé balíčky, které přidávají do prohlížeče Firefox nové funkce.</p>

<h3 id="getting_installing_extensions">Instalace rozšíření</h3>

<p>Instalace rozšíření je velmi podobná s instalací motivu vzhledu. Rozšíření můžete nalézt na stránce
<a target="blank" href="https://addons.mozilla.org/extensions/">Mozilla Update</a>.</p>

<p>Zde se na stránce s rozšířeními nalézá pro každé rozšíření odkaz na instalační balíček. Pokud nemáte v prohlížeči zakázaný JavaScript, klepnutím na odkaz nainstalujete dané rozšíření.</p>

<h3 id="uninstalling_extensions">Odinstalace rozšíření</h3>

<p>
Pokud si přejete z Firefoxu odstranit nainstalované rozšíření, zvolte v hlavní nabídce <span class="menuPath">Nástroje</span> a pod ní položku <span class="menuPath">Správce rozšíření</span>.</p>

<p><img width="319" height="231" alt="Správce rozšíření" src="../images/help-extension_manager.png"/></p>

<p>
Otevře se vám dialog Správce rozšíření. V něm vyberte rozšíření, které si přejete odstranit a klepněte na tlačítko odinstalovat. Po restartu Firefoxe se provede odinstalace zvoleného rozšíření.</p>

<h3 id="updating_extensions">Aktualizace rozšíření</h3>

<p>
Pokud si přejete zkontrolovat, zda-li je k dispozici novější verze nainstalovaného rozšíření, zvolte v hlavní nabídce <span class="menuPath">Nástroje</span> a pod ní položku <span class="menuPath">Správce rozšíření</span>.</p>

<p>Vyberte rozšíření, které chcete aktualizovat a klepněte na tlačítko <em>Aktualizovat</em>.</p>

<div class="contentsBox"><em>16. října 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>
