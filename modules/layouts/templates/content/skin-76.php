<?php

/*

type: layout

name: Content 76

position: 76

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
    .ziza-content-74-rectangle {
        position: absolute;
        bottom: -35px;
        right: 141px;
        width: 178px;
        height: 178px;
        background-color: #FFF5DB;
        border-bottom-right-radius: 100px;
    }

    .ziza-content-74-eclipse {
        position: absolute;
        left: -52px;
        top: 0;
        background-color: #DAE9FF;
        border-radius: 100px;
        height: 129px;
        width: 129px;
    }

    .ziza-content-74-dot-ornament {
        position: absolute;
        bottom: 86px;
        left: -36px;
    }


    .content-76-btn {
        background-color: #2639ED!important;
        color: #ffffff !important;
        border-color: #2639ED!important;
        border-radius: 30px !important;
        font-size: 18px !important;
        padding: 1em 2.1em !important;
    }

</style>


<section class="section <?php print $layout_classes; ?> pt-3 section-content-73 edit safe-mode nodrop" field="layout-content-skin-76-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid pe-lg-0">
        <div class="row">
            <div class="col-12 col-lg-5 mx-auto text-center text-lg-start d-flex align-items-center position-relative order-lg-1 order-2">
                <img src="<?php print template_url(); ?>assets/img/layouts/ziza/ziza-Dot-Ornament.png" class="ziza-content-74-dot-ornament"/>

                <div class="allow-drop" style="z-index: 1;">
                    <div class="d-inline nodrop">
                        <h1 class="content-73-h1">A Digital Product Agency</h1>
                        <br>
                    </div>

                    <p class="content-73-p">Leading digital agency with solid design and development expertise. <br>
                        We build readymade websites, mobile applications, <br> and elaborate online business services.
                    </p>
                    <br/>
                    <module type="btn" text="Get Started" button_style="content-76-btn" button_size="" button_text="Contact Now"/>
                </div>
            </div>

            <div class="col-12 col-lg-6 mx-auto position-relative me-0 pe-0 order-lg-2 order-1 mb-lg-0 mb-5">

                <div class="ziza-content-74-eclipse"></div>

                <div class="ziza-content-74-rectangle"></div>

                <div class="text-center text-lg-center pb-5 allow-drop position-relative">
                    <img src="<?php print template_url(); ?>assets/img/layouts/ziza/ziza-image-8.jpg" class="w-100"/>

                </div>
            </div>

            <div class="col-xl-12 px-lg-0 d-flex flex-wrap justify-content-center mx-auto py-5 mt-3 order-3">

                <div class="col-xl-3 col-12 py-lg-0 pt-5 text-lg-start text-center">
                   <h2>Our Client</h2>
                    <p style="color: #757575;">Several selected clients, who already <br> believe in our service.</p>
                </div>

                <div class="col-xl-8 col-12 d-flex flex-wrap justify-content-center align-items-center">
                    <div class="col-lg-3 col-md-6 col-12 py-lg-0 py-3 text-center"><img height="50" width="auto" src="<?php print template_url(); ?>assets/img/layouts/ziza/ziza-googl-logo.png" class=""/></div>
                    <div class="col-lg-3 col-md-6 col-12 py-lg-0 py-3 text-center"><img height="50" width="auto" src="<?php print template_url(); ?>assets/img/layouts/ziza/ziza-airbnb-logo.png" class=""/></div>
                    <div class="col-lg-3 col-md-6 col-12 py-lg-0 py-3 text-center"><img height="40" width="auto" src="<?php print template_url(); ?>assets/img/layouts/ziza/ziza-Group.png" class=""/></div>
                    <div class="col-lg-3 col-md-6 col-12 py-lg-0 py-3 text-center mt-lg-3"><img height="50" width="auto" src="<?php print template_url(); ?>assets/img/layouts/ziza/ziza-amazon-logo.png" class=""/></div>
                </div>

            </div>
        </div>

    </div>
</section>
