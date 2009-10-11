<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
	<?php if (getIsCustomFieldValue("description")) { ?>
		<meta name="description" content="<?php echo getCustomFieldValue("description") ?>"  />	
	<?php } else { ?>
		<meta name="description" content="Novinky ze světa Firefoxu, Thunderbirdu a dalších aplikací Mozilla. Řada návodů a tipů pro uživatele."  />
	<?php } ?>
	
	<?php if (getIsCustomFieldValue("keywords")) { ?>
		<meta name="keywords" content="<?php echo getCustomFieldValue("keywords") ?>"  />	
	<?php } else { ?>
		<meta name="keywords" content="firefox, thunderbird, mozilla, mozila, seamonkey, sunbird, camino, doplňky, rozšíření, skiny, motivy vzhledu, pluginy, podpora, lokalizace, stáhnout" />
	<?php } ?>

	<title><?php wp_title('',true,'	'); ?>
		<?php if (!is_front_page()) { ?>
			- Mozilla.cz
		<?php } else { ?>
		 Mozilla.cz - Server o aplikacích Mozilla
		<?php } ?>
	</title>
	
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" title="Základní styl" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	<link rel="alternate" type="application/rss+xml" title="Články (RSS 2.0)" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Články (Atom 0.3)" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="Komentáře (RSS 2.0)" href="<?php bloginfo('comments_rss2_url'); ?>" />
</head>
<body>
	<h1 class="hide">Mozilla.cz - Mozilla v češtině</h1>	
	<p class="hide"><a href="#content">Přeskočit na obsah</a></p>
	

	<div id="page">
		<div id="header">
			<div id="h-logo">
				<a href="/" title="Přejít na titulní stránku"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo Mozilla.cz" /></a>
			</div>		
			<div id="h-menu">
				<ul>				
					<li class="h-menu-item"><a href="/produkty/">Produkty</a></li>
					<li class="h-menu-item"><a href="/stahnout/">Stáhnout</a></li>
					<li class="h-menu-item"><a href="/doplnky/">Doplňky</a></li>
					<li class="h-menu-item"><a href="/podpora/">Podpora</a></li>
					<li class="h-menu-item"><a href="/zapojte-se/">Zapojte se</a></li>
				</ul>
			</div>
		</div>
		
		<div id="content">
			<div id="c-left">		