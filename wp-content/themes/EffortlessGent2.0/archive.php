<?php get_header(); ?>
			
			<div id="content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div id="blog-feature-post" <?php post_class('clearfix'); ?>>
						<div class="article-image-wrap">
							<?php get_custom_post_thumbnail($post->ID, true); //replaces the_post_thumbnail('blog-feature-small'); ?>
						</div>
						<div class="row feature-post">
							<div class="large-12 medium-12 small-12 small-centered columns">
								<a class="article-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h2><?php the_title(); ?></h2></a>
								<?php get_template_part( 'partials/content', 'byline' ); ?>
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
				    <?php break; endwhile; else:
								get_template_part( 'partials/content', 'missing' );
							endif; ?>

				<?php rewind_posts(); ?>
			
				<div class="row archive-title">
				    <?php if (is_category()) { ?>
					    <h6><i><?php _e("Posts in category", "jointstheme"); ?></i></h6>
					    <h2>
						     <?php single_cat_title(); ?>
				    	</h2>
				    
				    <?php } elseif (is_tag()) { ?> 
					    <h6><i><?php _e("Posts tagged with", "jointstheme"); ?></i></h6>
					    <h2>
						    <?php single_tag_title(); ?>
					    </h2>
				    
				    <?php } elseif (is_author()) { 
				    	global $post;
				    	$author_id = $post->post_author;
				    ?>
					    <h1>

					    	<span><?php _e("Posts By:", "jointstheme"); ?></span> <?php echo get_the_author_meta('display_name', $author_id); ?>

					    </h1>
				    <?php } elseif (is_day()) { ?>
					    <h1>
    						<span><?php _e("Daily Archives:", "jointstheme"); ?></span> <?php the_time('l, F j, Y'); ?>
					    </h1>
	
	    			<?php } elseif (is_month()) { ?>
		    		    <h1>
			    	    	<span><?php _e("Monthly Archives:", "jointstheme"); ?></span> <?php the_time('F Y'); ?>
				        </h1>
				
				    <?php } elseif (is_year()) { ?>
				        <h1>
				    	    <span><?php _e("Yearly Archives:", "jointstheme"); ?></span> <?php the_time('Y'); ?>
				        </h1>
				    <?php } ?>
					
				</div>
						
				<div id="inner-content" class="row clearfix">
				
				    <div id="main" class="clearfix" role="main">
					    <?php
					    	if (have_posts()) : while (have_posts()) : the_post();
								get_template_part( 'partials/loop', 'archive' );
						    endwhile; 
						?>


					    <?php else : ?>
					
    						<?php get_template_part( 'partials/content', 'missing' ); ?>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->

					<!-- Pagination -->
					<div class="row clearfix">
						<div class="small-12 columns">
					        <?php if (function_exists('joints_page_navi')) { ?>
					            <?php joints_page_navi(); ?>
					        <?php }?>
						</div>
					</div>
                
                </div> <!-- end #inner-content -->
			</div> <!-- end #content -->

            <div class="row">
	            <nav class="wp-prev-next">
	                <ul class="clearfix">
	        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
	        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
	                </ul>
	            </nav>
            </div>

<?php get_footer(); ?>