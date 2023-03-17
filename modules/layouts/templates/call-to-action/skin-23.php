<?php

/*

type: layout

name: Call to action 23

position: 23

categories: Call to Action

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

    /*@media (min-width: 1000px) {*/
    /**/
    /*    .ziza-cta-box {*/
    /*        background-image: url('*/<?php //print template_url(); ?>/*assets/img/layouts/ziza/ziza-Group-75.png');*/
    /*        background-size: contain;*/
    /*    }*/
    /*}*/

    .ziza-cta-box {
        background-color: #F4F9FF;
        height: 400px;
        border-radius: 75px;
    }

    .ziza-cta-blue-box-right {
        position: absolute;
        height: 400px;
        background-color: #2639ED;
        border-radius: 200px 75px 75px 300px;
        width: 40%;
        right: 0;
        top: 0;
    }

    .ziza-cta-div-form .mb-3.d-flex.d-flex {
        margin-bottom: 0px!important;
    }

    .ziza-cta-div-form {
     padding: 10px;
        border-radius: 40px;
        background-color: white;
    }

    .ziza-cta-div-form .btn {
        border-radius: 40px;
        background-color: #2639ED!important;
        padding: 30px;

    }


    .ziza-cta-div-form input {
        border: none !important;
        padding-top: 0;
        padding-bottom: 0;
    }


    .ziza-cta-div-form input {
        padding: 30px;
        border-radius: 40px;
    }

    /*@media (min-width: 1000px) {*/
    /*    .ziza-cta-div-form .btn {*/

    /*        padding: 22px 3px!important;*/

    /*    }*/
    /*}*/

    .ziza-cta-group-73 {
        position: absolute;
        top: -59px;
        right: 120px;
        z-index: 0;
    }

    .ziza-cta-rectangle-32 {
        position: absolute;
        bottom: -36px;
        left: 114px;
        z-index: 0;
        background-color: #FFF5DB;
        width: 178px;
        height: 178px;
        border-bottom-left-radius: 100px;

    }
</style>

<section class="section ziza-cta-form-wrapper <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-23-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid position-relative">
        <img src="<?php print template_url(); ?>assets/img/layouts/ziza/ziza-cta-Group-73.png" class="ziza-cta-group-73"/>

        <div class="ziza-cta-rectangle-32"></div>
        <div></div>
        <div class="row col-xl-11 col-12 mx-auto align-items-center justify-content-center ziza-cta-box position-relative">
                <div class="ziza-cta-blue-box-right"></div>
            <div class="d-flex align-items-center justify-content-center ">
                <div class="col-lg-10 col-12 d-flex flex-wrap align-items-center justify-content-center position-relative" style="z-index: 4;">
                    <div class="col-12 col-lg-5 text-center text-lg-start d-flex align-items-center">
                        <div class="w-100 allow-drop">
                            <h2>Subscribe Newsletter</h2>
                            <p class="mb-0">I will update good news and promotion service not spam</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7 allow-drop d-flex align-items-center justify-content-lg-end justify-content-center mt-5 mt-lg-0 mx-auto">
                        <module class="w-100" type="contact_form" template="ziza-cta-form"/>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
