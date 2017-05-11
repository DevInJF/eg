<section id="footboard">
	<div id="inner-footboard" class="row clearfix">
		<div id="inner-footboard-content">
			<?php // We actually will pull the page content out from the Wordpress page and display it, so it's easier to edit later.
				$page = get_page_by_path( 'homepage/footboard', $output = OBJECT, $post_type = 'page' ); 
				echo do_shortcode($page->post_content);
			?>
		</div>
	</div>
</section>