<?php
global $dm_settings;
if ($dm_settings['right_sidebar'] != 0) :
    ?> 
    <?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>
<?php endif; ?> 
<?php endif; ?>