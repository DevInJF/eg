	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
		<header class="row article-header">
			
			<div class="article-thumb large-2 small-2 columns">
				<?php the_post_thumbnail(array(150,150)); ?>
			</div>
			<div class="article-title large-10 small-10 columns">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<?php get_template_part( 'partials/content', 'byline' ); ?>
				</p>	
			</div>						
		</header> <!-- end article header -->
						
		<!-- commenting out the post content here
			 only want post titles showing on blog index page
			 
		<section class="entry-content clearfix" itemprop="articleBody">
			<?php //the_post_thumbnail('full'); ?>
			<?php //the_content(); ?>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
	    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
		</footer> <!-- end article footer -->
							    
			<?php // comments_template(); // uncomment if you want to use them ?>
						
	</article> <!-- end article -->