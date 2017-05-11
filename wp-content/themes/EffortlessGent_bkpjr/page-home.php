<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-8 medium-8 columns" role="main">
					
						<div class="latest-article">
						
							<h6>Latest Article</h6>
							
							<?php $homepage_query = new WP_Query('showposts=1'); ?>
							
							<?php while ($homepage_query->have_posts()) : $homepage_query->the_post(); ?>
								
								<?php the_post_thumbnail('blog-feature-post-image'); ?>
								
								<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
								
								<?php the_title(); ?></a></h2>
								
								<?php the_excerpt(); ?>
							
							<?php endwhile; ?>
	
							<p><a class="button" href="/blog">Visit The Blog</a></p>

						</div><!-- end latest-article -->
						
						<div class="latest-compendium">

							<h6>Latest In The Compendium</h6>

							<?php $compendium_query = new WP_Query('cat=4&orderby=title&order=DESC&showposts=3'); ?>
							
							<?php while ($compendium_query->have_posts()) : $compendium_query->the_post(); ?>
								
								<?php the_post_thumbnail('blog-feature-post-image'); ?>
								
								<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
								
								<?php the_title(); ?></a></h2>
								
								<?php the_excerpt(); ?>
							
							<?php endwhile; ?>
	
							<p><a class="button" href="/blog">Visit The Compendium</a></p>

						</div>

    				</div> <!-- end latest-compendium -->
    				
    				<div id="sidebar" class="large-4 medium-4 columns" role="complementary">
		
						<div id="big-box-ad" class="adspace">

							<?php if ( is_active_sidebar( 'bigboxad' ) ) : ?>
	
		    					<?php dynamic_sidebar( 'bigboxad' ); ?>
					    	
					    	<?php endif; ?>

					   </div><!-- big-box-ad -->

						<div id="small-tile-ad" class="adspace">
							
							<div class="small-6 columns">
							
								<?php if ( is_active_sidebar( 'smalltileadleft' ) ) : ?>
		
			    					<?php dynamic_sidebar( 'smalltileadleft' ); ?>
						    	
						    	<?php endif; ?>
							
							</div>
							
							<div class="small-6 columns">
							
								<?php if ( is_active_sidebar( 'smalltileadright' ) ) : ?>
		
			    					<?php dynamic_sidebar( 'smalltileadright' ); ?>
						    	
						    	<?php endif; ?>
							
							</div>

					    </div><!-- small-tile-ad -->

						<?php if ( is_active_sidebar( 'handpicked' ) ) : ?>

	    					<?php dynamic_sidebar( 'handpicked' ); ?>
				    	
				    	<?php endif; ?>					
    			
    				</div> <!-- end #sidebar -->
				    
				</div> <!-- end #inner-content -->
				
				<div id="home-product" class="row clearfix">
				
					<div id="home-product-courses" class="prod large-6 medium-6 columns">
						
						<p style="float:right;"><a href="/"><img src="http://baconmockup.com/125/125" /></p>
						
						<h4><a href="/">COURSES / eGUIDES</a></h4>
						
						<p>Premium products to help guide you on your style journey.</p>
					
					</div>
					
					<div id="home-product-shop" class="prod large-6 medium-6 columns">
					
						<p style="float:right;"><a href="/"><img src="http://baconmockup.com/125/125" /></p>
					
						<h4><a href="/">SHOP</a></h4>
					
						<p>Ever wonder if your picks are EG-approved? Shop here and you'll never have to wonder.</p>
					
					</div>
				
				</div> <!-- end home-product -->
				
				<div id="home-pre-footer" class="row clearfix">

					<div class="pre-footer-wrap large-8 medium-8 large-centered medium-centered columns">
						<p><img src="http://baconmockup.com/150/150" style="border-radius:150px;float:right;margin:0 0 1em 1em;" /></p>
						
						<?php the_field('callout'); ?>
						
						<?php the_field('description'); ?>
						
						<p><a href="#" class="button" data-reveal-id="myModal"><?php the_field('opt-in_text'); ?></a></p>
					<?php get_template_part( 'partials/content', 'modal' ); ?>
					</div>

				</div><!-- end home-pre-footer -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
