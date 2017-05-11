<?php get_header(); ?>
			
			<div id="content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
				<?php the_post_thumbnail('full'); ?>
			
					<div id="inner-content" class="row clearfix">
						
						<div id="main" class="large-8 medium-8 columns first" role="main">
						    	
						    	<?php get_template_part( 'partials/loop', 'single' ); ?>
						    					
						    <?php endwhile; else : ?>
						
						   		<?php get_template_part( 'partials/content', 'missing' ); ?>
	
						    <?php endif; ?>
				
						</div> <!-- end #main -->
	
	
						<div id="sidebar" class="large-3 medium-3 columns" role="complementary">
		    				
		    				<?php if ( is_active_sidebar( 'singlepost' ) ) : ?>
	
		    					<?php dynamic_sidebar( 'singlepost' ); ?>
					    	
					    	<?php endif; ?>	
	
							<div id="next-prev-links">
							
								<p><?php next_post_link( 'Next<br />%link', '%title', $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ); ?></p>
								
								<p><?php previous_post_link( 'Previous<br />%link', '%title', $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ); ?></p>
							
							</div>
	
						</div> <!-- end sidebar -->
	
					</div> <!-- end #inner-content -->
   		 		
													
				</article> <!-- end article -->
			
			</div> <!-- end #content -->

<?php get_footer(); ?>