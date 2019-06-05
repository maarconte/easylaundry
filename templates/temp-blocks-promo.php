<?
/**
 * Promo
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-blocks.php' which is triggered by 'temp-blocks.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

 <section class="block-promo" id="code-promo">
     <div class="container">
        <?php if(get_sub_field('title') ) : ?>
                      <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
            <?php endif; ?>
            <div class="header-promo"> 
                <div class="trait-promo-header"></div>
                <img class="visuel-promo" src="<? echo the_sub_field('image_promo') ?>"/>
            </div>
            
            <div class="row container-promo-block">
                <div class="col-md-6">
                     <?php if(get_sub_field('introduction') ) : ?>
                        <div class="description-promo"><?php echo get_sub_field('introduction'); ?></div>
                     <?php endif; ?>
                        <p class="notice-description-promo"><?php echo get_sub_field('notice_intro'); ?></p>
                </div>
                <div class="col-md-6">
                     <?php $form = get_sub_field('formulaire');?>
                            <?php if($form) : ?>

                                <?php echo $form; ?>

                     <?php endif; ?>
                </div>
            </div>  
     </div>       
 </section>

 <!-- <script>
  $(function() {

$('.floating-label .wpcf7-form-control-wrap input').on('focus', function(){
    document.getElementById("div span").className = "stay";
});

$('.floating-label input').on('blur change', function(){
  if( !$(this).val() == "" ){
    $(this).siblings('div span').addClass('stay');
  } else {
    $(this).siblings('div span').removeClass('stay');
  }
});

});
</script> -->

<script>

$(document).ready(function() {
  $(".your-name input").focus(function() {
      $('.label-name').addClass('stay');       
});
    
  
 $('.your-name input').blur(function(){
    if( !$(this).val() ) {
          $('.label-name').removeClass('stay');
    }
   });
});


$(document).ready(function() {
  $(".your-surname input").focus(function() {
      $('.label-surname').addClass('stay');       
});
    
  
$('.your-surname input').blur(function(){
    if( !$(this).val() ) {
          $('.label-surname').removeClass('stay');
    }
   });
});

$(document).ready(function() {
  $(".your-email input").focus(function() {
      $('.label-email').addClass('stay');       
});
    
  
$('.your-email input').blur(function(){
    if( !$(this).val() ) {
          $('.label-email').removeClass('stay');
    }
   });
});
</script>
