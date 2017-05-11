<div class="row show-for-large-up">
	<div class="fixed contain-to-grid">
	</div>

		<div id="topbar" class="fixed contain-to-grid">		
			<nav class="top-bar" data-topbar>
				<section class="title-area large-3 columns">
					<a href="<?php echo home_url(); ?>" rel="nofollow"><h1 class="title image-replacement"><?php bloginfo('name'); ?></h1></a>
				</section>
				<section class="top-bar-section large-9 columns right">
					<?php joints_main_nav(); ?>
				</section>	
				<section class="top-bar-search medium-8 medium-centered large-8 large-uncentered large-push-4 columns hide">
					<form method="get" name="searchform" class="searchform" action="<?php echo get_bloginfo('home'); ?>">
					<div class="row collapse">
						<div class="small-10 columns"><input type="text" size="18" placeholder="Search..." name="s" id="s" /></div>
						<div class="small-1 columns"><a onclick="document.searchform.submit();" id="searchsubmit" class="button postfix"><i class="fi-magnifying-glass"></i></a></div>
						<div class="small-1 columns end"><a id="close-search" class="button secondary postfix"><i class="fi-x"></i></a></div>
					</div>
					</form>
				</section>				
			</nav>
		</div>
</div>

<div class="row hide-for-large-up">
	<div id="tab-bar">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
				<a href="<?php echo home_url(); ?>" rel="nofollow"><h1 class="title image-replacement"><?php bloginfo('name'); ?></h1></a>
			</section>
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" style="cursor:pointer"><span></span></a>
			</section>
		</nav>
	</div><!-- tab-bar -->
</div><!-- row -->
						
<aside class="left-off-canvas-menu hide-for-large-up">
	<ul class="off-canvas-list">
<!--		<li><label>Navigation</label></li>-->
		<li>&nbsp;</li> <!-- Spacer Only -->
		<li><?php echo do_shortcode('[search]' );?></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>