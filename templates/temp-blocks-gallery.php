<?
/**
 * Gallery Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-blocks.php' which is triggered by 'temp-blocks.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>
  <section class="block-gallery">
      <div class="container">
          <!-- Title -->
          <?php if(get_sub_field('title') ) : ?>
             <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
      <?php endif; ?>
     <!-- Title -->
  <?php

$images = get_sub_field('images');
$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
  <div class="grid">
      <?php foreach( $images as $image ): ?>

          <a href="<?php echo $image['url']; ?>" target="_blank">
                   <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
              </a>

      <?php endforeach; ?>
  </div>
<?php endif; ?>
      </div>
 </section>