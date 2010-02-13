<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Blokování vyskakovacích oken';
	$page->headline = array('Blokování vyskakovacích oken','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>


<p>Tato stránky vysvětluje všechny volby, které jsou k dispozici v dialogu <em><span class="win">Možnosti</span><span                             class="unix">Předvolby</span></em> o blokování vyskakovacích oken programu Firefox.</p>

<div class="contentsBox">
  V této kapitole:
  <ul>
    <li><a href="#what_are_popups">Co jsou vyskakovací okna?</a></li>
    <li><a href="#popup_blocker_preferences">Nastavení blokování vyskakovacích oken</a></li>
  </ul>
</div>

<h2 id="what_are_popups">Co jsou vyskakovací okna?</h2>
<p>Vyskakovací okna jsou okna webových stránek, které se otevřou bez vědomí uživatele. Dost často se stává, že se taková okna otevřou přes celou obrazovku monitoru nad všemi okny prohlížeče.</p>

<p>Firefox umožňuje tato okna blokovat. Potřebné volby naleznete v dialogu <em><span class="win">Možnosti</span><span                             class="unix">Předvolby</span></em> na panelu <a href="prefs.html#web_features_options">Webové stránky</a>. Blokování vyskakovacích oken je ve výchozím nastavení povoleno.</p>

<p>
Při zablokování vyskakovacího okna Firefox zobrazí informační lištu a ve stavové liště ikonku 
<img src="../images/help-Info.png" width="16" height="16" alt=""/>. Když klepnete na informační lištu či ikonku, zobrazí se vám nabídka s následujícími možnostmi:
<ul>
  <li>Povolit vyskakovací okna</li>
  <li>Upravit <a href="#popup_blocker_preferences"><span class="win">možnosti</span><span                             class="unix">předvolby</span> blokování vyskakovacích oken</a></li>
  <li>Nezobrazovat již tuto zprávu při blokování vyskakovacích oken</li>
  <li>(zobrazí vyskakovací okna)</li>
</ul>
</p>

<p><strong>Při návštěvách některých stránek může blokování vyskakovacích oken překážet </strong>: Některé webové stránky, například stránky bank, používají vyskakovací okna k informování o důležitých věcech. Blokování
vyskakovacích oken znemožní zobrazení těchto oken. Můžete však určit webové stránky, na které se blokování vyskakovacích oken nebude vztahovat.</p>

<p><strong>Blokování vyskakovacích oken nefunguje vždy</strong>: Ačkoliv Firefox blokuje řadu vyskakovacích oken, některé webové stránky používají k zobrazování vyskakovacích oken metody, které lze těžko identifikovat a nemohou být tudíž blokovány.
</p>

<h2 id="popup_blocker_preferences">Nastavení blokování vyskakovacích oken</h2>

<div>Tato kapitola popisuje, jak Firefox blokuje vyskakovací okna. Pokud jste dosud neviděli nastavení, postupujte podle následujících kroků:
<ol>
  <li>Z hlavní nabídky zvolte <span class="win menuPath">Nástroje &gt;                             Možnosti</span><span class="unix menuPath">Úpravy &gt;                             Předvolby</span>.</li>
  <li>Klepněte na panel <em>Webové stránky</em>.</li>
</ol>
Na tomto panelu máte k dispozici volby:
<ul>
  <li><strong>Blokovat vyskakovací okna</strong></li>
  <li><strong>Důvěryhodné servery</strong>: Seznam stránek, které mají povolené zobrazování vyskakovacích oken.
  <ul>
    <li><strong>Povolit</strong>: Klepnutím přidáte stránky do seznamu.</li>
    <li><strong>Odebrat server</strong>: Klepnutím odstraníte stránku ze seznamu.</li>
    <li><strong>Odebrat všechny servery</strong>: Klepnutím odstraníte všechny stránky ze seznamu.</li>
  </ul>
  </li>
</ul>
</div>

<p><strong>Poznámka</strong>: Blokování vyskakovacích oken nemusí na některých webových stránkách vždy fungovat.
Pro bližší informace nahlédněte do sekce <a href="#what_are_popups">Co jsou vyskakovací okna?</a>.</p>

<div class="contentsBox"><em>14. října 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>