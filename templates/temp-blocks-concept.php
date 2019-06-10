<?
/**
 * Concept
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-blocks.php' which is triggered by 'temp-blocks.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

 <section class="block-concept">
    <div class="photo_concept" style="background-image: url('<? echo the_sub_field('image') ?>');">
    </div>
    <div class="content_concept">
        <div class="inner">
            <?php if(get_sub_field('title') ) : ?>
                      <h2 class="section-title_concept"><?php echo get_sub_field('title'); ?></h2>
            <?php endif; ?>

            <?php if(get_sub_field('description') ) : ?>
                    <div class="section-text text-concept"> <?php echo get_sub_field('description'); ?></div>
            <?php endif; ?>

            <?php if (have_rows('button')) : ?>
                    <?php while ( have_rows('button') ) : the_row(); ?>
                        <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url') ) : ?>
                            <a href="<?php the_sub_field('url'); ?>" class="btn-concept"><i class="fa fa-play-circle"></i><span class="libelle-button"><?php the_sub_field('label'); ?></span></a>
                        <?php endif; ?>
                        <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url') ) : ?>
                            <a href="<?php the_sub_field('int_url'); ?>" class="btn-concept"><i class="fa fa-play"></i><span class="libelle-button"><?php the_sub_field('label'); ?></span></a>
                        <?php endif; ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
    </div>
 </section>