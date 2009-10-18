<?php if (!is_single() && (!is_category())) {  ?>

	<div class="line-separator">
		
		<?php if (!is_paged()) { ?>
		<?php } else { ?>
			Archiv novinek
		<?php } ?>
	</div>
	
<?php } ?>

<?php if (is_paged()) { ?>

	<p class="archive-navigation">
		<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
	</p>
<?php } ?>

<?php if (is_single()) { ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
			<div style="clear:both"></div>
		</div>
		
<?php } ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<?php if (is_single()) { ?>		
			<h1><?php the_title(); ?></h1>
		<?php } else { ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<?php } ?>
		
		<?php the_content(); ?>

		<p class="news-footer">
			Přidáno: <?php the_time('d. m. Y'); ?> | 
			<a href="<?php the_permalink() ?>"><?php comments_number('Komentáře (0)','Komentáře (1)','Komentáře (%)'); ?></a> |			
			Sepsal: <a href="/o-nas/" title="Více informací o autorovi"><?php the_author(); ?></a>
			<?php edit_post_link('Upravit', '| ', ''); ?>
		</p>
		
		
		<?php if (is_single()) { ?>
			<div class="souvisejici-prispevky">Přečtěte si také</div>
		<?php									
			similar_posts();			
			comments_template();
		} ?>
	<?php endwhile; ?>

<?php else : ?>
	<h2>Žádný příspěvek</h2>
	<p>Na webu dosud není žádný příspěvek.</p>
<?php endif; ?>

<p class="archive-navigation">
	<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
</p>
