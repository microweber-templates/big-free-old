<?php

/*

type: layout

name: Header 30

position: 30

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


.mw-big-skin-3-background .bx-viewport, .mw-big-skin-3-background .bx-wrapper{
        border-radius: 15px;
}

</style>

<section class="section pb-0 edit safe-mode mb-8 pt-0" field="layout-header-skin-30-<?php print $params['id'] ?>" rel="module" style="background-color: #330d0d;">
    <div class="d-flex align-items-center mw-big-skin-3-background">
        <div class="container-fluid <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-lg-6 allow-drop py-4">
                            <h1 class="header-section-title" style="color: #ffffff; font-size: 96px; line-height:  106px;">Photography Helps People To See</h1>
                            <p class="header-section-p lead my-8" style="color: #ffffff; line-height: 40px;">From inspiring people’s stories to impactful messages, I create head - turning photograph that does the right things, in the right place , at the right time to unlock the possibility</p>

                            <div class="nodrop d-flex align-items-center justify-content-start cloneable">
                                <div class="me-2 my-2">
                                    <module type="btn" button_text="Get Started" button_style="btn btn-outline-primary px-5 py-4"/>
                                </div>
                                <div class="ms-2 my-2">
                                    <module type="btn" button_text="Lets Work With Me" button_style="btn btn-primary px-5 py-4"/>
                                </div>
                            </div>
                        </div>

                        <div class="ms-md-0 ms-md-5 col-12 col-xl-5 py-4 cloneable position-relative">
                           <module type="slider" template="bxslider-skin-3"/>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
