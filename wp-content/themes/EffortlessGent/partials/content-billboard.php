<section id="billboard">
	<div id="inner-billboard" class="row clearfix">
		<div id="inner-billboard-content">
			<?php // We actually will pull the page content out from the Wordpress page and display it, so it's easier to edit later.
				$page = get_page_by_path( 'homepage/billboard', $output = OBJECT, $post_type = 'page' ); 
				echo do_shortcode($page->post_content);
			?>
		</div>
	</div>
</section>