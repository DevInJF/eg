<?php
/*
Template Name: Holiday Gift Guides, No Sponsor
*/
?>

<?php get_header(); ?>
			
	<style type="text/css">        
        .article-header { margin-bottom:3em; }
        
        .hgg-guidelinks { padding:1em 0.9375em 0;margin-bottom:4em; clear:both; }
        .hgg-guidelinks h6 { text-align:center;text-transform:uppercase; }
        
        .itemDescription { font-size:16px; }
		.itemDescription .itemTitle { font-weight:700;text-transform:uppercase;display:block;text-decoration:none !important;font-size:1.2em; }
		.itemDescription .itemBrand { color:#888;text-transform:uppercase;display:block;font-size:0.8em; }
		.itemDescription p { font-size:100%; }
		.row .row.hgg-grid-title { margin-top: 3em; border-top: 1px solid #eee; padding-top: 1.5em; }
		.hgg-grid-title h4 { text-transform:uppercase;text-align:center; }
		.hgg-grid p { text-align:center;font-size:0.8em;text-transform:uppercase;margin-bottom:0; }
		.footer { margin-top:0; }

    </style>
	
	<div id="content" class="hgg-page">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
		<div class="article-image-wrap"><?php get_custom_post_thumbnail($post->ID, true); //replaces the_post_thumbnail('blog-thumbnail-small'); ?></div>

		<div id="inner-content" class="row clearfix">
            
            <div class="small-12 columns clearfix">
                <header class="article-header">
					<h1 class="page-title" style="text-align:center;"><?php the_title(); ?></h1>
					<h3 class="page-subtitle" style="text-align:center;"><?php the_field('subtitle'); ?></h3>
				</header>
            </div>
            
			<div id="main" class="large-12 medium-12 columns" role="main">
                <?php get_template_part( 'partials/loop', 'page' ); ?>
                
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

			</div> <!-- end #main -->

		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
