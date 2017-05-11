<?php get_header(); ?>
			
			<div id="content">
			
				<?php $query = new WP_Query('showposts=1'); 
					if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
					<div id="blog-feature-post" <?php post_class('clearfix'); ?>>
						<?php the_post_thumbnail('blog-feature-large'); ?>
						<div class="row feature-post">
							<div class="large-12 medium-12 small-12 small-centered columns">
								<a class="article-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h2><?php the_title(); ?></a></h2>
								<?php get_template_part( 'partials/content', 'byline' ); ?>
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
				    <?php break; endwhile; else:
								get_template_part( 'partials/content', 'missing' );
							endif; ?>

				<?php //get_template_part('partials/nav', 'filters' ); ?>
				<?php wp_reset_postdata(); ?>

				<div id="inner-content" class="row clearfix">
					<div id="main" class="large-12 medium-12 columns clearfix" role="main">						
						<div class="categories">
							<?php $categories = get_categories();
							foreach ($categories as $category) {
								$link = get_category_link( $category->term_id );
								echo '<a href="' . $link . '"><h3>' . $category->name . ' (' . $category->count . ')</h3></a>';
							} ?>
						</div>
				    </div> <!-- end #main -->
    
				    <?php //get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>