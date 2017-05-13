<?php
/*
Template Name: Holiday Gift Guides
*/
?>

<?php get_header(); ?>
			
	<style type="text/css">
        .article-header { margin-top:3em; }
        .single-title { margin-bottom:0; }
        .guide-desc {  }
        
        .hgg-guidelinks { padding:1em 0.9375em 0;margin-bottom:4em; clear:both; }
        .hgg-guidelinks h6 { text-align:center;text-transform:uppercase; }
        
        .sponsoredArea { background:#f0f0f0;margin: 0 0 3em;padding:1em;overflow:auto; }
        .sponsoredArea .sponLogo { margin: 0 1.5em 0 0; }
        .sponsoredArea p { margin-bottom:0; }
        .sponsoredArea a:not(.button):not(.article-title):hover,
        .sponsoredArea a:not(.button):not(.article-title):focus {
            background:none !important;
            color:#377A88 !important;
        }
        
        .itemDescription { font-size:16px; }
		.itemDescription .itemTitle { font-weight:700;text-transform:uppercase;display:block;text-decoration:none !important;font-size:1.2em; }
		.itemDescription .itemBrand { color:#888;text-transform:uppercase;display:block;font-size:0.8em; }
		.itemDescription p { font-size:100%; }
		.row .row.hgg-grid-title { margin-top: 3em; border-top: 1px solid #eee; padding-top: 1.5em; }
		.hgg-grid-title h4 { text-transform:uppercase;text-align:center; }
		.hgg-grid p { text-align:center;font-size:0.8em;text-transform:uppercase;margin-bottom:0; }
		.footer { margin-top:0; }
	    
        @media screen and (max-width:768px) {
            .single-title { font-size:2em; }
            .guide-desc { font-size:1.2em;line-height:1.6em; }
        }

    </style>
	
	<div id="content" class="hgg-page">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="article-image-wrap"><?php get_custom_post_thumbnail($post->ID, true); //replaces the_post_thumbnail('blog-thumbnail-small'); ?></div>
		
		<div class="small-12 columns">
			<header class="article-header">	
				<h2 class="entry-title single-title" style="color:<?php the_field('header_color'); ?>" itemprop="headline"><?php the_title(); ?></h2>
				<h4 class="large-8 small-12 large-centered small-centered columns page-subtitle guide-desc" style="text-align:center; color:<?php the_field('header_color'); ?>"><?php the_field('guide_desc'); ?></h4>
			</header> <!-- end article header -->
		</div>

		<div id="inner-content" class="row clearfix">
            <div class="hgg-guidelinks show-for-medium-up">

                <h6>More Holiday Gift Guides</h6>

                <ul class="large-block-grid-5 medium-block-grid-5 small-block-grid-5 hgg-grid">
                    <li>
                        <a href="/2015-holiday-gift-guide-outdoorsman"><img src="/wp-content/uploads/2015/11/small_outdoorsman.png" /></a>
                        <p><span>The Outdoorsman</span></p>
                    </li>
                    <li>
                        <a href="/2015-holiday-gift-guide-urbanite"><img src="/wp-content/uploads/2015/11/small_urbanite.png" /></a>
                        <p><span>The Urbanite</span></p>
                    </li>
                    <li>
                        <a href="/2015-holiday-gift-guide-seafarer"><img src="/wp-content/uploads/2015/11/small_seafarer.png" /></a>
                        <p><span>The Seafarer</span></p>
                    </li>
                    <li>
                        <a href="/2015-holiday-gift-guide-hipster"><img src="/wp-content/uploads/2015/11/small_hipster.png" /></a>
                        <p><span>The Hipster</span></p>
                    </li>
                    <li>
                        <a href="/2015-holiday-gift-guide-athlete"><img src="/wp-content/uploads/2015/11/small_athlete.png" /></a>
                        <p><span>The Athlete</span></p>
                    </li>
                </ul>
            </div>
			<div id="main" class="large-12 medium-12 columns" role="main">
                   
                <div class="sponsoredArea">
                    <div class="large-2 small-12 columns">
                        <p style="text-align:center;"><a style="border: 0;" href="http://effgnt.co/egxhbgg" target="_blank"><img class="sponLogo" src="/wp-content/uploads/2015/11/HB-Logo.jpg" alt="" width="125" height="125"></a></p>
                    </div>
                    <div class="large-10 small-12 columns">
                        <p><em>Our gift guides are made possible by our friends at <a href="http://effgnt.co/egxhbgg" target="_blank">Huckberry</a>. What’s Huckberry, you ask? It's your favorite store, your grandpa's favorite store, and your favorite magazine all rolled into one. Check out <a href="http://effgnt.co/hbegshop" target="_blank">EG's curated picks</a>.</em></p>
                    </div>
                </div><!-- sponsoredArea -->
                
				<?php if( have_rows('hgg_item') ): ?>
				<ul class="large-block-grid-3 medium-block-grid-2 small-block-grid-1 item">
					<?php while( have_rows('hgg_item') ): the_row(); ?>
					<li>
						<a target="_blank" href="<?php the_sub_field('item_url'); ?>"><img src="<?php the_sub_field('item_image'); ?>" alt="" /></a>
						<div class="itemDescription">
							<p><a class="itemTitle" target="_blank" href="<?php the_sub_field('item_url'); ?>"><?php the_sub_field('item_name'); ?></a>
							<span class="itemBrand"><?php the_sub_field('item_brand'); ?></span></p>
							<p><?php the_sub_field('item_description'); ?></p>
						</div>
					</li>
					<?php endwhile; ?>
				</ul><!-- block grid -->
				<?php endif; ?>

				<?php endwhile; endif; //main endwhile ?>

				<div class="row hgg-grid-title">
					<div class="small-12 small-centered columns">
						<h4>More Holiday Gift Guides</h4>
					</div>
					<ul class="large-block-grid-3 medium-block-grid-2 small-block-grid-1 hgg-grid">
						<li>
							<a href="/2015-holiday-gift-guide-outdoorsman"><img src="/wp-content/uploads/2015/11/small_outdoorsman.png" /></a>
							<p><span>The Outdoorsman</span></p>
						</li>
						<li>
							<a href="/2015-holiday-gift-guide-urbanite"><img src="/wp-content/uploads/2015/11/small_urbanite.png" /></a>
							<p><span>The Urbanite</span></p>
						</li>
						<li>
							<a href="/2015-holiday-gift-guide-seafarer"><img src="/wp-content/uploads/2015/11/small_seafarer.png" /></a>
							<p><span>The Seafarer</span></p>
						</li>
						<li>
							<a href="/2015-holiday-gift-guide-hipster"><img src="/wp-content/uploads/2015/11/small_hipster.png" /></a>
							<p><span>The Hipster</span></p>
						</li>
						<li>
							<a href="/2015-holiday-gift-guide-athlete"><img src="/wp-content/uploads/2015/11/small_athlete.png" /></a>
							<p><span>The Athlete</span></p>
						</li>
					</ul>
				</div>

			</div> <!-- end #main -->

		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

	<div id="hbfooter">
		<a href="http://effgnt.co/hbegshop" target="_blank"><img src="http://effortlessgent.com/wp-content/uploads/2015/11/huckberryfooterbanner.jpg" data-interchange="[http://effortlessgent.com/wp-content/uploads/2015/11/huckberryfooterbanner-1000x600.jpg, (small)], [http://effortlessgent.com/wp-content/uploads/2015/11/huckberryfooterbanner-1500x500.jpg, (medium)], [http://effortlessgent.com/wp-content/uploads/2015/11/huckberryfooterbanner.jpg, (large)]" data-uuid="interchange-igvepxy20"></a>
	</div>
<?php get_footer(); ?>
