<?
/**
 * Texte-Image Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-blocks.php' which is triggered by 'temp-blocks.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

  <section id="block-text-image" class="block-text-image">
      <div class="container">

          <!-- Title -->
          <?php if(get_sub_field('title') ) : ?>
                      <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
               <?php endif; ?>
              <!-- Title -->
              <?php if ( have_rows('section') ) : ?>

                  <?php while( have_rows('section') ) : the_row(); ?>
   <div class="row align-items-center section">
       <div class="col-md-6 section-text">
       <?php the_sub_field('text'); ?>
       </div>
       <div class="col-md-6 section-image">
           <?php if ( get_sub_field('image') ) :
               $image = get_sub_field('image'); ?>
               <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />        <?php endif; ?>
       </div>
   </div>


                  <?php endwhile; ?>

              <?php endif; ?>
      </div>

 </section>