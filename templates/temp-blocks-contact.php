<?
/**
 * Contact Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-blocks.php' which is triggered by 'temp-blocks.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

  <section id="block-contact" class="block-contact">
    <div class="container">
      <!-- Title -->
      <?php if(get_sub_field('title') ) : ?>
  <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
<?php endif; ?>
<!-- Title -->
  <div class="contact-form">
    <!-- Contact form -->
    <?php $form = get_sub_field('contact_form');?>
    <?php if($form) : ?>

          <?php echo $form; ?>

    <?php endif; ?>
    <!-- Contact form -->
  </div>
  <div class="contact-infos row">
      <?php if (get_field('adress', 'option') ) : ?>
        <div class="contact-infos-address col-md-4 col-sm-12">
          <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/Icone_map.png)" alt="yupeach_adresse">
              <p><?php echo get_field('adress','option'); ?></p>
        </div>
        <?php endif; ?>
      <?php if (get_field('contact_mail', 'option') ) : ?>
        <div class="contact-infos-mail col-md-4 col-sm-12">
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/Icone_message.png)" alt="yupeach_mail">
              <p><?php echo get_field('contact_mail','option'); ?></p>
        </div>
        <?php endif; ?>
      <?php if (get_field('phone', 'option') ) : ?>
        <div class="contact-infos-phone col-md-4 col-sm-12">
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/Icone_telephone.png)" alt="yupeach_phone">
              <p><?php echo get_field('phone','option'); ?></p>
        </div>
        <?php endif; ?>
    </div>
    </div>
 </section>