<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 */
?>
     <? $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

	</div><!-- #content -->
    <footer class="footer">
      <div class="container">
        <div class="row inner">
          <div class="col-sm-2">
            <div class="logo" style="background-image: url('<? if($image[0]): echo $image[0]; else: echo get_template_directory_uri()?>/assets/images/stanlee_logo_texte.png<?endif; ?>')"></div>
          </div>

       <? if(is_active_sidebar('footer-1')){
      dynamic_sidebar('footer-1');
        } ?>
        </div>
      </div>
<!--     <div class="credits">
      <div class="container">
      <div class="inner">
      Un site crée par <a href="https://thatmuch.fr" target="_blank" rel="noopener noreferrer"><strong>ThatMuch</strong></a>
      </div>
      </div>
    </div> -->

    </footer>
    <? wp_footer() ?>
  </body>
</html>
