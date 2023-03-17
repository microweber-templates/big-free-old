<?php

/*

type: layout

name: Feature 45

position: 45

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

<style>
    .flower-features-circles {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        padding: 30px;
    }

    .features-45-btn {
        border-radius: 100px 0 100px 100px!important;
        background-color: #FF2359;
        color: white;
        padding: 20px 40px;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop mt-xl-0 mt-8" field="layout-features-skin-45-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-md-12 mx-auto">
                <div class=" d-flex justify-content-center flex-wrap text-center mx-auto">

                    <div class="col-12 col-md-6 col-12 mx-auto">
                        <div class="text-center text-lg-center pb-5 allow-drop position-relative">
                            <h2 class="text-xl-start mb-0">Why Online <br> Learning Method</h2>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-12 mx-auto text-center text-xl-start d-flex align-items-center justify-content-center">
                        <div class="allow-drop">

                            <p class=" mb-4">Studying online teaches important time management skills, which makes it easier for you to find a good work-studt balance</p>
                            <br/>
                            <module type="btn" text="Get Started" button_style="features-45-btn"/>
                        </div>
                    </div>
                </div>
                    <div class="d-flex justify-content-center align-items-center mt-5 flex-wrap">
                        <div class="col-xl-4 col-lg-6 col-12 mx-auto d-flex justify-content-xl-start justify-content-center align-itmems-center py-4">
                           <div>
                               <div class="d-flex align-items-center justify-content-center flower-features-circles" style="background-color: #2752a830;">
                                <i class="mw-micon-solid-Old-Clock" style="color: #2752A8; font-size: 30px;"></i>
                               </div>
                               <h5 class="my-4">Flexible Time</h5>
                               <p class="mt-2 mb-0" style="font-size: 16px; color: #7E8495;">Online education allows teachers and
                                   <br> students to set their own pace of learning, <br> and there is added flexibility in setting a
                                   <br> schedule that fits everyone’s agenda.</p>
                           </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-12 mx-auto d-flex justify-content-center align-itmems-center py-4">
                            <div>
                                <div class="d-flex align-items-center justify-content-center flower-features-circles" style="background-color: #f170a030;">
                                    <i class="mw-micon-solid-Medal-3" style="color: #F170A0; font-size: 30px;"></i>
                                </div>
                                <h5 class="my-4">Certificate</h5>
                                <p class="mt-2 mb-0" style="font-size: 16px; color: #7E8495;">Online education allows teachers and
                                    <br> students to set their own pace of learning, <br> and there is added flexibility in setting a
                                    <br> schedule that fits everyone’s agenda.</p>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-12 mx-auto d-flex justify-content-xl-end justify-content-center align-itmems-center py-4">
                           <div>
                               <div class="d-flex align-items-center justify-content-center flower-features-circles" style="background-color: #3badab30;">
                                <i class="mw-micon-solid-Recycling-2" style="color: #40A9A6; font-size: 30px;"></i>
                               </div>
                               <h5 class="my-4">Access Anywhere</h5>
                               <p class="mt-2 mb-0" style="font-size: 16px; color: #7E8495;">Online education allows teachers and
                                   <br> students to set their own pace of learning, <br>  and there is added flexibility in setting a
                                   <br> schedule that fits everyone’s agenda.</p>
                           </div>
                        </div>
                    </div>
            </div>


        </div>
    </div>
</section>
