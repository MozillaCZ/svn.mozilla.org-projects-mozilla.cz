<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Poznámky k vydání verze 1.4');
	$page->setHeadline('Poznámky k vydání','Verze 1.4 - instalace portů');
	$page->setKeywords ('mozilla, suite, poznámky k vydání, verze, gecko, prohlížeč, poštovní klient, editor, chatzilla');
	$page->setDescription ('Poznámky k vydání historické verze 1.4');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
<p>V této části <a href="index.php">poznámek k vydání verze Mozilly 1.4</a> naleznete požadavky na systém, informace o kompatibilitě a poznámky k instalaci.</p>

<ul>
	<li><a href="#ports_openvms">OpenVMS</a></li>
	<li><a href="#ports_solaris">Solaris</a></li>
	<li><a href="#ports_aix">AIX</a></li>
	<li><a href="#ports_hpux">HP-UX</a></li>
	<li><a href="#ports_irix">IRIX</a></li>
	<li><a href="#ports_os2">OS/2</a></li>
</ul>

<h2 id="ports_openvms">OpenVMS</h2>

<ul>
	<li> OpenVMS Alpha V7.1 nebo novější</li>
	<li> DECwindows MOTIF V1.2-4 nebo novější</li>
	<li> Compaq TCP/IP Services Verze 5.0 pro OpenVMS nebo novější, MultiNet V4.3A nebo novější,  nebo TCPware V5.4-3 nebo novější.</li>
	<li> 65 MB volného místa na disku</li>
</ul>

<p>Pro více informací si prečtěte <i>Mozilla for OpenVMS Installation Guide and Release Notes</i> na <a href="http://www.openvms.compaq.com/openvms/products/ips/mozilla_relnotes.html">www.openvms.compaq.com</a>.</p>

<h2 id="ports_solaris">Solaris</h2>
<ul>
	<li>Pro spuštění Mozilly na Solarisu je nutné instalovat níže uvedené záplaty
	<table border="1">
	<tbody>
	<tr>
		<td>Solaris</td>
		<td>Záplaty/SPARC</td>
	</tr>
	<tr>
		<td>2.7</td>
		<td style="font-size: x-small;">
		<ul>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=106950&amp;collection=fpatches">106950-22</a> - "SunOS 5.7: linker patch"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=106327&amp;collection=fpatches">106327-17</a> - "32-Bit Shared library patch for C++"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=106300&amp;collection=fpatches">106300-18</a> - "64-Bit Shared library patch for C++"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=108376&amp;collection=fpatches">108376-42</a> - "OpenWindows 3.6.1: Xsun Patch"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=107650&amp;collection=fpatches">107650-08</a> - "OpenWindows 3.6.1 X11R6.4 Xprint Extension Patch"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=107636&amp;collection=fpatches">107636-09</a> - "SunOS 5.7: X Input &amp; Output Method patch"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=112689&amp;collection=fpatches">112689-02</a> - "SunOS 5.7: UTF-8 locale ICONV patch"</li>
		</ul>

		nebo <a href="ftp://sunsolve.sun.com/pub/patches/7_Recommended.zip">stáhněte</a> a <a href="ftp://sunsolve.sun.com/pub/patches/7_Recommended.README">instalujte</a> "Recommended&amp;Security patch cluster", který obsahuje všechny záplaty uvedené výše.
		</td>
	</tr>
	<tr>
		<td>2.8</td>
		<td style="font-size: x-small;">
		<ul>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=109147&amp;collection=fpatches">109147-09</a> - "SunOS 5.8: linker patch"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=108434&amp;collection=fpatches">108434-02</a> - "32-Bit Shared library patch for C++"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=108435&amp;collection=fpatches">108435-02</a> - "64-Bit Shared library patch for C++"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=108773&amp;collection=fpatches">108773-17</a> - "SunOS 5.8: IIIM and X Input &amp; Output Method patch"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=108652&amp;collection=fpatches">108652-65</a> - "X11 6.5.1: Xsun patch"</li>
		</ul>

		nebo <a href="ftp://sunsolve.sun.com/pub/patches/8_Recommended.zip">stáhněte</a> a <a href="ftp://sunsolve.sun.com/pub/patches/8_Recommended.README">nainstalujte</a> "Recommended&amp;Security patch cluster", který obsahuje všechny záplaty uvedené výše.
		</td>
	</tr>
	<tr>
		<td>2.9</td>
		<td style="font-size: x-small;">
		<ul>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=112963&amp;collection=fpatches">112963-05</a> - "SunOS 5.9: linker patch"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=111711&amp;collection=fpatches">111711-03</a> - "32-Bit Shared library patch for C++"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=111712&amp;collection=fpatches">111712-03</a> - "64-Bit Shared library patch for C++"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=112661&amp;collection=fpatches">112661-04</a> - "SunOS 5.9: IIIM and X Input &amp; Output Method patch"</li>
			<li><a href="http://sunsolve.sun.com/pub-cgi/retrieve.pl?patchid=112785&amp;collection=fpatches">112785-12</a> - "X11 6.6.1: Xsun patch"</li>
		</ul>

		nebo <a href="ftp://sunsolve.sun.com/pub/patches/9_Recommended.zip">stáhněte</a> a <a href="ftp://sunsolve.sun.com/pub/patches/9_Recommended.README">nainstalujte</a> "Recommended&amp;Security patch cluster", který obsahuje všechny záplaty uvedené výše.
		</td>
	</tr>
	</tbody>
	</table>

	<p>... z <a href="http://sunsolve.sun.com/">sunsolve.sun.com</a>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=88205" title="Bug 88205 - build will not start on Solaris 8 04/01">88205</a>)</p>
	</li>

	<li>65 MB volného místa na disku</li>
	<li>128 MB RAM</li>
	<li>Pro tisk vyžaduje instalaci <a href="#xprint">Xprint</a>. <a href="http://xprint.mozdev.org/">xprint.mozdev.org</a> nabízí <code><a href="http://xprint.mozdev.org/download.html">GISWxprint</a></code> (<i>nebo</i> <code><a href="http://xprint.mozdev.org/download.html">GISWxprintglue</a></code>) balíček pro jednoduchou instalaci.</li>
	<li>Vyžaduje knihovny GTK+ a glib (musí být kompatibilní s Sun Workshop/Forte). GTK+/glib kompilované kompilátorem gcc jsou <b>nekompatibilní</b> s binárkami v Mozille, kompilovanými Sun Workshop/Forte, GTK+/glib knihovny kompilované Sun Workshop/Forte jsou kompatibilní s binárkami kompilovanými jak Sun Workshopem tak i gcc. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=136144" title="bug 136144 - sparc-sun-solaris-7_8_9 builds crash on startup">136144</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=141415" title="bug 141415 - sigsegv at startup under solaris 9">141415</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=186534" title="bug 186534 - freeze on startup after Gdk-WARNING **: gdk_font is NULL or not a fontset.">186534</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=194127" title="bug 194127 - V 1.3beta pre-compiled binary doesn't run on Solaris 2.8">194127</a> a mnoho dalších)</li>
</ul>

<h2 id="ports_aix">AIX</h2>
<ul>
	<li> AIX 4.3.3 nebo novější</li>
	<li> Vyžaduje gtk+, glib, libiconv &amp; gettext (kompatibilní verze můžete nalézt na <a href="http://www-1.ibm.com/servers/aix/products/aixos/linux/download.html">serveru IBM</a>)</li>
</ul>


<h2 id="ports_hpux">HP-UX</h2>
<ul>
	<li> Verze Mozilly pro HP-UX vyžaduje gtk+, glib, libiconv &amp; gettext z uvedených adres
	<ul>
		<li>HP-UX 11.20 <a href="http://www.hp.com/workstations/support/software/hpux/">GTK (b6848ba) ze stránek HP pro 11i V 1.6</a></li>
		<li>HP-UX 11.00 (&amp; 11.11) <a href="http://www.hp.com/workstations/support/software/hpux/">GTK (b6848ba) ze stránek HP pro 11.0/11i v 1.0</a> nebo z <a href="http://hpux.connect.org.uk/hppd/hpux/Gtk/Development/gtk+-1.2.10/">HP-UX Porting centra</a></li>
		<li>HP-UX 10.20 <a href="http://hpux.connect.org.uk/hppd/hpux/Gtk/Development/gtk+-1.2.10/">HP-UX Porting centrum</a></li>
	</ul>
	</li>
</ul>


<h2 id="ports_irix">IRIX</h2>
<p>Při používání správce oken z twm rodiny bez nastavení DecorateTransients, nebudou fungovat pop-up okna Hledání, Uložit, Předvolby apod. Nastavte předvolbu DecorateTransients do rc souboru vašeho správce oken. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=78928" title="Bug 78928 - twm or no wm: Cannot type into dialog text fields">78928</a>)</p>


<h2 id="ports_os2">OS/2</h2>
<p>Minimální požadavky:</p>

<ul>
	<li>Procesor třídy Pentium (133)</li>
	<li>64 MB RAM</li>
	<li>70 MB volného místa na disku</li>
	<li>64 MB odkládacího prostoru (swap)</li>
	<li>OS/2 Warp 4 (Merlin Kernel)</li>
	<li>Fixpack 15 nebo novější</li>
	<li>MPTS verze 5.3 nebo novější</li>
	<li>TCP/IP verze 4.1 nebo novější</li>
	<li>INETVER: SOCKETS.SYS=5.3007, AFOS2.SYS=5.3001, AFINET.SYS=5.3006 nebo novější</li>
</ul>

<p>Pozn: Nepokoušejte se použít MPTS &amp; TCP/IP nižší verze než uvedené hodnoty INETVER. Ačkoliv se Mozilla zdánlivě spustí a poběží se starými zásobníky normálně, některé funkce nebudou implementovány korektně, což může vést k pádu aplikace a ztrátě dat.</p>

<p>Doporučeno:</p>
<ul>
	<li>Procesor třídy Pentium-II, 266 MHz</li>
	<li>128 MB RAM</li>
	<li>150 MB volného místa na disku a</li>
	<li>128 MB odkládacího prostoru (swap)</li>
	<li>Fixpack 16</li>
	<li>MPTS verze 5.5 nebo 6.0</li>
	<li>TCP/IP verze 4.3</li>
	<li>INETVER: SOCKETS.SYS=6.2004, AFOS2.SYS=6.2000, AFINET.SYS=6.2013</li>
</ul>

<p>nebo</p>

<ul>
	<li>OS/2 Warp 4.52 Convenience Pack 2 (subscription)</li>
</ul>

<p>nebo</p>

<ul>
	<li>eCom Station 1.0 a novější</li>
</ul>

<p>Pozn.: MPTS 6 a FP 16 vyžadují <tt>Software Choice subscription</tt>, ostatní upgrady jsou v součané době zdarma.</p>

<p><small>Tento dokument je překladem <a href="http://www.mozilla.org/releases/mozilla1.4/installation-ports.html" title="Originální dokument">dokumentu</a> z <a href="http://www.mozilla.org/" title="Web neziskové organizace Mozilla Foundation">mozilla.org</a>. Copyright &copy; 1998-2003 The Mozilla Organization</small></p>

<?php
	$page->includeTemplate('footer');
?>
