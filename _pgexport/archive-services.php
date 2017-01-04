<?php
get_header(); ?>

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
        <ul>
            <?php while ( $qryServices->have_posts() ) : $qryServices->the_post(); ?>
                <li class="<?php echo ($shortLink==wp_get_shortlink()?"active":"") ?>">
                    <a href="<?php echo esc_url( wp_get_shortlink()); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </nav>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'pinegrow' ); ?></p>
<?php endif; ?>
<section class="archive-services" id="content-3-7" class="content-block content-3-7">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-sm-6">
                        <div class="underlined-title">
                            <h2><?php the_title(); ?></h2>
                            <hr>
                        </div>
                        <div>
                            <?php the_content( __( 'Learn More', 'pinegrow' ), true ); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pinegrow' ); ?></p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>            

<?php get_footer(); ?>