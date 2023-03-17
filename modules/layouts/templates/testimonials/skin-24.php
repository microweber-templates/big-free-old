<?php

/*

type: layout

name: Testimonial 24

position: 24

categories: Testimonials

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>
    .mw-ziza-testimonials-item-faces-image-for-change {
        position: absolute;


    }

    .mw-testimonials-item-ziza-faces-image-for-change-1 {
        top: 69%;
        right: 353px;
        z-index: 1;
    }

    .mw-testimonials-item-ziza-faces-image-for-change-2 {
        right: 54%;
        bottom: 190px;
        z-index: 1;
    }

    .mw-testimonials-item-ziza-faces-image-for-change-3 {
        bottom: -37px;
        left: 16%;
        z-index: 1;
    }


    .mw-testimonials-item-ziza-faces-image-for-change-4 {
        bottom: 122px;
        right: 296px;
        z-index: 1;
    }

    .mw-testimonials-item-ziza-faces-image-for-change-5 {
        bottom: 104px;
        left: 107px;
        z-index: 1;
    }

    .mw-testimonials-item-ziza-faces-image-for-change-6 {
        bottom: 42px;
        right: 50%;
        z-index: 1;
    }

    .mw-testimonials-item-ziza-faces-image-for-change-7 {
        bottom: -105px;
        right: 58%;
        z-index: 1;
    }


    .mw-testimonials-item-ziza-faces-image-for-change-8 {
        bottom: 24px;
        right: 32%;
        z-index: 1;
    }

    .mw-testimonials-item-ziza-faces-image-for-change-big {
        top: -114px;
        right: 56%;
        z-index: 0;
        background-color: #FFF5DB;
        border-radius: 100%;
        width: 184px;
        height: 184px;
    }
</style>

<section class="section    <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-24-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
      <div class="row">
          <div class="text-center mb-5">
              <h2 class="mb-3">What our happy client say</h2>
              <p>Several selected clients, who already believe in our service.</p>
          </div>
          <div class="d-flex flex-wrap justify-content-center align-items-center">
              <div class="col-xl-8 col-12">
                  <module type="testimonials" template="skin-19" project_name="Testimonials 15"/>
              </div>


              <div class="col-12 col-xl-4 col-5 text-center ziza-testimonials-images">

                  <img class="" src="<?php print template_url(); ?>assets/img/layouts/ziza/testimonials-ziza-right.png"/>

              </div>
          </div>
      </div>
    </div>
</section>
