<?php
/*
Template Name: Sales Page Template
*/
?>

<?php get_header( 'sales' ) ?>
<style type="text/css">
	.tiers ul { margin-left:0; }
	.tiers li { margin-bottom:1em;list-style-type:none; }
	.testiphoto { border-radius:100px;-moz-border-radius:100px;-webkit-border-radius:100px; }
	body.page-id-9127 #content section#pre-footer-section,
	body.page-id-9075 #content section#pre-footer-section { background:#672E1D;padding-top:7em; }	
	body.page-id-9127 #content section,
	body.page-id-9075 #content section,
	body.page-id-9127 #content section#bottom-section,
	body.page-id-9075 #content section#bottom-section { padding:3em 0 5em; }
</style>

	<!-- <script src="js/vendor/modernizr.js"></script> -->
	<link href="http://fonts.googleapis.com/css?family=Cantata+One" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,300italic,700italic" rel="stylesheet" type="text/css">
	<div id="content">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php if(get_field('top_section')) { ?>
		<section id="top-section">
			<div class="row clearfix">
			    <div class="large-12 medium-12 columns">
					<?php the_field('top_section'); ?>
		    	</div>
		    </div>
		</section>
	<?php } ?>

	<?php if(get_field('full_width_1')) {	?>
		<section id="full_width_1">
			<?php the_field('full_width_1'); ?>
		</section>
	<?php } ?>

	<?php if(get_field('mid_section')) { ?>
		<section id="mid-section">
			<div class="row clearfix">
			    <div class="large-12 medium-12 columns">
					<?php the_field('mid_section'); ?>
		    	</div>
		    </div>
		</section>
	<?php } ?>

	<?php if(is_page('9075') || is_page('9127')) { ?>
		<section id="mid-break">
			<div class="large-8 large-centered columns">
				<blockquote class="vlt">Dressing well is a form of good manners.<cite>Tom Ford</cite></blockquote>
			</div>
		</section>
	<?php } ?>

	<?php if(get_field('main_section')) { ?>
		<section id="main-section">
			<div class="row clearfix">
			    <div class="large-12 medium-12 columns">
					<?php the_field('main_section'); ?>
		    	</div>
		    </div>
		</section>
	<?php } ?>

	<?php if(get_field('full_width_2')) {	?>
		<section id="full_width_2">
			<?php the_field('full_width_2'); ?>
		</section>
	<?php } ?>

	<?php if(get_field('bottom_section')) { ?>
		<section id="bottom-section">
			<div class="row clearfix">
			    <div class="large-12 medium-12 columns">
					<?php the_field('bottom_section'); ?>
		    	</div>
		    </div>
		</section>
	<?php } ?>

	<?php if(get_field('pre_footer_section')) {	?>
		<section id="pre-footer-section">
			<div class="row clearfix">
			    <div class="large-12 medium-12 columns">
					<?php the_field('pre_footer_section'); ?>
		    	</div>
		    </div>
		</section>
	<?php } ?>
	
	<?php if(get_field('full_width_3')) {	?>
		<section id="full_width_3">
			<?php the_field('full_width_3'); ?>
		</section>
	<?php } ?>

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