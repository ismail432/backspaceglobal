<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "backspace";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'backspace/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'theme-option',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
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
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
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

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */


    /**********For Theme Option Code is here : Ismail Hossain***************/





Redux::setSection($opt_name, array(
    'title'     => __('Logo Options', 'backspace'),
    'id'        => 'logo-area',
    'fields'    => array(
        array(
            'title'     => __('Upload Logo', 'backspace'),
            'id'        => 'logo-upload',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri(). '/assets/images/logo.png'
            )
        )
     )
));

Redux::setSection($opt_name, array(
    'title'     => __('About Banner Options', 'backspace'),
    'id'        => 'blog-banner-area',
    'fields'    => array(
        array(
            'title'     => __('Blog Banner Title', 'backspace'),
            'id'        => 'blog-banner-title',
            'type'      => 'text',
            'default'   => 'A creative team of professionals who love the digital.'
            ),

        array(
            'title'     => __('Blog Banner Content', 'backspace'),
            'id'        => 'blog-banner-content',
            'type'      => 'editor',
            'default'   => 'Level Level is a full service digital agency consisting of more than 24 professionals. We create and support large-scale websites and offer consultancy services to enterprise clients. We help brands connect to their customers by creating outstanding websites and applications that offer the best user experience on any device.'

        ),
        array(
            'title'     => __('Blog Banner Image', 'backspace'),
            'id'        => 'team-banner-image',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri() . '/assets/images/team-banner.png'
            ),
        ),
     ),
));

Redux::setSection($opt_name, array(
    'title'     => __('About-us-section', 'backspace'),
    'id'        => 'about-area',
    'fields'    => array(
        array(
            'title'     => __('About Subtitle', 'backspace'),
            'id'        => 'about-subtitle',
            'type'      => 'text',
            'default'   => 'OUR STORY'
        ),
        array(
            'title'     => __('About title', 'backspace'),
            'id'        => 'about-title',
            'type'      => 'text',
            'default'   => 'When you believe a thing, believe it all the way, implicitly and unquestionably.'
        ),
        array(
            'title'     => __('About content', 'backspace'),
            'id'        => 'about-content',
            'type'      => 'editor',
            'default'   => 'It is not enough that we build products that function, that are understandable and usable, we also need to build products that bring joy and excitement, pleasure and fun, and, yes, beauty to people’s lives. Creativity is to discover a question that has never been asked. If one brings up an idiosyncratic question, the answer he gives will necessarily be unique as well.'
        ),
        array(
            'title'     => __('About 2nd Subtitle', 'backspace'),
            'id'        => 'about-subtitle-2nd',
            'type'      => 'text',
            'default'   => 'WHAT WE DO'
        ),
        array(
            'title'     => __('About 2nd title', 'backspace'),
            'id'        => 'about-title-2nd',
            'type'      => 'text',
            'default'   => 'Where do new ideas come from? The answer is simple: differences.'
        ),
        array(
            'title'     => __('About 2nd content', 'backspace'),
            'id'        => 'about-content-2nd',
            'type'      => 'editor',
            'default'   => 'It is not enough that we build products that function, that are understandable and usable, to be unique as well.'
        ),
        array(
            'title'     => __('About Link Area head', 'backspace'),
            'id'        => 'about-link-head',
            'type'      => 'text',
            'default'   => 'Strategy'
        ),
        array(
            'title'     => __('About Link Area List', 'backspace'),
            'id'        => 'about-link-list',
            'type'      => 'editor',

        ),
        array(
            'title'     => __('About 2nd Link Area head', 'backspace'),
            'id'        => 'about-link-head-2nd',
            'type'      => 'text',
            'default'   => 'Solutions'
        ),

        array(
            'title'     => __('About Link Area 2nd List', 'backspace'),
            'id'        => 'about-link-list-2nd',
            'type'      => 'editor',

        ),
    )
));

Redux::setSection($opt_name, array(
    'title'     => __('Creative-Section', 'backspace'),
    'id'        => 'creative-image',
    'fields'    => array(
        array(
            'title'     => __('Career bg Upload', 'backspace'),
            'id'        => 'career-bg',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri(). '/assets/images/career-img.png'
            )
        ),
        array(
            'title'     => __('Upload Image', 'backspace'),
            'id'        => 'crea-imag',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri(). '/assets/images/creative-image.png'
            )
        ),
        array(
            'title'     => __('Creative-Heading', 'backspace'),
            'id'        => 'crea-head',
            'type'      => 'text',
            'default'   => 'Grow With the Most Creative Team'
        ),
          array(
              'title'     => __('Creative-Button', 'backspace'),
              'id'        => 'crea-btn',
              'type'      => 'text',
              'default'   => 'View Openings'
          )

    )
));



Redux::setSection($opt_name, array(
    'title'     => __('Service-section', 'backspace'),
    'id'        => 'service-area',
    'fields'    => array(
        array(
            'title'     => __('Blog Banner Title', 'backspace'),
            'id'        => 'service-banner-title',
            'type'      => 'text',
            'default'   => 'A creative team of professionals who love the digital.'
        ),

        array(
            'title'     => __('Blog Banner Content', 'backspace'),
            'id'        => 'service-banner-content',
            'type'      => 'editor',
            'default'   => 'Level Level is a full service digital agency consisting of more than 24 professionals. We create and support large-scale websites and offer consultancy services to enterprise clients. We help brands connect to their customers by creating outstanding websites and applications that offer the best user experience on any device.'

        ),

        array(
            'title'     => __('About Subtitle', 'backspace'),
            'id'        => 'service-subtitle',
            'type'      => 'text',
            'default'   => 'OUR STORY'
        ),
        array(
            'title'     => __('About title', 'backspace'),
            'id'        => 'service-title',
            'type'      => 'text',
            'default'   => 'When you believe a thing, believe it all the way, implicitly and unquestionably.'
        ),
        array(
            'title'     => __('About content', 'backspace'),
            'id'        => 'service-content',
            'type'      => 'editor',
            'default'   => 'It is not enough that we build products that function, that are understandable and usable, we also need to build products that bring joy and excitement, pleasure and fun, and, yes, beauty to people’s lives. Creativity is to discover a question that has never been asked. If one brings up an idiosyncratic question, the answer he gives will necessarily be unique as well.'
        ),
        array(
            'title'     => __('About 2nd Subtitle', 'backspace'),
            'id'        => 'service-subtitle-2nd',
            'type'      => 'text',
            'default'   => 'WHAT WE DO'
        ),
        array(
            'title'     => __('About 2nd title', 'backspace'),
            'id'        => 'service-title-2nd',
            'type'      => 'text',
            'default'   => 'Where do new ideas come from? The answer is simple: differences.'
        ),
        array(
            'title'     => __('About 2nd content', 'backspace'),
            'id'        => 'service-content-2nd',
            'type'      => 'editor',
            'default'   => 'It is not enough that we build products that function, that are understandable and usable, to be unique as well.'
        ),
        array(
            'title'     => __('Career bg Upload', 'backspace'),
            'id'        => 'balb-bg',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri(). '/assets/images/balb-image.png'
            )
        ),
        array(
            'title'     => __('Service Tab Menu', 'backspace'),
            'id'        => 'ser-tab-menu',
            'type'      => 'text',
            'default'   => 'UI/UX Design'
        ),
        array(
            'title'     => __('Tab Image Upload', 'backspace'),
            'id'        => 'ser-tab-img',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri(). '/assets/images/ux-logo.png'
            )
            ),
            array(
                'title'     => __('Tab Content Upload', 'backspace'),
                'id'        => 'ser-tab-content',
                'type'      => 'editor',
                'default'   => 'Want to build your product with a team that establishes a clear design process, meets deadlines, and delivers a spot-on end result? Turn to Intellectsoft’s UI and UX services. Our design team is a small design studio within a large software com.'

        ),
        array(
            'title'     => __('Service Tab Menu-2', 'backspace'),
            'id'        => 'ser-tab-menu-2',
            'type'      => 'text',
            'default'   => 'Web Development'
        ),
        array(
            'title'     => __('Tab Image Upload-2', 'backspace'),
            'id'        => 'ser-tab-img-2',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri(). '/assets/images/ux-logo.png'
            )
        ),
        array(
            'title'     => __('Tab Content Upload-2', 'backspace'),
            'id'        => 'ser-tab-content-2',
            'type'      => 'editor',
            'default'   => 'Want to build your product with a team that establishes a clear design process, meets deadlines, and delivers a spot-on end result? Turn to Intellectsoft’s UI and UX services. Our design team is a small design studio within a large software com.'

        ),
        array(
            'title'     => __('Service Tab Menu-3', 'backspace'),
            'id'        => 'ser-tab-menu-3',
            'type'      => 'text',
            'default'   => 'Web Development'
        ),
        array(
            'title'     => __('Tab Image Upload-3', 'backspace'),
            'id'        => 'ser-tab-img-3',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri(). '/assets/images/ux-logo.png'
            )
        ),
        array(
            'title'     => __('Tab Content Upload-3', 'backspace'),
            'id'        => 'ser-tab-content-3',
            'type'      => 'editor',
            'default'   => 'Want to build your product with a team that establishes a clear design process, meets deadlines, and delivers a spot-on end result? Turn to Intellectsoft’s UI and UX services. Our design team is a small design studio within a large software com.'

        ),
        array(
            'title'     => __('Upload Image', 'backspace'),
            'id'        => 'crea-2-imag',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri(). '/assets/images/creative-image.png'
            )
        ),

        array(
            'title'     => __('Creative-Heading', 'backspace'),
            'id'        => 'crea-2-head',
            'type'      => 'text',
            'default'   => 'Grow With the Most Creative Team'
        ),
        array(
            'title'     => __('Creative-content', 'backspace'),
            'id'        => 'crea-2-content',
            'type'      => 'editor',
            'default'   => 'Grow With the Most Creative Team'
        ),
        array(
            'title'     => __('Creative-Button', 'backspace'),
            'id'        => 'crea-2-btn',
            'type'      => 'text',
            'default'   => 'View Openings'
        )
    )
));



Redux::setSection($opt_name, array(
    'title'     => __('Carrier-section', 'backspace'),
    'id'        => 'carrier-area',
    'fields'    => array(
        array(
            'title'     => __('Carrier Banner Title', 'backspace'),
            'id'        => 'meet-sec-banner',
            'type'      => 'editor',
            'default'   => 'BackspaceBD careers'
        ),
        array(
            'title'     => __('Meet area', 'backspace'),
            'id'        => 'meet-text',
            'type'      => 'editor',
            'default'   => 'BackspaceBD careers'
        ),
      )
    ));


Redux::setSection($opt_name, array(
    'title'     => __('Top Contact Section', 'backspace'),
    'id'        => 'top-contact-area',
    'fields'    => array(
        array(
            'title'     => __('Phone area', 'backspace'),
            'id'        => 'phone-number',
            'type'      => 'editor',
            'default'   => '+8801711124445'
        ),
        array(
            'title'     => __('Email area', 'backspace'),
            'id'        => 'email-id',
            'type'      => 'editor',
            'default'   => 'example_example@gmail.com'
        ),
    )
));





/**********For Theme Option Code End : Ismail Hossain***************/






    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

