<?php
/*
Template Name: General Page w/ Feature Image
*/
?>

<?php get_header(); ?>
			
			<div id="content">
				
				<div class="article-image-wrap"><?php get_custom_post_thumbnail($post->ID, true); //replaces the_post_thumbnail('blog-thumbnail-small'); ?></div>
				
				<div id="inner-content" class="row clearfix">

					<div class="large-12 large-offset-0 small-10 small-offset-1 columns">					
						<header class="article-header">	
							<h2 class="entry-title single-title" style="color:<?php the_field('header_color'); ?>" itemprop="headline"><?php the_title(); ?></h2>
							<h4 class="page-subtitle" style="text-align:center; color:<?php the_field('header_color'); ?>"><?php the_field('subtitle'); ?></h4>
					    </header> <!-- end article header -->
					</div>
			
				    <div id="main" class="large-12 medium-12 columns clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
	
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
