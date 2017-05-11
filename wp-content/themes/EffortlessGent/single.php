<?php get_header(); ?>

			<?php // This is moved to this page instead because it interferes with on-page forms.
				$page = get_page_by_path( 'homepage/valetmodal', $output = OBJECT, $post_type = 'page' ); 
				echo do_shortcode($page->post_content);
			?>
			
			<div id="content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
				<div class="article-image-wrap"><?php get_custom_post_thumbnail($post->ID, true); //replaces the_post_thumbnail('blog-thumbnail-small'); ?></div>
			
					<div id="inner-content" class="row clearfix feature-post">

						<div class="large-12 small-10 large-centered small-centered columns clearfix article-header">					
							<header class="">	
								<h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>
						    </header> <!-- end article header -->
						</div>


						<div id="main" class="large-10 medium-10 large-centered medium-centered columns clearfix" role="main">
                            
						    	<?php get_template_part( 'partials/loop', 'single' ); ?>
						    					
						    <?php endwhile; else : ?>
						
						   		<?php get_template_part( 'partials/content', 'missing' ); ?>
	
						    <?php endif; ?>
				
						</div> <!-- end #main -->
	
					</div> <!-- end #inner-content -->
													
				</article> <!-- end article -->
			
			</div> <!-- end #content -->

<?php get_footer(); ?>