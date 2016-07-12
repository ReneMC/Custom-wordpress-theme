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
                    <h2><?PHP the_title(); ?></h2>
                    <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/divider-purple.png" alt="divider">
                </div><!-- /col -->
            </div><!-- /row -->

            <div class="row">
                <div class="col-sm-6 address well">
                    <address><i class="fa fa-map-marker"></i>
                        Tranquil Spa<br>
                        Address line 1<br>
                        Address line 2<br>
                        Address line 3<br>
                    </address>

                    <i class="fa fa-envelope-o"></i>Email: mail@mail.com<br>
                    <i class="fa fa-phone"></i>Telephone: 123 456 789

                </div>
                <div class="col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9317.677029650622!2d-2.957051!3d54.2788505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487c963f7677c10f%3A0x7c4facf781298270!2sLakeside%2C+Ulverston%2C+Cumbria+LA12!5e0!3m2!1sen!2suk!4v1439116698471" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="row message-area">
                <div class="col-sm-12">
                    <div class="well">
                        <form>
                            <p>Send us a message...</p>
                            <div class="form-group">
                                <label class="sr-only" for="input-name">Name</label>
                                <input type="text" class="form-control" id="input-name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="input-email">Email</label>
                                <input type="text" class="form-control" id="input-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="input-message">Message</label>
                                <textarea class="form-control" id="input-message" placeholder="Message" rows="3"></textarea>
                            </div>
                            <input type="submit" class="btn btn-default" value="Submit">
                        </form>
                    </div><!-- /well -->
                </div><!-- /col-sm-12 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

<?php get_footer(); ?>