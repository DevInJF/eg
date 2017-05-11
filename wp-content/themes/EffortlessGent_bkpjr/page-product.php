<?php
/*
Template Name: Product Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="product-wrap">

							<?php
							
								if( have_rows('product') ):

									while ( have_rows('product') ) : the_row(); 
									
									//vars
									$image = get_sub_field('product_image');
									$more_info_link = get_sub_field('more_info_url');
									$buy_link = get_sub_field('buy_url');
									?>
								<div class="row">									
									<div class="large-6 small-12 columns clearfix">
										<h3><?php the_sub_field('product_title'); ?></h3>
										
										<p>
											<img class="prod-img" src="<?php echo $image['url']; ?>" alt="" />
											<?php the_sub_field('product_description'); ?>
										</p>
										
										<?php if( $more_info_link ): ?>
											<p>
												<a class="button" href="<?php the_sub_field('more_info_url'); ?>" target="_blank"><?php the_sub_field('more_info_text'); ?></a>
											</p>
										<?php endif; ?>
										
										<?php if( $buy_link ): ?>
											<p>
												<a class="button" href="<?php the_sub_field('buy_url'); ?>" target="_blank"><?php the_sub_field('buy_text'); ?></a>
											</p>
										<?php endif; ?>
									
									</div>
								</div><!-- row -->
									<?php endwhile;

								else :
								
									// no rows found
								
								endif;
							 
							?>
					   
    				</div> <!-- end #product-wrap -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
