<?php

function search($atts, $content=null) {  
	extract(shortcode_atts(array(  
        "order" => '', 
        "text" => ''
    ), $atts)); 
    $home = get_bloginfo('home');
    return '<form method="get" class="searchform" action="' . $home .'/">
			<div class="row collapse">
				<div class="small-10 columns"><input type="text" size="18" placeholder="Search..." name="s" id="s" /></div>
				<div class="small-2 columns"><a href="#" id="searchsubmit" class="button postfix"><i class="fi-magnifying-glass"></i></a></div>
			</div>
			</form>';  
} 
add_shortcode('search', 'search');