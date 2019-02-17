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

 <section class="block-sets bg-primary">
 <div class="container">
        <!-- Title -->
        <?php if(get_sub_field('title') ) : ?>
            <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
        <?php endif; ?>
        <!-- Title -->

<?php if ( have_rows('tabs') ) : $i =0; $y =0; $v= 0;?>
        <div class="row set">
            <div class="col-sm-6">
            <div class="tab-content" id="nav-tabContent">
                <?php while( have_rows('tabs') ) : the_row(); ?>
                    <div class="tab-pane fade <?php if($i == 0) {echo 'active show';} ?>" id="nav-<?php the_sub_field('title_set'); ?>" role="tabpanel" aria-labelledby="nav-<?php the_sub_field('title_set'); ?>-tab">
                    <p class="set-title">Set <?php the_sub_field('title_set'); ?></p>
                <p class="set-price"><?php the_sub_field('price_set'); ?> €</p>
                    </div>
                <?php $i++; endwhile ?>
                </div>

            </div>
            <div class="col-sm-6">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <?php while( have_rows('tabs') ) : the_row(); ?>
                        <a class="nav-item nav-link <?php if($y == 0) {echo 'active';} ?>" id="<?php the_sub_field('title_set'); ?>-tab" data-toggle="tab" href="#nav-<?php the_sub_field('title_set'); ?>" role="tab" aria-controls="nav-<?php the_sub_field('title_set'); ?>" aria-selected="true">
                            <?php the_sub_field('title_set'); ?>
</a>
                        <?php  $y++; endwhile ?>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <?php while( have_rows('tabs') ) : the_row(); ?>
                    <div class="tab-pane fade <?php if($v == 0) {echo 'active show';} ?>" id="nav-<?php the_sub_field('title_set'); ?>" role="tabpanel" aria-labelledby="nav-<?php the_sub_field('title_set'); ?>-tab">
                        <?php the_sub_field('text_set'); ?>
                    </div>
                <?php $v++; endwhile ?>
                </div>
            </div>
        </div>

<?php endif; ?>

    </div>
 </section>