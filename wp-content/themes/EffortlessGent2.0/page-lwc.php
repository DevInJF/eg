<?php
/*
Template Name: Lean Wardrobe Challenge
*/
?>

<?php get_header(); ?>

			<style type="text/css">
				/* containers */
				html,body {
					font-size:125%;
				}
				
				body {
					background:#e1e2e4;
					font-family:"Roboto",Tahoma,sans-serif;
					color:#4c4845;
					margin:0;
				}
				
				body.page-id-8055,/*staging*/
				body.page-id-8077 /*live*/ {
					padding-top:0;
				}
				
				.container {
					margin:0 auto;
				}
				
				#topbar, footer.footer { display:none;visibility:hidden; }
				
				.optin {
					background:#333;
					padding:2em 0;
				}
				
				#head,#body,.optin,#faq,#footer, #footer .share { margin-bottom:2rem; }
			
				.share { padding:2rem 0;background:#fcfcfc;text-align:center; }
			
				#footer { margin-top:2rem; }
			
			
				/* type */
				h1,h2,h3,h4,h5,h6 {
					font-family:"Roboto Condensed",Tahoma,sans-serif;
					margin:0;
					color:#4c4845;
				}
				
				h1.header {
					color:#e26638;
					font-size:225%;
					font-weight:700;
					text-align:center;
					line-height:100%;
					text-transform:uppercase;
				}
				
				h1.header span {
					color:#4c4845;
					font-size:40%;
					line-height:100%;
					display:block;
					font-weight:400;
				}
				
				h2 { font-weight:400; }
			
				h2.subhead,
				#footer.copyright {
					text-align:center;
				}
				
				p.small { font-size:50%;text-transform:uppercase;text-align:center; }
				
				.optin h3 {
					text-align:center;
					color:#e1e2e4;
					margin-bottom:1em;
					text-transform:uppercase;
				}
				
				.optin p.quote { color:#e1e2e4; }
				
				h3.q { 
					font-style:italic;
					font-weight:400;
					color:#e26638;
					text-transform:normal;
				}
				
				p.header-image { margin:2em auto;text-align:center; }
			
				blockquote p {
					color: #888;
					font-size: 1.3rem;
					margin-bottom:1rem;
					font-style: italic;
				}
			
				#footer span { margin-bottom:1rem; }
			
				#footer p.tweetbutton {
					margin:1rem 0 0;
				}
				
				#footer h3.q { margin: 1rem 0; }
			
			
				#copyright p {
					font-size:0.75rem;
					text-align:center;
				}
			
			
				
				
				/* form */
			
				input[type="text"], input[type="name"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], textarea {
					background-color:#e1e2e4;
					box-shadow:none;
					border-color:#e1e2e4;
				}
				
				label {
					color:#e1e2e4;
				}
				
				.button {
					background-color:#e26638;
					font-weight:400;
					font-family:"Roboto Condensed",Tahoma,sans-serif;
					margin:0 auto;
					color:#EDCDC1;
				}
				
				button:hover, button:focus, .button:hover, .button:focus {
					background-color: #e26638;
					color:#fff;
				}
				
				.buttonwrap { text-align:center;margin-top:3em; }
				
				
				
				/* other styles */
				
				hr {
					border-color:#c3c5c8;
					margin:4rem 0 0.5rem;
				}
			</style>
			
			<script src="js/vendor/modernizr.js"></script>
			<link href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic" rel="stylesheet" type="text/css">
			<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,700" rel="stylesheet" type="text/css">
			<div id="content">
			
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<div id="head" class="row">
					<div class="large-10 small-11 large-centered small-centered columns">
						<p class="header-image"><img src="/wp-content/uploads/2015/01/90DayLWC_emailHeader_2015.png" /></p>
						<h1 class="header" style="display:none;visibility:hidden;"><?php the_title(); ?></h1>
						<h2 style="display:none; visibility:hidden;" class="subhead"><?php the_field('subtitle'); ?></h2>
					</div>
				</div>
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->

		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'partials/content', 'missing' ); ?>

		    <?php endif; ?>
    
			</div> <!-- end #content -->
			

<?php get_footer(); ?>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>