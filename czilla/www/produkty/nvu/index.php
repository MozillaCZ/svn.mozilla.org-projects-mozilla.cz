<?php
	require_once '../../inc/page.php';
	$page->setTitle('Nvu - snadné vytváření webových stránek');
	$page->setHeadline('Nvu','Představení produktu');
	$page->setKeywords ('nvu, editor, mozilla, HTML, XHTML, PHP, WYSIWYG, CSS, FrontPage, Dreamweaver, CaScadeS, Gecko');
	$page->setDescription ('Produktové stránky HTML a PHP editoru Nvu');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
<table>
<tr>
	<td style="width: 220px"><a href="images/scr-nvu.png" title="Klepněte pro získání plné velikosti">
	<img src="images/scr-nvu-s.png" alt="Náhled Nvu" width="200" height="160" /></a></td>

	<td style="vertical-align: top">
	<div class="obsolete">Vývoj editoru Nvu <strong>byl ukončen</strong>,
	jeho nástupcem s řadou novinek je aplikace <strong><a href="http://www.mozilla.cz/produkty/kompozer/">KompoZer</a></strong>.</div>

  <p><strong>Nvu</strong> je kvalitní <abbr title="What You See Is What You Get" lang="en">WYSIWYG</abbr>
  editor na vytváření a&nbsp;správu webových stránek, který je založen na Editoru z&nbsp;balíku
  <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a>.
  Mezi hlavní přednosti se řadí snadné ovládání a kvalita vytvářených webových stránek.</p>

  <p>
  Nedílnou součásti Nvu je <strong>Správce stránek</strong>, který vám umožní snadno spravovat
  vytvářené webové stránky a&nbsp;ty následně nahrávat přímo na web prostřednictvím
  protokolu <abbr title="File Transfer Protocol" lang="en">FTP</abbr>.
  </p>

  <p><img src="/img/download.png" width="16" height="16" alt="" />
  <strong><a href="http://www.mozilla.cz/stahnout/nvu/" title="Stáhnout nejnovější verzi Nvu v češtině">Stáhnout nejnovější verzi</a></strong></p>
</td>
</tr>
</table>

<h2 id="nvu-cs" class="nice nvu">Proč Nvu používat</h2>

<p>
Nvu je skutečně kvalitní editor. Přečtěte si několik důvodů, proč jej začít používat.
</p>

<dl>
  <dt>Snadné přepínání mezi návrhem a&nbsp;zdrojovým kódem</dt>
  <dd>
  	Nvu umožňuje při vytváření stránek snadno přepínat mezi
    <abbr title="What You See Is What You Get" lang="en">WYSIWYG</abbr> editorem
    a&nbsp;editorem zdrojového kódu. Výsledek si můžete prohlédnout přímo v&nbsp;editoru bez nutnosti
    spouštět prohlížeč.
  </dd>

  <dt>Podpora práce v&nbsp;panelech</dt>
  <dd>
    Nvu, podobně jako <a href="/produkty/firefox/" title="Mozilla Firefox: Stránka o produktu">Mozilla Firefox</a>,
    umožňuje <strong>práci v panelech</strong>. Můžete tak mít zároveň otevřeno několik stránek
    a&nbsp;ty dle potřeb upravovat. Výsledek si můžete okamžitě prohlédnout.
  </dd>

  <dt>Přehledná publikace a&nbsp;správa webových stránek</dt>
  <dd>
    Nvu má v&nbsp;sobě zabudovaného <strong>Správce stránek</strong>. Pomocí tohoto nástroje můžete
    snadno spravovat více vašich webů. Postačí, když v&nbsp;levé nabídce klepnete na <span class="nabidka">Nastavení</span> či
    stisknete klávesovou zkratku <kbd>F9</kbd>.
  </dd>

  <dt>Podpora pro psaní PHP kódu</dt>
  <dd>
    S&nbsp;editorem Nvu můžete v&nbsp;rámci <abbr title="What You See Is What You Get" lang="en">WYSIWYG</abbr> editoru psát PHP kód.
    Postačí, když z&nbsp;hlavní nabídky zvolíte <span class="nabidka">Vložit -> PHP kód</span>.
  </dd>

  <dt>Integrovaný CSS editor</dt>
  <dd>
    Nvu v&nbsp;sobě obsahuje integrovaný <abbr title="Cascading Style Sheets">CSS</abbr> editor. Pomocí tohoto editoru
    můžete jednoduše psát kaskádové styly a&nbsp;tím snadno formátovat výsledné webové stránky.
  </dd>

  <dt>Kontrola českého pravopisu</dt>
  <dd>
    Podobně jako například <a href="/produkty/thunderbird/"
    title="Mozilla Thunderbird: Stránka o produktu">Mozilla Thunderbird</a> Nvu obsahuje
    český slovník na kontrolu pravopisu.
  </dd>

  <dt>Intuitivní ovládání v češtině</dt>
  <dd>
    Vytváření webových stránek s&nbsp;Nvu je velmi jednoduché a intuitivní. Program je
    <strong>přeložen do češtiny</strong>.
  </dd>

  <dt>K dispozici zdarma</dt>
  <dd>
    Nvu je distribuován <strong>zcela zdarma</strong>. Je jedno, zda jej používáte doma či ve firmě,
    můžete jej svobodně používat kdekoliv a&nbsp;v&nbsp;libovolném počtu kopií.
  </dd>
</dl>

<p>
Máte nějaký dotaz, či si s&nbsp;něčím nevíte rady? Navštivte <strong><a href="http://forum.mozilla.cz/viewforum.php?f=8">fórum pro podporu uživatelů</a></strong>.
</p>

<h2 id="dalsi-informace" class="nice nvu">Související informace</h2>
<ul>
	<li><a href="nahledy.php" title="Náhledy na Nvu">Náhledy na Nvu</a> &ndash; jak Nvu vypadá</li>
</ul>
<?php
	$page->includeTemplate('footer');
?>
