<?php get_header(); ?>
			
			<div id="content">
						
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div id="blog-feature-post" <?php post_class('clearfix'); ?>>
						<div class="article-image-wrap">
							<?php //adding "feature" mark here
								if ( has_tag('feature') ) {
									echo '<span class="feature-tag">FEATURE</span>';
								} elseif ( in_category(717) ) {
									echo '<span class="feature-tag">GIVEAWAY</span>';
								} elseif ( in_category(720) ) {
									echo '<span class="feature-tag">REVIEW</span>';
								} else {
								
								}
							?>
							<?php get_custom_post_thumbnail($post->ID, true); //replaces the_post_thumbnail('blog-feature-small'); ?>
						</div>
						<div class="row feature-post">
							<div class="large-12 medium-12 small-12 small-centered columns">
								<h2><a class="article-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<?php get_template_part( 'partials/content', 'byline' ); ?>
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
				    <?php break; endwhile; else:
								get_template_part( 'partials/content', 'missing' );
							endif; ?>

						<!-- secondary nav for post sorting -->
					<div class="row sort-posts-nav">								
						<div class="small-12 columns">
							<ul id="filters" class="clearfix">
								<li class="label">NAVIGATE:</li>
								<li><a class="active" href="/articles/">ALL ARTICLES</a></li>
								<li><a href="/category/compendium/">COMPENDIUM</a></li>
								<li><a href="/categories/">CATEGORIES</a></li>
							</ul>
						</div>
					</div>

			<?php 	// wp_reset_query restarts the entire query loop -- including the featured post above. We do this so that the inner-content contains
					//		all of the posts. We'll handle filtering out the first one outside of the loop itself.
					rewind_posts(); ?>

				<div id="inner-content" class="row clearfix">
					<div id="main" class="postgrid clearfix" role="main" data-columns>
						<div class="row">
							<?php
							    if (have_posts()) : while (have_posts()) : the_post();
									get_template_part( 'partials/loop', 'archive' );
							    endwhile; else :
							    	get_template_part( 'partials/content', 'missing' );
							    endif; ?>
						</div>
				    </div> <!-- end #main -->
						<!-- Pagination -->
						<div class="row clearfix">
							<div class="small-12 columns">
						        <?php if (function_exists('joints_page_navi')) { ?>
						            <?php joints_page_navi(); ?>
						        <?php }?>
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
					                </ul>
					            </nav>
							</div>
						</div>				    
				</div> <!-- end #inner-content -->
    
			<?php rewind_posts(); ?>
			</div> <!-- end #content -->

<?php get_footer(); ?>