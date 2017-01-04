<?php
get_header(); ?>

<div class="content-block blog-1">
    <div class="container text-center">
        <div class="underlined-title">
            <h1><?php echo get_theme_mod( 'blocks_blog_1_title', __( 'Our Blog', 'pinegrow' ) ); ?></h1>
            <hr>
            <h2><?php echo get_theme_mod( 'blocks_blog_1_subtitle', __( 'The latest news & posts', 'pinegrow' ) ); ?></h2>
        </div>
        <?php if ( have_posts() ) : ?>
            <div class="col-sm-10 col-sm-offset-1">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="post">
                        <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                        <?php the_post_thumbnail( 'large', array(
                                'class' => 'img-responsive'
                        ) ); ?>
                        <?php the_content(); ?>
                        <div class="">
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-lg btn-primary"><?php _e( 'Read More', 'pinegrow' ); ?></a>
                            <p class="small text-muted text-uppercase"><?php _e( 'POSTED BY', 'pinegrow' ); ?> <?php the_author_link(); ?> <?php _e( 'IN', 'pinegrow' ); ?> <?php blocks_the_category() ?> <?php _e( 'ON', 'pinegrow' ); ?> <?php the_date(); ?></p>
                        </div>
                    </div>
                    <hr>
                <?php endwhile; ?>
                <?php wp_bootstrap_pagination( array(
                        'previous_string' => '<span class="fa fa-angle-double-left"></span>',
                        'next_string' => '<span class="fa fa-angle-double-right"></span>'
                ) ); ?>
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'pinegrow' ); ?></p>
        <?php endif; ?>
        <!-- /.col-sm-10 -->
    </div>
    <!-- /.container -->
</div>            

<?php get_footer(); ?>