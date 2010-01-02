<?php get_header(); ?>

<?php
	// Jedná se o kategorii? Zobraz o ní info
	if (is_category()) {
?>
	<p id="notification-area">
		Následující příspěvky spadají do kategorie <strong><?php single_cat_title(); ?></strong>.
		<a href="/" title="Zpět na všechny zprávičky">Zrušit filtr</a>.
	</p>

<?php } ?>


<?php
// Pokud je to titulka, zobraz boxík s informacemi o produktech
if (is_front_page() && !is_paged()) {
	include "products-header.php";
?>	
	
	<div class="line-separator">
			<img src="<?php bloginfo('template_directory'); ?>/images/twitter-bird-16.png" alt="" /> Krátce z Twitteru                      
	</div>
	
<?php
    // http://rick.jinlabs.com/code/twitter/
    twitter_messages("MozillaCZ", 3, true);
    //RSSImport(3, 'http://twitter.com/statuses/user_timeline/68161528.rss');
?>

<p id="twitter-bottom"><a href="http://twitter.com/MozillaCZ" title="Mozilla.cz na Twitteru">Další krátké příspěvky</a></p>

<?php
}

// Jedná se o seznam příspěvků? Zobraz je.
if (have_posts() && !is_page()) {
	include "news.php";
}

// Jedná se o standardní stránku? Zobraz ji.
if (is_page()) {
	 while (have_posts()) : the_post();
?>

		<div class="breadcrumb">
		<?php
		//** navigační lišta **
		if (class_exists('breadcrumb_navigation_xt')) {
		// Display a prefix
		//echo 'Navigace: ';
		// new breadcrumb object
		$mybreadcrumb = new breadcrumb_navigation_xt;
		// Display the breadcrumb
		$mybreadcrumb->display();
		}
		?>
		</div> <!-- [breadcrumb] -->


		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<?php edit_post_link('Upravit', '<p>[ <strong>', '</strong> ]</p>'); ?>

	<?php endwhile; ?>
<?php } ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
