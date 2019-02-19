<?
/**
 * Text Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-blocks.php' which is triggered by 'temp-blocks.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

 <section  class="block-text <?php the_sub_field('fond')?>"
 style="background-image: url(<? echo the_sub_field('image') ?>)">

 <div class="container">
        <!-- Title -->
        <?php if(get_sub_field('title') ) : ?>
            <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
        <?php endif; ?>
        <!-- Title -->
        <!-- Texte -->
        <?php if(get_sub_field('text') ) : ?>
            <div><?php echo get_sub_field('text'); ?></div>
        <?php endif; ?>
        <!-- Texte -->


        <?php if ( get_sub_field('asterisk') ) : ?>
                    <div class="asterisk"> <?php echo get_sub_field('asterisk'); ?> </div>
                    <?php endif; ?>


    </div>
 </section>