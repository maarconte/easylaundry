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
<div class="container">
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
        <?php $meta_tel_contact = get_theme_mod('tel_contact');
                            if ($meta_tel_contact == '') {
                                echo ' ';
                                   } else {
                                echo  '<span class="pl-3 pr-3 info-header info-header-tel">'.$meta_tel_contact.'</span>';
                                   }
        ?>

        <?php $meta_email_contact = get_theme_mod('email_contact');
                            if ($meta_email_contact == '') {
                                echo ' ';
                                   } else {
                                echo  '<span class="pl-3 pr-3 info-header info-header-email">'.$meta_email_contact.'</span>';
                                   }
        ?>
    </div>
<div class="ml-auto">
    <a class="btn btn-outline-primary mr-2" href="https://easylaundry.fr/boutique">nous contacter</a>
    <a class="btn btn-primary" href="https://easylaundry.fr/boutique">un mois d'essai</a>
</div>
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
