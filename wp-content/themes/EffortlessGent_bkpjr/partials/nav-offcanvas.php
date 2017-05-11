<div class="row show-for-medium-up">
	<div class="row"><!-- negates margins -->
		<div class="large-12 columns">
		
			<div class="sticky">
			
				<!-- If you want to use the more traditional "fixed" navigation.
				 simply replace "sticky" with "fixed" -->
			
				<nav class="top-bar" data-topbar>
					<ul class="title-area">
						<!-- Title Area -->
						<li class="name">
							<h1> <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
						</li>
						<li class="toggle-topbar menu-icon">
							<a href="#"><span>Menu</span></a>
						</li>
					</ul>		
					<section class="top-bar-section">
						<?php joints_main_nav(); ?>
					</section>
					<section class="search right">
							<a class="expand" href="#" data-dropdown="drop2">Search</a>
							<div id="search-drop" data-dropdown-content class="f-dropdown content">
							  <div class="row collapse">
						        <div class="small-8 columns">
						          <input type="text" placeholder="I'm looking for...">
						        </div>
						        <div class="small-4 columns">
						          <a href="#" class="button postfix">Search</a>
						        </div>
					      	</div>
							</div><!-- search drop -->   
					</section>
				</nav>
			</div>
		</div><!--columns -->
	</div><!-- row, yup -->
</div><!-- row -->

<div class="row show-for-small-only">
	<div class="large-12 columns">
		<div class="contain-to-grid">
			<nav class="tab-bar">
				<section class="middle tab-bar-section">
					<h1 class="title"><?php bloginfo('name'); ?></h1>
				</section>
				<section class="left-small">
					<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
				</section>
			</nav>
		</div>
	</div><!-- columns -->
</div><!-- row -->
						
<aside class="left-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">
		<li><label>Navigation</label></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>