
        </section>
        <section class="content-block-nopad bg-deepocean footer-wrap-1-3">
            <div class="container footer-1-3">
                <div class="col-md-4 pull-left">
                    <?php echo wp_get_attachment_image( get_theme_mod( 'blocks_footer_1_3_image' ), null, null, array(
                            'class' => 'brand-img img-responsive'
                    ) ) ?>
                    <ul class="social social-light">
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_facebook' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_facebook', __( '#', 'pinegrow' ) ); ?>"><i class="fa fa-2x fa-facebook"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_twitter' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_twitter', __( '#', 'pinegrow' ) ); ?>"><i class="fa fa-2x fa-twitter"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_google' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_google', __( '#', 'pinegrow' ) ); ?>"><i class="fa fa-2x fa-google-plus"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_pinterest' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_pinterest', __( '#', 'pinegrow' ) ); ?>"><i class="fa fa-2x fa-pinterest"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_behance' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_behance', __( '#', 'pinegrow' ) ); ?>"><i class="fa fa-2x fa-behance"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_dribbble' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_dribbble', __( '#', 'pinegrow' ) ); ?>"><i class="fa fa-2x fa-dribbble"></i></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <!-- /.social -->
                </div>
                <div class="col-md-3 pull-right">
                    <p class="address-bold-line"><?php echo get_theme_mod( 'blocks_footer_1_3_title', 'We <i class="fa fa-heart pomegranate"></i> our amazing customers' ); ?></p>
                    <p class="address small"><?php echo get_theme_mod( 'blocks_footer_1_3_text', '123 Anywhere Street,<br> London, LO4 6ON' ); ?></p>
                </div>
                <div class="col-xs-12 footer-text">
                    <p><?php echo get_theme_mod( 'blocks_footer_1_3_bottom_text', 'Please take a few minutes to read our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>' ); ?></p>
                </div>
            </div>
            <!-- /.container -->
        </section>                           
        <?php wp_footer(); ?>
    </body>     
</html>
