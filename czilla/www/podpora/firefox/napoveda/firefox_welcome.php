<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Nápověda Mozilly Firefoxu';
	$page->headline = array('Nápověda Mozilly Firefoxu','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>


<p>
Pro zobrazení jednotlivých témat nápovědy klepněte na některý z panelů po levé straně okna či zvolte konkrétní téma:</p>

<ul>
  <li><strong>Obsah</strong> zobrazí seznam témat nápovědy.</li>
  <li><strong>Hledat</strong> umožní vyhledat v nápovědě konkrétní informaci.</li>
  <li><strong>Rejstřík</strong> zobrazí abecední seznam jednotlivých témat nápovědy.</li>
  <li><strong>Slovník</strong> zobrazí slovník pojmů, které se vyskytují v nápovědě.</li>
</ul>

<p>Bližší informace o používání nápovědy naleznete na stránce <a href="welcome.html">Jak používat nápovědu</a>.</p>




<table width="100%" border="0" class="noTableBorder">
  <tr valign="top">
    <td><h3>Česky</h3></td>
    <td><h3>Anglicky</h3></td>
  </tr>
  <tr valign="top">
     <td>
      <p><strong><a href="/produkty/firefox/" target="_blank">Úvod do Mozilla Firefoxu</a></strong></p>

      <p>Řada užitečných informací pro nové uživatele Mozilly Firefoxu</p>
    </td>
     <td>
      <p><strong><a href="http://www.mozilla.org/releases/" target="_blank">Poznámky k vydání</a></strong></p>

      <p>Informace o vydání této verze Mozilla Firefoxu.</p>
    </td>
  </tr>

  <tr valign="top">

    <td>
      <p><strong><a href="http://www.czilla.cz/"
         target="_blank">CZilla</a></strong></p>

      <p>Informace ze ze světa Mozilly. Novinky, lokalizace, návody, rady apod.</p>
    </td>

    <td>
      <p><strong><a href="http://www.mozillazine.org/"
         target="_blank">MozillaZine</a></strong></p>

      <p>Nejstarší komunitní server. Informace o novinkách okolo Mozilly, hlasování a webové fórum.</p>
    </td>
    <td>&nbsp;</td>
  </tr>

  <tr valign="top">
    <td>
      <p><strong><a href="http://www.czilla.cz/doplnky/zasuvne-moduly/"
         target="_blank">Zásuvné moduly</a></strong></p>

      <p>Informace o zásuvných modulech do Mozilla Firefoxu.</p>
    </td>
    <td>
      <p><strong><a href="http://www.mozilla.org/products/firefox/support/"
         target="_blank">Nápověda Mozilla Firefoxu</a></strong></p>

      <p>Nápověda a tipy k programu Mozilla Firefox.</p>
    </td>
  </tr>

  <tr valign="top">
    <td colspan="2"><h2>On-line podpora</h2></td>
  </tr>
  <tr>
    <td><h3>Česky</h3></td>
    <td><h3>Anglicky</h3></td>
  </tr>

  <tr valign="top">
    <td>
      <p><strong><a href="http://forum.czilla.cz/"
         target="_blank">Diskusní fórum na CZille</a></strong></p>
      <p>Diskusní fórum, které slouží k on-line podpoře uživatelů.</p>
    </td>
    <td>
      <p><strong><a href="http://forums.mozillazine.org/index.php?c=4"
         target="_blank">Diskusní fórum na MozillaZine</a></strong></p>
      <p>Diskusní fórum, které slouží k on-line podpoře uživatelů.</p>
    </td>
  </tr>

</table>

<?php
	$page->includeFooter();
?>
