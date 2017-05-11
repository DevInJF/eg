<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

<style type="text/css">
    .ivycat-post { margin-bottom:3em; }
    .ivycat-post h3 a { text-decoration:none !important; }
</style>

<!-- Start of Post Wrap -->
<div class="post hentry panel ivycat-post">
    <div class="row">
        <div class="medium-4 columns">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-feature-small'); ?></a>
        </div>    

        <div class="medium-8 columns">
            <!-- This is the output of the post TITLE -->
            <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <!-- This is the output of the EXCERPT -->
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
        </div><!-- medium 8 -->
    </div><!-- row -->
</div>
<!-- // End of Post Wrap -->
