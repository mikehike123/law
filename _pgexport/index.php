<?php
get_header(); ?>

<?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'blocks_promo3_bck' ), 'large' ); ?>
<section id="promo-3" class="content-block promo-3 min-height-600px bg-deepocean" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
    <div class="container text-center">
        <h1><?php echo get_theme_mod( 'blocks_promo3_title', __( 'Rocket Fuel for Web Designers', 'pinegrow' ) ); ?></h1>
        <h2><?php echo get_theme_mod( 'blocks_promo3_subtitle', __( 'Pinegrow Blocks', 'pinegrow' ) ); ?></h2>
        <a href="<?php echo esc_url( get_theme_mod( 'blocks_promo3_button_url' ) ); ?>" class="btn btn-outline btn-outline-xl outline-light"><?php echo get_theme_mod( 'blocks_promo3_button_label', __( 'Contact us now for free 30 min consultation', 'pinegrow' ) ); ?></a>
    </div>
    <!-- /.container -->
</section>
<section id="content-3-7" class="content-block content-3-7 simpleHeader" title="About Us WP">
    <div class="container">
        <div class="col-sm-12">
            <div class="underlined-title">
                <h1><?php echo get_theme_mod( 'blocks_content_3_7_title', __( 'About Us', 'pinegrow' ) ); ?></h1>
                <hr>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <p><?php echo get_theme_mod( 'blocks_content_1_5_text', __( 'Lorem ipsum dolor sit amet, quis lacinia cras enim luctus platea tortor. Massa vitae at mauris turpis eget rhoncus, mollis congue sodales in vitae egestas, fringilla eu mauris orci condimentum integer purus, lectus in ullamcorper imperdiet, nec amet vestibulum nostra cras leo. Diam mauris sit, tortor a consequat erat elit. Sit eu egestas arcu nec felis consectetuer. Sunt ullamcorper proin, mauris viverra excepteur quis dictum torquent. Augue elit metus dui mattis a urna. Nisl dictum dui vitae velit pede, per tincidunt pede mauris nonummy, morbi in vivamus sollicitudin eleifend. Vehicula magna nunc sit, semper mauris, neque id sit maecenas convallis dignissim. Lobortis donec vel orci dui, ad at at varius. Imperdiet at volutpat maecenas nonummy sit. Amet id id in magna scelerisque, justo ultrices ut suscipit, est neque dolor etiam turpis. Neque consectetuer eget, vitae vivamus magna libero aliquam.', 'pinegrow' ) ); ?></p>
        </div>
    </div>
</section>
<section id="content-1-3" class="content-block services bg-deepocean white" title="Legal Services">
    <a name="services"></a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="underlined-title">
                    <h1 class="white"><?php echo get_theme_mod( 'legal_services_title', __( 'Our Legal Services', 'pinegrow' ) ); ?></h1>
                    <hr>
                </div>
                <div class="services-wrapper">
                    <?php
                        $myquery_args = array(
                            'post_type' => 'services',
                            'post_status' => 'publish',
                            'nopaging' => true,
                            'order' => 'ASC',
                            'orderby' => 'menu_order',
                            'cache_results' => false
                        )
                    ?>
                    <?php $myquery = new WP_Query( $myquery_args ); ?>
                    <?php if ( $myquery->have_posts() ) : ?>
                        <?php $myquery_item_number = 0; ?>
                        <?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
                            <div class="col-md-3">
                                <h4><?php the_title(); ?></h4>
                                <?php the_content( __( 'Learn More', 'pinegrow' ), true ); ?>
                            </div>
                            <?php $myquery_item_number++; ?>
                            <?php if( $myquery_item_number % 4 == 0 ) echo '<div class="clearfix visible-md-block visible-lg-block"></div>'; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'pinegrow' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section id="content-1-9" class="content-1-9 content-block" title="Testimonials">
    <a name="testimonials"></a>
    <div class="container">
        <div class="underlined-title">
            <h1><?php echo get_theme_mod( 'testimonials_title', __( 'Testimonials', 'pinegrow' ) ); ?></h1>
            <hr>
            <h2><?php echo get_theme_mod( 'testimonials_subtitle', __( 'What our valued clients say about us.', 'pinegrow' ) ); ?></h2>
        </div>
        <div class="row">
            <?php
                $testimonials_args = array(
                    'post_type' => 'testimonials',
                    'post_status' => 'publish',
                    'nopaging' => true,
                    'order' => 'ASC',
                    'orderby' => 'menu_order'
                )
            ?>
            <?php $testimonials = new WP_Query( $testimonials_args ); ?>
            <?php if ( $testimonials->have_posts() ) : ?>
                <?php $testimonials_item_number = 0; ?>
                <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
                    <div class="col-md-4">
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                    <?php $testimonials_item_number++; ?>
                    <?php if( $testimonials_item_number % 3 == 0 ) echo '<div class="clearfix visible-md-block visible-lg-block"></div>'; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pinegrow' ); ?></p>
            <?php endif; ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="content-block team-1 team-1-1 team">
    <a name="ourTeam"></a>
    <div class="container">
        <div class="underlined-title">
            <h1><?php echo get_theme_mod( 'blocks_team_1_1_title', __( 'Say hello to the team', 'pinegrow' ) ); ?></h1>
            <hr>
        </div>
        <div class="row">
            <?php
                $blocks_args = array(
                    'post_parent' => get_theme_mod('blocks_team_1_1_source'),
                    'post_type' => 'blocks_content',
                    'post_status' => 'publish',
                    'nopaging' => true,
                    'order' => 'ASC',
                    'orderby' => 'menu_order'
                )
            ?>
            <?php $blocks = new WP_Query( $blocks_args ); ?>
            <?php if ( $blocks->have_posts() ) : ?>
                <?php $blocks_item_number = 0; ?>
                <?php while ( $blocks->have_posts() ) : $blocks->the_post(); ?>
                    <div class="col-sm-4 team-member-wrap">
                        <div class="team-member">
                            <?php the_post_thumbnail( 'large', array(
                                    'class' => 'img-responsive wp-post-image'
                            ) ); ?>
                            <div class="team-details">
                                <h4 class="member-name"><?php the_title(); ?></h4>
                                <?php if ( get_post_meta( get_the_ID(), 'position', true ) ) : ?>
                                    <p class="position"><?php echo get_post_meta( get_the_ID(), 'position', true ); ?></p>
                                <?php endif; ?>
                                <?php the_content(); ?>
                                <ul class="social social-dark">
                                    <?php if ( get_post_meta( get_the_ID(), 'social_facebook', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_facebook', true ); ?>"><i class="fa fa-2x fa-facebook"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_twitter', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_twitter', true ); ?>"><i class="fa fa-2x fa-twitter"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_google', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_google', true ); ?>"><i class="fa fa-2x fa-google-plus"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_pinterest', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_pinterest', true ); ?>"><i class="fa fa-2x fa-pinterest"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_behance', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_behance', true ); ?>"><i class="fa fa-2x fa-behance"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_dribbble', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_dribbble', true ); ?>"><i class="fa fa-2x fa-dribbble"></i></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <!-- /.social -->
                            </div>
                        </div>
                    </div>
                    <?php $blocks_item_number++; ?>
                    <?php if( $blocks_item_number % 3 == 0 ) echo '<div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>'; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pinegrow' ); ?></p>
            <?php endif; ?>
            <!-- /.team-member-wrap -->
            <!-- /.team-member-wrap -->
            <!-- /.team-member-wrap -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<div class="content-block contact-3">
    <a name="contactUs"></a>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><?php _e( 'Get in Touch', 'pinegrow' ); ?></h1>
            </div>
            <div class="col-md-12">
                <div class="underlined-title">
                    <hr>
                    <h2><?php _e( 'Feel free to drop us a line to contact us', 'pinegrow' ); ?></h2>
                </div>
                <p><?php _e( 'Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.', 'pinegrow' ); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="contact" class="form-container">
                    <fieldset>
                        <div id="message"></div>
                        <form method="post" action="<?php echo esc_url( get_template_directory_uri() ); ?>/js/contact-form.php" name="contactform" id="contactform">
                            <div class="form-group">
                                <input name="name" id="name" type="text" value="" placeholder="Name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input name="email" id="email" type="text" value="" placeholder="Email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" value="" placeholder="Phone" class="form-control" />
                            </div>
                            <div class="form-group">
                                <textarea name="comments" id="comments" class="form-control" rows="3" placeholder="Message" id="textArea"></textarea>
                                <div class="editContent">
                                    <p class="small text-muted"><span class="guardsman"><?php _e( '* All fields are required.', 'pinegrow' ); ?></span> <?php _e( 'Once we receive your message we will respond as soon as possible.', 'pinegrow' ); ?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" id="cf-submit" name="submit">
                                    <?php _e( 'Send', 'pinegrow' ); ?>
                                </button>
                            </div>
                        </form>
                    </fieldset>
                </div>
                <!-- /.form-container -->
            </div>
            <div class="col-md-6">
                <h2><?php echo get_theme_mod( 'blocks_contact_3_title', __( 'How to find us', 'pinegrow' ) ); ?></h2>
                <p><?php echo get_theme_mod( 'blocks_contact_3_text', __( 'We are easy to find in the heart of London\'s business district, just a short walk from several Tube Stations.', 'pinegrow' ) ); ?></p>
                <?php echo wp_get_attachment_image( get_theme_mod( 'blocks_contact_3_image' ), null, null, array(
                        'class' => 'img-responsive map-img'
                ) ) ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<div class="content-block contact-3">
    <!-- /.container -->
</div>            

<?php get_footer(); ?>