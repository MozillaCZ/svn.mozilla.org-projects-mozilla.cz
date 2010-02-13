<?
  /* Skript nabidne ke stazeni soubor bookmarks.html */
  $velikost = filesize('bookmarks.html');
  header ('Content-type: text/html');
  header ('Content-Disposition: attachment; filename=bookmarks.html');
  header ('Content-Length: ' . $velikost);
  readfile ('bookmarks.html');
?>
