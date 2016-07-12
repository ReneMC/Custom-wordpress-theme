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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis dictum urna. Vestibulum id laoreet felis, sed molestie elit. Maecenas ultricies, nunc in scelerisque eleifend, ligula sapien venenatis lorem, id porta ipsum orci a arcu. Fusce placerat tellus eu odio commodo, at vestibulum nunc scelerisque. Integer a nisi gravida, vestibulum ex at, iaculis erat. Ut sodales tincidunt arcu, sed ornare turpis auctor feugiat. Duis eget aliquam risus. Mauris malesuada sapien a tortor porta tempus. Nunc blandit, elit at pharetra euismod, dui nibh lacinia ligula, et iaculis urna libero sit amet massa. Etiam volutpat commodo ex, vel molestie arcu sagittis non.
                </p>
                <p>
                    Nunc vel lectus vitae mauris posuere condimentum. Aliquam pharetra dui vulputate eleifend fermentum. Nulla facilisi. Aliquam iaculis quis mi vel efficitur. Donec rutrum magna eu lorem pharetra porta. Sed malesuada pulvinar lacus, id laoreet ex euismod eget. Etiam ac aliquet risus. Ut sed purus a metus tristique pulvinar ut eu sapien. Fusce consequat eros id diam dapibus, ac feugiat ligula rutrum. In non fermentum sem. Vivamus diam risus, facilisis in imperdiet eu, venenatis sit amet dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque porta eget lacus sed mattis. Fusce auctor nisl arcu, non egestas velit malesuada dapibus. In sit amet diam orci. Phasellus aliquet enim vel porta tempus.
                </p>
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