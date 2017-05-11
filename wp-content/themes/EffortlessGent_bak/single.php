<?php get_header(); ?>
			
			<div id="content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
				<?php the_post_thumbnail('full'); ?>
			
					<div id="inner-content" class="row clearfix">
						
						<div id="main" class="large-9 medium-9 columns first" role="main">
						    	<?php get_template_part( 'partials/loop', 'single' ); ?>
						    					
						    <?php endwhile; else : ?>
						
						   		<?php get_template_part( 'partials/content', 'missing' ); ?>
	
						    <?php endif; ?>
				
						</div> <!-- end #main -->
	
	    				<?php get_sidebar(); ?>
						
					</div> <!-- end #inner-content -->
   		 		
													
				</article> <!-- end article -->
			
			</div> <!-- end #content -->

<?php get_footer(); ?>