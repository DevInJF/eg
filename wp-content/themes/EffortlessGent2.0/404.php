<?php get_header(); ?>
			
			<div id="content">
                <div class="article-image-wrap">
                    <img src="/wp-content/themes/EffortlessGent/library/images/404dog.jpg">
                </div>
				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="small-12 small-centered columns clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">
							<header class="article-header">
								<h1 style="text-align:center;">Ruh-roh.</h1>
                                <h2 style="text-align:center;">The content you're looking for is nowhere to be found.</h2>
							</header> <!-- end article header -->
                            
                            <div class="row" style="margin-top:3em;">
                                <div class="large-11 large-centered columns clearfix">
                                    <div class="row">
                                        <div class="small-12 large-6 small-centered large-uncentered columns">
                                            <div class="panel">
                                                <h4 style="text-align:center;">Looking for a place to start your style journey?</h4>
                                                <p style="text-align:center;"><a class="button expand" href="/start-here">START HERE</a></p>
                                            </div>
                                        </div>
                                        <div class="small-12 large-5 large-offset-1 small-centered large-uncentered columns">
                                            <h4 style="text-align:center;">Or, see all our articles here</h4>
                                            <p style="text-align:center;"><a class="button secondary" href="/start-here">VIEW ALL ARTICLES</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>    

                            <div class="row" style="margin-top:3em;">
                                <div class="large-11 large-centered columns">
                                    <div>
                                        <h4>You can also explore a topic you're interested in</h4>
                                        <p style="text-align:justify;font-family:'Lato',helvetica,sans-serif;"><?php wp_tag_cloud('smallest=10&largest=20&number=100&orderby=name'); ?></p>
                                    </div>
                                </div>
                            </div>

						</article> <!-- end article -->
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>