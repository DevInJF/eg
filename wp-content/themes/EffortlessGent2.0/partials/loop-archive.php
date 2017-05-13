

					<div class="arc-item clearfix" style="margin-bottom:4em;">
                        <div class="row">
                            <div class="small-12 medium-4 small-centered medium-uncentered columns">
                                <?php                                
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('blog-feature-small');
                                    }
                                    else {
                                        echo '<img src="/wp-content/uploads/2015/12/feat_1000x600.png" />';
                                    }
                                ?>
                            </div>
                            <div class="small-11 medium-8 small-centered medium-uncentered columns">
                                <h3><a class="article-title" href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                <p class="postdate"><?php echo get_the_time('F d, Y');?></p>
                                <p class="tags clearfix"><?php the_tags('', ''); ?></p>
                            </div>
                        </div>
                    </div>
