<?php

function my_more_link($more_link, $more_link_text) {
    $more_link="<div class='more-wrapper'>{$more_link}</div>";
    return $more_link;
	//return str_replace($more_link_text, "Learn More", $more_link);
}
add_filter('the_content_more_link', 'my_more_link', 10, 2);

if ( ! function_exists( 'pinegrow_setup' ) ) :

function pinegrow_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'pinegrow', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-header' );
    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'pinegrow' ),
        'social'  => __( 'Social Links Menu', 'pinegrow' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // pinegrow_setup

add_action( 'after_setup_theme', 'pinegrow_setup' );


if ( ! function_exists( 'pinegrow_init' ) ) :

function pinegrow_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('services', array(
        'labels' => 
            array(
                'name' => __( 'Services', 'pinegrow' ),
                'singular_name' => __( 'Service', 'pinegrow' )
            ),
        'public' => true,
        'supports' => array( 'title', 'excerpt', 'editor' ),
        'has_archive' => true,
        'show_in_menu' => true,
        'menu_position' => 20
    ));

    register_post_type('testimonials', array(
        'labels' => 
            array(
                'name' => __( 'Testimonials', 'pinegrow' ),
                'singular_name' => __( 'Testimonial', 'pinegrow' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt' ),
        'has_archive' => true,
        'show_in_menu' => true,
        'menu_position' => 20
    ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // pinegrow_setup

add_action( 'init', 'pinegrow_init' );


if ( ! function_exists( 'pinegrow_widgets_init' ) ) :

function pinegrow_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pinegrow_widgets_init' );
endif;// pinegrow_widgets_init



if ( ! function_exists( 'pinegrow_customize_register' ) ) :

function pinegrow_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    require_once "components/pg.blocks.wp/inc/blocks/wp_blocks_customizer_controls.php";

    $wp_customize->add_section( 'blocks_footer_1_3', array(
        'title' => __( 'Footer 1-3', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'pinegrow' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'We <i class="fa fa-heart pomegranate"></i> our amazing customers'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_text', array(
        'label' => __( 'Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'Please take a few minutes to read our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_bottom_text', array(
        'label' => __( 'Bottom Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_section( 'blocks_promo3', array(
        'title' => __( 'Promo 3', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_promo3_bck', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_promo3_bck', array(
        'label' => __( 'Background image', 'pinegrow' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_promo3'
    ) ) );

    $wp_customize->add_setting( 'blocks_promo3_title', array(
        'type' => 'theme_mod',
        'default' => 'Rocket Fuel for Web Designers'
    ));

    $wp_customize->add_control( 'blocks_promo3_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_promo3'
    ));

    $wp_customize->add_setting( 'blocks_promo3_subtitle', array(
        'type' => 'theme_mod',
        'default' => 'Pinegrow Blocks'
    ));

    $wp_customize->add_control( 'blocks_promo3_subtitle', array(
        'label' => __( 'Subtitle', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_promo3'
    ));

    $wp_customize->add_setting( 'blocks_promo3_button_label', array(
        'type' => 'theme_mod',
        'default' => 'Contact us now for free 30 min consultation'
    ));

    $wp_customize->add_control( 'blocks_promo3_button_label', array(
        'label' => __( 'Button label', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_promo3'
    ));

    $wp_customize->add_setting( 'blocks_promo3_button_url', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_promo3_button_url', array(
        'label' => __( 'Button url', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_promo3'
    ));

    $wp_customize->add_section( 'blocks_content_3_7', array(
        'title' => __( 'About Us Title', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_content_3_7_title', array(
        'type' => 'theme_mod',
        'default' => 'About Us'
    ));

    $wp_customize->add_control( 'blocks_content_3_7_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_content_3_7'
    ));

    $wp_customize->add_setting( 'blocks_content_3_7_text', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_3_7_text', array(
        'label' => __( 'Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_content_3_7'
    ));

    $wp_customize->add_section( 'legal_services', array(
        'title' => __( 'Legal Services', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'legal_services_title', array(
        'type' => 'theme_mod',
        'default' => 'Our Legal Services'
    ));

    $wp_customize->add_control( 'legal_services_title', array(
        'type' => 'text',
        'section' => 'legal_services'
    ));

    $wp_customize->add_section( 'testimonials', array(
        'title' => __( 'Testimonials', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'testimonials_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_BlocksContentDropdown_Customize_Control( $wp_customize, 'testimonials_source', array(
        'label' => __( 'Testimonals Source', 'pinegrow' ),
        'type' => 'custom',
        'section' => 'testimonials'
    ) ) );

    $wp_customize->add_setting( 'testimonials_title', array(
        'type' => 'theme_mod',
        'default' => 'Testimonials'
    ));

    $wp_customize->add_control( 'testimonials_title', array(
        'label' => __( 'Testimonials Title', 'pinegrow' ),
        'type' => 'text',
        'section' => 'testimonials',
        'input_attrs' => 
            array(
                'placeholder' => 'Testimonials'
            )
    ));

    $wp_customize->add_setting( 'testimonials_subtitle', array(
        'type' => 'theme_mod',
        'default' => 'What our valued clients say about us.'
    ));

    $wp_customize->add_control( 'testimonials_subtitle', array(
        'label' => __( 'Sub Title', 'pinegrow' ),
        'type' => 'text',
        'section' => 'testimonials'
    ));

    $wp_customize->add_section( 'blocks_team_1_1', array(
        'title' => __( 'Team 1-1', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_team_1_1_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_BlocksContentDropdown_Customize_Control( $wp_customize, 'blocks_team_1_1_source', array(
        'label' => __( 'Content source', 'pinegrow' ),
        'type' => 'custom',
        'section' => 'blocks_team_1_1'
    ) ) );

    $wp_customize->add_setting( 'blocks_team_1_1_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_1_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_1'
    ));

    $wp_customize->add_section( 'blocks_contact_3', array(
        'title' => __( 'Contact 3', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_contact_3_title', array(
        'type' => 'theme_mod',
        'default' => 'How to find us'
    ));

    $wp_customize->add_control( 'blocks_contact_3_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_contact_3'
    ));

    $wp_customize->add_setting( 'blocks_contact_3_text', array(
        'type' => 'theme_mod',
        'default' => 'We are easy to find in the heart of London\'s business district, just a short walk from several Tube Stations.'
    ));

    $wp_customize->add_control( 'blocks_contact_3_text', array(
        'label' => __( 'Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_contact_3'
    ));

    $wp_customize->add_setting( 'blocks_contact_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_contact_3_image', array(
        'label' => __( 'Image', 'pinegrow' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_contact_3'
    ) ) );

    $wp_customize->add_section( 'blocks_footer_1_3', array(
        'title' => __( 'Footer 1-3', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'pinegrow' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'We <i class="fa fa-heart pomegranate"></i> our amazing customers'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London, LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_text', array(
        'label' => __( 'Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'Please take a few minutes to read our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_bottom_text', array(
        'label' => __( 'Bottom Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3', array(
        'title' => __( 'Footer 1-3', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'pinegrow' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'We <i class="fa fa-heart pomegranate"></i> our amazing customers'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_text', array(
        'label' => __( 'Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'Please take a few minutes to read our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_bottom_text', array(
        'label' => __( 'Bottom Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3', array(
        'title' => __( 'Footer 1-3', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'pinegrow' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'We <i class="fa fa-heart pomegranate"></i> our amazing customers'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_text', array(
        'label' => __( 'Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'Please take a few minutes to read our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_bottom_text', array(
        'label' => __( 'Bottom Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_section( 'blocks_blog_1', array(
        'title' => __( 'Blog 1', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_blog_1_title', array(
        'type' => 'theme_mod',
        'default' => 'Our Blog'
    ));

    $wp_customize->add_control( 'blocks_blog_1_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_blog_1'
    ));

    $wp_customize->add_setting( 'blocks_blog_1_subtitle', array(
        'type' => 'theme_mod',
        'default' => 'The latest news & posts'
    ));

    $wp_customize->add_control( 'blocks_blog_1_subtitle', array(
        'label' => __( 'Subtitle', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_blog_1'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3', array(
        'title' => __( 'Footer 1-3', 'pinegrow' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'pinegrow' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'pinegrow' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'We <i class="fa fa-heart pomegranate"></i> our amazing customers'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_text', array(
        'label' => __( 'Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'Please take a few minutes to read our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_bottom_text', array(
        'label' => __( 'Bottom Text', 'pinegrow' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'pinegrow_customize_register' );
endif;// pinegrow_customize_register


if ( ! function_exists( 'pinegrow_enqueue_scripts' ) ) :
    function pinegrow_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);

    wp_deregister_script( 'script-1' );
    wp_enqueue_script( 'script-1', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    wp_deregister_script( 'bskitscripts' );
    wp_enqueue_script( 'bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', false, null, true);

    wp_deregister_script( 'foundation' );
    wp_enqueue_script( 'foundation', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.js', false, null, true);

    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/components/pg.blocks.wp/js/plugins.js', false, null, true);

    wp_deregister_script( 'bskitscripts' );
    wp_enqueue_script( 'bskitscripts', get_template_directory_uri() . '/components/pg.blocks.wp/js/bskit-scripts.js', false, null, true);

    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/components/pg.blocks/js/plugins.js', false, null, true);

    wp_deregister_script( 'bskitscripts' );
    wp_enqueue_script( 'bskitscripts', get_template_directory_uri() . '/components/pg.blocks/js/bskit-scripts.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', false, null, 'all');

    wp_deregister_style( 'stylelibrary' );
    wp_enqueue_style( 'stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', false, null, 'all');

    wp_deregister_style( 'plugins' );
    wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

    wp_deregister_style( 'blocks' );
    wp_enqueue_style( 'blocks', get_template_directory_uri() . '/css/blocks.css', false, null, 'all');

    wp_deregister_style( 'foundation' );
    wp_enqueue_style( 'foundation', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.css', false, null, 'all');

    wp_deregister_style( 'custom' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pinegrow_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "components/pg.blocks.wp/inc/blocks/wp_blocks.php";
require_once "inc/bootstrap/wp_bootstrap_pagination.php";

    /* Pinegrow generated Include Resources End */

function my_enqueue_scripts()
{
    wp_deregister_style( 'style_css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css', false, null, 'all');
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

?>