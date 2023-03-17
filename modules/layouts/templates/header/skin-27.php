<?php

/*

type: layout

name: Header 27

position: 27

categories: Header

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>
    .photography-orange-rectangle {
        position: absolute;
        width: 92px;
        height: 120px;
        background-color: #FF7A01;
        z-index: 0;
    }

    .photography-orange-rectangle.photography-rectangle-bottom {
        bottom: -10px;
        left: -20px;

    }


    .photography-orange-rectangle.photography-rectangle-top {
        top: -10px;
        right: -20px;
    }

    .photography-content-27-bottom-box {
        background-color: #ffffff;
        top: 100px;
        z-index: 1;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
</style>

<section class="section pb-0 edit safe-mode mb-8 pt-0" field="layout-header-skin-27-<?php print $params['id'] ?>" rel="module" style="background-color: #002632;">
    <div class="d-flex align-items-center mw-big-skin-3-background">
        <div class="container-fluid <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-lg-6 allow-drop py-4">
                            <h1 class="header-section-title" style="color: #ffffff; font-size: 96px; line-height:  106px;">Photography Helps People To See</h1>
                            <p class="header-section-p lead my-8" style="color: #ffffff; line-height: 40px;">From inspiring people’s stories to impactful messages, I create head - turning photograph that does the right things, in the right place , at the right time to unlock the possibility</p>

                            <div class="nodrop d-flex align-items-center justify-content-start cloneable">
                                <module type="btn" button_text="Let's Work With Me" button_style="btn btn-primary px-5 py-4"/>
                            </div>
                        </div>

                        <div class="ms-md-0 ms-md-5 col-10 col-sm-10 col-md-8 col-xl-5 py-4 cloneable position-relative">
                            <div class=" photography-orange-rectangle photography-rectangle-top"> </div>
                            <img src="<?php print template_url(); ?>assets/img/layouts/photography/photography-Rectangle-5285.png" class="w-100" style="position: relative; z-index: 1;"/>
                            <div class=" photography-orange-rectangle photography-rectangle-bottom"> </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-10 col-12 photography-content-27-bottom-box d-flex justify-content-center align-items-center flex-wrap p-5 mx-auto text-center position-relative">
                    <div class="col-lg-3 col-sm-6 col-12 cloneable">
                        <h1>11+</h1>
                        <p style="color: #8F8BA5;">Years Of Experienced</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cloneable">
                        <h1>250+</h1>
                        <p style="color: #8F8BA5;">Complete Project</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cloneable">
                        <h1>235+</h1>
                        <p style="color: #8F8BA5;">Happy Customers</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cloneable">
                        <h1>12+</h1>
                        <p style="color: #8F8BA5;">Country Visited</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
