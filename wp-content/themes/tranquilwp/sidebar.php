    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Welcome to the official Tranquil Spa blog.</p>
        <p>Here you will find all the latest news and what's going on here at the spa.</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives(); ?>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Categories</h4>
        <ol class="list-unstyled">
            <?php wp_list_categories('title_li='); ?>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Follow Us:</h4>
        <ol class="list-unstyled">
            <i class="fa fa-facebook fa-lg"></i>
            <i class="fa fa-twitter fa-lg"></i>
            <i class="fa fa-google-plus fa-lg"></i>
            <i class="fa fa-pinterest fa-lg"></i>
            <i class="fa fa-youtube fa-lg"></i>
        </ol>
    </div>