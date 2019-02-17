<?
/**
 * Services Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-blocks.php' which is triggered by 'temp-blocks.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>
<section id="block-services" class="block-services bg-secondary">

        <div class="container">
              <!-- Title -->
              <?php if(get_sub_field('title') ) : ?>
                    <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
              <?php endif; ?>
              <!-- Title -->
              <div class="row">
                    <!-- Service -->
                    <?php if (have_rows('service') ) : ?>
                          <?php while( have_rows('service') ) : the_row(); ?>
                          <div class="col-md-12 col-sm-12 service">
                                <div class="row">
                                    <div class="col-4">
                                          <!-- Icon -->
                                          <?php if (get_sub_field('icon') ) :
                                                $image = get_sub_field('icon');?>
                                                <img class="service-icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                          <?php endif; ?>
                                          <!-- Icon -->
                                    </div>
                                    <div class="col-8">
                                          <!-- Icon title -->
                                          <?php if(get_sub_field('title') ) : ?>
                                                <h4 class="service-title"><?php echo get_sub_field('title'); ?></h4>
                                          <?php endif; ?>
                                          <!-- Icon title -->
                                          <!-- Texte -->
                                          <?php if(get_sub_field('text') ) : ?>
                                                <p class="service-text"> <?php echo get_sub_field('text'); ?></p>
                                          <?php endif; ?>
                                          <!-- Texte -->
                                    </div>
                                </div>


                          </div>
                          <? endwhile; ?>
                    <? endif;?>
                    <!-- Service -->
              </div>
        </div>
 </section>