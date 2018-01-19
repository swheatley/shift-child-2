<?php
if ( is_page_template( 'templates/full-width.php' ) ) {
    return;
}

if ( is_page_template( 'templates/regular-page.php' ))  {
    if ( is_active_sidebar( 'affiliate' ) ) : ?>
    <aside class="sidebar sidebar-affiliate" id="sidebar-affiliate" role="complementary">
        <h1 class="screen-reader-text"><?php _e( 'Sidebar', 'shift'); ?></h1>
        <?php dynamic_sidebar( 'affiliate' ); ?>
    </aside>
<?php endif;
}

if ( is_page_template( 'templates/political-page.php' ) ) {
    if ( is_active_sidebar( 'politics' ) ) : ?>
    <aside class="sidebar sidebar-political" id="sidebar-political" role="complementary">
        <h1 class="screen-reader-text"><?php _e( 'Sidebar', 'shift'); ?></h1>
        <?php dynamic_sidebar( 'politics' ); ?>
    </aside>
<?php endif;
}

if ( is_single())  {
    if ( is_active_sidebar( 'affiliate' ) ) : ?>
    <aside class="sidebar sidebar-affiliate" id="sidebar-affiliate" role="complementary">
        <h1 class="screen-reader-text"><?php _e( 'Sidebar', 'shift'); ?></h1>
        <?php dynamic_sidebar( 'affiliate' ); ?>
    </aside>
<?php endif;
}

/*  ------ Front Page / Blog Page  ------ */
if ( is_front_page())  {
   if ( is_active_sidebar( 'primary' ) ) : ?>
    <aside class="sidebar sidebar-primary" id="sidebar-primary" role="complementary">
        <h1 class="screen-reader-text"><?php _e( 'Sidebar', 'shift'); ?></h1>
        <?php dynamic_sidebar( 'primary' ); ?>
    </aside>
<?php endif;
}

