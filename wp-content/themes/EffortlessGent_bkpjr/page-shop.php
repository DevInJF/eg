<?php
/*
Template Name: Shop Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php get_template_part( 'partials/loop', 'page' ); ?>
					
					    	<div class="boutique-widget" data-widget-id="139259"><script type="text/javascript">!function(d,s,id){var e, p = /^http:/.test(d.location) ? 'http' : 'https';if(!d.getElementById(id)) {e = d.createElement(s);e.id = id;e.src = p + '://' + 'widgets.rewardstyle.com' + '/js/boutique.js';d.body.appendChild(e);}if(typeof window.__boutique === 'object') if(d.readyState === 'complete') {window.__boutique.init();}}(document, 'script', 'boutique-script');</script><div class="rs-adblock"><img src="//assets.rewardstyle.com/images/search/350.gif" onerror="this.parentNode.innerHTML='Disable your ad blocking software to view this content.'" style="width: 15px; height: 15px;" /><noscript>JavaScript is currently disabled in this browser. Reactivate it to view this content.</noscript></div></div>
					    	
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
