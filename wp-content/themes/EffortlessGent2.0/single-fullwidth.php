<?php
/*
Template Name Posts: Full-Width Post
*/
?>

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

						<div class="large-12 large-offset-0 small-10 small-offset-1 columns article-header">					
							<header class="">	
								<h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>
						    </header> <!-- end article header -->
						</div>


						<div id="main" class="large-12 medium-12 columns first" role="main">
						    	
						    	<!--<span class="single-title-meta"><a class="label" href="<?php //comments_link(); ?>"><?php //comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>.</a></span>-->
						    	<?php get_template_part( 'partials/loop', 'single' ); ?>
						    					
						    <?php endwhile; else : ?>
						
						   		<?php get_template_part( 'partials/content', 'missing' ); ?>
	
						    <?php endif; ?>
				
						</div> <!-- end #main -->
	
	
						<div id="sidebar" class="large-12 medium-12 columns" role="complementary">
		    				
		    				<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>
	
		    					<?php dynamic_sidebar( 'sidebar2' ); ?>
					    	
					    	<?php endif; ?>	
		
						</div> <!-- end sidebar -->
	
					</div> <!-- end #inner-content -->
   		 		
													
				</article> <!-- end article -->
			
			</div> <!-- end #content -->

<?php get_footer(); ?>