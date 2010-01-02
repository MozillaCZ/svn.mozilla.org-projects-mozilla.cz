<?php
/*
Plugin Name: Mozilla.sk CMS Plugin
Plugin URI: http://www.mozilla.sk
Description: CMS plugin pre stránky Mozilla.sk
Author: wladow
Version: 0.5.7
Author URI: http://www.wladow.sk
*/

require_once("config.php");

/**
 * Return latest version of Mozilla application.
 * 
 * $product - product name (all characters are lowercase)
 */ 
function get_product_version($product) {
	global $wpdb;
	
	$result = $wpdb->get_var("SELECT verzia FROM mozsk_produkty WHERE urlid='$product' ORDER BY id DESC ");
	return htmlspecialchars($result);
}

/**
 * Return url to release notes for latest version of Mozilla application.
 * 
 * $product - product name (all characters are lowercase)
 */ 
function get_product_rn($product) {
	global $wpdb;
	
	$result = $wpdb->get_var("SELECT changelog FROM mozsk_produkty WHERE urlid='$product' ORDER BY id DESC ");
	return htmlspecialchars($result);
}

/**
 * Return download link for latest version of Mozilla application and operation system.
 * 
 * $product - product name (all characters are lowercase)
 * $os      - "win", "lin" or "mac" 
 */ 
function get_product_link($product, $os) {
	global $wpdb;

	$result = $wpdb->get_var("SELECT verzia FROM mozsk_produkty WHERE urlid='$product' ORDER BY id DESC ");
	$result = $wpdb->get_var("SELECT download_$os FROM mozsk_produkty WHERE urlid='$product' AND verzia='$result'");

	return htmlspecialchars($result);
}

function moz_download_rn_handler($atts) {
	return get_product_rn($atts["app"]);
}

function moz_download_version_handler($atts) {
	return get_product_version ($atts["app"]);
}

function moz_download_url_handler($atts) {
	return get_product_link ($atts["app"], $atts["platform"]);
}

function get_newprodukt($produkt, $what) {

  	global $wpdb;
  	
  	 $result = $wpdb->get_var("SELECT verzia FROM mozsk_produkty WHERE urlid='$produkt' ORDER BY id DESC ");
  	if ($what == 'link' ) {
  	 $agent=$_SERVER["HTTP_USER_AGENT"];
  	 $os='win';
  	   if (strstr($agent,"Mac")) $os='mac'; elseif (strstr($agent,"Linux")) $os='lin';
  	 $result = $wpdb->get_var("SELECT download_$os FROM mozsk_produkty WHERE urlid='$produkt' AND verzia='$result'");
  	 }

	return htmlspecialchars($result);
}

function get_dlpage($produkt) {

  	global $wpdb;
  	
  	$result='<p><strong>Verzia: ';
  	$temp_prod = $wpdb->get_row("SELECT verzia, datum, changelog, download_win, velkwin,
			download_lin,velklin,download_mac,velkmac,download_port,velkport FROM mozsk_produkty WHERE urlid='$produkt' ORDER BY id DESC LIMIT 1");
	$result .= $temp_prod->verzia.'</strong><br/>';
	$result .= 'Vydané: '.date("d.m.Y",strtotime($temp_prod->datum)).' - <a href="'.$temp_prod->changelog.'"';
  if (strpos($temp_prod->changelog,'/sk/') == 0) $result .= ' hreflang="en"';
  $result .= '>poznámky k vydaniu</a></p>';

	$result .= '<ul>
		<li class="ico-win"><a href="'.htmlspecialchars($temp_prod->download_win).'">Windows <small>(.exe)</small></a> ('.$temp_prod->velkwin.' МB)</li>
		<li class="ico-lin"><a href="'.htmlspecialchars($temp_prod->download_lin).'">Linux</a> <small>(.tar.gz)</small> ('.$temp_prod->velklin.' МB)</li>
		<li class="ico-mac"><a href="'.htmlspecialchars($temp_prod->download_mac).'">Mac OS</a> <small>(.dmg)</small> ('.$temp_prod->velkmac.' МB)</li>';
		
/*	if ($temp_prod->download_port != "" ) $result .=	'<li class="ico-win"><a href="'.htmlspecialchars($temp_prod->download_port).'">Portable* verzia <small>(.zip)</small></a> ('.$temp_prod->velkport.' МB)</li>';
	  else {
		  	$temp_port = $wpdb->get_row("SELECT verzia, download_port,velkport FROM mozsk_produkty WHERE urlid='$produkt' AND download_port != '' ORDER BY id DESC LIMIT 1");
		  	if  ($temp_port) $result .= '<li class="ico-win"><a href="'.htmlspecialchars($temp_port->download_port).'">Portable* verzia '.$temp_port->verzia.' <small>(.zip)</small></a> ('.$temp_port->velkport.' МB)</li>';
	  }*/
	$result .= '</ul>';

	echo $result;

}

function get_archiv($produkt) {

  	global $wpdb;
	
  	$temp_prod = $wpdb->get_results("SELECT verzia, nazov, datum, changelog, download_win, velkwin,
			download_lin,velklin,download_mac,velkmac,download_port,velkport FROM mozsk_produkty WHERE urlid='$produkt' ORDER BY id DESC");
	if ($temp_prod) {
		
		$prvy = 1;
		$result = "";
		
		foreach ($temp_prod as $prod) {
			
			if ($prvy==1) { $result .= '<div class="arch '.$produkt.'_arch">'; $prvy=0;} else $result .= '<div class="arch">';
			
			    $result .= '<h1><a href="/'.$produkt.'/">'.$prod->nazov.' '.$prod->verzia.'</a></h1>';
				$result .= '<p class="description">vydané: '.date("d.m.Y",strtotime($prod->datum)).' - <a href="'.$prod->changelog.'"';
        if (strpos($prod->changelog,'/sk/') == 0) $result .= ' hreflang="en"';
        $result .= '>poznámky k vydaniu</a></p>';

				$result .= '<ul>
					<li class="ico-win"><a href="'.htmlspecialchars($prod->download_win).'">Windows <small>(.exe)</small></a> ('.$prod->velkwin.' МB)</li>
					<li class="ico-lin"><a href="'.htmlspecialchars($prod->download_lin).'">Linux</a> <small>(.tar.gz)</small> ('.$prod->velklin.' МB)</li>
					<li class="ico-mac"><a href="'.htmlspecialchars($prod->download_mac).'">Mac OS</a> <small>(.dmg)</small> ('.$prod->velkmac.' МB)</li>';
		
		/*		if (($prod->download_port != "" ) && (file_exists($prod->download_port))) $result .=	'<li class="ico-win"><a href="'.htmlspecialchars($prod->download_port).'">Portable* verzia <small>(.zip)</small></a> ('.$prod->velkport.' МB)</li>';*/

			$result .= '</ul></div>';
		}
			
	}

	echo $result;

}

function get_napisali($pocet = 15, $sidebar = 0) {

  	global $wpdb;

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  
  $temp = ($paged*($pocet)-$pocet);

  $limit = ($pocet < 15) ? "LIMIT $pocet" : "LIMIT $temp, 15";
  
  $celkom = $wpdb->get_var("SELECT count(id) FROM mozsk_napisali");
  $napisali = $wpdb->get_results("SELECT id, nazov, datum, odkaz, server, excerpt FROM mozsk_napisali
										GROUP BY nazov ORDER BY id DESC $limit");

	if($napisali)
	{
		foreach ($napisali as $clanok) 
		{
		if ($sidebar == 1) {
			echo '<p><a href="'.htmlspecialchars($clanok->odkaz).'" target="_blank">';
			if ($clanok->server != '-') echo $clanok->server.': ';
			echo $clanok->nazov.'</a><br/>';
			echo htmlspecialchars($clanok->excerpt);
			echo '</p>';
		}
		else {
			echo '<h4><a href="'.htmlspecialchars($clanok->odkaz).'" target="_blank">';
			if ($clanok->server != '-') echo $clanok->server.': ';
			echo $clanok->nazov.'</a> <small>('.date("d.m.Y",strtotime($clanok->datum)).')</small></h4>';
			echo '<div>'.$clanok->excerpt;
			echo '</div>';
		}
  	}

    if (($pocet>=15) && ($sidebar == 0)) { /*
          echo '<br/><p class="center"><small>';
            
          if ($paged>1) {
              echo '<a href="/napisali/page/'; echo $paged-1 .'/">&laquo; predchádzajúca</a> | ';}
          echo 'stránka <span class="tucne black">';
          echo $paged .'</span> z <span class="tucne black">'. (bcdiv($celkom,15,0)+1) .'</span>';
          if (bcdiv($celkom,15,0)+1>$paged) {
              echo ' | <a href="/napisali/page/'; echo $paged+1 .'/">ďalšia &raquo;</a>';
              }
          echo '</small></p>';
         */ 
		echo '<br/><br/><div class="navigation">';
			if (($celkom/ 15)+1>$paged) { echo '<div class="alignleft"><a href="/napisali/page/'; echo $paged+1 .'/">&laquo; Staršie články</a></div>'; }
			if ($paged>1) { echo '<div class="alignright"><a href="/napisali/page/'; echo $paged-1 .'/">Novšie články &raquo;</a></div>';}
		echo '</div>';
         
          }	
	}
	else
	{

		echo '<div class="error">Momentálne nie sú v tejto rubrike dostupné žiadne články.</div>';
	}

}

function mskcms_PanelProdukty() 
{
	global $wpdb;

	echo '<div class="wrap">';
	if (isset($_POST['todo'])) 
	{
		$todo = $_POST['todo'];
		//echo "todo: $todo";
		switch($todo)
		{
			case 'pridat':
				require_once("form-pridat.php");
				break;
			case 'pridat-ok':
				require_once("form-pridat-ok.php");
				break;
			case 'zmazat-ok':
				require_once("form-zmazat-ok.php");
				break;
			case 'upravit':
				require_once("form-upravit.php");
				break;
			case 'upravit-ok':
				require_once("form-upravit-ok.php");
				break;
			case 'pridat-ver':
				require_once("form-pridat-ver.php");
				break;
			case 'pridat-ver-ok':
				require_once("form-pridat-ver-ok.php");
				break;
			default:
				echo '<p>Neviem, čo mám robiť.</p>';
				break;
		}
	}
	else
	{
		require_once("form-zoznam.php");
	} 
	echo "</div>";
}

function mskcms_PanelNapisali() 
{
	global $wpdb;

	echo '<div class="wrap">';
	if (isset($_POST['todo'])) 
	{
		$todo = $_POST['todo'];
		//echo "todo: $todo";
		switch($todo)
		{
			case 'pridat':
				require_once("napisali-pridat.php");
				break;
			case 'pridat-ok':
				require_once("napisali-pridat-ok.php");
				break;
			case 'zmazat-ok':
				require_once("napisali-zmazat-ok.php");
				break;
			case 'upravit':
				require_once("napisali-upravit.php");
				break;
			case 'upravit-ok':
				require_once("napisali-upravit-ok.php");
				break;

			default:
				echo '<p>Neviem, čo mám robiť.</p>';
				break;
		}
	}
	else
	{
		require_once("napisali.php");
	} 
	echo "</div>";
}


function mskcms_AddOptionsPage() {
	if (function_exists('add_submenu_page')) {
		add_submenu_page('plugins.php', 'Produkty', 'Produkty', 3, basename(__FILE__), 'mskcms_PanelProdukty'); 
		add_submenu_page('plugins.php', 'Napísali o Mozille', 'Napísali o Mozille', 1, 'napisali.php','mskcms_PanelNapisali');
	}		
}


function mskcms_Install()
{
	global $wpdb;
	
	$table_name = 'mozsk_produkty';
	if($wpdb->get_var("show tables like '$table_name'") != $table_name)
	{
		$sql = "CREATE TABLE `$table_name` (
  `id` int(11) NOT NULL auto_increment,
  `urlid` varchar(50) default NULL,
  `nazov` varchar(80) default NULL,
  `datum` date default NULL,
  `verzia` varchar(20) default NULL,
  `changelog` varchar(200) default NULL,
  `download_win` varchar(200) default NULL,
  `velkwin` varchar(10) default NULL,
  `download_lin` varchar(200) default NULL,
  `velklin` varchar(10) default NULL,
  `download_mac` varchar(200) default NULL,
  `velkmac` varchar(10) default NULL,
  `download_port` varchar(200) default NULL,
  `velkport` varchar(10) default NULL,
  `poznamka` text,
  PRIMARY KEY (`id`) );";
		require_once(ABSPATH . '/wp-admin/upgrade-functions.php');
		dbDelta($sql);
	//	$wpdb->query($sql);
	}

	$table_name = 'mozsk_napisali';
	if($wpdb->get_var("show tables like '$table_name'") != $table_name)
	{
		$sql = "CREATE TABLE `$table_name` (
  `id` int(11) NOT NULL auto_increment,
  `nazov` varchar(200) default NULL,
  `datum` date default NULL,
  `odkaz` varchar(200) default NULL,
  `server` varchar(50) default NULL,
  `excerpt` text,
  PRIMARY KEY (`id`) );";
		require_once(ABSPATH . '/wp-admin/upgrade-functions.php');
		dbDelta($sql);
	//	$wpdb->query($sql);
	}
}

function mskcms_AddAdminJS() 
{
	if($_SERVER['SCRIPT_NAME'] == '/wp-admin/plugins.php' && ($_GET['page'] == basename(__FILE__)) || $_GET['page'] == 'napisali.php' || $_GET['page'] == 'ocakavane.php')
	{
		echo '<script type="text/javascript">
//<![CDATA[
function mskcms_AskDel(id)
{
	answer = window.confirm("Naozaj odstrániť túto verziu? Pozor, po stlačení OK ihneď maže!");
	if(answer)
	{
		document.getElementById("todo").value = "zmazat-ok";
		document.getElementById("param1").value = id;
		document.getElementById("ok-submit").click();
	}
}

function mskcms_Edit(id)
{
	document.getElementById("todo").value = "upravit";
	document.getElementById("param1").value = id;
	document.getElementById("ok-submit").click();
}

function mskcms_NuVer(id)
{
	document.getElementById("todo").value = "pridat-ver";
	document.getElementById("param1").value = id;
	document.getElementById("ok-submit").click();
}

//]]>
</script>';
	}
	//echo '<!-- ' . $_SERVER['SCRIPT_NAME'] . ' -->';
}

add_action('admin_menu', 'mskcms_AddOptionsPage');
add_action('admin_head', 'mskcms_AddAdminJS');
add_action('plugins_loaded','mskcms_Install');

add_shortcode('moz-download-rn', 'moz_download_rn_handler');
add_shortcode('moz-download-version', 'moz_download_version_handler');
add_shortcode('moz-download-url', 'moz_download_url_handler');

?>
