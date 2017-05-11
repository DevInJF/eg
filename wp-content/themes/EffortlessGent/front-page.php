<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>
		
<!--
***
	pre-billboard area
***
-->


			<?php // This is moved to this page instead because it interferes with on-page forms.
				$page = get_page_by_path( 'homepage/valetmodal', $output = OBJECT, $post_type = 'page' ); 
				echo do_shortcode($page->post_content);
			?>

			<?php // get_template_part( 'partials/content', 'billboard' ); ?>


<!--
***
	billboard area (new with slider 12-2015)
***
-->
			<section id="homeslider">
				<div class="row">
					<?php putRevSlider("hphero","homepage") ?>
				</div>
			</section>

<!--
***
	as featured in
***
-->
			<div id="highlighted-articles" class="clearfix">
                <div class="row">
                    
                    <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-6">
                        <li style="padding:0.75rem;">
                            <p style="text-align:center;margin-top:1em;margin-bottom:0;font-size:0.75em;color:#ccc;text-transform:uppercase;">As mentioned in</p>
                        </li>
                        <li style="padding:0.75rem;">
                            <p style="margin-bottom:0;text-align:center;"><img src="/wp-content/uploads/2016/09/featuredIn_coolmaterial.gif" /></p>
                        </li>
                        <li style="padding:0.75rem;">
                            <p style="margin-bottom:0;text-align:center;"><img src="/wp-content/uploads/2016/09/featuredIn_playboy.gif" /></p>
                        </li>
                        <li style="padding:0.75rem;">
                            <p style="margin-bottom:0;text-align:center;"><img src="/wp-content/uploads/2016/09/featuredIn_menshealth.gif" /></p>
                        </li>
                        <li style="padding:0.75rem;">
                            <p style="margin-bottom:0;text-align:center;"><img src="/wp-content/uploads/2016/09/featuredIn_bustle.gif" /></p>
                        </li>
                        <li style="padding:0.75rem;">
                            <p style="margin-bottom:0;text-align:center;"><img src="/wp-content/uploads/2016/09/featuredIn_nerdfitness.gif" /></p>
                        </li>
                    </ul>
                </div>
			</div>

<!--
***
	features area
***
-->
                
                
                
                <div class="features clearfix" style="background:#eee;padding:3em 0;">
                    <div class="row">
                        <div class="small-12 columns">
                            <h2 style="text-align:center;margin-bottom:3rem;">A crash course on dressing well with confidence.</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 medium-4 columns">
                            <p style="text-align:center;"><a href="/start-here"><img src="/wp-content/uploads/2016/09/features_shirt.png" style="width:50%;" /></a></p>
                            <h4 style="text-align:center;margin-bottom:1rem;"><a href="/start-here">Start Here</a></h4>
                            <p style="text-align:center;">Looking sharp starts with the basics.</p>
                        </div>
                        <div class="small-12 medium-4 columns">
                            <p style="text-align:center;"><a href="/lean-wardrobe-101"><img src="/wp-content/uploads/2016/09/features_shoes.png" style="width:50%;" /></a></p>
                            <h4 style="text-align:center;margin-bottom:1rem;"><a href="/lean-wardrobe-101">How To Dress Better</a></h4>
                            <p style="text-align:center;">Learn to build a Lean Wardrobe.</p>
                        </div>
                        <div class="small-12 medium-4 columns">
                            <p style="text-align:center;"><a href="/tag/five-ways"><img src="/wp-content/uploads/2016/09/features_hatbow.png" style="width:50%;" /></a></p>
                            <h4 style="text-align:center;margin-bottom:1rem;"><a href="/tag/five-ways">5 Ways / Wear 1</a></h4>
                            <p style="text-align:center;">Endless ideas for wearing old (and new) favorites.</p>
                        </div>                
                        
                    </div>
                </div>

<!--
***
	first section - latest article and latest compendium post
***
-->
			<div id="content">
                <div class="row">
                    <div class="large-12 medium-12 columns">
                        <h6><span style="background:#eee;padding:0.5em 2em;">Newest Article</span></h6>
                    </div>
                    <div class="latest-article clearfix">
                        <div class="large-12 medium-12 new-article columns">


                            <?php $homepage_newarticle_query = new WP_Query('showposts=1'); ?>

                            <?php while ($homepage_newarticle_query->have_posts()) : $homepage_newarticle_query->the_post(); ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                                    <div class="article-header">
                                        <div class="article-thumb">
                                            <?php //adding "feature" mark here
                                                if ( has_tag('feature') ) {
                                                    echo '<span class="feature-tag">FEATURE</span>';
                                                } else {

                                                }

                                                if ( in_category(717) ) {
                                                    echo '<span class="feature-tag">GIVEAWAY</span>';
                                                } elseif ( in_category(720) ) {
                                                    echo '<span class="feature-tag">REVIEW</span>';
                                                } else {

                                                }
                                            ?>
                                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php get_custom_post_thumbnail($post->ID); //replaces the_post_thumbnail('blog-thumbnail-small'); ?></a>
                                        </div>
                                        <div class="article-excerpt">
                                            <h2><a class="article-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                        </div>
                                    </div> <!-- end article header -->

                                    <div class="row collapse comments-readmore">
                                        <div class="medium-12 large-12 columns">
                                            <?php the_excerpt(); ?>
                                            <p><a class="button tiny" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">READ THE POST</a></p>
                                        </div>
                                    </div>				
                                </article> <!-- end article -->

                            <?php endwhile; ?>
                        </div>
                    </div><!-- latest-article-new -->
                   
                </div><!-- row -->

<!--
***
	hardcoded ad area
***
-->			
                <section id="ad-area" class="clearfix">		

                    <!-- holiday gift guide -->
<!--
                    <div class="row">
                        <div class="small-12 columns" style="text-align:center;margin:3em auto 0.5em;">
                            <p><a href="http://effgnt.co/hgg2016home"><img src="/wp-content/uploads/2016/11/homepage_hgg2016.jpg" alt="holiday gift guide 2016" /></a></p>
                            <p style="text-align:center;"><a class="button" href="http://effgnt.co/hgg2016home">CHECK OUT OUR FAVORITE THINGS: 2016 EDITION</a></p>
                        </div>
                    </div>
-->
                <!-- eg shop -->
                    <div class="row">
                        <div class="small-12 columns" style="text-align:center;">
                            <p><a href="http://effgnt.co/egshophome"><img src="/wp-content/uploads/2016/09/shop_eg.jpg" alt="shop eg" /></a></p>
                            <p style="text-align:center;"><a class="button" href="http://effgnt.co/egshophome" target="_blank">SHOP EG-APPROVED CLOTHING</a></p>
                        </div>
                    </div>	

                </section>


                <div id="content">

<!-- main column full -->

                    <div id="inner-content" class="row clearfix">

                        <div id="main" class="feature-section" role="main">

                            <div class="large-12 medium-12 columns">
                                <h6><span style="background:#eee;padding:0.5em 2em;">Latest Articles</span></h6>
                            </div>

                            <div class="latest-article clearfix">

                                <?php $homepage_articlelist_query = new WP_Query('showposts=3&offset=1'); ?>

                                    <?php while ($homepage_articlelist_query->have_posts()) : $homepage_articlelist_query->the_post(); ?>

                                        <article class="large-4 medium-4 columns" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                                            <div class="article-header">
                                                <div class="article-thumb">
                                                    <?php //adding "feature" mark here
                                                        if ( has_tag('feature') ) {
                                                            echo '<span class="feature-tag">FEATURE</span>';
                                                        } else {

                                                        }

                                                        if ( in_category(717) ) {
                                                            echo '<span class="feature-tag">GIVEAWAY</span>';
                                                        } elseif ( in_category(720) ) {
                                                            echo '<span class="feature-tag">REVIEW</span>';
                                                        } else {

                                                        }
                                                    ?>
                                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php  the_post_thumbnail('blog-feature-small'); ?></a>
                                                </div>
                                                <div class="article-excerpt">
                                                    <h3 style="text-align:center;"><a class="article-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                                </div>
                                            </div> <!-- end article header -->

                                            <div class="row collapse comments-readmore">
                                                <div class="medium-12 large-12 columns">
                                                    <?php //the_excerpt(); ?>
                                                    <p style="text-align:center;"><a class="button tiny" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">READ THE POST</a></p>
                                                </div>
                                            </div>				
                                        </article> <!-- end article -->

                                    <?php endwhile; ?>

                            </div>
                            <div class="row">
                                <div class="medium-6 small-10 medium-centered small-centered columns"><a class="button large expand" href="/articles">VIEW ALL ARTICLES</a></div>
                            </div>
                        </div><!-- end main -->

                    </div> <!-- end #inner-content -->
                </div><!-- content -->
			<?php get_template_part( 'partials/content', 'footboard' ); ?>
<?php get_footer(); ?>