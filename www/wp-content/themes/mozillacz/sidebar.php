</div>
<div id="c-sidebar">
		<div id="mcs-logo">
			<a href="http://contribute.mozilla.org/Mozilla_Community">
				<img src="<?php bloginfo('template_directory'); ?>/images/mctlogo.png" alt="" width="163" height="94" />
			</a>
		</div>
		
		<div class="sidebar-box">
			<div class="sidebar-box-title">Hledat</div>
			<div id="sidebar-search">
			
			<!-- Google CSE Search Box Begins -->
			<form id="searchbox_002543687640679827628:sotud38ptmk" action="http://www.google.com/cse">
				<div>
			 		<input type="hidden" name="cx" value="002543687640679827628:sotud38ptmk" />
			 		<input type="hidden" name="cof" value="FORID:0" />
			 		<input type="hidden" name="ie" value="utf-8" />
			
			 		<input name="q" type="text" size="25" style="width: 180px" />
			 		<input type="submit" name="sa" value="Vyhledat" style="margin-top: 8px" />
			 	</div>
			 </form>
				<!-- Google CSE Search Box Ends -->
			</div>
			
		</div>
		
		<?php
			// Upoutávka na fórum (zobrazujeme na titulce)
			if (is_front_page() or (have_posts() && !is_page())) { 
		?>
		<div class="sidebar-box">
			<div class="sidebar-box-title">Potřebujete poradit?</div>
			<a href="http://forum.mozilla.cz/" title="Diskusní fórum Mozilla.cz">
				<img src="/images/help.gif" alt="Ikona" style="float: left; margin: 5px 8px 0 5px;" />
			</a>
			<div style="margin-top: 10px;"><strong>
				<a href="http://forum.mozilla.cz/" title="Diskusní fórum Mozilla.cz">Navštivte naše fórum podpory</a>
			</strong></div>
			
			<div style="clear: both; display:none">&nbsp;</div>
		</div>
		<?php } ?>
		
		
		<?php
			// Promo box zobrazujeme pouze mimo titulku
			if (!is_front_page()) { 
		?>
		<div class="sidebar-box">
			<?php snippets_value( 'promo-box' ); ?>
		</div>
		<?php } ?>
		
		<!--
		<div class="sidebar-box">
			<div class="sidebar-box-title">Víte, že ..</div>
			<p>
			
				<?php //echo getRandomTip(); ?>
			</p>
		</div>
		-->				
					
		<?php  
			if (is_front_page()) {
				echo '<div class="sidebar-box">';
				snippets_value( 'kdy-vyjde' );
				echo '</div>';
			} else {
			
			// Seznam podstránek zobrazíme jen tehdy, když nejsem v "/podpora".
			// Tady by to byl hodně dlouhý seznam.
			$currentUrl = $_SERVER['REQUEST_URI'];
			if (ddlsp_hasSubpages() && (strpos($currentUrl, "/podpora") === false) && (strpos($currentUrl, "/stahnout") === false)) {
    ?>					
			<div class="sidebar-box">
			<div class="sidebar-box-title">Podstránky</div>
		<?php					 
				echo ddlsp_generate();
		?>
			</div>
		<?php
			}}
		?>	
		
		    
		<div class="sidebar-box">
			<div class="sidebar-box-title">Mozilla ve světě</div>
			<div class="sidebar-item-title"><strong><a href="http://www.mozilla.org/cs/">Mozilla.org</a></strong></div>
			<div class="sidebar-item-text">
				Domovská stránka Firefoxu a Thunderbirdu. 
			</div>					
			<div class="sidebar-item-title"><strong><a href="https://addons.mozilla.org/cs/">Doplňky Mozilly</a></strong></div>
			<div class="sidebar-item-text">
				Oficiální server s doplňky pro aplikace Mozilla.
			</div>
			<div class="sidebar-item-title"><strong><a href="http://support.mozilla.com/cs/kb/">Podpora Firefoxu</a></strong></div>
			<div class="sidebar-item-text">
				Oficiální stránky podpory Firefoxu.
			</div>
			<div class="sidebar-item-title"><strong><a href="https://affiliates.mozilla.org/cs/">Mozilla Affiliates</a></strong></div>
			<div class="sidebar-item-text">
				Partnerský program Firefoxu.
			</div>							
		</div>
		
		
		<?php if (is_front_page()) { ?>
		<div class="sidebar-box">
			<div class="sidebar-box-title">Kategorie</div>
			<div class="sidebar-item-title"><ul class="sidebar-links">				
				<?php list_cats(0, '', 'name', 'asc', '', 1, 0, 1, 1, 1, 1, 0,'','','','','') ?>
			</ul></div>
		</div>
		
		<div class="sidebar-box">
			<div class="sidebar-box-title">Přidání zprávičky</div>
			<div class="sidebar-item-title">
				<ul>
					<li><a href="/pridat-zpravicku/" title="Přidá zprávičku na Mozilla.cz">Přidat zprávičku</a></li>
				</ul>
			</div>
		</div>				
		
		<?php
			}
		?>	
	
		<div style="margin-left: 5px;">
			<a href="http://www.mozilla.cz/feed/" title="RSS zpráviček Mozilla.cz"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" alt="" /></a>
			<a href="javascript:addSearchEngine()" title="Přidat vyhledávání z Mozilla.cz"><img src="<?php bloginfo('template_directory'); ?>/images/opensearch.png" alt="" /></a>
		
			<a href="http://www.facebook.com/pages/Mozillacz/150470274045" title="Mozilla.cz na Facebooku"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-32.png" alt="" /></a>
			<a href="http://twitter.com/MozillaCZ" title="Mozilla.cz na Twitteru"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-32.png" alt="" /></a>
		</div>
					
	</div>
			