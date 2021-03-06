<?php
/**
 * functions to output ACFs flexible blocks (called "blocks" in undefined)
 *
 * @author     ThatMuch
 * @version    0.1.0
 * @since      undefined 0.1.0
 *
 *
 */


/*==================================================================================
  SETTINGS/SETUP
==================================================================================*/


/* ADD TITLES BLOCKS
/––––––––––––––––––––––––––––––––––––*/
// adds the title sub-field to the ACF-row. Edit `name` at `add_filter` to match your ACF-value.
// » https://www.advancedcustomfields.com/resources/acf-fields-flexible_content-layout_title/
function yupeach_blocks_backendtitle( $title, $field, $layout, $i ) {
  if (!empty(get_sub_field('title'))) {
  	$title = get_sub_field('title')." ($title)";
  }
  return $title;
}
add_filter('acf/fields/flexible_content/layout_title/name=blocks', 'yupeach_blocks_backendtitle', 10, 4);


/* GATHER BLOCKS
/––––––––––––––––––––––––*/
function yupeach_blocks() {
  ob_start('sanitize_output');
  if (have_rows('blocks')):
    while (have_rows('blocks')): the_row();
    if (get_row_layout() == 'text') : yupeach_block_text(); endif;
    if (get_row_layout() == 'text_image') : yupeach_block_text_img(); endif;
    if (get_row_layout() == 'link') : yupeach_block_link(); endif;
    if (get_row_layout() == 'services') : yupeach_block_services(); endif;
    if (get_row_layout() == 'team') : yupeach_block_team(); endif;
    if (get_row_layout() == 'portfolio') : yupeach_block_portfolio(); endif;
    if (get_row_layout() == 'testimonials') : yupeach_block_testimonials(); endif;
    if (get_row_layout() == 'price') : yupeach_block_price(); endif;
    if (get_row_layout() == 'logos') : yupeach_block_logos(); endif;
    if (get_row_layout() == 'carousel') : yupeach_block_carousel(); endif;
    if (get_row_layout() == 'gallery') : yupeach_block_gallery(); endif;
    if (get_row_layout() == 'contact') : yupeach_block_contact(); endif;
    if (get_row_layout() == 'stats') : yupeach_block_stats(); endif;
    if (get_row_layout() == 'faq') : yupeach_block_faq(); endif;
    if (get_row_layout() == 'sets') : yupeach_block_set(); endif;
    if (get_row_layout() == 'concept') : yupeach_block_concept(); endif;
    if (get_row_layout() == 'promo') : yupeach_block_promo(); endif;
    endwhile;
  endif;
  return ob_get_flush();
}


/*==================================================================================
  BLOCKS
==================================================================================*/
// add your custom blocks here...
/* TEXT
/––––––––––––––––––––––––*/
function yupeach_block_text() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-text.php');
  return ob_get_flush();
}
/* TEXT + IMAGE
/––––––––––––––––––––––––*/
function yupeach_block_text_img() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-text-image.php');
  return ob_get_flush();
}
/* LINK
/––––––––––––––––––––––––*/
function yupeach_block_link() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-link.php');
  return ob_get_flush();
}
/* SERVICES
/––––––––––––––––––––––––*/
function yupeach_block_services() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-services.php');
  return ob_get_flush();
}
/* TEAM
/––––––––––––––––––––––––*/
function yupeach_block_team() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-team.php');
  return ob_get_flush();
}
/* PORTFOLIO
/––––––––––––––––––––––––*/
function yupeach_block_portfolio() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-portfolio.php');
  return ob_get_flush();
}
/* TESTIMONIALS
/––––––––––––––––––––––––*/
function yupeach_block_testimonials() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-testimonials.php');
  return ob_get_flush();
}

/* PRICE
/––––––––––––––––––––––––*/
function yupeach_block_price() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-price.php');
  return ob_get_flush();
}
/* CONCEPT
/––––––––––––––––––––––––*/
function yupeach_block_concept() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-concept.php');
  return ob_get_flush();
}

/* PROMO
/––––––––––––––––––––––––*/
function yupeach_block_promo() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-promo.php');
  return ob_get_flush();
}

/* LOGOS
/––––––––––––––––––––––––*/
function yupeach_block_logos() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-logos.php');
  return ob_get_flush();
}
/* CAROUSEL
/––––––––––––––––––––––––*/
function yupeach_block_carousel() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-carousel.php');
  return ob_get_flush();
}
/* GALLERY
/––––––––––––––––––––––––*/
function yupeach_block_gallery() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-gallery.php');
  return ob_get_flush();
}
/* CONTACT
/––––––––––––––––––––––––*/
function yupeach_block_contact() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-contact.php');
  return ob_get_flush();
}
/* STATS
/––––––––––––––––––––––––*/
function yupeach_block_stats() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-stats.php');
  return ob_get_flush();
}
/* FAQ
/––––––––––––––––––––––––*/
function yupeach_block_faq() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-faq.php');
  return ob_get_flush();
}
/* Set
/––––––––––––––––––––––––*/
function yupeach_block_set() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/temp-blocks-set.php');
  return ob_get_flush();
}
?>