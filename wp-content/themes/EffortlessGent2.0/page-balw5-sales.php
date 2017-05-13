<?php
/*
Template Name: BALW v5 Sales Page
*/
?>

<?php get_header( 'focused' ) ?>

			<style type="text/css">
/* containers */				
                body {
					background:#fff;
					color:#4c4845;
					margin:0;
					border-top: 2px solid #f96027;
				}
				
				body:not(.page-template-page-focused-php) { padding-top: 0; }
				
				body.page-id-8819 /*live*/ {
					padding-top:0;
				}
				
				.container {
					margin:0 auto;
				}
				
				header.header, footer.footer { display:none;visibility:hidden; }
				
				#body,.optin,#faq,#footer, #footer .share { margin-bottom:2rem; }

				.nomargin { margin:0; }
				.nopadding { padding:0; }


/* special styles for sections */
				.logoWrap { padding-top:1rem;padding-bottom:1rem; }

/*                .packages, .packagesdk { margin:2em 0;padding:2.5em; }*/
                .packages { background:#e5f6f7; }
				.packagesdk { background: #ccc; }
				
				#head { padding:4em 0; }
                
                #headcta { background:#f9f9f9; }
                
                body #inner-content { margin-top:0; }
                .hero { padding-bottom:4rem; }
                
				.callout { padding:4em 0; }
				.calloutlight { background:#f9f9f9; }
				.calloutdark { background:#333; }
                .calloutwhite { background:#fff; }
                
				.share { padding:2rem 0;background:#fcfcfc;text-align:center; }
			
				#footer { margin-top:2rem; }
			
				.signoff { margin-top:3rem;border: 1px solid #ccc;border-width: 1px 0;padding: 2rem 0 0.5rem; }
			
			
/* type */                
                html { font-size: 16px; }
                
                @media screen and (max-width: 40em) {
                  html { font-size: 12px; }
                }
                
                @media screen and (min-width:40.063em) and (max-width: 90em) {
                  html { font-size: 15px; }
                }
                
                @media screen and (min-width:90.063em) {
                  html { font-size: 18px; }
                }

                /* Modules will scale with document */
                .logoWrap { font-size: 1rem; }
                #head { font-size: 0.8rem; }
                #headcta { font-size: 1rem; }
                #inner-content { font-size: 1rem; }
                .footer { font-size: 1rem; }
                
                

                /* Type will scale with modules */
                h1 { font-size:4em;line-height:120%; }
                h2 { font-size:3em;line-height:140%;margin-bottom:0.75em; }
                h3 { font-size:2.25em;line-height:150%;margin-bottom:0.75em; }
                h4 { font-size:2em;line-height:3.2rem; }
                h5 { font-size:1.85em; }
                h6 { font-size:1.6em;font-weight:700 !important;text-transform:uppercase;}
                p  { font-size:1.6em;margin-bottom:1em; }
                li { font-size:1.6rem; }
                
                .courseContents p { text-align:justify; font-size:1.35em; }

                .entry-content blockquote, blockquote,
                .entry-content blockquote p, blockquote p { font-size:1.25em; }
              
/* type - styles */                
                h1,h2,h3,h4,h5,h6,.button,p,body,.pricing-table .bullet-item{
					font-family:"Roboto",Tahoma,sans-serif;
					color:#4c4845;
                    font-weight:300;
				}
                
				h1.header {
					color:#f96027;
					font-weight:700;
					text-transform:uppercase;
				}
				
				h1.header span {
					color:#4c4845;
					font-size:40%;
					line-height:100%;
					display:block;
					font-weight:400;
				}
				
                h1.header, h2.subhead {  }
                
				h2 { }

                h3.subtitle { margin-top: 0;margin-bottom:2rem; }
                h3.q { margin-top:3rem; }
                
                #copyright { text-align:center;margin:4em auto 2em; }

								
                strong { font-weight:700; }
                .small { font-size:125%; }
                .centered { text-align:center; }
                .light { color:#fff; }
                .quiet { font-size:1em;color:#999; }
                .shout { text-transform:uppercase; }
                
                
                .bigNumber {
                    border:3px solid;
                    padding:0.5rem 1.5rem;
                }
                
                
/* misc */                
				#main a:not(.button):not(.article-title):link,
				#main a:not(.button):not(.article-title):visited { text-decoration:none;color:#f96027; }
				
				#main a:not(.button):not(.article-title):hover,
				#main a:not(.button):not(.article-title):focus { background:transparent;color:#dc5522;text-decoration:underline; }
				
				.optin h3 {
					text-align:center;
					color:#e1e2e4;
					margin-bottom:1em;
					text-transform:uppercase;
				}
				
				.optin p.quote { color:#e1e2e4; }
				
				h3.q { 
					font-style:italic;
					font-weight:300;
					color:#f96027;
					text-transform:normal;
				}
				
				p.header-image { margin:2em auto;text-align:center; }
			
				.entry-content blockquote,
				blockquote {
					border-left:4px solid #f96027;
					color: #888;
					font-family: "PT Serif", Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;
					font-style: italic;
					margin-top: 1.5em;
				    margin-bottom: 1.5em;
				    padding: 0.5em 0.5em 0.5em 1em;
				}
                
                .entry-content blockquote p,
                blockquote p { margin-bottom:0; }

				.entry-content .slick,
				.slick {
					margin-left:0;
				}
                
                .packages .moduleList p { text-align:left;font-size:0.85em; }

                .courseContentsItem { padding:1em 2em; }
                
/* footer */                
				#footer span { margin-bottom:1rem; }
			
				#footer p.tweetbutton {
					margin:1rem 0 0;
				}
				
				#footer h3.q { margin: 1rem 0; }
			
			
				#copyright p {
					font-size:0.75rem;
					text-align:center;
				}
                
                .entry-content ul li, .entry-content ol li { margin-bottom:1.2rem; }


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
					background-color:#f96027;
					margin:0 auto;
					color:#EDCDC1;
					text-transform:uppercase;
				}
				
				.button.gray { background-color:#ccc;color:#666; }
                .button.lightol { background-color:transparent;color:#fff;border:3px solid #fff; }
				.button.lightol:hover,
                .button.lightol:focus { background-color:#fff !important;color:#4c4845 !important;border:3px solid #fff; }
				
                button:hover, button:focus, .button:hover, .button:focus {
					background-color: #f96027 !important;
					color:#fff;
				}
				
				.buttonwrap { text-align:center;margin-top:3em; }
				
				
				
				/* pricing */	
				.pricing-table { border: 0; padding:0; }
				.pricing-table .bullet-item {
					padding:0 0.5em 0.25em;
					background:transparent;
					margin-bottom:0.5em;
					text-align:center;
					border-bottom:0;
					line-height:1.4em;
					font-size:1.25rem;
                    font-weight:300;
                    color:#fff;
				}
				
				.pricing-table p { line-height:1.4em;font-weight: 300;font-size: 1em; }
				
				.pricing-table .inactive {
					color:#555;
					text-decoration:line-through;
				}
				
				.pricing-table .product-title { margin:0 0 1em; text-align: center; padding: 1em; font-weight:600; }
				.pricing-table h6 { margin:0; }
				
				.pricing-table .cta-button { background-color:transparent;padding:1.25em 0 0; }
				
					/*show for medium only*/
					.package-group { margin-bottom:3em;padding-bottom:3em;border-bottom:1px solid #eee; }
					
					.package-wrap .first-package { margin-top:2em; }				
					.package-wrap .last-package { border-bottom:0;margin-bottom:0;padding-bottom:0; }
					
					.show-for-medium-only .pricing-table .product-title { margin-top: 0; }
				
				/* other styles */
				
				hr {
					border-color:#c3c5c8;
					margin:4rem 0 0.5rem;
				}
			</style>
			<link href="//fonts.googleapis.com/css?family=Roboto:300,300italic,400,400italic,700,700italic" rel="stylesheet" type="text/css">
			<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700italic,400,700" rel="stylesheet" type="text/css">
			<div id="content">
			
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    	
				<div class="logoWrap calloutlight clearfix">
					<div class="medium-3 small-12 columns">
						<img style="width:8em;" data-interchange="[/wp-content/uploads/2015/07/BALW_logo_240w_v2.png, (only screen and (min-width: 1px))], [/wp-content/uploads/2015/07/BALW_logo_600w_v2.png, (only screen and (-webkit-min-device-pixel-ratio: 2))]">
					</div>
                    <div class="medium-6 hide-for-small-only columns">&nbsp;</div>
                    <div class="medium-3 hide-for-small-only columns">
                        <img style="width:10em;float:right;margin-top:0.8em;" data-interchange="[/wp-content/themes/EffortlessGent/library/images/logo-navcolor.png, (only screen and (min-width: 1px))], [/wp-content/themes/EffortlessGent/library/images/logo-navcolor.png, (only screen and (-webkit-min-device-pixel-ratio: 2))]">
                    </div>
				</div>	
				<div id="head">
					<div class="row">
                        <div class="large-12 large-centered columns clearfix">
                            <h1 class="header centered"><?php the_title(); ?></h1>	
                        </div>
						<div class="large-12 large-centered columns clearfix">
							<h2 class="subhead centered"><?php the_field('subtitle'); ?></h2>
						</div>
					</div><!-- row -->
				</div>
                <div id="headcta">
                    <div class="row">
                        <div class="large-12 large-centered columns clearfix">
                            <p class="centered" style="margin-top:1.5rem;">Ready to jump right in?&nbsp;&nbsp;<a class="button gray large" href=" #buynow" rel="buynowsection">SHOW ME MY OPTIONS</a></p>
                        </div>
                    </div>
                </div>
				<div id="inner-content">
					
				    <div id="main" role="main">
					
					   <?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
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