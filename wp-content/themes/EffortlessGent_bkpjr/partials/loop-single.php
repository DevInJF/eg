
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->
					
    <section class="entry-content clearfix" itemprop="articleBody">
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<div class="row">
			<div class="large-6 small-6 columns">
				<p>Published <?php the_time('F j, Y') ?></p>
				<p><?php echo get_the_author_link(); ?></p>
				<p>
					<?php if ( get_the_author_meta('description') ) : // If a user has filled out their decscription show a bio on their entries
						echo the_author_meta('description');
					endif; ?>
				</p>
			</div><!-- /left side -->
			<div class="large-6 small-6 columns">
				<p class="social-footer">
					<a href=""><i class="fi-social-facebook"></i></a>
					<a href=""><i class="fi-social-twitter"></i></a>
					<a href=""><i class="fi-social-tumblr"></i></a>
					<a href=""><i class="fi-social-pinterest"></i></a>
					<a href=""><i class="fi-mail"></i></a>
				</p>
				<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	 
				<div class="post-footer-optin">
					<h6>Weekly Updates</h6>
					<p>Subscribe to have these articles sent straight to your inbox.</p>
					<p><a href="#" class="button" data-reveal-id="myModal">SUBSCRIBE ME</a></p>
				
					<?php get_template_part( 'partials/content', 'modal' ); ?>

				</div><!-- post footer optin -->
			
			</div><!-- /right side -->
		</div><!-- /row -->
		<!-- end article footer -->
									
		<?php comments_template(); ?>
	</footer>