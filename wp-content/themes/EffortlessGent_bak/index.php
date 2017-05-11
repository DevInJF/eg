<?php get_header(); ?>
			
			<div id="content">
			

						<?php $post_num = 0; ?>
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php $post_num++; ?>
	
						<?php if ($post_num == 1) { ?>
							<div id="blog-feature-post">
								<?php the_post_thumbnail('blog-feature-post-image'); ?>
								<div class="row">
									<div class="large-12 medium-12 small-12 large-centered medium-centered small-centered columns">
										<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
										<?php get_template_part( 'partials/content', 'byline' ); ?>
									</div>
								</div>
							</div>
						<?php } else { ?>
							
							<div id="inner-content" class="row clearfix">
			
						    <div id="main" class="large-12 medium-12 columns clearfix" role="main">
							
							<?php get_template_part( 'partials/loop', 'archive' );
						} ?>
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('joints_page_navi')) { ?>
					            <?php joints_page_navi(); ?>
					        <?php } else { ?>
					        
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>		
					
					    <?php else : ?>
					    
    						<?php get_template_part( 'partials/content', 'missing' ); ?>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php // get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>