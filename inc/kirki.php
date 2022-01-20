<?php
define( 'NEWSBOX_CUSTOMIZER_ID', 'newsbox_customizer_settings' );
define( 'NEWSBOX_CUSTOMIZER_PANEL_ID', 'newsbox_customizer_panel' );
if ( class_exists( 'kirki' ) ) {
    //======= config settings ====
    Kirki::add_config( NEWSBOX_CUSTOMIZER_ID, array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ) );
    //======== panel settings========
    Kirki::add_panel( NEWSBOX_CUSTOMIZER_PANEL_ID, array(
        'priority'    => 10,
        'title'       => esc_html__( 'NEWSBOX SETTINGS', 'newsbox' ),
        'description' => esc_html__( 'newsBox settings', 'newsbox' ),
    ) );
   
    // ======================= header section =========================
    Kirki::add_section( 'newsbox_header_id', array(
        'title'    => esc_html__( 'Header', 'newsbox' ),
        'panel'    => NEWSBOX_CUSTOMIZER_PANEL_ID,
        'priority' => 160,
    ) );
    Kirki::add_field( NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'image',
        'settings'    => 'newsbox_header_fav_icon',
        'label'       => esc_html__( 'Favicon', 'newsbox' ),
        'description' => esc_html__( 'Favicon', 'newsbox' ),
        'section'     => 'newsbox_header_id',
        'default'     => '10',
    ] );
    Kirki::add_field( NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'image',
        'settings'    => 'newsbox_header_logo',
        'label'       => esc_html__( 'Logo', 'newsbox' ),
        'description' => esc_html__( 'Logo', 'newsbox' ),
        'section'     => 'newsbox_header_id',
        'default'     => '10',
    ] );
    Kirki::add_field( NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'image',
        'settings'    => 'newsbox_header_ads_img',
        'label'       => esc_html__( 'Ads', 'newsbox' ),
        'description' => esc_html__( 'Ads', 'newsbox' ),
        'section'     => 'newsbox_header_id',
        'default'     => '10',
    ] );

    //========================== banner section =========================================
    Kirki::add_section( 'newsbox_banner_id', array(
        'title'    => esc_html__( 'Home Page', 'newsbox' ),
        'panel'    => NEWSBOX_CUSTOMIZER_PANEL_ID,
        'priority' => 160,
    ) );
    //============= banner controls ===============

    //-------- background Image contor ---------
    Kirki::add_field( NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'text',
        'settings'    => 'newsbox_breaking_news',
        'label'       => esc_html__( 'News Ticker Title', 'newsbox' ),
        'description' => esc_html__( 'Trending', 'newsbox' ),
        'section'     => 'newsbox_banner_id',
        'default'     => '10',
    ] );
    Kirki::add_field( NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'image',
        'settings'    => 'newsbox_all_the_news_add',
        'label'       => esc_html__( 'All News Section Add Image', 'newsbox' ),
        'description' => esc_html__( '360 * 370', 'newsbox' ),
        'section'     => 'newsbox_banner_id',
        'default'     => '10',
    ] );
    Kirki::add_field( NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'text',
        'settings'    => 'newsbox_all_the_news_add_link',
        'label'       => esc_html__( 'All News Section Add Image', 'newsbox' ),
        'description' => esc_html__( '360 * 370', 'newsbox' ),
        'section'     => 'newsbox_banner_id',
        'default'     => 'https://rayhanrahman25.github.io/rayhan/',
    ] );

    //========================== banner section =========================================
    Kirki::add_section( 'newsbox_footer_id', array(
        'title'    => esc_html__( 'Footer', 'newsbox' ),
        'panel'    => NEWSBOX_CUSTOMIZER_PANEL_ID,
        'priority' => 160,
    ) );
    Kirki::add_field( NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'image',
        'settings'    => 'newsbox_footer_logo',
        'label'       => esc_html__( 'Footer Logo', 'newsbox' ),
        'description' => esc_html__( 'Upload Logo', 'newsbox' ),
        'section'     => 'newsbox_footer_id',
        'default'     => '10',
    ] );
    Kirki::add_field( NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'image',
        'settings'    => 'newsbox_footer_ad',
        'label'       => esc_html__( 'Footer Ad', 'newsbox' ),
        'description' => esc_html__( '1260 * 370', 'newsbox' ),
        'section'     => 'newsbox_footer_id',
        'default'     => '10',
    ] );
    
    Kirki::add_field(   NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Specialization', 'newsbox' ),
        'section'     => 'newsbox_footer_id',
        'priority'    => 10,
        'settings'    => 'footer_nav_repeater_settings',
        'button_label' => esc_html__('Add New Navigation', 'newsbox' ),
        'row_label' => [
            'type'  => 'field',
            'value' => esc_html__( 'Navigation', 'newsbox' ),
            'field' => 'footer_nav_field',
        ],
        'fields' => [
            'navigation_title' => [
                'type'        => 'text',
                'label'       => esc_html( 'Navgation Name', 'newsbox' ),
                'default'=> 'Home',
            ],
            'navigation_link'=>[
                'type'        => 'text',
                'label'       => esc_html( 'Navigation Link', 'newsbox' ),
                'default'=> __('https://rayhanr.com'), 
            ]
        ]
    ] );

    Kirki::add_field(   NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Social Links', 'newsbox' ),
        'section'     => 'newsbox_footer_id',
        'priority'    => 10,
        'settings'    => 'footer_sl_settings',
        'button_label' => esc_html__('Add New Social Link', 'newsbox' ),
        'row_label' => [
            'type'  => 'field',
            'value' => esc_html__( 'Socail Links', 'newsbox' ),
            'field' => 'footer_sl_set',
        ],
        'fields' => [
            'sl_title' => [
                'type'        => 'text',
                'label'       => esc_html( 'Social Title', 'newsbox' ),
                'default'=> 'Home',
            ],
            'sl_class_name'=>[
                'type'        => 'text',
                'label'       => esc_html( 'Main Title', 'newsbox' ),
                'default'=> __('https://rayhanr.com'), 
            ],
            'sl_class_link'=>[
                'type'        => 'link',
                'label'       => esc_html( 'Main Title', 'newsbox' ),
                'default'=> __('https://rayhanr.com'), 
            ]
        ]
    ] );
    Kirki::add_field( NEWSBOX_CUSTOMIZER_ID, [
        'type'        => 'textarea',
        'settings'    => 'newsbox_footer_des',
        'label'       => esc_html__( 'Footer Description', 'newsbox' ),
        'description' => esc_html__( '', 'newsbox' ),
        'section'     => 'newsbox_footer_id',
        'default'     => 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. ',
    ] );
    } 