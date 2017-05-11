<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
						<h3>Also Find Us On</h3>
							<p class="social-footer">
								<i class="fi-social-facebook"></i>
								<i class="fi-social-twitter"></i>
								<i class="fi-social-tumblr"></i>
								<i class="fi-social-pinterest"></i>
								<i class="fi-mail"></i>
							</p>
							
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
