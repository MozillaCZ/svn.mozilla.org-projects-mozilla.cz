<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Mozilla často kladené otázky');
	$page->setHeadline('Často kladené otázky','Mozilla FAQ: 3. Pošta/Diskuse');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<ul>
<li><a href="#3.1">3.1. Mohu nainstalovat pouze poštovní program bez všeho ostatního?</a></li>
<li><a href="#3.2">3.2. Jak udělám z Mozilly můj výchozí poštovní program?</a></li>
<li><a href="#3.3">3.3. Mohu používat zároveň s Mozillou jiný poštovní program?</a></li>
<li><a href="#3.4">3.4. Mohu otevřít poštu/diskuse v záložce prohlížeče?</a></li>
<li><a href="#3.5">3.5. Mohu přistupovat k mým účtům WebMail a Hotmail původně účtům založeným s Netscape skrz Mozillu?</a></li>
<li><a href="#3.6">3.6. Je poštovní program Mozilly citlivý na e-mailové viry?</a></li>
<li><a href="#3.7">3.7. Jak přenesu do Mozilly elektronickou poštu z jiných poštovních programů?</a></li>
<li><a href="#3.8">3.8. Jak přenesu poštu z Mozilly do jiných poštovních programů nebo do jiného počítače?</a></li>
<li><a href="#3.9">3.9. Umí Mozilla kontrolu správnosti slov?</a></li>
<li><a href="#3.10">3.10. Jak nastavím vícero SMTP odchozích poštovních serverů?</a></li>
<li><a href="#3.11">3.11. Je v Mozille oznamovač pošty?</a></li>
<li><a href="#3.12">3.12. Obsahuje Mozilla kalendář?</a></li>
<li><a href="#3.13">3.13. Jak použiji S/MIME, PGP nebo GnuPG pro odesílání a příjímání podepsané nebo kódované pošty?</a></li>
<li><a href="#3.14">3.14. Jak donutím jména diskusních skupin zobrazovat se celá?</a></li>
<li><a href="#3.15">3.15. Jak přečtu nebo napíšu ROT13 v prohlížeči diskusí?</a></li>
</ul>

<dl class="faq">
<dt id="question-3.1"><a name="3.1">3.1. Mohu nainstalovat pouze poštovní program bez všeho ostatního?</a></dt>
<dd id="answer-3.1">
<p>Zatím může být nainstalován samostaně jen prohlížeč. Pošta/Diskuse, Editor a ChatZilla nemohou být nainstalováný bez prohlížeče.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.2"><a name="3.2">3.2. Jak udělám z Mozilly můj výchozí poštovní program?</a></dt>
<dd id="answer-3.2">
<p>Až budete poprvé spouštět Poštu/Diskuse, měl by se vás program dotázat, jestli z Mozilly chcete udělat vás předvolený poštovná program. Jestliže odpovíte &#8216;ne&#8217; a později se rozhodnete, že
<i>byste rádi</i>, aby Mozilla byla váš výchozý program pro poštu, pak:</p>

<ul>
<li>
<p>
<b>Windows, Mac:</b> jděte do
Edit | Preferences | Mail &amp; Newsgroups a zaškrtněte &#8216;Use Mozilla
Mail as the default mail application&#8217;.</p>

<p>Jestliže stále máte problémy s
<tt>mailto:</tt> odkazy pod Windows zkuste jít do Start | Settings | Control Panel a otevřete
Internet Options. Pod záložkou &#8216;Programs&#8217;, vyberte &#8216;Mozilla Mail&#8217; ze seznamu u &#8216;E-mail:&#8217;.</p>
</li>

<li>
<p>
<b>GNOME</b> <i>(Unix/Linux)</i><b>:</b> Otevřete Control Panel. Jděte do Document Handlers | URL Handlers.
Vložte <tt>mailto</tt> do levého textového pole, <tt>a gnome-moz-remote &quot;%s&quot;</tt> do pravého.
Poté vložte následující text do <tt>~/.gnome/gnome-moz-remote</tt> (soubor vytvořte pokud neexistuje):</p>
</li>
</ul>

<pre class="screen">
[Mozilla]
 filename=<b><i>absolutní cestu k adresáři kde je Mozilla nainstalována</i></b>/mozilla
</pre>

<ul>
<li>
<p>
<b>KDE 3</b> <i>(Unix/Linux)</i><b>:</b> Otevřete Control Center
a jděte do Network | Email. V Preferred Email Client, vložte:</p>
</li>
</ul>

<pre class="screen">
<b><i>absolutní cestu k adresáři kde je Mozilla nainstalována</i></b>/mozilla --mail
</pre>


<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.3"><a name="3.3">3.3. Mohu používat zároveň s Mozillou jiný poštovní program?</a></dt>
<dd id="answer-3.3">
<p>
<b>Windows, Macintosh:</b>
Abyste donutili Mozillu používat jiný poštovní program, můžete buď <i>(a)</i>
odinstalovat Mozillu a nainstalovat pouze prohlížeč, nebo <i>(b)</i>
přidat tento řádek do
<a href="obecne.php#1.5"><tt>user.js</tt></a>:</p>

<pre class="screen">
user_pref(&quot;network.protocol-handler.external.mailto&quot;, true);
</pre>

<p>Jestliže kliknete na poštovní odkaz, bude nyní Mozilla otevírat systémem předvolený poštovní program.
</p>

<p>Položku je též možné změnit nebo přidat přes stránku <a href="about:config">about:config</a>, a to tak
že kliknete pravým tlačítkem myši do seznamu a vyberete Nový/Boolean. Poté vyplníte jako název předvolby
&quot;network.protocol-handler.external.mailto&quot; a na dotaz na hodnotu této položky vyplníte true.
</p>

<p>
<b>GNOME, KDE</b> <i>(Unix/Linux)</i><b>:</b>
Nyní to ještě není možné, ale pracuje se na tom, aby byla Mozilla kompatibilní s <a href="http://www.freedesktop.org/">X Desktop Group Standardem</a> v blízké budoucnosti.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.4"><a name="3.4">3.4. Mohu otevřít poštu/diskuse v panelu prohlížeče?</a></dt>
<dd id="answer-3.4">
<p>Vložte <tt><a href="chrome://messenger/contents/messenger.xul">chrome://messenger/contents/messenger.xul</a></tt>
do adresové lišty příslušného panelu. Můžete si pak dokonce uložit tento panel jako záložku, nebo jakou součást skupiny záložek.</p>

<p>
<b>Pozn.:</b> Podpora není standardizována. Mohou se dít divné věci, <i>např.</i>,
že se zavře celá Mozilla kdyz zavřete panel.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.5"><a name="3.5">3.5. Mohu přistupovat k mým účtům WebMail a Hotmail, původně účtům založeným s Netscape, skrz Mozillu?</a></dt>
<dd id="answer-3.5">
<p>Bohužel ne. Netscape WebMail a Hotmail používají proprietární protokoly.
Abyste mohli přistupovat k WebMail přímo, musíte používat Netscape 6+ s AIM;
Stejně tak, abyste se dostali na Hotmail musíte použít buď
Microsoft Outlook nebo Outlook Express.
Existuje také proprietární shareware, který vám umožní totéž.
</p>

<p>Webmail lze používat také skrz web na adrese <a href="http://webmail.netscape.com/"><tt>http://webmail.netscape.com/</tt></a>,
u  Hotmail pak <tt><a href="http://www.hotmail.com">http://www.hotmail.com/</a></tt>.
Jestliže používáte Microsoft Messenger,
po kliknutí na odkaz by se vám měl otevřít prohlížeč s vaší poštou.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.6"><a name="3.6">3.6. Je poštovní program Mozilly citlivý na e-mailové viry?</a></dt>
<dd id="answer-3.6">
<p>Poštovní klient Mozilly <i>nedovolí</i> virům nebo červům cokoli automaticky spouštět.
Vždy vidíte, že vám přišel spustitelný soubor. Je jen na vás jestli ho chcete uložit na disk a spustit, přestože riskujete vznik škod.
</p>

<p>JavaScript je v předvolbách pro poštu a diskuse vypnut, tedy nemůžete spustit nějaký skript
z mailu pouze tím, že ho otevřete.</p>

<p>Stejně jako s každým poštovním programem, buďte opatrní před spouštěním
souborů, které jste dostali poštou. Pro lepší zabezpečení můžete používat ještě antivirový program.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.7"><a name="3.7">
3.7. Jak přenesu do Mozilly elektronickou poštu z jiných poštovních programů?</a></dt>
<dd id="answer-3.7">
<p> Otevřete Poštu/Diskuse a jděte do Tools | Import. Tím aktivujete dialog
který vás povede procesem.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.8"><a name="3.8">3.8. Jak přenesu poštu z Mozilly do jiných poštovních programů nebo do jiného počítače?</a></dt>
<dd id="answer-3.8">
<p>Soubory s poštou, které ukládá Mozilla jsou ve standardním&#8216;mbox&#8217; formátu,
který může používat, nebo importovat většina programů. Mnoho proprietárních programů obsahuje
import z programu Eudora, který ovšem používá také formát &#8216;mbox&#8217;;
proto je možné použít tuto funkci i pro přečtení mailů z Mozilly.
</p>

<p>Vaše soubory s poštou jsou ve vašem profilu (podívejte se do <a href="profil.php">uživatelských profilů</a>), a do adresáře <tt>Mail</tt> a (jestliže používáte IMAP) do <tt>ImapMail</tt>.
Každá složka pošty (Inbox, Sent, <i>atd.</i>) je uložen ve dvou soubrech. Jeden je bez přípony
(např. <tt>INBOX</tt>), který je přímo soubor, který obsahuje poštu (ve formátu &#8216;mbox&#8217;) a
druhý s příponou <tt>.msf</tt> (<i>např.</i>
<tt>INBOX.msf</tt>), který obsahuje seznam mailů (Mail Summary File), které jsou v souboru s poštou.
Pokud importujete maily do jiného programu, vyberte soubor BEZ přípony.</p>

<p>Pokud chcete přesunout soubory s poštou do jiného profilu Mozilly, nebo do jiné instalace Mozilly,
jednoduše přesuňte soubory do adresáře <tt>Mail</tt> příslušného profilu.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.9"><a name="3.9">3.9. Umí Mozilla kontrolu správnosti slov</a></dt>
<dd id="answer-3.9">
<p>Od verze 1.4.1 má Mozilla vlastní kontrolu slov a není tedy potřeba používat žádný modul třetích stran.
</p>
<p>Slovníky pro nejrůznější jazyky můžete nalézt na <a href="http://www.mozcafe.com/download/">MozillaCafe</a>.
</p>

<p>Jestliže jste si stáhli kontrolu slov abyste ji otestovali, ujistěte se, že:
&#8216;Check spelling before sending&#8217; je zaškrtnuto v Edit | Preferences
| Mail &amp; Newsgroups | Composition. Po prvním spuštění kontroly, vyberte slovník ze seznamu v levé
dolní části (předvoleno je &#8216;Download More&#8217;).</p>

<p>Jestliže kontrola neukládá váš uživatelský slovník, přidejte tento řádek do
<a href="obecne.php#1.5"><tt>user.js</tt></a>:</p>

<pre class="screen">
user_pref (&quot;spellchecker.savePDEverySession&quot;, true);
</pre>

<p>Takto vytvoříte soubor <tt>persdict.dat</tt>, do kterého se ukládají změny po každém použití kontroly slov.</p>

<p>S Mozillou mohou být použity i jiné kontrolní nástroje od třetích stran.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.10"><a name="3.10">3.10. Jak nastavím vícero SMTP odchozích poštovních serverů?</a></dt>
<dd id="answer-3.10">
<p>Edit | Mail &amp; Newsgroup Account Settings | Outgoing Servers (SMTP). Klikněte na Advanced a poté Add pro přidání nového SMTP serveru.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.11"><a name="3.11">3.11. Je v Mozille oznamovač pošty?</a></dt>
<dd id="answer-3.11">
<p>Verze Mozilly pro Windows obsahuje oznamovač pošty do systémové lišty, který je aktivní pokud je poštovní část Mozilly používána. Předvolby pro notifikaci jsou v Edit | Preferences | Mail &amp; Newsgroups.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.12"><a name="3.12">3.12. Obsahuje Mozilla kalendář?</a></dt>
<dd id="answer-3.12">
<p>Kalendář je vyvíjen v <a href="http://www.mozilla.org/projects/calendar/">projektu Calendar</a>.
Bude založen na existujících standardech kalendářů: <a href="http://www.isi.edu/in-notes/rfc2445.txt">iCalendar</a>, <a href="http://www.isi.edu/in-notes/rfc2446.txt">iTIP</a>, a <a href="http://www.isi.edu/in-notes/rfc2447.txt">iMIP</a>.</p>

<p>V současné době je ve stavu testování a ještě nebyl dokončen. Testovací verze jsou dostupné pro
Windows a Linux (pomoc pro Macintosh vítána). Taktéž je potřeba pomoc s programováním.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.13"><a name="3.13">3.13. Jak použiji S/MIME, PGP nebo GnuPG pro odesílání a příjímání podepsané nebo kódované pošty?</a></dt>
<dd id="answer-3.13">
<p>Abyste mohli používat S/MIME, otevřete Poštu/Diskuse a jděte do Edit | Mail &amp;
Newsgroup Account Settings | <i>jméno účtu</i> | Security.
Zde můžete nastavit jaké certifikáty používat pro jednotlivé účty pro
elektronický podpis a/nebo kryptování.
</p>

<p>Podpora pro PGP nebo GnuPG v Mozille ještě není, ale pracuje se na ní v projektu <a href="http://enigmail.mozdev.org/">Enigmail</a>.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.14"><a name="3.14">3.14. Jak donutím jména diskusních skupin zobrazovat se celá?</a></dt>
<dd id="answer-3.14">
<p>V <a href="obecne.php#1.5"><tt>user.js</tt></a>, přidejte:</p>

<pre class="screen">
user_pref(&quot;mail.server.default.abbreviate&quot;, false);
</pre>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-3.15"><a name="3.15">3.15. Jak přečtu nebo napíšu ROT13 v prohlížeči diskusí?</a></dt>
<dd id="answer-3.15">
<p>Nástroj pro ROT13 ve vývoji je dostupný na <a href="http://www.xulplanet.com/downloads/view.cgi?category=applications&amp;view=minirot13">XULPlanet</a>.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
</dl>

<?php
	$page->includeTemplate('footer');
?>
