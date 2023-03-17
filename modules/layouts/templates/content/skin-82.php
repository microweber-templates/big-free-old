<?php

/*

type: layout

name: Content 82

position: 82

categories: Content

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-82-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row col-xl-10 mx-auto">

            <h2>Our Best Service</h2>
            <p class="mb-5 mt-3" style="color: #8C93A4;">We present the best digital marketing service carried out <br> professionally</p>
           <div class="col-12 col-lg-6 col-xl-5 col-12 allow-drop">
               <div class="img-as-background" style="height: 100%;">
                   <img src="<?php print template_url(); ?>assets/img/layouts/action/action-content-82.png" class="position-relative "/>
               </div>
           </div>

           <div class="col-12 col-lg-6 col-xl-7 col-12 pl-8 allow-drop">
               <div class="col-12 my-4 nodrop cloneable">
                   <div class="d-flex align-items-center mb-4">
                       <h2 class="me-5" style="color: #DCDCDC;">01</h2>
                       <h4>Research</h4>
                   </div>
                   <div class="d-flex align-items-center flex-wrap">
                       <p class="col-xl-4 col-md-6 col-12" style="color: #8C93A4;">Prototyping</p>
                       <p class="col-xl-4 col-md-6 col-12" style="color: #8C93A4;">User Journey Design</p>
                       <p class="col-xl-4 col-md-6 col-12" style="color: #8C93A4;">User Research</p>
                   </div>
               </div>
               <div class="col-12 my-4 nodrop cloneable">
                   <div class="d-flex align-items-center mb-4">
                       <h2 class="me-5" style="color: #DCDCDC;">02</h2>
                       <h4>Product Design</h4>
                   </div>
                   <div class="d-flex align-items-center flex-wrap">
                       <p class="col-xl-4 col-md-6 col-12" style="color: #8C93A4;">Platform Architecture</p>
                       <p class="col-xl-4 col-md-6 col-12" style="color: #8C93A4;">Web & Mobile Applications</p>
                       <p class="col-xl-4 col-md-6 col-12" style="color: #8C93A4;">Service here</p>
                   </div>
               </div>
               <div class="col-12 my-4 nodrop cloneable">
                  <div class="d-flex align-items-center mb-4">
                      <h2 class="me-5" style="color: #DCDCDC;">03</h2>
                       <h4>Visual Design</h4>
                  </div>
                   <div class="d-flex align-items-center flex-wrap">
                       <p class="col-xl-4 col-md-6 col-12" style="color: #8C93A4;">Design Systems Analysis</p>
                       <p class="col-xl-4 col-md-6 col-12" style="color: #8C93A4;">Communication Design</p>
                       <p class="col-xl-4 col-md-6 col-12" style="color: #8C93A4;">Nice Design</p>
                   </div>
               </div>
           </div>
       </div>
    </div>
</section>
