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

     <? $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">
  <a class="navbar-brand mr-auto" href="<?php echo site_url(); ?>">
    <div class="logo" style="background-image: url('<? if($image[0]): echo $image[0]; else: echo get_template_directory_uri()?>/assets/images/stanlee_logo_texte.png<?endif; ?>')"></div>
  <span><?php echo get_theme_mod('name_website');?></span>&nbsp;<i><span class="slogan-header"><?php echo get_theme_mod('slogan_website');?></i></span>
  </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!--     <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="navbar-menu collapse navbar-collapse" id="navbarNavDropdown">
      <?php $libelle_bouton_1 = get_theme_mod('libelle_bouton_1');
$lien_bouton_1 = get_theme_mod('lien_bouton_1');
                                 if ($lien_bouton_1 == '') {
                                 echo ' ';
                                 } else {
                                 echo  '<a href="'.$lien_bouton_1.'" class="btn btn-default mr-2"><i class="far fa-user-circle mr-2"></i>'.$libelle_bouton_1.'</a>';
                                  }
?>

<?php $libelle_bouton_2 = get_theme_mod('libelle_bouton_2');
$lien_bouton_2 = get_theme_mod('lien_bouton_2');
                                 if ($lien_bouton_2 == '') {
                                 echo ' ';
                                 } else {
                                 echo  '<a href="'.$lien_bouton_2.'" class="btn btn-primary"><i class="far fa-user-circle mr-2"></i>'.$libelle_bouton_2.'</a>';
                                  }
?>
    </div>

<!--     <div class="collapse navbar-collapse" id="navbar-content">


        <?php
        /* wp_nav_menu( array(
            'theme_location' => 'mainmenu', // Defined when registering the menu
            'menu_id'        => 'menu-main',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'navbar-nav ml-auto',
            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
        ) ); */
        ?>
    </div> -->
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
