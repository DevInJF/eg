<?php
/*
Template Name: Product Page
*/
?>

<?php get_header(); ?>

			<div id="content">
			
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<header class="article-header" style="background-color:<?php the_field('header_bg'); ?>">
					<h1 class="page-title" style="color:<?php the_field('header_color'); ?>"><?php the_title(); ?></h1>
					<h4 class="page-subtitle" style="color:<?php the_field('header_color'); ?>"><?php the_field('subtitle'); ?></h4>
				</header> <!-- end article header -->
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns product-wrap entry-content">

							<?php
							
								if( have_rows('product') ):

									while ( have_rows('product') ) : the_row(); 
									
									//vars
									$image = get_sub_field('product_image');
									$more_info_link = get_sub_field('more_info_url');
									$buy_link = get_sub_field('buy_url');
									$testimonial = get_sub_field('testimonial');
									?>

									<div class="row product-row">									
										<div class="medium-8 small-12 columns">
											<h3><?php the_sub_field('product_title'); ?></h3>
											<p>
												<?php the_sub_field('product_description'); ?>
											</p>
											
											<?php if($more_info_link && $buy_link): // I'm doing this so we can have a nice-r styled button group when both buttons are present?>
												<ul class="button-group">
													<li><a class="button secondary" href="<?php the_sub_field('buy_url'); ?>" target="_blank"><?php the_sub_field('buy_text'); ?></a></li>
													<li><a class="button" href="<?php the_sub_field('more_info_url'); ?>" target="_blank"><?php the_sub_field('more_info_text'); ?></a></li>
												</ul>
											<?php else: ?>
												<?php if( $more_info_link ): ?>
													<p>
														<a class="button secondary" href="<?php the_sub_field('more_info_url'); ?>" target="_blank"><?php the_sub_field('more_info_text'); ?></a>
													</p>
												<?php endif; ?>
												
												<?php if( $buy_link ): ?>
													<p>
														<a class="button" href="<?php the_sub_field('buy_url'); ?>" target="_blank"><?php the_sub_field('buy_text'); ?></a><script type="text/javascript" src="https://gumroad.com/js/gumroad.js"></script>
													</p>
												<?php endif; ?>
											<?php endif; ?>


										</div>
										<div class="medium-4 small-12 columns">
											<img class="prod-img" src="<?php echo $image['url']; ?>" alt="" />
										</div>
										<?php if($testimonial):?>
											<div class="large-12 small-12 columns">
												<blockquote><p>
													<?php the_sub_field('testimonial'); ?>
												</p></blockquote>
											</div>
										<?php endif; ?>
									</div><!-- row -->


									<?php endwhile;

								else :
								
									// no rows found
								
								endif;
							 
							?>
					   

					    <?php get_template_part( 'partials/loop', 'page' ); ?>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->

		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'partials/content', 'missing' ); ?>

		    <?php endif; ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
