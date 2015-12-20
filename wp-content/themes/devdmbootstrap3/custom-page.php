<?php
/**
 * Template Name: Home Page
 */
?>
<?php get_header(); ?> 
<!-- start content container -->    
<div class="col-md-12" id="content-section">    
    <div class="col-md-8">
        <div class="row"> 
            <?php
            // theloop
            if (have_posts()) : while (have_posts()) : the_post();

                    // single post
                    if (is_single()) :
                        ?> 
                        <?php the_content(); ?>  

                    </div>
                    <?php
                // list of posts
                else :
                    ?> 
                    <?php the_content(); ?>  
                </div>

            <?php endif; ?>

        <?php endwhile; ?> 
    <?php else: ?>

        <?php get_404_template(); ?>

    <?php endif; ?>           
</div> 
<?php get_sidebar('right'); ?>
<div class="col-md-8" id="social-icon"> 
    <ul class="list-inline">
        <li><img src="<?php echo get_template_directory_uri() ?>/images/insta-icon.png" alt="instgram-img" class="social-icon img-rounded img-responsive" /></li>                   
        <li><img src="<?php echo get_template_directory_uri() ?>/images/tw-icon.png" alt="tw-img" class="social-icon img-rounded img-responsive" /></li>                
        <li><img src="<?php echo get_template_directory_uri() ?>/images/fb-icon.png" alt="fb-img" class="social-icon img-responsive" /></li> 
    </ul> 
</div> 
</div>     
<!-- end content container -->

<?php get_footer(); ?>
