<?php

/*

type: layout

name: Content 80

position: 80

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

<style>

    @media (min-width: 998px) {
        .flower-content-80-green-box {
            height: 623px;
            width: 534px;
        }
    }


    .flower-content-80-green-box {
    background-color: #3CADA9;
    top: 0;
    left: 0;
    border-radius: 200px 0 0 0;
    z-index: 0;

    }

    .flower-box-into-image {
        top: 55px;
        left: -35px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        z-index: 1;
    }

    .content-80-btn {
        border-radius: 100px 0 100px 100px!important;
        background-color: #FF2359;
        color: white;
        padding: 20px 40px;
    }

    .flower-content-80-image {

        z-index: 1;
        top: 126px;
        right: 100px;
        width: 100%
    }
</style>


<section class="section <?php print $layout_classes; ?> section-content-80 edit safe-mode nodrop" field="layout-content-skin-80-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-4 mx-auto text-center text-lg-start d-flex align-items-center order-2 order-lg-1 position-relative" style="z-index: 1;">
               <div class="row">
                   <div class="allow-drop mb-3">
                       <div class="d-inline nodrop">
                           <h1 class="content-73-h1">Book Our Course & Improve Your Skill.</h1>
                           <br>
                       </div>

                       <p class="py-4" style="color: #58585D;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Tincidunt amet sit placerat diam praesent pharetra at.
                           <br> Gravida ornare mauris pretium tortor, ac in nulla eleifend.</p>
                       <br/>
                       <module type="btn" text="Contact Us" button_style="content-80-btn"/>

                   </div>

                   <div class="col-12 d-flex mt-7">
                       <div class="col-lg-6 px-3 mx-1" style="border-left: 1px solid #58585D;">
                           <div class="d-flex align-items-center">
                               <h3>586K+</h3>
                               <h6 class="ms-2">Student</h6>
                           </div>
                           <p>Lorem upsum dolor sit amet, consectetur adipiscing elit.</p>
                       </div>
                       <div class="col-lg-6 px-3 mx-1" style="border-left: 1px solid #58585D;">
                           <div class="d-flex align-items-center">
                               <h3>250+</h3>
                               <h6 class="ms-2">Course</h6>
                           </div>
                           <p>Lorem upsum dolor sit amet, consectetur adipiscing elit.</p>
                       </div>
                   </div>
               </div>
            </div>

            <div class="col-12 col-lg-4 mx-auto order-1 order-lg-2">
                <div class="text-center text-lg-center pb-5 allow-drop position-relative">
                   <div class="position-lg-absolute flower-content-80-green-box">

                        <img src="<?php print template_url(); ?>assets/img/layouts/flower/Rectangle-home-content-4.png" class="flower-content-80-image position-lg-absolute"/>
                   </div>
                    <div class="flower-box-into-image position-absolute d-flex align-items-center p-3">
                        <div class="d-flex justify-content-center align-items-center" style="background-color: #3417FF; width: 30px; height: 30px; border-radius: 5px;">
                            <i class="mdi mdi-checkbox-marked-circle-outline d-block safe-element " style="color: #ffffff; font-size: 18px;"></i>

                        </div>
                       <div class="ms-3">
                           <h6 class="text-start mb-0">Free Courses</h6>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
