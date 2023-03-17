<?php

/*

type: layout

name: Feature 44

position: 44

categories: Features

*/

?>

<style>




</style>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-44-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-md-12 mx-auto">
                <h2 class="offset-md-1">We can help you from design <br> to production.</h2>
                <div class="d-flex justify-content-center align-items-center mt-5 flex-wrap">
                    <div class="col-lg-4 col-12 mx-auto d-flex justify-content-center align-itmems-center py-4">
                       <div>
                           <img height="120" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-2-1.png" class=""/>
                           <h6 class="my-4">Explore</h6>
                           <p class="mt-2 mb-0" style="font-size: 16px; color: #7E8495;">We shape brands through exploration
                               <br> and investigation, applying in-depth <br> research challange assumptions at turn.</p>
                       </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto d-flex justify-content-center align-itmems-center py-4">
                        <div>
                            <img height="120" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-2-2.png" class=""/>
                            <h6 class="my-4">Design</h6>
                            <p class="mt-2 mb-0" style="font-size: 16px; color: #7E8495;">Our design approach is to simplyfy.
                                <br> We embrace the joy that comes from <br> making something easy.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto d-flex justify-content-center align-itmems-center py-4">
                       <div>
                           <img height="120" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-2-3.png" class=""/>
                           <h6 class="my-4">Build</h6>
                           <p class="mt-2 mb-0" style="font-size: 16px; color: #7E8495;">Usng the latest technologies, we
                               <br> build with efficiency and skill, <br> creating flexible solutions that grow.</p>
                       </div>
                    </div>


                   <div class=" col-md-12 d-flex justify-content-center mx-auto mt-2">
                       <module type="btn" button_style="btn-outline-dark" button_size="btn-md px-5 py-4 mt-5" text="Get Started"/>
                   </div>
                </div>
            </div>


        </div>
    </div>
</section>
