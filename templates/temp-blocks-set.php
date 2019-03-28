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

 <section class="block-sets">
 <div class="container">
        <!-- Title -->
        <?php if(get_sub_field('title') ) : ?>
            <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
        <?php endif; ?>
        <!-- Title -->

<?php if ( have_rows('tabs') ) : $i =0; $y =0; $v=0;?>
    <div class="set">
        <div class="row">
            <nav class="col-md-6 ml-auto mr-0">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <?php  while( have_rows('tabs') ) : the_row();  ?>
                    <a class="nav-item nav-link <?php if($y == 0) {echo 'active';} ?>" id="<?php the_sub_field('title_set'); ?>-tab" data-toggle="tab" data-target="#nav-<?php echo $y; ?>" role="tab" aria-controls="#nav-<?php echo $y; ?>" aria-selected="true">
                        <?php the_sub_field('title_set'); ?>
                    </a>
                    <?php  $y++; endwhile ?>
                </div>
            </nav>
        </div>
                <div class="tab-content">
                    <?php while( have_rows('tabs') ) : the_row(); ?>
                    <div id="nav-<?php echo $i; ?>" class="tab-pane fade <?php if($i == 0) {echo 'active show';} ?>"  role="tabpanel" aria-labelledby="nav-<?php the_sub_field('title_set'); ?>-tab">

                    <div class="row">
                            <div class="col-sm-6 block-prix">
                                <p class="set-title"><?php the_sub_field('title_set'); ?></p>
                                <p class="set-price"><?php the_sub_field('price_set'); ?> €</p>
                            </div>
                            <div class="col-sm-6 block-nav-set">
                            <?php the_sub_field('text_set'); ?>
                                        <!-- Button -->
                                        <?php if (have_rows('button')) : ?>
                                            <?php while ( have_rows('button') ) : the_row(); ?>
                                                <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url') ) : ?>
                                                    <a href="<?php the_sub_field('url'); ?>" class="btn btn-outline-dark"><?php the_sub_field('label'); ?></a>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url') ) : ?>
                                                    <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-outline-dark"><?php the_sub_field('label'); ?></a>
                                                <?php endif; ?>
                                            <?php $v++; endwhile; ?>
                                        <?php endif; ?>
                                        <!-- Button -->
                            </div>
                        </div>
                        </div>
                    <?php $i++; endwhile ?>

                </div>
    </div>

<?php endif; ?>

    </div>
 </section>
