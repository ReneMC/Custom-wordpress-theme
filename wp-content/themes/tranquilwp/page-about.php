<?php

/*
 * TEMPLATE NAME: ABOUT US
 */

get_header(); ?>

    <!-- ==== ABOUT US SECTION ==== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>About Us</h2>
                    <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/divider-purple.png" alt="divider">
                </div><!-- /col -->
            </div><!-- /row -->

            <div class="row">
                <p>
                <?php // PAGE CONTENT
                    the_field('section_contents');
                ?>
                </p>
                <a href="<?php the_field('file_upload'); ?>">File</a>

            </div>

            <div class="row facilities">
                <div class="col-sm-3">
                    <a href="">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/makeup.png" alt="Hair & Make up">Hair &amp; Make Up
                    </a>
                </div><!-- /col -->
                <div class="col-sm-3">
                    <a href="">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/candles.png" alt="Spa Facilities">Spa Facilities
                    </a>
                </div><!-- /col -->
                <div class="col-sm-3">
                    <a href="">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/lake.png" alt="Lakeside Retreat">Lakeside Retreat
                    </a>
                </div><!-- /col -->
                <div class="col-sm-3">
                    <a href="">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/pool.png" alt="All Our Facilities">All Our Facilities
                    </a>
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

<?php get_footer(); ?>