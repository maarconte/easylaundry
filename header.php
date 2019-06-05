<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 */
?>
<!DOCTYPE html>
<html <? language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WGV22WN');</script>
<!-- End Google Tag Manager -->

    <? yupeach_gtm('head') ?>
    <!--=== OPEN-GRAPH TAGS ===-->
    <? yupeach_ogtags() ?>
    <!--=== WP HEAD ===-->
    <? wp_head(); ?>

  </head>

  <body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGV22WN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <? yupeach_gtm('body') ?>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
            <?php
                        wp_nav_menu( array( 
                        'theme_location' => 'menu_header', 
                        'container_class' => 'custom-menu-class') 
                    ); 
            ?>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ml-auto collapse navbar-collapse" id="navbarSupportedContent-4">
            <a class="btn btn-outline-primary mr-2 " href="mailto:san@antonio.net">Nous contacter</a>
            <a class="btn btn-primary" href="<?php echo site_url(); ?>/#code-promo">un mois d'essai</a>
        </div>
</nav>

            
<script>
	$(window).on("load, resize", function() {
    var viewportWidth = $(window).width();
    if (viewportWidth > 891) {
            $('#navbarNavDropdown').removeClass('show');
    }
});
</script>
<?php if ( is_home()): ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
<?php endif; ?>
    <div id="content" class="site-content">
