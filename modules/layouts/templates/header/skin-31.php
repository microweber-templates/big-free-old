<?php

/*

type: layout

name: Header 31

position: 31

categories: Header

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-5';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section  py-0 edit safe-mode" field="layout-header-skin-31-<?php print $params['id'] ?>" rel="module" >
    <div class="d-flex align-items-center mw-big-skin-3-background position-relative">
        <div class="container-fluid mb-8 <?php print $layout_classes; ?>">
            <div class="row col-12">
                <div class="col-12 col-xl-10 mx-auto">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-xl-7 allow-drop py-4">
                            <h1 class="header-section-title" style=" font-size: 55px;">You’ve Got A Business, <br> We Have Got Brilliant
                                <br> Minds</h1>

                        </div>

                        <div class="col-12 col-xl-5 justify-content-end py-4ss cloneable">

                            <p class="header-section-p lead mb-7" style="color: #8C93A4;">Founded in 2022 by a team of professional
                                <br> designers, developers & creative thinkers</p>

                           <div class="d-flex">
                               <div class=" me-3">
                                   <module type="btn" button_style="btn btn-primary" button_size="btn-md px-4 py-3" text="Get Started"/>

                               </div>
                               <div class="me-1 me-3">
                                   <module type="btn" button_style="btn btn-primary" button_size="btn-md px-4 py-3" text="Play Video"/>

                               </div>
                           </div>

                        </div>


                    </div>

                    <div class="row mt-5 mx-auto">
                        <div class="col-xl-4 col-lg-8 col-12 justify-content-center d-flex mx-auto p-3">
                            <img src="<?php print template_url(); ?>assets/img/layouts/action/action-header-1img.png" class="w-100"/>
                        </div>
                        <div class="col-xl-4 col-lg-8 col-12 justify-content-center d-flex mx-auto p-3">
                            <img src="<?php print template_url(); ?>assets/img/layouts/action/action-header-2img.png" class="w-100"/>
                        </div>
                        <div class="col-xl-4 col-lg-8 col-12 justify-content-center d-flex mx-auto p-3">
                            <img src="<?php print template_url(); ?>assets/img/layouts/action/action-header-3img.png" class="w-100"/>
                        </div>
                    </div>

                    <div class="row mt-8">
                        <div class="col-xl-3 col-lg-8 col-12 p-3 mx-auto text-center cloneable">
                           <div style="background-color: #3641B7; padding: 50px 70px; ">
                               <h1 style="color: #ffffff; font-size: 50px;">99%</h1>
                               <h6 style="color: #ffffff;">Client retetion </h6>
                               <p style="color: #E1E1E1;">100% satisfy clients in Our Work</p>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-8 col-12 p-3 mx-auto text-center cloneable">
                            <div style="background-color: #FF5670; padding: 50px 65px; ">
                                <h1 style="color: #ffffff; font-size: 50px;">12+</h1>
                                <h6 style="color: #ffffff;"> Years of experience</h6>
                                <p style="color: #E1E1E1;">The world wide best experience</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-8 col-12 p-3 mx-auto text-center cloneable">
                           <div style="background-color: #FDB400; padding: 50px 65px; ">
                               <h1 style="color: #ffffff; font-size: 50px;">80+</h1>
                               <h6 style="color: #ffffff;"> Professionals </h6>
                               <p style="color: #E1E1E1;">Best and professional our work</p>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-8 col-12 p-3 mx-auto text-center cloneable">
                           <div style="background-color: #000000; padding: 50px 65px; ">
                               <h1 style="color: #ffffff; font-size: 50px;">60M</h1>
                               <h6 style="color: #ffffff;">Project done </h6>
                               <p style="color: #E1E1E1;">99% succesfully all Project done</p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
