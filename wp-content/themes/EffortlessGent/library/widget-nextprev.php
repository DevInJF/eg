<?php

	// Custom NextPrev Widget
	class NextPrev extends WP_Widget {
		public function __construct() {  
	    	parent::__construct(
	    		'nextprev-box', // Base ID
	    		'Next and Previous Links Widget', // Name
	    		array( 'description' => __( 'Display the links to next and previous posts.' ) )
	    	);
	    }

		//Update the widget 
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			//Strip tags from title  to remove HTML 
			return $instance;
		}

		// Create form for widget content
		public function form( $instance ) {
		}

	  	// Create widget
	    public function widget( $args, $instance ) {
	      extract($args);
	      // Variables from Widget Settings
	      $title = apply_filters('widget_title', $instance['title']);
	      $contents = $instance['contents'];

	      echo $before_widget . '<div class="sidebar-box">';

		  echo '<div id="next-prev-links"><ul>';
		  next_post_link( '<li>NEXT<br /><strong>%link</strong></li>', '%title', $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' );
		  previous_post_link( '<li>PREVIOUS<br /><strong>%link</strong></li>', '%title', $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' );
		  echo '</ul></div>';
	    }

	} 

	register_widget( 'NextPrev' );
?>

