<?php

/*
 * TEMPLATE NAME: CONTACT US
 */

get_header(); ?>

    <!-- ==== CONTACT US SECTION ==== -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2><?php the_title(); ?></h2>
                    <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/divider-purple.png" alt="divider">
                </div><!-- /col -->
            </div><!-- /row -->

            <div class="row">
                <div class="col-sm-6 address well">
                    <address><i class="fa fa-map-marker"></i>
                        Address: <?php the_field('address'); ?>
                    </address>

                    <i class="fa fa-envelope-o"></i>Email: <?php the_field('email'); ?><br>
                    <i class="fa fa-phone"></i>Telephone: <?php the_field('phone_number'); ?>

                </div>
                <div class="col-sm-6">
                    <?php// the_field('map'); ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9317.677029650622!2d-2.957051!3d54.2788505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487c963f7677c10f%3A0x7c4facf781298270!2sLakeside%2C+Ulverston%2C+Cumbria+LA12!5e0!3m2!1sen!2suk!4v1439116698471" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="row message-area">
                <div class="col-sm-12">
                    <?php echo do_shortcode('[contact-form-7 id="67" title="Contact form 1"]'); ?>
                </div><!-- /col-sm-12 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

<?php get_footer(); ?>