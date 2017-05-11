
						
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
					<i class="fi-social-facebook"></i>
					<i class="fi-social-twitter"></i>
					<i class="fi-social-tumblr"></i>
					<i class="fi-social-pinterest"></i>
					<i class="fi-mail"></i>
				</p>
				<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	 
				<div class="post-footer-optin">
					<h6>Weekly Updates</h6>
					<p>Subscribe to have these articles sent straight to your inbox.</p>
					<p><a href="/" class="button">SUBSCRIBE ME</a></p>
				</div>
			
			</div><!-- /right side -->
		</div><!-- /row -->
		<!-- end article footer -->
									
		<?php comments_template(); ?>
	</footer>