    <section class="entry-content clearfix" itemprop="articleBody">
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<div class="row">
			<div class="medium-6 small-12 columns">
				<p><i>PUBLISHED <strong><?php the_time('F j, Y') ?></strong></i></p><br/>
				<p>
					<?php if ( get_the_author_meta('description') ) : // If a user has filled out their decscription show a bio on their entries
						echo the_author_meta('description');
					endif; ?>
				</p>
				<p class="tags clearfix"><?php the_tags('<span class="tags-title">' . __('<i></i><br/>', 'jointstheme') . '</span> ', ' ', ''); ?></p>	 
			</div><!-- /left side -->
			<div class="medium-6 small-12 columns second">
				<p class="social-footer">
					<i>CONNECT WITH EG</i>
				</p>
				<?php joints_social_links(); ?>
				<br/>
				<div class="post-footer-optin">
					<p><i>WEEKLY UPDATES</i><br/>
					Grab the free Lean Wardrobe eGuide and also get these articles sent straight to your inbox.</p><br/>
					<p><a href="#" class="button medium small-12" data-reveal-id="valetModal">I WANT IT</a></p>
				</div><!-- post footer optin -->
			
			</div><!-- /right side -->
		</div><!-- /row -->
		<!-- end article footer -->
									
		<?php comments_template(); ?>
	</footer>