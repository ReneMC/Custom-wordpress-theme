<?php get_header(); ?>

    <!-- ==== WELCOME SECTION ==== -->
    <section id="welcome">
       <div class="container">
           <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                   <h2>Welcome to Tranquil Spa</h2>
                   <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/divider-purple.png" alt="divider">
               </div><!-- /col -->
           </div><!-- /row -->
           
            <?php get_template_part('content-facilities'); ?>
       </div><!-- /container -->
    </section>
    
     <!-- ==== LATEST OFFERS SECTION ==== -->
    <section id="latest-offers">
        <div class="container">
            <div class="row margin-bottom">
               <div class="col-sm-6 col-sm-offset-3">
                   <h2>Latest Offers</h2>
                   <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/divider-silver.png" alt="divider">
               </div><!-- /col -->
           </div><!-- /row -->
           
           <div class="row">
               <div class="col-sm-12">
                   <div class="row">
                       <div class="col-sm-4">
                           <div class="offer">
                               <span>$<?php the_field('offer_price');?></span>
                               <h3><?php the_field('offer_name');?></h3>
                               <p><?php the_field('offer_line_1');?></p><hr>
                               <p><?php the_field('offer_line_2');?></p><hr>
                           </div><!-- /offer -->
                       </div><!-- /col-sm-4 -->
                       <div class="col-sm-4">
                           <div class="offer">
                               <span>$<?php the_field('offer_price_2');?></span>
                               <h3><?php the_field('offer_name_2');?></h3>
                               <p><?php the_field('offer_2_line_1');?></p><hr>
                               <p><?php the_field('offer_2_line_2');?></p><hr>
                           </div><!-- /offer -->
                       </div><!-- /col-sm-4 -->
                       <div class="col-sm-4">
                           <div class="offer">
                               <span>$<?php the_field('offer_price_3');?></span>
                               <h3><?php the_field('offer_name_3');?></h3>
                               <p><?php the_field('offer_3_line_1');?></p><hr>
                               <p><?php the_field('offer_3_line_2');?></p><hr>
                           </div><!-- /offer -->
                       </div><!-- /col-sm-4 -->
                   </div><!-- /nested row -->
               </div><!-- /col-sm-12 -->
           </div><!-- /row -->
        </div><!-- /container -->
    </section>
    
    <!-- ==== SHOP ONLINE SECTION ==== -->
    <section id="shop-online">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                   <h2>Shop Online</h2>
                   <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/divider-purple.png" alt="divider"><br>
                   <a href="" class="btn btn-default" role="button">Shop Here</a>
               </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

<?php get_footer(); ?>