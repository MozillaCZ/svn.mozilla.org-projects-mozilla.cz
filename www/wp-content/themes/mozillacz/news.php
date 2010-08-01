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
			<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=recommend&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
			
			<table id="social-box"><tr><td>
				<a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>&amp;t=<?php the_title(); ?>">Sdílet</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></td>
				<td>&nbsp;
					<a href="<?php echo getTextForTwitter(get_the_title(), get_permalink()) ?>" title="Přidá odkaz na Twitter">
					<img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="" style="padding-top: 2px;"/></a>
				</td><td>
					<a href="<?php echo getTextForTwitter(get_the_title(), get_permalink()) ?>" title="Přidá odkaz na Twitter">
					Twitter</a>
				</td>
			</tr></table>
		<?php } ?>
		
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
