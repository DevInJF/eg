<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
					
    <section class="entry-content clearfix" itemprop="articleBody">
	    <div class="row">
            <div class="large-10 large-centered columns">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>
        </div>
	</section> <!-- end article section -->
						    
	<?php //comments_template(); ?>
					
</article> <!-- end article -->