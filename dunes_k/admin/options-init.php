<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "dunes_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'dunes_options',
        'use_cdn' => TRUE,
        'display_name' => 'Dunes Options',
        'display_version' => FALSE,
        'page_slug' => 'dunes_theme',
        'page_title' => 'Theme Options',
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Theme Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );



    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */


    /*
    Redux::setSection( $opt_name, array(
        'title' => __( 'General', 'dunes_k' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'dunes_k' ),
        'icon'  => 'el el-home'
    ) );
    */
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Services Page', 'dunes_k' ),
        'id'     => 'basic',
        'desc'   => __( 'Set the content at the top and bottom of the services page.', 'dunes_k' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'textarea',
                'title'    => __( 'Top of the Services Page', 'dunes_k' ),
                'desc'     => __( 'This content shows up at the top of the services page. HTML is allowed.', 'dunes_k' ),
                //'subtitle' => __( 'Example subtitle.', 'dunes_k' ),
            )
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Bottom of Page', 'dunes_k' ),
        //'desc'       => __( 'For full documentation on this field, visit: ', 'dunes_k' ) . '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'services-footer',
                'type'     => 'textarea',
                'title'    => __( 'Bottom of page', 'dunes_k' ),
                //'subtitle' => __( 'Subtitle', 'dunes_k' ),
                //'desc'     => __( 'Field Description', 'dunes_k' ),
                //'default'  => 'Default Text',
            ),
        )
    ) );

    /*
     * <--- END SECTIONS
     */
