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

<section class="block-simulation">
  <div class="container">
    <div class="row">

      <div class="block-simulation-text col-sm-5">
        <p>Audit de conformité - diagnostic et recommandations</p>
        <h1 class="block-simulation-text-title">
          Evaluez la probité de votre démarche RSE pour améliorer votre crédibilité et image de marque
        </h1>
        <button class="popup-trigger btn btn-primary">Pré-diagnostic sans inscription</button>
      </div>

      <div class="block-simulation-img col-sm-7">
        <img src="https://demo.florian-breton.fr/wp-content/uploads/2018/10/Microsoft-Surface-Studio_Yupeach3.png">
      </div>
    </div>
  </div>
</section>

 <div id="popup-window">
  <div class="popup-close x-close">&times;</div>
    <div class="container-in">

         <?php
         $form = get_sub_field('contact_form');
         if($form) :
               echo $form;
         endif;
         ?>

</div>
</div>