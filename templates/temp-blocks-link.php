<?
/**
 * Link Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-blocks.php' which is triggered by 'temp-blocks.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */

 $bg = get_sub_field('fond');
 ?>

  <section class="block-link <?php the_sub_field('fond')?>"
  style="background-image: url(<? echo the_sub_field('image') ?>)"
  >
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-7 block-title-link">
                <?php if(get_sub_field('title') ) : ?>
                    <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
                <?php endif; ?>
                <!-- Title -->

                <!-- Text -->
                <?php if(get_sub_field('text') ) : ?>
                    <div class="section-text"> <?php echo get_sub_field('text'); ?></div>
                <?php endif; ?>
                <!-- Text -->
                <!-- Button -->
                <?php if (have_rows('button')) : ?>
                    <?php while ( have_rows('button') ) : the_row(); ?>
                        <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url') ) : ?>
                            <a href="<?php the_sub_field('url'); ?>" class="btn btn-outline-primary"><?php the_sub_field('label'); ?></a>
                        <?php endif; ?>
                        <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url') ) : ?>
                            <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-outline-primary"><?php the_sub_field('label'); ?></a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- Button -->
                <?php if ( get_sub_field('asterisk') ) : ?>
                    <div class="asterisk"> <?php echo get_sub_field('asterisk'); ?> </div>
                    <?php endif; ?>

            </div>

        </div>
      </div>
</section>