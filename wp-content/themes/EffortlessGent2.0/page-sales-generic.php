<?php
/*
Template Name: Generic Sales Page template
*/
?>

<?php get_header( 'sales' ) ?>
			
<style>
    header.header { display:none; }
    blockquote { margin-left:-1.5em; }
    h1.header, h2.subhead { font-weight:400; }
</style>

			<script src="js/vendor/modernizr.js"></script>
			
			<div id="content">
			
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    	
				<div id="head">
					<div class="row">
						<div class="large-10 large-centered columns clearfix">
							<h1 class="header"><?php the_title(); ?></h1>	
						</div>
						
						<div class="large-10 large-centered columns">
							<h2 class="subhead"><?php the_field('subtitle'); ?></h2>
						</div>
					</div><!-- row -->
				</div>
				<div id="inner-content">
					
				    <div id="main" role="main">
					
					    	<?php get_template_part( 'partials/loop', 'page-sales' ); ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->

		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'partials/content', 'missing' ); ?>

		    <?php endif; ?>
    
			</div> <!-- end #content -->
			

<?php get_footer( 'focused' ); ?>
		<script src="/wp-content/themes/EffortlessGent/bower_components/foundation/js/vendor/jquery.js"></script>
		<script src="/wp-content/themes/EffortlessGent/bower_components/foundation/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>