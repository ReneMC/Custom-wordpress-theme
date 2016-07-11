<?php if ( is_active_sidebar( 'sidebar_blog' ) ) : ?>
<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar_blog' ); ?>
</div><!-- #primary-sidebar -->
<?php endif; ?>

<!--    <div class="sidebar-module">-->
<!--        <h4>Archives</h4>-->
<!--        <ol class="list-unstyled">-->
<!--            --><?php //wp_get_archives(); ?>
<!--        </ol>-->
<!--    </div>-->
<!--    <div class="sidebar-module">-->
<!--        <h4>Categories</h4>-->
<!--        <ol class="list-unstyled">-->
<!--            --><?php //wp_list_categories('title_li='); ?>
<!--        </ol>-->
<!--    </div>-->
