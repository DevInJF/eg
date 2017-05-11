<?php get_header(); ?>
			
			<div id="content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div id="blog-feature-post" <?php post_class('clearfix'); ?>>
            <div class="article-image-wrap">
            <?php                                
                if ( has_post_thumbnail() ) {
                    get_custom_post_thumbnail($post->ID, true);
                }
                else {
                    //echo '<img src="/wp-content/uploads/2015/12/featrect.png" />';
                }
            ?>
                
                <?php //get_custom_post_thumbnail($post->ID, true); //replaces the_post_thumbnail('blog-feature-small'); ?>
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
                //get_template_part( 'partials/content', 'missing' );
              endif; ?>

        <?php rewind_posts(); ?>

					<div class="row archive-title">
						<h6><em><?php _e('Search results for', 'jointstheme'); ?></em></h6>
						<h2><?php echo esc_attr(get_search_query()); ?></h2>
					</div>
        
        <div id="inner-content" class="row clearfix">
      
          <div id="main" class="first clearfix postgrid" role="main">
            <div class="grid-sizer medium-4"></div>

              <?php
                if (have_posts()) : while (have_posts()) : the_post();
                get_template_part( 'partials/loop', 'archive' );
                endwhile; 
            ?>

              <?php else : ?>
          
				<div class="row">
					<div class="large-12 columns">
						<article id="post-not-found" class="hentry clearfix">
							<header class="article-header">
								<p><strong><?php _e("Sorry, I couldn't find anything! Try again?", "jointstheme"); ?></strong></p>
							</header>
						
							<section class="search">
								<p><?php get_search_form(); ?></p>
							</section> <!-- end search section -->

							<div>
								<p><strong>Or, explore some of our popular tags</strong></p>
								<p><?php wp_tag_cloud('smallest=10&largest=20&number=100&orderby=name'); ?></p>
							</div>
						</article>
      				</div>
      			</div>
              <?php endif; ?>
      
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
  
				    </div> <!-- end #main -->
    			
    			</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>