<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<header class="article-header" style="background-color:<?php the_field('header_bg'); ?>">
					<h1 class="page-title" style="color:<?php the_field('header_color'); ?>"><?php the_title(); ?></h1>
					<h4 class="page-subtitle" style="color:<?php the_field('header_color'); ?>"><?php the_field('subtitle'); ?></h4>
				</header> <!-- end article header -->

				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->

		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'partials/content', 'missing' ); ?>

		    <?php endif; ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
