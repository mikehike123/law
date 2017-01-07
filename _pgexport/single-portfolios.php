<?php
get_header(); ?>

            <?php //get short link
$shortLink =wp_get_shortlink();
?>
            <?php
                $qryServices_args = array(
                    'post_type' => 'services',
                    'post_status' => 'publish',
                    'orderby' => 'name'
                )
            ?>
            <?php $qryServices = new WP_Query( $qryServices_args ); ?>
            <?php if ( $qryServices->have_posts() ) : ?>
                <nav id="nav-service">
                    <ul class="margin-bottom0">
                        <?php while ( $qryServices->have_posts() ) : $qryServices->the_post(); ?>
                            <li class="<?php echo ($shortLink==wp_get_shortlink()?"active":"") ?> margin-bottom0">
                                <a href="<?php echo esc_url( wp_get_shortlink()); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </nav>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pinegrow' ); ?></p>
            <?php endif; ?>
            <?php if ( have_posts() ) : ?>
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <section id="content-3-7" class="content-block content-portfolio pad0">
                            <div class="container">
                                <div class="col-sm-12">
                                    <div class="next-prev-links col-md-12 text-center">
                                        <?php previous_post_link( '%link', '<span class="nxt-prev"><span class="arrow">&laquo;</span><span class="title">Previous</span></span>' ); ?>
                                        <?php next_post_link( '%link', '<span class="nxt-prev"><span class="title">Next</span><span class="arrow">&raquo;</span></span>' ); ?> 
                                    </div>
                                    <section id="content-1-2" class="content-block content-1-2 pad0" title="Portfolio Details">
                                        <div class="container">
                                            <!-- Start Row -->
                                        <div class="row clearfix">
                                                <div class="col-sm-6">
                                                    <h2><?php the_title(); ?></h2>
                                                    <?php the_content(); ?>
                                                </div>
                                                <?php 
$image_src_id = get_post_meta( get_the_ID(), 'detail-portfolio-image', true );
$image_attributes = wp_get_attachment_image_src( $image_src_id );
            if( $image_attributes ) : ?>
                                                <div class="col-sm-6 min-height-300px portfolioBackground" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"> 
                                                    <?php _e( '>', 'pinegrow' ); ?>
                                                </div>
                                            <?php endif; ?>
                                            </div>
                                            <!--// END Row -->
                                        </div>
                                    </section>
                                    <div class="next-prev-links col-md-12 text-center">
                                        <?php previous_post_link( '%link', '<span class="nxt-prev"><span class="arrow">&laquo;</span><span class="title">Previous</span></span>' ); ?>
                                        <?php next_post_link( '%link', '<span class="nxt-prev"><span class="title">Next</span><span class="arrow">&raquo;</span></span>' ); ?> 
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'pinegrow' ); ?></p>
                <?php endif; ?>
            <?php endif; ?>

<?php get_footer(); ?>