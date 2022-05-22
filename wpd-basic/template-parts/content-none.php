<div class="no-results not-found">
<div class="page-header">
    <h1 class="page-title">
    <?php esc_html_e('nothing found','wpd-basic'); ?>
    </h1>
</div>

<div class="page-content">

<?php 
if(is_home()&& current_user_can( 'publish_posts')):
printf(
    __('<p>Ready to publish your first post? <a href="%1$s">Get started here</a>.</p>','wpd-basic'),

esc_url(admin_url('post-new.php'))
);



elseif( is_search()) :
  ?>  
<p> <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wptd-5' ); ?></p>
<?php  get_search_form()   ?>
<?php
else :
?>
 <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wptd-5' ); ?> </p> 
<?php get_search_form(); ?>

<?php

    endif;
     ?>

     
</div>
 </div> 
















