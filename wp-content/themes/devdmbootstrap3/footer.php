    

<div class="col-md-12" id="footer-area">
    <div class="col-md-4 pull-right">
        <img src="<?php echo get_template_directory_uri() ?>/images/footer-img_man.png" alt="footer-img" class="margin-top-153 img-responsive absolute-position" />
    </div> 
</div>  
<div class="dmbs-footer">
    <?php
    global $dm_settings;
    if ($dm_settings['author_credits'] != 0) :
        ?>
        <div class="row dmbs-author-credits">

        </div>
    <?php endif; ?>

<?php get_template_part('template-part', 'footernav'); ?>
</div>

</div>
</div>
<!-- end main container -->

<?php wp_footer(); ?>
</body>
</html>