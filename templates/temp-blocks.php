<?
/**
 * Template for ACF flexible elements
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 *
 */
?>
<? /* Template Name: Blocks */ ?>

<? get_header(); ?>

<main id="blocks">

<? if (has_post_thumbnail()) : ?>
    <section>
      <div class="element teaser">
        <? the_post_thumbnail('medium_large', ['class' => 'modernizr-of d-block m-auto']); ?>
      </div>
    </section>
  <? endif?>

  <? if (have_posts()): while (have_posts()): the_post() ?>
    <? the_content()?>
    <? yupeach_blocks() ?>
  <? endwhile; endif ?>
  <script>
    $(document).ready(function(){

      $('.scrollToTop').click(function(){
          $('html, body').animate({scrollTop : 0},800);
          return false;
      });

    });
  </script>
</main>
<a class="scrollToTop"><i class="fa fa-long-arrow-alt-up" aria-hidden="true"></i></a>
<? get_footer() ?>
