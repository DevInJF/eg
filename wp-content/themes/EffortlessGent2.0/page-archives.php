<?php
/*
Template Name: Archives Template
*/
?>

<?php get_header(); ?>
<div id="content">
    <header class="article-header" style="background-color:#333;padding:6em;">
        <h1 class="page-title" style="text-align:center;color:#fff;"><?php the_title(); ?></h1>
        <h4 class="page-subtitle" style="text-align:center;color:#fff;"><?php the_field('subtitle'); ?></h4>
    </header> <!-- end article header -->

    <div id="inner-content" class="row clearfix">
        <div id="main" class="large-12 medium-12 columns clearfix" role="main">						
            <div class="archives row">
                <?php
                    // List Pages by Month/Day
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                    'paged' => $paged,
                     'post_type' => 'post',
                     'posts_per_page' => 50,
                     'order' => 'DESC'
                                 );
                    query_posts($args);
                    if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <div class="arc-item large-4 columns">
                    <div class="row">
                        <div class="small-12 medium-12 small-centered medium-uncentered columns">
                            <?php                                
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('blog-feature-small');
                                }
                                else {
                                    echo '<img src="/wp-content/uploads/2015/12/feat_1000x600.png" />';
                                }
                            ?>
                        </div>
                        <div class="small-11 medium-12 small-centered medium-uncentered columns">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                            <p class="postdate"><?php echo get_the_time('F d, Y');?></p>
                            <p class="tags clearfix"><?php the_tags('', ''); ?></p>
                        </div>
                    </div>
                </div>
                <?php $curr_dt = $this_dt; endwhile; ?>
                <?php else :
                // Code here for no pages found
                endif;
                ?>

                <div class="navigation row">                
                    <div class="nopadding small-6 medium-3 columns">
                        <?php if( get_next_posts_link() ) :
                            echo '<span class="left">';    
                                next_posts_link( '« OLDER ARTICLES', $max_num_pages );
                            echo '</span>';
                        endif; ?>
                    </div>

                    <div class="medium-6 show-for-medium-up columns">&nbsp;</div>

                    <div class="nopadding small-6 medium-3 columns">
                        <?php if( get_previous_posts_link() ) :
                            echo '<span class="right">';
                                previous_posts_link( 'NEWER ARTICLES »', $max_num_pages );
                            echo '</span>';
                        endif; ?>
                    </div>
                </div>

            </div>
        </div> <!-- end #main -->

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>