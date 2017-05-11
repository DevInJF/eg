<?php
/*
Template Name: Shop Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="shop-page">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<header class="article-header" style="background-color:<?php the_field('header_bg'); ?>">
					<h1 class="page-title" style="color:<?php the_field('header_color'); ?>"><?php the_title(); ?></h1>
					<h4 class="page-subtitle" style="color:<?php the_field('header_color'); ?>"><?php the_field('subtitle'); ?></h4>
				</header> <!-- end article header -->		
		
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
					<?php if($post->post_content=="") : ?>
						<!-- dont show -->
					<?php else : ?>
						<?php the_content(); ?>
					<?php endif; ?>


					<!-- shop-menu -->
					<div class="shop-menu">
						<p>
<!--							<a href="/shop/#shop-guides" class="button">eGuides</a>&nbsp;&nbsp;-->
							<a href="/shop/#shop-pants" class="button">Pants</a>&nbsp;&nbsp;
							<a href="/shop/#shop-shirts" class="button">Shirts</a>&nbsp;&nbsp;
							<a href="/shop/#shop-underwear" class="button">Underwear</a>&nbsp;&nbsp;
							<a href="/shop/#shop-grooming" class="button">Grooming</a>&nbsp;&nbsp;
							<a href="/shop/#shop-midlayers" class="button">Midlayers</a>&nbsp;&nbsp;
							<a href="/shop/#shop-outerwear" class="button">Outerwear</a>&nbsp;&nbsp;
							<a href="/shop/#shop-formal" class="button">Formal</a>&nbsp;&nbsp;
							<a href="/shop/#shop-footwear" class="button">Footwear</a>&nbsp;&nbsp;
							<a href="/shop/#shop-accessories" class="button">Accessories</a>&nbsp;&nbsp;
						</p>
					</div>
                        
					<!-- full-width feature 1 -->
					<div class="full-width-feature">
						<?php if( get_field('full_width_feature_1') ): ?>
							<?php the_field('full_width_feature_1'); ?>
						<?php endif; ?>	
					</div>



					<!-- pants loop -->
					<?php
						$args=array(
							'post_type' => 'shop',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'pants',
									'field'    => 'slug',
									'terms'    => array( 'denim', 'chinos', 'trousers', 'shorts' )
								),
							),
						);
						
						$shoppants = new WP_Query($args); ?>
						
						<div class="row itemgroup collapse">
							<div class="large-12 medium-12 columns itemsectiontitle clearfix">
								<h4 id="shop-pants">Pants</h4>
							</div>
								<ul class="large-block-grid-4 medium-block-grid-3 small-block-grid-2 item">
									<?php while ( $shoppants->have_posts() ) : $shoppants->the_post(); ?>
										<li>
											<a target="_blank" href="<?php the_field('item_url'); ?>"><img src="<?php the_field('item_image'); ?>" alt="" /></a>
											<div class="itemDescription">
												<a class="itemTitle" target="_blank" href="<?php the_field('item_url'); ?>"><?php the_title( '<strong>', '</strong>' ); ?></a>
												<span class="itemBrand"><?php the_field('item_brand'); ?></span>
												<?php the_field('item_description'); ?>
											</div>
										</li>
									<?php endwhile; ?>
								</ul><!-- block grid -->								
						</div>
					<?php wp_reset_query(); // end pants loop ?>
					

					<!-- shirts loop -->
					<?php
						$args=array(
							'post_type' => 'shop',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'shirts',
									'field'    => 'slug',
									'terms'    => array( 'casual shirts', 'sport shirts', 'dress shirts' )
								),
							),
						);
						
						$shopshirts = new WP_Query($args); ?>
						
						<div class="row itemgroup collapse">
							<div class="large-12 medium-12 columns itemsectiontitle clearfix">
								<h4 id="shop-shirts">Shirts</h4>
							</div>	
								<ul class="large-block-grid-4 medium-block-grid-3 small-block-grid-2 item">
									<?php while ( $shopshirts->have_posts() ) : $shopshirts->the_post(); ?>
										<li>
											<a target="_blank" href="<?php the_field('item_url'); ?>"><img src="<?php the_field('item_image'); ?>" alt="" /></a>
											<div class="itemDescription">
												<a class="itemTitle" target="_blank" href="<?php the_field('item_url'); ?>"><?php the_title( '<strong>', '</strong>' ); ?></a>
												<span class="itemBrand"><?php the_field('item_brand'); ?></span>
												<?php the_field('item_description'); ?>
											</div>
										</li>
									<?php endwhile; ?>
								</ul><!-- block grid -->
						</div>
					<?php wp_reset_query(); // end shirts loop ?>
					

					<!-- underwear loop -->
					<?php
						$args=array(
							'post_type' => 'shop',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'underwear',
									'field'    => 'slug',
									'terms'    => array( 'undershirts', 'bottoms' )
								),
							),
						);
						
						$shopunderwear = new WP_Query($args); ?>
						
						<div class="row itemgroup collapse">
							<div class="large-12 medium-12 columns itemsectiontitle clearfix">
								<h4 id="shop-underwear">Underwear</h4>
							</div>	
								<ul class="large-block-grid-4 medium-block-grid-3 small-block-grid-2 item">
									<?php while ( $shopunderwear->have_posts() ) : $shopunderwear->the_post(); ?>
										<li>
											<a target="_blank" href="<?php the_field('item_url'); ?>"><img src="<?php the_field('item_image'); ?>" alt="" /></a>
											<div class="itemDescription">
												<a class="itemTitle" target="_blank" href="<?php the_field('item_url'); ?>"><?php the_title( '<strong>', '</strong>' ); ?></a>
												<span class="itemBrand"><?php the_field('item_brand'); ?></span>
												<?php the_field('item_description'); ?>
											</div>
										</li>
									<?php endwhile; ?>
								</ul><!-- block grid -->
						</div>
					<?php wp_reset_query(); // end underwear loop ?>

					

					<!-- grooming loop -->
					<?php
						$args=array(
							'post_type' => 'shop',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'grooming',
									'field'    => 'slug',
									'terms'    => array( 'body', 'face', 'hair' )
								),
							),
						);
						
						$shopgrooming = new WP_Query($args); ?>
						
						<div class="row itemgroup collapse">
							<div class="large-12 medium-12 columns itemsectiontitle clearfix">
								<h4 id="shop-grooming">Grooming</h4>
							</div>	
								<ul class="large-block-grid-4 medium-block-grid-3 small-block-grid-2 item">
									<?php while ( $shopgrooming->have_posts() ) : $shopgrooming->the_post(); ?>
										<li>
											<a target="_blank" href="<?php the_field('item_url'); ?>"><img src="<?php the_field('item_image'); ?>" alt="" /></a>
											<div class="itemDescription">
												<a class="itemTitle" target="_blank" href="<?php the_field('item_url'); ?>"><?php the_title( '<strong>', '</strong>' ); ?></a>
												<span class="itemBrand"><?php the_field('item_brand'); ?></span>
												<?php the_field('item_description'); ?>
											</div>
										</li>
									<?php endwhile; ?>
								</ul><!-- block grid -->
						</div>
					<?php wp_reset_query(); // end grooming loop ?>
					
					

					<!-- full-width feature 2 -->
					<div class="full-width-feature">
						<?php if( get_field('full_width_feature_2') ): ?>
							<?php the_field('full_width_feature_2'); ?>
						<?php endif; ?>	
					</div>



					<!-- midlayers loop -->
					<?php
						$args=array(
							'post_type' => 'shop',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'midlayers',
									'field'    => 'slug',
									'terms'    => array( 'heavy', 'light' )
								),
							),
						);
						
						$shopmidlayers = new WP_Query($args); ?>
						
						<div class="row itemgroup collapse">
							
							<div class="large-12 medium-12 columns itemsectiontitle clearfix">
								<h4 id="shop-midlayers">Midlayers</h4>
							</div>
							
							<ul class="large-block-grid-4 medium-block-grid-3 small-block-grid-2 item">
								<?php while ( $shopmidlayers->have_posts() ) : $shopmidlayers->the_post(); ?>
									<li>
										<a target="_blank" href="<?php the_field('item_url'); ?>"><img src="<?php the_field('item_image'); ?>" alt="" /></a>
										<div class="itemDescription">
											<a class="itemTitle" target="_blank" href="<?php the_field('item_url'); ?>"><?php the_title( '<strong>', '</strong>' ); ?></a>
											<span class="itemBrand"><?php the_field('item_brand'); ?></span>
											<?php the_field('item_description'); ?>
										</div>
									</li>
								<?php endwhile; ?>
							</ul><!-- block grid -->
						</div>
					<?php wp_reset_query(); // end midlayers loop ?>



					<!-- outerwear loop -->
					<?php
						$args=array(
							'post_type' => 'shop',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'outerwear',
									'field'    => 'slug',
									'terms'    => array( 'fall winter', 'spring summer' )
								),
							),
						);
						
						$shopouterwear = new WP_Query($args); ?>
						
						<div class="row itemgroup collapse">
							
							<div class="large-12 medium-12 columns itemsectiontitle clearfix">
								<h4 id="shop-outerwear">Outerwear</h4>
							</div>
							
							<ul class="large-block-grid-4 medium-block-grid-3 small-block-grid-2 item">
								<?php while ( $shopouterwear->have_posts() ) : $shopouterwear->the_post(); ?>
									<li>
										<a target="_blank" href="<?php the_field('item_url'); ?>"><img src="<?php the_field('item_image'); ?>" alt="" /></a>
										<div class="itemDescription">
											<a class="itemTitle" target="_blank" href="<?php the_field('item_url'); ?>"><?php the_title( '<strong>', '</strong>' ); ?></a>
											<span class="itemBrand"><?php the_field('item_brand'); ?></span>
											<?php the_field('item_description'); ?>
										</div>
									</li>
								<?php endwhile; ?>
							</ul><!-- block grid -->
						</div>
					<?php wp_reset_query(); // end outerwear loop ?>



					<!-- formal loop -->
					<?php
						$args=array(
							'post_type' => 'shop',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'formal',
									'field'    => 'slug',
									'terms'    => array( 'sport coats', 'suits' )
								),
							),
						);
						
						$shopformal = new WP_Query($args); ?>
						
						<div class="row itemgroup collapse">
							
							<div class="large-12 medium-12 columns itemsectiontitle clearfix">
								<h4 id="shop-formal">Formal</h4>
							</div>
							
							<ul class="large-block-grid-4 medium-block-grid-3 small-block-grid-2 item">
								<?php while ( $shopformal->have_posts() ) : $shopformal->the_post(); ?>
									<li>
										<a target="_blank" href="<?php the_field('item_url'); ?>"><img src="<?php the_field('item_image'); ?>" alt="" /></a>
										<div class="itemDescription">
											<a class="itemTitle" target="_blank" href="<?php the_field('item_url'); ?>"><?php the_title( '<strong>', '</strong>' ); ?></a>
											<span class="itemBrand"><?php the_field('item_brand'); ?></span>
											<?php the_field('item_description'); ?>
										</div>
									</li>
								<?php endwhile; ?>
							</ul><!-- block grid -->
						</div>
					<?php wp_reset_query(); // end formal loop ?>



					<!-- full-width feature 3 -->
					<div class="full-width-feature">
						<?php if( get_field('full_width_feature_3') ): ?>
							<?php the_field('full_width_feature_3'); ?>
						<?php endif; ?>	
					</div>


					<!-- shoes loop -->
					<?php
						$args=array(
							'post_type' => 'shop',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'shoes',
									'field'    => 'slug',
									'terms'    => array( 'casual', 'formal' )
								),
							),
						);
						
						$shopshoes = new WP_Query($args); ?>
						
						<div class="row itemgroup collapse">
							
							<div class="large-12 medium-12 columns itemsectiontitle clearfix">
								<h4 id="shop-footwear">Footwear</h4>
							</div>
							
							<ul class="large-block-grid-4 medium-block-grid-3 small-block-grid-2 item">
								<?php while ( $shopshoes->have_posts() ) : $shopshoes->the_post(); ?>
									<li>
										<a target="_blank" href="<?php the_field('item_url'); ?>"><img src="<?php the_field('item_image'); ?>" alt="" /></a>
										<div class="itemDescription">
											<a class="itemTitle" target="_blank" href="<?php the_field('item_url'); ?>"><?php the_title( '<strong>', '</strong>' ); ?></a>
											<span class="itemBrand"><?php the_field('item_brand'); ?></span>
											<?php the_field('item_description'); ?>
										</div>
									</li>
								<?php endwhile; ?>
							</ul><!-- block grid -->
						</div>
					<?php wp_reset_query(); // end shoes loop ?>					
					
					
					
					<!-- accessories loop -->
					<?php
						$args=array(
							'post_type' => 'shop',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'accessories',
									'field'    => 'slug',
									'terms'    => array( 'cufflinks', 'leather goods', 'pocket squares', 'socks', 'ties', 'watches', 'etc' )
								),
							),
						);
						
						$shopaccessories = new WP_Query($args); ?>
						
						<div class="row itemgroup collapse">
							
							<div class="large-12 medium-12 columns itemsectiontitle clearfix">
								<h4 id="shop-accessories">Accessories</h4>
							</div>
							
							<ul class="large-block-grid-4 medium-block-grid-3 small-block-grid-2 item">
								<?php while ( $shopaccessories->have_posts() ) : $shopaccessories->the_post(); ?>
									<li>
										<a target="_blank" href="<?php the_field('item_url'); ?>"><img src="<?php the_field('item_image'); ?>" alt="" /></a>
										<div class="itemDescription">
											<a class="itemTitle" target="_blank" href="<?php the_field('item_url'); ?>"><?php the_title( '<strong>', '</strong>' ); ?></a>
											<span class="itemBrand"><?php the_field('item_brand'); ?></span>
											<?php the_field('item_description'); ?>
										</div>
									</li>
								<?php endwhile; ?>
							</ul><!-- block grid -->
						</div>
					<?php wp_reset_query(); // end accessories loop ?>				
					
					
					<?php endwhile; endif; //main endwhile ?>
												    					
    				</div> <!-- end #main -->

					<div class="row">
						<div class="large-12 columns">
							<img src="/wp-content/uploads/2015/02/egshop_bag.jpg" alt="eg shop" />
						</div>
					</div>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
