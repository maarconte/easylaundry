<?php
/**
 * Add your own custom functions here
 * For example, your shortcodes...
 *
 */


/*==================================================================================
 SHORTCODES
==================================================================================*/


/* BUTTON
/––––––––––––––––––––––––*/
// Usage: [button link="https://twitter.com" text="Twitter"]
function shortcode_button($atts) {
  $link = $atts['link'];
  $text = $atts['text'];
  return '<a href="'.$link.'" class="button">'.$text.'</a>';
}
add_shortcode('button', 'shortcode_button');

// Logo du site
add_theme_support(
  'custom-logo', array(
      'flex-height' => true,
  )
);

// Page d'options
$args = array(

	/* (string) The title displayed on the options page. Required. */
	'page_title' => 'Coordonées',

	/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
	'menu_title' => 'Coordonées',

	/* (string) The URL slug used to uniquely identify this options page.
	Defaults to a url friendly version of menu_title */
	'menu_slug' => '',

	/* (string) The capability required for this menu to be displayed to the user. Defaults to edit_posts.
	Read more about capability here: http://codex.wordpress.org/Roles_and_Capabilities */
	'capability' => 'edit_posts',

	/* (int|string) The position in the menu order this menu should appear.
	WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
	Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
	Defaults to bottom of utility menu items */
	'position' => '50',

	/* (string) The slug of another WP admin page. if set, this will become a child page. */
	'parent_slug' => '',

	/* (string) The icon class for this menu. Defaults to default WordPress gear.
	Read more about dashicons here: https://developer.wordpress.org/resource/dashicons/ */
	'icon_url' => false,

	/* (boolean) If set to true, this options page will redirect to the first child page (if a child page exists).
	If set to false, this parent page will appear alongside any child pages. Defaults to true */
	'redirect' => true,

	/* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2').
	Defaults to 'options'. Added in v5.2.7 */
	'post_id' => 'coo',

	/* (boolean)  Whether to load the option (values saved from this options page) when WordPress starts up.
	Defaults to false. Added in v5.2.8. */
	'autoload' => false,

	/* (string) The update button text. Added in v5.3.7. */
	'update_button'		=> __('Update', 'acf'),

	/* (string) The message shown above the form on submit. Added in v5.6.0. */
	'updated_message'	=> __("Options Updated", 'acf'),

);
/* if(function_exists('acf_add_options_page') ) {
    acf_add_options_page($args);
} */



function customize_contact( $wp_customize ) {

    $wp_customize->add_section( 'contact_section' , array(
        'title'    => 'Coordonnées',
        'priority' => 30
    ) );   

    $wp_customize->add_setting( 'tel_contact' , array(
        'default' =>''
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_contact', array(
        'label' => __( 'Téléphone', 'stanlee' ),
        'section'  => 'contact_section',
        'settings' => 'tel_contact',
    ) ) );


    $wp_customize->add_setting( 'email_contact' , array(
        'default' =>''
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_contact', array(
        'label' => __( 'Email', 'stanlee' ),
        'section'  => 'contact_section',
        'settings' => 'email_contact',
	) ) );
	
	$wp_customize->add_setting( 'adresse_contact' , array(
        'default' =>''
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'adresse_contact', array(
	'label' => __( 'Adresse', 'stanlee' ),
        'section'  => 'contact_section',
        'settings' => 'adresse_contact',
    ) ) );

}
add_action( 'customize_register', 'customize_contact'); 