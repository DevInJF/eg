<?php
/*
Template Name: Full Width Focused, Sales Pages
*/
?>

<?php get_header( 'focused' ) ?>			
	
	
	<style type="text/css">

	</style>
	
			<div id="content">
			
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="large-12 columns">
						<header class="article-header">
							<h1 class="page-title" style="text-align:center;"><?php the_title(); ?></h1>
							<h4 class="page-subtitle" style="text-align:center;"><?php the_field('subtitle'); ?></h4>
						</header> <!-- end article header -->
					</div>
				</div>

				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->

		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'partials/content', 'missing' ); ?>

		    <?php endif; ?>
    
			</div> <!-- end #content -->

<?php get_footer( 'focused' ); ?>
