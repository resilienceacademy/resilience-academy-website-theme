<?php

// Add scripts and stylesheets
function resilienceacademy_scripts()
{
    wp_enqueue_style('flexboxgrid', get_template_directory_uri() . '/css/flexboxgrid.min.css');
    wp_enqueue_style('flex', get_template_directory_uri() . '/css/flex.css');
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('contact-us', get_template_directory_uri() . '/css/includes/contact-us.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'event', get_template_directory_uri() . '/js/mini-event-calendar.min.js', array(), '', true );

}

add_action('wp_enqueue_scripts', 'resilienceacademy_scripts');


// WordPress Titles
add_theme_support('title-tag');


// Custom settings
function custom_settings_add_menu()
{
    add_menu_page('Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}

add_action('admin_menu', 'custom_settings_add_menu');


// Create Custom Global Settings
function custom_settings_page()
{ ?>
    <div class="wrap">
        <h1>Custom Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('section');
            do_settings_sections('theme-options');
            submit_button();
            ?>
        </form>
    </div>
<?php }


/**
 * Include navigation menus
 */

function register_resilienceacademy_menu()
{
    register_nav_menu('resilienceacademy-menu', __('Resilience Academy Menu'));
}

add_action('init', 'register_resilienceacademy_menu');


// Twitter
function setting_twitter()
{ ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>"/>
<?php }

// Instagram
function setting_instagram()
{ ?>
    <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>"/>
<?php }


// Facebook
function setting_facebook()
{ ?>
    <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>"/>
<?php }


// Contact us shortcode
function setting_contactus()
{ ?>
    <input type="text" name="contactus" id="contactus" value="<?php echo get_option('contactus'); ?>"/>
<?php }

// Subscribe shortcode
function setting_subscribe()
{ ?>
    <input type="text" name="subscribe" id="subscribe" value="<?php echo get_option('subscribe'); ?>"/>
<?php }

// Submitted articles view  shortcode
function setting_articles()
{ ?>
    <input type="text" name="articles" id="articles" value="<?php echo get_option('articles'); ?>"/>
<?php }

/**
 * Global settings for the theme
*/
function custom_settings_page_setup()
{
    add_settings_section('section', 'All Settings', null, 'theme-options');

    add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
    register_setting('section', 'twitter');

    add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');
    register_setting('section', 'instagram');

    add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
    register_setting('section', 'facebook');

    add_settings_field('contactus', 'Shortcode for contact us plugin', 'setting_contactus', 'theme-options', 'section');
    register_setting('section', 'contactus');
    add_settings_field('subscribe', 'Shortcode for email subscription plugin', 'setting_subscribe', 'theme-options', 'section');
    register_setting('section', 'subscribe');
    add_settings_field('articles', 'Shortcode for submitted articles view plugin', 'setting_articles', 'theme-options', 'section');
    register_setting('section', 'articles');

}

add_action('admin_init', 'custom_settings_page_setup');





// Support Featured Images
add_theme_support('post-thumbnails');


// Announcements Post Type
function create_announcements_post()
{
    register_post_type('announcements',
        array(
            'labels' => array(
                'name' => __('Announcements'),
                'singular_name' => __('Announcement'),
            ),
            'public' => true,
            'menu_icon' => 'dashicons-megaphone',
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        ));
}

add_action('init', 'create_announcements_post');


// Events Post Type
function create_events_post()
{
    register_post_type('events',
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event'),
            ),
            'public' => true,
            'menu_icon' => 'dashicons-calendar-alt',
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        ));
}

add_action('init', 'create_events_post');


// Team Post Type
function create_team_post()
{
    register_post_type('team',
        array(
            'labels' => array(
                'name' => __('Team'),
                'singular_name' => __('Team'),
            ),
            'public' => true,
            'menu_icon' => 'dashicons-groups',
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        ));
}

add_action('init', 'create_team_post');


function prefix_send_email_to_admin() {
    /**
     * At this point, $_GET/$_POST variable are available
     *
     * We can do our normal processing here
     */

    $email = $_POST['email'];

    // Sanitize the POST field
    // Generate email content
    // Send to appropriate email
}

add_action( 'admin_post_nopriv_subscribe_form', 'prefix_send_email_to_admin' );
add_action( 'admin_post_subscribe_form', 'prefix_send_email_to_admin' );